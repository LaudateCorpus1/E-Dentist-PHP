<?php
session_start();
 
$message = "Logging Out.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=index.php");
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 


?>