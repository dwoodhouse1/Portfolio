// Form Validation

const firstNameEl = document.querySelector("#contact-form__first-name");
const lastNameEl = document.querySelector("#contact-form__last-name");
const emailEl = document.querySelector("#contact-form__email");
const phoneEl = document.querySelector("#contact-form__phone");
const messageEl = document.querySelector("#contact-form__message");

const form = document.querySelector("#contact-form");

const isRequired = value => value === "" ? false : true; // function returns false if value string is empty, otherwise returns true (if statement shorthand)

const isEmailValid = (email) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}

const isPhoneValid = (number) => {
    //UK Regex: 
    // Matches     07123456789  | +447123456789
    
    let regexUK = /^((\+44)|(0)) ?\d{4} ?\d{6}$/;

    return regexUK.test(number);
}

const showError = (input, message) => {
    // getting form-field element
    const formField = input.parentElement;

    //adding error class
    formField.classList.remove("success");
    formField.classList.add("error");

    //displays the error message in the small tag
    const error = formField.querySelector("small");
    error.textContent = message;
}

const showSuccess = (input) => {
    //get the form-field element
    const formField = input.parentElement;

    //remove the success class
    formField.classList.remove("error");
    formField.classList.add("success");

    //hide the error message
    const error = formField.querySelector("small");
    error.textContent = "";
}

const checkFirstName = () => {
    let valid = false;

    const firstName = firstNameEl.value;

    if (!isRequired(firstName))
    {
        showError(firstNameEl, "Please enter your first name.")
    }
    else
    {
        showSuccess(firstNameEl);
        valid = true;
    }

    return valid;
}

const checkLastName = () => {
    let valid = false;

    const lastName = lastNameEl.value;

    if (!isRequired(lastName))
    {
        showError(lastNameEl, "Please enter your last name.")
    }
    else
    {
        showSuccess(lastNameEl);
        valid = true;
    }

    return valid;
}

const checkEmail = () => {
    let valid = false;

    const email = emailEl.value.trim();

    if(!isRequired(email))
    {
        showError(emailEl, "Please enter an Email Address.");
    }
    else if (!isEmailValid(email))
    {
        showError(emailEl, "Email format invalid");
    }
    else
    {
        showSuccess(emailEl);
        valid = true;
    }

    return valid;
}

const checkPhoneNumber = () => {
    let valid = false;

    const phoneNumber = phoneEl.value.trim();
    console.log(phoneNumber);

    if(phoneNumber == "")
    {
        showSuccess(phoneEl);
    }
    else if (!isPhoneValid(phoneNumber))
    {
        showError(phoneEl, "Please enter a valid phone number (or none)");
    }
    else
    {
        showSuccess(phoneEl);
        valid = true;
    }

    return valid;
}




form.addEventListener("submit", function (e){
    e.preventDefault();

    let isFirstNameValid = checkFirstName(),
        isLastNameValid = checkLastName(),
        isEmailValid = checkEmail(),
        isPhoneValid = checkPhoneNumber();

    let isFormValid = isFirstNameValid
                    && isLastNameValid
                    && isEmailValid
                    && isPhoneValid;

    if (isFormValid)
    {
       //PHP code will go here. 
    }
})


// Instant Feedback on inputs

form.addEventListener("input", function (e){
    switch (e.target.id)
    {
        case "contact-form__first-name":
            checkFirstName();
            break;

        case "contact-form__last-name":
            checkLastName();
            break;

        case "contact-form__email":
            checkEmail();
            break;

        case "contact-form__phone":
            checkPhoneNumber();
            break;
    }
})




































// let phoneNumber = document.forms["contactForm"]["phone-number"].value;
// console.log(phoneNumber)
// function validatePhoneNumberUK(input)
// {
//     // UK Regex: 
//     // Matches     07123456789  | +447123456789
//     let regexUK = /^((\+44)|(0)) ?\d{4} ?\d{6}$/;
//     return regexUK.test(input);
// }

// function validatePhoneNumberInternational(input)
// {
//     // Conforms to the E.164 Universal Number Format
//     let regexINT = /^\+[1-9]\d{1,14}$/;
//     console.log(regexINT.test(input));
//     return regexINT.test(input);
    
// }

// function validateEmail(input)
// {
//     let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     return regex.test(input);
// }

// function validateForm()
// {
//     const firstNameTF = $('#contact-form__first-name');
//     const lastNameTF = $('#contact-form__last-name');
//     const emailTF = $('#contact-form__email');
//     const phoneNumberTF = $('#contact-form__phone');
    

//     let requiredFirstName = document.forms["contactForm"]["first-name"].value;
//     let requiredLastName = document.forms["contactForm"]["last-name"].value;
//     let requiredEmail = document.forms["contactForm"]["email"].value;
//     let phoneNumber = document.forms["contactForm"]["phone-number"].value;
//     let message = document.forms["contactForm"]["message"].value;
    
    
//     if (!requiredFirstName == "")
//     {
//         alert("hello");
//         firstNameTF.css('border', '2px solid green');
//     }
//     else
//     {
//         firstNameTF.attr('placeholder', 'Enter first name here!');
//         firstNameTF.css('border', '2px solid red');
//     }

//     if (!requiredLastName == "")
//     {
//         lastNameTF.css('border', '2px solid green');
//     }
//     else
//     {
//         lastNameTF.attr('placeholder', 'Enter last name here!');
//         lastNameTF.css('border', '2px solid red');
//     }

//     if (!requiredEmail == "" && validateEmail(requiredEmail))
//     {
//         alert("email good");
//         emailTF.css('border', '2px solid green');
//     }
//     else
//     {
//         emailTF.attr('placeholder', 'Enter email address here!');
//         emailTF.css('border', '2px solid red');
//     }
   

//     if (!validateEmail(requiredEmail))
//     {
//         alert("Please enter a valid email address.");
//         return false;
//     }
    
//     if(phoneNumber == "")
//     {
//         alert("No phone number entered (but thats okay!)")
//         return true;
//     }
//     else if (!validatePhoneNumberUK(phoneNumber) && !validatePhoneNumberInternational(phoneNumber)) 
//     {
//         // const phoneNumberBlank = document.getElementById("contact-form__phone");
//         alert("Wrong phone number format" + phoneNumber);
//         phoneNumber = "please work ffs";
//         phoneNumberTF.attr('placeholder', 'kekw');
//         return false;
//     }
    

   


// }