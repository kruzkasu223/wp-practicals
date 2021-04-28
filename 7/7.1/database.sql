create database test;

use test;

CREATE TABLE `students` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `eno` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `sem` int(2) NOT NULL,
  `cno` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
);