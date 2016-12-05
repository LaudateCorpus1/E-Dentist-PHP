<?php include'db_con.php'; ?>
<?php
        ob_start();

        $username=$_POST['username']; 
        $password=$_POST['password']; 

        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $sql="SELECT * FROM users WHERE password = '" . md5($password) . "' AND username = '" . $username . "'";
        
		$result=mysql_query($sql);
        $count=mysql_num_rows($result);
        
		$row = mysql_fetch_array($result);
        if($count==1){
        session_start();
		//Ruaj te dhena ne session
        $_SESSION['logged_in'] = TRUE;
        $_SESSION['username'] 	= $row['username'];
        $_SESSION['name'] 	= $row['name'];
        $_SESSION['surname'] = $row['surname'];
        header("location:../index.php");
        }
        else {
         echo "ka problem me te dhenat qe keni shtypur";
        }
?>