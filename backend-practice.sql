-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 26 2023 г., 10:12
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `backend-practice`
--

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int NOT NULL COMMENT 'group id',
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'group name',
  `course` int NOT NULL COMMENT 'group course number'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `group_subjects`
--

CREATE TABLE `group_subjects` (
  `hours` int NOT NULL COMMENT 'Hours of subject for a group',
  `subject_id` int NOT NULL COMMENT 'subject id',
  `group_id` int NOT NULL COMMENT 'group id',
  `semester` int NOT NULL COMMENT 'semester of studying the subject for specific group'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Subjects hours for group in choosen semester';

-- --------------------------------------------------------

--
-- Структура таблицы `marks`
--

CREATE TABLE `marks` (
  `id` int NOT NULL COMMENT 'mark id',
  `marks` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'mark(s) of student for this lesson',
  `student_id` int NOT NULL COMMENT 'student id',
  `mark_control_id` int NOT NULL COMMENT 'id of mark control',
  `comment` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'teachers comment for his mark',
  `subject_id` int NOT NULL COMMENT 'subject id',
  `date` date NOT NULL COMMENT 'date of mark'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `mark_control`
--

CREATE TABLE `mark_control` (
  `id` int NOT NULL COMMENT 'id of mark control type',
  `name` int NOT NULL COMMENT 'name of mark control type'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Mark control types';

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL COMMENT 'student id',
  `last_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'student last name',
  `first_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'student first name',
  `patronymic` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'student patronymic',
  `gender` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'student gender',
  `date_of_birth` date NOT NULL COMMENT 'date of birth',
  `address` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'address of student',
  `group_id` int NOT NULL COMMENT 'id of the group'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Studens table';

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` int NOT NULL COMMENT 'subject id',
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'subject name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `subject_teachers`
--

CREATE TABLE `subject_teachers` (
  `subject_id` int NOT NULL COMMENT 'subject id',
  `teacher_id` int NOT NULL COMMENT 'teacher id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table with subject teachers (many to many)';

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` int NOT NULL COMMENT 'teacher id',
  `last_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'teacher last name',
  `first_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'teacher first name',
  `patronymic` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'teacher patronymic',
  `gender` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'teacher gender',
  `date_of_birth` date NOT NULL COMMENT 'date of birth',
  `address` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'address of teacher'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL COMMENT 'user id',
  `login` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'user login',
  `password` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'user password',
  `type` tinyint(1) NOT NULL COMMENT 'admin or nor an admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Users table';

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mark_control`
--
ALTER TABLE `mark_control`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'group id';

--
-- AUTO_INCREMENT для таблицы `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'mark id';

--
-- AUTO_INCREMENT для таблицы `mark_control`
--
ALTER TABLE `mark_control`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'id of mark control type';

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'student id';

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'subject id';

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'teacher id';

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'user id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
