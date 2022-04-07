CREATE DATABASE users_advertisements;
CREATE TABLE users (
    id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE advertisements (
    id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userid INT(5) UNSIGNED,
    title VARCHAR(1000) NOT NULL,
    FOREIGN KEY (userid)
    REFERENCES users(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO users (name) VALUES ('Peter Kis');
INSERT INTO users (name) VALUES ("Kevin Barna");
INSERT INTO users (name) VALUES ("Attila Szerencses");
INSERT INTO users (name) VALUES ("Ferenc Szalai");
INSERT INTO users (name) VALUES ("Zsofia Dobos");
INSERT INTO users (name) VALUES ("Aron Szekeres");
INSERT INTO users (name) VALUES ("Luca Kozma");
INSERT INTO users (name) VALUES ("Szabolcs Szilagyi");
INSERT INTO users (name) VALUES ("Emese Kende");
INSERT INTO users (name) VALUES ("Zalan Fulop");


INSERT INTO advertisements (userid, title) VALUES ("1", "Want to sell Silver");
INSERT INTO advertisements (userid, title) VALUES ("2", "Want to sell Gold");
INSERT INTO advertisements (userid, title) VALUES ("3", "Want to buy house");
INSERT INTO advertisements (userid, title) VALUES ("4", "Want to sell car");
INSERT INTO advertisements (userid, title) VALUES ("5", "Want to buy a bike");
INSERT INTO advertisements (userid, title) VALUES ("6", "Want to buy an xbox");
INSERT INTO advertisements (userid, title) VALUES ("7", "Want to sell a ps5");
INSERT INTO advertisements (userid, title) VALUES ("8", "Want to sell an LG Tv");
INSERT INTO advertisements (userid, title) VALUES ("9", "Want to buy a vacuum cleaner");
INSERT INTO advertisements (userid, title) VALUES ("10", "Want to sell a turmix");


