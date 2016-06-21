<?php require_once('Connections/conn.php'); ?>
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
$query_Admin = "SELECT * FROM `admin`";
$Admin = mysql_query($query_Admin, $conn) or die(mysql_error());
$row_Admin = mysql_fetch_assoc($Admin);
$totalRows_Admin = mysql_num_rows($Admin);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý user</title>
</head>
<body>

<?php include 'index.php'; ?>

<table border="1">
  <tr>
    <td width="74">id</td>
    <td width="120">username</td>
    <td width="122">password</td>
    <td width="196">name</td>
    <td width="196">&nbsp;</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Admin['id']; ?></td>
      <td><?php echo $row_Admin['username']; ?></td>
      <td><?php echo $row_Admin['password']; ?></td>
      <td><?php echo $row_Admin['name']; ?></td>
      <td><p><a href="insert.php">Insert</a></p>
        <p><a href="update.php?id=<?php echo $row_Admin['id']; ?>">Update</a></p>
        <p><a href="delete.php?idc=<?php echo $row_Admin['id']; ?>">Delete</a></p>
      <p>&nbsp;</p></td>
    </tr>
    <?php } while ($row_Admin = mysql_fetch_assoc($Admin)); ?>
</table>
</body>
</html>

