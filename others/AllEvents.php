<?php

use function PHPSTORM_META\type;
include_once './dbconnect.php'; 
include_once './Eventsfunctions.php';
//if statements to check what has been submitted to.
if(isset($_POST['AEvent1Book'])){
    session_start();
    if(CheckIfUserBookedIntoAppointment($connection,1,$_SESSION['CollegeID']) != false){
        SucessOrErrorArt("error=AlreadyBooked");
        exit();
    }else{
        SucessOrErrorArt("error=BookedAnAppoitment");
        bookEvent($connection,1,$_SESSION['CollegeID']);
        exit();
    }

}else if(isset($_POST['AEvent1Like'])){ //1
    session_start(); 
    if(CheckIfUserLikedAnEvent($connection,1,$_SESSION['CollegeID']) != false){
        SucessOrErrorArt("error=AlreadyLiked");
        exit();
    }else{
        SucessOrErrorArt("error=LikedAnEvent");
        LikeEvent($connection,1,$_SESSION['CollegeID']);
        insertIntoLikedTable($connection,1,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AEvent2Book'])){ 
    session_start();
    if(CheckIfUserBookedIntoAppointment($connection,2,$_SESSION['CollegeID']) != false){
        SucessOrErrorArt("error=AlreadyBooked");
        exit();
    }else{
        SucessOrErrorArt("error=BookedAnAppoitment");
        bookEvent($connection,2,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AEvent2Like'])){ //2
    session_start(); 
    if(CheckIfUserLikedAnEvent($connection,2,$_SESSION['CollegeID']) != false){
        SucessOrErrorArt("error=AlreadyLiked");
        exit();
    }else{
        SucessOrErrorArt("error=LikedAnEvent");
        LikeEvent($connection,2,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AEvent3Book'])){ 
    session_start();
    if(CheckIfUserBookedIntoAppointment($connection,3,$_SESSION['CollegeID']) != false){
        SucessOrErrorArt("error=AlreadyBooked");
        exit();
    }else{
        SucessOrErrorArt("error=BookedAnAppoitment");
        bookEvent($connection,3,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AEvent3Like'])){ //3
    session_start(); 
    if(CheckIfUserLikedAnEvent($connection,3,$_SESSION['CollegeID']) != false){
        SucessOrErrorArt("error=AlreadyLiked");
        exit();
    }else{
        SucessOrErrorArt("error=LikedAnEvent");
        LikeEvent($connection,3,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AHistory1Book'])){
    session_start();
    if(CheckIfUserBookedIntoAppointment($connection,4,$_SESSION['CollegeID']) != false){
        SucessOrErrorHistory("error=AlreadyBooked");
        exit();
    }else{
        SucessOrErrorHistory("error=BookedAnAppoitment");
        bookEvent($connection,4,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AHistory1Like'])){ //4
    session_start(); 
    if(CheckIfUserLikedAnEvent($connection,4,$_SESSION['CollegeID']) != false){
        SucessOrErrorHistory("error=AlreadyLiked");
        exit();
    }else{
        SucessOrErrorHistory("error=LikedAnEvent");
        LikeEvent($connection,4,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AHistory2Book'])){
    session_start();
    if(CheckIfUserBookedIntoAppointment($connection,5,$_SESSION['CollegeID']) != false){
        SucessOrErrorHistory("error=AlreadyBooked");
        exit();
    }else{
        SucessOrErrorHistory("error=BookedAnAppoitment");
        bookEvent($connection,5,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AHistory2Like'])){  //5
    session_start(); 
    if(CheckIfUserLikedAnEvent($connection,5,$_SESSION['CollegeID']) != false){
        SucessOrErrorHistory("error=AlreadyLiked");
        exit();
    }else{
        SucessOrErrorHistory("error=LikedAnEvent");
        LikeEvent($connection,5,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AHistory3Book'])){
    session_start(); 
    if(CheckIfUserBookedIntoAppointment($connection,6,$_SESSION['CollegeID']) != false){
        SucessOrErrorHistory("error=AlreadyBooked");
        exit();
    }else{
        SucessOrErrorHistory("error=BookedAnAppoitment");
        bookEvent($connection,6,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['AHistory3Like'])){  //6
    session_start(); 
    if(CheckIfUserLikedAnEvent($connection,6,$_SESSION['CollegeID']) != false){
        SucessOrErrorHistory("error=AlreadyLiked");
        exit();
    }else{
        SucessOrErrorHistory("error=LikedAnEvent");
        LikeEvent($connection,6,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['ASport1Book'])){
    session_start(); 
    if(CheckIfUserBookedIntoAppointment($connection,7,$_SESSION['CollegeID']) != false){
        SucessOrErrorSport("error=AlreadyBooked");
        exit();
    }else{
        SucessOrErrorSport("error=BookedAnAppoitment");
        bookEvent($connection,7,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['ASport1Like'])){ //7
    session_start(); 
    if(CheckIfUserLikedAnEvent($connection,7,$_SESSION['CollegeID']) != false){
        SucessOrErrorSport("error=AlreadyLiked");
        exit();
    }else{
        SucessOrErrorSport("error=LikedAnEvent");
        LikeEvent($connection,7,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['ASport2Book'])){
    session_start(); 
    if(CheckIfUserBookedIntoAppointment($connection,8,$_SESSION['CollegeID']) != false){
        SucessOrErrorSport("error=AlreadyBooked");
        exit();
    }else{
        SucessOrErrorSport("error=BookedAnAppoitment");
        bookEvent($connection,8,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['ASport2Like'])){ //8
    session_start(); 
    if(CheckIfUserLikedAnEvent($connection,8,$_SESSION['CollegeID']) != false){
        SucessOrErrorSport("error=AlreadyLiked");
        exit();
    }else{
        SucessOrErrorSport("error=LikedAnEvent");
        LikeEvent($connection,8,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['ASport3Book'])){
    session_start(); 
    if(CheckIfUserBookedIntoAppointment($connection,9,$_SESSION['CollegeID']) != false){
        SucessOrErrorSport("error=AlreadyBooked");
        exit();
    }else{
        SucessOrErrorSport("error=BookedAnAppoitment");
        bookEvent($connection,9,$_SESSION['CollegeID']);
        exit();
    }
}else if(isset($_POST['ASport3Like'])){ //9
    session_start(); 
    if(CheckIfUserLikedAnEvent($connection,9,$_SESSION['CollegeID']) != false){
        SucessOrErrorSport("error=AlreadyLiked");
        exit();
    }else{
        SucessOrErrorSport("error=LikedAnEvent");
        LikeEvent($connection,9,$_SESSION['CollegeID']);
        exit();
    }
}else{
    header("location: ../pages/Events.php");
}