<?php

require "config.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $resultname = mysqli_query($link,"SELECT username,
                                FROM user
                                WHERE username = '$username';");

    $resultpass = mysqli_query($link,"SELECT password,
                                    FROM user
                                    WHERE password == '$password';");




    if(!empty($username) and !empty($password)){
        if($username == $resultname and $password == $resultpass){
            echo "<h1>Login successfull!</h1>";
        } else {
            echo "Username or password is wrong.";
        }
    }else{
        echo "Please fill all fields.";
    }
}