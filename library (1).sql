-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2023 at 07:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(1, 'George Orwell'),
(2, 'William Shakespeare'),
(3, 'Mark Twain'),
(4, 'Ernest Hemingway'),
(5, 'F. Scott Fitzgerald'),
(6, 'Stephen King'),
(7, 'Charles Dickens'),
(8, 'Jane Austen'),
(9, 'Herman Melville'),
(10, 'J. R. R. Tolkien'),
(11, 'J. K. Rowling'),
(12, 'Leo Tolstoy'),
(13, 'Edgar Allan Poe'),
(14, 'Fyodor Dostoevsky');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(20) DEFAULT NULL,
  `no_of_copies` int(11) DEFAULT NULL,
  `author_no` int(11) DEFAULT NULL,
  `publisher_no` int(11) DEFAULT NULL,
  `cat_no` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `no_of_copies`, `author_no`, `publisher_no`, `cat_no`) VALUES
(1, 'Kill Mocking', 4, 1, 1, 10),
(2, 'The Great Gatsby', 4, 2, 2, 10),
(3, 'The Lord of the Ring', 6, 3, 3, 10),
(4, 'Nineteen Eighty-Four', 7, 4, 4, 10),
(5, 'The Catcher in the R', 10, 5, 5, 10),
(6, 'Great Expectations', 1, 6, 6, 10),
(7, 'Jane Eyre', 4, 7, 7, 10),
(8, 'Pride and Prejudice', 9, 8, 8, 10),
(9, 'Wuthering Heights', 8, 9, 9, 10),
(10, 'War and Peace', 12, 10, 10, 10),
(11, 'Don Quixote', 15, 14, 10, 10),
(12, 'the Elegant Universe', 2, 10, 5, 2),
(13, 'A Brief History of T', 5, 8, 8, 2),
(14, 'The Order of Time', 4, 2, 1, 2),
(15, 'Clean Code', 20, 1, 9, 3),
(16, 'Code Complete', 5, 3, 3, 3),
(17, 'The Pragmatic Progra', 2, 8, 10, 3),
(18, 'Introduction to Algo', 5, 3, 2, 3),
(19, 'Frankenstein', 20, 8, 7, 5),
(20, 'Hyperion', 10, 9, 1, 5),
(21, 'Programming Pearls', 2, 9, 1, 3),
(22, 'Design Patterns', 2, 9, 1, 3),
(23, 'Dune', 2, 9, 1, 5),
(24, 'Python Crash Course', 2, 9, 1, 3),
(25, 'Nineteen Eighty-Four', 22, 1, 10, 5),
(26, 'The Time Machine', 30, 3, 5, 5),
(27, 'Neuromancer', 101, 5, 2, 5),
(29, 'compiler ', 2, 2, 1, 3),
(30, 'compiler design', 2, 2, 1, 3),
(31, 'power of now', 5, 4, 2, 6),
(33, 'physics', 10, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Maths'),
(2, 'Physics'),
(3, 'Programming'),
(4, 'Electronics'),
(5, 'Sci-fi'),
(6, 'computer scienc'),
(7, 'archticeture'),
(8, 'Electrical'),
(9, 'Marketing'),
(10, 'novels');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `emp_fn` varchar(20) DEFAULT NULL,
  `emp_ln` varchar(20) DEFAULT NULL,
  `emp_pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_fn`, `emp_ln`, `emp_pass`) VALUES
(1, 'Ahmed', 'Ali', 'ahmedali@1'),
(2, 'mohamed', 'mahmoud', 'mohamed#12#'),
(3, 'mariam', 'galal', 'mariam1234'),
(4, 'yassin', 'mohamed', 'yassin@@'),
(5, 'hamza', 'ahmed', 'ahmedhamza'),
(6, 'karim', 'hamdy', 'karim1234'),
(7, 'rahma', 'mohamed', 'rah5620ma'),
(8, 'khaled', 'mahmoud', 'immortal8'),
(9, 'kasem', 'ahmed', 'ahmed0101');

-- --------------------------------------------------------

--
-- Stand-in structure for view `employees_info`
-- (See below for the actual view)
--
CREATE TABLE `employees_info` (
`emp_id` int(11)
,`emp_fn` varchar(20)
,`emp_ln` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `publisher_name`) VALUES
(1, 'HarperCollins'),
(2, 'Simon & Schuster'),
(3, 'Macmillan Publishers'),
(4, 'Random House'),
(5, 'Penguin Random House'),
(6, 'Wiley'),
(7, 'Oxford University Press'),
(8, 'Hachette Book Group'),
(9, 'Scholastic'),
(10, 'Pearson');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stu_id` int(11) NOT NULL,
  `stu_fn` varchar(20) DEFAULT NULL,
  `stu_ln` varchar(20) DEFAULT NULL,
  `book_limit` int(2) DEFAULT NULL,
  `day_limit` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_id`, `stu_fn`, `stu_ln`, `book_limit`, `day_limit`) VALUES
(1, 'Mohamed', 'Ahmed', 8, 9),
(2, 'Jane', 'Smith', 9, 10),
(3, 'David', 'Lee', 9, 10),
(4, 'Emily', 'Wang', 9, 10),
(5, 'Michael', 'Nguyen', 9, 10),
(6, 'Samantha', 'Brown', 9, 10),
(7, 'William', 'Garcia', 9, 10),
(8, 'Olivia', 'Kim', 9, 10),
(9, 'Christopher', 'Chen', 9, 10),
(10, 'Sophia', 'Lee', 9, 10),
(11, 'Daniel', 'Nguyen', 9, 10),
(12, 'Mia', 'Wong', 9, 10),
(13, 'Ethan', 'Gonzalez', 9, 10),
(14, 'Isabella', 'Choi', 9, 10),
(15, 'Alexander', 'Park', 9, 10),
(16, 'Ava', 'Kim', 9, 10),
(17, 'Ryan', 'Liu', 9, 10),
(18, 'Emma', 'Zhang', 9, 10),
(19, 'Jacob', 'Wu', 9, 10),
(20, 'Megan', 'Tran', 9, 10),
(21, 'Lucas', 'Garcia', 9, 10),
(22, 'Chloe', 'Chen', 9, 10),
(23, 'Joshua', 'Wang', 9, 10),
(24, 'Madison', 'Li', 9, 10),
(25, 'Ethan', 'Kim', 9, 10),
(26, 'Grace', 'Nguyen', 9, 10),
(27, 'Nicholas', 'Lee', 9, 10),
(28, 'Victoria', 'Chung', 9, 10),
(29, 'Andrew', 'Wu', 9, 10),
(30, 'Natalie', 'Kang', 9, 10),
(31, 'Christopher', 'Choi', 9, 10),
(32, 'Avery', 'Wong', 9, 10),
(33, 'Benjamin', 'Tran', 9, 10),
(34, 'Hannah', 'Park', 9, 10),
(35, 'William', 'Zhang', 9, 10),
(36, 'Lily', 'Liu', 9, 10),
(37, 'Samuel', 'Chang', 9, 10),
(38, 'Aria', 'Hwang', 9, 10),
(39, 'Jacob', 'Kang', 9, 10),
(40, 'Sophia', 'Shin', 9, 10),
(41, 'ahmed', 'ahmed', 9, 10),
(42, 'mohamed', 'ali', 9, 10),
(43, 'dnllksxdl', 'hshs', 8, 10),
(44, 'walid', 'marwan', 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `stu_borrow`
--

CREATE TABLE `stu_borrow` (
  `book_no` int(11) DEFAULT NULL,
  `stu_no` int(11) DEFAULT NULL,
  `emp_no` int(11) DEFAULT NULL,
  `start_borrow_date` date DEFAULT NULL,
  `exp_retrieve_date` date DEFAULT NULL,
  `act_retrieve_date` date DEFAULT NULL,
  `fine_amount` int(11) DEFAULT NULL,
  `no_of_borrowed_books` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stu_borrow`
--

INSERT INTO `stu_borrow` (`book_no`, `stu_no`, `emp_no`, `start_borrow_date`, `exp_retrieve_date`, `act_retrieve_date`, `fine_amount`, `no_of_borrowed_books`) VALUES
(10, 30, 1, '2023-05-01', '2023-05-15', '2023-05-14', 0, 4),
(11, 31, 3, '2023-05-19', '2023-06-05', '2023-06-09', 30, 5),
(12, 32, 6, '2023-05-03', '2023-05-17', '2023-05-17', 5, 2),
(13, 33, 5, '2023-05-18', '2023-06-04', '2023-06-08', 50, 1),
(14, 34, 8, '2023-05-05', '2023-05-19', '2023-05-19', 5, 2),
(15, 35, 9, '2023-05-15', '2023-06-01', '2023-06-05', 50, 1),
(16, 36, 2, '2023-05-16', '2023-06-02', '2023-06-03', 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teach_id` int(11) NOT NULL,
  `teach_fn` varchar(20) DEFAULT NULL,
  `teach_ln` varchar(20) DEFAULT NULL,
  `book_limit` int(2) DEFAULT NULL,
  `day_limit` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teach_id`, `teach_fn`, `teach_ln`, `book_limit`, `day_limit`) VALUES
(1, 'Ahmed', 'Elshafie', 4, 6),
(2, 'Bassam', 'Wasfy', 4, 2),
(3, 'Liam', 'Wang', 5, 7),
(4, 'Emma', 'Nguyen', 5, 7),
(5, 'William', 'Kim', 5, 7),
(6, 'Ava', 'Tran', 5, 7),
(7, 'Benjamin', 'Chang', 5, 7),
(8, 'Isabella', 'Lee', 5, 7),
(9, 'Mason', 'Choi', 5, 7),
(10, 'Mia', 'Wong', 5, 7),
(11, 'James', 'Zhang', 5, 7),
(12, 'Evelyn', 'Liu', 5, 7),
(13, 'Ethan', 'Chung', 5, 7),
(14, 'Charlotte', 'Kang', 5, 7),
(15, 'Alexander', 'Shin', 5, 7),
(16, 'Amelia', 'Li', 5, 7),
(17, 'Michael', 'Hernandez', 5, 7),
(18, 'Abigail', 'Huang', 5, 7),
(19, 'Daniel', 'Song', 5, 7),
(20, 'Elizabeth', 'Park', 5, 7),
(21, 'Matthew', 'Kim', 5, 7),
(22, 'Chloe', 'Hwang', 5, 7),
(23, 'Lucas', 'Nguyen', 5, 7),
(24, 'Harper', 'Tran', 5, 7),
(25, 'Jackson', 'Choi', 5, 7),
(26, 'Avery', 'Wong', 5, 7),
(27, 'Ella', 'Chang', 5, 7),
(28, 'Sebastian', 'Lee', 5, 7),
(29, 'Mila', 'Wu', 5, 7),
(30, 'David', 'Kang', 5, 7),
(31, 'Sofia', 'Shin', 5, 7),
(32, 'Joseph', 'Li', 5, 7),
(33, 'Aria', 'Garcia', 5, 7),
(34, 'Madison', 'Chen', 5, 7),
(35, 'Elijah', 'Wang', 5, 7),
(36, 'Scarlett', 'Nguyen', 5, 7),
(37, 'Oliver', 'Kim', 5, 7),
(38, 'Camila', 'Tran', 5, 7),
(39, 'Logan', 'Chang', 5, 7),
(40, 'Luna', 'Lee', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `teach_borrow`
--

CREATE TABLE `teach_borrow` (
  `book_no` int(11) DEFAULT NULL,
  `teach_no` int(11) DEFAULT NULL,
  `emp_no` int(11) DEFAULT NULL,
  `start_borrow_date` date DEFAULT NULL,
  `exp_retrieve_date` date DEFAULT NULL,
  `act_retrieve_date` date DEFAULT NULL,
  `fine_amount` int(11) DEFAULT NULL,
  `no_of_borrowed_books` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teach_borrow`
--

INSERT INTO `teach_borrow` (`book_no`, `teach_no`, `emp_no`, `start_borrow_date`, `exp_retrieve_date`, `act_retrieve_date`, `fine_amount`, `no_of_borrowed_books`) VALUES
(5, 20, 9, '2023-05-02', '2023-05-09', '2023-05-11', 100, 2),
(4, 2, 8, '2023-06-02', '2023-06-09', '2023-06-11', 100, 5),
(25, 10, 1, '2023-05-03', '2023-05-13', '2023-05-20', 150, 3),
(4, 2, 8, '2023-05-15', '2023-05-25', '2023-05-30', 450, 10),
(4, 2, 8, '2023-06-02', '2023-06-09', '2023-06-09', 0, 8);

-- --------------------------------------------------------

--
-- Structure for view `employees_info`
--
DROP TABLE IF EXISTS `employees_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employees_info`  AS SELECT `employees`.`emp_id` AS `emp_id`, `employees`.`emp_fn` AS `emp_fn`, `employees`.`emp_ln` AS `emp_ln` FROM `employees` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `books_auth_fk` (`author_no`),
  ADD KEY `cat_books_fk` (`cat_no`),
  ADD KEY `publisher_books_fk` (`publisher_no`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `stu_borrow`
--
ALTER TABLE `stu_borrow`
  ADD KEY `stu_borrow_book_fk` (`book_no`),
  ADD KEY `stu_borrow_stu_fk` (`stu_no`),
  ADD KEY `stu_borrow_emp_fk` (`emp_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teach_id`);

--
-- Indexes for table `teach_borrow`
--
ALTER TABLE `teach_borrow`
  ADD KEY `teach_borrow_book_fk` (`book_no`),
  ADD KEY `teach_borrow_stu_fk` (`teach_no`),
  ADD KEY `teach_borrow_emp_fk` (`emp_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_auth_fk` FOREIGN KEY (`author_no`) REFERENCES `authors` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_authors_fk` FOREIGN KEY (`author_no`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `books_cat_fk` FOREIGN KEY (`cat_no`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_publishers_fk` FOREIGN KEY (`publisher_no`) REFERENCES `publishers` (`publisher_id`),
  ADD CONSTRAINT `cat_books_fk` FOREIGN KEY (`cat_no`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `publisher_books_fk` FOREIGN KEY (`publisher_no`) REFERENCES `publishers` (`publisher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stu_borrow`
--
ALTER TABLE `stu_borrow`
  ADD CONSTRAINT `stu_borrow_book_fk` FOREIGN KEY (`book_no`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `stu_borrow_emp_fk` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_id`),
  ADD CONSTRAINT `stu_borrow_stu_fk` FOREIGN KEY (`stu_no`) REFERENCES `students` (`stu_id`);

--
-- Constraints for table `teach_borrow`
--
ALTER TABLE `teach_borrow`
  ADD CONSTRAINT `teach_borrow_book_fk` FOREIGN KEY (`book_no`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `teach_borrow_emp_fk` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_id`),
  ADD CONSTRAINT `teach_borrow_stu_fk` FOREIGN KEY (`teach_no`) REFERENCES `teachers` (`teach_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
