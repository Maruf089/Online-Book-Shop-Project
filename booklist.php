<?php session_start();

	
	$link=mysqli_connect("localhost","root","1604089","book_store")or die("Can't Connect...");
	
	mysqli_select_db($link,'book_store') or die("Can't Connect to Database...");
	
	$cat=$_GET['subcatid'];
	
	$totalq="select count(*) \"total\" from book where b_subcat='$cat'";
	
	$totalres=mysqli_query($link,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	
	
	$page_per_page=1;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
	}
	
	
	

?>


<html>
<head>
 
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
        <li><a href="index.html"><font color="" size="4.5">HOME</font></a></li>
        <li><a href="Category.php"><font color="orange" size="4.5">CATEGORY</font></a></li>
        <li><a href ="viewcart.php" ><font color="blue" size="4.5">MY CART</font></a></li>
        <li><a href="login.html"><font color="" size="4.5">LOG IN</font></a></li>
        <li><a href="signUp.html"><font color="orange" size="4.5">SIGN UP</font></a></li>
      </ul>
    </div>
  </div>
</nav>  	
		
    
    
    
<br><br>
				<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo $_GET['subcatnm'];?></h1>
									<div class="entry">
										
										<table border="3" width="100%" >
                                    <br><br><br>
											<?php
												
												$k=($page_current_page-1)*$page_per_page;
											
												$query="select *from book where b_subcat='$cat'  LIMIT ".$k .",".$page_per_page;
	
												$res=mysqli_query($link,$query) or die("Can't Execute Query...");
	
												//$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													//if($count==0)		{
														echo '<tr>';
													//}													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'&cat='.$_GET['subcatnm'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													//$count++;							
													
													//if($count==4)		{
														echo '</tr>';
														//$count=0;}
												}
											?>
											
										</table>
										
									</div>
									
								</div>
								
							</div>
					<!-- end content -->
					
			
				</div>
			
</body>
</html>
