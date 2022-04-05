<?php

function CheckIfInputNoExists($Email,$Name,$Phone,$CollegeID,$Password){ //checks if any input has been inputed.
    //checks if the values below are empty or not when placed in the parameters
    if(empty($Email) || empty($Name) || empty($Phone) || empty($CollegeID) || empty($Password)){
        return true; 
    }else{
        return false;
    }
}
function CheckEmailIsInvalid($Email){ //checks if its an actual email
    //filters and checks if the email is a proper email.
    if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}
function CollegeIDInvalid($CollegeID){ //checks if collegeid is invalid
    if(!is_numeric($CollegeID)){
        return true; 
    }else if(is_numeric($CollegeID) && !strlen($CollegeID) == 9){
        return true;
    }else{
        return false;
    }
}
function PhoneNumberIsInvalid($Phone){ //checks if phone number inputted is and if its numeric
    if(!is_numeric($Phone)){
        return true; 
    }else if(is_numeric($Phone) && !strlen($Phone) == 11){
        return true;
    }else{
        return false;
    }
}
function EmailExists($connection,$Email){ //checks if email exists
    $sql = "SELECT * FROM StudentUsers WHERE Email = ?;";
    $statement = mysqli_stmt_init($connection); //init the connection
    if(!mysqli_stmt_prepare($statement,$sql)){
        header("location: ../pages/signup.php?error=sqlerror");
        exit();
    }
    mysqli_stmt_bind_param($statement,"s",$Email);
    mysqli_stmt_execute($statement);

    $DatabaseResults = mysqli_stmt_get_result($statement);
    if($rows = mysqli_fetch_assoc($DatabaseResults)){
        return $rows;
    }else{
        return false;
    }
    mysqli_stmt_close($statement);
}
function CollegeIDExists($connection,$CollegeID){
    $sql = "SELECT * FROM StudentUsers WHERE CollegeID = ?;";
    $statement = mysqli_stmt_init($connection); //init the connection
    if(!mysqli_stmt_prepare($statement,$sql)){
        header("location: ../pages/signup.php?error=sqlerror");
        exit();
    }
    mysqli_stmt_bind_param($statement,"s",$CollegeID);
    mysqli_stmt_execute($statement);

    $DatabaseResults = mysqli_stmt_get_result($statement);
    if($rows = mysqli_fetch_assoc($DatabaseResults)){
        return $rows;
    }else{
        return false;
    }
    mysqli_stmt_close($statement);
}
function PhoneNumberExists($connection,$Phone){ //checks if numbber exists
    $sql = "SELECT * FROM StudentUsers WHERE PhoneNumber = ?;";
    $statement = mysqli_stmt_init($connection); //init the connection
    if(!mysqli_stmt_prepare($statement,$sql)){
        header("location: ../pages/signup.php?error=sqlerror");
        exit();
    }
    mysqli_stmt_bind_param($statement,"s",$Phone);
    mysqli_stmt_execute($statement);

    $DatabaseResults = mysqli_stmt_get_result($statement);
    if($rows = mysqli_fetch_assoc($DatabaseResults)){
        return $rows;
    }else{
        return false;
    }
    mysqli_stmt_close($statement);
}

function CreateAccount($connection,$Email,$Name,$Phone,$CollegeID,$Password){ //creates an account with mysqli
    $sql = "INSERT INTO StudentUsers(CollegeID,FullName,PhoneNumber,Email,UserPassword) VALUES(?,?,?,?,?);";
    $statement = mysqli_stmt_init($connection); //init the connection
    if(!mysqli_stmt_prepare($statement,$sql)){
        header("location: ../pages/signup.php?error=sqlerror");
        exit();
    }
    $passwordhashing = password_hash($Password,PASSWORD_DEFAULT); //hashes the password
    mysqli_stmt_bind_param($statement,"issss",$CollegeID,$Name,$Phone,$Email,$passwordhashing);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header("location: ../pages/signup.php?error=none");
    exit();
}
function PasswordElligable($Password){
    if(strlen($Password) < 6){
        return true;
    }else{
        return false;
    }   
    
}

function LoginEmpty($email,$password){
    if(empty($email) || empty($password)){
        return true;
    }else{
        return false;
    }
}
function LoginAccount($connection,$email,$password){ //logins into an account
    $EmailExisting = EmailExists($connection,$email);

    if($EmailExisting == false){
        header("location: ../pages/login.php?error=wrongEmail");
        exit();
    }
    $passwordHash = $EmailExisting["UserPassword"];
    $checkingPassword = password_verify($password,$passwordHash);

    if($checkingPassword == false){
        header("location: ../pages/login?error=wrongPassword");
        exit(); 
    }else if($checkingPassword == true){
        session_start();
        $_SESSION["email"] = $EmailExisting["Email"];
        $_SESSION["FN"] = $EmailExisting["FullName"];
        $_SESSION["CollegeID"] = $EmailExisting["CollegeID"];
        header("location: ../index.php");
        exit();
    }
   
}