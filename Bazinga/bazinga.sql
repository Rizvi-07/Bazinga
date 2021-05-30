-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 05:58 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazinga`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `movie_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `MovieName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`movie_id`, `category`, `MovieName`) VALUES
(1, 'Romantic', 'The Notebook'),
(2, 'Crime', 'The Godfather'),
(3, 'Action', 'Baby Driver'),
(4, 'Action', 'Dunkirk'),
(4, 'Drama', 'Dunkirk'),
(5, 'Drama', '21'),
(5, 'Thriller', '21'),
(6, 'Drama', 'The Glass Castle'),
(7, 'Horror', 'IT'),
(8, 'Animation', 'The LEGO Ninjago'),
(9, 'Drama', '9/11'),
(10, 'Romantic', 'Home Again'),
(11, 'Animation', 'The Nut Job 2'),
(12, 'Animation', 'The Emoji Movie'),
(14, 'Horror', 'Wish Upon'),
(15, 'Romantic', 'The Big Sick');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `MovieName` varchar(50) NOT NULL,
  `Writers` varchar(500) NOT NULL,
  `ReleaseDate` date NOT NULL,
  `Thumbnil` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Rating` double NOT NULL,
  `Stars` varchar(100) NOT NULL,
  `Plot` varchar(500) NOT NULL,
  `Director` varchar(100) NOT NULL,
  `income` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `MovieName`, `Writers`, `ReleaseDate`, `Thumbnil`, `Category`, `Rating`, `Stars`, `Plot`, `Director`, `income`) VALUES
(1, 'The Notebook', ' Jeremy Leven (screenplay), Jan Sardi (adaptation)', '2004-06-24', 'img/notebook.jpg', 'Romantic', 7.9, ' Gena Rowlands, James Garner, Rachel McAdams', 'A poor yet passionate young man falls in love with a rich young woman, giving her a sense of freedom, but they are soon separated because of their social differences.', 'Nick Cassavetes', 0),
(2, 'The Godfather', 'Mario Puzo (screenplay), Francis Ford Coppola (screenplay)', '1972-08-24', 'img/father.jpg', 'Thriller,Crime,Drama', 9.2, 'Marlon Brando, Al Pacino, James Caan', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'Francis Ford Coppola', 0),
(3, 'Baby Driver', 'Edgar Wright', '2017-06-18', 'baby.jpg', ' Action', 8.2, ' Ansel Elgort, Jon Bernthal, Jon Hamm | See full cast & crew', 'After being coerced into working for a crime boss, a young getaway driver finds himself taking part in a heist doomed to fail.', ' Edgar Wright', 18.9),
(4, 'Dunkirk (2017)', ' Christopher Nolan', '2017-07-28', 'dunkirk.jpg', ' Action, Drama, History', 8.5, ' Fionn Whitehead, Damien Bonnard, Aneurin Barnard | See full cast & crew', 'Allied soldiers from Belgium, the British Empire and France are surrounded by the German army and evacuated during a fierce battle in World War II.', ' Christopher Nolan', 28.4),
(5, '21 (2017)', ' Peter Steinfeld (screenplay), Allan Loeb (screenplay) ', '2017-08-30', '21.jpg', 'Crime, Drama, Thriller', 6.8, ' Jim Sturgess, Kate Bosworth, Kevin Spacey', '"21" is the fact-based story about six MIT students who were trained to become experts in card counting and subsequently took Vegas casinos for millions in winnings.', 'Robert Luketic', 0),
(6, 'The Glass Castle', '		\r\nDestin Daniel Cretton,\r\nAndrew Lanham', '2017-08-11', 'img/glass.png', 'Drama', 0, '	\r\nBrie Larson\r\nWoody Harrelson,\r\nMax Greenfield,', 'The film is based on Jeannette Walls\'s 2005 memoir of the same name, and is written by Cretton, Andrew Lanham, and Marti Noxon.', '	Destin Daniel Cretton', 0),
(7, 'IT', 'Chase Palmer,\r\nCary Fukunaga', '2017-07-28', 'img/it.jpg', 'Horror', 0, '	\r\nBill Skarsgård,\r\nJaeden Lieberher,\r\nJeremy Ray Taylor', 'In Derry, Maine, seven friends come face-to-face with a shape shifter, who takes the form of an evil clown who targets children.', '	Andrés Muschietti', 0),
(8, 'The LEGO Ninjago', ' Hilary Winston (screenplay), Bob Logan (screenplay)', '2017-09-22', 'img/lego.jpg', 'Animation ', 0, 'Olivia Munn, Justin Theroux, Kumail Nanjiani ', 'Six young ninjas Lloyd, Jay, Kai, Cole, Zane and Nya are tasked with defending their island home, called Ninjago. By night, they\'re gifted warriors, using their skills and awesome fleet of vehicles to fight villains and monsters.', ' Charlie Bean, Paul Fisher', 0),
(9, ' 9/11', 'Patrick James Carson ', '2017-08-25', 'img/nine.jpg', 'Drama', 0, ' Charlie Sheen, Whoopi Goldberg, Gina Gershon', 'A group of 5 people find themselves trapped in an elevator in the World Trade Center\'s North Tower on 9/11. They work together, never giving up hope, to try to escape before the unthinkable happens.', 'Martin Guigui', 0),
(10, 'Home Again', 'Hallie Meyers-Shyer', '2017-08-18', 'img/again.jpg', 'Romantic', 0, ' Reese Witherspoon, Lake Bell, Michael Sheen', 'ife for a single mom in Los Angeles takes an unexpected turn when she allows three young guys to move in with her.', 'Hallie Meyers-Shyer', 0),
(11, 'The Nut Job 2', 'Bob Barlen, Cal Brunker', '2017-08-25', 'img/nut.jpg', 'Animation', 0, ' Will Arnett, Katherine Heigl, Maya Rudolph ', 'Following the events of the first film, Surly and his friends must stop Oakton City\'s mayor from destroying their home to make way for a dysfunctional amusement park.', ' Cal Brunker', 0),
(12, 'The Emoji Movie', 'Tony Leondis (screenplay), Eric Siegel (screenplay)', '2017-07-23', 'img/emo.jpg', 'Animation', 2.4, ' T.J. Miller, James Corden, Anna Faris ', 'Gene, a multi-expressional emoji, sets out on a journey to become a normal emoji.', 'Tony Leondis', 0.95),
(13, ' War for the Planet of the Apes ', 'Mark Bomback, Matt Reeves', '2017-07-14', 'img/apes.jpg', 'Drama', 8, 'Andy Serkis, Woody Harrelson, Steve Zahn ', 'After the apes suffer unimaginable losses, Caesar wrestles with his darker instincts and begins his own mythic quest to avenge his kind.', ' Matt Reeves', 16.7),
(14, 'Wish Upon ', 'Barbara Marshall', '2017-07-14', 'img/wish.jpg', 'Horror', 4.5, ' Joey King, Ryan Phillippe, Ki Hong Lee', 'A teenage girl discovers a box that carries magic powers and a deadly price for using them.', 'John R. Leonetti', 1.2),
(15, 'The Big Sick', ' Emily V. Gordon, Kumail Nanjiani', '2017-06-23', 'img/sick.jpg', 'Romantic', 8.1, ' Kumail Nanjiani, Zoe Kazan, Holly Hunter', 'A couple deals with their cultural differences as their relationship grows.', 'Michael Showalter', 11.23),
(16, 'lord of the rings', 'dfdf', '2017-08-31', 'baby.jpg', 'drama', 8.5, 'dfdr', 'drfff', 'ddd', 2.3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(20) NOT NULL,
  `UserId` varchar(20) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `UserId`, `Email`, `Password`, `LastName`) VALUES
('Oishee', 'bintu3003', 'bintu3003@gmail.com', 'nushin123', ''),
('Maisha Bintey Rashid', 'maisha101', 'maisha3003@gmail.com', 'nushin123', '');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `movie_id` int(11) NOT NULL,
  `UserId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`movie_id`, `UserId`) VALUES
(3, 'bintu3003'),
(1, 'maisha101');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `movie_id` int(11) NOT NULL,
  `UserId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`movie_id`, `UserId`) VALUES
(1, 'bintu3003'),
(2, 'bintu3003'),
(3, 'bintu3003'),
(4, 'bintu3003'),
(1, 'maisha101'),
(7, 'maisha101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`movie_id`,`category`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`movie_id`,`UserId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`movie_id`,`UserId`),
  ADD KEY `UserId` (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);

--
-- Constraints for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `watchlist_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
