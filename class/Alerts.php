<?php


include_once ($_SERVER['DOCUMENT_ROOT']."/class/site_variables.php");

class Alerts{


    public static function newAlert($operator, $d_id, $phone, $carrier, $email){
        global $mysqli;
        //add regex

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

    public static function removeAlertWiithTrans($trans_id){
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
}
?>