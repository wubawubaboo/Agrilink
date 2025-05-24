// filepath: agrilink-website/agrilink-website/public/assets/js/scripts.js
document.addEventListener('DOMContentLoaded', function() {
    // Example of form validation for the registration form
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            let valid = true;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const email = document.getElementById('email').value;

            // Simple validation checks
            if (username === '' || password === '' || email === '') {
                valid = false;
                alert('All fields are required.');
            }

            if (!valid) {
                event.preventDefault(); // Prevent form submission
            }
        });
    }

    // Example of a function to handle logout
    const logoutButton = document.getElementById('logoutButton');
    if (logoutButton) {
        logoutButton.addEventListener('click', function() {
            if (confirm('Are you sure you want to logout?')) {
                window.location.href = 'logout.php';
            }
        });
    }

    // Additional JavaScript functions can be added here for other functionalities
});