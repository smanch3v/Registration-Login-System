<?php

require "config.php";

// if(isset($_POST['submit'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $resultname = mysqli_query($link,"SELECT username,
//                                 FROM user
//                                 WHERE username = '$username';");

//     $resultpass = mysqli_query($link,"SELECT password,
//                                     FROM user
//                                     WHERE password == '$password';");




//     if(!empty($username) and !empty($password)){
//         if($username == $resultname and $password == $resultpass){
//             echo "<h1>Login successfull!</h1>";
//         } else {
//             echo "Username or password is wrong.";
//         }
//     }else{
//         echo "Please fill all fields.";
//     }
// }

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);


$result = mysqli_query($link, "SELECT * FROM users WHERE username = '$username' AND password = '$password'") or die("Failed to query results" . mysqli_error());
$row = msqli_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password) {
    echo "Login successfull.Welcome " . $row['$username'] . "!";
} else {
    echo "Username or password is incorrect!";
}

mysqli_close($link);