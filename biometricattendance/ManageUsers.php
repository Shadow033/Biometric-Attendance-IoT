<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>BIOMETRIC ATTENDANCE</title>
	<script src="https://kit.fontawesome.com/2b7e8db1bc.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" type="image/x-icon" href="favicon-16x16.png">
<link rel="stylesheet" type="text/css" href="css/manageusers.css">
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
<script src="js/manage_users.js"></script>
<script>
  $(document).ready(function(){
  	  $.ajax({
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    setInterval(function(){
      $.ajax({
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    },5000);
  });
</script>
</head>
<body>
	<div class="nav">
		<div class="logo">
			<h3><a href="index.php"><i class="fa-solid fa-fingerprint"></i><span style="color:tomato;"> biometric</span> attendance</a></h3>
		</div>
		<div class="nav-right">
			<ul>
				<li class="not-current"><a href="home.php">Home</a></li>
				<li class="not-current"><a href="index.php">Students</a></li>
				<li class="not-current"><a href="UsersLog.php">Attendance</a></li>
				<li class="danger"><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
<main>
	<h1 class="slideInDown animated">Add a new Student or update his information or remove him</h1>
	<div class="form-style-5 slideInDown animated">
		<div class="alert">
		<label id="alert"></label>
		</div>
		<form>
			<fieldset>
			<legend><span class="number">1</span> Student Fingerprint ID:</legend>
				<label>Enter Fingerprint ID between 1 & 127:</label>
				<input type="number" name="fingerid" id="fingerid" placeholder="Student Fingerprint ID...">
				<button type="button" name="fingerid_add" class="fingerid_add">Add Fingerprint ID</button>
			</fieldset>
			<fieldset>
				<legend><span class="number">2</span> Student Info</legend>
				<input type="text" name="name" id="name" placeholder="Student Name...">
				<input type="text" name="number" id="number" placeholder="Roll Number...">
				<input type="email" name="email" id="email" placeholder="Student Email...">
			</fieldset>
			<fieldset>
			<legend><span class="number">3</span> Additional Info</legend>
			<label>
				Time In:
				<input type="time" name="timein" id="timein">
				<input type="radio" name="gender" class="gender" value="Female">Female
	          	<input type="radio" name="gender" class="gender" value="Male" checked="checked">Male
	      	</label >
			</fieldset>
			<button type="button" name="user_add" class="user_add">Add Student</button>
			<button type="button" name="user_upd" class="user_upd">Update Student</button>
			<button type="button" name="user_rmo" class="user_rmo">Remove Student</button>
		</form>
	</div>

	<div class="section">
	<!--User table-->
		<div class="tbl-header slideInRight animated">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <thead>
		        <tr>
	        	  <th>Finger .ID</th>
		          <th>Name</th>
		          <th>Gender</th>
		          <th>R. No.</th>
		          <th>Date</th>
		          <th>Time in</th>
		        </tr>
		      </thead>
		    </table>
		</div>
		<div class="tbl-content slideInRight animated">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <div id="manage_users"></div>
		</div>
	</div>

</main>
</body>
</html>

<?php 
}else{
     header("Location: admin.php");
     exit();
}
 ?>