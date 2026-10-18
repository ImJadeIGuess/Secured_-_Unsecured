const registrationForm = document.getElementById("registrationForm");

registrationForm.addEventListener("submit", function(event) {

    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm-password").value;

    if (password !== confirmPassword) {
        event.preventDefault();

        alert("Passwords do not match!");
        return;
    }

    alert("Registration successful!");

    window.location.href = "login.html";
});