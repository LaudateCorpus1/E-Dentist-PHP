<?php

       include('db_con.php');
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
  	$name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $password = $_POST['password1'];
        $email =  $_POST['e-mail'];
        $admin = $_POST['admin'];
        $user_id = $_POST['user_id'];
       
    $selektimi ="SELECT * FROM user WHERE   user_id != '".$user_id."' AND username ='".$username."' ";
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
        if(mysql_num_rows($result) > 0){
            $message = "Useri egziston. Nuk mund te perdoret ky username";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("refresh:0;url=../?admin=userat");
        }
        else 
        {
		
		
        	$sql_insert = "UPDATE user SET username = '".$username."', password = '".$password."', name = '".$name."', surname = '".$surname."', email = '".$email."', admin = '".$admin."' WHERE user.user_id = '".$user_id."'";
		$query=mysql_query($sql_insert);	
		if($query)
		{
                    $message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    include('../logout.php');
                    header("refresh:0;url=../?admin=userat");
                }
		else
                {
                    $message = "Te dhenat nuk u ruajten me sukses. Vertetoni nese personi ekziston";
                    echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
		    header( "refresh:0;url=../?admin=userat" );
                }        
        }
 }
   
	