let signupBtn = document.getElementById("signupBtn");
let signinBtn = document.getElementById("signinBtn");
let nameField = document.getElementById("nameField");
let title = document.getElementById("title");

signinBtn.onclick = function () {
    nameField.style.maxHeight = "0";
    title.innerHTML = "Sign In";
    signupBtn.classList.add("disable");
    signinBtn.classList.remove("disable");
}

signupBtn.onclick = function () {
    nameField.style.maxHeight = "60px";
    title.innerHTML = "Sign Up";
    signupBtn.classList.remove("disable");
    signinBtn.classList.add("disable");
}
function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var emailRegex=/^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    if(!emailRegex.test(email)){
        alert("Please enter your email");
        return false;
    }

    if (!/^[a-zA-Z0-9]+$/.test(username)) {
        alert("Username can only contain letters and numbers");
        return false;
    }

    // Check if the email is valid
    if (!isValidEmail(email)) {
        alert("Invalid email address");
        return false;
    }

    // Check if the password meets certain criteria (e.g., minimum length)
    if (password.length < 6) {
        MessageChannel.p
        return false;
    }

    return true; // Form is valid, allow submission
}


