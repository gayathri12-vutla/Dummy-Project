<?php 
    session_start();
    include "./dbconn.php";
    if(!$conn) throw mysqli_connect_error();
    if(isset($_POST['login'])){
    if($_POST['pass']==$_POST['cpass']){
    $username =mysqli_real_escape_string($conn,$_POST['user']);
    $password =mysqli_real_escape_string($conn,$_POST['pass']);
    $sql="INSERT INTO `dummy`.`users` (user,pass) values('$username','$password')";
    if(mysqli_query($conn,$sql)){
        header("Location:login.php");
    }

}else{
    echo "confim password correctly";
}
};
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
    <title>Sign Up | Survey </title>
</head>
<body>
    <div class="logindiv">
        <form action="" class="form-group loginform" method="post">
            <h3 class="text-center p-2">Survey Login</h3>
            <label class="mt-3" for="user">Enter Username*</label>
            <input type="text" id="user" class="form-control" placeholder="Enter Username" name="user">
            <label class="mt-3" for="pass">Enter Password*</label>
            <input type="password" id="pass" class="form-control" placeholder="Enter Password" name="pass">
            <label class="mt-3" for="pass">Confrim Password*</label>
            <input type="password" id="cpass" class="form-control" placeholder="Confirm Password" name="cpass">
            <button type="submit" class="mt-3 btn btn-success d-block ml-auto mr-auto" name="login">Sign up</button>
            <a href="login.php" class="btn btn-light">login</a>
        </form>
    </div>
</body>
</html>