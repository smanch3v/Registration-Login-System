<?php
include('login.php');
if(isset($_SESSION['login_user'])){
    header("location:profile.php"); //Redirecting to profile.php
}
?>

<!DOCTYPE html>
<html>
 <head>
    <body>
        <div>
            <form action="moiregister.php" method="POST">
                <p>Username</p>
                <input type="text" name="username" placeholder="Username">
                <br>
                <p>Password</p>
                <input type="password" name="password" placeholder="Password">
                <br>
                <p>Confirm password</p>
                <input type="password" name="repassword" placeholder="Confirm password">
                <br>
                <input type="submit" name="submit">               
            </form>
        </div>
        <hr>
        <div>
            <form action="login.php" method="POST">
                <p>Username</p>
                <input type="text" name="username" placeholder="Username">
                <br>
                <p>Password</p>
                <input type="password" name="password" placeholder="Password">
                <br>
                <input type="submit" name="submit">
            </form>
        </div>
        
    </body>
 </head>
</html>