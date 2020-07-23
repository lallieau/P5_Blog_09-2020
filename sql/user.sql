CREATE TABLE `user`(
`id`int(11) NOT NULL AUTO_INCREMENT,
`pseudo` varchar(100) NOT NULL,
`password` varchar(60) NOT NULL,
`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,

PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;