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

$_SESSION['maruf'] = $name;
$_SESSION['alam'] = $pass; 

$s = "SELECT * FROM user where u_unm = '$name' && u_pwd = '$pass' ";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);


if ($num > 0) {
    header('location:1.success.php');
    //echo "welcome---".$name."---home";
} else {
   header('location:1.login.php');
  //echo "not welcome home";
}
?>