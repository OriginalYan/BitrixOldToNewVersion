TRUNCATE b_sonet_group_subject;
DROP TABLE IF EXISTS import_b_sonet_group_subject;
TRUNCATE b_uts_sonet_group;
DROP TABLE IF EXISTS import_b_uts_sonet_group;
TRUNCATE b_sonet_group;
DROP TABLE IF EXISTS import_b_sonet_group;
-- --------------------------------------------------------
-- Хост:                         bitrix-new.devinotest.local
-- Версия сервера:               5.7.26 - MySQL Community Server (GPL)
-- Операционная система:         Linux
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица bitrix24prod.import_b_sonet_group
CREATE TABLE IF NOT EXISTS `import_b_sonet_group` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `SITE_ID` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPTION` text COLLATE utf8_unicode_ci,
  `DATE_CREATE` datetime NOT NULL,
  `DATE_UPDATE` datetime NOT NULL,
  `ACTIVE` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Y',
  `VISIBLE` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Y',
  `OPENED` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `SUBJECT_ID` int(11) NOT NULL,
  `OWNER_ID` int(11) NOT NULL,
  `KEYWORDS` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IMAGE_ID` int(11) DEFAULT NULL,
  `NUMBER_OF_MEMBERS` int(11) NOT NULL DEFAULT '0',
  `NUMBER_OF_MODERATORS` int(11) NOT NULL DEFAULT '0',
  `INITIATE_PERMS` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'K',
  `DATE_ACTIVITY` datetime NOT NULL,
  `CLOSED` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `SPAM_PERMS` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'K',
  `PROJECT` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `PROJECT_DATE_START` datetime DEFAULT NULL,
  `PROJECT_DATE_FINISH` datetime DEFAULT NULL,
  `SEARCH_INDEX` mediumtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы bitrix24prod.import_b_sonet_group: ~24 rows (приблизительно)
/*!40000 ALTER TABLE `import_b_sonet_group` DISABLE KEYS */;
INSERT INTO `import_b_sonet_group` (`ID`, `SITE_ID`, `NAME`, `DESCRIPTION`, `DATE_CREATE`, `DATE_UPDATE`, `ACTIVE`, `VISIBLE`, `OPENED`, `SUBJECT_ID`, `OWNER_ID`, `KEYWORDS`, `IMAGE_ID`, `NUMBER_OF_MEMBERS`, `NUMBER_OF_MODERATORS`, `INITIATE_PERMS`, `DATE_ACTIVITY`, `CLOSED`, `SPAM_PERMS`, `PROJECT`, `PROJECT_DATE_START`, `PROJECT_DATE_FINISH`, `SEARCH_INDEX`) VALUES
	(1, 's1', 'Marketing Department', '', '2016-06-24 01:07:21', '2019-05-17 23:30:47', 'Y', 'Y', 'N', 1, 481, ',', 17907, 3, 1, 'E', '2019-07-04 14:29:59', 'N', 'N', 'N', NULL, NULL, 'Znexrgvat Qrcnegzrag  #  # Павел Ушанов'),
	(3, 's1', 'Sales Department', '', '2016-06-24 01:07:41', '2019-05-17 23:47:51', 'Y', 'Y', 'N', 1, 481, ',', 17911, 5, 2, 'E', '2019-07-08 10:24:20', 'N', 'N', 'N', NULL, NULL, 'Fnyrf Qrcnegzrag  #  # Павел Ушанов'),
	(10, 's1', 'Devino Russia', '', '2016-09-21 18:06:49', '2019-05-28 00:11:33', 'Y', 'Y', 'Y', 1, 481, ',', 17893, 99, 3, 'E', '2019-07-08 09:00:02', 'N', 'K', 'N', NULL, NULL, 'Qrivab Ehffvn  #  # Павел Ушанов'),
	(12, 's1', 'Human Resources', '', '2016-09-22 10:53:16', '2019-05-17 23:28:09', 'Y', 'Y', 'N', 2, 481, ',', 17897, 6, 2, 'E', '2019-07-08 10:00:23', 'N', 'K', 'N', NULL, NULL, 'Uhzna Erfbheprf  #  # Павел Ушанов'),
	(16, 's1', 'Devino Russia Tops', '', '2016-09-23 15:40:05', '2019-06-27 00:54:36', 'Y', 'N', 'N', 4, 481, ',', 1132, 14, 0, 'E', '2019-07-05 17:13:02', 'N', 'K', 'N', NULL, NULL, 'Qrivab Ehffvn Gbcf  #  # Павел Ушанов'),
	(28, 's1', 'Technical Department', '', '2017-06-19 19:53:37', '2019-05-17 23:33:55', 'Y', 'Y', 'N', 3, 481, ',', 17914, 2, 1, 'E', '2019-07-08 06:00:02', 'N', 'K', 'N', NULL, NULL, 'Grpuavpny Qrcnegzrag  #  # Павел Ушанов'),
	(30, 's1', 'Legal Department', '', '2017-06-20 19:25:31', '2019-05-17 23:28:53', 'Y', 'Y', 'N', 2, 481, ',', 17901, 5, 1, 'E', '2019-07-08 11:02:53', 'N', 'K', 'N', NULL, NULL, 'Yrtny Qrcnegzrag  #  # Павел Ушанов'),
	(32, 's1', 'Partnership Development', '', '2017-06-21 00:07:41', '2019-05-17 23:31:26', 'Y', 'Y', 'N', 1, 481, ',', 17909, 2, 1, 'E', '2019-07-04 14:33:27', 'N', 'K', 'N', NULL, NULL, 'Cnegarefuvc Qrirybczrag  #  # Павел Ушанов'),
	(38, 's1', 'Financial Department', '', '2017-09-09 20:16:47', '2019-05-17 23:27:05', 'Y', 'Y', 'N', 2, 481, ',', 17876, 2, 1, 'E', '2019-07-04 11:17:12', 'N', 'K', 'N', NULL, NULL, 'Svanapvny Qrcnegzrag  #  # Павел Ушанов'),
	(42, 's1', 'Customer Support', '', '2017-10-04 17:30:24', '2019-06-03 17:08:43', 'Y', 'Y', 'N', 2, 481, ',', 17889, 22, 1, 'E', '2019-07-08 09:00:14', 'N', 'K', 'N', NULL, NULL, 'Phfgbzre Fhccbeg  #  # Павел Ушанов'),
	(44, 's1', 'Maintenance Department', '', '2017-10-09 19:09:49', '2019-05-17 23:29:46', 'Y', 'Y', 'N', 2, 481, ',', 17904, 3, 1, 'E', '2019-05-30 10:48:17', 'N', 'K', 'N', NULL, NULL, 'Znvagranapr Qrcnegzrag  #  # Павел Ушанов'),
	(54, 's1', 'Business Development', '', '2018-03-16 00:49:54', '2019-05-17 23:05:34', 'Y', 'Y', 'N', 2, 481, ',', 17886, 2, 2, 'E', '2019-07-03 17:17:00', 'N', 'K', 'N', NULL, NULL, 'Ohfvarff Qrirybczrag  #  # Павел Ушанов'),
	(57, 's1', 'Devino Belarus', '', '2018-03-31 23:36:05', '2019-04-12 23:14:33', 'Y', 'Y', 'N', 1, 481, ',', 17891, 5, 2, 'E', '2019-06-21 17:09:18', 'N', 'K', 'N', NULL, NULL, 'Qrivab Orynehf  #  # Павел Ушанов'),
	(58, 's1', 'Devino Ukraine', '', '2018-03-31 23:37:56', '2019-04-12 23:15:30', 'Y', 'Y', 'N', 1, 481, ',', 17899, 9, 2, 'E', '2019-06-13 15:05:38', 'N', 'K', 'N', NULL, NULL, 'Qrivab Hxenvar  #  # Павел Ушанов'),
	(59, 's1', 'Devino Kazakhstan', '', '2018-03-31 23:39:12', '2019-04-12 23:14:47', 'Y', 'Y', 'N', 1, 481, ',', 17881, 5, 2, 'E', '2019-07-04 09:39:32', 'N', 'K', 'N', NULL, NULL, 'Qrivab Xnmnxufgna  #  # Павел Ушанов'),
	(61, 's1', 'Проект devino.online (CarbonFay)', 'Ссылка Jira https://jira.devino.pro/projects/NLK/i...openissues', '2018-06-14 12:37:35', '2019-04-12 20:32:36', 'Y', 'N', 'N', 1, 581, ',', NULL, 7, 3, 'E', '2019-04-12 20:32:36', 'Y', 'K', 'Y', NULL, '2018-12-31 00:00:00', 'Проект qrivab.bayvar (PneobaSnl) Ссылка Wven uggcf://wven.qrivab.ceb/cebwrpgf/AYX/v...bcravffhrf  #  # Юлия Лукьянова'),
	(70, 's1', 'Pending Tasks', '', '2018-06-27 12:46:41', '2019-04-12 23:18:11', 'Y', 'N', 'N', 2, 481, ',', NULL, 1, 1, 'K', '2019-04-12 23:18:11', 'N', 'K', 'Y', NULL, NULL, 'Craqvat Gnfxf  #  # Павел Ушанов'),
	(75, 's1', 'Проект Devino.Online (DO)', '', '2018-07-17 10:53:53', '2019-06-10 21:32:37', 'Y', 'Y', 'N', 2, 481, ',', NULL, 4, 2, 'E', '2019-06-13 19:17:38', 'N', 'K', 'Y', NULL, '2019-07-01 00:00:00', 'Проект Qrivab.Bayvar (QB)  #  # Павел Ушанов'),
	(76, 's1', 'Sales Operations', '', '2018-08-15 19:23:08', '2019-05-17 23:33:21', 'Y', 'Y', 'N', 2, 481, ',', NULL, 3, 2, 'E', '2019-07-05 17:25:25', 'N', 'K', 'N', NULL, NULL, 'Fnyrf Bcrengvbaf  #  # Павел Ушанов'),
	(77, 's1', 'Business Process Automatization', '', '2018-09-12 14:37:01', '2019-05-17 23:24:07', 'Y', 'Y', 'N', 2, 481, ',', NULL, 2, 2, 'E', '2019-06-26 17:13:08', 'N', 'K', 'N', NULL, NULL, 'Ohfvarff Cebprff Nhgbzngvmngvba  #  # Павел Ушанов'),
	(90, 's1', 'Carrier/Provider Relationship', '', '2019-03-18 20:56:20', '2019-05-17 23:24:39', 'Y', 'Y', 'N', 3, 481, ',', NULL, 6, 2, 'E', '2019-07-08 10:00:01', 'N', 'K', 'N', NULL, NULL, 'Pneevre/Cebivqre Eryngvbafuvc  #  # Павел Ушанов'),
	(93, 's1', 'Проект Devino.API (API)', '', '2019-04-12 22:22:46', '2019-06-10 21:32:14', 'Y', 'Y', 'N', 2, 481, ',', NULL, 3, 3, 'E', '2019-06-10 21:32:14', 'N', 'K', 'Y', NULL, NULL, 'Проект Qrivab.NCV (NCV)  #  # Павел Ушанов'),
	(94, 's1', 'Product Development', '', '2019-04-15 22:11:24', '2019-05-17 23:47:27', 'Y', 'Y', 'N', 2, 481, ',', NULL, 4, 3, 'E', '2019-06-14 11:46:34', 'N', 'K', 'N', NULL, NULL, 'Cebqhpg Qrirybczrag  #  # Павел Ушанов'),
	(95, 's1', 'Alerts & Notifications', '', '2019-05-13 12:45:48', '2019-05-17 23:43:51', 'Y', 'Y', 'Y', 2, 481, ',', NULL, 46, 3, 'E', '2019-05-17 23:43:34', 'N', 'K', 'N', NULL, NULL, 'Nyregf & Abgvsvpngvbaf  #  # Павел Ушанов');
/*!40000 ALTER TABLE `import_b_sonet_group` ENABLE KEYS */;

-- Дамп структуры для таблица bitrix24prod.import_b_sonet_group_subject
CREATE TABLE IF NOT EXISTS `import_b_sonet_group_subject` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `SITE_ID` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SORT` int(10) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы bitrix24prod.import_b_sonet_group_subject: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `import_b_sonet_group_subject` DISABLE KEYS */;
INSERT INTO `import_b_sonet_group_subject` (`ID`, `SITE_ID`, `NAME`, `SORT`) VALUES
	(1, 's1', 'Продажи и Маркетинг', 100),
	(2, 's1', 'Проекты', 100),
	(3, 's1', 'Производство', 100),
	(4, 's1', 'Руководители', 100),
	(5, 's1', 'Совместный отдых', 100);
/*!40000 ALTER TABLE `import_b_sonet_group_subject` ENABLE KEYS */;

-- Дамп структуры для таблица bitrix24prod.import_b_uts_sonet_group
CREATE TABLE IF NOT EXISTS `import_b_uts_sonet_group` (
  `VALUE_ID` int(11) NOT NULL,
  `UF_SG_DEPT` text COLLATE utf8_unicode_ci,
  `UF_SORT` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы bitrix24prod.import_b_uts_sonet_group: ~24 rows (приблизительно)
/*!40000 ALTER TABLE `import_b_uts_sonet_group` DISABLE KEYS */;
INSERT INTO `import_b_uts_sonet_group` (`VALUE_ID`, `UF_SG_DEPT`, `UF_SORT`) VALUES
	(1, NULL, 5100),
	(3, NULL, 5300),
	(10, NULL, 6700),
	(12, NULL, 5700),
	(16, NULL, 5000),
	(28, NULL, 6100),
	(30, NULL, 5800),
	(32, NULL, 5600),
	(38, NULL, 5900),
	(42, NULL, 5500),
	(44, NULL, 6000),
	(54, NULL, 5200),
	(57, NULL, 6800),
	(58, NULL, 6900),
	(59, NULL, 7000),
	(61, NULL, 660),
	(70, NULL, 10000),
	(75, NULL, 6600),
	(76, NULL, 5400),
	(77, NULL, 5420),
	(90, NULL, 5580),
	(93, NULL, 6630),
	(94, NULL, 6200),
	(95, NULL, 8000);
/*!40000 ALTER TABLE `import_b_uts_sonet_group` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

ALTER TABLE b_uts_sonet_group ADD UF_SORT double DEFAULT NULL AFTER UF_SG_DEPT;

INSERT INTO b_sonet_group SELECT * FROM import_b_sonet_group;

INSERT INTO b_uts_sonet_group SELECT * FROM import_b_uts_sonet_group;

INSERT INTO b_sonet_group_subject SELECT * FROM import_b_sonet_group_subject;
