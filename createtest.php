
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


<!DOCTYPE html>
<html>
	<head>
		<title>Bellnet | Online test</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="shortcut icon" href="icon.ico">

		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" href="icomoon/style.css">
		<link rel="stylesheet" href="css/1140.css">
		<link rel="stylesheet" href="css/animate.css">
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

					<form action="finaltest.php" method="get">
						<div class="container12">
						<div class="column3">.</div>
							<div class="column6">
								<input type="text" placeholder="Search">
							</div>
						</div>

			</section><!--******************** header section end ********************-->

			<div class="top_divider"><img src="imgs/top_divider.png" alt=""></div>

			<section class="create-test">
				<div class="container12">
					<div class="column12">
						<p>Create Quiz</p>
						<div class="content">
							<div class="input-part">
									<span>1-  </span><span><input type="text" name="q1"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type1" ><input type="text" name="tex1">
								<input type="radio" name="type1" ><input type="text" name="tex2">
								<input type="radio" name="type1" ><input type="text" name="tex3"> Answer : <input type="text" name="c1">
							</div>
							<div class="input-part">
									<span>2-  </span><span><input type="text" name="q2"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type2" ><input type="text" name="tex4">
								<input type="radio" name="type2" ><input type="text" name="tex5">
								<input type="radio" name="type2" ><input type="text" name="tex6">Answer : <input type="text" name="c2">
							</div>
							<div class="input-part">
									<span>3-  </span><span><input type="text" name="q3"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type3" ><input type="text" name="tex7">
								<input type="radio" name="type3" ><input type="text" name="tex8">
								<input type="radio" name="type3" ><input type="text" name="tex9">Answer : <input type="text" name="c3">
							</div>
							<div class="input-part">
									<span>4-  </span><span><input type="text" name="q4"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type4" ><input type="text" name="tex10">
								<input type="radio" name="type4" ><input type="text" name="tex11">
								<input type="radio" name="type4" ><input type="text" name="tex12"> Answer :<input type="text" name="c4">
							</div>
							<div class="input-part">
									<span>5-  </span><span><input type="text" name="q5"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type5" ><input type="text" name="tex13">
								<input type="radio" name="type5" ><input type="text" name="tex14">
								<input type="radio" name="type5" ><input type="text" name="tex15">Answer :<input type="text" name="c5">
							</div>
							<div class="input-part">
									<span>6-  </span><span><input type="text" name="q6"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type6" ><input type="text" name="tex16">
								<input type="radio" name="type6" ><input type="text" name="tex17">
								<input type="radio" name="type6" ><input type="text" name="tex18">Answer :<input type="text" name="c6">
							</div>
							<div class="input-part">
									<span>7-  </span><span><input type="text" name="q7"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type7" ><input type="text" name="tex19">
								<input type="radio" name="type7" ><input type="text" name="tex20">
								<input type="radio" name="type7" ><input type="text" name="tex21">Answer :<input type="text" name="c7">
							</div>
							<div class="input-part">
									<span>8-  </span><span><input type="text" name="q8"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type8" ><input type="text" name="tex22"/>
								<input type="radio" name="type8" ><input type="text" name="tex23">
								<input type="radio" name="type8" ><input type="text" name="tex24">Answer :<input type="text" name="c8">
							</div>
							<div class="input-part">
									<span>9-  </span><span><input type="text" name="q9"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type9" ><input type="text" name="tex25">
								<input type="radio" name="type9" ><input type="text" name="tex26">
								<input type="radio" name="type9" ><input type="text" name="tex27">Answer :<input type="text" name="c9">
							</div>
							<div class="input-part">
									<span>10-</span><span><input type="text" name="q10"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type10" ><input type="text" name="tex28">
								<input type="radio" name="type10" ><input type="text" name="tex29">
								<input type="radio" name="type10" ><input type="text" name="tex30">Answer :<input type="text" name="c10">
							</div>
							<input type="submit" value="submit" name="submit" />

						</div>
					</div>
				</div>
			</section>
			</form>
			<br><br><br>


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

 window.location.href = 'index.php';

</script>
<?php
}

?>





