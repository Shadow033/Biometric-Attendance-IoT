<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/2b7e8db1bc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon-16x16.png">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>BIOMETRIC ATTENDANCE</title>
</head>
<body>
	<div class="main-container">
    <div class="bg-img"  data-aos="fade-in"  data-aos-duration="1000">
        <img src="img/bg.jpg" alt="">
    </div>
    <div class="overlay"></div>
    <div class="nav"  data-aos="fade-in"  data-aos-duration="3000">
		<div class="logo">
			<h3><a href="index.php"><i class="fa-solid fa-fingerprint"></i><span style="color:tomato;"> biometric</span> attendance</a></h3>
		</div>
		<div class="nav-right">
			<ul>
				<li class="current"><a href="home.php">Home</a></li>
				<li class="not-current"><a href="index.php">Students</a></li>
				<li class="not-current"><a href="UsersLog.php">Attendance</a></li>
				<li class="not-current"><a href="admin.php">Admin Login</a></li>
			</ul>
		</div>
	</div>
	<div class="main-body"  data-aos="fade-in"  data-aos-duration="1000">
		<div class="main-cont">
			<h2>biometric attendance</h2>
			<h2 class="main-text">system</h2>
			<p>department of <span class="txt-type main-color" data-wait="3000" data-words='["ELECTRONICS"]'></span></p>
			<div class="main-link"><a href="index.php" class="next-btn">Continue</a></div>
		</div>
	</div>
	</div>
	<div id="about">
		<h4  data-aos="fade-in"  data-aos-duration="1000">ABOUT THE SYSTEM</h4>
		<div class="line"  data-aos="fade-in"  data-aos-duration="2000"></div>
        <div class="main">
            <div class="cards">
                <div class="vd p1" data-aos="fade-right"  data-aos-duration="1000">
					<i class="fa-solid fa-users fa-3x"></i>
                    <h3>ADD THE USERS</h3>
                    <p>The ability to add new users and manage the existing users through this system.</p>
                </div>
                <div class="vd p1" data-aos="fade-left"  data-aos-duration="1000">
					<i class="fa-solid fa-fingerprint fa-3x"></i>
                    <h3>ADD FINGERPRINTS</h3>
                    <p>This system offers the mechanism to add the finger-prints of the users for biometric authentication</p>
                </div>
                <div class="vd p1" data-aos="fade-right"  data-aos-duration="1000">
					<i class="fa-solid fa-clipboard-user fa-3x"></i>
                    <h3>TAKE ATTENDANCE</h3>
                    <p>The ability to take and store the attendance of the users through this system.</p>
                </div>
                <div class="vd p1" data-aos="fade-left"  data-aos-duration="1000">
					<i class="fa-solid fa-list-check fa-3x"></i>
                    <h3>MAKE THE LIST</h3>
                    <p>This offers the feature of making the attendance list, which is helpful for the admin!</p>
                </div>
            </div>
        </div>
    </div>

	<div class="bot">
		<div class="bot-ct">
			<i class="fa-solid fa-fingerprint fa-10x" style="color: tomato;"  data-aos="fade-right"  data-aos-duration="1000"></i>
			<div class="cont-bot"  data-aos="fade-left"  data-aos-duration="1000">
				<h2>Stay productive,<br>wherever you are</h2>
				<p>Our biometric system acknowledges an individual's physiological features like fingerprint to  <br>register the attendance, thus eliminatingany manipulation via proxy attendance  <br> at the workplace.<br><br> It is the most secure form of authentication.</p>
			</div>
		</div>
	</div>

	<!-- Footer start -->
    <div class="footer" data-aos="fade-in"  data-aos-duration="1000">
        <div class="foot-container">
            <div class="logo" data-aos="fade-in"  data-aos-duration="3000">
                <h2><i class="fa-solid fa-fingerprint"></i> Biometric Attendance System</h2>
            </div>
           
        </div>
        <div class="copy" >
            <h3>Copyright &copy; 2022, All Rights Reserved</h3>
        </div>
    </div>
    <!-- Footer end -->
	<script src="js/typewriter.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>