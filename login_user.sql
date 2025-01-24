-- Updating user "David" with the correct hashed password
UPDATE `usuarios` 
SET `clave` = '$2y$10$e0MYz1Q1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1Z1' 
WHERE `usuario` = 'David';
