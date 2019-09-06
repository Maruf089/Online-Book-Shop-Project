<?php session_start();
	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.html");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Home</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="css/home.css">
  <script src = "js/home.js"></script>

</head>
    
    
    
<body class="container" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"  class="shortPage">

<nav class="navbar navbar-default navbar-fixed-top navbar navbar-dark bg-dark">
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

        <li><a href="1.login_Admin.php"><font color="" size="4.5">LOG IN</font></a></li>
   
      </ul>
    </div>
  </div>
</nav>

    
    
    
<!-- end header -->
<!-- start page -->
<br><br><br><br><br><br><br><br>
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Welcome to Admin .....<br> Please Log In......</h1>
			<div class="entry">
				Entry...
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	
    

</body>
</html>
