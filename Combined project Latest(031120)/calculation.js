
function calJava(){
	var javaInput = document.getElementById("javaInput").value;            // Get input from HTML
		
	document.getElementById("javaCost").value = "$"+ javaInput * 2.00;     // Return output to HTML
}







function calcafeSingle(){// Single option  
	var cafeInput = document.getElementById("cafeInput").value;            // Get input from HTML
	
	document.getElementById("cafeCost").value = "$"+ cafeInput * 2.00;     // Return output to HTML
}
function calcafeDouble(){ // Double option
	var cafeInput = document.getElementById("cafeInput").value;            // Get input from HTML
	
	document.getElementById("cafeCost").value = "$"+ cafeInput * 3.00;     // Return output to HTML
}


function cafeSelection(){// To check which radio button selected

	switch(true){
		case document.getElementById('cafeSingle').checked:
			var cafeInput = document.getElementById("cafeInput").value;
		
			document.getElementById("cafeCost").value = "$"+ cafeInput * 2.00;
			break;


		case document.getElementById('cafeDouble').checked:
            var cafeInput = document.getElementById("cafeInput").value;
	
			document.getElementById("cafeCost").value = "$"+ cafeInput * 3.00;
            break;
	}
}










function calicedSingle(){// Single option
	var icedInput = document.getElementById("icedInput").value;            // Get input from HTML
	
	document.getElementById("icedCost").value ="$"+ icedInput * 4.75;      // Return output to HTML
}
function calicedDouble(){// Double option
	var icedInput = document.getElementById("icedInput").value;            // Get input from HTML
	
	document.getElementById("icedCost").value = "$"+ icedInput * 5.75;     // Return output to HTML
}


function icedSelection(){// To check which radio button selected

	switch(true){
		case document.getElementById('icedSingle').checked:
			var icedInput = document.getElementById("icedInput").value;
	
	    document.getElementById("icedCost").value = "$"+ icedInput * 4.75;
			break;



		case document.getElementById('icedDouble').checked:
			var icedInput = document.getElementById("icedInput").value;
	
	    document.getElementById("icedCost").value = "$"+ icedInput * 5.75;
			break;
	}
}






function total(){//Get total value

	var javaTotal = document.getElementById("javaCost").value;
	var cafeTotal = document.getElementById("cafeCost").value;
	var icedTotal = document.getElementById("icedCost").value;

	javaTotal = javaTotal.replace("$",'');
	cafeTotal = cafeTotal.replace("$",'');
	icedTotal = icedTotal.replace("$",'');
	var y = +javaTotal + +cafeTotal + +icedTotal;


	document.getElementById("totalCost").value =  "$"  + y ;
}