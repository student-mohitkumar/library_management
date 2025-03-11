--  Library Management Database
CREATE DATABASE library_management;
USE library_management;

-- Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL
);

-- Books Table
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    availability BOOLEAN DEFAULT 1
);

-- Transactions Table
CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    book_id INT NOT NULL,
    issue_date DATE NOT NULL,
    return_date DATE NOT NULL,
    fine_amount DECIMAL(10,2) DEFAULT 0,
    status ENUM('issued', 'returned') NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (book_id) REFERENCES books(id)
);

-- Membership Table
CREATE TABLE membership (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    type ENUM('6 months', '1 year', '2 years') DEFAULT '6 months',
    status ENUM('active', 'expired') NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Fine Payment Table
CREATE TABLE fine_payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    transaction_id INT NOT NULL,
    fine_paid DECIMAL(10,2) DEFAULT 0,
    remarks TEXT,
    status ENUM('paid', 'unpaid') NOT NULL,
    FOREIGN KEY (transaction_id) REFERENCES transactions(id)
);

-- Maintenance Table
CREATE TABLE maintenance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    maintenance_type VARCHAR(50) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Reports Table
CREATE TABLE reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    report_type VARCHAR(50) NOT NULL,
    description TEXT,
    generated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

