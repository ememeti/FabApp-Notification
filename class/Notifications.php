<?php
class Notifications {
    private $operator;
    private $phone_num;
    private $email;
    private $last_contacted;
    private $mail;
    
    
    public static function listCarriers(){
        global $mysqli;
        $list = "";
        
        if ($result = $mysqli->query("
            SELECT `provider`
            FROM `carrier`
            WHERE 1;
        ")){
            while($row = $result->fetch_assoc()){
                $list .= "$row[provider], ";
            }
            return substr($list, 0, -2);
        } else {
            return "Error Listing Providers";
        }
        
    }

    public static function sendNotification($q_id, $subject, $message, $markContact) {
        global $mysqli;
        
        $hasbeenContacted = $setLastContacted = false;
        // This function queries the carrier table and sends an email to all combinations

            //Query the phone number and email
        if ($result = $mysqli->query("
            SELECT `Op_phone` AS `Phone`, `Op_email` AS `Email`, `carrier` AS `Provider` 
            FROM `wait_queue`
            WHERE `Q_id` = $q_id AND valid='Y'
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

                        $hasbeenContacted = self::SendMail("".$phone."".$b."", $subject, $message);
                        if ($markContact == 1) {
                            $setLastContacted = true;
                        }
                    }
                } else {
                    echo("Carrier query failed!");
                }
            }
            
            if (!empty($email)) {
                $hasbeenContacted = self::SendMail($email, $subject, $message);

                if ($markContact == 1) {
                    $setLastContacted = true;
                }
            }
    
            if ($setLastContacted == true) {
                // Update the database to display that the student has been contacted
                if ($mysqli->query("
                    UPDATE `wait_queue`
                    SET `last_contact` = CURRENT_TIMESTAMP
                    WHERE `Q_id` = $q_id AND valid='Y'
                ")) {
                }
            }
            return $hasbeenContacted;
        }
    }
    
    public static function SendMail($to, $subject, $message){
        // $headers =  'From: no-reply@fablab.uta.edu' . "\r\n".
        //             'Reply-To: no-reply@fablab.uta.edu' . "\r\n".
        //             'X-Mailer: PHP/' . phpversion();
        // if ( mail($to, $subject, $message, $headers) ){
        //     return true;
        // } else {
        //     return false;
        // }

       //Above code commented out and bleow code added so that this function can use php mailer
       //allowing for testing without making email server on local machine(s)
       //this is not needed on fabapp server since mail server is already set up.
//********************For testing change only */
        require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/vendor/phpmailer/PHPMailerAutoload.php');
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'fabblabtest@gmail.com';            
        $mail->Password = 'Fablab123';
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587;

        $mail->addAddress($to);
        $mail->addReplyTo('fabblabtest@gmail.com');

        $mail->Subject = $subject;
        $mail->Body    = $message;

        if($mail->send()) {
            return true;
        }
        else
            return false;
    //********************testing block end****************** */
    }
    
    public static function setLastNotified($q_id){
        global $mysqli;
        if ($mysqli->query("
            UPDATE `wait_queue`
            SET `last_contact` = CURRENT_TIMESTAMP
            WHERE `Q_id` = $q_id AND valid='Y'
        ")) {
        }
    } 
}
?>
