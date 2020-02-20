<?php  session_start();
if(isset($_SESSION['user_login']))
{ ?>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dashboard - Admin</title>

		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/local.css" />

		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- you need to include the shieldui css and js assets in order for the charts to work -->
		<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
		<link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

		<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
		<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
	</head>
	<body>
		<div id="wrapper">
			  <?php 
				include("navigation.php");
				?>
				
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1>Dashboard </h1>
						<div class="alert alert-dismissable alert-warning">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							Welcome to the admin dashboard! of SKCC Acadmey Feel free to add ,delete and modify all pages and informations  to your needs. 
							<br />
							
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-10">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>  Home page </h3>
							</div>
							<div class="panel-body">
								<div id="shieldui-grid1"></div>
								<p>This is the Main Home page of Admin Dashboard.And database name is "school".</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<p>For Teacher Privileges:</p>
						<p>Id:159632</p>
						<p>Password:123456</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Description of All the databases used.</h3>
							</div>
							<div class="panel-body">
								<ul class="server-stats">
									<li>
										<div class="key pull-right">aboutus</div>
										<div class="stat">
											<div class="info">Save information of all about us page.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">admin</div>
										<div class="stat">
											<div class="info">Keeps admins name & password.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">contact</div>
										<div class="stat">
											<div class="info">Store the feedback and contact form data.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">event</div>
										<div class="stat">
											<div class="info">Saves events informtion that is displayed on event page and also some part in home page.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">gallery</div>
										<div class="stat">
											<div class="info">Saves gallery informtion that is displayed on gallery page.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">notice</div>
										<div class="stat">
											<div class="info">Saves notice informtion that is displayed on notice page and also some part in home page.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">result</div>
										<div class="stat">
											<div class="info">Keeps student result.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">slider</div>
										<div class="stat">
											<div class="info">Saves slider informtion that is displayed on home page.</div>
										</div>
								    </li><hr><li>
										<div class="key pull-right">stdtrcer</div>
										<div class="stat">
											<div class="info">Keeps student transfer certificate.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">student</div>
										<div class="stat">
											<div class="info">Keeps student name & student id.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">studentinfo</div>
										<div class="stat">
											<div class="info">Keep student informaton.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">teacher</div>
										<div class="stat">
											<div class="info">Keeps teacher login id & password.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">team</div>
										<div class="stat">
											<div class="info">Saves information of all the management team.</div>
										</div>
								    </li><hr>
									<li>
										<div class="key pull-right">tutors</div>
										<div class="stat">
											<div class="info">Saves information of all the faculties.</div>
										</div>
								    </li><hr>
								</ul>
							</div>
							
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row"><div class="col-lg-12">
						<header>
							<ul class="nav nav-tabs">
								<li class="active">
									<a data-toggle="tab" href="#">Quick Links For Add</a>
								</li>
						    </ul>
							<ul>
							<a href="addaboutus.php"><li>Add About Us</li></a>
							<a href="addgallery.php"><li>Add Gallery </li></a>
							<a href="addslider.php"><li>Add Slider </li></a>
							<a href="addevent.php"><li>Add Events </li></a>
							<a href="addnotice.php"><li>Add Notice </li></a>
							<a href="addtutors.php"><li>Add Teacher </li></a>
							<a href="addteam.php"><li>Add Team </li></a>
							</ul>
						</header>
						</div></div>
					<div class="row"><div class="col-lg-12">
						<header>
							<ul class="nav nav-tabs">
								<li class="active">
									<a data-toggle="tab" href="#">Quick Links For Show</a>
								</li>
						    </ul>
							<ul>
							<a href="showaboutus.php"><li>Show About Us</li></a>
							<a href="showcontact.php"><li>Show Contact </li></a>
							<a href="showgallery.php"><li>Show Gallery </li></a>
							<a href="showslider.php"><li>Show Slider </li></a>
							<a href="showevent.php"><li>Show Events </li></a>
							<a href="shownotice.php"><li>Show Notice </li></a>
							<a href="showtutors.php"><li>Show Teacher </li></a>
							<a href="showteam.php"><li>Show Team </li></a>
							</ul>
						</header>
						</div>
						</div>
					<div class="row"><div class="col-lg-12">
						<header>
							<ul class="nav nav-tabs">
								<li class="active">
									<a data-toggle="tab" href="#">More Privileges for teacher activity</a>
								</li>
						    </ul>
							<ul>
								<a href="addteacherlogin.php"><li>Add teacher login</li></a>
								<a href="../student/login.php"><li>Add student</li></a>
								<a href="../student/login.php"><li>Add result</li></a>
								<a href="../student/login.php"><li>Add attendance by student id</li></a>
								<a href="../student/login.php"><li>Add student attendance by excel sheet</li></a>
								<a href="../student/login.php"><li>Add student transfer certificate</li></a>
								<a href="../student/login.php"><li>Show student</li></a>
								<a href="../student/login.php"><li>Show result</li></a>
								<a href="../student/login.php"><li>Show attendance</li></a>
								<a href="../student/login.php"><li>Show student transfer certificate</li></a>
							</ul>
						</header>
						</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		<!-- /#wrapper -->

	   
	</body>
	</html>
<?php 
}
else
{
	header("Location:login.php");
}

?>
