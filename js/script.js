function validateUserForm()
{
    	
	var valid = 1;
	var name = document.getElementById('name');
	var name_validation = document.getElementById("name_validation");
	var surname = document.getElementById('surname');
	var surname_validation = document.getElementById("surname_validation");
        var username = document.getElementById('username');
	var username_validation = document.getElementById("username_validation");
        var password = document.getElementById('password');
	var password_validation = document.getElementById("password_validation");
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
        
        if(password.value.length < 8)
	{
		valid =0;
		password_validation.innerHTML="Passwordi duhet te kete se paku 8 shkronja";
		password_validation.style.display = "block"; 	
	}
	else
	{
		password_validation.style.display = "none";
		password_validation.parentNode.style.backgroundColor = "transparent";
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
	var name = document.getElementById('name');
	var name_validation = document.getElementById("name_validation");
	var surname = document.getElementById('surname');
	var surname_validation = document.getElementById("surname_validation");
        var username = document.getElementById('username');
	var username_validation = document.getElementById("username_validation");
        var date = document.getElementById("datepicker");
        var date_validation = document.getElementById("date_validation");
        var filter= /[0-9]|\./;
        
		
	
	if(filter.test(name.value))
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
	if(filter.test(surname.value))
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
	if(username.value.length < 3 )
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