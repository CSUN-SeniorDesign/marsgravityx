
function validateform(){  
var firstname=document.Settings.firstname.value;  
var lastname=document.Settings.lastname.value;
var username=document.Settings.username.value;  
var phonenumber=document.Settings.phonenumber.value;
var email=document.Settings.email.value;
/* if (firstname==null && lastname==null && username==null && password==null){
alert("Form cannot be blank.")
return false;
} */

 if (firstname==null || firstname==""){  
  alert("Enter your exisiting first name.");  
  return false;  
  }else if (lastname==null ||lastname==""){  
  alert("Enter your exisiting last name.");  
  return false; 
  }else if (username==null ||username==""){  
  alert("Username cannot be blank.");  
  return false; 
  }else if (phonenumber==null ||phonenumber==""){  
  alert("Phone Number cannot be blank");  
  return false; 
}else if(email==null || email==""){  
  alert("Enter current Email.");  
  return false;  
  }  
}  
