
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
		
	}
	else
	{
		sygjerimi_validation.style.display = "none";
		sygjerimi_validation.parentNode.style.backgroundColor = "transparent";
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
        var filter= /^[-0-9 ]*$/;

        
	
	if(pershkrimi.value.length < 3)
	{
		valid =0;
		pershkrimi_validation.innerHTML="Pershkrimi duhet te jete me i gjate";
		pershkrimi_validation.style.display = "block"; 	
		
	}
	else
	{
		pershkrimi_validation.style.display = "none";
		pershkrimi_validation.parentNode.style.backgroundColor = "transparent";
	}
        
        if(!filter.test(qmimi.value) )
	{
		valid =0;
		qmimi_validation.innerHTML="Qmimi duhet te permbaje vetem numra";
		qmimi_validation.style.display = "block"; 	
	}
	else
	{
		qmimi_validation.style.display = "none";
		qmimi_validation.parentNode.style.backgroundColor = "transparent";
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

        
	
	if(titulli.value.length < 3)
	{
		valid =0;
		titulli_validation.innerHTML="Titulli duhet te jete me i gjate";
		titulli_validation.style.display = "block"; 	
		
	}
	else
	{
		titulli_validation.style.display = "none";
		titulli_validation.parentNode.style.backgroundColor = "transparent";
	}
        
        if(permbajtja.value.length < 10 )
	{
		valid =0;
		permbajtja_validation.innerHTML="Duhet te shkrunani permbajtje me te gjate";
		permbajtja_validation.style.display = "block"; 	
	}
	else
	{
		permbajtja_validation.style.display = "none";
		permbajtja_validation.parentNode.style.backgroundColor = "transparent";
	}
        
	
	if(valid === 0)
            
		return false;
}
function validateVizitaForm()
{
    var valid = 1;
        var termin_id = document.getElementById('termin_id');
	var termini_validation = document.getElementById("termini_validation");
        var diagnose = document.getElementById("diagnose");
        var diagnose_validation = document.getElementById("diagnose_validation");

        
	
	if(termin_id.value === "Termini")
	{
		valid =0;
		termini_validation.innerHTML="Zgjedheni Terminin";
		termini_validation.style.display = "block"; 	
		
	}
	else
	{
		termini_validation.style.display = "none";
		termini_validation.parentNode.style.backgroundColor = "transparent";
	}
        
        if(diagnose.value.length < 10 )
	{
		valid =0;
		diagnose_validation.innerHTML="Duhet te shkrunani diagnoze me te gjate";
		diagnose_validation.style.display = "block"; 	
	}
	else
	{
		diagnose_validation.style.display = "none";
		diagnose_validation.parentNode.style.backgroundColor = "transparent";
	}
        
	
	if(valid === 0)
            
		return false;
}
function validateUserForm()
{
    	
	var valid = 1;
	var name = document.getElementById('name');
	var name_validation = document.getElementById("name_validation");
	var surname = document.getElementById('surname');
	var surname_validation = document.getElementById("surname_validation");
        var username = document.getElementById('username');
	var username_validation = document.getElementById("username_validation");
        var password1 = document.getElementById('password1');
	var password_validation1 = document.getElementById("password_validation1");
         var password2 = document.getElementById('password2');
	var password_validation2 = document.getElementById("password_validation2");
        var email = document.getElementById('e-mail');
	var email_validation = document.getElementById("email_validation");
        var filter= /[0-9]|\./;
        var filter2= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
        if(name.value.length < 3)
	{
		valid =0;
		name_validation.innerHTML="Emri duhet te jete me i gjate";
		name_validation.style.display = "block"; 	
		
	}
	else if(filter.test(name.value))
	{
		valid =0;
		name_validation.innerHTML="Lejohen vetem shkronja";
		name_validation.style.display = "block"; 	
		
	}
	else
	{
		name_validation.style.display = "none";
		name_validation.parentNode.style.backgroundColor = "transparent";
	}
        
        if(surname.value.length < 3)
        {
                valid =0;
		surname_validation.innerHTML="Mbiemri duhet te jete me i gjate";
		surname_validation.style.display = "block"; 
        }
	else if(filter.test(surname.value))
	{
		valid =0;
		surname_validation.innerHTML="Lejohen vetem shkronja";
		surname_validation.style.display = "block"; 	
		
	}
	else
	{
		surname_validation.style.display = "none";
		surname_validation.parentNode.style.backgroundColor = "transparent";
	}
	if(username.value.length < 3)
	{
		valid =0;
		username_validation.innerHTML="Username duhet te jete me i gjate";
		username_validation.style.display = "block"; 
	}
	else
	{
		username_validation.style.display = "none";
		username_validation.parentNode.style.backgroundColor = "transparent";
	}
        
        if(password1.value.length < 8)
	{
		valid =0;
		password_validation1.innerHTML="Passwordi duhet te kete se paku 8 shkronja";
		password_validation1.style.display = "block"; 	
	}
	else
	{
		password_validation1.style.display = "none";
		password_validation1.parentNode.style.backgroundColor = "transparent";
	}
        if(password2.value.length < 8)
	{
		valid =0;
		password_validation2.innerHTML="Passwordi duhet te kete se paku 8 shkronja";
		password_validation2.style.display = "block"; 	
	}
	else
	{
		password_validation2.style.display = "none";
		password_validation2.parentNode.style.backgroundColor = "transparent";
	}
        if(password1.value !== password2.value)
	{
		valid =0;
		password_validation1.innerHTML="Passwordet nuk jane te njejta";
		password_validation1.style.display = "block"; 	
                password_validation2.innerHTML="Passwordet nuk jane te njejta";
		password_validation2.style.display = "block"; 	
	}
	else
	{
		password_validation1.style.display = "none";
		password_validation1.parentNode.style.backgroundColor = "transparent";
                password_validation2.style.display = "none";
		password_validation2.parentNode.style.backgroundColor = "transparent";
	}
         
        if(!filter2.test(email.value) || email.value.length < 5)
	{
		valid =0;
		email_validation.innerHTML="E-mail duhet te shkruhet ne formen e duhur";
		email_validation.style.display = "block"; 	
	}
	else
	{
		email_validation.style.display = "none";
		email_validation.parentNode.style.backgroundColor = "transparent";
	}
        
        
        

   
	
	if(valid == 0)
            
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
		username_validation.style.display = "block"; 	
		
	}
	else
	{
		username_validation.style.display = "none";
		username_validation.parentNode.style.backgroundColor = "transparent";
	}
        
        if(date.value.length === 0 )
	{
		valid =0;
		date_validation.innerHTML="Duhet te zgjedhni daten";
		date_validation.style.display = "block"; 	
	}
	else
	{
		date_validation.style.display = "none";
		date_validation.parentNode.style.backgroundColor = "transparent";
	}
        
	
	if(valid === 0)
            
		return false;
}