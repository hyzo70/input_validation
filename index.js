function isvalid(){
    var user = document.form.user.value;
    var pass = document.form.pass.value;
    if(user.length=="" && pass.length==""){
        alert(" Email and password field is empty!");
        return false;
    }
    else if(user.length==""){
        alert(" Email field is empty!");
        return false;
    }
    else if(pass.length==""){
        alert(" Password field is empty!");
        return false;
    }
    
    var regx = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/i;
  if(regx.test(user)){
      console.log("Input is valid");
  }
  else{
      alert("Invalid email format. Please check the following:\n" +
      "* A valid email should only contain letters, numbers, underscores, hyphens, and periods.\n" +
      "* The email should be followed by an '@' symbol.\n" +
      "* The domain name should include at least one dot separating parts (e.g., gmail.com).\n" +
      "* The top-level domain (like .com, .org) should be at least 2 characters long.");
  }

  var regx = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/i;
  if(regx.test(pass)){
      console.log("Input is valid");
  }
  else{
      alert("Invalid Password input, please try again!");
  }
}