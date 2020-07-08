CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `article` (

`id` int(11)NOT NULL AUTO_INCREMENT,
`title` varchar(100)NOT NULL,
`content` text NOT NULL,
`author` varchar(100) NOT NULL,
`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ,

PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `article` (`title`, `content`, `author`)VALUES

('Premier article','Mon blog est en construction, patience','Lallie'),

('Deuxième article','Je continue à ajouter du contenu sur mon blog','Lallie'),

('Troisième article','Mon blog est génial !','Lallie')
