<?php
if (isset($_GET['submit'])) {
    $connect = @mysql_connect("localhost", "root", '');
    if ($connect) {
        $db = @mysql_select_db("bellnet");




    }

    $delete = "delete from test";
    $run_delete = mysql_query($delete);


    $q1 = @$_GET['q1'];
    $c1 = @$_GET['c1'];
    $q2 = @$_GET['q2'];
    $c2 = @$_GET['c2'];
    $q3 = @$_GET['q3'];
    $c3 = @$_GET['c3'];
    $q4 = @$_GET['q4'];
    $c4 = @$_GET['c4'];
    $q5 = @$_GET['q5'];
    $c5 = @$_GET['c5'];
    $q6 = @$_GET['q6'];
    $c6 = @$_GET['c6'];
    $q7 = @$_GET['q7'];
    $c7 = @$_GET['c7'];
    $q8 = @$_GET['q8'];
    $c8 = @$_GET['c8'];
    $q9 = @$_GET['q9'];
    $c9 = @$_GET['c9'];
    $q10 = @$_GET['q10'];
    $c10 = @$_GET['c10'];


    $query = "insert into test(question,answer) values('" . $q1 . "','" . $c1 .
        "'),('" . $q2 . "','" . $c2 . "'),('" . $q3 . "','" . $c3 . "'),('" . $q4 .
        "','" . $c4 . "'),('" . $q5 . "','" . $c5 . "'),('" . $q6 . "','" . $c6 .
        "'),('" . $q7 . "','" . $c7 . "'),('" . $q8 . "','" . $c8 . "'),('" . $q9 .
        "','" . $c9 . "'),('" . $q10 . "','" . $c10 . "')";


    $run = mysql_query($query);


}

$q1 = @$_GET['q1'];
$q2 = @$_GET['q2'];
$q3 = @$_GET['q3'];
$q4 = @$_GET['q4'];
$q5 = @$_GET['q5'];
$q6 = @$_GET['q6'];
$q7 = @$_GET['q7'];
$q8 = @$_GET['q8'];
$q9 = @$_GET['q9'];
$q10 = @$_GET['q10'];
$tex1 = @$_GET['tex1'];
$tex2 = @$_GET['tex2'];
$tex3 = @$_GET['tex3'];
$tex4 = @$_GET['tex4'];
$tex5 = @$_GET['tex5'];
$tex6 = @$_GET['tex6'];
$tex7 = @$_GET['tex7'];
$tex8 = @$_GET['tex8'];
$tex9 = @$_GET['tex9'];
$tex10 = @$_GET['tex10'];
$tex11 = @$_GET['tex11'];
$tex12 = @$_GET['tex12'];
$tex13 = @$_GET['tex13'];
$tex14 = @$_GET['tex14'];
$tex15 = @$_GET['tex15'];
$tex16 = @$_GET['tex16'];
$tex17 = @$_GET['tex17'];
$tex18 = @$_GET['tex18'];
$tex19 = @$_GET['tex19'];
$tex20 = @$_GET['tex20'];
$tex21 = @$_GET['tex21'];
$tex22 = @$_GET['tex22'];
$tex23 = @$_GET['tex23'];
$tex24 = @$_GET['tex24'];
$tex25 = @$_GET['tex25'];
$tex26 = @$_GET['tex26'];
$tex27 = @$_GET['tex27'];
$tex28 = @$_GET['tex28'];
$tex29 = @$_GET['tex29'];
$tex30 = @$_GET['tex30'];
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

					<form action="student.php" method="get">
						<div class="container12">
						<div class="column3">.</div>
							<div class="column6">
								<input type="text" placeholder="Search">
							</div>
						</div>

			</section><!--******************** header section end ********************-->

			<div class="top_divider"><img src="imgs/top_divider.png" alt=""></div>

			<section class="test-form">
				<div class="container12">
					<div class="column12">
						<p>Quiz</p>
						<div class="content">
							<div class="title">
									<h4>1- <?php echo $q1 ?>?</h4>
							</div>
							<div class="radios">
								<input type="radio" name="t1" value="<?= $tex1 ?>"><?php echo $tex1 ?></input>
								<input type="radio" name="t1" value="<?= $tex2 ?>"><?php echo $tex2 ?></input>
								<input type="radio" name="t1" value="<?= $tex3 ?>"><?php echo $tex3 ?></input>
							</div>
							<div class="title">
									<h4>2- <?php echo $q2 ?></h4>
							</div>
							<div class="radios">
								<input type="radio" name="t2" value="<?= $tex4 ?>"><?php echo $tex4 ?></input>
								<input type="radio" name="t2" value="<?= $tex5 ?>"><?php echo $tex5 ?></input>
								<input type="radio" name="t2" value="<?= $tex6 ?>"><?php echo $tex6 ?></input>
							</div>
							<div class="title">
									<h4>3- <?php echo $q3 ?>?</h4>
							</div>
							<div class="radios">
								<input type="radio" name="t3" value="<?= $tex7 ?>"><?php echo $tex7 ?></input>
								<input type="radio" name="t3" value="<?= $tex8 ?>"><?php echo $tex8 ?></input>
								<input type="radio" name="t3" value="<?= $tex9 ?>"><?php echo $tex9 ?></input>
							</div>
							<div class="title">
									<h4>4- <?php echo $q4 ?> ?</h4>
							</div>
							<div class="radios">
								<input type="radio" name="t4" value="<?= $tex10 ?>"><?php echo $tex10 ?></input>
								<input type="radio" name="t4" value="<?= $tex11 ?>"><?php echo $tex11 ?></input>
								<input type="radio" name="t4" value="<?= $tex12 ?>"><?php echo $tex12 ?></input>
							</div>
							<div class="title">
									<h4>5- <?php echo $q5 ?> ?</h4>
							</div>
							<div class="radios">
								<input type="radio" name="t5" value="<?= $tex13 ?>"><?php echo $tex13 ?></input>
								<input type="radio" name="t5" value="<?= $tex14 ?>"><?php echo $tex14 ?></input>
								<input type="radio" name="t5" value="<?= $tex15 ?>"><?php echo $tex15 ?></input>
							</div>
							<div class="title">
									<h4>6- <?php echo $q6 ?> ?</h4>
							</div>
							<div class="radios">
								<input type="radio" name="t6" value="<?= $tex16 ?>"><?php echo $tex16 ?></input>
								<input type="radio" name="t6" value="<?= $tex17 ?>"><?php echo $tex17 ?></input>
								<input type="radio" name="t6" value="<?= $tex18 ?>"><?php echo $tex18 ?></input>
							</div>
							<div class="title">
									<h4>7- <?php echo $q7 ?> ?</h4>
							</div>
							<div class="radios">
								<input type="radio" name="t7" value="<?= $tex19 ?>"><?php echo $tex19 ?></input>
								<input type="radio" name="t7" value="<?= $tex20 ?>"><?php echo $tex20 ?></input>
								<input type="radio" name="t7" value="<?= $tex21 ?>"><?php echo $tex21 ?></input>
							</div>
							<div class="title">
									<h4>8- <?php echo $q8 ?> ?</h4>
							</div>
							<div class="radios">
								<input type="radio" name="t8" value="<?= $tex22 ?>"><?php echo $tex22 ?></input>
								<input type="radio" name="t8" value="<?= $tex23 ?>"><?php echo $tex23 ?></input>
								<input type="radio" name="t8" value="<?= $tex24 ?>"><?php echo $tex24 ?></input>
							</div>
							<div class="title">
									<h4>9- <?php echo $q9 ?> ?</h4>
							</div>
							<div class="radios">
								<input type="radio" name="t9" value="<?= $tex25 ?>"><?php echo $tex25 ?></input>
								<input type="radio" name="t9" value="<?= $tex26 ?>"><?php echo $tex26 ?></input>
								<input type="radio" name="t9" value="<?= $tex27 ?>"><?php echo $tex27 ?></input>
							</div>
							<div class="title">
									<h4>10- <?php echo $q10 ?> ?</h4>
							</div>
							<div class="radios">
								<input type="radio" name="t10" value="<?= $tex28 ?>"><?php echo $tex28 ?></input>
								<input type="radio" name="t10" value="<?= $tex29 ?>"><?php echo $tex29 ?></input>
								<input type="radio" name="t10" value="<?= $tex30 ?>"><?php echo $tex30 ?>
							</div><br><br>
							<input type="submit" name="submit" value="submit" />
							<div class="no-float"></div>

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



