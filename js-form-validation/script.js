function validateForm(){
    let x = document.forms["form1"]["fname"].value;
    let y = document.forms["form1"]["email"].value;
    console.log(x);
    console.log(y);
    if (x == ""){
        alert("name cannot be empty");
        return false;
    }
   function validateEmail(email){
      var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      return emailPattern.test(email);
   }

   if(!validateEmail(y)){
       alert("Email is invalid");
      return false;
   }
}