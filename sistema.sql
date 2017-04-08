-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2017 at 02:25 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_habitaciones`
--

CREATE TABLE `tb_habitaciones` (
  `id_habitacion` int(10) NOT NULL,
  `nombre` text NOT NULL,
  `precio_adulto` int(10) NOT NULL,
  `precio_nino` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_habitaciones`
--

INSERT INTO `tb_habitaciones` (`id_habitacion`, `nombre`, `precio_adulto`, `precio_nino`) VALUES
(1, 'Regular', 10, 5),
(2, 'Super', 20, 10),
(3, 'Deluxe', 30, 15),
(4, 'Full', 50, 25);

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservaciones`
--

CREATE TABLE `tb_reservaciones` (
  `id_reservacion` int(10) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `id_habitacion` int(10) NOT NULL,
  `cant_adultos` int(10) NOT NULL,
  `cant_ninos` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_habitaciones`
--
ALTER TABLE `tb_habitaciones`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Indexes for table `tb_reservaciones`
--
ALTER TABLE `tb_reservaciones`
  ADD PRIMARY KEY (`id_reservacion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_habitaciones`
--
ALTER TABLE `tb_habitaciones`
  MODIFY `id_habitacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_reservaciones`
--
ALTER TABLE `tb_reservaciones`
  MODIFY `id_reservacion` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
