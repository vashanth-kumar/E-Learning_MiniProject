-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 11:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learning_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(2083) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `teacher_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `title`, `description`, `link`, `created_at`, `teacher_ID`) VALUES
(1, 'Microsoft Teams', 'Instructions and \r\nYou can type out instructions in the texts box and insert images or gifs with the Add images ​​​​​icon Image button.\r\n\r\nNotes: \r\n\r\nAssignments only supports the following image file types: .png, .jpeg, and .gif. \r\n\r\nOn mobile, Images will resize to the screen. \r\n\r\nOn desktop, you can use sizing handles on images to resize them.  \r\n\r\nYou can also attach existing files, links, or assignment integrations and create and name a new file right from here for students to turn in.\r\n\r\nNote: You can add up to five files for students to edit. The total number of resources you can add to an assignment is 10, whether editable or non-editable. Read-only reference files can be up to 500 MB in size. Files for students to edit can be up to 50 MB in size.\r\n\r\nSelect Attach to attach resources to the assignment. Choose a file from your OneDrive, upload a file from your device, or choose one of the other options set by your admin, such as MakeCode.\r\n\r\nNote: If you\'re assigning a Class Notebook page, check what version of OneNote your students are using to ensure that their assignment pages will lock after the assignment due date passes.\r\n\r\nSelect +New to create a blank Word (.docx), Excel (.xlsx), PowerPoint (.pptx), or Whiteboard document, or a new video recording to hand out to your students.\r\n\r\nSelect Apps to attach content from an app to the assignment. Admins can manage Teams apps in the Microsoft Teams admin center.\r\n\r\nSelect Learning Accelerators to add Reading Progress, Search Progress and other Learning Accelerators to the Assignment.\r\n\r\nBy default, Students can\'t edit attached documents, meaning the document is read-only. This is a great option for reference materials.\r\n\r\nTo let students edit a separate copy of the attached file, select More options  More options button > Students edit their own copy. This way, students can edit their own copy of the file and turn it in for a grade. Only Word (.docx), Excel (.xlsx), PowerPoint (.pptx), WhiteBoard, ClassNotebook Page, and MakeCode files or Reading Progress assignments allow students to edit their own copies. ', 'https://support.microsoft.com/en-us/topic/create-an-assignment-in-microsoft-teams-23c128d0-ec34-4691-9511-661fba8599be', '2024-12-15 06:06:05', NULL),
(10, 'Test', 'Test ', 'https://support.microsoft.com/en-us/topic/create-an-assignment-in-microsoft-teams-23c128d0-ec34-4691-9511-661fba8599be', '2024-12-15 13:14:52', NULL),
(11, 'test', 'test2', 'https://support.microsoft.com/en-us/topic/create-an-assignment-in-microsoft-teams-23c128d0-ec34-4691-9511-661fba8599be', '2024-12-15 13:25:49', 10),
(12, 'TEST 2', 'TEST 2', 'https://support.microsoft.com/en-us/topic/create-an-assignment-in-microsoft-teams-23c128d0-ec34-4691-9511-661fba8599be', '2024-12-15 15:19:34', 1),
(13, 'Hi', 'Test', 'https://support.microsoft.com/en-us/topic/create-an-assignment-in-microsoft-teams-23c128d0-ec34-4691-9511-661fba8599be', '2024-12-16 04:28:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` enum('ongoing','completed','not started') DEFAULT 'not started',
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `youtube_link` varchar(500) DEFAULT NULL,
  `document_path` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `TEACHER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `title`, `description`, `youtube_link`, `document_path`, `created_at`, `TEACHER_ID`) VALUES
(1, 'Microsoft Teams', 'Select +New to create a blank Word (.docx), Excel (.xlsx), PowerPoint (.pptx), or Whiteboard document, or a new video recording to hand out to your students.\r\n\r\nSelect Apps to attach content from an app to the assignment. Admins can manage Teams apps in the Microsoft Teams admin center.\r\n\r\nSelect Learning Accelerators to add Reading Progress, Search Progress and other Learning Accelerators to the Assignment.\r\n\r\nBy default, Students can\'t edit attached documents, meaning the document is read-only. This is a great option for reference materials.\r\n\r\nTo let students edit a separate copy of the attached file, select More options  More options button > Students edit their own copy. This way, students can edit their own copy of the file and turn it in for a grade. Only Word (.docx), Excel (.xlsx), PowerPoint (.pptx), WhiteBoard, ClassNotebook Page, and MakeCode files or Reading Progress assignments allow students to edit their own copies. \r\n\r\nNote: If you have older documents with the file extension .doc, .xls, or .ppt, students won\'t be able to edit them. You can either attach them as read-only reference material or create a new file in Teams, copy in the old content, and save it. All new files you create in Teams or other Microsoft 365 apps will have the correct extension.', 'https://youtu.be/Tj7aZ8bMzHo?si=FJbOEVT8roIzCi8u', 'uploads/Screenshot (35).png', '2024-12-15 06:32:51', NULL),
(3, 'Vashanth', 'Description', 'https://youtu.be/Tj7aZ8bMzHo?si=FJbOEVT8roIzCi8u', 'uploads/Screenshot (20).png', '2024-12-15 07:36:13', NULL),
(4, 'Our cookies', 'Our website uses cookies, which are small text files, to distinguish you from other users and provide you with a good experience when you browse our website.', 'https://youtu.be/Tj7aZ8bMzHo?si=FJbOEVT8roIzCi8u', 'uploads/ABC ID.png', '2024-12-15 13:33:27', 0),
(7, 'Test', 'Test', 'https://youtu.be/Tj7aZ8bMzHo?si=FJbOEVT8roIzCi8u', 'uploads/Screenshot (119).png', '2024-12-16 10:28:07', 1),
(8, 'Test', 'ygdfhsoijhoajgjnjnih', 'https://youtu.be/Tj7aZ8bMzHo?si=FJbOEVT8roIzCi8u', 'uploads/Screenshot (22).png', '2024-12-19 07:59:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'Vashanth', 'kumar@gmail.com', '9994175646', '$2y$10$OqzCf5/XPDkAbHFaSZWHLOjPVkwHYUdvdBpCX3WrEPqyqT/QFLeXO', '2024-12-13 09:42:03'),
(3, 'Kumar', 'ram@gmail.com', '9994175648', '$2y$10$DtSob.MPMmtTnt/hofRmTe2puQeAfzk1K.5Tev30Gwg1e67SBWRK6', '2024-12-15 12:32:31'),
(4, 'Banu', 'banu@gmail.com', '9994175688', '$2y$10$jE1H83QI3jK90NbRNT3hheqBogou9.3AdrXdhMUOhXcv90HzVeqUC', '2024-12-15 12:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `phone`, `subject`, `designation`, `qualification`, `password`) VALUES
(1, 'Naveen', 'kumar@gmail.com', '9994175646', 'JAVA', 'Tutor', 'MCA', '$2y$10$TBrsbEWhslXte0xm4Zw/E.ldOc69h4n4gb.KMD.uEFc59zWbtuAZK'),
(4, 'Kumar', 'kabilanbca2021@gmail.com', '9994175644', 'DSA', 'Teacher', 'MCA', '$2y$10$jC.qUatA3mVAFQBg8m1jK.mQBTrHxTYxe1tAkvRa81okMxJmROEUG'),
(5, 'Ramesh ', 'ram@gmail.com', '9994175646', 'DSA', 'Teacher', 'MCA', '$2y$10$zaVU1Vx6Y2OSTPcUXXd2kOP0PXRCLGADfvVVjj7Z6AXgU5PAWMZeK'),
(8, 'Vashanth', 'ra@gmail.com', '9994175646', 'DSA', 'Teacher', 'MBA', '$2y$10$Lc0sF9exYtctidE0XaZwC.YGNUCh9P7.GmyQWiaS102dO..mxASjm'),
(10, 'Banu', 'banu@gmail.com', '9994175688', 'JAVA', 'Teacher', 'MCA', '$2y$10$eo0.slckYagwU/REps3K3u8/FxZcTCizfw4LyE4mxtp6d7RfQm56y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
