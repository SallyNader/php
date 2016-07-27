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
<?php

    $connect = @mysql_connect("localhost", "root", '');
    if ($connect) {
        $db = @mysql_select_db("bellnet");


    }

    if (isset($_GET['submit'])) {
        $counter = 0;

        $a1 = @$_GET['t1'];
        $a2 = @$_GET['t2'];
        $a3 = @$_GET['t3'];
        $a4 = @$_GET['t4'];
        $a5 = @$_GET['t5'];
        $a6 = @$_GET['t6'];
        $a7 = @$_GET['t7'];
        $a8 = @$_GET['t8'];
        $a9 = @$_GET['t9'];
        $a10 = @$_GET['t10'];

        $query = "select * from test";

        $run = mysql_query($query);
        while ($row = mysql_fetch_assoc($run)) {

            $c[] = $row['answer'];


        }


        if ($a1 == $c[0])
            $counter++;
        if ($a2 == $c[1])
            $counter++;
        if ($a3 == $c[2])
            $counter++;
        if ($a4 == $c[3])
            $counter++;
        if ($a5 == $c[4])
            $counter++;
        if ($a6 == $c[5])
            $counter++;
        if ($a7 == $c[6])
            $counter++;
        if ($a8 == $c[7])
            $counter++;
        if ($a9 == $c[8])
            $counter++;
        if ($a10 == $c[9])
            $counter++;


    }




?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bellnet | Student</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="shortcut icon" href="icon.ico">

		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" href="icomoon/style.css">
		<link rel="stylesheet" href="css/1140.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/navbar-style.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
						<div class="column3">.</div>
							<div class="column6">
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
							<p>Student</p>
							<hr>
							<br>
							<ul>
								<li>
								<?php
/**
 *     $counter = 1;
 *     include ('conf.php');
 *     $username = $_SESSION['user'];

 *     $q1 = "SELECT id from users where userName='" . $username . "'";
 *     $run1 = mysql_query($q1);

 *     $id = mysql_fetch_assoc($run1);


 *     foreach ($id as $value) {

 *         $id = $value;
 *     }
 */
    /**
     *   $query = "select DISTINCT courses from takencourses where id = (select id from users where id='" .
     *         $id . "')";
     *     $run2 = mysql_query($query);


     *     while ($row = mysql_fetch_assoc($run2)) {

     *         $courses[] = $row['course'];
     *         $counter++;

     *     }
     */





?>
									<a href=""><span class="icon-book"></span><span>Enrolled Courses (0)</span></a>
								</li>

								<li>
									<a href=""><span class="icon-file"></span><span>Tests Taken (0)</span></a>
								</li>

								<li>
									<a href=""><span class="icon-uniE8D7"></span><span>Certificates Taken (0)</span></a>
								</li>

								<li>
									<a href=""><span class="icon-cart4"></span><span>My Orders (0)</span></a>
								</li>

								<li>
									<a href=""><span class="icon-heart"></span><span>My favourite (0)</span></a>
								</li>

								<li>
									<a href=""><span class="icon-redo2"></span><span>Shared with me (0)</span></a>
								</li>
								<li>
									<a href="schedule.php"><span ></span><span>Schedule</span></a>
								</li>
								<li>
									<a href="logout.php"><span ></span><span>Logout</span></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="column9">
						  <!-- Nav tabs -->
						  <ul class="nav nav-tabs" role="tablist">
						    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></i>
						    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
						    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
						  </ul>

						  <!-- Tab panes -->
						  <div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="home">

								<div class="innercontent">
									<span>Visit our <a href="courseslogin.php">Course Market</a> and choose your course</span>
<br />
									<span>


									<?php
    if (isset($_GET['submit'])) {




        echo "Test Result :" . @$counter;
    }

?>

									</span>
								</div>

						    </div>

						    <div role="tabpanel" class="tab-pane" id="profile">

								<div class="innercontent">
									<!-- write your code here -->
								</div>

							</div>

						    <div role="tabpanel" class="tab-pane" id="messages">

								<div class="innercontent">
									<!-- write your code here -->
								</div>

							</div>

						    <div role="tabpanel" class="tab-pane" id="settings">

								<div class="innercontent">
									<!-- write your code here -->
								</div>

							</div>

						  </div>

						</div>
					</div>

				</div><!-- ************* end of container12 ************ -->
				<br><br><br><br><br><br>
			</section>

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



