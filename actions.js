function validateLogin() {
    
    var valid = true;
    
    //Validation for email.
    var emailRegex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    if (document.getElementById('email').value) {
        if (!emailRegex.test(document.getElementById('email').value)) {
            valid = false;
            document.getElementById('emailError').innerHTML = "Email must be in valid form.";
            document.getElementById('emailError').style.display = "block";
        }
        else {
            document.getElementById('emailError').style.display = "none";
        }
    }
    else {
        valid = false;
        document.getElementById('emailError').innerHTML = "User must enter email.";
        document.getElementById('emailError').style.display = "block";
    }

    //Validation for password.
    if (!document.getElementById('password').value) {
        valid = false;
        document.getElementById('passwordError').innerHTML = "User must enter password.";
        document.getElementById('passwordError').style.display = "block";
    }
    else {
        document.getElementById('passwordError').style.display = "none";
    }

    //Final return.
    return valid;
}

function validateRegister() {
    var registerValid = true;
    
    //Validation for name.
    var nameRegex = /^[A-Z]{1}[a-z]*$/;
    
    //Validation for first name.
    if (document.getElementById('firstName').value) {
        if (!nameRegex.test(document.getElementById('firstName').value)) {
            document.getElementById('firstNameError').innerHTML = "Name should start with capital letter.";
            document.getElementById('firstNameError').style.display = "block";
            registerValid = false;
        }
        else {
            document.getElementById('firstNameError').style.display = "none";
        }
    }
    else {
        document.getElementById('firstNameError').innerHTML = "First name is required.";
        document.getElementById('firstNameError').style.display = "block";
        registerValid = false;
    }

    //Validation for last name.
    if (document.getElementById('lastName').value) {
        if (!nameRegex.test(document.getElementById('lastName').value)) {
            document.getElementById('lastNameError').innerHTML = "Name should start with capital letter.";
            document.getElementById('lastNameError').style.display = "block";
            registerValid = false;
        }
        else {
            document.getElementById('lastNameError').style.display = "none";
        }
    }
    else {
        document.getElementById('lastNameError').innerHTML = "Last name is required.";
        document.getElementById('lastNameError').style.display = "block";
        registerValid = false;
    }   
    
    //Validation for street.
    if (!document.getElementById('street').value) {
        document.getElementById('streetError').innerHTML = "Street is required.";
        document.getElementById('streetError').style.display = "block";
        registerValid = false;
    }   

    //Validation for street.
    if (!document.getElementById('suburb').value) {
        document.getElementById('suburbError').innerHTML = "Suburb is required.";
        document.getElementById('suburbError').style.display = "block";
        registerValid = false;
    }   

    //Validation for last name.
    if (document.getElementById('lastName').value) {
        if (!nameRegex.test(document.getElementById('lastName').value)) {
            document.getElementById('lastNameError').innerHTML = "Name should start with capital letter.";
            document.getElementById('lastNameError').style.display = "block";
            registerValid = false;
        }
        else {
            document.getElementById('lastNameError').style.display = "none";
        }
    }
    else {
        document.getElementById('lastNameError').innerHTML = "Last name is required.";
        document.getElementById('lastNameError').style.display = "block";
        registerValid = false;
    }   

    //Validation for email.
    var emailRegex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    if (document.getElementById('email').value) {
        if (!emailRegex.test(document.getElementById('email').value)) {
            registerValid = false;
            document.getElementById('emailError').innerHTML = "Email must be in valid form.";
            document.getElementById('emailError').style.display = "block";
        }
        else {
            document.getElementById('emailError').style.display = "none";
        }
    }
    else {
        registerValid = false;
        document.getElementById('emailError').innerHTML = "User must enter email.";
        document.getElementById('emailError').style.display = "block";
    }

    //Validation for postcode.
    var postcodeRegex = /^\d{4}$/;
    if (document.getElementById('postcode').value) {
        if (!postcodeRegex.test(document.getElementById('postcode').value)) {
            document.getElementById('postcodeError').innerHTML = "Postcode must be 4 digits long.";
            document.getElementById('postcodeError').style.display = "block";
            registerValid = false;

        }
        else {
            document.getElementById('postcodeError').style.display = "none";
        }
    }
    else {
        document.getElementById('postcodeError').innerHTML = "Postcode is required!";
        document.getElementById('postcodeError').style.display = "block";
        registerValid = false;
    }

    //Validation for postcode.
    var stateRegex = /^\w{3}$/;
    if (document.getElementById('state').value) {
        if (!stateRegex.test(document.getElementById('state').value)) {
            document.getElementById('stateError').innerHTML = "State code must 3 characters long.";
            document.getElementById('stateError').style.display = "block";
            registerValid = false;

        }
        else {
            document.getElementById('stateError').style.display = "none";
        }
    }
    else {
        document.getElementById('stateError').innerHTML = "State is required!";
        document.getElementById('stateError').style.display = "block";
        registerValid = false;
    }

    //Validation for password.
    var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8}$/;
    if (document.getElementById('password').value) {
        if (!passwordRegex.test(document.getElementById('password').value)) {
            document.getElementById('passwordError').innerHTML = "Password must be 8 characters long, and must contain atleast 1 number.";
            document.getElementById('passwordError').style.display = "block";
            registerValid = false;

        }
        else {
            document.getElementById('passwordError').style.display = "none";
        }
    }
    else {
        document.getElementById('passwordError').innerHTML = "Password is required!";
        document.getElementById('passwordError').style.display = "block";
        registerValid = false;
    }

    return registerValid;
}

function validateCheckout() {
    
    var checkoutValid = true;

    //Validation for card holder name.
    var cardNameRegex = /^[a-zA-z]*'*[a-zA-z]*$/;
    if (!cardNameRegex.test(document.getElementById('cardName').value)) {
        document.getElementById('cardNameError').innerHTML = "Must be alphabetical characters and single inverted commas only!";
        document.getElementById('cardNameError').style.display = "block";
        checkoutValid = false;
    }
    else {
        document.getElementById('cardNameError').style.display = "none";
    }

    //Validation for credit card number.
    var cardNumberRegex = /^\d{16}$/;
    if (!cardNumberRegex.test(document.getElementById('cardNumber').value)) {
        document.getElementById('cardNumberError').innerHTML = "Credit card number must be 16 digits long!";
        document.getElementById('cardNumberError').style.display = "block";
        checkoutValid = false;
    }
    else {
        document.getElementById('cardNumberError').style.display = "none";
    }

    //Validation for expiry date.
    var expiryDate = document.getElementById("expiryDate").value;
    if (expiryDate < Date.now()) {
        checkoutValid = false;
        document.getElementById('expiryDateError').innerHTML = "Credit card already expired!";
        document.getElementById('expiryDateError').style.display = "block";
    }
    else {
        document.getElementById('expiryDateError').style.display = "none";
    }
    

    //Validation for CSV.
    var csvRegex = /^\d{3}$/;
    if (!csvRegex.test(document.getElementById('csv').value)) {
        document.getElementById('csvError').innerHTML = "CSV must be 3 digits long!";
        document.getElementById('csvError').style.display = "block";
        checkoutValid = false;

    }
    else {
        document.getElementById('csvError').style.display = "none";
    }

    return checkoutValid;
}