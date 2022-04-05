<?php
if(isset($_POST['submitted'])){ //it checks if they have submitted through the form
    //bellow gets all the submitted values from the form
    $Email = $_POST["email"];
    $Name = $_POST["fname"];
    $Phone = $_POST["phone"];
    $CollegeID = $_POST["cid"];
    $Password = $_POST["psw"];

    require_once 'dbconnect.php';
    require_once 'myfunctions.php';
    
    //the function below checks if the inputs have been inputted
    if(CheckIfInputNoExists($Email,$Name,$Phone,$CollegeID,$Password) !== false){
        header("location: ../pages/signup.php?error=noinput");
        exit();
    }
    //checks if the email is invalid
    if(CheckEmailIsInvalid($Email) !== false){
        header("location: ../pages/signup.php?error=emailnotcorrect");
        exit();
    }
    //checks if the university id is numbers
    if(CollegeIDInvalid($CollegeID) !==false){
        header("location: ../pages/signup.php?error=collegeid");
        exit();
    }
    //checks if the phoneNumber has letters or symbols.
    if(PhoneNumberIsInvalid($Phone) !== false){
        header("location: ../pages/signup.php?error=phoneNumber");
        exit();
    }
    //checks if email already exists in the database.
    if(EmailExists($connection,$Email) !== false){
        header("location: ../pages/signup.php?error=emailExists");
        exit();
    }
    //checks if the collegeid exists already in the database
    if(CollegeIDExists($connection,$CollegeID) !== false){
        header("location: ../pages/signup.php?error=collegeIDExists");
        exit();
    }
    //checks if phoneNumber exists in the database.
    if(PhoneNumberExists($connection,$Phone) !== false){
        header("location: ../pages/signup.php?error=phoneNumberExists");
        exit();
    }
    if(PasswordElligable($Password) !== false){
        header("location: ../pages/signup.php?error=passwordLength");
        exit();
    }
    //this function checks if the email inputted is an aston email.
    if(!strpos(strtolower($Email),"@aston.ac.uk")){
        header("location: ../pages/signup.php?error=emailnoaston");
        exit();
    }
    //If the user has passed all the tests t will create an account for them.
    CreateAccount($connection,$Email,$Name,$Phone,$CollegeID,$Password);
    LoginAccount($connection,$email,$Password);
}else{ //if they didn't submit through the form they will be redirected to the index page.
    header("location: ../index.php");
}
