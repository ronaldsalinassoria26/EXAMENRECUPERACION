-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 05:28 PM
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
-- Database: `libreria`
--

-- --------------------------------------------------------

--
-- Table structure for table `ventas_libros`
--

CREATE TABLE `ventas_libros` (
  `id` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `genero_cliente` enum('Masculino','Femenino') NOT NULL,
  `titulo_libro` varchar(255) NOT NULL,
  `tipo_libro` enum('Ficción','Novelas','Cuentos','Física Cuántica') NOT NULL,
  `cantidad_libros` int(11) NOT NULL,
  `importe_bruto` decimal(10,2) NOT NULL,
  `descuento` decimal(4,2) NOT NULL,
  `importe_neto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ventas_libros`
--

INSERT INTO `ventas_libros` (`id`, `nombre_cliente`, `genero_cliente`, `titulo_libro`, `tipo_libro`, `cantidad_libros`, `importe_bruto`, `descuento`, `importe_neto`) VALUES
(1, 'ronal', 'Masculino', 'amor mio', 'Novelas', 1, 100.00, 0.08, 92.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ventas_libros`
--
ALTER TABLE `ventas_libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ventas_libros`
--
ALTER TABLE `ventas_libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
