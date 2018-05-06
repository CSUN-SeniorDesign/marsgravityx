
function validateform(){  
var username=document.login.username.value;  
var password=document.login.password.value;
/* if (firstname==null && lastname==null && username==null && password==null){
alert("Form cannot be blank.")
return false;
} */

 if (username==null ||username==""){  
  alert("You must enter a username");  
  return false; 
}else if(password==null || password==""){  
  alert("You must enter a password");  
  return false;  
  }  
}  
