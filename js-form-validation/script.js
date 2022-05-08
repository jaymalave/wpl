function validateForm(){
    let x = document.forms["form1"]["fname"].value;
    console.log(x);
    if (x == ""){
        alert("name cannot be empty");
        return false;
    }
}