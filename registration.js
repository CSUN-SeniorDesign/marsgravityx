
function validateform(){  
var firstname=document.registration.firstname.value;  
var lastname=document.registration.lastname.value;
var username=document.registration.username.value;  
var password=document.registration.password.value;
var phonenumber=document.registration.phonenumber.value;
var email=document.registration.email.value;
/* if (firstname==null && lastname==null && username==null && password==null){
alert("Form cannot be blank.")
return false;
} */

 if (firstname==null || firstname==""){  
  alert("Must enter a first name.");  
  return false;  
  }else if (lastname==null ||lastname==""){  
  alert("Must enter a last name.");  
  return false; 
  }else if (username==null ||username==""){  
  alert("Username cannot be blank");  
  return false; 
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }else if (phonenumber==null ||phonenumber==""){  
  alert("Phone Number cannot be blank.");  
  return false; 
  }else if (email==null ||email==""){  
  alert("Email cannot be blank");  
  return false; 
  }  
}  
