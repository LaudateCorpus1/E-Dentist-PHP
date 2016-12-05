
   
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

 
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/slider1.png" alt="Chania" width="460" height="345">
      
      </div>

      <div class="item">
        <img src="images/slider2.png" alt="Chania" width="460" height="345">
       
      </div>
    
      <div class="item">
        <img src="images/slider3.png" alt="Flower" width="460" height="345">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
        <div class="hr"></div>
		<div class="row">
			<div class="col-sm-6" id="advice">  
			<div class="col-sm-3">
			<img src="images/1.png" ></div>
			<div class="col-sm-9">
          <a class="hvr-push"><b>KESHILLAT</b></a>
          <p><i>Mesoni me shume rreth kujdesit te dhembeve dhe mirembajtjes se tyre. Se shpejti</i></p></div>	</div>
			<div class="col-sm-6" id="emergency">
			<div class="col-sm-3">
			<img src="images/2.png"></div>
			<div class="col-sm-9">
            <a class="hvr-push"><b>TERMINET</b></a>
          <p><i>Caktimi i termineve online nga shtepia vetem tek ne. Se shpejti</i></p></div></div>
     
           
           </div>
        <div class="hr">
		</div>
		<div class="row" id="promo">
        <div class ="col-sm-4">
            <h3>SHERBIME TONA</h3>
            <p>Ordinanca jone ofron sherbime profesionale nga mjek te specializuar ne kete lami.</p>
            <a href="?faqe=services" class="hvr-pulse"><b>SHIKO ME SHUME</b></a>
        </div>
         <div class ="col-sm-4">
             <h3>NA KONTAKTONI</h3>
            <p>Ju mund te na kontaktoni ne numrat tane te telefonit si dhe ne e-mail adressat e ordinances</p>
            <a href="?faqe=contact" class="hvr-pulse"><b>SHIKO ME SHUME</b></a>  
        </div>
         <div class ="col-sm-4">
               <h3>VIZITA</h3>
            <p>Ne preferojme qe ju te na vizitone ne ordinancen tone per kontrolla apo keshillime te ndryshme</p>
            <a href="?faqe=contact" class="hvr-pulse"><b>SHIKO ME SHUME</b></a>
        </div>
      </div>
          <div class="hr">
		</div>
        <div class="col-sm-6"><iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=rtn64str368v8008859c07adq8%40group.calendar.google.com&amp;color=%23865A5A&amp;ctz=Europe%2FBelgrade" style="border-width:0" height="300" frameborder="0" scrolling="no"></iframe></div>
        <div class="col-sm-6">
            
  <h2>Ju lutem jepni nje vleresim per Dentistin</h2>
  <p>Vleresimi eshte nga nota 1 deri ne 5.</p>
  <form id ="rating_form" method="POST" action = "inc/rating_insert.php">
    <label><input type="radio" name="optradio" value="1">1</label>
    <label><input type="radio" name="optradio"value="2">2</label>
    <label><input type="radio" name="optradio"value="3">3</label>
    <label><input type="radio" name="optradio"value="4">4</label>
    <label><input type="radio" name="optradio"value="5">5</label>
    <button type="submit" value="Submit" form ="rating_form">Vlereso</button>
    
  </form>
        </div>
    

    <script src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.jSlider.js"></script>
    <script src="js/ism-2.2.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>