-- Tạo cơ sở dữ liệu
CREATE DATABASE IF NOT EXISTS product;

-- Sử dụng cơ sở dữ liệu
USE product;

-- Tạo bảng product_table
CREATE TABLE IF NOT EXISTS product_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Ten CHAR(50),
    Gia INT
);

-- Thêm dữ liệu mẫu
INSERT INTO product_table (Ten, Gia) VALUES
('Product A', 1000),
('Product B', 2000),
('Product C', 3000);