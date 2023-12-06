function validateForm() {
    var name = document.forms["registrationForm"]["name"].value;
    var gender = document.forms["registrationForm"]["gender"].value;
    var errors = "";
    
    if (name == "") {
        errors += "You must enter a name.\n";
    }
    if (gender == "") {
        errors += "You must choose a gender.\n";
    }
    
    if (errors != "") {
        alert("Please correct the following errors:\n" + errors);
        return false;
    }
    return true;
}