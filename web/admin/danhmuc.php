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

mysql_select_db($database_conn, $conn);
mysql_set_charset('utf8',$conn);
$query_Recordset1 = "SELECT * FROM danhmuc";
$Recordset1 = mysql_query($query_Recordset1, $conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý danh mục</title>
</head>
<body>

<?php include 'index.php'; ?>
<?php
?>
<table border="1">
  <tr>
    <td>iddanhmuc</td>
    <td>name</td>
    <td>parent_id</td>
    <td width="160">sort_order</td>
    <td></td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Recordset1['iddanhmuc']; ?></td>
      <td><?php echo $row_Recordset1['name']; ?></td>
      <td><?php echo $row_Recordset1['parent_id']; ?></td>
      <td><?php echo $row_Recordset1['sort_order']; ?></td>
      <td><p><a href="insertdm.php">Insert</a></p>
        <p><a href="updatedm.php?id=<?php echo $row_Recordset1['iddanhmuc']; ?>">Update</a></p>
        <p><a href="deletedm.php?idc=<?php echo $row_Recordset1['iddanhmuc']; ?>">Delete</a></p>
      <p>&nbsp;</p></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
