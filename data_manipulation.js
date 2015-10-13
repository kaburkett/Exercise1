$(document).ready(function(){
//$("#new_entry").click(function(event){console.log($(":input").serializeArray()); event.preventDefault();});

$("#new_entry").click(function(){
	var values = new Array();
	var index;
	// Get the parameters as an array
	values = $(":input").serializeArray();
	// Find and replace `content` if there
	for (index = 0; index < values.length; ++index) 
	{
	    if (values[index].name == "employee_name") 
	    {
	    	var uncapname = values[index].value;
	        values[index].value = uncapname.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
	        //break;
	        
	        if (values[index].value == null || values[index].value == "")
	        {var enflag = 0;}
	        else {var enflag = 1;}
	    }
	    if (values[index].name == "employee_salary") 
	    {
	    	if (values[index].value == null || values[index].value == "")
	        {var esflag = 0;}
	        else {var esflag = 1;}
	    }
	}	
	// Convert to URL-encoded string
	values = jQuery.param(values);
	
	if (enflag ==1 && esflag ==1)
	{
		$.post("db_insert.php", values, function(tabledata){$("#result").html(tabledata);});
	}
	else
	{
		alert("Sorry, looks like we are missing some input");
	}
	//$.post("db_insert.php", $(":input").serializeArray(), function(tabledata){$("#result").html(tabledata);});
	});
});
function toTitleCase(str) //capitalizes the first letter of each name and uncapitalizes the rest
		{
		    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
		}
	
function ProcessThisIsh(){
	var e_name = document.forms["GetData"]["employee_name"].value;
	e_name = toTitleCase(e_name);
	var e_salr = document.forms["GetData"]["employee_salary"].value;
	if (e_name == null || e_name == "" || e_salr == null || e_salr == "")
	{
		alert("Please enter both an employee name and their yearly salary");
		return false;
	}
	else 
	{
		var e_bon = e_salr*.1;
		alert("Archiving: " + e_name + " should receive a Christmas bonus of " + e_bon);
		$.ajax({
		    data: 'name=' + e_name,
		    url: 'db_interact.php',
		    method: 'POST',
		    success: function(msg) {
		        alert(msg);
		    }
		});
	}			
}