<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<style type="text/css">
    .login-box {
       
        max-width: 400px;
        float: none;
        margin: 150px auto;
        border-radius: 5px;
        border:2px solid blueviolet;
        padding: 30px;
    }
</style>

<body>
    <div class="container">
        <div class="login-box">
            <form action="1.admin_validation.php" method="post">
                <h2>Admin Login page</h2>
                <div class="form-group">
                    <label>Admin Name</label>
                    <input type="text" name="user" class="form-control" placeholder="Enter user name" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>