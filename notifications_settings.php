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
$auto_off = true;
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
                    Settings
                </div>
                <!-- /.panel-heading end -->

                <!-- panel body start -->
                <div class="panel-body collapse in" id="swapPanel">


                    <div class="form-check">
                        <div>
                            <h6>Receive Alerts By:</h6>
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Text Message
                            </label>

                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Email
                            </label>
                        </div>

                        <div>
                            <h6>Receive Alerts When:</h6>
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Change in Wait Queue Position
                            </label>

                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Change in Ticket Balance
                            </label>
                        </div>

                        <div>
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Change in 3rd Print Status
                            </label>

                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                On Ticket Creation
                            </label>
                        </div>

                        <div>
                            <h6>Alert Receiving Information: </h6>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone number:</label>
                                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                    <small>Format: 123-456-7890</small>
                                </div>

                                <a class="btn btn-primary pull-right" href="/pages/notifications.php" role="button">Go Back</a>
                                <a class="btn btn-primary pull-right" href="/pages/notifications.php" role="button">Save</a>


                            </form>

                        </div>

                    </div>

                </div>
                <!-- panel body end -->



            </div>
            <!-- panel end -->
        </div>
        <!-- /.col-md-8 -->



    </div>
</div>
<!-- /#page-wrapper end -->




<!--  -->

<?php
//Standard call for dependencies
include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/footer.php');
?>