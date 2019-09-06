<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    .design {
       
        max-width: 500px;
        float: none;
        margin: 150px auto;
        border-radius: 5px;
        border: 2px solid blueviolet;
        padding: 30px;
    }
</style>

<?php
session_start();

if (isset($_SESSION['maruf']) && isset($_SESSION['alam'])) {
    $name1 = $_SESSION['maruf'];
    $name2 = $_SESSION['alam'];
}

$db = mysqli_connect('localhost', 'root', '1604089', 'book_store');
$results = mysqli_query($db, "SELECT * FROM user where u_unm = '$name1' && u_pwd = '$name2'");
?>

<body>
    <div class="design">
        <div class="container">
            <form action="1.update_db.php" method="post">
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['u_fnm']; ?>" required>
                </div>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="user" class="form-control" value="<?php echo $row['u_unm']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="pass" class="form-control" value="<?php echo $row['u_pwd']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gen" class="form-control" value="<?php echo $row['u_gender']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="eml" class="form-control" value="<?php echo $row['u_email']; ?>" required>
                </div>
                <div class="form-group">
                    <label>contact no</label>
                    <input type="text" name="cnt" class="form-control" value="<?php echo $row['u_contact']; ?>" required>
                </div>
                <div class="form-group">
                    <label>city</label>
                    <input type="text" name="cty" class="form-control" value="<?php echo $row['u_city']; ?>" required>
                </div>
            <?php } ?>
            <button type="submit" name='submit' class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>