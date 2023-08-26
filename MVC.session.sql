-- @block
SELECT * FROM users;


-- @block
CREATE TABLE posts(
    id INT AUTO_INCREMENT,
    user_id INT NOT NULL,
    title VARCHAR(255),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- @block
ALTER TABLE posts
ADD author VARCHAR(255) NOT NULL;

-- @block
SELECT * FROM users
INNER JOIN posts
ON posts.user_id = users.id;

