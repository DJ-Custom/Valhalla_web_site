document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('showLogin').onclick = function() {
        const loginForm = document.getElementById('loginForm');
        // Toggle the login form visibility
        if (loginForm.style.display === 'block') {
            loginForm.style.display = 'none';
        } else {
            loginForm.style.display = 'block';
        }
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

    // user and comments
    let currentUser = null; // Guarda el usuario actual
    let comments = JSON.parse(localStorage.getItem('comments')) || []; // Cargar los comentarios desde localStorage
    let visibleComments = 6; // Número de comentarios a mostrar

    // Cargar los usuarios desde credentials.json
    let users = []; // Asegúrate de que esta declaración esté solo una vez

    fetch('credentials.json')
        .then(response => response.json())
        .then(data => {
            users = data.users;
        });

    // Función para el inicio de sesión
    function loginUser(username, password) {
        const user = users.find(u => u.username === username && u.password === password);

        if (user) {
            currentUser = user.username;
            alert(`Bienvenido, ${currentUser}!`);
            // Guardar el usuario en localStorage
            localStorage.setItem('currentUser', currentUser);
            // Redirigir a private_final.html
            window.location.href = 'private_final.html';
        } else {
            alert("Credenciales incorrectas. Inténtalo de nuevo.");
        }
    }

    // Función para manejar el formulario de inicio de sesión en index.html
    if (window.location.pathname.includes('index.html')) {
        // Manejar el formulario de inicio de sesión
        document.getElementById('loginForm').addEventListener('submit', (event) => {
            event.preventDefault(); // Evitar el refresco de la página
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            
            if (username && password) {
                loginUser(username, password);
            } else {
                alert('Por favor ingresa usuario y contraseña.');
            }
        });

    } else if (window.location.pathname.includes('private_final.html')) {
        // Verificar si el usuario está autenticado en private_final.html
        currentUser = localStorage.getItem('currentUser');
        if (!currentUser) {
            window.location.href = 'index.html'; // Redirigir si no está autenticado
        } else {
            document.getElementById('user').innerText = currentUser; // Mostrar nombre de usuario
            renderComments(); // Mostrar comentarios
        }

        // Agregar un nuevo comentario
        document.getElementById('submit-btn').addEventListener('click', () => {
            const commentInput = document.getElementById('comment');
            const text = commentInput.value.trim();
            if (text) {
                const newComment = {
                    username: currentUser,
                    text,
                    date: new Date().toISOString(),
                };
                comments.unshift(newComment); // Añadir al inicio del array
                localStorage.setItem('comments', JSON.stringify(comments));
                commentInput.value = '';
                renderComments(); // Volver a renderizar los comentarios
            } else {
                alert('Por favor escribe un comentario antes de enviarlo.');
            }
        });

        // Cargar más comentarios
        document.getElementById('load-more-btn').addEventListener('click', () => {
            visibleComments += 6;
            renderComments();
        });

        // Cargar menos comentarios
        document.getElementById('load-less-btn').addEventListener('click', () => {
            visibleComments = Math.max(6, visibleComments - 6);
            renderComments();
        });
    }

    // Función para mostrar los comentarios
    function renderComments() {
        const commentList = document.getElementById('comment-list');
        commentList.innerHTML = ''; // Limpiar la lista antes de mostrarla
        const displayComments = comments.slice(0, visibleComments);

        displayComments.forEach(comment => {
            const div = document.createElement('div');
            div.classList.add('comment');
            div.innerHTML = `
                <div class="meta">${comment.username} - ${new Date(comment.date).toLocaleString()}</div>
                <div>${comment.text}</div>
            `;
            commentList.appendChild(div);
        });

        // Mostrar los botones de cargar más/menos según sea necesario
        document.getElementById('load-more-btn').style.display = visibleComments < comments.length ? 'inline-block' : 'none';
        document.getElementById('load-less-btn').style.display = visibleComments > 6 ? 'inline-block' : 'none';
    }
});
