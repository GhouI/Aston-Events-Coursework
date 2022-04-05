<?php
    include_once './header.php';
    if(!isset($_SESSION["email"])){
      header("location: ./login.php");
  }
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    
  </head>
  <body>
    <h1 class="text-center">Art Events</h1>
    <p class="text-center" >These events are filtered towards art events. These events have different times/dates so please be careful when attending them.</p>

    <section id="Events">
      <div class="container">
      <div class="row">
        <div class="card" style="width:20rem;">
          <img class="card-img-top" src="/images/ArtImages/Image1.jpg" style="size: 25cm;">
          <div class="card-body">
            <h3 class="card-title text-center">Student Arts</h3>
            <p class="card-text text-center">Aston university students who do drawings.</p>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Event Place: Room 200b</li>
            <li class="list-group-item">Event Organiser: Iivari Nikostratos </li>
              <li class="list-group-item">Event Date: 2021-06-02 </li>
              <li class="list-group-item">Event Start Time:8:30am</li>
              <li class="list-group-item">Event End Time:9:00am</li>
              <li class="list-group-item">Event Amount Liked: 4 </li>
            </ul>
            <form action="/others/AllEvents.php" method="POST">
            <input class="btn btn-primary" type="submit" name="AEvent1Book" value="Book An Appointment">
            <input class="btn btn-primary" type="submit" name="AEvent1Like" value="Like">
            </form>
            
          </div>
        </div>
        <div class="card" style="width:20rem;">
          <img class="card-img-top" src="/images/ArtImages/Image2.jpg" style="size: 25cm;">
          <div class="card-body">
            <h3 class="card-title text-center">Cultural Art</h3>
            <p class="card-text text-center">View different types of arts from different types of cultures.</p>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Event Place: In the Gym</li>
            <li class="list-group-item">Event Organiser: Shazi Stuart</li>
              <li class="list-group-item">Event Date: 2021-06-01</li>
              <li class="list-group-item">Event Start Time: 09:30:00</li>
              <li class="list-group-item">Event End Time: 10:30:00</li>
              <li class="list-group-item">Event Amount Liked: 2</li>
            </ul>
            <form action="/others/AllEvents.php" method="POST">
            <input class="btn btn-primary" type="submit" name="AEvent2Book"  value="Book An Appointment">
            <input class="btn btn-primary" type="submit" name="AEvent2Like"  value="Like">
            </form>
          </div>
        </div>
        <div class="card" style="width:20rem;">
          <img class="card-img-top" src="/images/ArtImages/Image3.jpg" style="size: 25cm;">
          <div class="card-body">
            <h3 class="card-title text-center">Sculpture Art</h3>
            <p class="card-text text-center">Different Sculpture from Art museum coming into Aston.</p>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Event Place: In the Hall</li>
            <li class="list-group-item">Event Organiser: Shena Mira</li>
              <li class="list-group-item">Event Date: 2021-05-02</li>
              <li class="list-group-item">Event Start Time: 10:30:00</li>
              <li class="list-group-item">Event End Time: 12:45:00</li>
              <li class="list-group-item">Event Amount Liked: 3</li>
            </ul>
            <form action="/others/AllEvents.php" method="POST">
            <input class="btn btn-primary" type="submit" name="AEvent3Book"  value="Book An Appointment">
            <input class="btn btn-primary" type="submit" name="AEvent3Like"  value="Like">
            </form>
          </div>
        </div>
      </div>
    </section>


    <?php 
                        function JsAlert($text){
                          echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                          $text
                         </div></div>";
                      }
            if(isset($_GET["error"])){
                if($_GET["error"] == "AlreadyBooked"){ //if there is no input
                    JsAlert("You have already booked for this event.");
                }else if($_GET["error"] == "BookedAnAppoitment"){ //if the email is not correct
                  JsAlert("An appointment has booked.");
                }else if($_GET["error"] == "AlreadyLiked"){ //something wrong with the university id
                  JsAlert("You have already Liked this Event.");
                }else if($_GET["error"] == "LikedAnEvent"){ //something wrong with the phone Number
                  JsAlert("You have liked an Event.");
                }
            }
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



  </body>
</html>