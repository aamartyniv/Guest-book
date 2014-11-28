CREATE TABLE 'comments' (
'id' int(10) PRIMARY KEY AUTO_INCREMENT,
'user_id' int(10) unsigned NOT NULL,
'comment' text NOT NULL, 
'date' datetime NOT NULL,
FOREIGN KEY (user_id) REFERENCES users(id)
)ENGINE=InnoDB CHARSET=utf8;

