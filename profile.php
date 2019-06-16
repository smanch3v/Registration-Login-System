<?php
include('sessions.php');
if(!isset($_SESSION['login_user'])){
    header("location: index.php"); //Redirecting to Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Your Home Page</title>
    
</head>
<body>
    <div id=profile>
        <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href = "logout.php">Log out</a></b>    
    </div>
    <p> aaaaaaaaaaaaaa vutreee </p>

    
</body>
</html>