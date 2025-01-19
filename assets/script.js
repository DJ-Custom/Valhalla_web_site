document.getElementById('showLogin').onclick = function() {
    const loginForm = document.getElementById('loginForm');
    // Toggle the login form visibility
    if (loginForm.style.display === 'block') {
        loginForm.style.display = 'none';
    } else {
        loginForm.style.display = 'block';
    }
};

document.getElementById('loginButton').onclick = function(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    fetch('credentials.json')
        .then(response => response.json())
        .then(data => {
            const user = data.users.find(user => user.username === username && user.password === password);
            if (user) {
                // Redirect to private.html if credentials are correct
                window.location.href = 'private.html';
            } else {
                showCustomAlert('Credenciales incorrectas');
            }
        });
};

function showCustomAlert(message) {
    const alertBox = document.createElement('div');
    alertBox.textContent = message;
    alertBox.style.position = 'fixed';
    alertBox.style.top = '30px';
    alertBox.style.left = '50%';
    alertBox.style.transform = 'translateX(-50%)';
    alertBox.style.backgroundColor = 'var(--primary-color)';
    alertBox.style.color = 'var(--secondary-color)';
    alertBox.style.padding = '10px 20px';
    alertBox.style.borderRadius = '5px';
    alertBox.style.zIndex = '1000';
    alertBox.style.fontFamily = 'var(--font-family)';
    document.body.appendChild(alertBox);

    setTimeout(() => {
        alertBox.remove();
    }, 3000); // Remove the alert after 3 seconds
}

function togglePassword() {
    const passwordInput = document.getElementById('password');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    document.querySelector('.toggle-password').textContent = type === 'password' ? '👁️' : '🙈';
}