<?php include'db_con.php';
        ob_start();

        $username=$_POST['username']; 
        $password=$_POST['password']; 

        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $sql="SELECT *  FROM user WHERE password = '" .$password . "' AND username = '" . $username . "'";
        
    $result=mysql_query($sql);
        $count=mysql_num_rows($result);
        $row = mysql_fetch_array($result);
        
        if($count==1){
           
        
         
        $_SESSION['logged_in'] = TRUE;
        $_SESSION['username'] 	= $row['username'];
        $_SESSION['name'] 	= $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['mof'] = $row['admin'];
        $message = "Jeni duke u loguar";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=../index.php");
        
        }
        
        
       
        else {
         $message = "Te dhenat tua nuk jane te sakta";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=../index.php");
        }
         
        
?>