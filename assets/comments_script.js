document.addEventListener('DOMContentLoaded', () => {
    const commentForm = document.getElementById('comment-form');
    const commentsList = document.getElementById('comments-list');

    // Load comments from comments.json
    function loadComments() {
        fetch('comments.json')
            .then(response => response.json())
            .then(data => {
                data.forEach(comment => {
                    displayComment(comment);
                });
            });
    }

    // Display a single comment
    function displayComment(comment) {
        const commentDiv = document.createElement('div');
        commentDiv.classList.add('comment');
        commentDiv.innerHTML = `<strong>${comment.username}</strong> <span>${comment.date}</span>
                                <p>${comment.text}</p>`;
        commentsList.appendChild(commentDiv);
    }

    // Handle comment form submission
    commentForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const username = document.getElementById('username').value;
        const commentText = document.getElementById('comment').value;
        const date = new Date().toLocaleString();

        const newComment = { username, text: commentText, date };

        // Save the new comment to comments.json
        fetch('comments.json', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newComment)
        })
        .then(response => {
            if (response.ok) {
                displayComment(newComment); // Display the new comment immediately
                commentForm.reset(); // Reset the form
            } else {
                alert('Error al guardar el comentario');
            }
        });
    });

    // Load comments on page load
    loadComments();
});
