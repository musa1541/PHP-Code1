CREATE TABLE `users` (
  `user_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
);