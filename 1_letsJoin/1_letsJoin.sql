CREATE SCHEMA letsJoin;

USE letsJoin;

CREATE TABLE articles(
...);
INSERT INTO articles (title, content, picture, date_publish, id_user) VALUES ('h', 'n', 'n', 'n', '1');

CREATE TABLE users(
...);
INSERT INTO users (firstname, lastname, email, role) VALUES ('a', 'b', 'c', 'd');



SELECT * FROM users JOIN articles ON users.id = articles.id_user WHERE users.id LIKE '10';