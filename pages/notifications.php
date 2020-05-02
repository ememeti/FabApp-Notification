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

$operator = $staff -> getOperator();

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

    <div class="row">
    <?php if (Wait_queue::isOperatorWaiting($operator)) { ?>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fas fa-list-ol"></i>  Wait Queue
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <ul class="nav nav-tabs">
                            <!-- Load all device groups as a tab that have at least one device in that group -->
                            <?php if ($result = $mysqli->query("
            SELECT DISTINCT `device_group`.`dg_id`, `device_group`.`dg_desc`, `device_group`.`granular_wait`
            FROM `device_group`
            LEFT JOIN `wait_queue`
            ON `wait_queue`.`Devgr_id` = `device_group`.`dg_id`
            WHERE `wait_queue`.`valid`= 'Y' AND `wait_queue`.`Operator` = $operator;
        ")) {
                                $count = 0;
                                while ($row = $result->fetch_assoc()) { ?>
                                    <li class="<?php if ($count == 0) echo "active";?>">
                                        <a <?php echo("href=\"#".$row["dg_id"]."\""); ?>  data-toggle="tab" aria-expanded="false"> <?php echo($row["dg_desc"]); ?> </a>
                                    </li>
                                <?php 
                                if ($count == 0){
                                    //create a way to display the first wait_queue table tab by saving which dg_id it is to variable 'first_dgid'
                                    $first_dgid = $row["dg_id"];  
                                }   
                                $count++;                                                                  
                                }
                            } ?>
                        </ul>
                        <div class="tab-content">
                            <?php
                            if ($Tabresult = Wait_queue::getTabResult()) {
                                while($tab = $Tabresult->fetch_assoc()){
                                    $number_of_queue_tables++;
                                    
                                    // Calculate the wait queue timer by granular wait of a device group
                                    if ($tab["granular_wait"] == 'Y'){
                                        Wait_queue::calculateDeviceWaitTimes(); 
                                    } else {
                                        Wait_queue::calculateWaitTimes();
                                    } 

                                    // Give all of the dynamic tables a name so they can be called when their tab is clicked ?>
                                    <div class="tab-pane fade <?php if ($first_dgid == $tab["dg_id"]) echo "in active";?>" <?php echo("id=\"".$tab["dg_id"]."\"") ?> >
                                        <table class="table table-striped table-bordered table-hover" <?php echo("id=\"waitTable_$number_of_queue_tables\"") ?>>
                                            <thead>
                                                <tr class="tablerow">
                                                    <th><i class="fa fa-th-list"></i> Queue Number</th>
                                                    <th><i class="fa fa-th-list"></i> Contact Info</th>
                                                    <?php if ($tab["dg_id"]==2) { ?> <th><i class="far fa-flag"></i> Device Group</th><?php } ?>
                                                    <?php if ($tab["dg_id"]!=2) { ?> <th><i class="far fa-flag"></i> Device</th><?php } ?>
                                                    <th><i class="far fa-clock"></i> Time Left</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php // Display all of the students in the wait queue for a device group
                                                if ($result = $mysqli->query("
                                                        SELECT *
                                                        FROM wait_queue WQ JOIN device_group DG ON WQ.devgr_id = DG.dg_id
                                                        LEFT JOIN devices D ON WQ.Dev_id = D.d_id
                                                        WHERE valid = 'Y' and WQ.devgr_id=$tab[dg_id]
                                                        ORDER BY Q_id;
                                                ")) {
                                                    while ($row = $result->fetch_assoc()) { ?>
                                                        <tr class="tablerow">

                                                            <!-- Wait Queue Number -->
                                                            <td align="center"><?php echo($row['Q_id']) ?></td>

                                                            <!-- Operator ID --> 
                                                            <td>
                                                                <?php $user = Users::withID($row['Operator']);?>
                                                                <a class="<?php echo $user->getIcon()?> fa-lg" title="<?php echo($row['Operator']) ?>"  href="/pages/waitUserInfo.php?q_id=<?php echo $row["Q_id"]?>&loc=1"></a>
                                                                <?php if (!empty($row['Op_phone'])) { ?> <i class="fas fa-mobile"   title="<?php echo ($row['Op_phone']) ?>"></i> <?php } ?>
                                                                <?php if (!empty($row['Op_email'])) { ?> <i class="fas fa-envelope" title="<?php echo ($row['Op_email']) ?>"></i> <?php } ?>
                                                            </td>

                                                            <!-- Device Group Name -->
                                                            <?php if ($tab["dg_id"]==2) { ?> <td align="center"><?php echo($row['dg_desc']) ?></td><?php } ?>
                                                            <?php if ($tab["dg_id"]!=2) { ?> <td align="center"><?php echo($row['device_desc']) ?></td><?php } ?>


                                                            <!-- Start Time, Estimated Time, Last Contact Time -->
                                                            <td>
                                                                <!-- Start Time -->
                                                                <i class="far fa-calendar-alt" align="center" title="Started @ <?php echo( date($sv['dateFormat'],strtotime($row['Start_date'])) ) ?>"></i>

                                                            <!-- Estimated Time -->
                                                            <?php if (isset($row['estTime'])) {
                                                                $str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $row["estTime"]);
                                                                sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);
                                                                $time_seconds = $hours * 3600 + $minutes * 60 + $seconds + $sv["wait_period"];
                                                                $temp_time = $hours * 3600 + $minutes * 60 + $seconds;
                                                                if (isset($row['last_contact'])){
                                                                    $time_seconds = $sv["wait_period"] - (time() - strtotime($row['last_contact']) );
                                                                    if ($time_seconds <= 0 ){
                                                                        echo("<span style=\"color:red\" align=\"center\" id=\"q$row[Q_id]\">"."  $row[estTime]  </span>" );
                                                                    } else {
                                                                        echo("<span style=\"color:orange\" align=\"center\" id=\"q$row[Q_id]\">"."  $row[estTime]  </span>" );
                                                                    }
                                                                    //array_push($device_array, array("q".$row["Q_id"], $time_seconds));
                                                                } elseif ($temp_time == "00:00:00") {
                                                                    echo("<span align=\"center\" id=\"q$row[Q_id]\">"."  $row[estTime]  </span>" );
                                                                    //do nothing keeping time at 00:00:00
                                                                } else {
                                                                    echo("<span align=\"center\" id=\"q$row[Q_id]\">"."  $row[estTime]  </span>" );
                                                                    //array_push($device_array, array("q".$row["Q_id"], $time_seconds));
                                                                }
                                                            } ?>

                                                            <!-- Last Contact Time -->
                                                            <?php if (isset($row['last_contact'])) { ?> 
                                                                <i class="far fa-bell" align="center" title="Last Alerted @ <?php echo(date($sv['dateFormat'], strtotime($row['last_contact']))) ?>"></i> <?php
                                                            } ?>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
        <!-- /.col-md-8 -->
    <?php } ?> 
    </div>

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