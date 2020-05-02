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
                            <h6>Alert Receiving Information: </h6>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone number:</label>
                                <div>
                                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12">
                                <small>Format: 123-456-7890</small>
                                </div>
                                
                            </div>
                            <div class="form-group" form method="post">


                                <?php
                                if (isset($_POST['sendmail'])) {
                                    require '../vendor/phpmailer/PHPMailerAutoload.php';

                                    define('EMAIL', ''); // add personal details of the sender's email
                                    define('PASS', ''); // add personal details of the sender's email password

                                    $mail = new PHPMailer;

                                    $mail->SMTPDebug = 4;                                 // Enable verbose debug output

                                    $mail->isSMTP();                                      // Set mailer to use SMTP
                                    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                    $mail->Username = EMAIL;                              // SMTP username
                                    $mail->Password = PASS;                               // SMTP password
                                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                    $mail->Port = 587;                                   // TCP port to connect to

                                    $mail->setFrom(EMAIL, 'Email Test');
                                    //$mail->addAddress($_POST['exampleInputEmail1']);     // Add a recipient
                                    $mail->addAddress('memeti.endrit@gmail.com');

                                    $mail->addReplyTo(EMAIL);

                                    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                    $mail->isHTML(true);                                  // Set email format to HTML

                                    $mail->Subject = 'Here is the subject';
                                    $mail->Body    = '<div style="border:2px solid red;"This is the HTML message body <b>in bold!</b></div>';
                                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                    if (!$mail->send()) {
                                        echo 'Message could not be sent.';
                                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                                    } else {
                                        echo 'Message has been sent';
                                    }
                                }
                                ?>

                                <a href="/pages/notifications.php">
                                    <input type="submit" name="sendmail" class="btn btn-lg btn-success btn-block pull-right" value="Save" />
                                </a>
                                <hr><hr><hr>
                                <a href="/pages/notifications.php">
                                    <input type="submit" name="sendmail" class="btn btn-lg btn-success btn-block pull-right" value="Go Back" />

                                </a>



                            </div>

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
