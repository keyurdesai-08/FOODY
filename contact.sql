CREATE DATABASE contact_form;
USE contact_form;
CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255),
    Email VARCHAR(255),
    Comment TEXT,
    Submission_time TIMESTAMP
);
