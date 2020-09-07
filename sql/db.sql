CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

/* Article Table */

CREATE TABLE `article` (
`id` int(11)NOT NULL AUTO_INCREMENT,
`title` varchar(100)NOT NULL,
`content` text NOT NULL,
`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
`chapo` text NOT NULL,
`EditAt` datetime NULL,
`img` text NOT NULL,
`bg` text NOT NULL,
`user_id` int(11) NOT NULL,

PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Comment Table */

CREATE TABLE `comment`(
`id`int(11) NOT NULL AUTO_INCREMENT,
`pseudo` varchar(100) NOT NULL,
`content` text NOT NULL,
`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
`validation` tinyint(1) NOT NULL,
`article_id` int(11) NOT NULL,

PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* User Table */

CREATE TABLE `user`(
`id`int(11) NOT NULL AUTO_INCREMENT,
`pseudo` varchar(100) NOT NULL,
`password` varchar(60) NOT NULL,
`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
`sexe`int(11) NOT NULL,
`role_id`int(11) NOT NULL,

PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Role Table */

CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,

PRIMARY KEY (`id`);
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

/* Foreign Key */

ALTER TABLE `comment`
ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

ALTER TABLE `article`
ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `user`
ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);