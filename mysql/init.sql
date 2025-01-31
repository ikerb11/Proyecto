CREATE TABLE alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(32) NOT NULL,
    telefono VARCHAR(16) NULL,
    edad INT NULL,
    password VARCHAR(64) NOT NULL,
    email VARCHAR(64) UNIQUE NOT NULL,
    sexo VARCHAR(10) NULL
);

INSERT INTO alumnos (nombre, telefono, edad, password, email, sexo) VALUES 
('Juan Pérez', '123456789', 30, 'password123', 'juan@example.com', 'M'),
('Maria López', '987654321', 25, 'securepass', 'maria@example.com', 'F');
