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

if(isset($_POST['submit'])){
$s = "SELECT * FROM admin where u_unm = '$name' && u_pwd = '$pass' ";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);


if ($num > 0) {
   // echo $num;
    $_SESSION['admn'] = $name;
    $_SESSION['admn1'] = $pass;
    
    header('location:1.success_admin.php');
    //echo "welcome---".$name."---home";
} else {
    echo $num;
   header('location:1.login - Admin Login.php');
  //echo "not welcome home";
}}
?>