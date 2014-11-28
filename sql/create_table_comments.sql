CREATE TABLE 'comments' (
'id' int(10) PRIMARY KEY AUTO_INCREMENT,
'id_user' int(10) unsigned NOT NULL,
'comment' text NOT NULL, 
'date' datetime NOT NULL,
)ENGINE=InnoDB CHARSET=utf8;

