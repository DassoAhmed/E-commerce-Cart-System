CREATE DATABASE IF NOT EXISTS ecommerce;

USE ecommerce;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255)
);

INSERT INTO products (name, description, price, image_url) VALUES
('Product 1', 'Description for Product 1', 19.99, 'camera.jpg'),
('Product 2', 'Description for Product 2', 29.99, 'external-hard-drive.jpg'),
('Product 3', 'Description for Product 3', 39.99, 'watch.jpg');