CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `article` (

`id` int(11)NOT NULL AUTO_INCREMENT,
`title` varchar(100)NOT NULL,
`content` text NOT NULL,
`author` varchar(100) NOT NULL,
`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,

PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `article` (`title`, `content`, `author`)VALUES

('Premier article','Mon blog est en construction, patience','Lallie'),

('Deuxième article','Je continue à ajouter du contenu sur mon blog','Lallie'),

('Troisième article','Mon blog est génial !','Lallie')


CREATE TABLE `comment`(
`id`int(11) NOT NULL AUTO_INCREMENT,
`pseudo` varchar(100) NOT NULL,
`content` text NOT NULL,
`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
`article_id` int(11) NOT NULL,

PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `comment`
ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

INSERT INTO `comment` (`pseudo`,`content`,`article_id`)VALUES
('Jean', 'Génial, hâte de voir ce que ça donne !',1),
('Nina', 'Trop cool ! depuis le temps',1),
('Rodrigo', 'Great ! ',1),
('Hélène', 'je suis heureuse de découvrir un super site ! Continuez comme ça ',2),
('Moussa', 'Un peu déçu par le contenu pour le moment...',2),
('Barbara', 'pressée de voir la suite',2),
('Guillaume', 'Je viens ici pour troller !',3),
('Aurore', 'Enfin un blog tranquille, où on ne nous casse pas les pieds !',3),
('Jordane', 'Je suis vendéen ! Amateur de mojettes !',3);

