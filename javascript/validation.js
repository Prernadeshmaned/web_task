function validateName() {
    const name = document.getElementById("sname").value;
    const namePattern = /^[A-Za-z\s]+$/; // Only letters and spaces
    const errorDiv = document.getElementById("nameError");

    if (!namePattern.test(name)) {
        errorDiv.textContent = "Name should contain only letters.";
    } else {
        errorDiv.textContent = ""; // Clear error message
    }
}

function validatePhoneNumber() {
    const number = document.getElementById("number").value;
    const numberPattern = /^\d{10}$/; // Exactly 10 digits
    const errorDiv = document.getElementById("phoneError");

    if (!numberPattern.test(number)) {
        errorDiv.textContent = "Phone number must be exactly 10 digits.";
    } else {
        errorDiv.textContent = ""; // Clear error message
    }
}

function validateEmail() {
    const email = document.getElementById("email").value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email format
    const errorDiv = document.getElementById("emailError");

    if (!emailPattern.test(email)) {
        errorDiv.textContent = "Please enter a valid email address.";
    } else {
        errorDiv.textContent = ""; // Clear error message
    }
}
