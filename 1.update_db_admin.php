<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "1604089";
$dbname = "book_store";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['submit'])) {
   
    $fnm = $_POST['name'];
    $unm = $_POST['user'];
    $pwd = $_POST['pass'];
    $gender = $_POST['gen'];
    $email = $_POST['eml'];
    $contact = $_POST['cnt'];
    $city = $_POST['cty'];
    $nm = $_SESSION['admn'];
    $ps = $_SESSION['admn1'];

    $query="UPDATE admin SET u_fnm = '$fnm', u_unm='$unm', u_pwd='$pwd', u_gender='$gender', u_email='$email', u_contact='$contact', u_city='$city' WHERE u_unm ='$nm' && u_pwd='$ps' ";

   mysqli_query($conn, $query);
   header('location:1.success_admin.php');
}
else {
    header('location:1.update_db_admin.php');
}
