<!DOCTYPE html>
<!--
 *   CC BY-NC-AS UTA FabLab 2016-2018
 *   FabApp V 0.91
 -->
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FabApp, track your equipment">
	<meta name="author" content="UTA FabLab">
	<link rel="shortcut icon" href="/images/fa-icon.png" type="image/png">

	<link href="/vendor/blackrock-digital/css/sb-admin-2.css" rel="stylesheet">
	<link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="/vendor/bs-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="/vendor/datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/vendor/fabapp/fabapp.css" rel="stylesheet">
	<link href="/vendor/fontawesome/css/all.min.css" rel="stylesheet">
	<link href="/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	<link href="/vendor/morrisjs/morris.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" id='navbar'>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" id="navbar-brand" href="http://fablab.uta.edu"><img src="/images/FLlogo_143.png" type="image/png"></a>
			</div>
			<!-- /.navbar-header -->
			<ul class="nav navbar-top-links navbar-right">
				<!--php class Staff if not logged in-->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="loginlink">
						<i class="fas fa-sign-in-alt fa-lg"></i> <i class="fas fa-caret-down"></i>
					</a>

					<ul class="dropdown-menu dropdown-alerts">
						<form role="form" class="form-horizontal" method="POST" action="" autocomplete="off">
							<div class="form-group">
								<label for="email" class="col-sm-3 control-label">
									NetID</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="netID" name="netID" placeholder="NetID" value="" />
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1" class="col-sm-3 control-label">
									Password</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" name="pass" placeholder="Password" />
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-sm-offset-1">
									<button type="submit" class="btn btn-primary btn-sm" name="signBtn" onclick="loadingModal()">
										Sign In</button>
									<a href="http://">Forgot your password?</a>
								</div>
							</div>
						</form>
					</ul>
					<!-- /.dropdown-login -->
				</li>
				<!--php class Staff if logged in-->

			</ul>
			<!-- /.navbar-top-links -->
			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li>
							<a href="/index.php"><i class="fas fa-ticket-alt"></i> FabApp</a>
						</li>
						<li>
							<a href="/pages/tools.php"><i class="fas fa-toolbox"></i> Tools</a>
						</li>
						<li>
							<a href="/pages/notifications.php"><i class="fas fa-toolbox"></i> Notifications</a>
						</li>

					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>

		<title> DASHBOARD </title>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-header">DASHBOARD</h1>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- Wait Queue -->
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fas fa-cubes fa-lg"></i> Device Status
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover" id="indexTable">
								<thead>
									<tr class="tablerow">
										<th align="right">Ticket</th>
										<th>Device</th>
										<th>Start Time</th>
										<th>Est Remaining Time</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
				<!-- /.col-md-8 -->
				<div class="col-md-4">
				</div>
				<!-- /.col-md-4 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->

	<div id="popModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" id="modal-title">TM</h4>
				</div>
				<div class="modal-body">
					<p id="modal-body"> - </p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div id="loadingModal" class="modal fade">
		<div class="modal-dialog modal-sm">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body text-center">
					<i class="fas fa-spinner fa-pulse fa-3x"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->

	<!-- dev details -->
	<div class="col-sm-12">
		IP addy - 127.0.0.1</div>

	<script type="text/javascript">
		setTimeout(function() {
			window.location.href = "/index.php"
		}, 301000);
	</script>
	<script type="text/javascript" src="/vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="/vendor/moment/moment.min.js"></script>
	<script type="text/javascript" src="/vendor/blackrock-digital/js/sb-admin-2.js"></script>
	<script type="text/javascript" src="/vendor/datatables/js/dataTables.min.js"></script>
	<script type="text/javascript" src="/vendor/bs-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="/vendor/fabapp/fabapp.js?v=3"></script>
	<script type="text/javascript" src="/vendor/metisMenu/metisMenu.min.js"></script>
	<script type="text/javascript" src="/vendor/morrisjs/morris.min.js"></script>
	<script type="text/javascript" src="/vendor/raphael/raphael.min.js"></script>
</body>

</html>
<script>
	$('#indexTable').DataTable({
		"iDisplayLength": 25,
		"order": []
	});

	function change_group() {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("processOperator").innerHTML = this.responseText;
			}
		};

		xmlhttp.open("GET", "/pages/sub/getWaitQueueID.php?val=" + document.getElementById("devGrp").value, true);
		xmlhttp.send();
	}

	var str;
	for (var i = 1; i <= 0; i++) {
		str = "#waitTable_" + i
		$(str).DataTable({
			"iDisplayLength": 10,
			"order": []
		});
	}
</script>