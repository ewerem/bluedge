<?php
session_start();
ob_start();
include'../access/access.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">
  	<meta name="keywords" content="Bluedge Property Company" />

	<title>Bluedge Admin</title>
	<link rel="shortcut icon" type="image/x-icon" href="../image/fav.ico">
    <link rel="stylesheet" href="../css/materialize.css" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  	<link rel="stylesheet" type="text/css" href="../css/aos.css"/>

<style type="text/css">

body{
	font-family: lucida sans;
}

#navigate{
	background: white;
	border-bottom:4px solid #2E294E;
	overflow:hidden;
}
#mynav{
	color:white;
	font-size:16px;
}

#mynav:hover{
	border:0px;
	box-shadow: 0 0 30px white;
	
}

#mynav2{
	color:#2E294E;
	font-weight: bold;
	font-size:14px;
	border-bottom: 0px solid black !important;
	
}
#mynav2:hover{
	border:0px;
	color:white;
	background: #2E294E;
}

#mynav3{
	font-size:16px;
	border-radius: 50px;
	border-bottom: 0px solid black !important;
	
}
#mynav3:hover{
	border:0px;
	box-shadow: 0 0 15px red;
	border-radius: 50px;
	background: white;
}

#myn2{
	padding-left: 10px;
	padding-right: 10px;

}

#field:focus{
	border:3px solid #2E294E !important;
}
	
</style>

</head>
<body style="background: #fff;">

<nav style="background: #2E294E" class="nav-wrappers">
	<a href="#"><img src="../image/elogo.png" style="width:140px;height:65px;position:relative;margin-left:80px;background: white;" id="up"></a>
<!-- dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->
</nav>

<div class="container">
	<br><br>
	
	<center>
		<img src="../image/logo2.png" style="width: 40px; height:70px;">
		<h5 style="padding-bottom: 5px;">Bluedge Login</h5>
	</center>
	<br>

	<form method="post">
		
		<i style="color:black; font-size:16px;">Username</i><br>
		<input type="text" name="user" id="field" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid #2E294E !important;font-size: 16px;">
		<br>

		<i style="color:black; font-size:16px;">Password</i><br>
		<input type="password" name="pass" id="field" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid #2E294E !important;font-size: 16px;">
		<br>

		<center>
			<button name="sub" style="padding: 15px 35px;background: #2E294E; color:#fff; border:2px solid #2E294E;font-size: 20px;">
				Submit <i class="fas fa-paper-plane"></i>
			</button>
		</center>

	</form>

	<?php  

		if(isset($_POST['sub'])){

			$un = $_POST['user'];
			$pa = $_POST['pass'];

			$sel = $pdo->prepare("SELECT * FROM admin WHERE user = ? AND pass = ?");
			$sel->bindParam(1, $un);
			$sel->bindParam(2, $pa);
			$sel->execute();

			if($sel->rowCount() > 0){

				$_SESSION['admin'] = $un;
				header('location:dashboard.php');

			}else{

				echo'<script>alert("WRONG USERNAME OR PASSWORD !!");</script>';

			}

		}

	?>

	<br>
</div>

  <br>

<div id="footer" style="margin-bottom: -30px;margin-top: -15px;color: white;">
	 	<!--/////////////////////////////////-->
	 <center style="background: #2E294E;">
	 	<p style="visibility:hidden;font-size: 10px;">hhh</p>
	 	<p style="padding: 5px;font-size: 15px !important;">
	 		&copy; Copyright <script> var d = new Date();var n = d. getFullYear(); document.write(n);</script> Bluedge Property Company
	 	</p>
	 	<p style="visibility:hidden;font-size: 10px;">hhh</p>
	 </center>
 </div>


<!-- scripting file -->
<script src="../javascript/jquery-2.1.1.min.js"></script>
<script src="../javascript/materialize.js"></script>
<script src="../javascript/init.js"></script>

</body>
</html>