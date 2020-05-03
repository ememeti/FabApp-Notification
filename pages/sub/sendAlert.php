<?php 
include_once ($_SERVER['DOCUMENT_ROOT'].'/pages/header.php');


if (!$staff || $staff->getRoleID() < $sv['LvlOfStaff']){
    //Not Authorized to see this Page
    $_SESSION['error_msg'] = "You are unable to view this page.";
    header('Location: /index.php');
    exit();
}

if (isset($_GET['t_id'])) {

    // If the message is set then send a message to the user with this queue ID
    if (isset($_GET['message'])) {
        Alerts::sendAlertWithTran($_REQUEST['t_id'],"FabApp Notification", $_REQUEST['message']);
    }

    // else {
    //     removeFromQueue($_REQUEST['q_id']);
    // }
    if ($_REQUEST['loc'] == 0) {
        header("Location:/index.php");
    }
    if ($_REQUEST['loc'] == 1) {
        header("Location:/pages/notifications.php");
    }
    
}
?>