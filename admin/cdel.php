<?php  
session_start();
ob_start();
include'../access/access.php';
error_reporting(0);

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

	
</style>

</head>
<body style="background: #fff;">


<br><br><br><br><br>
	<center style="font-size: 25px;color: red;font-family: lucida sans;">

		Are You Sure You Want to Delete <?=strtoupper($_GET['name'])?> From Your Contact

	</center>
		<br><br>
	<center>
		<a href="cdel.php?id=<?=$_GET['id']?>&del" class="btn" style="background: green; color: white;">YES</a>
		<a href="contact.php" class="btn" style="background: red; color: white;">NO</a>
	</center>


<?php  

	if(isset($_GET['del'])){

		$id = $_GET['id'];

		$del = $pdo->prepare("DELETE FROM contact WHERE id = ?");
		$del->bindParam(1, $id);
		$del->execute();

		if($del){
			echo'<script>alert("DELETED SUCCESSFULLY !!");</script>';
			echo'<meta http-equiv="refresh" content="0; url=contact.php">';
		}

	}

?>


<!-- scripting file -->
<script src="../javascript/jquery-2.1.1.min.js"></script>
<script src="../javascript/materialize.js"></script>
<script src="../javascript/init.js"></script>

</body>
</html>