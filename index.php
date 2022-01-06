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
                        	<a href="#aboutus" style="color: black; font-size:15px;padding-bottom:10px;" id="slink">
                        	<span uk-icon="icon: triangle-right"></span> ABOUT US
                        </a>
                        </li>
                        <li>
                        	<a href="#whatwedo" style="color: black; font-size:15px;padding-bottom:10px;" id="slink">
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
                        	<a href="#aboutus" style="color: black; font-size:15px;padding-bottom:10px;" id="slink2">
                        		<span uk-icon="icon: triangle-right"></span> ABOUT US
                        	</a>
                        </li>
                        <li>
                        	<a href="#whatwedo" style="color: black; font-size:15px;padding-bottom:10px;" id="slink2">
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

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 3000; pause-on-hover: true; min-height: 400; max-height: 500">

    <ul class="uk-slideshow-items" max>
        <li>
            <img src="image/h3.jpeg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-right uk-width-medium">
                <h3 class="uk-margin-remove">
                    <img src="image/elogo.png" style="width: 120px; height: 60px;background: white;padding: 4px;border-radius: 5px;">
                </h3>
                <p class="uk-margin-remove" style="font-size: 20px; color: gold;">
                    <br>
                    We values teamwork and interdisciplinary collaboration as a path to insight and excellence in our work.
                </p>
            </div>
        </li>
        <li>
            <img src="image/h3.jpeg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-right uk-width-medium">
                <h3 class="uk-margin-remove">
                    <img src="image/elogo.png" style="width: 120px; height: 60px;background: white;padding: 4px;border-radius: 5px;">
                </h3>
                <p class="uk-margin-remove" style="font-size: 20px; color: gold;">
                    <br>
                    We are experts in what we do, We have specialized teams to support our clients
                    <br>
                    Become a Client Today 

                    <p></p>

                    <a href="client.php" style="background: gold; color: black;border:2px solid black; padding: 10px;border-radius: 5px;text-decoration: none;">
                        BECOME A CLIENT
                    </a>

                </p>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>

<nav style="background: #130f40">
    <h4 style="color: #130f40;">hhhhhhh</h4>
</nav>

<div class="uk-container">
    <br>
    <div class="uk-child-width-expand@s uk-text-center" uk-grid uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500">
        <div uk-scrollspy-class="uk-animation-slide-bottom">
            <div class="uk-card uk-card-default uk-card-body" style="border:1px solid #0c2461;height: 350px; overflow:hidden;">
                <i class="fas fa-binoculars" style="font-size: 30px;color: white; background: #0c2461; padding: 30px; border-radius: 100%;"></i>
                <br>
                <b style="color:black;font-size:20px;letter-spacing: 1px;">Vision</b>
                <br>
                <p style="color:black; letter-spacing: 1px; word-spacing: 2px; text-align: justify">
                    To be the only TRUE real estate franchise that provides 100% EXCELLENCE & CONSISTENT customer experience.
                </p>
            </div>
        </div>

        <div uk-scrollspy-class="uk-animation-slide-bottom">
            <div class="uk-card uk-card-default uk-card-body" style="border:1px solid #220000;height: 350px; overflow: hidden;">
                <i class="fas fa-file-alt" style="font-size: 30px;color: white; background: #220000; padding: 30px; border-radius: 100%;padding-right: 35px !important; padding-left: 35px !important"></i>
                <br>
                <b style="color:black;font-size:20px;letter-spacing: 1px;">Mision</b>
                <br>
                <p style="color:black; letter-spacing: 1px; word-spacing: 2px; text-align: justify">
                    To redefine the real estate profession to further strengthen sustainable development, by so doing; providing the highest level of honesty and expertise.
                </p>
            </div>
        </div>

        <div uk-scrollspy-class="uk-animation-slide-bottom">
            <div class="uk-card uk-card-default uk-card-body" style="border:1px solid #130f40;height: 350px;overflow: hidden;">
                <i class="fas fa-bullhorn" style="font-size: 30px;color: white; background: #130f40; padding: 30px; border-radius: 100%;"></i>
                <br>
                <b style="color:black;font-size:20px;letter-spacing: 1px;">Core Values</b>
                <br>
                <p style="color:black; letter-spacing: 1px; word-spacing: 2px; text-align: center;">
                    - Quality <br>
                    - Integrity <br>
                    - Agility <br>
                    - Courage <br>
                    - Respect <br>
                    - Trust
                </p>
            </div>
        </div>
    </div>
    
</div>

<div class="uk-container">
    <center style="margin-top: 65px;">
        <img src="image/logo2.png" uk-scrollspy="cls: uk-animation-scale-down; repeat: true" style="width: 90px; height:120px; padding: 10px;border:2px solid #220000; background: white;border-radius: 50px;">
    </center>
 </div>

<nav class="uk-container" style="background: #220000;margin-top: -65px;border-bottom-right-radius: 100px;border-bottom-left-radius: 100px;" id="aboutus">
    <br><br>

        <h5 style="text-align: center; color: white;font-size: 30px;">
            - About Us -
        </h5>
        <p uk-scrollspy="cls: uk-animation-slide-bottom;" class="uk-container" style="text-align: center; letter-spacing: 1px;color: white; font-size: 17px;padding: 20px;">

            Bluedge is a real estate firm with professionalism in the real estate world, having had experience in the public and private sector with rich resource of prefessionals in the real estate world. Our team of conslutants <em style="color: gold;">(BLUEDGE GROUP OF CONSULTANTS)</em> are well informed with latest updates, and ofcourse can deliver a world class service.

        </p>

    <br>
</nav>

<div class="uk-container" id="whatwedo">
    <br>
    <h4 uk-scrollspy="cls: uk-animation-slide-left;" style="text-align: center;font-weight: bold;color: #30336b;font-size: 30px;font-family: lucida sans;">
        WHAT WE DO
        <br>
        <i style="font-size: 20px;font-family: lucida sans !important;">We never fail to deliver the best to our clients</i>
    </h4>

    <ul uk-accordion id="cvales" uk-scrollspy="cls: uk-animation-slide-bottom;">
        <li class="uk-open">
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> CONSULTANCY
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px;text-align: justify;">
                    We have astute professionals that are seasoned in land and landed property transactions and investment. We strategically meet the investors criteria by giving out plethora opportunities inherent in the land investment and market potentials of the client property investment opportunities that may be considered best at a particular period of time.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> PROJECT MANAGEMENT
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px;text-align: justify;">
                    At Bluedge, we see to the operation, control, maintenance, and oversight of real estate and physical property. This can include residential, commercial, agricultural, industrial and real estate. Management indicate the need of real estate to be cared for and monitored, with accountability for attention towards its useful life and conditions considered.This is a much akin to the role of management of land investment.
                    <br>
                    Property management is also the management of personal property, equipments and physical capital assets that are acquired and used to build, repair and maintain end item deliverables. Property management involves the processes, systems and manpower required to manage the life cycle of all acquired property as defined above including acquisition, control, accountability, responsibility, maintenance, utilization and disposition.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> LAND SOURCING
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px;text-align: justify;">
                    We source for land in the event of an prospective clients request considering the best location possible to drive your investment.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> ESTATE DEVELOPMENT
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px; text-align: justify;">
                    At Bluedge we organize developers to buy land, finance real estate deals, build or have builders build projects, create, imagine, control and orchestrate the process of development from the beginning to end. Developers usually take the risk in the creation or renovation of real estate and receive the greatest rewards.
                    <br>
                    Typically, developers purchase a tract of land, determine the marketing of the property, develop the building program and design, obtain the necessary public approval and financing, build the structures, rent out, manage and ultimately sell it.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> LAND TITLE PERFECTION
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px;text-align:justify;">
                   Land perfection title refers to a state of ownership resulting from a deed unblemished by liens or other defects. Such a deed provides the holder with clear ownership that cannot be challenge by a creditor or other claimant. THe deed is in optimal condition for a smooth sale or transfer of property.
                    <br>
                    It is important to understand the difference between title and deed. Title refers to the rights of ownership of a specific asset, often a unit of real estate. Deed refers to the physical document prepared for a sale or transfer.
                    <br>
                    The deed list legal details of the property such as exact location and any easements or liens on the property. When preparing to issue a mortgage for the purchase of a property.Bluedge company will thoroughly research the title history of that property. The goal of this research is to uncover any hidden defects that would have to appear on the deed being prepared. Title includes (Land Allocation, Certificate of Occupancy, Governor Consent, Land Ratification, Land Accommodation, building approvals and other approvals attached to land)
                </p>
            </div>
        </li>
    </ul>
    
</div>
<br><br>

<nav class="uk-container" style="background: #130f40;border-top-right-radius: 100px;border-top-left-radius: 100px;" id="aboutus">
    <br>

        <h5 style="text-align: center; color: gold;font-size: 25px;font-family: lucida sans">
            How does our services benefit the <br> Buyers and Sellers who work with BPC?
        </h5>
        <p uk-scrollspy="cls: uk-animation-slide-bottom;" class="uk-container" style="text-align: center; letter-spacing: 1px;color: gold; font-size: 17px;">

            Our services are top notched in the industry. You get more time with competent agents, more communication time and more attention. We build relationship with our client thereby making our client feel at home. Problem solving with us is normal as we solve problems regarding housing issues. We are well informed with latest infomations, making sure that our client does not buy the wrong house.

        </p>

        <br><br>

    <br>
</nav>

<div class="uk-container">
    <center style="margin-top: -65px;">
        <img src="image/logo2.png" uk-scrollspy="cls: uk-animation-scale-down; repeat: true" style="width: 90px; height:120px; padding: 10px;border:2px solid #2E294E; background: white;border-radius: 50px;">
    </center>
 </div>

 <div class="uk-container">
    <P></P>
    <h4 style="text-align: center; color: #440000;font-family: mv boli;">
             Our company’s team of committed professionals embrace the following core values: 
    </h4>

    <ul uk-accordion id="cvales" uk-scrollspy="cls: uk-animation-slide-bottom;delay:500">
        <li>
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> QUALITY
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px;text-align: justify;">
                    We deliver only excellence and aim to exceed expectations in everything we do.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> COURAGE
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px;text-align: justify;">
                    We make decisions and act in the best interests of our clients, even in the face of personal or professional adversity.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> INTEGRITY
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px;text-align: justify;">
                    We conduct ourselves in the highest ethical standards, demonstrating honesty and fairness in every decision and action.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> AGILITY
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px;text-align: justify;">
                    We execute expeditiously to address our clients’ needs.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">
                <i class="fas fa-chevron-circle-right"></i> RESPECT AND TRUST
            </a>
            <div class="uk-accordion-content">
                <p style="font-size: 16px;text-align: justify;">
                    We treat our clients and each other with dignity and respect at all times.
                </p>
            </div>
        </li>
    </ul>

    <br><br>
     
 </div>
 <br><br>
 <div id="contacts" style="border-top: 5px solid #000044;">

    <center style="margin-top: -50px;">
        <h5 uk-scrollspy="cls: uk-animation-scale-down;repeat:true;" style="font-weight:bold; color:#2E294E; background: white; padding: 10px;border-right:4px solid #2E294E;border-left: 4px solid #2E294E; width: 200px;font-family: lucida sans; font-size: 25px;">
            - CONTACT - <br>
            <i class="fas fa-arrow-alt-circle-down" style="font-size: 30px; color: #2E294E;"></i>
        </h5>
    </center>
    <br>

    <div class="uk-container">
    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <div class="uk-card uk-card-body">
                <center uk-scrollspy="cls: uk-animation-slide-bottom;">
                    <i uk-icon="icon:receiver;" style="color: #2E294E;"></i>
                    <p style="font-family: candara; font-size: 20px;letter-spacing: 1px;">
                        08069200433 <br> 07086335481
                    </p>
                </center>
            </div>
        </div>

        <div>
            <div class="uk-card uk-card-body">
                <center uk-scrollspy="cls: uk-animation-slide-bottom;">
                    <i uk-icon="icon:mail;" style="color: #2E294E;"></i>
                    <p style="font-family: candara; font-size: 20px;letter-spacing: 1px;">
                        bluedgeproperty@gmail.com
                    </p>
                </center>
            </div>
        </div>

        <div>
            <div class="uk-card uk-card-body">
                <center uk-scrollspy="cls: uk-animation-slide-bottom;">
                    <i uk-icon="icon:comments;" style="color: #2E294E;"></i>
                    <p style="font-family: candara; font-size: 20px;letter-spacing: 1px;">
                        <a href="https://web.facebook.com/BluedgePropertyCo" target="_blank">
                            <i uk-icon="icon:facebook;ratio:2;" style="color: #2E294E;padding: 5px;"></i>
                        </a>

                        <a href="https://twitter.com/BluedgeCompany" target="_blank">
                            <i uk-icon="icon:twitter;ratio:2;" style="color: #2E294E;padding: 5px"></i>
                        </a>

                        <a href="https://www/instagram.com/bluedgepropertycompany" target="_blank">
                            <i uk-icon="icon:instagram;ratio:2;" style="color: #2E294E;padding: 5px;"></i>
                        </a>
                    </p>
                </center>
            </div>
        </div>
    </div>

        <center>
            <a uk-scrollspy="cls: uk-animation-scale-down;repeat:true;" class="uk-button uk-button-default" href="#modal-sections2" uk-toggle style="background: #130f40;color: white;" id="smg">SEND US  A MESSAGE</a>
        </center>

        <a href="#top" uk-scroll style="font-size: 40px;float: right; padding: 5px;background: #000044;color: white;margin-top: -40px;">
            <i uk-icon="icon:arrow-up;"></i>
        </a>

    </div>
     
 </div>

<br><br>

<div id="footer">
        <!--/////////////////////////////////-->
     <center style="color: #000;border-top: 10px solid #130f40;">
        <p style="padding: 10px;padding-top: 20px !important;font-size: 15px !important;">
            &copy; Copyright <script> var d = new Date();var n = d. getFullYear(); document.write(n);</script> <a href="admin/alogin.php" style="color: black;">Bluedge</a> Property Company
        </p>
     </center>
 </div>

        <div id="modal-sections2" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">
                    <h4 class="">
                       SEND A MESSAGE
                    </h4>
                </div>
                <div class="uk-modal-body">
                    
                    <form method="post">
                        <input name="fname" class="uk-input" type="text" placeholder="Full Name" required>
                        <p></p>
                        <input name="phone" class="uk-input" type="phone" placeholder="Phone Number" required>
                        <p></p>
                        <input name="email" class="uk-input" type="email" placeholder="Email" required>
                        <p></p>
                        <textarea name="msg" class="uk-textarea" placeholder="Message" required></textarea>
                        <p></p>
                        <button name="subc" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">
                            Submit <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>

                    <?php

                        if(isset($_POST['subc'])){

                          $fn = $_POST['fname'];
                          $ph = $_POST['phone'];
                          $em = $_POST['email'];
                          $msg = $_POST['msg'];

                          if($msg == ''){
                            echo'<script>alert("Enter Message First !!");</script>';
                          }else{

                            $ins = $pdo->prepare("INSERT INTO contact (fname, phone, email, msg, time) VALUES(?,?,?,?, CURRENT_TIMESTAMP)");
                            $ins->bindParam(1, $fn);
                            $ins->bindParam(2, $ph);
                            $ins->bindParam(3, $em);
                            $ins->bindParam(4, $msg);
                            $ins->execute();

                            if($ins){
                              echo "<script>alert('THANK YOU FOR CONTACTING US !!');</script>";
                            }

                          }

                        }


                    ?>

                </div>
            </div>
            <!-- modal end -->
        </div>

    	<!-- script -->
    	<script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </body>
</html>