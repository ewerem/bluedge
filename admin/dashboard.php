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

	<title>Dashboard</title>
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
			 <h5 style="color: #2E294E;"><i class="fas fa-users"></i> CLIENT </h5>
			<hr>
			<br>

			<?php  

				$sel = $pdo->prepare("SELECT * FROM client ORDER BY id DESC");
				$sel->execute();

				if($sel->rowCount() > 0){

					while($f = $sel->fetch()){

			?>
				<a href="c-info.php?id=<?=$f['id']?>" title="click to view more details">
				<table class="table table-sm" style="width: 100%;border-left:5px solid #000088;border-right:5px solid #000088;border-top:1px solid #bbb;border-bottom:1px solid #bbb;">
                <tr>
                  <td style="font-size:14px">
                    <p style="font-family: lucida sans; font-weight:bold;color:#000">
                      FULLNAME <i class="fas fa-angle-right"></i> <?=$f['fname']?>
                      <br>
                      PHONE <i class="fas fa-angle-right"></i> <?=$f['phone']?>
                      <br>
                      <a href="del.php?id=<?=$f['id']?>&name=<?=$f['fname']?>" style="float:right;margin-top: -25px;padding: 5px; color: white;background: red;">X
                      </a>
                    </p>
                  </td>
                </tr>
              </table>
          	  </a>
              <br>
			  <!-- //////////////////////// -->

			<?php

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