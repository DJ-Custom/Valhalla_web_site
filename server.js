const express = require('express');
const fs = require('fs');
const path = require('path');
const app = express();
const port = 3000;

// Middleware para parsear datos JSON en las solicitudes
app.use(express.json());

// Servir archivos estáticos (html, css, js) desde la carpeta /assets
app.use('/assets', express.static(path.join(__dirname, 'assets')));

// Servir las páginas HTML
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'index.html'));
});

app.get('/private_final.html', (req, res) => {
  res.sendFile(path.join(__dirname, 'private_final.html'));
});

// Ruta para obtener los comentarios
app.get('/comments', (req, res) => {
    fs.readFile(path.join(__dirname, 'comments.json'), 'utf8', (err, data) => {
        if (err) {
            res.status(500).send('Error al leer los comentarios');
        } else {
            res.json(JSON.parse(data));
        }
    });
});

// Ruta para agregar un comentario
app.post('/comments', (req, res) => {
    const newComment = req.body; // El comentario enviado por el frontend

    // Leer los comentarios existentes
    fs.readFile(path.join(__dirname, 'comments.json'), 'utf8', (err, data) => {
        if (err) {
            res.status(500).send('Error al leer los comentarios');
        } else {
            const comments = JSON.parse(data);
            comments.push(newComment); // Añadir el nuevo comentario

            // Escribir los comentarios actualizados en comments.json
            fs.writeFile(path.join(__dirname, 'comments.json'), JSON.stringify(comments, null, 2), (err) => {
                if (err) {
                    res.status(500).send('Error al guardar el comentario');
                } else {
                    res.status(200).send('Comentario agregado correctamente');
                }
            });
        }
    });
});

// Iniciar el servidor
app.listen(port, () => {
    console.log(`Servidor corriendo en http://localhost:${port}`);
});