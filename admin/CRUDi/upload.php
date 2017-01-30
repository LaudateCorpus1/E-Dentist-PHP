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
    <style>

    label{float:left;} 
</style>
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
                    <li><a href="../?admin=userat" class="hvr-underline-from-left" id="links">PERDORUESI</a></li>
                     <li><a href="../?admin=keshillat" class="hvr-underline-from-left"id="links">KESHILLA </a></li>
                    <li><a href="../?admin=sherbimet" class="hvr-underline-from-left" id="links">SHERBIMI</a></li>
                 </ul>
             </div>
        </div>
    </div>
<div class ="container" id="content" align="center">
    <div class="span10 offset1">
                    <div class="row">
                        <h3>Shtimi i Imazhit</h3>
                    </div>
     <div class="col-sm-6">
         <form id="image_form"action="image_upload.php" method="post" enctype="multipart/form-data" onsubmit="return validateImageForm();">
             <div class="form-group">
    <label class="required">Selekto Imazhin:</label>
    <input type="file"  class="form-control"name="fileToUpload" id="fileToUpload">
     <span id="file_validation" class="error"></span>
             </div>
               <button type="submit" value="Submit" form ="image_form"class="btn btn-success"><span class="glyphicon glyphicon-ok">&thinsp;</span>Shto</button>
     <button type="reset" value="Cancel" form ="image_form" class="btn btn-warning" ><span class="glyphicon glyphicon-remove">&thinsp;</span>Fshije</button>
    <a class="btn btn-default" href="../?admin=imazhet"><span class="glyphicon glyphicon-chevron-left">&thinsp;</span>Kthehu</a>  
</form>
     </div>
    <div class="col-sm-6">
      <span><br></span>
      
      
          <ul class="list-group">
  <li class="list-group-item"> <p>Zgjidhni imazhin qe doni te shtoni. Imazhi nuk duhet te jete me i madhe se 5MB. Duhet te jete i formatit JPG, PNG, JPEG, ose GIF.</p></li>
  
</ul>
       
                </div>
    </div>

</body>
</html>
