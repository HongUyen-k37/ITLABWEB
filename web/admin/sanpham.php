<?php require_once('../Connections/conn.php'); ?>
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


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý sản phẩm</title>
</head>
<body>
<?php include 'index.php' ?>
<table border="1">
  <tr>
    <td>id</td>
    <td>Thuộc danh mục</td>
    <td>Tên sản phẩm</td>
    <td>Giá</td>
    <td>Nội dung post</td>
    <td>Tình trạng hàng</td>
    <td>Link ảnh</td>
    <td width="196">Chức năng</td>
  </tr>
  <?php
  
  // xác định bao  nhiêu dòng
  $display = 5;
  // tính tổng số trang cần hiển thị
  if(isset($_GET['page']) && (int)$_GET['page'])
  {
	  $page = $_GET['page'];
  }
  else
  {
	  mysql_select_db($database_conn, $conn);

	  // nếu chưa xác định thì tìm số trang
	  $query = "SELECT COUNT(*) FROM sanpham";
	  $res = mysql_query($query,$conn) or die('Lỗi gì đây ?'.mysql_error($conn));
	  
	  $row = mysql_fetch_assoc($res,MYSQL_NUM);
	  $record = $row[0];
	  if($record > $display)
	  {
		  $page = ceil($record/$display);
	  }
	  else
	  {
		  $page =1;
	  }
  }
  mysql_select_db($database_conn, $conn);
  $start = (isset($_GET['start']) && (int)$_GET['start']) ? $_GET['start']:0;
  $sql = "SELECT * FROM sanpham LIMIT $start,$display";
  $result = mysql_query($sql, $conn) or die(mysql_error()); 
  while($set = mysql_fetch_assoc($result))
  {
	  $id = $set['id'];
	  $iddanhmuc = $set['iddanhmuc']; 
	  $name = $set['name'];
	  $price = $set['price'];
	  $content = $set['content'];
	  $created = $set['created'];
	  $image_link = $set['image_link'];
	  ?>
	  <tr><?php
			echo "
				<td> $id </td>
				<td> $iddanhmuc</td>
				<td> $name</td>
				<td> $price</td>
				<td> $content</td>
				<td> $created</td>
				<td> $image_link</td>
				";
			?>
		<td><p><a href="insertsp.php">Insert</a></p>
        <p><a href="updatesp.php?id=<?php echo $set['id']; ?>">Update</a></p>
        <p><a href="deletesp.php?id=<?php echo $set['id']; ?>">Delete</a></p>
		<p>&nbsp;</p></td>
    </tr>
    <?php 		
  }
  
  ?>
</table>
	<ul class="nav">
		<?php
			if($page >1)// nếu cần hiển thị số trang
			{
				$next  = $start +$display;
				$prev = $start-$display;
				$current = ($start/$display)+1;
				// hiển thị trang prev
				if($current !=1)
				{
					echo "<li><a href='sanpham.php?start=$prev'> Previous </a> </li>";
				}
				// hiện thị số link trang
				for($i=1;$i<=$page;$i++)
				{
					if($current != $i)
					{
						echo "<li><a href='sanpham.php?start=".($display*($i-1))."'> $i </a> </li>";
					}
					else
					{
						echo "<li class='current'> $i </li>";
					}
				}
				// hiển thị trang next
				if($current != $page)
				{
					echo "<li><a href='sanpham.php?start=$prev'> Next </a> </li>";
				}
			}
		?>
	</ul>
</body>
</html>