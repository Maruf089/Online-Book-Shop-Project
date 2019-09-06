<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
       <a class="navbar-brand" href="index.html"><img src="images/final_logo.jpg" height="50" width="90" alt="BOOKSHOP"/>BOOKSHOP</a>
    </div>
    <br><br>
   

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><font color="" size="4.5">HOME</font></a></li>
      
        <li><a href="Category.php"><font color="orange" size="4.5">CATEGORY</font></a></li>
        <li><a href ="exm.php" ><font color="blue" size="4.5">MY CART</font></a></li>
        <li><a href="1.login.php"><font color="" size="4.5">LOG IN</font></a></li>
        <li><a href="signUp.html"><font color="orange" size="4.5">SIGN UP</font></a></li>
        <li><a href="logout.php"><font color="red" size="4.5">LOG OUT</font></a></li>
      </ul>
    </div>
  </div>
</nav>

    
    
<br><br><br>

<div class="jumbotron text-center">   
<br><br>
    <h1>Categories</h1>
    
    <ul>
					
								<?php
										$link= mysqli_connect('localhost','root','1604089','book_store')or die("Can't Connect...");
			
										mysqli_select_db($link,'book_store') or die("Can't Connect to Database...");
			
										$query="select * from category ";
			
										$res=mysqli_query($link,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
											}
			
											mysqli_close($link);
								?>
				</ul>
    
    </div>


    