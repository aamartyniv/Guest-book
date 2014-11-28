create table registration_data (
'id' int(10) primary key auto_increment,
'name' varchar(255) not null,
'password' varchar(100) not null,
'email' varchar(255) key not null
)engine=InnoDB default charset=utf8;