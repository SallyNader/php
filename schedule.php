<?php
session_start();

if (isset($_SESSION['user'])) {
?>
<html>
	<head>
		<title>Bellnet | Schedule</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="shortcut icon" href="icon.ico">

		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" href="icomoon/style.css">
		<link rel="stylesheet" href="css/1140.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/navbar-style.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/viewuser,admin.css">
	</head>


	<body>


			<section class="header2" id="header">
						<br>
						<ul class="menu">
							<a class="scroll" href="index.html"><li>Home</li></a>
							<a class="scroll" href="#courses"><li>Courses</li></a>
							<a class="scroll" href="#services"><li>Services</li></a>
							<a class="scroll" id="image" href="indes.html"><li><img src="imgs/logo.png" alt=""></li></a>
							<a class="scroll" href="#tools"><li>Tools</li></a>
							<a class="scroll" href="#about"><li>About</li></a>
							<a class="scroll" href="#contact"><li>Contact Us</li></a>
						</ul>

						<form action="">
							<div class="container12">
								<div class="prefix3 column6">
									<input type="text" placeholder="Search">
								</div>
							</div>
						</form>
						</section><!--******************** header section end ********************-->

			               <div class="top_divider"><img src="imgs/top_divider.png" alt=""></div>
				<br><br><br><br><br>
				<section class="mainbody">


			<!--***************** Left part *****************-->
			<section class="Left-part">
				<div class="container12">

					<div class=" omega alpha column3">
						<div class="userinfo">
							<div class="profile-pic"><p>Change</p></div>
							<h3><?php echo $_SESSION['user'] ?></h3>
							<br>
							<br>
							<br>
							<a href="#Edit">Edit</a>
						</div>
						<div class="instructor-option">
							<br>
							<p>Instructor</p>
							<hr>
							<br>
							<ul>
								<li>
									<a href=""><span class="icon-plus"></span><span>Create Class</span></a>
								</li>

								<li>
									<a href=""><span class="icon-list"></span><span>Manage Courses</span></a>
								</li>

								<li>
									<a href=""><span class="icon-books"></span><span>Content Library</span></a>
								</li>

								<li>
									<a href=""><span class="icon-stats"></span><span>Create Test</span></a>
								</li>

								<li>
									<a href=""><span class="icon-microphone"></span><span>Schedule live Class</span></a>
								</li>

								<li>
									<a href=""><span class="icon-screen3"></span><span>Manage live classes</span></a>
								</li>
							</ul>

						</div>

					</div>

										<div class="omega alpha column9" >

								<div class="schedule-table">

									<table  class="table1">
										<tr>
										<th>Schedule ID</th>
										<th>time</th>
										<th>Course_name</th>
										<th>Inst_name</th>
										<th>Start_date</th>
										<th>End_date</th>
										</tr>

<?php

$connect = @mysql_connect("localhost", "root", '');
if ($connect) {
    $db = @mysql_select_db("bellnet");

    if (!$db)
        echo mysql_error();


} else {


    echo "error";
}


$query = "select * from schedules";

$run = mysql_query($query);

while ($row = mysql_fetch_assoc($run)) {
    $id = $row['id'];
    $time = $row['timeOfCourse'];
    $course_name = $row['course_name'];
    $instractor_name = $row['instractor_name'];
    $start_date = $row['start_time'];
    $end_date = $row['end_time'];









?>
	<tr>

										<td><?= $id ?></td>
										<td><?= $time ?></td>
										<td><?= $course_name ?></td>
										<td><?= $instractor_name ?></td>
										<td><?= $start_date ?></td>
										<td><?= $end_date ?></td>
										</tr>


<?php
}
?>
</table>


								</div>

								</div>
								</div>




					</section>



				</section>

<br><br><br><br><br><br><br><br><br><br>

<section class="footer2">
			<br><br><br><br>
				<div class="container12">
					<div class=" omega alpha column3">
						<div class="leftpart">
							<h4>E-LEARNING</h4>
							<br><br>
							<span class="s1">Courses</span>&nbsp;&nbsp;
							<span class="s1">Tests</span>&nbsp;&nbsp;
							<span class="s1">Live Classes</span>
							<br><br><br>
							<br>
						</div><!-- **************** End leftpart *********** -->

					</div><!-- **************** End column3 *********** -->

					<div class="column9">
						<div class="social">
							<h4>FOLLOW US</h4>
							<a href="https://www.facebook.com/Bellnet-439526066243636/?fref=ts"><span title="facebook" class="icon-facebook"></span></a>
							<a href="https://twitter.com/Bellnet_edu"><span title="twitter" class="icon-twitter"></span></a>
							<a href="https://www.linkedin.com/in/bell-net-24437a119?trk=hp-identity-name"><span title="linkedin" class="icon-linkedin2"></span></a>
							<a href="https://www.pinterest.com/bellnet/"><span title="pinterest" class="icon-pinterest22"></span></a>
							<a href="https://plus.google.com/u/0/103964860171255088807/posts"><span title="googleplus" class="icon-googleplus"></span></a>
							<a href="https://www.instagram.com/bellnet_educational_website_/"><span title="instagram" class="icon-instagram3"></span></a>
							<a href="#"><span title="youtube" class="icon-youtube"></span></a>
						</div>
					</div>
				</div>
				<hr>
				<p>© Bellnet 2016, All Rights Reserved.</p>
			</section>


			<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
			<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

			<script type="text/javascript">
				$('#myTabs a[href="#profile"]').tab('show') // Select tab by name
				$('#myTabs a:first').tab('show') // Select first tab
				$('#myTabs a:last').tab('show') // Select last tab
				$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)

			</script>
	</body>
</html>








<?php

} else {
?>
<script>

 window.location.href = 'index.php';

</script>
<?php
}

?>

