var modal = document.getElementById("modal"); 
var btn = document.getElementById("open-modal"); 
var clsbtn = document.getElementById("close-modal"); 
var hours = []; 
btn.onclick= function(){
	modal.style.display= "block"; 
}

clsbtn.onclick = function() {
	modal.style.display = "none"; 
}

 function addHours() {
	var hour = document.getElementById("hours").value;
	if(hour != -1){
	hours.push(hour);
	}
	document.getElementById("hours").value = ""; 
	if(hour == -1){
		
		showInfo(); 
	}
}

function showInfo(){
	if(hours.length>0){
	var table = ""; 
	var totalPay = 0; 
	table += "<tr>";
			table+= "<th>" + "Employee Number" + "</th>"; 
			table+= "<th>" + "Employee Hours" + "</th>"; 
			table+= "<th>" + "Employee Pay" + "</th>"; 
		
		table += "</tr>";  
	for (var r = 0; r<hours.length; r++){
		var employeenum = r + 1; 
		if(hours[r]> 40){
		var employeeInitialPay = 15* 40; 
		var overTime = 15*1.5; 
		var overTimeHours = hours[r] - 40; 
		var overTimePay = overTime * overTimeHours; 
		var employeePay = overTimePay + employeeInitialPay;
		}else{
			var employeePay = hours[r] * 15; 
		}
		totalPay += employeePay; 
		table += "<tr>";
			table+= "<td>" + "Employee " + employeenum  + "</td>"; 
			table+= "<td>" + hours[r] + "</td>"; 
			table+= "<td>" + employeePay + "</td>"; 
		
		table += "</tr>";  
	}
	document.write("<table>" + table + "</table>"); 
	document.write("Total pay of all employees: " + totalPay); 
	document.write("<br>"); 
	document.write("<a href=\"part_a.html\"> Back </a>");
	}
	else{
		alert("you have not entered any Employee hours"); 
	}
}
	




	




