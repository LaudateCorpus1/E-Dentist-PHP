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
		$diagnoza = $_POST['diagnose'];
                $vizita_id = $_POST['vizita_id'];
                $id =null;
                    
              $selektimi ="SELECT id_diagnoza FROM diagnoza WHERE  vizita_id ='".$vizita_id."'";
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
        if(mysql_num_rows($result) == 0){

            $message = "Nuk eshte gjetur vizita.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=../?admin=diagnoza");
        }
         
        else{
            while($row = mysql_fetch_row($result))
            {       
            list($user_id)=$row;
            $id = $user_id;        
            }
             $sql_insert = "UPDATE diagnoza SET diagnoza     = '".$diagnoza."' WHERE `diagnoza`.`id_diagnoza` = ".$id."" ;
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh: 0; url=../?admin=diagnoza");
                         
                        
			
			
			
		}
		else{
			
		$message = "Te dhenat nuk u ruajten me sukses. Vertetoni nese personi ekziston";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh: 0; url=../?admin=diagnoza" );
		}
 
        }         
}
           
	