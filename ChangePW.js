function validateform(){  
var username=document.ChangePW.username.value;  
var password=document.ChangePW.password.value;
var newpassword=document.ChangePW.newpassword.value;  
var confirmnewpassword=document.ChangePW.confirmnewpassword.value;
/* if (firstname==null && lastname==null && username==null && password==null){
alert("Form cannot be blank.")
return false;
} */
 if (username==null || username==""){  
  alert("Must enter a user name.");  
  return false;  
  }else if (password==null ||password==""){  
  alert("Must enter a password");  
  return false; 
  }else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
  else if (newpassword==null || newpassword==""){  
  alert("Enter a new password");  
  return false; 
}
else if(newpassword.length<6){  
  alert("New password must be at least 6 characters long.");  
  return false;  
  }  
  else if (confirmnewpassword==null || confirmnewpassword==""){
    alert("Please confirm new password");
    return false;
  }
}  
