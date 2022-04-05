<?php
  include_once 'header.php';
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    
  </head>
  <body>
    <h1 class="text-center">Aston Events</h1>
    <p class="text-center" >Events hosted by Aston for everyone.</p>

    <section id="Events">
      <div class="container">
      <div class="row">
        <div class="card" style="width:20rem;">
          <img class="card-img-top" src="/images/ArtImages/Image1.jpg" style="size: 25cm;">
          <div class="card-body">
            <h3 class="card-title text-center">Art Events</h3>
            <p class="card-text text-center">An event hosted by Aston Events to showcase different Art from Students and famous People.</p>
            <a href="./ArtEvents.php" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
        <div class="card" style="width:20rem;">
          <img class="card-img-top" src="/images/HistoryImages/Image1.jpg" style="size: 25cm;">
          <div class="card-body">
            <h3 class="card-title text-center">History Events</h3>
            <p class="card-text text-center">An event hosted by Aston Events to showcase the History of Britan.</p>
            <a href="./HistoryEvents.php" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
        <div class="card" style="width:20rem;">
          <img class="card-img-top" src="/images/SportsImages/Image3.jpg" style="size: 25cm;">
          <div class="card-body">
            <h3 class="card-title text-center">Sports Events</h3>
            <p class="card-text text-center">An event hosted by Aston which involves playing sports and watching football.</p>
            <a href="./SportsEvents.php" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
      </div>
    </section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



  </body>
</html>