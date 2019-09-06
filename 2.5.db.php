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

$book = $_POST['book_n'];
$sub = $_POST['subcat'];
$desc = $_POST['des'];
$pub = $_POST['publi'];
$img = $_POST['img'];
$edi = $_POST['edi'];
$isbn = $_POST['isbn'];
$pri = $_POST['price'];
$pg = $_POST['page'];



$s = "INSERT INTO book (b_nm,b_subcat,b_desc,b_publisher,b_edition,b_isbn,b_page,b_price,b_img) VALUES('$book','$sub','$desc','$pub','$edi','$isbn','$pg','$pri','$img') ";
$result = mysqli_query($conn, $s);
header('location:2.2_add_books.php');
?>