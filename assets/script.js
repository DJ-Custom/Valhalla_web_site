document.getElementById('showLogin').onclick = function() {
    const loginForm = document.getElementById('loginForm');
    if (loginForm.style.display === 'block') {
        loginForm.style.display = 'none';
    } else {
        loginForm.style.display = 'block';
    }
};

document.getElementById('loginButton').onclick = function() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    fetch('credentials.json')
        .then(response => response.json())
        .then(data => {
            const user = data.users.find(user => user.username === username && user.password === password);
            if (user) {
                document.getElementById('redirectButton').style.display = 'block';
            } else {
                alert('Credenciales incorrectas');
            }
        });
};

function togglePassword() {
    const passwordInput = document.getElementById('password');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    document.querySelector('.toggle-password').textContent = type === 'password' ? '👁️' : '🙈';
}
