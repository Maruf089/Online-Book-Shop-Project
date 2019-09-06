<html lang="en">
<head>

  <title>Sign Up</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="css/home.css">
  <script src = "js/home.js"></script>

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

<body class="container" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"  class="shortPage">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <h1><b><font color="red">BOOK'sZONE</font></b1></h1>
        <p>The kingdom of books, the kingdom of knowledge</p>
    </div>

    <div class="collapse navbar-collapse" style="margin-top:50px;margin-left:600px;">
      <form class="form-inline my-2 my-lg-0">
        <span class="input-group-text" id="basic-addon1"></span>
        <input size="50" class="form-control mr-sm-2" type="search" placeholder="Search your books here..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>

  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="home.html"><img src="" alt="BOOKSHOP"/></a>
    </div>

   <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><font color="" size="4.5">HOME</font></a></li>
        <li><a><font color="green" size="4.5">PUBLISHER</font></a></li>
        <li><a href="Category.php"><font color="orange" size="4.5">CATEGORY</font></a></li>
        <li><a href="bestSellerBooks.html"><font color="red">BEST SELLER BOOKS</font></a></li>
        <li><a href ="" ><font color="blue" size="4.5">MY CART</font></a></li>
        <li><a href="login.php"><font color="" size="4.5">LOG IN</font></a></li>
        <li><a href="signUp.html"><font color="orange" size="4.5">SIGN UP</font></a></li>
      </ul>
    </div>
  </div>
</nav>
    <div id="page">
        <div id="content">
            <div class="post">
                <div class="entry">
        <div class="container">
        <div class="login-box">
            <form action="1.user_validation.php" method="post">
                <h2>User Login page</h2>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="user" class="form-control" placeholder="Enter user name" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
            </div>
            </div></div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>