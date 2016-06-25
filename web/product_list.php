<?php require_once('Connections/conn.php'); ?>
<?php //require_once('menu.php'); ?>
 <?php require_once('product.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$start= ($trang-1)*3+1;
mysql_select_db($database_conn, $conn);
$get=$_GET['id'];
$query = "SELECT * FROM sanpham WHERE iddanhmuc='$get'";
$Record = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_fetch_assoc($Record);
$totalRows = mysql_num_rows($Record);


?>

<body>

 <div class="content-product-right">
			 
				
				<div id="product-brick"> <!-- gach -->
					<h2 style="text-align:center;text-transform:uppercase;padding-top: 40px;">
					<?php 
						echo $row1['name'];
					 ?></h2>
					<?php
					do{
						{
							echo '<div class="brick">
							<div class="brick-left" style="text-decoration: none;" href="#" alt="" title="">';?>
								<?php echo '<a href="sanpham.php?idsp=';?><?php echo $row['id'];?><?php echo '">';?><?php echo '<img class="img" src="';?><?php echo $row['image_link']; ?><?php echo '"';?><?php echo '</a>';?>
							<?php echo '</div>'; ?>
							<?php echo '<div class="brick-right"><p>';?>
								<?php echo '<span style="color: red; font-weight: bold;">';?><?php echo $row['name']; ?><?php echo '</span>' ?>
								<?php echo '</br>
									Thương Hiệu : A
								</p>
								<div class="ava-price">
									<div class="availability_sku"> Tình Trạng :'?><?php if($row['created']==1) echo '<span style="color: green; font-weight: bold;">Còn hàng</span>'; else echo '<span style="color: black; font-weight: bold;">Hết hàng</span>';?><?php echo '</div>
									<div class="price">'?>
									
									<?php echo $row['price']; ?>
									
									<?php echo'₫</div>
								</div>
								<button > Cho vào giỏ hàng</button>
								</div>
							</div>'?>
							
							
						<?php 
						}
					}
					while($row = mysql_fetch_assoc($Record));		
					?>
					</div>
					
					<?php $id=isset($_GET['idsp'])==true?$_GET['idsp']:1 ; ?>
			
			
				</div>

</body>