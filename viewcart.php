<?php session_start();
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



			<!-- end header -->
			<!-- start page -->
<br><br><br><br><br><br><br><br><br><br><br><br>


				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Viewcart</h1>
							<div class="entry">
						
							<pre>
							
							</pre>
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td> <b>Product
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
									<td> <b>Delete
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						
							<center>
							<input type="submit" value=" Re-Calculate " >
							</center>
							</form>
							</div>
							<center>
								<br><br>
							<a href="paypal.html"> <h3>Make Payment</h3></a>
								</center>
							
						</div>
						
					</div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
					<!-- end content -->
					
</body>
</html>
