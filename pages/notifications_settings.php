<?php

/***********************************************************************************************************
 *
 *	@author Team_6
 *
 *	CC BY-NC-AS UTA FabLab 2016-2020
 *	FabApp V 1.0
 *
 *	DESCRIPTION: .
 *
 ***********************************************************************************************************/

include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/header.php');

if (!$staff){
    //Not Authorized to see this Page
    $_SESSION['error_msg'] = "You are unable to view this page.";
    header('Location: /index.php');
    exit();
}

$auto_off = true; ///try changing this
//Retrive all Materials available for the PolyPrinter
$device_mats = Materials::getDeviceMats(2);


?>

<!-- Title on the tab -->
<title><?php echo $sv['site_name']; ?> Notifications Settings</title>

<!-- /#page-wrapper start -->
<div id="page-wrapper">

    <!-- /.row 1 start -->
    <div class="row">

        <!-- /.col-md-12 start-->
        <div class="col-md-12">
            <h1 class="page-header">Notifications Setting</h1>
        </div>
        <!-- /.col-md-12 end-->

    </div>
    <!-- /.row 1 end -->

    <!-- /.row 2 start when sign in -->
    <div class="row">
        <!-- /.col-md-8 start -->
        <div class="col-md-8">
            <!-- panel start -->
            <div class="panel panel-default">
                <!-- /.panel-heading start-->
                <div class="panel-heading">
                    Ticket Notification Settings
                </div>
                <!-- /.panel-heading end -->

                <!-- panel body start -->
                <div class="panel-body collapse in" id="swapPanel">
                    Receive Notifications -
                    <form action="" method="post">
                        <input type="checkbox" name="formSettings[]" value="O" checked/>When Ticket is Opened<br />
                        <input type="checkbox" name="formSettings[]" value="R" checked/>When Ticket is Ready<br />
                        <input type="checkbox" name="formSettings[]" value="B" checked/>When Ticket has a Balance Due<br />
                        <input type="checkbox" name="formSettings[]" value="C" checked/>When Ticket Closed<br />
                        <input type="checkbox" name="formSettings[]" value="W" checked/>Import Contact info from Wait Queue

                        <div class = "row">
                            <input type="submit" name="formSubmit" value="Submit" class="btn btn-primary" align="center" />
                        </div>
                    </form>
                </div>
                <!-- panel body end -->



            <!-- panel end -->
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-trash fa-fw"></i>Remove Alert Info
            </div>
                    <!-- /.panel-heading -->
            <div class="panel-body">
                <div style="text-align: center">
                    <form action="notifications_settings.php" method="post">
                        <button type = submit class="btn btn-danger" name="selfRemoveBtn" >
                                Remove My Contact Info from All My Tickets
                        </button>
                        <?php if($staff->getRoleID() >= $sv['clear_queue']) { ?>
                        <button type = submit class="btn btn-danger" name="alertRemoveBtn">
                                Clear All Transaction Alert Profiles
                        </button>
                        <button type = submit class="btn btn-danger" name="oldRemoveBtn" >
                                Clear All Alert Profiles Older than 24 hours
                        </button>
                        <?php } ?>
                    </form>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.col-md-8 -->
    </div>
</div>
<!-- /#page-wrapper end -->


<!--  -->

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['formSubmit']))
    {
        echo $staff->setAlerts($_POST['formSettings']);
    }
    if (isset($_POST['selfRemoveBtn']))
    {
        echo Alerts::removeAlertWithOp($staff->getOperator());
    }
    if($staff->getRoleID() >= $sv['clear_queue'])
    {
        if(isset($_POST['alertRemoveBtn']))
        {
            echo Alerts::removeAllAlerts();
        }
        elseif(isset($_POST['oldRemoveBtn']))
        {
            echo Alerts::removeOldAlerts();
        }
    }
}



//Standard call for dependencies
include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/footer.php');
?>
