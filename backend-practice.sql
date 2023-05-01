-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 01 2023 г., 06:46
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
  `name` varchar(150) NOT NULL COMMENT 'group name',
  `course` int NOT NULL COMMENT 'group course number'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `course`) VALUES
(1, '411', 2),
(2, '430', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `group_subjects`
--

CREATE TABLE `group_subjects` (
  `hours` int NOT NULL COMMENT 'Hours of subject for a group',
  `subject_id` int NOT NULL COMMENT 'subject id',
  `group_id` int NOT NULL COMMENT 'group id',
  `semester` int NOT NULL COMMENT 'semester of studying the subject for specific group'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Subjects hours for group in choosen semester';

--
-- Дамп данных таблицы `group_subjects`
--

INSERT INTO `group_subjects` (`hours`, `subject_id`, `group_id`, `semester`) VALUES
(100, 1, 1, 4),
(200, 2, 1, 2),
(200, 3, 1, 4),
(100, 3, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `marks`
--

CREATE TABLE `marks` (
  `id` int NOT NULL COMMENT 'mark id',
  `mark` int NOT NULL COMMENT 'mark(s) of student for this lesson',
  `student_id` int NOT NULL COMMENT 'student id',
  `mark_control_id` int NOT NULL COMMENT 'id of mark control',
  `comment` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Комментарий' COMMENT 'teachers comment for his mark',
  `subject_id` int NOT NULL COMMENT 'subject id',
  `date` date NOT NULL COMMENT 'date of mark'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `marks`
--

INSERT INTO `marks` (`id`, `mark`, `student_id`, `mark_control_id`, `comment`, `subject_id`, `date`) VALUES
(1, 5, 27, 1, 'Неа', 3, '2023-04-02'),
(2, 3, 27, 2, 'Комментарий', 2, '2023-04-02');

-- --------------------------------------------------------

--
-- Структура таблицы `mark_control`
--

CREATE TABLE `mark_control` (
  `id` int NOT NULL COMMENT 'id of mark control type',
  `name` varchar(255) NOT NULL COMMENT 'name of mark control type'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Mark control types';

--
-- Дамп данных таблицы `mark_control`
--

INSERT INTO `mark_control` (`id`, `name`) VALUES
(1, 'Контрольная работа'),
(2, 'Практическая работа');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL COMMENT 'student id',
  `last_name` varchar(150) NOT NULL COMMENT 'student last name',
  `first_name` varchar(150) NOT NULL COMMENT 'student first name',
  `patronymic` varchar(150) NOT NULL COMMENT 'student patronymic',
  `gender` varchar(150) NOT NULL COMMENT 'student gender',
  `date_of_birth` date NOT NULL COMMENT 'date of birth',
  `address` varchar(150) NOT NULL COMMENT 'address of student',
  `group_id` int NOT NULL COMMENT 'id of the group'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Studens table';

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `last_name`, `first_name`, `patronymic`, `gender`, `date_of_birth`, `address`, `group_id`) VALUES
(3, 'qwe', 'qweqw', 'qweqw', 'qweqw', '2023-04-20', 'qwe', 2),
(4, 'qwe', 'qweqw', 'qweqw', 'qweqw', '2023-04-20', 'qwe', 2),
(27, 'вщадпроывашрл', 'дилдо', 'рлор', 'лдор', '1232-12-12', 'жыдвлаопдылвао', 1),
(29, 'лоапр', 'длр', 'длор', 'длор', '1212-03-12', 'выапрвыап', 1),
(30, 'kjh', 'gkjhg', 'kjhg', 'kjhg', '1221-12-12', 'skjdhgkjsdfhg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` int NOT NULL COMMENT 'subject id',
  `name` varchar(150) NOT NULL COMMENT 'subject name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(1, 'Physics'),
(2, 'Mathematics'),
(3, 'Chemestry');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL COMMENT 'user id',
  `login` varchar(150) NOT NULL COMMENT 'user login',
  `password` varchar(150) NOT NULL COMMENT 'user password',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'admin or nor an admin',
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Users table';

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `type`, `name`) VALUES
(1, 'fatguy', '76d80224611fc919a5d54f0ff9fba446', 0, 'fatty'),
(2, 'login', '1a1dc91c907325c69271ddf0c944bc72', 1, 'name'),
(3, 'user', '1a1dc91c907325c69271ddf0c944bc72', 0, 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `group_subjects`
--
ALTER TABLE `group_subjects`
  ADD KEY `group_id` (`group_id`),
  ADD KEY `group_subjects_ibfk_2` (`subject_id`);

--
-- Индексы таблицы `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `mark_control_id` (`mark_control_id`);

--
-- Индексы таблицы `mark_control`
--
ALTER TABLE `mark_control`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'group id', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'mark id', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `mark_control`
--
ALTER TABLE `mark_control`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'id of mark control type', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'student id', AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'subject id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'user id', AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `group_subjects`
--
ALTER TABLE `group_subjects`
  ADD CONSTRAINT `group_subjects_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_subjects_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`mark_control_id`) REFERENCES `mark_control` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
