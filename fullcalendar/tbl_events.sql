CREATE DATABASE phpdb;

CREATE TABLE IF NOT EXISTS `fullcalendar` (
`id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
);

-- Indexes for table `fullcalendar`
ALTER TABLE `fullcalendar`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `fullcalendar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
