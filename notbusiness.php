

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
								<a href="courses.php"><li><span>Comupter Science</span></li></a>
								<a href="notart.php"><li><span>Arts and Humanities</span></li></a>
								<a href="notbusiness.php"><li><span>Business</span></li></a>

								<a href="notdatascience.php"><li><span>Data Science</span></li></a>
								<a href="notlifesciences.php"><li><span>Life Sciences</span></li></a>
								<a href="notmathandlogi.php"><li><span>Math and Logic</span></li></a>
								<a href="notpersonaldev.php"><li><span>Personal Development</span></li></a>
								<a href="notphysicalscience.php"><li><span>Physical Science and Engineering</span></li></a>
								<a href="notsocialsciences.php"><li><span>Social Sciences</span></li></a>
								<a href="notlanguage.php"><li><span>Language Learning</span></li></a>
							</ul>
						</div>
					</div>

					<div class=" omega alpha course-area column9">
							<h1>FEATURED COURSES</h1>
<?php




$connect = @mysql_connect("localhost", "root", '');
if ($connect) {
    $db = @mysql_select_db("bellnet");

    if (!$db)
        echo mysql_error();


} else {


    echo "error";
}


$query = "select * from courses where category='business'";

$run = mysql_query($query);


while($row=mysql_fetch_assoc($run)){

	$name=$row['course_name'];
	$instructor=$row['inst_name'];






?>
       <div class=" omega column3">
								<div class="course-item">
									<img src="imgs/girl.jpg" alt="">

									<div class="course-category"> <p>Education</p></div>

									<div class="course-title"><p><?= $name?></p></div>

									<div class="course-desc"><p>What you should know to be successful in Calculus </p></div>

									<div class="course-author"><h4><span>BY </span><a href=""><?= $instructor?> </a></h4></div>

									<div class="cource-price"><p>$100</p></div>

									<div class="bottom">
										<span class="btn icon-users"><i style="border-right: 2px solid #ccc; padding-right: 7px;">0 Learner</i></span>
										<span class="btn icon-list4"><i>Details</i></span>
									</div>
								</div>
						 </div>

							<?php
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





