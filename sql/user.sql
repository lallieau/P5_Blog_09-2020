CREATE TABLE `user`(
`id`int(11) NOT NULL AUTO_INCREMENT,
`pseudo` varchar(100) NOT NULL,
`password` varchar(60) NOT NULL,
`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,

PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
