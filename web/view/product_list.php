<?php require_once('conn.php'); ?>
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

$start= ($trang-1)*$size+1;
mysql_select_db($database_conn, $conn);
$query = "SELECT * FROM sanpham limit {$start},{$size} WHERE iddanhmuc=".$_GET["id"];
$Record = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_fetch_assoc($Record);
$totalRows = mysql_num_rows($Record);
?>

<body>

 <div class="content-product-right" style="z-index: 100; margin-top: 20px; float:right">
			 
			 
				<div id="product-brick"> <!-- gach -->
					<h2 style="text-align:center;text-transform:uppercase"> Gạch Ấn Độ </h2>
					<?php
					do{
						{
							echo '<div class="brick">
							<div class="brick-left" style="text-decoration: none;" href="#" alt="" title="">
								<img class="img" src="'?> <?php echo $row['image_link']; ?><?php echo'" />
							</div>
							<div class="brick-right"><p>' ?>
								<?php echo $row['name']; ?>
								<?php echo '</br>
									Thương Hiệu : A
								</p>
								<div class="ava-price">
									<div class="availability_sku"> Tình Trạng : Còn hàng</div>
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
					
					
					
			
			
				</div>

</body>