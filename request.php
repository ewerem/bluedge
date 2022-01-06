<?php  
include'access/access.php';
?>

<!DOCTYPE html>
<html>
<head>
        <title>Request form</title>
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
		<h5 style="padding-bottom: 5px;">Request Form</h5>
	</center>
	<br>

	<form method="post">
		
		<i style="color:black; font-size:16px;">Name</i><br>
		<input type="text" name="name" id="field" required class="uk-input uk-form-large" style="color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Telephone</i><br>
		<input type="number" name="phone" id="field" class="uk-input uk-form-large" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Email Address <small>(example@example.com)<small></i><br>
		<input type="email" name="email" id="field" class="uk-input uk-form-large" required style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
		<br><br>

		<i style="color:black; font-size:16px;">Address</i><br>
		<textarea name="hadd" id="field" class="uk-textarea uk-form-large" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;height: 80px;font-size: 16px;"></textarea>
		<br><br>

        <i style="color:black; font-size:16px;">Request for </i><br>
        <p></p>
            
            <label style="font-size: 16px;">
                <input class="uk-checkbox" name="arey[]" value="Buy" type="checkbox"> Buy
            </label>
            <br>
            <label style="font-size: 16px;">
                <input class="uk-checkbox" name="arey[]" value="Rent" type="checkbox"> Rent
            </label>
            <br>
            <label style="font-size: 16px;">
                <input class="uk-checkbox" name="arey[]" value="Lease" type="checkbox"> Lease
            </label>

        <br><br>

		<i style="color:black; font-size:16px;">Your Budget</i><br>
        <input type="text" name="bugt" id="field" class="uk-input uk-form-large" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
        <br><br>

        <i style="color:black; font-size:16px;">Specification</i><br>
        <select name="spec" id="field" class="uk-select uk-form-large" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
            <option value="default"></option>
            <option value="self_contain">self contain</option>
            <option value="mini_flat">mini flat</option>
            <option value="2_bedroom_flat">2 bedroom flat</option>
            <option value="3_bedroom_flat">3 bedroom flat</option>
            <option value="Bungalow">bungalow</option>
            <option value="duplex">duplex</option>
        </select>
        <br><br>

        <i style="color:black; font-size:16px;">Other specification</i><br>
        <textarea name="ospec" id="field" class="uk-textarea uk-form-large" required="" style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;height: 80px;font-size: 16px;"></textarea>
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

		$fna = $_POST['name'];
		$phn = $_POST['phone'];
		$ema = $_POST['email'];
		$had = $_POST['hadd'];
		$ary = $_POST['arey'];
		$bug = $_POST['bugt'];
		$spe = $_POST['spec'];
        $osp = $_POST['ospec'];

		$are = implode($ary, ',');

		$ins = $pdo->prepare("INSERT INTO request (name, phone, email, address, reqfor, budget, spec, ospec, time) VALUES(?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)");
		$ins->bindParam(1, $fna);
		$ins->bindParam(2, $phn);
		$ins->bindParam(3, $ema);
		$ins->bindParam(4, $had);
		$ins->bindParam(5, $are);
		$ins->bindParam(6, $bug);
		$ins->bindParam(7, $spe);
        $ins->bindParam(8, $osp);
		$ins->execute();

		if($ins){
			echo'<script>alert("THANK YOU, WE HAVE RECIEVED YOUR REQUEST");</script>';
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