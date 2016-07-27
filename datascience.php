<?php
session_start();

include ('conf.php');
$user = $_SESSION['user'];
$query = "select typeOfAccess from users where userName= '" . $user . "'";
$run = mysql_query($query);
while ($row = mysql_fetch_assoc($run)) {

    $tybe = $row['typeOfAccess'];
}


if (isset($_SESSION['user']) and ($tybe == 1)) {


?>




<!DOCTYPE html>
<html>
	<head>
		<title>Bellnet | Courses</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="shortcut icon" href="icon.ico">

		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" href="icomoon/style.css">
		<link rel="stylesheet" href="css/1140.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/navbar-style.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
				<!--******************** header section start ********************-->
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

			<!--***************** Left part *****************-->
			<section class="Left-part">
				<div class="container12">

					<div class=" omega alpha column3">

						<div class="instructor-option">
							<br>
							<p>CATEGORIES</p>
							<hr>
							<br>
							<ul>

								<a href="art.php"><li><span>Arts and Humanities</span></li></a>
								<a href="business.php"><li><span>Business</span></li></a>
								<a href="courseslogin.php"><li><span>Computer Science</span></li></a>
								<a href="datascience.php"><li><span>Data Science</span></li></a>
								<a href="lifesciences.php"><li><span>Life Sciences</span></li></a>
								<a href="mathandlogic.php"><li><span>Math and Logic</span></li></a>
								<a href="personaldevelopment.php"><li><span>Personal Development</span></li></a>
								<a href="physicalscience.php"><li><span>Physical Science and Engineering</span></li></a>
								<a href="socialsciences.php"><li><span>Social Sciences</span></li></a>
								<a href="language.php"><li><span>Language Learning</span></li></a>
							</ul>
						</div>
					</div>

					<div class=" omega alpha course-area column9">
							<h1>FEATURED COURSES</h1>

							<?php




    $connect = @mysql_connect("localhost", "root", '');
    if ($connect) {
        $db = @mysql_select_db("bellnet");


    }

    $query = "select * from courses where category='datascience'";

    $run = mysql_query($query);


    while ($row = mysql_fetch_assoc($run)) {

        $name[] = $row['course_name'];
        $instructor[] = $row['inst_name'];

    }


    for ($i = 0; $i < count($name); $i++) {


?>

							<div class=" omega column3">
								<div class="course-item">
									<img src="imgs/girl.jpg" alt="">
									<form action="datascience.php" method="post">

									<div class="course-category"> <p>Education</p></div>

									<div class="course-title"><p><?= $name[$i] ?></p></div>

									<div class="course-desc"><p>What you should know to be successful in Calculus </p></div>

									<div class="course-author"><h4><span>BY </span><a href=""><?= $instructor[$i] ?> </a></h4></div>

									<div class="enroll-btn"><p><input  type="submit" name="enroll<?= $i ?>" value="Enroll Couse" /></p></div>

									<div class="cource-price"><p>$100</p></div>


									<div class="bottom">
										<span class="btn icon-users"><i style="border-right: 2px solid #ccc; padding-right: 7px;">0 Learner</i></span>
										<span class="btn icon-list4"><i>Details</i></span>
									</div>
								</div>
							</div>
							</form>
<?php
    }
?>




<?php
    $username = $_SESSION['user'];
    $connect = @mysql_connect("localhost", "root", '');
    if ($connect) {
        $db = @mysql_select_db("bellnet");


    }
    $select = "SELECT id from users WHERE userName = '" . $username . "' ";
    $run1 = mysql_query($select);
    while ($row = mysql_fetch_assoc($run1)) {
        $idfk = $row['id'];


    }
    for ($i = 0; $i < count($name); $i++) {
        if (isset($_POST['enroll' . $i])) {


            $insert = "insert into takencourses (id,course) values ('" . $idfk . "','" . $name[$i] .
                "')";

            $run = mysql_query($insert);
            if ($run)
                echo "<script type='text/javascript'>alert('You Are Enrolled Successfull');</script>";


        }
    }

?>

					</div>



				</div><!-- ************* end of container12 ************ -->

			</section>

				<br><br><br><br><br><br>

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
	</body>
</html>




<?php

} else {
?>
<script>

 window.location.href = 'courses.php';

</script>
<?php
}

?>