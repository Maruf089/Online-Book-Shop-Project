<?php
session_start();
$db = mysqli_connect('localhost', 'root', '1604089', 'book_store');

// initialize variables
$sname = "";
$id = 0;
$update = 0;

if (isset($_GET['del'])) {
    $id = (int)$_GET['del'];
    $query = "DELETE FROM book WHERE b_id= '$id' ";
    mysqli_query($db, $query);
    header('location:2.2_add_books.php');
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $book = $_POST['book_n'];
    $sub = $_POST['subcat'];
    $desc = mysqli_real_escape_string($db,$_POST['des']);
    $pub = $_POST['publi'];
    $img = $_POST['img'];
    $edi = $_POST['edi'];
    $isbn = $_POST['isbn'];
    $pri = $_POST['price'];
    $pg = $_POST['page'];

    $s = "UPDATE book SET b_nm='$book',b_subcat='$sub',b_desc='$desc',b_publisher='$pub',b_edition='$edi',b_isbn='$isbn',b_page='$pg',b_price='$pri',b_img='$img' WHERE b_id=$id ";
    $result = mysqli_query($db, $s);
    header('location:2.2_add_books.php');
}
?>