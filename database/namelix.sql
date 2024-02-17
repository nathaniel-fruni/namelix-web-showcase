-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1:3306
-- Čas generovania: So 17.Feb 2024, 18:15
-- Verzia serveru: 8.2.0
-- Verzia PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `namelix`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meno` varchar(150) NOT NULL,
  `heslo` varbinary(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Sťahujem dáta pre tabuľku `admins`
--

INSERT INTO `admins` (`id`, `meno`, `heslo`) VALUES
(1, 'admin@gmail.com', 0x61363635613435393230343232663964343137653438363765666463346662386130346131663366666631666130376539393865383666376637613237616533);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `popis1` text NOT NULL,
  `popis2` text NOT NULL,
  `picture_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Sťahujem dáta pre tabuľku `banner`
--

INSERT INTO `banner` (`id`, `popis1`, `popis2`, `picture_name`) VALUES
(1, 'Vitajte na našej stránke', 'Efektívny digitálny marketing', 'slide-01.jpg'),
(2, 'Komplexný a analytický', 'Najlepší Digitálny Marketing', 'slide-02.jpg'),
(3, 'Inovatívne riešenia', 'Ktoré vyčaria úspech', 'slide-03.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meno` varchar(50) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `email` int NOT NULL,
  `predmet` varchar(150) NOT NULL,
  `sprava` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Sťahujem dáta pre tabuľku `contact`
--

INSERT INTO `contact` (`id`, `meno`, `telefon`, `email`, `predmet`, `sprava`) VALUES
(1, 'Hana', '0908786543', 0, 'Sociálne siete', 'Dobrý deň, potrebovala by som pomôcť ohľadom marketingu vo svete sociálnych sietí.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `partner` varchar(50) NOT NULL,
  `popis` varchar(250) NOT NULL,
  `sluzba` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Sťahujem dáta pre tabuľku `projects`
--

INSERT INTO `projects` (`id`, `partner`, `popis`, `sluzba`) VALUES
(1, 'Exploria', 'Pre spoločnosť Exploria sme vytvorili praktický web navrhnutý na mieru, postavený na CMS WordPress. Dôraz sme kládli najmä na rýchlosť webu, jeho optimalizáciu a jednoduchosť navigácie pre čítateľa z pohľadu UX.', 'seo'),
(2, 'Ata Green', 'Pre spoločnosť ATA Green sme vytvorili praktický web navrhnutý na mieru, postavený na CMS WordPress. Súčasťou webu je interaktívna kalkulačka návratnosti vstupnej investície, ktorú sme pripravili na mieru podľa dát od klienta.', 'seo'),
(3, 'Sunland', 'Náš klient SunLand Group sa už niekoľko rokov venuje montáži solárnych systémov u nás aj v zahraničí. Postarali sme sa o nastavenie platenej PPC reklamy v prostredí Google, ktorá zabezpečuje relevantnú návštevnosť a získavanie dopytov.', 'ppc'),
(4, 'SkyTech Solutions', 'Náš klient SkyTech Solutions pôsobí v oblasti moderných technologických riešení pre vzdušný priemysel. Pomohli sme im implementovať efektívnu sociálnu média kampaň na platforme LinkedIn, ktorá zvyšuje povědomie o značke, pripútava pozornosť potenciál', 'soc_siete'),
(5, 'EcoHarvest Ventures', 'Náš partner EcoHarvest Ventures sa špecializuje na udržateľné metódy poľnohospodárstva a ekologickú produkciu potravín. S radosťou sme im pomohli vybudovať výraznú online prítomnosť prostredníctvom platenej PPC reklamy. Výsledkom je zvýšená viditeľno', 'ppc'),
(6, 'BlueWave Fashion', 'Náš klient BlueWave Fashion je prináša inovácie v odvetví módy. Kladie si za cieľ osviežiť trh originálnymi a štýlovými kúskami. Spolu sme vyvinuli dynamickú sociálnu média kampaň, využívajúcu vizuálne atraktívne obsahy a interaktívne súťaže na platf', 'soc_siete');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meno` varchar(50) NOT NULL,
  `priezvisko` varchar(50) NOT NULL,
  `pozicia` varchar(150) NOT NULL,
  `picture_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Sťahujem dáta pre tabuľku `team`
--

INSERT INTO `team` (`id`, `meno`, `priezvisko`, `pozicia`, `picture_name`) VALUES
(1, 'Lukáš', 'Horváth', 'Digitálny Marketér', 'member-item-01.jpg'),
(2, 'Peter', 'Kováč', 'Analytik', 'member-item-02.jpg'),
(3, 'Ján', 'Varga', 'Digitálny Influencer', 'member-item-03.jpg'),
(4, 'Ema', 'Balážová', 'Manažérka', 'member-item-04.jpg'),
(5, 'Olívia', 'Lynn', 'Analytička', 'member-item-05.jpg'),
(6, 'Lucia', 'Tóthová', 'Správkyňa sociálnych sietí', 'member-item-06.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
