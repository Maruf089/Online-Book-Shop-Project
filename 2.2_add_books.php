<?php include('2.3_Books_php.php');
?>
<?php
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = 1;
    $record = mysqli_query($db, "SELECT * FROM book WHERE b_id=$id");

    if (@count($record) == 1) {
        $n = mysqli_fetch_array($record);
        $bn = $n['b_nm'];
        $sbc = $n['b_subcat'];  
        $pbl = $n['b_publisher'];
        $editi = $n['b_edition'];
        $isbni = $n['b_isbn'];
        $pge = $n['b_page'];
        $pric = $n['b_price'];
        $imge = $n['b_img'];
    }
}
?>

<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<style type="text/css">
    .Fcolor {
        background: #71c9ce;
    }

    .login-box {
        max-width: 800px;
        float: none;
        margin: 150px auto;
        background:#CED4DA;
        border-radius: 5px;
        border: 2px solid blueviolet;
        padding: 30px;
    }
</style>

<?php
$db = mysqli_connect("localhost", "root", "1604089", "book_store");
$results = mysqli_query($db, "SELECT * FROM book"); ?>

<body>
    <div class="container">
        <table class="table table-bordered table-dark table-hover table-sm">
            <thead>
                <tr>
                    <th>Book name</th>
                    <th>Subcat</th>
                    <th>publisher</th>
                    <th>edition</th>
                    <th>ISBN</th>
                    <th>Price</th>
                    <th>page</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>

            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['b_nm']; ?></td>
                        <td><?php echo $row['b_subcat']; ?></td>
                        <td><?php echo $row['b_publisher']; ?></td>
                        <td><?php echo $row['b_edition']; ?></td>
                        <td><?php echo $row['b_isbn']; ?></td>
                        <td><?php echo $row['b_price']; ?></td>
                        <td><?php echo $row['b_page']; ?></td>
                        <td>
                            <a href="2.2_add_books.php?edit=<?php echo $row['b_id']; ?>" id="edit" class="btn btn-success btn-sm">Edit</a>
                            <a href="2.3_Books_php.php?del=<?php echo $row['b_id']; ?>" id="delete" class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

    <?php if ($update == 1) { ?>
        <div class="login-box">
            <form action="2.3_Books_php.php" method="post">
                <h2>Update books to database</h2>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Book name</label>
                    <input type="text" name="book_n" class="form-control" value="<?php echo $bn; ?>" required>
                </div>
                <div class="form-group">
                    <label>subcatagory</label>
                    <input type="text" name="subcat" class="form-control" value="<?php echo $sbc; ?>" required>
                </div>
                <div class="form-group">
                    <label>Book description</label>
                    <input type="text" name="des" class="form-control" value="<?php echo $desc; ?>" required>
                </div>
                <div class="form-group">
                    <label>publisher</label>
                    <input type="text" name="publi" class="form-control" value="<?php echo $pbl; ?>" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" name="img" class="form-control" value="<?php echo $imge; ?>" required>
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" name="isbn" class="form-control" value="<?php echo $isbni; ?>" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-3"><input type="text" class="form-control" name="edi" value="<?php echo $editi; ?>" required></div>
                        <div class="col-3"><input type="text" class="form-control" name="page" value="<?php echo $pge; ?>" required></div>
                        <div class="col-3"><input type="text" class="form-control" name="price" value="<?php echo $pric; ?>" required></div>
                    </div>
                </div>
                <button type="submit" name="update" class="btn btn-primary">update</button>
            </form>
        </div>
        <?php $update = 0;
    } ?>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>