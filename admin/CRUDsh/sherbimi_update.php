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
		
		$pershkrimi = $_POST['pershkrimi'];
                $qmimi = $_POST['qmimi'];
                $id = $_POST['sherbimi_id'];
               
                
             
             $sql_insert = "UPDATE `services` SET `description` = '".$pershkrimi."', `price` = '".$qmimi."' WHERE `services`.`id`= ".$id."" ;
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=../?admin=sherbimet");
                         
                        
			
			
			
		}
		else{
			
		$message = "Te dhenat nuk u ruajten me sukses. Vertetoni nese sherbimi ekziston";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh: 0; url=../?admin=sherbimet" );
		}
 
        }         

           
	