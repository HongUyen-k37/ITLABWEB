 <?php require_once('Connections/conn.php'); ?>
 <?php //require_once('product_list.php'); ?>
 <?php
mysql_select_db($database_conn, $conn);
		mysql_set_charset('utf8',$conn);
		$get=$_GET['id'];
		$list= "SELECT * FROM danhmuc WHERE iddanhmuc='$get'";
		$result = mysql_query($list) or die($list);
		$row1=mysql_fetch_assoc($result);	


?>
<html>
	<head>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/jqueryEasing.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="footer, address, phone, icons" />
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/style-product.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
		<!-- Custom CSS -->
		<link href="css/full-slider.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="style.css" >
		<title><?php echo $row1['name']; ?></title>
	</head>
	<body>
		<div id="container">
		<?php include 'header.php'; ?>
		</div>	
			<?php include 'menu.php'; ?>
			
		<?php 
			 
					mysql_select_db($database_conn, $conn);
					$result= mysql_query("SELECT count(*) from sanpham", $conn);
					$size=3;
					$rows = mysql_fetch_array($result);
					$tongsosp= $rows[0];
					$tongsotrang = ceil($tongsosp/$size);
			 
			 ?>
			 
			 
			 <?php 
				$trang=isset($_GET['trang'])==true?$_GET['trang']:1 ;
				$id=isset($_GET['id'])==true?$_GET['id']:1 ;
			 ?>

			<div id="content-product">

				<?php include('product_list.php'); ?>
				
			 </div>
			 
			  <div class="phantrang" style="margin: 30px auto; padding: 0px 600px;">
			<?php
			for($i=1;$i<=$tongsotrang;$i++)
			{ ?>
				<?php echo '<a href="?trang=';?><?php echo $i;?><?php echo'">';?><?php echo $i; ?><?php echo'</a>'?>
			<?php }
			?>
			</div>
 

			<!-- end content-product -->
		<div><?php include 'footer.php'; ?></div>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script>
		$('.carousel').carousel({
			interval: 8000 //changes the speed
		})
		</script>	
</body>