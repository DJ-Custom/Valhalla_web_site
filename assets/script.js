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
                window.location.href = 'private_final.html';
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

document.addEventListener('DOMContentLoaded', () => {
    const commentForm = document.getElementById('comment-form');
    const commentsList = document.getElementById('comments-list');
    const loadMoreButton = document.getElementById('load-more');
    const loadLessButton = document.getElementById('load-less');
    const filterSelect = document.getElementById('filter');

    let comments = [];
    let displayedCommentsCount = 0;
    const increment = 6; // Number of comments to load at a time

    // Cargar comentarios desde el archivo JSON
    function loadComments() {
        fetch('comments.json')
            .then(response => response.json())
            .then(data => {
                comments = data; // Store all comments
                displayComments();
            });
    }

    // Mostrar comentarios en la lista
    function displayComments() {
        commentsList.innerHTML = '';
        const commentsToDisplay = comments.slice(0, displayedCommentsCount);
        commentsToDisplay.forEach(comment => {
            const commentDiv = document.createElement('div');
            commentDiv.classList.add('comment');
            commentDiv.innerHTML = `<strong style="color: ${getRandomColor()}">${comment.username}</strong> 
                                    <span style="float: right;">${comment.date}</span>
                                    <p>${comment.text}</p>`;
            commentsList.appendChild(commentDiv);
        });

        // Toggle button visibility
        loadLessButton.style.display = displayedCommentsCount > increment ? 'block' : 'none';
        loadMoreButton.style.display = displayedCommentsCount < comments.length ? 'block' : 'none';
    }

    // Obtener un color aleatorio para el nombre del usuario
    function getRandomColor() {
        const colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#FFBD33'];
        return colors[Math.floor(Math.random() * colors.length)];
    }

    // Manejar el envío del formulario
    commentForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const username = document.getElementById('username').value; // Get username from hidden input
        const commentText = document.getElementById('comment').value;
        const date = new Date().toLocaleString();

        const newComment = { username, text: commentText, date };
        console.log('New Comment:', newComment); // Log the new comment

        // Save the new comment in the comments array
        fetch('comments.json', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newComment)
        })
        .then(response => {
            if (response.ok) {
                comments.push(newComment); // Add to local comments array
                displayComments(); // Update the display immediately
                commentForm.reset(); // Reset the form
            } else {
                showCustomAlert('Error al guardar el comentario');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showCustomAlert('Error al guardar el comentario');
        });
    });

    // Load more comments
    loadMoreButton.addEventListener('click', () => {
        displayedCommentsCount += increment;
        displayComments();
    });

    // Load less comments
    loadLessButton.addEventListener('click', () => {
        displayedCommentsCount = Math.max(0, displayedCommentsCount - increment);
        displayComments();
    });

    // Cargar comentarios al inicio
    displayedCommentsCount = increment; // Start with the first increment of comments
    loadComments();
});

//boxes animation
