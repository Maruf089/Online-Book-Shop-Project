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
$name1 = $_SESSION['admn'];
 $name2 = $_SESSION['admn1'];
$db = mysqli_connect('localhost', 'root', '1604089', 'book_store');
    
$results = mysqli_query($db, "SELECT * FROM admin where u_unm = '$name1' && u_pwd = '$name2'");

?>

<body>
    <div class="design">
        <div class="container">
            <h1>Admin profile</h1>
            <table class="table table-hover table-sm">

                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tbody>
                        <tr>
                            <td><b>Name : </b><?php echo $row['u_fnm']; ?></td>
                        </tr>
                        <tr>
                            <td><b>gender : </b><?php echo $row['u_gender']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Username :</b> <?php echo $row['u_unm']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Password :</b> <?php echo $row['u_pwd']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Email :</b> <?php echo $row['u_email']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Contact no : </b><?php echo $row['u_contact']; ?></td>
                        </tr>
                        <tr>
                            <td><b>City : </b><?php echo $row['u_city']; ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
            <a href="1.update_admin.php">Update your profile</a><br>
            <a href="2.2_add_books.php">UPDATE BOOKS</a><br>
            <a href="2.4.insert.php">INSERT BOOK</a>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>