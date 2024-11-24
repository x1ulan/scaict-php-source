CREATE DATABASE bigdata;
USE bigdata;

CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    views INT DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO articles (title, content, views) VALUES
('How to Learn PHP', 'PHP is a popular server-side scripting language.', 120),
('Getting Started with MySQL', 'MySQL is a relational database management system.', 150),
('Understanding SQL Joins', 'Joins are a critical concept in SQL for combining tables.', 80),
('Tips for Secure Coding', 'Security is crucial for web development. Here are some tips.', 200),
('Introduction to Full-Text Search', 'Full-text search allows you to search text fields efficiently.', 50),
('Advanced PHP Tips', 'Learn advanced techniques for PHP development.', 90),
('SQL Optimization Strategies', 'Optimizing SQL queries can greatly improve performance.', 70),
('Database Indexing Explained', 'Indexes can speed up database queries significantly.', 110),
('What is Object-Oriented PHP?', 'Object-oriented PHP simplifies complex projects.', 130),
('Common MySQL Errors', 'Learn how to troubleshoot common MySQL issues.', 60),
('HTML Basics for Beginners', 'HTML is the foundation of any website.', 140),
('CSS Layout Techniques', 'Modern CSS enables responsive web design.', 85),
('JavaScript and DOM Manipulation', 'Learn how to dynamically update web pages.', 75),
('Building RESTful APIs with PHP', 'Create APIs for your applications with ease.', 95),
('Top 10 Security Vulnerabilities', 'Avoid these common pitfalls in web development.', 220),
('Introduction to Laravel', 'Laravel is a popular PHP framework.', 100),
('Debugging PHP Applications', 'Effective debugging techniques for PHP developers.', 65),
('Version Control with Git', 'Learn the basics of Git and GitHub.', 170),
('What is MVC Architecture?', 'Understand the Model-View-Controller design pattern.', 90),
('MySQL vs PostgreSQL', 'A comparison of two popular database systems.', 55),
('Basics of Data Normalization', 'Organize your database tables efficiently.', 45),
('JSON vs XML for Data Exchange', 'Compare two popular data formats.', 35),
('Building a Blog with PHP', 'Learn to create a basic blog application.', 100),
('SQL Transactions Explained', 'Maintain database consistency with transactions.', 60),
('What are Websockets?', 'Enable real-time communication with Websockets.', 150),
('Caching Strategies for PHP', 'Improve your site performance with caching.', 110),
('How to Use Prepared Statements', 'Prevent SQL injection attacks with prepared statements.', 80),
('Introduction to API Authentication', 'Learn basic API authentication methods.', 95),
('Best Practices for PHP Development', 'Improve your PHP coding skills.', 200),
('Scaling MySQL for Large Applications', 'Optimize MySQL for high traffic websites.', 130);