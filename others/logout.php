<?php
session_start();
session_unset();

session_destroy();

header("location: ../index.php");
//after logging out it goes to index page.

