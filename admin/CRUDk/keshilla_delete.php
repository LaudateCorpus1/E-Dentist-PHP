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
    $id = $_POST['id'];
            
    if ( null==$id ) {
        $message = "Te dhenat nuk jane shlyer.";
        echo "<script type='text/javascript'>alert('$message');</script>" ;
        header("refresh:0 url=../?admin=keshillat");
    }
    else {
		
		
        	 $sql_insert = "DELETE FROM keshillat WHERE keshillat_id= '".$id."'";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u shlyen me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh: 0; url=../?admin=keshillat");
            	}
		else{
			
		$message = "Te dhenat nuk u shlyen me sukses.";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh: 0; url=../?admin=keshillat" );
		}
 
        }         
 }       
		
   
