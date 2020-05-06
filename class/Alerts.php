<?php
/*Alerts class for handling functions with transaction notifications (alerts) and alerts table
*
*
*/

include_once ($_SERVER['DOCUMENT_ROOT']."/class/site_variables.php");

class Alerts{


    public static function alertFromWait($op, $d, $ph, $car, $e){
        $settings = self::getSettings($op);

        $has_A = strpos($settings, 'W') !== false;

        if(!$has_A){
            return self::newAlert($op, $d, $ph, $car, $e);
        }
        else
            return ("<div class='alert alert-danger'>User has set to not import contact info from Wait Queue</div>");

    }

    //create a new alert given input operator, device id, email phone number
    //checks if there is already an existing alert with those specs, and if so repurposes it to save space
    public static function newAlert($operator, $d_id, $pho, $car, $ema){
        global $mysqli;
        //add regex

        if( self::inAlerts($operator, $d_id))
        {
            if(empty($pho) && empty($ema))
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
            elseif(empty($ema))
            {
                if ($mysqli->query("
                    UPDATE `alerts`
                    SET `valid` = 'Y',  `Start_date` = CURRENT_TIMESTAMP,  `t_id` = NULL, `Op_phone`='$phone', `carrier` = '$car'
                    WHERE `Operator` = $operator AND `dev_id` = $d_id;
                ")){
                return;
                } else {
                    return ("<div class='alert alert-danger'>Error adding alert!</div>");
                }

            }
            elseif(empty($pho))
            {
                if ($mysqli->query("
                    UPDATE `alerts`
                    SET `valid` = 'Y',  `Start_date` = CURRENT_TIMESTAMP,  `t_id` = NULL, `Op_email`= '$ema'
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
                    SET `valid` = 'Y',  `Start_date` = CURRENT_TIMESTAMP,  `t_id` = NULL, `Op_phone`='$pho', `carrier` = '$car', `Op_email`= '$ema'
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
                    ($d_id, $operator,CURRENT_TIMESTAMP, '$ema', '$pho', '$car');
            ")){        
                
                return; //$mysqli->insert_id;
            } else {
                return ("<div class='alert alert-danger'>Error adding alert info!</div>");
            }
    }

    //attach transaction id to existing alert
    public static function attachTran($operator, $d_id, $trans_id){
        global $mysqli;
        
        if ($result = $mysqli->query("
            UPDATE `alerts`
                SET `t_id` = $trans_id, `Start_date` = CURRENT_TIMESTAMP
                WHERE `Operator` = $operator AND `dev_id` = $d_id;
        "))
        {
        self::sendAlert('O', $trans_id, "Fabapp Notification: Ticket Opened", "Ticket Number $trans_id has been opened");
        return; //$mysqli->insert_id;
        } else {
            return ("<div class='alert alert-danger'>Error Connecting Transaction to Alert</div>");
        }

    }

    //remove alert information given transaction id
    public static function removeAlertWithTrans($trans_id){
        global $mysqli;

        if ($result = $mysqli->query("
            UPDATE `alerts`
            SET `Op_email`=NULL, `Op_phone`=NULL, `carrier` = NULL, `valid` = 'N'
            WHERE `t_id` = $trans_id;
        "))
        {

        return ("<div class='alert alert-danger'>Alert Removed</div>"); //$mysqli->insert_id;
        } else {
            return ("<div class='alert alert-danger'>Error Deleting Alert</div>");
        }

    }

    //remove alert information given operator
    public static function removeAlertWithOp($operator){
        global $mysqli;

        if ($result = $mysqli->query("
            UPDATE `alerts`
            SET `Op_email`=NULL, `Op_phone`=NULL, `carrier` = NULL, `valid` = 'N'
            WHERE `Operator` = $operator;
        "))
        {

        return ("<div class='alert alert-danger'>Alerts Removed</div>"); //$mysqli->insert_id;
        } else {
            return ("<div class='alert alert-danger'>Error Deleting Alert</div>");
        }

    }

    //remove all alert information
    public static function removeAllAlerts(){
        global $mysqli;

        if ($result = $mysqli->query("
            UPDATE `alerts`
            SET `Op_email`=NULL, `Op_phone`=NULL, `carrier` = NULL, `valid` = 'N'
            WHERE `valid` = 'Y';
        "))
        {

        return ("<div class='alert alert-danger'>All Alerts Removed</div>"); //$mysqli->insert_id;
        } else {
            return ("<div class='alert alert-danger'>Error Deleting Alert</div>");
        }

    }

    //remove all alerts older than 24 hours old
    public static function removeOldAlerts()
    {
        global $mysqli;
        

        if($mysqli->query("
            UPDATE `alerts`
            SET `Op_email`=NULL, `Op_phone`=NULL, `carrier` = NULL, `valid` = 'N'
            WHERE TIMESTAMPDIFF(HOUR, Start_date, CURRENT_TIMESTAMP) > 24"))
            {
                return ("<div class='alert alert-danger'>Old Alerts Deleted</div>");
            }
            else{
                return ("<div class='alert alert-danger'>Error Deleting Old Alerts</div>");
            }
    }

    //function to check if user has notification allowed
    //settingLetter corresponds with notification being sent
    //O for ticket opening, C for ticket closing, B for ticket balance, R for ticket ready (button)
    public static function sendAlert($settingLetter, $t_id, $subject, $message){
        global $mysqli;
        $result = $mysqli->query("
            SELECT operator
            FROM `alerts`
            WHERE `t_id` = $t_id
        ");
        if(mysqli_num_rows($result) == 0)
            return ("<div class='alert alert-danger'>No Contact Info Stored for Transaction $t_id</div>");
        $operator = $result->fetch_assoc();
        
        $settings = self::getSettings($operator['operator']);

        $has_A = strpos($settings, $settingLetter) !== false;

        if(!$has_A){
            return self::sendAlertWithTran($t_id, $subject, $message);
        }
        else
            return ("<div class='alert alert-danger'>Alert Against User Settings</div>");

    }
        

    //function to send an alert given transaction id
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
        else
            return ("<div class='alert alert-danger'>Could not find alerts entry to send to</div>");
    }

    //function to tell wether a given operator-device id combination is in the alerts table
    public static function inAlerts($op, $de_id){
        global $mysqli;
        return mysqli_num_rows($mysqli->query(" 
                                SELECT * 
                                FROM `alerts` 
                                WHERE `Operator`=$op AND `dev_id`=$de_id;"))>0;
    }

    //function to retreive the settings tring from the users table
    //if a letter is in the string, that means that the user has it set to not receive notifications of that type
    public static function getSettings($op){
        global $mysqli;

        $result = $mysqli->query(" 
                                SELECT a_set
                                FROM `users` 
                                WHERE `operator`=$op ;");
        return $result->fetch_assoc()['a_set'];
    }

}
?>