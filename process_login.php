<?php session_start();
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['usernm']))
		{
			$msg[]="No such User";
		}
		
		if(empty($_POST['pwd']))
		{
			$msg[]="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
		}
		else
		{
			
			
		$link= mysqli_connect('localhost','root','1604089','book_store') or die("Can't Connect...");
			
	    mysqli_select_db($link,'book_store') or die("Can't Connect to Database...");
			
			$unm=$_POST['usernm'];
			
			$q="select * from user where u_unm='$unm'";
			
			$res=mysqli_query($link,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['uid']=$row['u_pwd'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm']!="admin")
					{
						header("location:Success.php");
					}
					else
					{
						header("location:Success.php");
					}
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
		}
	
	}
	else
	{
		header("location:Success.php");
	}
			
?>