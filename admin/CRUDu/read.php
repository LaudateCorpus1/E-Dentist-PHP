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
    
    $Tname = null;
    $Tsurname = null;
    $Tusername = null;
    $Tpassword =null;
    $Temail =  null;
    $Tadmin = null;
    $id = null;
    if ( !empty($_GET['id'])) 
    {
        $id = $_REQUEST['id'];
    }
    if ( null==$id )
    {
        $message = "Te dhenat nuk u gjeten.";
        echo "<script type='text/javascript'>alert('$message');</script>" ;
        header("refresh:0 url=../index.php");
    } 
    else 
    {
$selektimi = "SELECT * FROM user WHERE user_id='".$id."'";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list($user_id, $username, $password,$name, $surname, $email, $admin,   )=$row;
                        $Tusername = $username;
                        $Tpassword = $password;
                        $Tname = $name;
                        $Tsurname = $surname;
                        $Temail = $email;
                        $Tadmin = $admin;
                    }
    }
    $temppass = null;
        $sql = "SELECT password FROM user WHERE username='".$_SESSION['username']."'";
		$result = mysql_query($sql) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
                    {
			
			list( $password   )=$row;
                          $temppas = $password;
                    }
                       
                    
  

?>

<script type='text/javascript'>
    var p=    prompt('Passwordi juaj <?php echo $_SESSION['username'];?>','');
    
   
    if(p !== "<?php echo $temppas;?>")
    {
        alert("Passwordi juaj nuk eshte i sakt");
        window.location.href = '../?admin=userat';
    }

</script>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="edentist.ico">
	<link rel="stylesheet" type="text/css" href="../../css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../../css/hover.css">  
 

    <title>E-Dentist</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <script type="text/javascript" src="../../js/jquery.jSlider.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/script.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
    </head>
    <body>
    <div class = "navbar navbar-inverse navbar-fixed-top" id="header" >
       <div class = "container">
       <div class="navbar-header">
           <a class="navbar-brand" href= "../../index.php?faqe=home" id="logo"></a> 
       </div>
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			
                       
		   <div class="collapse navbar-collapse" id="navbar-collapse">
                       
		   <ul class ="nav navbar-nav">
			
                       <li><a href="../../index.php" class="hvr-underline-from-left" id="links"                 
                                 ><span      class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="../?admin=terminet" class="hvr-underline-from-left" id="links">TERMINI</a></li>
                    <li><a href="../?admin=vizita" class="hvr-underline-from-left"id="links">VIZITA </a></li>
                     <li><a href="../?admin=diagnoza" class="hvr-underline-from-left"id="links">DIAGNOZA </a></li>
                    <li><a href="../?admin=userat" class="hvr-underline-from-left" id="active">PERDORUESI</a></li>
                     <li><a href="../?admin=keshillat" class="hvr-underline-from-left"id="links">KESHILLA </a></li>
                    <li><a href="../?admin=sherbimet" class="hvr-underline-from-left" id="links">SHERBIMI</a></li>
                 </ul>
             </div>
        </div>
    </div>
<div class ="container" id="content" align="center">
               
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Leximi i te dhenave</h3>
                       
                    </div>
                         <table class="table table-striped table-bordered">
         <thead>
             
        </thead>
        <tbody>
            <tr>
                <td>Emri</td>
                <td><?php echo $Tname ?></td>
              
            </tr>
            <tr>
                <td>Mbiemri</td>
                <td><?php echo $Tsurname ?></td>
               
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $Tusername ?></td>
           
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo $Tpassword ?></td>
           
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><?php echo $Temail;  ?></td>
               
            </tr>
            <tr>
                <td>Privilegji</td>
                <td><?php 
                if($Tadmin == 1)
                {
                    echo 'Admin';
                }
                else
                {
                    echo 'Perdorues';
                }?>
                </td>

            </tr>
           
        </tbody>
    </table>
                     <div class='row'>
                            
                            <a class="btn btn-info   "href="update.php?id=<?php echo $id ?>"><span class="glyphicon glyphicon-pencil">&thinsp;</span>Ndrysho</a>
                  
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $id ?>" ><span class="glyphicon glyphicon-trash">&thinsp;</span>Fshije</a>
                        <a href="../?admin=userat" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left">&thinsp;</span>Kthehu</a>
                </div>
                   
                    </div>
                </div>
                 
</div> <!-- /container -->
 
  </body>
 <?php }