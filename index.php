<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Validation</title>
<style>
body {
    background-color: #67a5f1; /* Light gray background */
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 400px;
    background-color: #d9ef93; /* White background for the form */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Drop shadow effect */
}

h2 {
    text-align: center;
}

.text-center {
    text-align: center;
}

.input-text {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
    
}

.error {
    color: red;
}
</style>
</head>
<body>

<div class="container">
    <h2>Form Validation</h2>

    <form id="myForm" action="submit.php" method="post">
        <label for="name" class="text-center">Name:</label><br>
        <input type="text" id="name" name="name" class="input-text" onblur="validateName()"><br>
        <span id="nameError" class="error"></span><br>

        <label for="address" class="text-center">Address:</label><br>
        <input type="text" id="address" name="address" class="input-text" onblur="validateAddress()"><br>
        <span id="addressError" class="error"></span><br>

        <label for="mobile" class="text-center">Mobile Number:</label><br>
        <input type="text" id="mobile" name="mobile" class="input-text" onblur="validateMobile()"><br>
        <span id="mobileError" class="error"></span><br>

        <label for="email" class="text-center">Email:</label><br>
        <input type="email" id="email" name="email" class="input-text" onblur="validateEmail()"><br>
        <span id="emailError" class="error"></span><br>

        <input type="submit" value="Submit">

    </form>
</div>

<script>
function validateName() {
    var name = document.getElementById("name").value;
    if (name === "") {
        document.getElementById("nameError").innerHTML = "Name is required";
    } else {
        document.getElementById("nameError").innerHTML = "";
    }
}

function validateAddress() {
    var address = document.getElementById("address").value;
    if (address === "") {
        document.getElementById("addressError").innerHTML = "Address is required";
    } else {
        document.getElementById("addressError").innerHTML = "";
    }
}

function validateMobile() {
    var mobile = document.getElementById("mobile").value;
    var mobileRegex = /^\d{10}$/;
    if (!mobile.match(mobileRegex)) {
        document.getElementById("mobileError").innerHTML = "Invalid mobile number";
    } else {
        document.getElementById("mobileError").innerHTML = "";
    }
}

function validateEmail() {
    var email = document.getElementById("email").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailRegex)) {
        document.getElementById("emailError").innerHTML = "Invalid email address";
    } else {
        document.getElementById("emailError").innerHTML = "";
    }
}

function submitForm() {
    validateName();
    validateAddress();
    validateMobile();
    validateEmail();

   
}
</script>

</body>
</html>

