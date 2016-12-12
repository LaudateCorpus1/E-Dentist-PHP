<?php include'db_con.php'; ?>
<?php
        ob_start();

        $username=$_POST['username']; 
        $password=$_POST['password']; 

        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $sql="SELECT * FROM user WHERE password = '" .$password . "' AND username = '" . $username . "'";
        
    $result=mysql_query($sql);
        $count=mysql_num_rows($result);
        
		$row = mysql_fetch_array($result);
        if($count==1){
        session_start();
        $_SESSION['logged_in'] = TRUE;
        $_SESSION['username'] 	= $row['username'];
        $_SESSION['name'] 	= $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['admin'] = $row['admin'];
        if($row['admin'] == 1)
        {
        header("location:../admin/index.php");
        }
        else
        {
         header("location:../index.php");
        }
        }
        
        else {
         echo "There is a problem with the data written";
        }
?>