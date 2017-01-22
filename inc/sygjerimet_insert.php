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
		$username = $_POST['username'];
                $sygjerimi= $_POST['sygjerimi'];
               
                $id = NULL;
      
        $selektimi ="SELECT user_id FROM user WHERE  username ='".$username."'";
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
        if(mysql_num_rows($result) == 0){

            $message = "Useri nuk eshte gjendur.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=../index.php?faqe=home");
        }
        else{
            while($row = mysql_fetch_row($result))
            {       
            list($user_id)=$row;
            $id = $user_id;        
            }
 
        	 $sql_insert = "INSERT INTO sygjerimet (user_id, sygjerimi)
				VALUE ('$id','$sygjerimi') ";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh: 0; url=../?faqe=home");
                         
                        
			
			
			
		}
		else{
			
		$message = "Te dhenat nuk u ruajten me sukses.";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh: 0; url=../?faqe=sygjerimet" );
		}
             }
 }      
             
		
   
 
	