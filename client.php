<?php  
include'access/access.php';
?>

<!DOCTYPE html>
<html>
<head>
        <title>Bluedge</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
	  	<meta http-equiv="x-ua-compatible" content="ie=edge">
	  	<meta name="keywords" content="Bluedge Property Company" />
		<link rel="shortcut icon" type="image/x-icon" href="image/fav.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

        <link rel="stylesheet" href="css/uikit.min.css" />
        <style>
        	body{
        		font-family: lucida sans;
        	}
        	#navlink{
        		color: gold;
        	}
        	#navlink:hover{
        		border:10px solid #2E294E;
        		background: white;
        		color:black;
        	}
        	#slink:hover{
        		padding-left: 15px;
        		transition: 1s;
        		background: black;
        		color:gold !important;
        	}
        	#slink2:hover{
        		transition: 1s;
        		background: black;
        		color:gold !important;
        	}

            #smg:hover{
                background: white !important;
                border:2px solid #000;
                color:black !important;
            }

            @media only screen and (min-width: 600px) {
              #cvales{
                padding-right: 250px;
                padding-left: 250px;
              }
            }

            #field:focus{
				border:3px solid #2E294E !important;
			}
        </style>
    </head>
    <body>

<nav class="uk-navbar-container" uk-navbar  style="background: #130f40;" id="top">
    <div class="uk-navbar-left uk-visible@m">

        <ul class="uk-navbar-nav">
            <li><a href="index.php" id="navlink">HOME</a></li>
            <li><a href="client.php" id="navlink">CLIENT</a></li>
            <li><a href="partner.php" id="navlink">BE A PARTNER</a></li>
            <li>
                <a href="#" style="color: gold;">
                	<span uk-icon="icon:more-vertical"></span> EXTRAS
                </a>
                <div class="uk-navbar-dropdown" uk-drop="mode: click">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li>
                        	<a href="index.php?#aboutus" style="color: black; font-size:15px;padding-bottom:10px;" id="slink">
                        	<span uk-icon="icon: triangle-right"></span> ABOUT US
                        </a>
                        </li>
                        <li>
                        	<a href="index.php?#whatwedo" style="color: black; font-size:15px;padding-bottom:10px;" id="slink">
                        		<span uk-icon="icon: triangle-right"></span> WHAT WE DO
                        	</a>
                        </li>
                        <li>
                        	<a href="request.php" style="color: black; font-size:15px;padding-bottom:10px;" id="slink">
                        		<span uk-icon="icon: triangle-right" ></span>REQUEST HERE
                        	</a>
                        </li>
                        <li>
                        	<a href="career.php" style="color: black; font-size:15px;padding-bottom:10px;" id="slink">
                        		<span uk-icon="icon: triangle-right"></span>CAREERS
                        	</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>
    <div class="uk-navbar-left uk-hidden@m">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#" style="color: gold !important;">
                	<span uk-icon="icon:menu; ratio:2"></span>
                </a>
                <div class="uk-navbar-dropdown" uk-drop="mode: click">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                    	<li>
                        	<a href="index.php" style="color: black; font-size:15px;padding-bottom:10px;" id="slink2">
                        		<span uk-icon="icon: triangle-right"></span> HOME
                        	</a>
                        </li>
                        <li>
                        	<a href="client.php" style="color: black; font-size:15px;padding-bottom:10px;" id="slink2">
                        		<span uk-icon="icon: triangle-right"></span> CLIENT
                        	</a>
                        </li>
                        <li>
                        	<a href="partner.php" style="color: black; font-size:15px;padding-bottom:10px;" id="slink2">
                        		<span uk-icon="icon: triangle-right"></span> BE A PARTNER
                        	</a>
                        </li>
                        <li>
                        	<a href="index.php?#aboutus" style="color: black; font-size:15px;padding-bottom:10px;" id="slink2">
                        		<span uk-icon="icon: triangle-right"></span> ABOUT US
                        	</a>
                        </li>
                        <li>
                        	<a href="index.php?#whatwedo" style="color: black; font-size:15px;padding-bottom:10px;" id="slink2">
                        		<span uk-icon="icon: triangle-right"></span> WHAT WE DO
                        	</a>
                        </li>
                        <li>
                        	<a href="request.php" style="color: black; font-size:15px;padding-bottom:10px;" id="slink2">
                        		<span uk-icon="icon: triangle-right" ></span>REQUEST HERE
                        	</a>
                        </li>
                        <li>
                        	<a href="career.php" style="color: black; font-size:15px;padding-bottom:10px;" id="slink2">
                        		<span uk-icon="icon: triangle-right"></span>CAREERS
                        	</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="uk-container">
	<br><br>
	
	<center>
		<img src="image/logo2.png" style="width: 40px; height:70px;">
		<h5 style="padding-bottom: 5px;">Prospective Client Form</h5>
	</center>
	<br>

	<form method="post">
		
		<i style="color:black; font-size:16px;">Referred By</i><br>
		<input type="text" name="refby" id="field" class="uk-input uk-form-large" style="color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Name</i><br>
		<input type="text" name="fname" id="field" class="uk-input uk-form-large" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Telephone</i><br>
		<input type="number" name="phone" id="field" class="uk-input uk-form-large" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Cellular/Other</i><br>
		<input type="text" name="ophone" id="field" class="uk-input uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Email Address <small>(example@example.com)<small></i><br>
		<input type="email" name="email" id="field" class="uk-input uk-form-large" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Home Address</i><br>
		<textarea name="hadd" id="field" class="uk-textarea uk-form-large" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;height: 80px;font-size: 16px;"></textarea>
		<br><br>

		<i style="color:black; font-size:16px;">Business Address</i><br>
		<textarea name="badd" id="field" class="uk-textarea uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;height: 80px;font-size: 16px;"></textarea>
		<br><br>

		<i style="color:black; font-size:16px;">Are you a</i><br>
		<p></p>
		 	
      		<label style="font-size: 16px;">
      			<input class="uk-checkbox" name="arey[]" value="Seller" type="checkbox"> Seller
      		</label>
      		<br>
            <label style="font-size: 16px;">
            	<input class="uk-checkbox" name="arey[]" value="Investor" type="checkbox"> Investor
            </label>
            <br>
            <label style="font-size: 16px;">
            	<input class="uk-checkbox" name="arey[]" value="Buyer" type="checkbox"> Buyer
            </label>

		<br><br>

		<i style="color:black; font-size:16px;">Seller's(Property Document List)</i><br>
		<input type="text" name="spdoc" id="field" class="uk-input uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Property Address & Information</i><br>
		<textarea name="padd" id="field" class="uk-textarea uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;height: 80px;font-size: 16px;"></textarea>
		<br><br>

		<i style="color:black; font-size:16px;">Investor(Aim & Objective)</i><br>
		<input type="text" name="invest" id="field" class="uk-input uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Buyer's(Spec and Budget)</i><br>
		<input type="text" name="bsb" id="field" class="uk-input uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">

		<h6 style="font-size: 18px;">
			<b>Contract Status:</b> Contract Accepted and Signed.
		</h6>
		<p></p>

		<i style="color:black; font-size:16px;">Yes and Signature</i><br>
		<input type="text" name="yands" id="field" class="uk-input uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">No and Reason</i><br>
		<input type="text" name="nandr" id="field" class="uk-input uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">

		<h6 style="font-size: 18px;">
			<b>Appointment Request:</b> Please let us know your availability for a conference call or meeting.
		</h6>
		<p></p>

		<i style="color:black; font-size:16px;">Time</i><br>
		<input type="time" name="stime" id="field" class="uk-input uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Date</i><br>
		<input type="date" name="sdate" id="field" class="uk-input uk-form-large" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<center>
			<button name="subform" style="padding: 15px 35px;background: #2E294E; color:#fff; border:2px solid #2E294E;font-size: 20px;">
				Submit <i class="fas fa-paper-plane"></i>
			</button>
		</center>

	</form>

	<br><br>
</div>

  <br>

<?php  

	if(isset($_POST['subform'])){

		$ref = $_POST['refby'];
		$fna = $_POST['fname'];
		$phn = $_POST['phone'];
		$oph = $_POST['ophone'];
		$ema = $_POST['email'];
		$had = $_POST['hadd'];
		$bad = $_POST['badd'];
		$ary = $_POST['arey'];
		$spd = $_POST['spdoc'];
		$pad = $_POST['padd'];
		$inv = $_POST['invest'];
		$bsb = $_POST['bsb'];
		$yas = $_POST['yands'];
		$nar = $_POST['nandr'];
		$tim = $_POST['stime'];
		$dat = $_POST['sdate'];

		$are = implode($ary, ',');

		$ins = $pdo->prepare("INSERT INTO client(ref, fname, phone, ophone, email, hadd, badd, arey, spdoc, padd, invest, bsb, yands, nandr, stime, sdate, time) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)");
		$ins->bindParam(1, $ref);
		$ins->bindParam(2, $fna);
		$ins->bindParam(3, $phn);
		$ins->bindParam(4, $oph);
		$ins->bindParam(5, $ema);
		$ins->bindParam(6, $had);
		$ins->bindParam(7, $bad);
		$ins->bindParam(8, $are);
		$ins->bindParam(9, $spd);
		$ins->bindParam(10, $pad);
		$ins->bindParam(11, $inv);
		$ins->bindParam(12, $bsb);
		$ins->bindParam(13, $yas);
		$ins->bindParam(14, $nar);
		$ins->bindParam(15, $tim);
		$ins->bindParam(16, $dat);
		$ins->execute();

		if($ins){
			echo'<script>alert("THANK YOU, WE HAVE RECIEVED YOU INFORMATION");</script>';
		}else{
			echo'<script>alert("INFO NOT RECEIVED");</script>';	
		}

	}

?>

<div id="footer">
        <!--/////////////////////////////////-->
     <center style="color: #000;border-top: 10px solid #130f40;">
        <p style="padding: 10px;padding-top: 20px !important;font-size: 15px !important;">
            &copy; Copyright <script> var d = new Date();var n = d. getFullYear(); document.write(n);</script> Bluedge Property Company
        </p>
     </center>
 </div>


<!-- scripting file -->
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>

</body>
</html>