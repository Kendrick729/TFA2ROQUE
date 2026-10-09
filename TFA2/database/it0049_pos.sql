CREATE DATABASE IF NOT EXISTS it0049_pos CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE it0049_pos;

CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Juan Dela Cruz', 'juan.delacruz@email.com', '09171234567', NOW()),
('Maria Santos', 'maria.santos@email.com', '09181234567', NOW()),
('Carlo Reyes', 'carlo.reyes@email.com', '09191234567', NOW()),
('Angela Garcia', 'angela.garcia@email.com', '09201234567', NOW()),
('Mark Villanueva', 'mark.villanueva@email.com', '09211234567', NOW());

INSERT INTO users (username, full_name, created_at) VALUES
('admin', 'Admin User', NOW()),
('cashier01', 'Lara Mendoza', NOW()),
('manager01', 'Paolo Cruz', NOW()),
('staff01', 'Nina Ramos', NOW()),
('staff02', 'Ken Flores', NOW());
