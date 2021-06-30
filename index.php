<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css"/>
<title>Home | Survey</title>
</head>
<body>
    <div class="mainnav">
        <h3 class="item title">Wecome to Our Survey Webiste!!</h3>
        <?php 
            if(isset($_SESSION['user'])){
                ?>  
                    <a class="item loginbtn">Hi, <?php echo $_SESSION['user'] ?></a>
                <?php
            }else{
                ?>
                    <a class="item loginbtn" href="login.php">Login</a>
                <?php
            }
        ?>
    </div>
    <div class=" body">
        <div>
            <a class="b-item create"  href="">Create a Survey</a>
             <a  class="b-item ans" href="">Answer  a Survey</a>
        </div>
                <?php 
            if(isset($_SESSION['user'])){
                ?>  
                    <a href="logout.php" class=" m-3 btn btn-light" >Logout</a>
                <?php
            }
        ?>
        
        
    </div>
</html>