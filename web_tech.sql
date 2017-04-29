





CREATE TABLE `tblcomment` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `comment` varchar(1500) NOT NULL,
  `rate` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


INSERT INTO `tblcomment` (`id`, `name`, `subject`, `email`, `comment`, `rate`) VALUES
(1, 'Thushi', 'Alice In Wonderland', 'thsuh@ymail.com', 'This is probably one of my favorite Disney movies, of which, I dont have many. It probably wont be around too long, so I will probably be snatching this one up sometime very soon.', 4),
(2, 'vishimi', 'Austin Powers: Internatio', 'vish@ymail.com', 'Love Austin Powers, own it on tape, and want it on DVD.', 3),
(3, 'kaveesha', 'Felicity Season Three', 'kavee@ymail.com', ' Gift Idea!!! Seriously, love this show. ', 3),
(4, 'chamalka', 'My Best Friends Wedding', 'chami@ymail.com', 'he three reasons I want this movie: Cameron Diaz is awesome in it, I love Julia Roberts in it, and most importantly, Rupert Everett leads a sing along of "say a little prayer for you".', 4),
(5, 'aadila', 'Shrek', 'aadi@ymail.com', 'First time I saw this, I thought it was okay. Now I think that it is great! This DVD is worth getting for the extras Shreks Karaoke Party alone.', 4);



CREATE TABLE `userdetail` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `userdetail` (`firstname`, `lastname`, `email`, `dob`, `address`, `contactno`, `country`, `username`, `password`, `batman`, `kungfu`, `deadpool`, `junglebook`) VALUES
('Thushini', 'Ranasinghe', 'thushinistuart@rocketmail.com', '1998-01-22', '115,Kadawatha', '0774839393', 'srilanka', 'thushi', 'thushi'),
('Kaveesha', 'Chethiyawardena', 'kaveeshachethiyawardena@gmail.com', '1995-03-09', '115,Galle', '0774839393', 'srilanka', 'kavee', 'kavee'),
('Chamalka', 'Kalansuriya', 'chamalka6@gmail.com', '1995-03-24', '114,Galle', '0774839393', 'srilanka', 'chami', 'chami'),
('Umar', 'Packeer', 'umar.packeer@gmail.com', '1997-02-17', '115,colombo', '0774839393', 'srilanka', 'umar', 'umar'),
('Aadilah', 'Iqbal', 'aadilah.2015186@iit.ac.lk', '1995-05-22', '115,kandy', '0774839393', 'srilanka', 'aadi', 'aadi');

