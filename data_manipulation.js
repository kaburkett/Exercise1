$(document).ready(function(){
//$("#new_entry").click(function(event){console.log($(":input").serializeArray()); event.preventDefault();});

$("#new_entry").click(function(){		
	$.post("db_insert.php", $(":input").serializeArray(), function(tabledata){$("#result").html(tabledata);});
});

//below code prevents redirection to php file
//$("GetData").submit(function(){
//	return false;
//});

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