<?php

$username = $_POST["username"] ? mysql_escape_string($_POST['username']) : "";;
$password = $_POST["password"] ? md5($_POST['password']) : "";
$conn= new MySQLi("localhost", "root", "", "vlxd");

if($conn->connect_error)
{
	echo "Kết nối thất bại";
}
	
$sql = "SELECT * FROM admin WHERE '$username'= username and password = '$password'";			

$query = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($query);
if($num_rows ==0)
{
	 echo "Tên đăng nhập hoặc mật khẩu không đúng. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
        exit;
	
}
else
{
	//$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
    echo "Bạn đã đăng nhập với tài khoản thành công. <a href='../admin/index.php'>Nhấp vào đây để vào trang quản trị</a>";
	
}


$conn->close();

 
























?>


