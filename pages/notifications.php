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

if (!isset($staff)) {
    //Not Authorized to see this Page
    $_SESSION['error_msg'] = "You are unable to view this page.";
    header('Location: /index.php');
    exit();
}

?>

<!-- Title on the tab -->
<title><?php echo $sv['site_name']; ?> Notifications</title>

<!-- /#page-wrapper start -->
<div id="page-wrapper">

    <!-- /.row 1 start -->
    <div class="row">

        <!-- /.col-md-12 start-->
        <div class="col-md-12">
            <h1 class="page-header">Notifications</h1>
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
                    Recent
                    <div class="pull-right">
                        <button class="btn btn-xs" data-toggle="collapse" data-target="#swapPanel"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
                <!-- /.panel-heading end -->

                <!-- panel body start -->
                <div class="panel-body collapse in" id="swapPanel">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Wait Queue</h5>
                            <p class="card-text">2nd in Line: ETA 5min</p>
                            <a href="#" class="btn btn-primary">Refresh</a>
                        </div>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Balance</h5>
                            <p class="card-text">Ticket: </p>
                            <a href="#" class="btn btn-primary">Refresh</a>
                        </div>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">3D Print Status</h5>
                            <p class="card-text">2nd in Line: ETA 5min</p>
                            <a href="#" class="btn btn-primary">Refresh</a>
                        </div>

                    </div>


                </div>
                <!-- panel body end -->

                <!-- panel footer start -->
                <div class="panel-footer pull-right">
                    <a href="/pages/notifications_settings.php">Notifications Settings</a>
                </div>

            </div>
            <!-- panel end -->
        </div>
        <!-- /.col-md-8 -->



    </div>
    <!-- /.row 2 end when signed in-->




    <!-- /.row 2 start when not signed in-->
    <div class="row">

    <!-- /.col-md-8 start -->
    <!-- <div class="col-md-8">

            <div class="container-md ">
                <h6 class="font-italic">Please sign in to access notifications</h6>


                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>


        </div> -->
    <!-- /.col-md-8 -->



    <!-- </div> -->
    <!-- /.row 2 end -->

</div>
<!-- /#page-wrapper end -->




<!--  -->

<?php
//Standard call for dependencies
include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/footer.php');
?>