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
	</head>
<style>

.chitiet{
	
}
.chitiet1{
    padding-left: 50px;
    padding-right: 40px;
    margin-bottom: 50px;
    position: relative;
    text-align: center;
	width: 100%;
	
}
.chitiet2 .img{
    max-width: 300px;
    min-width: 300px;
    max-height: 300px;
    min-height: 300px;
    display: inline;
	    padding: 4px;
    line-height: 1.42857143;
	background-color: #fff;
    border: 1px solid #337ab7;
    border-radius: 4px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;	
}

.chitiet2{
	    text-decoration: none;
		float: left;
		    width: 26%;;
}

.chitiet3{
	float: left;
	margin: 0px 0px 0px 1px;
	width: 49%;
	position: relative;
}

.chitiet3 p,.chitiet3 .ava-price{
	
	padding:5px;
	border-bottom:1px solid #ccc;
}
.chitiet3 .ava-price .availability_sku{
	color:#0876e6;
}
.chitiet3 .ava-price  .price{
	color:red;
}
.chitiet3  button{
	height:50px;
	width:100px;
	display:inline-block;
	border-radius:8px;
	margin-top:20px;
	color:#fff;
	background:#009900;

}
#product-brick h2{
	font-size:20px;
	color:#009900;
	font-weight: bold;
	border-bottom:1px solid #ccc;
	padding:15px 15px 20px;
	margin:30px 10px 15px 0px;
}

.contentsp p{
	width: 100%;
	overflow: scroll;
}
</style>


<body>

<div id="container">
		<?php include 'header.php'; ?>
</div>	
<?php include 'menu.php'; ?>
			
			<div class="chitiet" style="margin-top: 70px;">
					<div class="chitiet1">
							<div class="chitiet2" style="text-decoration: none; margin-left: 20px;" href="#" alt="" title="">
								<img class="img" src="<?php echo $row2['image_link'];?>">
							</div>
							<div class="chitiet3" style=" margin-left: 70px; border: 2px dashed #337ab7;">
								<h2 style="text-align:center;text-transform:uppercase;">
								<?php echo $row2['name'];?>
								</h2>
								</br>
									Thương Hiệu : A
								
								<div class="ava-price">
									<div class="availability_sku"> Tình Trạng : <?php if($row2['created']==1) echo '<span style="color: green; font-weight: bold;">Còn hàng</span>'; else echo '<span style="color: black; font-weight: bold;">Hết hàng</span>';?>
									<div class="price">Giá: <?php echo $row2['price'];?>₫</div>
								</div>
								<button > Cho vào giỏ hàng</button>
								
								
								</div>
								<div class="contentsp"><h3>Chi tiết sản phẩm</h3>
								<p>
										Chức năng: <?php echo $row2['content'];?>
										Sản phẩm này nhằm để thực hiện 
								</p>
								</div>
							</div>
					
					</div>

			</div>

</html>