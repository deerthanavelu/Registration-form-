
CREATE DATABASE IF NOT EXISTS dregi;


USE dregi;


CREATE TABLE IF NOT EXISTS registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    course VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    mobile_number VARCHAR(10) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    photo VARCHAR(255) NOT NULL
);


ALTER TABLE registration ADD CONSTRAINT unique_email UNIQUE (email);
