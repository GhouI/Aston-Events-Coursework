<?php

function bookEvent($connection,$EventId,$UserId){ //books an event
    $sql = "INSERT INTO EventsJoined(CollegeID,EventsID) VALUES($UserId,$EventId);";
    $statement = mysqli_stmt_init($connection); //init the connection
    if(!mysqli_stmt_prepare($statement,$sql)){
        JsAlert("SQL Error has occured. Please contact the front desk.");
        exit();
    }
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    exit();
}
function CheckIfUserBookedIntoAppointment($connection,$EventId,$UserId){ //checks if the user has booked.
    $sql = "SELECT * FROM EventsJoined WHERE EventsID = $EventId AND CollegeID = $UserId;";
    $statement = mysqli_stmt_init($connection); //init the connection
    if(!mysqli_stmt_prepare($statement,$sql)){
        JsAlert("MySQL Error has occured [1]");
        exit();
    }
    
 //   mysqli_stmt_bind_param($statement,"ii",$EventId,$UserId);
    mysqli_stmt_execute($statement);

    $DatabaseResults = mysqli_stmt_get_result($statement);
    
    if($rows = mysqli_fetch_assoc($DatabaseResults)){
        return $rows;
    }else{
        return false;
    }
    echo mysqli_fetch_assoc($DatabaseResults);
    mysqli_stmt_close($statement);
}
function insertIntoLikedTable($connection,$EventID,$UserID){ //inserts the user into the liked table so they don't double like
    //INSERT INTO EventsLiked(EventID,CollegeID) VALUES($EventID,$UserID);
    $sql = "INSERT INTO EventsLiked(EventID,CollegeID) VALUES($EventID,$UserID);";
    $statement = mysqli_stmt_init($connection); //init the connection
    if(!mysqli_stmt_prepare($statement,$sql)){
        header("location: ../index.php");
        exit();
    }
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    exit();
}
function LikeEvent($connection,$EventID,$UserID){ //likes the event.
    $sql = "UPDATE AstonEvents SET EventCountLiked = EventCountLiked + 1 WHERE AstonEvents.EventID = $EventID;";
    $statement = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($statement,$sql)){
        JsAlert("MySQL Error has occured");
        exit();
    }
 //   mysqli_stmt_bind_param($statement,"i",$EventID);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    insertIntoLikedTable($connection,$EventID,$UserID);
}
function CheckIfUserLikedAnEvent($connection,$EventId,$UserId){ //checksi f the user has liked the event before
    $sql = "SELECT * FROM EventsLiked WHERE EventID = $EventId AND CollegeID = $UserId;";
    $statement = mysqli_stmt_init($connection); //init the connection
    if(!mysqli_stmt_prepare($statement,$sql)){
        JsAlert("MySQL Error has occured [1]");
        exit();
    }
    
 //   mysqli_stmt_bind_param($statement,"ii",$EventId,$UserId); 
    mysqli_stmt_execute($statement);

    $DatabaseResults = mysqli_stmt_get_result($statement);
    
    if($rows = mysqli_fetch_assoc($DatabaseResults)){
        return $rows;
    }else{
        return false;
    }
    echo mysqli_fetch_assoc($DatabaseResults);
    mysqli_stmt_close($statement);
}

function JsAlert($message){ //js and php script showing an alert sign
    echo '<script type="text/javascript">alert("' . $message . '")</script>';
}
function SucessOrErrorArt($message){ //redirecting to a art page
    header("location: ../pages/ArtEvents.php?$message");
}
function SucessOrErrorSport($message){
    header("location: ../pages/SportsEvents.php?$message");
}
function SucessOrErrorHistory($message){
    header("location: ../pages/HistoryEvents.php?$message");
}