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
		$id = $_POST['username'];
                $date = $_POST['datepicker'];
                $time =  $_POST['time'];
           
          $query= "SELECT * FROM termini WHERE date='".$date."' AND id_users='".$id."'";
        $results = mysql_query($query);
        if(mysql_num_rows($results) > 0){

            $message = "Termini ne kete date egziston provoni ne date tjeter";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=../index.php?faqe=create");
        }
        
        else{
        $query= "SELECT * FROM termini WHERE date='".$date."' AND time='".$time."'";
        $results = mysql_query($query);
        if(mysql_num_rows($results) > 0){

            $message = "Termini ne kete kohe egziston provoni ne kohe tjeter";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=../index.php?faqe=create");
        }
         else{
        	 $sql_insert = "INSERT INTO termini (date, time, id_users)
				VALUE ('$date','$time', '$id') ";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh: 0; url=../?admin=create");
                         
                        
			
			
			
		}
		else{
			
		$message = "Te dhenat nuk u ruajten me sukses. Vertetoni nese personi ekziston";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh: 0; url=../?admin=create" );
		}
 
        }         
             
		
   }
 }

	