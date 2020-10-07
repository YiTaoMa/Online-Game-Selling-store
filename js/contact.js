//this is the main function 
function checkForm() 
{
  //collecting user inputs 
  firstname = document.getElementById("firstname").value;
  lastname = document.getElementById("lastname").value;
  age = document.getElementById("age").value;
  //calls another function IsNumeric 
  ageNumeric = IsNumeric(age);
  address = document.getElementById("address").value;
  phone = document.getElementById("phone").value;
   //calls another function IsNumeric 
  phoneNumeric = IsNumeric(phone);
  email = document.getElementById("email").value;
   //calls another function checkEmail
  emailResult = checkEmail(email);

	//checking for empty inputs and displaying error 
    if (firstname == "") 
    { 
	hideAllErrors();
	document.getElementById("firstnameError"). style.display = "inline";
	document.getElementById("firstname").select();
	document.getElementById("firstname").focus();
	return false;
    }

    else if (lastname == "") 
    {   
	hideAllErrors();
	document.getElementById("lastnameError"). style.display = "inline";
	document.getElementById("lastname").select();
	document.getElementById("lastname").focus();
      return false;
    }
 
    else if (age == "") 
    {   
	hideAllErrors();
	document.getElementById("ageError"). style.display = "inline";
	document.getElementById("age").select();
	document.getElementById("age").focus();
	return false;
    }
    
    else if (ageNumeric == false) 
    {   
	hideAllErrors();
	document.getElementById("ageError"). style.display = "inline";
	document.getElementById("age").select();
	document.getElementById("age").focus();
	return false;
    }
    
	// checks age must be 16 years and above 
    else if (age<16)
    {
	hideAllErrors();
	document.getElementById("ageError"). style.display = "inline";
	document.getElementById("age").select();
	document.getElementById("age").focus();
	return false;
    }
   

    else if (address == "") 
    {   
	hideAllErrors();
	document.getElementById("addressError"). style.display = "inline";
	document.getElementById("address").select();
	document.getElementById("address").focus();
	return false;
    }

    else if (phone == "") 
    {   
	hideAllErrors();
	document.getElementById("phoneError"). style.display = "inline";
	document.getElementById("phone").select();
	document.getElementById("phone").focus();
	return false;
    }
    
    else if (phoneNumeric == false) 
    {   
	hideAllErrors();
	document.getElementById("phoneError"). style.display = "inline";
	document.getElementById("phone").select();
	document.getElementById("phone").focus();
	return false;
    }
 
 
    else if (email == "") 
   {
	hideAllErrors();
	document.getElementById("emailError"). style.display = "inline";
	document.getElementById("email").select();
	document.getElementById("email").focus();
	return false;
    }
 
    else if (emailResult == false)
    {
        hideAllErrors();
        document.getElementById("emailError"). style.display = "inline";
        document.getElementById("email").select();
        document.getElementById("email").focus();
        return false;
    }
 
    
 
// this is to tell user all validation is now complete
alert("First Name:" + firstname + "\n Lastname:" + lastname + "\n Age:" + age + "\n Address:" + address + "\n Phone Number:" + phone + "\n Email:" + email );
 
  return true;

}


//checks via reg ex if age and phone numbers are numbers
function IsNumeric(numstr)
{
    mystring = numstr;
    if (mystring.match(/^\d+$/ ) ) {
    
	    return true;
    }else{
	    return false;
    }
}

//checks if email is in proper email format
function checkEmail(inputvalue){	
    var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    if(pattern.test(inputvalue)) {         
		return true;
    }else{   
		return false;
    }
    
}

// hide error upon successful validation
function hideAllErrors()
{  
  document.getElementById("firstnameError").style.display = "none";
  document.getElementById("lastnameError").style.display = "none";
  document.getElementById("ageError").style.display = "none";
  document.getElementById("addressError").style.display = "none";
  document.getElementById("phoneError").style.display = "none";
  document.getElementById("emailError").style.display = "none";  
 }