<?php
    session_start();
?>
<html>
<title> Aston Events </title>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</head>
<style> 

.icon {
            text-align: center;
        }
        
        .rows {
            text-align: center;
        }
        
        .logo {
            width: 300px;
            height: 120px;
            text-align: center;
        }
        
        .RowButtons {
            background-color: white;
            border: 2px solid #f30dd8;
            border-radius: 25px;
        }
        
        .RowButtons:hover {
            background-color: #f30dd8;
            color: white;
        }
</style>
            <div class="irow">
            <div class="icon">
                <img src="/images/astoneventslogo.png" alt="icon" class="logo">
            </div>
        </div>
            <div class="buttonsrow">
            <div class="rows">
                <button class="RowButtons" title="Homepage" onclick="location.href='../index.php'">Home</button>
                <button class="RowButtons " title="Event Page" onclick="location.href='../pages/Events.php'">Events</button>
                <button class="RowButtons " title="Contact" onclick="location.href='../pages/About.php'">About us</button>
                <?php
                    if(str_contains(getcwd(),"pages")){
                        if(isset($_SESSION["email"])){
                            include_once './signedin.php';

                        }else{
                            include_once './signedup.php';
                        }
                    }else{
                        if(isset($_SESSION["email"])){
                            include_once './pages/signedin.php';
                        }else{
                            include_once './pages/signedup.php';
                        }
                    }
                ?>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>
