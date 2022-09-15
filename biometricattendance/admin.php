<!DOCTYPE html>
<html>
<head>
    <title>BIOMETRIC ATTENDANCE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="icons/atte1.jpg">
    <script src="https://kit.fontawesome.com/2b7e8db1bc.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/jquery-2.2.3.min.js"></script>
    <script>
      $(window).on("load resize ", function() {
          var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
          $('.tbl-header').css({'padding-right':scrollWidth});
      }).resize();
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(document).on('click', '.message', function(){
          $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
          $('h1').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
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
				<li class="current"><a href="admin.php">Admin Login</a></li>
			</ul>
		</div>
	</div>
<main>
  <div class="admin-head">
    <h1 class="admin-heading slideInDown animated">Login with the User Name and Password!</h1>
  </div>
  <!-- Log In -->
<section>
  <div class="slideInDown animated">
    <div class="login-page">
      <div class="form">
        <form action="login.php" method="post">
        <i class="fa-solid fa-user fa-3x"></i>
     	  <h2>LOGIN</h2>
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	  <?php } ?>

     	  <input type="text" name="uname" placeholder="User Name"><br>

     	  <input type="password" name="password" placeholder="Password"><br>

     	  <button type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</section>
</main>
</body>
</html>