 <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Krijo Termin</h3>
                    </div>
             
    <div class="col-sm-6">
        
    <form id="termin_form" method="POST" action = "CRUD/termin_insert.php" onsubmit="return validateForm();">
    <div class="form-group" >
      <label for="name">Emri:</label>
      <input id="name" type="text" class="form-control" name="name" value="" placeholder="Shkruaj Emrin">
      <span id="name_validation" class="error"></span>
    </div>
    <div class="form-group">
      <label for="surname">Mbiemri:</label>
      <input id="surname" type="text" class="form-control" name="surname" value="" placeholder="Shkruaj Mbiemrin">
      <span id="surname_validation" class="error"></span>
      
    </div>
      <div class="form-group">
      <label class="required" for="username">Username:</label>
      <input id="username"type="text" class="form-control" name="username" value="" placeholder="Shkruaj Username">
      <span id="username_validation" class="error"></span>
     
    </div>
    <div class="form-group">
      <label class="required"  for="date">Data:</label>
      <input id="date"type="date" class="form-control" name="date" value="" placeholder="Shkruaj Daten">
      <span id="date_validation" class="error"></span>
     
    </div>
    <div class="form-group">
      <label class="required" for="time">Ora:</label>
      <input id="time"type="time" class="form-control" name="time" value="" placeholder="Shkruaj Oren">
      <span id="time_validation" class="error"></span>
      
    </div>
    <button type="submit" value="Submit" form ="termin_form"class="btn btn-success">Krijo</button>
     <button type="reset" value="Cancel" form ="termin_form" class="btn btn-default" >Shlyej</button>
    <a class="btn btn-danger" href="?admin=terminet">Kthehu</a>
  </form>
                </div>
     <div class="col-sm-6">
          <ul class="list-group">
  <li class="list-group-item">  <p>Emri nuk duhet te permbaje numra apo elemente tjera perveq shkonjave. Emri mund te lihet i zbrazet</p></li>
  <li class="list-group-item"><p>Mbiemri nuk duhet te permbaje numra apo elemente tjera perveq shkonjave. Mbiemri mund te lihet i zbrazet</p></li>
  <li class="list-group-item"> <p>Username duhet te jete i mbushur patjeter pasi kerkimi nuk mund te behet pa te. </p></li>
  <li class="list-group-item"> <p>Data duhet te jepet ne formatin e caktuar: Dita/Muaji/Viti (Shembull: 25/10/2017). Data nuk pranohet nese i takon dates se sotme ose me heret</p> </li>
  <li class="list-group-item"> <p>Ora duhet te jepet ne formatin e 24 oresh (Shembull: 14:00). Ora nuk guxon te jete jashte orarit te punes.</p></li>
</ul>
       
                </div>
                    
               
                </div>
                 
    </div> <!-- /container -->
