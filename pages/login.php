<?php
include_once 'header.php'
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../others/signup.css">
</head>
<body>
<section class="container-fluid">
         <section class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-3">
               <form class="f-container" action="/others/signin.php" method="post">
               <form>
                   <h1 class="text-center">Login</h1>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Password</label>
                     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="psw">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               </form>
               </form>
            </div>
         </section>
      </section>
    <?php 
            function insertText($text){
                echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                $text
               </div></div>";
            }
            if(isset($_GET["error"])){
                if($_GET["error"] == "noinput"){ //if there is no input
                    insertText("Please fill in all the fields.");
                }else if($_GET["error"] == "wrongEmail"){ //if the email is not correct
                    insertText("Email usage is incorrect.");
                }else if($_GET["error"] == "wrongPassword"){ //something wrong with the university id
                    insertText("Password is incorrect");
                }else if($_GET["error"] == "sqlerror"){ //something wrong with the phone Number
                    insertText("SQL Error has occured.");
                }
            }
    ?>
</body>
</html>