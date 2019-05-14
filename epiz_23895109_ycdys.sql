-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql108.byetcluster.com
-- Generation Time: May 14, 2019 at 05:54 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_23895109_ycdys`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_`
--

CREATE TABLE IF NOT EXISTS `post_` (
  `id_post` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `post_`
--

INSERT INTO `post_` (`id_post`, `title`, `content`, `waktu`) VALUES
(43, 'Aku', 'Untuk Anak Kelas B', '2019-05-14 01:29:50'),
(44, 'Aku', 'Untuk Anak Kelas B', '2019-05-14 01:30:13'),
(60, 'Aku', 'Untuk Anak Kelas B', '2019-05-14 01:30:28'),
(46, 'Aku', 'Untuk Anak Kelas B\r\n', '2019-05-13 04:47:03'),
(47, 'Aku', 'Untuk Anak Kelas B', '2019-05-14 01:30:43'),
(48, 'Aku', 'Untuk Anak Kelas B', '2019-05-14 01:31:02'),
(56, 'Aku', 'Untuk Anak Kelas B', '2019-05-14 02:23:05'),
(57, 'Aku', 'Untuk Anak Kelas B', '2019-05-14 02:23:22'),
(53, 'Madeyaaa the most biutipul gurl in da world', 'Mumamamamamamaa', '2019-05-13 15:40:05'),
(55, 'Aku', 'Untuk Anak Kelas B', '2019-05-14 02:23:59'),
(58, 'Cantik', 'Kenapa dosen jarangg masuk:( tapi pas uas soalnya susah bingittt.. dikasih materi aja kagak tuh', '2019-05-13 16:38:02'),
(59, 'Aku', 'Untuk Anak Kelas B\r\n', '2019-05-14 01:34:18'),
(61, 'Aku', 'Untuk Anak Kelas B', '2019-05-14 01:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `level` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `level`, `username`, `password`, `email`, `gender`) VALUES
(5, '', 'dwi', '2deb000b57bfac9d72c14d4ed967b572', 'gladysdeem2@gmail.com', 'Perempuan'),
(6, '', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'gladysdeem2@gmail.com', 'Perempuan'),
(7, '', 'mahdi', '912ec803b2ce49e4a541068d495ab570', 'gladysdeem2@gmail.com', 'Perempuan'),
(8, '', 'diw', '56af1302e6e440e4dbcfa3cf0af4887f', 'gladysdeem2@gmail.com', 'Perempuan'),
(9, '', 'adis', '56af1302e6e440e4dbcfa3cf0af4887f', 'gladysdeem2@gmail.com', 'Perempuan'),
(10, '', 'mahdiy', '57f842286171094855e51fc3a541c1e2', 'afifahmahdiyah29@gmail.com', 'Perempuan'),
(12, '', 'caa', '47bce5c74f589f4867dbd57e9ca9f808', 'afifahmahdiyah29@gmail.com', 'Perempuan'),
(13, '', 'sepp', '7815696ecbf1c96e6894b779456d330e', 'gladysdeem2@gmail.com', 'Perempuan'),
(14, '', 'depp', '7815696ecbf1c96e6894b779456d330e', 'gladysdeem2@gmail.com', 'Perempuan'),
(15, '', 'adit', '4562c1b6efc284d93860f678a5b4950b', 'gladysdeem2@gmail.com', 'Laki - Laki'),
(16, '', 'dwii', '7815696ecbf1c96e6894b779456d330e', 'gladysdeem2@gmail.com', 'Perempuan'),
(17, '', 'gdm', '7815696ecbf1c96e6894b779456d330e', 'gladys@gmail.com', 'Perempuan'),
(18, '', 'sil', '7815696ecbf1c96e6894b779456d330e', 'sil@gmail.com', 'Perempuan'),
(20, '', 'cidyss', '1234', 'blablabla@gmail.com', 'perempuan'),
(21, '', 'say', 'ohh', '', ''),
(22, '', 'heyho', 'aaa', 'gg@gmail.com', 'perempuan'),
(23, '', 'driii', '47bce5c74f589f4867dbd57e9ca9f808', 'gladysdeem2@gmail.com', 'Perempuan'),
(24, '', 'taraa', '47bce5c74f589f4867dbd57e9ca9f808', 'gladysdeem2@gmail.com', 'Perempuan'),
(25, '', 'enis', '47bce5c74f589f4867dbd57e9ca9f808', 'gladys@gmail.com', 'Perempuan'),
(26, '', 'Ndik', 'e76c02048ba1b4f8a7ca38ffc9f66221', 'Ndik@yahoo.com', 'Perempuan'),
(27, '', 'Aaaa', '65ba841e01d6db7733e90a5b7f9e6f80', 'Sayabukan007@gmail.com', 'Perempuan'),
(28, '', 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'Perempuan'),
(29, '', 'zha', 'fcea920f7412b5da7be0cf42b8c93759', 'shahnazkhairunnisa2@gmail.com', 'Perempuan'),
(30, '', 'qw', '006d2143154327a64d86a264aea225f3', 'qw', ''),
(31, '', 'Qwer', '47bce5c74f589f4867dbd57e9ca9f808', 'gladysdeem2@gmail.com', 'Perempuan'),
(32, 'Admin', 'iss', 'aaa', 'gg@gmail.com', 'perempuan'),
(33, 'Admin', 'dysadiw', 'c84aa4ee88871902f92a210cc59526f8', 'gladysdeem2@gmail.com', 'Perempuan'),
(34, 'User', 'reree', '47bce5c74f589f4867dbd57e9ca9f808', 'gg@gmail.com', 'Perempuan'),
(36, 'User', 'IbuNegaraUNSRI', '698d51a19d8a121ce581499d7b701668', 'qwerty@qwerty.com', 'Perempuan'),
(37, 'User', 'pooo', '47bce5c74f589f4867dbd57e9ca9f808', 'sil@gmail.com', 'Laki - Laki'),
(38, 'User', 'Mad', '81dc9bdb52d04dc20036dbd8313ed055', 'Afs@gmail.co.id', 'Laki - Laki'),
(39, 'User', 'Dityas_', '3754a3f3a3fb6daf61e52e1ce27743a8', 'Ditya.salsabila@yahoo.com', 'Perempuan'),
(40, 'User', 'user', '47bce5c74f589f4867dbd57e9ca9f808', 'Gggg@gmail.com', 'Perempuan'),
(41, 'User', 'qwe', '76d80224611fc919a5d54f0ff9fba446', 'qwe', 'Laki - Laki'),
(42, '', 'anonim', '326cd616780c2a2283ff91294f39fce4', 'nur@gmail.com', 'Perempuan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
