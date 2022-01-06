<?php  
session_start();
ob_start();
include'../access/access.php';

if(!isset($_SESSION['admin'])){
	header('location:alogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">
  	<meta name="keywords" content="Bluedge Property Company" />

	<title>Setting</title>
	<link rel="shortcut icon" type="../image/x-icon" href="image/fav.ico">
    <link rel="stylesheet" href="../css/materialize.css" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  	<link rel="stylesheet" type="text/css" href="../css/aos.css"/>

<style type="text/css">

body{
	font-family: lucida sans;
}

#navigate{
	border-bottom:4px solid #2E294E;
	overflow:hidden;
}

@media screen and (max-width: 767px) and (orientation:portrait) {
      #navigation {
        display: none !important;
        /*tablet*/
      }
}

#mynav{
	color: white;
	font-size: 15px;
}

#mynav:hover{
	background: white;
	color:black;
}

#link:hover{
	background: #2E294E;
	color: white !important;
	padding: 10px;
}
	
</style>

</head>
<body style="background: #fff;">

<nav style="background: #2E294E" class="nav-wrappers">
	<a href="#"><img src="../image/elogo.png" style="width:140px;height:65px;position:relative;margin-left:80px;background: white;" id="up"></a>

	<a href="#" data-activates="slide-out" class="button-collapse" style="font-weight:bold;text-decoration: none;color:#fff;font-size:25px;letter-spacing: 1px;">&nbsp<i class="fas fa-bars"></i></a>

	<ul id="slide-out" class="side-nav" style="background: rgba(0, 0, 0, 0.8);">

	  	<li style="visibility: hidden;">creating space</li>

	  	<li style="padding-bottom: 15px !important;" id="myn-l">
	    	<a href="dashboard.php" id="mynav"> Client</a>
	    </li>

	    <li style="padding-bottom: 15px !important;" id="myn-l">
	    	<a href="part.php" id="mynav"> Partner</a>
	    </li>

	    <li style="padding-bottom: 15px !important;" id="myn-l">
	    	<a href="req.php" id="mynav"> Request</a>
	    </li>

	    <li style="padding-bottom: 15px !important;" id="myn-l">
	    	<a href="acad.php" id="mynav"> Academic</a>
	    </li>

	    <li style="padding-bottom: 15px !important;" id="myn-l">
	    	<a href="contact.php" id="mynav"> Contact</a>
	    </li>

	    <li style="padding-bottom: 15px !important;" id="myn-l">
	    	<a href="set.php" id="mynav"> Settings</a>
	    </li>

	    <li style="padding-bottom: 15px !important;" id="myn-l">
	    	<a href="logout.php" id="mynav"> Logout</a>
	    </li>		    
		    
	</ul>
<!-- dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->
</nav>

<div class="container-fluid">
	
	<div class="row">

		<div class="col m2 l2" id="navigation" style="border-right:4px solid #2E294E;height: 550px;">
			<br>
			<p></p>

			<a href="dashboard.php" id="link" style="color: #2E294E;font-size: 17px;">
				<i class="fas fa-user"></i> Client
			</a>
			<p></p>
			<a href="part.php" id="link" style="color: #2E294E;font-size: 17px;">
				<i class="fas fa-arrow-right"></i> Partner
			</a>
			<p></p>
			<a href="req.php" id="link" style="color: #2E294E;font-size: 17px;">
				<i class="fas fa-arrow-right"></i> Request
			</a>
			<p></p>
			<a href="acad.php" id="link" style="color: #2E294E;font-size: 17px;">
				<i class="fas fa-arrow-right"></i> Academic
			</a>
			<p></p>
			<a href="contact.php" id="link" style="color: #2E294E;font-size: 17px;">
				<i class="fas fa-address-book"></i> Contact
			</a>
			<p></p>
			<a href="set.php" id="link" style="color: #2E294E;font-size: 17px;">
				<i class="fas fa-cogs"></i> Settings
			</a>
			<p></p>
			<a href="logout.php" id="link" style="color: #880000;font-size: 17px;">
				<i class="fas fa-power-off"></i> Logout
			</a>

			<br><br><br>
			
		</div>

		<div class="col s12 m10 l10" style="height: 550px; overflow: auto;">
			<br>
			 <h5 style="color: #2E294E;"><i class="fas fa-cogs"></i> SETTINGS </h5>
			<hr>
			<br>

			<form method="post" class="container">
              
              <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px; border-radius: 50%;"></i> Old Password</p>
              <input name="opass" class="form-control" type="password" required style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
              <br>

              <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px; border-radius: 50%;"></i>New Password</p>
              <input name="npass" class="form-control" type="password" required style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
              <br>

              <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px; border-radius: 50%;"></i>Retype New Password</p>
              <input name="cpass" class="form-control" type="password" required style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
              <br>

              <center>
	              <button name="subpas" style="padding: 15px 20px; background: #2E294E; color: white;">
	                Change Password <i class="fa fa-lock"></i>
	              </button>
         	  </center>

            </form>
            <br><br>

            <?php  

              if(isset($_POST['subpas'])){

                $op = $_POST['opass'];
                $np = $_POST['npass'];
                $cp = $_POST['cpass'];

                $chk = $pdo->prepare("SELECT * FROM admin WHERE pass = ?");
				$chk->bindParam(1, $op);
				$chk->execute();

				if($chk->rowCount() > 0){

					if($np != $cp){

						echo'<script>alert("PASSWORD MIS-MATCHED !!");</script>';
						echo'<meta http-equiv="refresh" content="0; url=set.php?add3=show">';

					}else{

						$upd = $pdo->prepare("UPDATE admin SET pass = '$np'");
						$upd->execute();

						if($upd){

							echo'<script>alert("PASSWORD CHANGED SUCCESSFULLY !!");</script>';

						}

					}

				}else{

					echo'<script>alert("YOU CANNOT CHANGE THIS PASSWORD !!");</script>';

				}	

              }

            ?>
			
		</div>

	</div>

</div>

<div id="footer" style="margin-bottom: -30px;margin-top: -20px;color: white;">
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