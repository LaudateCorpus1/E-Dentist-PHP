
function validateForm()
{
	
	var valid = 1;
	var name = document.getElementById('name');
	var name_validation = document.getElementById("name_validation");
	var surname = document.getElementById('surname');
	var surname_validation = document.getElementById("surname_validation");
        var username = document.getElementById('username');
	var username_validation = document.getElementById("username_validation");
        var date = document.getElementById('date');
	var date_validation = document.getElementById("date_validation");
        var time = document.getElementById('time');
	var time_validation = document.getElementById("time_validation");
        var filter= /[0-9]|\./;
        var filter2= /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/;
        var filter3 =/^([0-1]?[0-9]|2[0-3]):[0-0][0-0]:[0-0][0-0]$/;
		
	
	if(filter.test(name.value))
	{
		valid =0;
		name_validation.innerHTML="Lejohen vetem shkronja";
		name_validation.style.display = "block"; 	
		name_validation.parentNode.style.backgroundColor = "FFDFDF";
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
		surname_validation.parentNode.style.backgroundColor = "FFDFDF";
	}
	else
	{
		surname_validation.style.display = "none";
		surname_validation.parentNode.style.backgroundColor = "transparent";
	}
	if(username.value ==="")
	{
		valid =0;
		username_validation.innerHTML="Ju lutem shkruani Username";
		username_validation.style.display = "block"; 	
		username_validation.parentNode.style.backgroundColor = "FFDFDF";
	}
	else
	{
		username_validation.style.display = "none";
		username_validation.parentNode.style.backgroundColor = "transparent";
	}
        if(date.value === "" || !filter2.test(date.value))
	{
		valid =0;
		date_validation.innerHTML="Shkruajeni daten sipas formatit te duhur";
		date_validation.style.display = "block"; 	
		date_validation.parentNode.style.backgroundColor = "FFDFDF";
	}
	else
	{
		date_validation.style.display = "none";
		date_validation.parentNode.style.backgroundColor = "transparent";
	}
        if(time.value === "" || !filter3.test(time.value))
	{
		valid =0;
		time_validation.innerHTML="Shkruajeni daten sipas formatit te duhur";
		time_validation.style.display = "block"; 	
		time_validation.parentNode.style.backgroundColor = "FFDFDF";
	}
	else
	{
		time_validation.style.display = "none";
		time_validation.parentNode.style.backgroundColor = "transparent";
	}
	

	
	if(valid == 0)
            
		return false;
}