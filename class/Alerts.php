<?php


include_once ($_SERVER['DOCUMENT_ROOT']."/class/site_variables.php");

class Alerts{


    public static function newAlert($operator, $d_id, $phone, $carrier, $email){
        global $mysqli;
        //add regex

        if( self::inAlerts($operator, $d_id))
        {
            echo 'I am in alerts!!!';
            if(!isset($phone) && !isset($email))
            {
                if ($mysqli->query("
                    UPDATE `alerts`
                    SET `valid` = 'Y',  `Start_date` = CURRENT_TIMESTAMP,  `t_id` = NULL
                    WHERE `Operator` = $operator AND `dev_id` = $d_id;
                ")){
                return;
                } else {
                    return ("<div class='alert alert-danger'>Error adding alert!</div>");
                }

            }
            elseif(!isset($phone))
            {
                if ($mysqli->query("
                    UPDATE `alerts`
                    SET `valid` = 'Y',  `Start_date` = CURRENT_TIMESTAMP,  `t_id` = NULL, `Op_phone`=$phone, `carrier` = $carrier
                    WHERE `Operator` = $operator AND `dev_id` = $d_id;
                ")){
                return;
                } else {
                    return ("<div class='alert alert-danger'>Error adding alert!</div>");
                }

            }
            elseif(!isset($email))
            {
                if ($mysqli->query("
                    UPDATE `alerts`
                    SET `valid` = 'Y',  `Start_date` = CURRENT_TIMESTAMP,  `t_id` = NULL, `Op_email`=$email
                    WHERE `Operator` = $operator AND `dev_id` = $d_id;
                ")){
                return;
                } else {
                    return ("<div class='alert alert-danger'>Error adding alert!</div>");
                }

            }
            else
            {
                if ($mysqli->query("
                    UPDATE `alerts`
                    SET `valid` = 'Y',  `Start_date` = CURRENT_TIMESTAMP,  `t_id` = NULL, `Op_phone`=$phone, `carrier` = $carrier, `Op_email`=$email
                    WHERE `Operator` = $operator AND `dev_id` = $d_id;
                ")){
                return;
                } else {
                    return ("<div class='alert alert-danger'>Error adding alert!</div>");
                }

            }
            
        }



        if ($mysqli->query("
                INSERT INTO alerts 
                  (`dev_id`, `Operator`, `Start_date`, `Op_email`, `Op_phone`, `carrier`) 
                VALUES
                    ('$d_id', '$operator',CURRENT_TIMESTAMP, '$email', '$phone', '$carrier');
            ")){        
                
                return; //$mysqli->insert_id;
            } else {
                return ("<div class='alert alert-danger'>Error updating alert info!</div>");
            }
    }

    public static function attachTran($operator, $d_id, $trans_id){
        global $mysqli;
        
        if ($result = $mysqli->query("
            UPDATE `alerts`
                SET `t_id` = $trans_id, `Start_date` = CURRENT_TIMESTAMP
                WHERE `Operator` = $operator AND `dev_id` = $d_id AND `t_id` IS NULL;
        "))
        {

        return; //$mysqli->insert_id;
        } else {
            return ("<div class='alert alert-danger'>Error Connecting Transaction to Alert</div>");
        }

    }

    public static function removeAlertWithTrans($trans_id){
        global $mysqli;

        if ($result = $mysqli->query("
            DELETE FROM `alerts`
                WHERE `t_id` = $trans_id;
        "))
        {

        return; //$mysqli->insert_id;
        } else {
            return ("<div class='alert alert-danger'>Error Deleting Alert</div>");
        }

    }

    public static function removeAlertWithOp($operator){
        global $mysqli;

        if ($result = $mysqli->query("
            DELETE FROM `alerts`
                WHERE `Operator` = $operator;
        "))
        {

        return; //$mysqli->insert_id;
        } else {
            return ("<div class='alert alert-danger'>Error Deleting Alert</div>");
        }

    }


    public static function sendAlertWithTran($trans_id, $subject, $message){
        global $mysqli;
        
        // This function queries the carrier table and sends an email to all combinations

        //Query the phone number and email
        if ($result = $mysqli->query("
            SELECT `Op_phone` AS `Phone`, `Op_email` AS `Email`, `carrier` AS `Provider` 
            FROM `alerts`
            WHERE `t_id` = $trans_id
        ")) 
        {
            $row = $result->fetch_assoc();
            $phone = $row['Phone'];
            $email = $row['Email'];
            $provider = $row['Provider'];

        
            if (!empty($phone)) {
                if ($result = $mysqli->query("
                    SELECT `email`
                    FROM `carrier`
                    WHERE `provider` = '$provider';
                ")) {
                    while ($row = $result->fetch_assoc()) {
                        list($a, $b) = explode('number', $row['email']);

                        Notifications::SendMail("".$phone."".$b."", $subject, $message);
                    }
                } else {
                    echo("Carrier query failed!");
                }
            }
            
            if (!empty($email)) {
                Notifications::SendMail($email, $subject, $message);
            }
    
        }
    }

    public static function inAlerts($op, $de_id){
        global $mysqli;
        return mysqli_num_rows($mysqli->query(" 
                                SELECT * 
                                FROM `alerts` 
                                WHERE `Operator`=$op AND `dev_id`=$de_id;"))>0;
    }
}
?>