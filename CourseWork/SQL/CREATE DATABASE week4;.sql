-- Create the 'week4' database and select it for use
CREATE DATABASE week4;  -- Creates a new database named 'week4'
USE week4;  -- Selects the 'week4' database for further operations

-- Create the 'user' table to store user information
CREATE TABLE user (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,  -- The 'id' column is an auto-incrementing integer and serves as the primary key
    name VARCHAR(255) NOT NULL,  -- The 'name' column stores the user's name, it cannot be NULL
    email VARCHAR(255) NOT NULL  -- The 'email' column stores the user's email, it cannot be NULL
);

-- Create the 'messages' table to store messages
CREATE TABLE messages (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,  -- The 'id' column is an auto-incrementing integer and serves as the primary key
    message TEXT NOT NULL,  -- The 'message' column stores the message text, it cannot be NULL
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  -- The 'created_at' column stores the creation timestamp, defaulting to the current time
);

-- Create the 'module' table to store module information
CREATE TABLE module (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,  -- The 'id' column is an auto-incrementing integer and serves as the primary key
    moduleName VARCHAR(255) NOT NULL  -- The 'moduleName' column stores the module name, it cannot be NULL
);

-- Create the 'post' table to store posts related to users and modules
CREATE TABLE post (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,  -- The 'id' column is an auto-incrementing integer and serves as the primary key
    posttext TEXT NOT NULL,  -- The 'posttext' column stores the post content, it cannot be NULL
    postdate DATE NOT NULL,  -- The 'postdate' column stores the date of the post, it cannot be NULL
    post_pic VARCHAR(255),  -- The 'post_pic' column stores the path to the post's image (can be NULL)
    userid INT(11),  -- The 'userid' column links to the 'id' in the 'user' table to indicate the user who made the post
    moduleid INT(255),  -- The 'moduleid' column links to the 'id' in the 'module' table to indicate which module the post is associated with
    FOREIGN KEY (userid) REFERENCES user(id),  -- Creates a foreign key linking 'userid' to 'id' in the 'user' table
    FOREIGN KEY (moduleid) REFERENCES module(id)  -- Creates a foreign key linking 'moduleid' to 'id' in the 'module' table
);