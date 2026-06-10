CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(50) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL
    
);
INSERT INTO products (code, name, )
VALUES
('PARA500', 'Paracétamol 500mg' ),
('AMOX500', 'Amoxicilline 500mg' ),
('VITC1000', 'Vitamine C 1000mg');
CREATE TABLE stock_batches (
    id INT AUTO_INCREMENT PRIMARY KEY,

    product_id INT NOT NULL,

    lot_number VARCHAR(100) NOT NULL,

    quantity INT NOT NULL DEFAULT 0,

   

    expiry_date DATE NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_product
        FOREIGN KEY (product_id)
        REFERENCES products(id)
        ON DELETE CASCADE
);
CREATE TABLE movement_history (
    id INT AUTO_INCREMENT PRIMARY KEY,

    batch_id INT NOT NULL,

    movement_type ENUM('IN','OUT') NOT NULL,

    quantity INT NOT NULL,

    movement_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    note TEXT NULL,

    CONSTRAINT fk_batch
        FOREIGN KEY (batch_id)
        REFERENCES stock_batches(id)
        ON DELETE CASCADE
);
INSERT INTO stock_batches
(product_id, lot_number, quantity, expiry_date)
VALUES
(1,'LOT-PARA-001',150,'2026-01-15'),

(1,'LOT-PARA-002',200,'2025-12-10'),

(2,'LOT-AMOX-001',80,'2025-08-20'),

(3,'LOT-VITC-001',120,'2027-01-10');
CREATE DATABASE pharma_fefo;
USE pharma_fefo;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin','pharmacien','preparateur')
);
INSERT INTO users (fullname, email, password, role)
VALUES
('Admin', 'admin@gmail.com', '1234', 'admin'),
('Pharmacien', 'pharma@gmail.com', '1234', 'pharmacien'),
('Preparateur', 'prepa@gmail.com', '1234', 'preparateur');