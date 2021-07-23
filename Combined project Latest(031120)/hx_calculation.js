function calculateChicken(){
	var chickenInput = document.getElementById("chickenInput").value;
	document.getElementById("chickenCost").value = "$"+ chickenInput * 3.20;
}


function calculateduckSmall(){//user type input first then click radio
	var duckInput = document.getElementById("duckSmall").value;
	

	document.getElementById("duckSmallCost").value = "$"+ duckInput * 3.00;
}
function calculateduckLarge(){//user type input first then click radio
	var duckInput = document.getElementById("duckLarge").value;
	

	document.getElementById("duckLargeCost").value = "$"+ duckInput * 5.00;
}

// function cafeTypeFirst(){//user click radio first then type if statement

// 	if(document.getElementById('cafeSingle').checked){
// 		var cafeInput = document.getElementById("cafeInput").value;
	

// 	document.getElementById("cafeCost").value = "$"+ cafeInput * 2.00;

// 	}if(document.getElementById('cafeDdouble').checked){

// 	var cafeInput = document.getElementById("cafeInput").value;
	

// 	document.getElementById("cafeCost").value = "$"+ cafeInput * 3.00;

// 	}

// function duckTypeFirst(){//user click radio first then type switch statement

// 	switch(true){
// 		case document.getElementById('duckSmall').checked:
// 			var cafeInput = document.getElementById("duckInput").value;
		

// 			document.getElementById("duckCost").value = "$"+ cafeInput * 3.00;
// 			break;

// 		case document.getElementById('duckLarge').checked:

// 			var cafeInput = document.getElementById("duckInput").value;
	

// 			document.getElementById("duckCost").value = "$"+ cafeInput * 5.00;

// 			break;
// 	}
// }

function calculatefriedSmall(){//user type input first then click radio
	var friedInput = document.getElementById("friedSmall").value;
	

	document.getElementById("friedSmallCost").value ="$"+ friedInput * 3.50;
}
function calculatefriedLarge(){//user type input first then click radio
	var friedInput = document.getElementById("friedLarge").value;
	

	document.getElementById("friedLargeCost").value = "$"+ friedInput * 5.50;
}

// function friedTypeFirst(){//user click radio first then type switch statement

// 	switch(true){
// 		case document.getElementById('friedSmall').checked:
// 			var friedInput = document.getElementById("friedInput").value;
	

// 	document.getElementById("friedCost").value = "$"+ friedInput * 3.50;
// 			break;

// 		case document.getElementById('friedLarge').checked:

// 			var friedInput = document.getElementById("friedInput").value;
	

// 	document.getElementById("friedCost").value = "$"+ friedInput * 5.50;

// 			break;
// 	}
// }

function totalPrice(){

	var chickenTotal = document.getElementById("chickenCost").value;
	var duckSmallTotal = document.getElementById("duckSmallCost").value;
	var duckLargeTotal=document.getElementById("duckLargeCost").value;
	var friedSmallTotal = document.getElementById("friedSmallCost").value;
	var friedLargeTotal = document.getElementById("friedLargeCost").value;

	chickenTotal = chickenTotal.replace("$",'');
	duckSmallTotal = duckSmallTotal.replace("$",'');
	duckLargeTotal = duckLargeTotal.replace("$",'');
	friedSmallTotal = friedSmallTotal.replace("$",'');
	friedLargeTotal = friedLargeTotal.replace("$",'');
	var x = +chickenTotal+ +duckSmallTotal+ +duckLargeTotal + +friedSmallTotal+ +friedLargeTotal;//single + is string double + + is addition operator


	document.getElementById("totalCost").value =  "$"  +x;
}

