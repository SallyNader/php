<?php
session_start();

include ('conf.php');
$user = $_SESSION['user'];
$query = "select typeOfAccess from users where userName= '" . $user . "'";
$run = mysql_query($query);
while ($row = mysql_fetch_assoc($run)) {

    $tybe = $row['typeOfAccess'];
}


if (isset($_SESSION['user']) and ($tybe == 2)) {


?>

<html>
	<head>
		<title>Bellnet | Add Course</title>
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

		<section class="course-data">
			<div class="container12">
				<div class="column12">
					<div class="inner-data">
						<h1>Course Details</h1>

						<form action="coursecontent.php" method="post">
							<table class="details">
							<tr>
								<td><p>Course Name : </p></td>
								<td><input type="text" name="name" placeholder=" Enter Course Name ........"></td>
							</tr>
							<tr>
								<td><p>Time of Course</p> : </p></td>
								<td><input type="text" name="time" placeholder=" Enter Time in 24-hour form ........"></td>

							</tr>
							<tr>
								<td><p>Number of Course</p> : </p></td>
								<td><input type="text" name="number" placeholder=" Enter Number ........"></td>

							</tr>
							<tr>
								<td><p>Start Date : </p></td>
								<td><input type="text" name="start" placeholder=" Type date in form yy-mm-dd ...."></td>

							</tr>
							<tr>
								<td><p>End Date : </p></td>
								<td><input type="text" name="end" placeholder=" Type date in form yy-mm-dd ...."></td>
                 <br />
               <td><input type="submit" name="add" value="Add Course" /></td>
							</tr>

						</table>
						</form>
<?php
    include ('conf.php');
    if (isset($_POST['add'])) {
        if (!empty($nameCourse) and !empty($time) and !empty($number) and !empty($startDate) and
            !empty($endDate)) {
            $instractorName = $_SESSION['user'];

            $number = $_POST['number'];
            $nameCourse = $_POST['name'];
            $time = $_POST['time'];
            $startDate = $_POST['start'];
            $endDate = $_POST['end'];

            list($y, $m, $d) = explode('-', $startDate);
            list($y2, $m2, $d2) = explode('-', $endDate);

            if (checkdate($m, $d, $y) and checkdate($m2, $d2, $y2) and is_string($nameCourse) and
                is_integer($number) and is_integer($time)) {
                $insertQuery = "insert into schedules(instractor_name,numberOFcourses,course_name,timeOfCourse,start_time,end_time) values('" .
                    $instractorName . "','" . $number . "','" . $nameCourse . "','" . $time .
                    "',CAST('" . $startDate . "' AS DATE),CAST('" . $endDate . "' AS DATE))";
                $run = mysql_query($insertQuery);


                if ($run) {
                    echo "<script type='text/javascript'>alert('Course Created Successfully');</script>";

                }
            }


        } else
            echo "<script type='text/javascript'>alert('Course Created Successfully');</script>";


    }


?>

					</div>
				</div>
			</div>
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




