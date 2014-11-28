create table comments (
'id' int(10) primary key auto_increment,
'id_user' int(10) unsigned not null,
'comment' text not null, 
'date' datetime not null,
FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
)engine=InnoDB default charset=utf8; 