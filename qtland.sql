-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 06, 2017 at 03:19 PM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qtland`
--

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE IF NOT EXISTS `fav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `feedback` text NOT NULL,
  `subject` varchar(1024) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`, `subject`, `date`) VALUES
(1, 'Ameen', 'ameen2@gmail.com', 'hi.... my nigga how is it going with the report', 'important', '2017-05-05'),
(9, 'osama hino', 'osama2016@gmail.com', 'mmm i think news would be a cool new feature to your website instead of going on facebook ...nvm well done dudes!!', 'features', '2017-05-06'),
(7, 'kamil', '222live@hotmail.com', 'smtimes 2dat bst choice kinda crashed , it shows 5 movies instead of 6 , whatever evry thang is cool , wish you have a comments sections', 'bug', '2017-05-06'),
(8, 'batatatat', 'ahmed@gmail.com', 'please add more TV Shows.i guess working on manga and anime on your next website would be nice :) ', 'TV Shows', '2017-05-06'),
(10, 'shadi asmer', 'shadi@gmail.com', 'cool ....but  my site is better hahaha ', 'ss', '2017-05-06'),
(11, 'sami ahmed', 'sami@hotmail.com', 'such an amazing website, with cool feature i love how when i searched for the movie the avengers i was able to find some cool picture....Luv ya!!', 'personal opinion', '2017-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `Fr_star`
--

CREATE TABLE IF NOT EXISTS `Fr_star` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate_id` varchar(40) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `rate` float NOT NULL,
  `rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `User_Id` int(50) NOT NULL AUTO_INCREMENT,
  `Password` varchar(1024) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`User_Id`),
  UNIQUE KEY `user_id` (`User_Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`User_Id`, `Password`, `Email`) VALUES
(17, 'aaa', 'ameen@hotmail.com'),
(19, '123', 'aa@gmail.com'),
(15, '333', 'soh@gmail.com'),
(14, '1230123', 'c@gmail.com'),
(13, 'legendsking', 'ceng.ahmed.kas@gmail.com'),
(22, '12345', 'aaa@hotmail.com'),
(21, '1234', 'ameen@gmail.com'),
(23, 'aaa', 'ss@gmail.c'),
(24, '123', 'ss@gmail.com'),
(25, '123', 'sam@gmail.com'),
(26, '123', 'samysamy@gmail.com'),
(27, '12', 'a@hotmail.com'),
(28, '123', 'z@gmail.com'),
(29, '1234', 'sami@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE IF NOT EXISTS `Movie` (
  `movie_id` int(50) NOT NULL AUTO_INCREMENT,
  `Movie_type` varchar(1024) NOT NULL,
  `Episodes` int(50) NOT NULL,
  `Director` varchar(1024) NOT NULL,
  `Age` varchar(1024) NOT NULL,
  `Starring` varchar(1024) NOT NULL,
  `Genre` varchar(1024) NOT NULL,
  `Running_Time` varchar(50) NOT NULL,
  `Budget` varchar(1024) NOT NULL,
  `Box_Office` bigint(255) NOT NULL,
  `Movie_Name` varchar(50) NOT NULL,
  `image` varchar(1024) NOT NULL,
  `synposis` longtext NOT NULL,
  `Rate` varchar(255) NOT NULL,
  `URL` varchar(50) NOT NULL,
  `wallpaper` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `Release_Date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`movie_id`, `Movie_type`, `Episodes`, `Director`, `Age`, `Starring`, `Genre`, `Running_Time`, `Budget`, `Box_Office`, `Movie_Name`, `image`, `synposis`, `Rate`, `URL`, `wallpaper`, `image1`, `image2`, `image3`, `image4`, `Release_Date`) VALUES
(0, 'movie', 1, 'Michael Bay', '13', 'Mark Wahlberg, Nicola Peltz, Jack Reynor ', 'Action', '165', '$210 million', 1104, 'Transformers: Age of Extinction', '1', 'After the battle between the Autobots and Decepticons that leveled Chicago, humanity thinks that all alien robots are a threat. So Harold Attinger, a CIA agent, establishes a unit whose sole purpose is to hunt down all of them. But it turns out that they are aided by another alien robot who is searching for Optimus Prime. Cade Yeager, a "robotics expert", buys an old truck and upon examining it, he thinks it''s a Transformer. When he powers it up, he discovers it''s Optimus Prime. Later, men from the unit show up looking for Optimus. He helps Yeager and his daughter Tessa escape but are pursued by the hunter. They escape and Yeager learns from technology he took from the men that a technology magnate and defense contractor named Joshua Joyce is part of what''s going on, so they go to find out what''s going on.', 'tt2109248', 'pbI980iUb78', 'images/movie_wallpaper/pbI980iUb78.jpg', 'images/movie_images/pbI980iUb781.jpg', 'images/movie_images/pbI980iUb782.jpg', 'images/movie_images/pbI980iUb783.jpg', 'images/movie_images/pbI980iUb784.jpg', '2014-06-27 07:00:00'),
(1, 'movie', 1, 'Christopher Nolan', '13', 'Christian Bale,Heath Ledger,Gary Oldman,Morgan Freeman', 'Action', '152', '$185 million', 1005, 'The Dark Knight', '1', 'Set within a year after the events of Batman Begins, Batman, Lieutenant James Gordon, and new district attorney Harvey Dent successfully begin to round up the criminals that plague Gotham City until a mysterious and sadistic criminal mastermind known only as the Joker appears in Gotham, creating a new wave of chaos. Batman''s struggle against the Joker becomes deeply personal, forcing him to "confront everything he believes" and improve his technology to stop him.', 'tt0468569', 'EXeTwQWrcwY', 'images/movie_wallpaper/EXeTwQWrcwY.jpg', 'images/movie_images/EXeTwQWrcwY1.jpg', 'images/movie_images/EXeTwQWrcwY2.jpg', 'images/movie_images/EXeTwQWrcwY3.jpg', 'images/movie_images/EXeTwQWrcwY4.jpg', '2008-07-14 07:00:00'),
(2, 'movie', 1, 'Justin Lin', '13', 'Vin Diesel ,Paul Walker ,Dwayne Johnson ,Michelle Rodriguez', 'Action', '130', '$160 million', 788, 'Fast & Furious 6', '1', 'Since Dom (Diesel) and Brian''s (Walker) Rio heist toppled a kingpin''s empire and left their crew with $100 million, our heroes have scattered across the globe. But their inability to return home and living forever on the lam have left their lives incomplete. Meanwhile, Hobbs (Johnson) has been tracking an organization of lethally skilled mercenary drivers across 12 countries, whose mastermind (Evans) is aided by a ruthless second-in-command revealed to be the love Dom thought was dead, Letty (Rodriguez). The only way to stop the criminal outfit is to outmatch them at street level, so Hobbs asks Dom to assemble his elite team in London. Payment? Full pardons for all of them so they can return home and make their families whole again', 'tt1905041', 'dKi5XoeTN0k', 'images/movie_wallpaper/dKi5XoeTN0k.jpg', 'images/movie_images/dKi5XoeTN0k1.jpg', 'images/movie_images/dKi5XoeTN0k2.jpg', 'images/movie_images/dKi5XoeTN0k3.jpg', 'images/movie_images/dKi5XoeTN0k4.jpg', '2013-05-07 07:00:00'),
(3, 'movie', 1, 'James Cameron', '13', 'Sam Worthington ,Zoe Saldana ,Stephen Lang ,Michelle Rodriguez', 'Sci Fi', '161', '$237 million', 2788, 'Avatar', '1', 'When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora. There he learns of greedy corporate figurehead Parker Selfridge''s intentions of driving off the native humanoid "Na''vi" in order to mine for the precious material scattered throughout their rich woodland. In exchange for the spinal surgery that will fix his legs, Jake gathers intel for the cooperating military unit spearheaded by gung-ho Colonel Quaritch, while simultaneously attempting to infiltrate the Na''vi people with the use of an "avatar" identity. While Jake begins to bond with the native tribe and quickly falls in love with the beautiful alien Neytiri, the restless Colonel moves forward with his ruthless extermination tactics, forcing the soldier to take a stand - and fight back in an epic battle for the fate of Pandora.', 'tt0499549', '5PSNL1qE6VY', 'images/movie_wallpaper/5PSNL1qE6VY.jpg', 'images/movie_images/5PSNL1qE6VY1.jpg', 'images/movie_images/5PSNL1qE6VY2.jpg', 'images/movie_images/5PSNL1qE6VY3.jpg', 'images/movie_images/5PSNL1qE6VY4.jpg', '2009-12-10 07:00:00'),
(4, 'movie', 1, 'Gore Verbinski', '13', 'Johnny Depp ,Orlando Bloom ,Keira Knightley', 'Adventure', '150 ', '$225 million', 1066, 'Pirates of the Caribbean: Dead Man''s Chest', '1', 'Once again we''re plunged into the world of sword fights and "savvy" pirates. Captain Jack Sparrow is reminded he owes a debt to Davy Jones, who captains the flying Dutchman, a ghostly ship, with a crew from hell. Facing the "locker" Jack must find the heart of Davy Jones but to save himself he must get the help of quick-witted Will Turner and Elizabeth Swan. If that''s not complicated enough, Will and Elizabeth are sentenced to hang, unless will can get Lord Cutler Beckett Jack''s compass, Will is forced to join another crazy adventure with Jack.', 'tt0383574', 'MzIEHvsb1gU', 'images/movie_wallpaper/ozk0-RHXtFw&t.jpg', 'images/movie_images/ozk0-RHXtFw&t1.jpg', 'images/movie_images/ozk0-RHXtFw&t2.jpg', 'images/movie_images/ozk0-RHXtFw&t3.jpg', 'images/movie_images/ozk0-RHXtFw&t4.jpg', '2006-06-24 07:00:00'),
(5, 'movie', 1, 'J. J. Abrams', '13', 'Harrison Ford ,Mark Hamill ,Carrie Fisher ,Adam Driver, Daisy Ridley', 'Action', '136 ', '$306 million', 2068, 'Star Wars: The Force Awakens', '1', '30 years after the defeat of Darth Vader and the Empire, Rey, a scavenger from the planet Jakku, finds a BB-8 droid that knows the whereabouts of the long lost Luke Skywalker. Rey, as well as a rogue stormtrooper and two smugglers, are thrown into the middle of a battle between the Resistance and the daunting legions of the First Order.', 'tt2488496', 'sGbxmsDFVnE', 'images/movie_wallpaper/sGbxmsDFVnE.jpg', 'images/movie_images/sGbxmsDFVnE1.jpg', 'images/movie_images/sGbxmsDFVnE2.jpg', 'images/movie_images/sGbxmsDFVnE3.jpg', 'images/movie_images/sGbxmsDFVnE4.jpg', '2015-12-14 07:00:00'),
(69, 'movie', 1, 'Christopher Nolan', '13', 'Leonardo DiCaprio,Joseph Gordon-Levitt,Ellen Page ', 'Action', '148', '$160 million', 825, 'Inception', '1', 'Dom Cobb is a skilled thief, the absolute best in the dangerous art of extraction, stealing valuable secrets from deep within the subconscious during the dream state, when the mind is at its most vulnerable. Cobb''s rare ability has made him a coveted player in this treacherous new world of corporate espionage, but it has also made him an international fugitive and cost him everything he has ever loved. Now Cobb is being offered a chance at redemption. One last job could give him his life back but only if he can accomplish the impossible - inception. Instead of the perfect heist, Cobb and his team of specialists have to pull off the reverse: their task is not to steal an idea but to plant one. If they succeed, it could be the perfect crime. But no amount of careful planning or expertise can prepare the team for the dangerous enemy that seems to predict their every move. An enemy that only Cobb could have seen coming.', 'tt1375666', '8hP9D6kZseM', 'images/movie_wallpaper/8hP9D6kZseM.jpg', 'images/movie_images/8hP9D6kZseM1.jpg', 'images/movie_images/8hP9D6kZseM2.jpg', 'images/movie_images/8hP9D6kZseM3.jpg', 'images/movie_images/8hP9D6kZseM4.jpg', '2010-07-16 07:00:00'),
(7, 'movie', 1, 'Joss Whedon', '13', 'Robert Downey Jr.,Chris Evans, Scarlett Johansson,Chris Hemsworth,Samuel L. Jackson', 'Action', '143', '$220 million', 1519, 'The Avengers', '1', 'Nick Fury is the director of S.H.I.E.L.D., an international peace-keeping agency. The agency is a who''s who of Marvel Super Heroes, with Iron Man, The Incredible Hulk, Thor, Captain America, Hawkeye and Black Widow. When global security is threatened by Loki and his cohorts, Nick Fury and his team will need all their powers to save the world from disaster.', 'tt0848228', 'eOrNdBpGMv8', 'images/movie_wallpaper/eOrNdBpGMv8.jpg', 'images/movie_images/eOrNdBpGMv81.jpg', 'images/movie_images/eOrNdBpGMv82.jpg', 'images/movie_images/eOrNdBpGMv83.jpg', 'images/movie_images/eOrNdBpGMv84.jpg', '2012-04-11 07:00:00'),
(8, 'movie', 1, 'Bill Condon', '13', 'Emma Watson, Dan Stevens, Luke Evans', 'Fantasy', '129 ', '$160 million', 1105, 'Beauty and the Beast', '1', 'Disney''s animated classic takes on a new form, with a widened mythology and an all-star cast. A young prince, imprisoned in the form of a beast, can be freed only by true love. What may be his only opportunity arrives when he meets Belle, the only human girl to ever visit the castle since it was enchanted.', 'tt2771200', 'OvW_L8sTu5E', 'images/movie_wallpaper/OvW_L8sTu5E.jpg', 'images/movie_images/OvW_L8sTu5E1.jpg', 'images/movie_images/OvW_L8sTu5E2.jpg', 'images/movie_images/OvW_L8sTu5E3.jpg', 'images/movie_images/OvW_L8sTu5E4.jpg', '2017-02-23 07:00:00'),
(9, 'movie', 1, 'James Mangold', '17', 'Hugh Jackman, Patrick Stewart, Dafne Keen ', 'Fantasy', '137', '$97 million', 604, 'Logan', '1', 'In 2029 the mutant population has shrunken significantly and the X-Men have disbanded. Logan, whose power to self-heal is dwindling, has surrendered himself to alcohol and now earns a living as a chauffeur. He takes care of the ailing old Professor X whom he keeps hidden away. One day, a female stranger asks Logan to drive a girl named Laura to the Canadian border. At first he refuses, but the Professor has been waiting for a long time for her to appear. Laura possesses an extraordinary fighting prowess and is in many ways like Wolverine. She is pursued by sinister figures working for a powerful corporation; this is because her DNA contains the secret that connects her to Logan. A relentless pursuit begins - In this third cinematic outing featuring the Marvel comic book character Wolverine we see the superheroes beset by everyday problems. They are aging, ailing and struggling to survive financially. A decrepit Logan is forced to ask himself if he can or even wants to put his ...', 'tt3315342', 'Div0iP65aZo', 'images/movie_wallpaper/Div0iP65aZo.jpg', 'images/movie_images/Div0iP65aZo1.jpg', 'images/movie_images/Div0iP65aZo2.jpg', 'images/movie_images/Div0iP65aZo3.jpg', 'images/movie_images/Div0iP65aZo4.jpg', '2017-02-17 07:00:00'),
(10, 'movie', 1, 'Tom McGrath', '13', 'Alec Baldwin, Steve Buscemi, Jimmy Kimmel ', 'Comedy', '98', '$125 million', 369, 'The Boss Baby', '1', 'A new baby''s arrival impacts a family, told from the point of view of a delightfully unreliable narrator -- a wildly imaginative 7-year-old named Tim. The most unusual Boss Baby (Alec Baldwin) arrives at Tim''s home in a taxi, wearing a suit and carrying a briefcase. The instant sibling rivalry must soon be put aside when Tim discovers that Boss Baby is actually a spy on a secret mission, and only he can help thwart a dastardly plot that involves an epic battle between puppies and babies.', 'tt3874544', 'k397HRbTtWI', 'images/movie_wallpaper/k397HRbTtWI.jpg', 'images/movie_images/k397HRbTtWI1.jpg', 'images/movie_images/k397HRbTtWI2.jpg', 'images/movie_images/k397HRbTtWI3.jpg', 'images/movie_images/k397HRbTtWI4.jpg', '2017-03-12 07:00:00'),
(11, 'movie', 1, 'F. Gary Gray', '13', 'Vin Diesel, Jason Statham, Dwayne Johnson ', 'Action', '136', '$250 million', 967, 'The Fate of the Furious', '1', 'Now that Dom and Letty are on their honeymoon and Brian and Mia have retired from the game-and the rest of the crew has been exonerated-the globetrotting team has found a semblance of a normal life. But when a mysterious woman seduces Dom into the world of crime he can''t seem to escape and a betrayal of those closest to him, they will face trials that will test them as never before. From the shores of Cuba and the streets of New York City to the icy plains off the arctic Barents Sea, the elite force will crisscross the globe to stop an anarchist from unleashing chaos on the world''s stage... and to bring home the man who made them a family.', 'tt4630562', 'uisBaTkQAEs', 'images/movie_wallpaper/uisBaTkQAEs.jpg', 'images/movie_images/uisBaTkQAEs1.jpg', 'images/movie_images/uisBaTkQAEs2.jpg', 'images/movie_images/uisBaTkQAEs3.jpg', 'images/movie_images/uisBaTkQAEs4.jpg', '2017-04-04 07:00:00'),
(12, 'movie', 1, 'Chad Stahelski', '17', 'Keanu Reeves,Riccardo Scamarcio,Ian McShane ', 'Thriller', '122', '$40 million', 164, 'John Wick: Chapter 2', '1', 'About four days after the events of the first film,[4] former assassin John Wick tracks down his stolen 1969 Ford Mustang Mach 1 at a chop shop owned by Abram Tarasov, brother of Viggo and uncle of Iosef. John dispatches Tarasov''s men in a violent fight that heavily damages his car. He then spares Tarasov under the auspices of peace and returns home.\n\nAfter Aurelio takes John''s Mustang for repairs, John is visited by Italian crime lord Santino D''Antonio. It is revealed that to complete his "impossible task"—which allowed him to retire and marry Helen—John asked D''Antonio for help. As a form of contract, D''Antonio swore John to a "Marker", an unbreakable promise symbolized by a "blood oath" medallion.[5] D''Antonio presents the medallion to demand services from John, but John refuses, claiming that he is "retired". In retaliation, D''Antonio destroys John''s house with a grenade launcher.', 'tt4425200', 'XGk2EfbD_Ps', 'images/movie_wallpaper/XGk2EfbD_Ps.jpg', 'images/movie_images/XGk2EfbD_Ps1.jpg', 'images/movie_images/XGk2EfbD_Ps2.jpg', 'images/movie_images/XGk2EfbD_Ps3.jpg', 'images/movie_images/XGk2EfbD_Ps4.jpg', '2017-02-10 07:00:00'),
(13, 'movie', 1, 'Kelly Asbury', '13', 'Demi Lovato,Rainn Wilson,Joe Manganiello ', 'Comedy', '90', '$60 million', 136, 'Smurfs: The Lost Village', '1', 'In this fully animated, all-new take on the Smurfs, a mysterious map sets Smurfette and her best friends Brainy, Clumsy and Hefty on an exciting and thrilling race through the Forbidden Forest filled with magical creatures to find a mysterious lost village before the evil wizard Gargamel does. Embarking on a roller-coaster journey full of action and danger, the Smurfs are on a course that leads to the discovery of the biggest secret in Smurf history!', 'tt2398241', '8LdpyRBE0aA', 'images/movie_wallpaper/8LdpyRBE0aA.jpg', 'images/movie_images/8LdpyRBE0aA1.jpg', 'images/movie_images/8LdpyRBE0aA2.jpg', 'images/movie_images/8LdpyRBE0aA3.jpg', 'images/movie_images/8LdpyRBE0aA4.jpg', '2017-04-07 07:00:00'),
(14, 'TV Show', 1, 'Kelly Asbury', '13', 'Daniel Radcliffe, Emma Watson, Rupert Grint', 'Adventure', '130', '$250 million', 1342, 'Harry Potter and the Deathly Hallows: Part 2', '1', 'Harry, Ron, and Hermione continue their quest of finding and destroying the Dark Lord''s three remaining Horcruxes, the magical items responsible for his immortality. But as the mystical Deathly Hallows are uncovered, and Voldemort finds out about their mission, the biggest battle begins and life as they know it will never be the same again.', 'tt1201607', 'mObK5XD8udk', 'images/movie_wallpaper/mObK5XD8udk.jpg', 'images/movie_images/mObK5XD8udk1.jpg', 'images/movie_images/mObK5XD8udk2.jpg', 'images/movie_images/mObK5XD8udk3.jpg', 'images/movie_images/mObK5XD8udk4.jpg', '2011-07-07 07:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
