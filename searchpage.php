<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>SUCCESS PAGE</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="css/home.css">
  <script src="js/home.js"></script>
 
  
    
    
    
    

    <style>
        a {
            text-decoration: none;
        }
        body {
            margin: 0;
            padding: 0;
            background-image: url(img_food2.jpg);
            background-size: cover;
            position: relative;
        }
        
        * {
            box-sizing: border-box;
        }

        .header {
            height: 30vh;
            background-image: linear- gradient(rgb(0, 0, 0, 0, 5), rgba(0, 0, 0, 0, 5)), url(img_food2.png);
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }

        .search-field {
            height: 100px;
            padding: 10px;
            border: none;
            outline: none;
        }

        .location {
            height: 40px;
            width: 400px;
        }

        .search-btn {
            height: 40px;
            width: 150px;
            background: darkred;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        
        .profile-pic {
            margin-top: 25px;
        }

        .img-responsive {
            width: 250px;
            height: 200px;
        }

        .column {
            float: left;
            padding: 17px;
        }

        .column h3 {
            color: black;
            text-align: center;
            cursor: pointer;
        }

        .container {
            padding-bottom: 50px;
        }

        .btn-primaryr {
            padding: 100px;
        }
    </style>
    
    
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">



<div class="jumbotron text-center">


  

 <?php   

            $server      = "localhost";
            $password    = "1604089";
            $user        = "root";
            $database    = "book_store";
            $db = mysqli_connect($server, $user, $password, $database);
            $query = $_GET["query"];
            $query = htmlspecialchars($query);
            $sql = "SELECT * FROM book where b_nm LIKE '%$query%'";
            $resultset = mysqli_query($db, $sql) or die("database error:" . mysqli_error($dbpatrol));


      while ($record = mysqli_fetch_assoc($resultset)) {
                ?>

            <div class="column">
                <div class="col-md-4 profile-pic text-center">
                    <a href="detail.php?id=<?php echo $record['b_id'] ?>&cat=<?php echo "1" ?> "><img src="<?php echo $record['b_img']; ?>" class="img-responsive"></a>
                </div>
                
                <div class="d-flex justify-content-between align-items-center">
                    
                        <h3><?php echo $record['b_nm']; ?></h3>
                    
                </div>

            </div>
            <?php } 
?>
    

</body>
</html>