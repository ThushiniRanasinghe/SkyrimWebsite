CREATE TABLE `poll` (
  `poll_id` int(5) NOT NULL,
  `poll_name` varchar(30) NOT NULL,
  `vote` int(5) NOT NULL,
    PRIMARY KEY (`poll_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `poll` (`poll_id`, `poll_name`, `vote`) VALUES
(1, 'batman', 1),
(2, 'kungfu', 1),
(3, 'deadpool', 0),
(4, 'junglebook', 0);

CREATE TABLE `categories` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
    
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT;

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Animation'),
(5, 'Horror'),
(6, 'Mystery');




CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT;


INSERT INTO `orderitems` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 7, 1, 1),
(2, 7, 1, 1),
(3, 7, 1, 1),
(4, 8, 1, 1),
(5, 9, 2, 6),
(6, 9, 1, 3),
(7, 10, 1, 1),
(8, 11, 1, 1),
(9, 11, 1, 1),
(10, 12, 1, 1),
(11, 13, 2, 1),
(12, 14, 1, 1),
(13, 15, 2, 1),
(14, 18, 1, 1),
(15, 18, 1, 1),
(16, 16, 1, 1),
(17, 16, 1, 2),
(18, 16, 1, 1),
(19, 16, 2, 1),
(20, 20, 2, 1),
(21, 20, 2, 1),
(22, 20, 1, 1),
(23, 20, 46, 1),
(24, 21, 1, 1);




CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `session` varchar(100) NOT NULL,
  `total` float NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT;

INSERT INTO `orders` (`id`, `date`, `status`, `session`, `total`) VALUES
(1, '2014-02-25 16:13:51', 0, 'h5qvhqr3nl1gb8kn113tccbge3', 0),
(2, '2014-02-26 15:01:39', 1, 'pgkmn3btg9ht50b5u4gob700m6', 0),
(3, '2014-02-26 15:05:50', 1, 'pgkmn3btg9ht50b5u4gob700m6', 0),
(4, '2014-02-26 15:08:14', 1, 'pgkmn3btg9ht50b5u4gob700m6', 0),
(5, '2014-02-26 15:09:20', 1, 'pgkmn3btg9ht50b5u4gob700m6', 0),
(6, '2014-02-26 15:09:55', 1, 'pgkmn3btg9ht50b5u4gob700m6', 0),
(7, '2014-02-26 15:17:38', 10, 'pgkmn3btg9ht50b5u4gob700m6', 0),
(8, '2014-02-26 15:29:38', 10, '9n1p3p41f2sgcd9hoe491rjp26', 2.99),
(9, '2014-02-26 15:32:38', 10, '515mgajhranmg5cjls6n28obr3', 14.37),
(10, '2014-02-26 17:44:28', 1, 'lrf0k8l2fonpaemb70elbnchj0', 2.99),
(11, '2014-02-26 18:25:14', 2, 'e252etc9feaumhbo6umvgar286', 5.98),
(12, '2014-02-26 18:53:55', 2, '', 2.99),
(13, '2014-02-26 18:57:58', 2, '', 0.9),
(14, '2014-02-26 19:09:20', 2, 'lrf0k8l2fonpaemb70elbnchj0', 2.99),
(15, '2014-02-26 19:11:09', 1, '', 0.9),
(16, '2016-04-22 18:33:57', 0, 'ul3q2gv52dj6tpp23vf63mu0p2', 80),
(17, '2016-04-22 18:38:53', 0, 'ul3q2gv52dj6tpp23vf63mu0p2', 0),
(18, '2016-04-22 19:14:37', 0, 'ul3q2gv52dj6tpp23vf63mu0p2', 0),
(19, '2016-04-22 19:17:41', 0, 'ul3q2gv52dj6tpp23vf63mu0p2', 0),
(20, '2016-04-22 23:28:57', 0, 'ljkvk3dfaej9ls3886a4dk9b62', 67.11),
(21, '2016-04-24 02:50:13', 0, 'm9e157cvo60g9o62tt6tpptj60', 15);




CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` tinyint(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` float NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT;

INSERT INTO `products` (`id`, `cat_id`, `name`, `description`, `quantity`, `image`, `price`) VALUES
(1, 1, 'Batman v Superman: Dawn of Justice (2016)', 'Fearing that the actions of \r\n\r\nSuperman are left unchecked, Batman takes on the Man of Steel, while the world \r\n\r\nwrestles with what kind of a hero it really needs.', 111, '1.jpg', 15),
(2, 1, 'Captain America: Civil War (2016)', 'Political interference in the Avengers \r\n\r\nactivities causes a rift between former allies Captain America and Iron Man.', 69, '2.jpg', 20),
(3, 1, 'Deadpool (2016)', 'A former Special Forces operative turned mercenary is \r\n\r\nsubjected to a rogue experiment that leaves him with accelerated healing powers, \r\n\r\nadopting the alter ego Deadpool.', 96, '3.jpg', 24.45),
(4, 1, 'Suicide Squad (2016)', 'A secret government agency recruits imprisoned \r\n\r\nsupervillains to execute dangerous black ops missions in exchange for clemency.', 67, '4.jpg', 15.5),
(5, 1, 'Star Wars: Episode VII - The Force Awakens (2015)', 'Three decades after the \r\n\r\ndefeat of the Galactic Empire, a new threat arises. The First Order attempts to rule the \r\n\r\ngalaxy and only a ragtag group of heroes can stop them, along with the help of the \r\n\r\nResistance.', 45, '5.jpg', 32.6),
(6, 1, 'Zootopia (2016)', 'In a city of anthropomorphic animals, a rookie bunny cop and a \r\n\r\ncynical con artist fox must work together to uncover a conspiracy.', 123, '6.jpg', 34),
(7, 1, 'Wonder Woman ', 'An Amazon princess leaves her island home to explore the world, \r\n\r\nand becomes the greatest of its female heroes.', 83, '7.jpg', 41),
(8, 1, 'X-Men: Apocalypse (2016)', 'With the emergence of the worlds first mutant, \r\n\r\nApocalypse, the X-Men must unite to defeat his extinction level plan.', 56, '8.jpg', 9.9),
(9, 1, 'Allegiant (2016)', 'After the earth-shattering revelations of Insurgent, Tris must \r\n\r\nescape with Four beyond the wall that encircles Chicago, to finally discover the \r\n\r\nshocking truth of the world around them', 45, '9.jpg', 16.99),
(10, 2, 'The Legend of Tarzan(2016)', 'Tarzan, having acclimated to life in London, is \r\n\r\ncalled back to his former home in the jungle to investigate the activities at a mining \r\n\r\nencampment.', 123, '10.jpg', 11),
(11, 2, 'Avengers: Age of Ultron (2015)', 'When Tony Stark and Bruce Banner try to \r\n\r\njump-start a dormant peacekeeping program called Ultron, things go horribly wrong \r\n\r\nand its up to Earths Mightiest Heroes to stop the villainous Ultron from enacting his \r\n\r\nterrible plans.', 76, '11.jpg', 12.21),
(12, 2, 'Alice Through the Looking Glass (2016)', 'Alice returns to the whimsical world of \r\n\r\nWonderland and travels back in time to save the Mad Hatter.', 45, '12.jpg', 21.43),
(13, 2, 'Midnight Special (2016)', 'A father and son go on the run, pursued by the \r\n\r\ngovernment and a cult drawn to the childs special powers.', 90, '13.jpg', 10.65),
(14, 2, 'Kung Fu Panda 3 (2016)', 'Continuing his "legendary adventures of \r\n\r\nawesomeness", Po must face two hugely epic, but different threats: one supernatural \r\n\r\nand the other a little closer to his home.', 123, '14.jpg', 7.54),
(15, 2, 'The 5th Wave (2016)', 'Four waves of increasingly deadly alien attacks have left \r\n\r\nmost of Earth decimated. Cassie is on the run, desperately trying to save her younger \r\n\r\nbrother.', 145, '15.jpg', 9.65),
(16, 2, 'The Huntsman: Winters War (2016)', 'As a war between rival queen sisters \r\n\r\nRavenna and Freya escalates, Eric and fellow warrior Sara, members of the Huntsmen \r\n\r\narmy raised to protect Freya, try to conceal their forbidden love as they combat \r\n\r\nRavennas wicked intentions.', 198, '16.jpg', 15.34),
(17, 2, 'Warcraft (2016)', 'The peaceful realm of Azeroth stands on the brink of war as its \r\n\r\ncivilization faces a fearsome race of invaders: orc warriors fleeing their dying home to \r\n\r\ncolonize another. As a portal opens to connect the two worlds, one army faces \r\n\r\ndestruction and the other faces extinction. From opposing sides, two heroes are set on \r\n\r\na collision course that will decide the fate of their family, their people, and their \r\n\r\nhome', 90, '17.jpg', 19.45),
(18, 2, 'The Revenant (2015)', 'A frontiersman on a fur trading expedition in the 1820s \r\n\r\nfights for survival after being mauled by a bear and left for dead by members of his \r\n\r\nown hunting team.', 67, '18.jpg', 21.78),
(19, 3, 'My Big Fat Greek Wedding 2 (2016)', 'A Portokalos family secret brings the beloved characters back together for an even bigger and Greeker wedding.', 67, '19.jpg', 21.78),
(20, 3, 'War Dogs (2016)', 'The true story of two young men, David Packouz and Efraim Diveroli, who won a $300 million contract from the Pentagon to arm Americas allies in Afghanistan.', 56, '20.jpg', 9),
(21, 3, 'The Big Short (2015)', 'Four denizens in the world of high-finance predict the credit and housing bubble collapse of the mid-2000s, and decide to take on the big banks for their greed and lack of foresight.', 78, '21.jpg', 12.34),
(22, 3, 'Natural Born Pranksters (2016)', 'YouTubes best pranksters, Roman Atwood, Vitaly Z, and Dennis Roady make the leap to the big screen.', 54, '22.jpg', 11.11),
(23, 3, 'Daddys Home (2015)', 'Stepdad, Brad Whitaker, is a radio host trying to get his stepchildren to love him and call him Dad. But his plans turn upside down when the biological father, Dusty Mayron, returns.', 87, '23.jpg', 9.99),
(24, 3, 'Get a Job (2016)', 'Life after college graduation is not exactly going as planned for Will and Jillian who find themselves lost in a sea of increasingly strange jobs. But with help from their family, friends and coworkers they soon discover that the most important (and hilarious) adventures are the ones that we dont see coming.', 123, '24.jpg', 21.12),
(25, 3, 'Hello, My Name Is Doris (2015)', 'A self-help seminar inspires a sixty-something woman to romantically pursue her younger co-worker.', 111, '25.jpg', 14.67),
(26, 3, 'Meet the Blacks (2016)', 'As Carl Black gets the opportunity to move his family out of Chicago in hope of a better life, their arrival in Beverly Hills is timed with that citys annual purge, where all crime is legal for twelve hours.', 98, '26.jpg', 14.56),
(27, 3, 'Bridget Joness Baby (2016)', 'The continuing adventures of British publishing executive Bridget Jones as she enters her 40s.', 90, '27.jpg', 17.89),
(28, 4, 'Sausage Party (2016)', 'An animated movie about one sausages quest to discover the truth about his existence.', 55, '28.jpg', 11.23),
(29, 4, 'Inside Out (2015)', 'After young Riley is uprooted from her Midwest life and moved to San Francisco, her emotions - Joy, Fear, Anger, Disgust and Sadness - conflict on how best to navigate a new city, house, and school.', 78, '29.jpg', 10.1),
(30, 4, 'The Good Dinosaur (2015)', 'In a world where dinosaurs and humans live side-by-side, an Apatosaurus named Arlo makes an unlikely human friend.', 67, '30.jpg', 14.56),
(31, 4, 'Finding Dory (2016)', 'The friendly-but-forgetful blue tang fish reunites with her loved ones, and everyone learns a few things about the real meaning of family along the way.', 78, '31.jpg', 8.89),
(32, 4, 'Norm of the North (2016)', 'When a real estate development invades his Arctic home, Norm and his three lemming friends head to New York City, where Norm becomes the mascot of the corporation in an attempt to bring it down from the inside and protect his homeland.', 67, '32.jpg', 12.45),
(33, 4, 'Ice Age: Collision Course (2016)', 'Scrats epic pursuit of his elusive acorn catapults him outside of Earth, where he accidentally sets off a series of cosmic events that transform and threaten the planet. To save themselves from peril, Manny, Sid, Diego, and the rest of the herd leave their home and embark on a quest full of thrills and spills, highs and lows, laughter and adventure while traveling to exotic new lands and encountering a host of colorful new characters as well as a new enemy who is a brother to one of their old foes.', 78, '33.jpg', 7.89),
(34, 4, 'Hotel Transylvania 2 (2015)', 'Dracula and his friends try to bring out the monster in his half human, half vampire grandson in order to keep Mavis from leaving the hotel.', 90, '34.jpg', 11.67),
(35, 4, 'Minions (2015)', 'Minions Stuart, Kevin and Bob are recruited by Scarlet Overkill, a super-villain who, alongside her inventor husband Herb, hatches a plot to take over the world.', 45, '35.jpg', 16.78),
(36, 4, 'Pixels (2015)', 'When aliens misinterpret video feeds of classic arcade games as a declaration of war, they attack the Earth in the form of the video games.', 93, '36.jpg', 18.78),
(37, 5, '10 Cloverfield Lane (2016)', 'After getting in a car accident, a woman is held in a shelter with two men, who claim the outside world is affected by a widespread chemical attack.', 67, '37.jpg', 14.45),
(38, 5, 'The Conjuring 2 (2016)', 'Lorraine and Ed Warren travel to north London to help a single mother raising four children alone in a house plagued by malicious spirits.', 78, '38.jpg', 16.56),
(39, 5, 'The Witch (2015)', 'A family in 1630s New England is torn apart by the forces of witchcraft, black magic and possession.', 91, '39.jpg', 15.45),
(40, 5, 'The Forest (2016)', 'A woman goes into Japans Suicide Forest to find her twin sister, and confronts supernatural terror.', 67, '40.jpg', 11.11),
(41, 5, 'Dead 7 (2016)', 'This is a post-apocalyptic Western that follows a group of gunslingers as they look to rid a small town of a zombie plague.', 57, '41.jpg', 12.14),
(42, 5, 'The Boy (2016)', 'An American nanny is shocked that her new English familys boy is actually a life-sized doll. After she violates a list of strict rules, disturbing events make her believe that the doll is really alive.', 89, '42.jpg', 16.67),
(43, 5, 'Green Room (2015)', 'After witnessing a murder, a punk rock band is forced into a vicious fight for survival against a group of maniacal skinheads.', 56, '43.jpg', 28),
(44, 5, 'The Girl in the Photographs (2015)', 'A bored young woman in a sleepy community called Spearfish starts receiving photographs of brutally murdered young women. Are they real or staged? The culprit is either a serial killer or some creep with a sick sense of humour.', 87, '44.jpg', 16.77),
(45, 5, 'Pride and Prejudice and Zombies (2016)', 'Five sisters in 19th century England must cope with the pressures to marry while protecting themselves from a growing population of zombies.', 56, '45.jpg', 9.99),
(46, 6, 'The Hateful Eight (2015)', 'In the dead of a Wyoming winter, a bounty hunter and his prisoner find shelter in a cabin currently inhabited by a collection of nefarious characters.', 66, '46.jpg', 12.11),
(47, 6, 'Sicario (2015)', 'An idealistic FBI agent is enlisted by a government task force to aid in the escalating war against drugs at the border area between the U.S. and Mexico.', 78, '47.jpg', 15.44),
(48, 6, 'Risen (2016)', 'In 33 AD, a Roman Tribune in Judea is tasked to find the missing body of an executed Jew rumored to have risen from the dead.', 67, '48.jpg', 18.66),
(49, 6, 'Ex Machina (2015)', 'A young programmer is selected to participate in a ground-breaking experiment in synthetic intelligence by evaluating the human qualities of a breath-taking humanoid A.I.', 89, '49.jpg', 15.22),
(50, 6, 'Criminal (2016)', 'In a last-ditch effort to stop a diabolical plot, a dead CIA operatives memories, secrets, and skills are implanted into a death-row inmate in hopes the he will complete the operatives mission.', 90, '50.jpg', 12.22),
(51, 6, 'Divergent (2014)', 'In a world divided by factions based on virtues, Tris learns shes Divergent and wont fit in. When she discovers a plot to destroy Divergents, Tris and the mysterious Four must find out what makes Divergents dangerous before its too late.', 56, '51.jpg', 8.99),
(52, 6, 'Gone Girl (2014)', 'With his wifes disappearance having become the focus of an intense media circus, a man sees the spotlight turned on him when its suspected that he may not be innocent.', 87, '52.jpg', 14.56),
(53, 6, 'Crimson Peak (2015)', 'In the aftermath of a family tragedy, an aspiring author is torn between love for her childhood friend and the temptation of a mysterious outsider. Trying to escape the ghosts of her past, she is swept away to a house that breathes, bleeds - and remembers.', 89, '53.jpg', 15.33),
(54, 6, 'Secret in Their Eyes (2015)', 'A tight-knit team of rising investigators, along with their supervisor, is suddenly torn apart when they discover that one of their own teenage daughters has been brutally murdered.', 123, '54.jpg', 17.88);
