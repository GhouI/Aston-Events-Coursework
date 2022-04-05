<?php
   include_once '../pages/header.php'
   ?>
<html>
   <head>
      <link rel="stylesheet" href="../others/signup.css">
   </head>
   <body>
      <section class="container-fluid">
         <section class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-3">
               <form class="f-container" action="/others/register.php" method="post">
               <form>
                   <h3>Sign up</h3>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                     <label for="formGroupExampleInput">Full Name</label>
                     <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your full Name" name="fname">
                  </div>
                  <div class="form-group">
                     <label for="formGroupExampleInput">Phone Number</label>
                     <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone number" name="phone">
                  </div>
                  <div class="form-group">
                     <label for="formGroupExampleInput">University ID</label>
                     <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone number" name="cid">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Password</label>
                     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="psw">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submitted">Submit</button>
               </form>
               </form>
            </div>
         </section>
      </section>
      <?php
         if (isset($_GET["error"]))
         {
             if ($_GET["error"] == "noinput")
             { //if there is no input
                 echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                All/Some fields are empty. Please make sure you have inputted in all of them.
               </div></div>";
             }
             else if ($_GET["error"] == "emailnotcorrect")
             { //if the email is not correct
                 echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                 The Email you have inputted is incorrect.
                </div></div>";
             }
             else if ($_GET["error"] == "collegeid")
             { //something wrong with the university id
                 echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                 Your university Id is incorrect.
                </div></div>";
             }
             else if ($_GET["error"] == "phoneNumber")
             { //something wrong with the phone Number
                 echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                 Phone Number is incorrect.
                </div></div>";
             }
             else if ($_GET["error"] == "emailExists")
             { //email exists
                 echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                 Email already exists.
                </div></div>";
             }
             else if ($_GET["error"] == "collegeIDExists")
             { //colegeid already exists
                 echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                 University ID already exists.
                </div></div>";
             }
             else if ($_GET["error"] == "phoneNumberExists")
             { //phone number exits
                 echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                 Phone Number already exists.
                </div></div>";
             }
             else if ($_GET["error"] == "emailnoaston")
             { //email has no aston
                 echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                 Please use an aston email. The email you have inputted is none aston one.
                </div></div>";
             }
             else if ($_GET["error"] == "sqlerror")
             { //sql error
                 echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
                 An SQL Error has occured. Please contact the main desk.
                </div></div>";
             }
             else if ($_GET["error"] == "none")
             { // no errors at all
                 echo "<div class='alert alert-success col-md-4 col-md-offset-4  role='alert' align='center' >Your account has sucessfully registered.</div>";
             }
             else if ($_GET["error"] == "passwordLength")
             {
               echo "<div class='row'><div class='alert alert-danger  col-md-4 col-md-offset-4 ' role='alert' align='center'>
               The password needs to be more than 6 characters.
              </div></div>";
             }
         }
         ?>
   </body>
</html>