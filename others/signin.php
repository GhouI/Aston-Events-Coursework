<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['psw'];
    require_once 'dbconnect.php';
    require_once 'myfunctions.php';
    if(LoginEmpty($email,$password) !== false){
        header("location: ../pages/login.php?error=noinput");
        exit();
    }
    LoginAccount($connection,$email,$password);
}else{
    header("location: ./index.php");
}
?>