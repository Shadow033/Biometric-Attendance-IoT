<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <title>BIOMETRIC ATTENDANCE</title>
  <script src="https://kit.fontawesome.com/2b7e8db1bc.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/x-icon" href="favicon-16x16.png">
<link rel="stylesheet" type="text/css" href="css/userslog.css">
<script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
</script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/user_log.js"></script>
<script>
  $(document).ready(function(){
      $.ajax({
        url: "user_log_up.php",
        type: 'POST',
        data: {
            'select_date': 1,
        }
      });
    setInterval(function(){
      $.ajax({
        url: "user_log_up.php",
        type: 'POST',
        data: {
            'select_date': 0,
        }
        }).done(function(data) {
          $('#userslog').html(data);
        });
    },5000);
  });
</script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/userlog.css">
<div class="nav">
		<div class="logo">
			<h3><a href="index.php"><i class="fa-solid fa-fingerprint"></i><span style="color:tomato;"> biometric</span> attendance</a></h3>
		</div>
		<div class="nav-right">
			<ul>
        <li class="not-current"><a href="home.php">Home</a></li>
				<li class="not-current"><a href="index.php">Students</a></li>
				<li class="current"><a href="UsersLog.php">Attendance</a></li>
        <li class="not-current"><a href="ManageUsers.php">Add User</a></li>
				<li class="not-current"><a href="admin.php">Admin Login</a></li>
			</ul>
		</div>
	</div> 
<main>
  <section>
  <!--User table-->
  <h1 class="slideInDown animated">Here are the Students daily Attendance</h1>
  <div class="line"></div>
  	<div class="form-style-5 slideInDown animated">
  		<form method="POST" action="Export_Excel.php">
  			<input type="date" name="date_sel" id="date_sel">
        <button type="button" name="user_log" id="user_log">Select Date</button>
  			<input type="submit" name="To_Excel" value="Export to Excel">
  		</form>
  	</div>
  <div class="tbl-header slideInRight animated">
    <table cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th>S. No.</th>
          <th>Name</th>
          <th>Roll Number</th>
          <th>Fingerprint ID</th>
          <th>Date</th>
          <th>Time In</th>
          <th>Time Out</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content slideInRight animated">
    <div id="userslog">

    </div>
  </div>
</section>
</main>
</body>
</html>