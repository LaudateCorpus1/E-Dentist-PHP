function validateImageForm()
{
     var valid = 1;
        var fileToUpload = document.getElementById('fileToUpload');
	var file_validation = document.getElementById("file_validation");
       

        
	
	if(fileToUpload.value.length < 3)
	{
		valid   =0;
		file_validation.innerHTML="Zgjedheni Imazhin";
		file_validation.style.display = "block"; 
                fileToUpload.className="form-control-error";
		
	}
	else
	{
		file_validation.style.display = "none";
		file_validation.parentNode.style.backgroundColor = "transparent";
                fileToUpload.className="form-control-good";
	}
        
	if(valid === 0)
                return false;
}
function validateDiagnozaForm()
{
    var valid = 1;
        var vizita_id = document.getElementById('vizita_id');
	var vizita_validation = document.getElementById("vizita_validation");
        var diagnose = document.getElementById("diagnose");
        var diagnose_validation = document.getElementById("diagnose_validation");

        
	
	if(vizita_id.value === "Vizita")
	{
		valid =0;
		vizita_validation.innerHTML="Zgjedheni Viziten";
		vizita_validation.style.display = "block"; 
                vizita_id.className="form-control-error";
		
	}
	else
	{
		vizita_validation.style.display = "none";
		vizita_validation.parentNode.style.backgroundColor = "transparent";
                vizita_id.className="form-control-good";
	}
        
        if(diagnose.value.length < 10 )
	{
		valid =0;
		diagnose_validation.innerHTML="Duhet te shkrunani diagnoze me te gjate";
		diagnose_validation.style.display = "block"; 
                diagnose.className="form-control-error";
	}
	else
	{
		diagnose_validation.style.display = "none";
		diagnose_validation.parentNode.style.backgroundColor = "transparent";
                diagnose.className="form-control-good";
	}
        
	
	if(valid === 0)
                return false;
}
function validateSygjerimForm()
{
        var valid = 1;
        var sygjerimi = document.getElementById('sygjerimi');
	var sygjerimi_validation = document.getElementById("sygjerimi_validation");

        
	
	if(sygjerimi.value.length < 10)
	{
		valid =0;
		sygjerimi_validation.innerHTML="Sygjerimi duhet te jete me i gjate";
		sygjerimi_validation.style.display = "block"; 	
                sygjerimi.className="form-control-error";
		
	}
	else
	{
		sygjerimi_validation.style.display = "none";
		sygjerimi_validation.parentNode.style.backgroundColor = "transparent";
                sygjerimi.className="form-control-good";
	}
	if(valid === 0)
            
		return false;
}
function validateSherbimiForm()
{
        var valid = 1;
        var pershkrimi = document.getElementById('pershkrimi');
	var pershkrimi_validation = document.getElementById("pershkrimi_validation");
        var qmimi = document.getElementById("qmimi");
        var qmimi_validation = document.getElementById("qmimi_validation");
        var foto = document.getElementById("foto");
        var foto_validation = document.getElementById("foto_validation");
        
        var filter= /^[-0-9 ]*$/;

        
	
	if(pershkrimi.value.length < 3)
	{
		valid =0;
		pershkrimi_validation.innerHTML="Pershkrimi duhet te jete me i gjate";
		pershkrimi_validation.style.display = "block"; 	
                pershkrimi.className="form-control-error";
		
	}
	else
	{
		pershkrimi_validation.style.display = "none";
		pershkrimi_validation.parentNode.style.backgroundColor = "transparent";
                pershkrimi.className="form-control-good";
	}
        
        if(!filter.test(qmimi.value) || qmimi.value.length === 0 )
	{
		valid =0;
		qmimi_validation.innerHTML="Qmimi duhet te permbaje vetem numra";
		qmimi_validation.style.display = "block"; 
                qmimi.className="form-control-error";
	}
	else
	{
		qmimi_validation.style.display = "none";
		qmimi_validation.parentNode.style.backgroundColor = "transparent";
                qmimi.className="form-control-good";
	}
        if(foto.value === "Foto")
	{
		valid =0;
		foto_validation.innerHTML="Zgjedheni Foton";
               foto.className = "form-control-error";
               
		
	}
	else
	{
		foto_validation.style.display = "none";
		foto_validation.parentNode.style.backgroundColor = "transparent";
                foto.className = "form-control-good";
	}
        
	
	if(valid === 0)
            
		return false;
}
function validateKeshillaForm()
{
        var valid = 1;
        var titulli = document.getElementById('titulli');
	var titulli_validation = document.getElementById("titulli_validation");
        var permbajtja = document.getElementById("permbajtja");
        var permbajtja_validation = document.getElementById("permbajtja_validation");
        var foto = document.getElementById('foto');
	var foto_validation = document.getElementById("foto_validation");

        
	
	if(titulli.value.length < 3)
	{
		valid =0;
		titulli_validation.innerHTML="Titulli duhet te jete me i gjate";
		titulli_validation.style.display = "block"; 	
		titulli.className="form-control-error";
	}
	else
	{
		titulli_validation.style.display = "none";
		titulli_validation.parentNode.style.backgroundColor = "transparent";
                titulli.className="form-control-good";
	}
        
        if(permbajtja.value.length < 10 )
	{
		valid =0;
		permbajtja_validation.innerHTML="Duhet te shkrunani permbajtje me te gjate";
		permbajtja_validation.style.display = "block"; 	
                permbajtja.className="form-control-error";
	}
	else
	{
		permbajtja_validation.style.display = "none";
		permbajtja_validation.parentNode.style.backgroundColor = "transparent";
                permbajtja.className="form-control-good";
	}
        
	if(foto.value === "Foto")
	{
		valid =0;
		foto_validation.innerHTML="Zgjedheni Foton";
               foto.className = "form-control-error";
               
		
	}
	else
	{
		foto_validation.style.display = "none";
		foto_validation.parentNode.style.backgroundColor = "transparent";
                foto.className = "form-control-good";
	}
	if(valid === 0)
            
		return false;
}
function validateVizitaForm()
{
    var valid = 1;
        var termin_id = document.getElementById('termin_id');
	var termini_validation = document.getElementById("termini_validation");
        var verejtje = document.getElementById("verejtje");
        var verejtje_validation = document.getElementById("verejtje_validation");

        
	
	if(termin_id.value === "Termini")
	{
		valid =0;
		termini_validation.innerHTML="Zgjedheni Terminin";
		termini_validation.style.display = "block"; 
                termin_id.className="form-control-error";
		
	}
	else
	{
		termini_validation.style.display = "none";
		termini_validation.parentNode.style.backgroundColor = "transparent";
                termin_id.className="form-control-good";
	}
        
        if(verejtje.value.length < 10 )
	{
		valid =0;
		verejtje_validation.innerHTML="Duhet te shkrunani diagnoze me te gjate";
		verejtje_validation.style.display = "block"; 
                verejtje.className="form-control-error";
	}
	else
	{
		verejtje_validation.style.display = "none";
		verejtje_validation.parentNode.style.backgroundColor = "transparent";
                verejtje.className="form-control-good";
	}
        
	
	if(valid === 0)
            
		return false;
}
function validateUserForm()
{
    	
	var valid = 1;
	var name = document.getElementById('name');
        var name_validation = document.getElementById('name_validation');
	var surname = document.getElementById('surname');
        var surname_validation = document.getElementById('surname_validation');
        var username = document.getElementById('username');
        var username_validation = document.getElementById('username_validation');
        var password1 = document.getElementById('password1');
        var password1_validation = document.getElementById('password1_validation');
        var password2 = document.getElementById('password2');
        var password2_validation = document.getElementById('password2_validation');
        var email = document.getElementById('e-mail');
        var email_validation = document.getElementById('email_validation');
        var filter= /[0-9]|\./;
        var filter2= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
        if(name.value.length < 3)
	{
		valid =0;
		name_validation.innerHTML="Emri duhet te jete me i gjate";
		name_validation.style.display = "block"; 		
                name.className = "form-control-error"; 	
	}
       	if(filter.test(name.value))
	{
		valid =0;
		name_validation.innerHTML="Lejohen vetem shkronja";
		name_validation.style.display = "block"; 
                name.className = "form-control-error"; 	
	}
        else
        {
             name.className = "form-control-good"; 
             name_validation.style.display = "none";
             name_validation.parentNode.style.backgroundColor = "transparent";
        }
	
        if(surname.value.length < 3)
        {
                valid =0;
		surname_validation.innerHTML="Mbiemri duhet te jete me i gjate";
		surname_validation.style.display = "block"; 
                surname.className = "form-control-error"; 	
        }
	if(filter.test(surname.value))
	{
		valid =0;
		surname_validation.innerHTML="Lejohen vetem shkronja";	
                surname_validation.style.display = "block"; 
		surname.className = "form-control-error"; 	
	}
         else
        {
             surname.className = "form-control-good"; 
             surname_validation.style.display = "none";
             surname_validation.parentNode.style.backgroundColor = "transparent";
        }
	
	if(username.value.length < 3)
	{
		valid =0;
		username_validation.innerHTML="Username duhet te jete me i gjate";
                username_validation.style.display = "block"; 
                username.className = "form-control-error"; 	
	}
         else
        {
             username.className = "form-control-good"; 	
             username_validation.style.display = "none";
             username_validation.parentNode.style.backgroundColor = "transparent";
        }
        
        if(password1.value.length < 8 || password2.value.length < 8)
	{
		valid =0;
		password1_validation.innerHTML="Passwordi duhet te kete se paku 8 shkronja";	
                 password1_validation.style.display = "block";
                password1.className = "form-control-error"; 
                password2_validation.innerHTML="Passwordi duhet te kete se paku 8 shkronja";
                password2_validation.style.display = "block";
                password2.className = "form-control-error"; 
	}
       
        else if(password1.value !== password2.value)
	{
		valid =0;
		password1_validation.innerHTML="Passwordet nuk jane te njejta";
                 password1_validation.style.display = "block";
                password2_validation.innerHTML="Passwordet nuk jane te njejta";
                password2_validation.style.display = "block";
                password1.className = "form-control-error"; 	
                password2.className = "form-control-error"; 	
	}
         else
        {
             password1.className = "form-control-good"; 
             password2.className = "form-control-good";
              password1_validation.style.display = "none";
             password2_validation.parentNode.style.backgroundColor = "transparent";
        }
        if(!filter2.test(email.value) || email.value.length < 5)
	{
		valid =0;
		email_validation.innerHTML="E-mail duhet te shkruhet ne formen e duhur";
                email_validation.style.display = "block";
                email.className = "form-control-error"; 	
	}
         else
        {
             email.className = "form-control-good"; 
               email_validation.style.display = "none";
             email_validation.parentNode.style.backgroundColor = "transparent";
        }
	
	if(valid === 0)
          return false; 
}
function validateForm()
{
	
	var valid = 1;
        var username = document.getElementById('username');
	var username_validation = document.getElementById("username_validation");
        var date = document.getElementById("datepicker");
        var date_validation = document.getElementById("date_validation");

        
	
	if(username.value === "Pacienti")
	{
		valid =0;
		username_validation.innerHTML="Zgjedheni Perdoruesin";
                username.className = "form-control-error";
               
		
	}
	else
	{
		username_validation.style.display = "none";
		username_validation.parentNode.style.backgroundColor = "transparent";
                username.className = "form-control-good";
	}
        
        if(date.value.length === 0 )
	{
		valid =0;
		date_validation.innerHTML="Duhet te zgjedhni daten";
		date.className = "form-control-error";
	}
	else
	{
		date_validation.style.display = "none";
		date_validation.parentNode.style.backgroundColor = "transparent";
                date.className="form-control-good";
	}
        
	
	if(valid === 0)
            
		return false;
}