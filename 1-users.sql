CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
  (1, 'Jon Doe', 'jon@doe.com', '$2y$10$eGdnkD1EcFdLmPtm0eqQ8OqjjRo6NWrXKDmbieFPKHmRUTmz7iYzi');
