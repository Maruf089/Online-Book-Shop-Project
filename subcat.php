<?php session_start();


	$link=mysqli_connect('localhost','root','1604089','book_store') or die("Can't Connect...");
	mysqli_select_db($link,'book_store') or die("Can't Connect to Database...");
	$cat=$_GET['cat_nm'];
	
	$q = "select * from subcat where parent_id = ".$_GET['cat'];
	$res = mysqli_query($link,$q) or die("Can't Execute Query..");
	
	$row1 = mysqli_fetch_assoc($res);
	
	if($_GET['catnm']==$row1['subcat_nm'])
	{
		header("location:booklist.php?subcatid=".$row1['subcat_id']."&subcatnm=".$row1["subcat_nm"]);
		
	}
?>


<html>
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
       <a class="navbar-brand" href="home.html"><img src="" alt="BOOKSHOP"/></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html"><font color="" size="4.5">HOME</font></a></li>
        <li><a><font color="green" size="4.5">PUBLISHER</font></a></li>
        <li><a href="Category.php"><font color="orange" size="4.5">CATEGORY</font></a></li>
        <li><a href="bestSellerBooks.html"><font color="red">BEST SELLER BOOKS</font></a></li>
        <li><a href ="" ><font color="blue" size="4.5">MY CART</font></a></li>
        <li><a href="login.html"><font color="" size="4.5">LOG IN</font></a></li>
        <li><a href="signUp.html"><font color="orange" size="4.5">SIGN UP</font></a></li>
      </ul>
    </div>
  </div>
</nav>  	
				
				
			<!-- end header -->
			
			<!-- start page -->
    <br><br><br><br><br><br>

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title"><?php echo $_GET['catnm'];?></h1>
							<div class="entry">
						
								<?php
									Do
									{
										
										echo '<li><a href="booklist.php?subcatid='.$row1['subcat_id'].'&subcatnm='.$row1["subcat_nm"].'">'.$row1['subcat_nm'].'</a></li>';
										
									}while($row1 = mysqli_fetch_assoc($res))
								?>
							
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					
				
				</div>
			<!-- end page -->
			
		
</body>
</html>
