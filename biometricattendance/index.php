<!DOCTYPE html>
<html>
<head>
  <title>BIOMETRIC ATTENDANCE</title>
  <script src="https://kit.fontawesome.com/2b7e8db1bc.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/x-icon" href="favicon-16x16.png">
<link rel="stylesheet" type="text/css" href="css/Users.css">
<script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
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
				<li class="current"><a href="index.php">Students</a></li>
				<li class="not-current"><a href="UsersLog.php">Attendance</a></li>
        <li class="not-current"><a href="ManageUsers.php">Add User</a></li>
				<li class="not-current"><a href="admin.php">Admin Login</a></li>
			</ul>
		</div>
	</div>
<main>
  <section>
  <!--User table-->
  <h1 class="slideInDown animated">Here are all the Students</h1>
  <div class="line"></div>
  <div class="tbl-header slideInRight animated">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Sl.No | Name</th>
          <th>Roll Number</th>
          <th>Gender</th>
          <th>Finger ID</th>
          <th>Date</th>
          <th>Time In</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content slideInRight animated">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
          //Connect to database
          require'connectDB.php';

            $sql = "SELECT * FROM users WHERE NOT username='' ORDER BY id ASC";
            $result = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($result, $sql)) {
                echo '<p class="error">SQL Error</p>';
            }
            else{
              mysqli_stmt_execute($result);
                $resultl = mysqli_stmt_get_result($result);
              if (mysqli_num_rows($resultl) > 0){
                  while ($row = mysqli_fetch_assoc($resultl)){
          ?>
                      <TR>
                      <TD><?php echo $row['id']; echo" | "; echo $row['username'];?></TD>
                      <TD><?php echo $row['serialnumber'];?></TD>
                      <TD><?php echo $row['gender'];?></TD>
                      <TD><?php echo $row['fingerprint_id'];?></TD>
                      <TD><?php echo $row['user_date'];?></TD>
                      <TD><?php echo $row['time_in'];?></TD>
                      </TR>
        <?php
                }   
            }
          }
        ?>
      </tbody>
    </table>
  </div>
</section>
</main>
</body>
</html>