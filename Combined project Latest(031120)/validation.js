

  function chkName(event) {

// Get the target node of the event

  var myName = event.currentTarget;

// Test the format of the input name 
//  Allow the spaces after the commas to be optional
//  Allow the period after the initial to be optional

  var pos = myName.value.search(/[a-zA-Z]+[ a-zA-Z]*$/);

  if (pos != 0) {
    alert(" Please type in your name with only alphabet and white spaces!");
    myName.focus();
    myName.select();
	return false;
  } 
}

 function chkEmail(event) {

// Get the target node of the event

  var myEmail = event.currentTarget;

// Test the format of the input name 
//  Allow the spaces after the commas to be optional
//  Allow the period after the initial to be optional

  var pos = myEmail.value.search(/^[\w]+[\w\.\-]*\@[\w]+(\.[\w]+)?(\.[\w]+)?\.([\w]{2}|[\w]{3})$/);//[a-zA-z]+[a-zA-z.-]*\@[a-zA-Z]+(\.[a-zA-Z]+)?(\.[a-zA-Z]+)?\.([a-zA-Z]{2}|[a-zA-Z]{3})$ is alternate
  var pos1 = myEmail.value.search(/^[\w]+[\w\.\-]*\@/);//check for items before @
  var pos2 = myEmail.value.search(/.*\@[\w]+(\.[\w]+)?(\.[\w]+)?\.([\w]{2}|[\w]{3})$/);//check for items after @

  if(pos1!= 0 ){
  		alert(" Please check that username is alphanumeric and may contain hypen (-) and dot(.) followed by @");
    	myEmail.focus();
    	myEmail.select();
    	return false;

   }

  if(pos2!= 0 ){
  		alert(" Please check that domain name contains 2 - 4 extensions separated by . and the with a last extension containing 2-3 characters");
    	myEmail.focus();
    	myEmail.select();
    	return false;

   }
  if(pos!= 0 ){
  		alert(" Please check that username is alphanumeric may contain hyphen (-) and period(.) symbols followed by @ with domain name. Domain name contains 2 - 4 extensions separated by . and the with a last extension containing 2-3 characters");
    	myEmail.focus();
    	myEmail.select();
    	return false;

   }

 
}
   