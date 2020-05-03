<?php


include_once ($_SERVER['DOCUMENT_ROOT']."/class/site_variables.php");

class Alerts{


    public static function newAlert($operator, $d_id, $phone, $carrier, $email){
        global $mysqli;

        if ($mysqli->query("
                INSERT INTO alerts 
                  (`dev_id`, `Operator`, `Start_date`, `Op_email`, `Op_phone`, `carrier`) 
                VALUES
                    ('$d_id', '$operator',CURRENT_TIMESTAMP, '$email', '$phone', '$carrier');
            ")){        
                
                return $mysqli->insert_id;
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

        return $mysqli->insert_id;
        } else {
            return ("<div class='alert alert-danger'>Error Connecting Transaction to Alert</div>");
        }

    }

    public static function removeAlert($trans_id){
        global $mysqli;

        if ($result = $mysqli->query("
            DELETE FROM `alerts`
                WHERE `t_id` = $trans_id;
        "))
        {

        return $mysqli->insert_id;
        } else {
            return ("<div class='alert alert-danger'>Error Deleting Alert</div>");
        }

    }
}
?>