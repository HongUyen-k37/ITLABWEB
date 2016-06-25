 <?php require_once('Connections/conn.php'); ?>
 <?php
mysql_select_db($database_conn, $conn);
		mysql_set_charset('utf8',$conn);
		$idsp=$_GET['idsp'];
		$list= "SELECT * FROM sanpham WHERE id='$idsp'";
		$result = mysql_query($list) or die($list);
		$row2=mysql_fetch_assoc($result);	


?>

<!doctype html>
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
		
		<title>Chi tiết sản phẩm</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/cloudzoom.css" />
		<script type="text/javascript" src="js/cloudzoom.js"></script>
		<!-- Gọi hàm -->
        <script type="text/javascript">
            CloudZoom.quickStart();
        </script> 

	</head>
<style>
	.chitiet123{
		width:80%;
		float:right;
		height:500px;
	}
	.chitiet h3{
		text-transform:uppercase;
		background:#27ae60;
		padding:15px;
		color:#fff;
	}
	.chitiet1 .chitiet2 img
	{
		padding:10px;
		max-height:400px;
		max-width:350px;
		min-height:300px;
		min-width:150px;
		border:1px solid #ccc;
		height:400px;
	}
	.chitiet1 .chitiet3{
		
	}
	.chitiet3 h2{
		font-weight:bold;
		padding:5px;
		color:#27ae60;
	}
	.chitiet3 .ava-price{
		padding:10px 0px 0px 0px;
	}
	.splienquan{
		
		height:200px;
		margin:40px 0px 0px 0px;
	}
	.chitiet1 .chitiet2,.chitiet1 .chitiet3,.splienquan{
		width:40%;
		float:left;
	}
	.thongtinsp{
		width:80%;
		float:right;
		height:700px;
	}
	.thongtinsp h3,.danhgiasp h3{
		text-transform:uppercase;
		color:#27ae60;
		font-size:20px;
		font-weight:bold;
		border-bottom:2px solid #27ae60;
	}
	.chucnang{
		height:600px;
		border:1px solid #ccc;
	}
	.danhgiasp{
		width:80%;
		float:right;
		height:400px;
	}
	.splienquan h4{
		color:#27ae60;
		border-bottom:1px solid #27ae60;
		padding:5px;
	}
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  .content{
	  height:1500px;
  }
</style>


<body>

		<div id="container">
			<?php include 'header.php'; ?>
		</div>	
		<?php include 'menu.php'; ?>
		<div class="content"  style="z-index:100;">
			<div class="chitiet123" style="margin-top: 70px;">
					<h3> Chi tiết sản phẩm</h3>
					<div class="chitiet1">
							<div class="chitiet2" style="text-decoration: none;" href="#" alt="" title="">
								<img  src="<?php echo $row2['image_link'];?>" data-cloudzoom ="zoomImage:'<?php echo $row2['image_link'];?>'" class = "cloudzoom">
							</div>
							<div class="chitiet3" >
								<h2 style="text-transform:uppercase;">
								<?php echo $row2['name'];?>
								</h2>
								</br>
									Thương Hiệu : A
								
								<div class="ava-price">
									<div class="availability_sku"> Tình Trạng : <?php if($row2['created']==1) echo '<span style="color: green; font-weight: bold;">Còn hàng</span>';
										else echo '<span style="color: black; font-weight: bold;">Hết hàng</span>';?>
									<div class="price">Giá: <?php echo $row2['price'];?>₫</div>
								</div>

							</div>
								
							</div>
					
					</div>
					
					<div class="splienquan">
						<h4> Sản phẩm liên quan</h4>
						<div id="myCarousel" class="carousel slide" data-ride="carousel" height="180px">

							<!-- Wrapper for slides -->
							 <div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="<?php echo $row2['image_link'];?>" >
								</div>

								<div class="item">
									<img src="<?php echo $row2['image_link'];?>" >
								</div>

								<div class="item">
									<img src="<?php echo $row2['image_link'];?>" >
								</div>

								<div class="item">
									<img src="<?php echo $row2['image_link'];?>" >
								</div>
							</div>

							 <!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							 
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

			</div>
			<div class="thongtinsp">
				<h3> Thông tin sản phẩm</h3>
				<div class="chucnang">
					Chức năng: <?php echo $row2['content'];?>
					Sản phẩm này nhằm để thực hiện 
				</div>
			</div>
			
			<div class="danhgiasp">
				<h3> Đánh giá sản phẩm</h3>
				
			</div>
		</div>
				<div><?php include 'footer.php'; ?></div>
</body>

</html>