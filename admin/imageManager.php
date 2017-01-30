
<?php
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
 ?>
<div class="container">
            <div class="row">
                <h3 >Imazhet</h3>
                <a href="CRUDi/upload.php" class="btn btn-success "><span class="glyphicon glyphicon-plus">&thinsp;</span>Krijo</a>
<span><br></span>   
<span><br></span>   
            </div>
   
    <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Titulli</th>
                      <th>Folder</th>
                      <th>Imazhi</th>
                      <th>Menaxhimi</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                        $directory = "../images/";

                       
                        $texts = glob($directory . "*");                      
foreach($texts as $text)
{
    
    $name = ( explode("/", $text));
    $path = substr($text, 3);
    echo '<tr>';
    echo '<td>'.$name[2].'</td>';
    echo '<td>'.$name[1].'</td>';
    echo '<td><a target="_blank" class="btn btn-default" href="'.$text.'" ><span class="glyphicon glyphicon-eye-open">&thinsp;</span>Shiko</a></td>';
    echo '<td><a class="btn btn-danger" href="CRUDi/delete.php?path='.$text.'" ><span class="glyphicon glyphicon-trash">&thinsp;</span>Fshije</a></td>';
    echo '</tr>';
    
}                 
                ?>
                  </tbody>
            </table>
    </div>
        </div>
    </div> 
