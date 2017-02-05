<?php
       include('../inc/db_con.php');
       if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['logged_in']))
 {
     $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=../index.php");
 }
 
 else{ 
		$receiver = $_POST['username'];
                $message= $_POST['message'];
                $sender= $_SESSION['username'];
              
       
 
        	 $sql_insert = "INSERT INTO message (sender,reciever,message)
				VALUE ('$sender','$receiver','$message') ";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh: 0; url=../?faqe=message");
                         
                        
			
			
			
		}
		else{
			
		$message = "Te dhenat nuk u ruajten me sukses.";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh: 0; url=../?faqe=message" );
		}
             }
          
		
   
 
	