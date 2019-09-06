<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<style type="text/css">
    .login-box {
       
        max-width: 800px;
        float: none;
        margin: 150px auto;
        border-radius: 5px;
        background:#CED4DA;
        border:2px solid blueviolet;
        padding: 30px;
    }
</style>

<body>
    <div class="container">
        <div class="login-box">
            <form action="2.5.db.php" method="post">
                <h2>Add books to database</h2>
                <div class="form-group">
                    <label>Book name</label>
                    <input type="text" name="book_n" class="form-control" placeholder="Enter user name" required>
                </div>
                <div class="form-group">
                    <label>subcatagory</label>
                    <input type="text" name="subcat" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label>Book description</label>
                    <input type="text" name="des" class="form-control" placeholder="Enter books description" required>
                </div>
                <div class="form-group">
                    <label>publisher</label>
                    <input type="text" name="publi" class="form-control" placeholder="Enter publisher name" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" name="img" class="form-control" placeholder="Enter image name" required>
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" name="isbn" class="form-control" placeholder="Enter ISBN" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-3"><input type="text" class="form-control" name="edi" placeholder="Enter edition" required></div>
                        <div class="col-3"><input type="text" class="form-control" name="page" placeholder="Enter page" required></div>
                        <div class="col-3"><input type="text" class="form-control" name="price" placeholder="Enter price" required></div>
                    </div>
                </div>
                <button type="submit" name="save" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>