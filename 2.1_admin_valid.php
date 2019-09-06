<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "1604089";
$dbname = "book_store";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Not connected to the server";
}

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM admin where u_unm = '$name' && u_pwd = '$pass' ";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);


if ($num > 0) {
    $_SESSION['admn'] = $name;
    $_SESSION['admn1'] = $pass;
    header('location:1.success_admin.php');
    //echo "welcome---".$name."---home";
} else {
  header('location:2.0_admin_login.php');
}
?>