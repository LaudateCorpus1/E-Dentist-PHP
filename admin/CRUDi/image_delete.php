<?php
       include('../../inc/db_con.php');
       if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['logged_in']))
 {
     $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=../index.php");
 }
 else if($_SESSION['mof'] == 0)
 {
      $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=../index.php");
 }
     
 else{ 
        $path = $_POST['path'];
        
        if(!file_exists($path))
        {
            $message = "Imazhi nuk egziston";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh: 0; url=../?admin=imazhet");
        }
        else{
     if(unlink($path))
		{
			$message = "Te dhenat u shlyen me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh: 0; url=../?admin=imazhet");
                         
                        
			
			
			
		}
		else{
			
		$message = "Te dhenat nuk u shlyen me sukses. Vertetoni nese imazhi ekziston";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh: 0; url=../?admin=imazhet" );
		}
        }
 }