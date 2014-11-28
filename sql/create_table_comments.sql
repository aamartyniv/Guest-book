CREATE TABLE `comments` (
`id` int(10) PRIMARY KEY AUTO_INCREMENT,
`user_id` int(10) NOT NULL,
`comment` VARCHAR(255) NOT NULL,
`date` datetime NOT NULL,
FOREIGN KEY (`user_id`) REFERENCES registration_data(`id`)
) ENGINE=InnoDB CHARSET=utf8;
