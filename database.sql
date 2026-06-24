-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2026 at 08:41 AM
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
-- Database: `auth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `profile_pic`, `full_name`, `phone`, `bio`) VALUES
(8, 'venu', '$2y$10$54Mtn9AzvvQwzdr4c0dZz.oDzHqYuOIOJrrrJGafNhiymCNs7oF9.', 'agnikancharla2006@gmail.com', 'WIN_20260601_22_56_57_Pro.jpg', 'venu', '7095096385', 'carpenter'),
(9, 'nani', '$2y$10$OhMkZLaunXahD3bS43Hds.xdsV6aLjP1EveUqfA.0WqAFCwMY8iG6', 'nani@gmail', NULL, 'nani', '8790958744', ''),
(10, 'nani', '$2y$10$NFPxnj9haDVm.SZ1RgPhp.L1.xSg.qHzfUMnoaShbf03gPQXoCKNq', 'nani@gmail', NULL, 'nani', '8790958744', 'std'),
(11, 'nani', '$2y$10$tejz5ZBtfc37PiE.zLiFnuXUaftoNT5xtnhpagCviN7qL1tbMwzsS', 'nani@gmail', NULL, 'nani', '8790958744', 'std'),
(12, 'nani', '$2y$10$ziglgW6vi7UHQqTwHLwIjO6bos/sDW9v8bZiTMf30v2F22eVF924C', 'nani@gmail', NULL, 'nani', '8790958744', 'std'),
(13, 'nani', '$2y$10$X0.rbBVdGgFk0Go3CPHFKe7mV/JZXywrbika4BTzJIPaMOK1DPsXa', 'nani@gmail', NULL, 'nani', '8790958744', 'std'),
(14, 'nani', '$2y$10$xJ.OnIej1Qz.LDBSFFbFWeyxix2GwIwFu7cpq6bD4KZz477LG6zde', 'nani@gmail', NULL, 'nani', '8790958744', 'std'),
(15, 'nani', '$2y$10$nc.RhW4YTe0lT.omwE2W0OxCZEFw8Kxny75W8BZAyvyF6pgmyht2W', 'nani@gmail', NULL, 'nani', '8790958744', 'std'),
(16, 'nani', '$2y$10$t81.8j0ZB0/ZZsWRo8beJ.9/TVUl/T3MIlg8nq5THmmfD9Qt0EuhS', 'nani@gmail', NULL, 'nani', '8790958744', 'std'),
(17, 'sunny', '$2y$10$Iqb4dzrUODWAi58nJ/OxnO6vhskXfVqrf6ermgHQpSPnJkGpVbGuS', 'sunny@gmail.com', 'WIN_20260623_19_53_11_Pro.jpg', 'sunny', '9963210134', 'child'),
(18, 'sunny', '$2y$10$5F7srUfE4j3iD87yjFcfLOxOt6wyQPNAsH0taavWhbbVbngP/ExaO', 'sunny@gmail.com', 'WIN_20260623_19_53_11_Pro.jpg', 'sunny', '9963210134', 'child'),
(19, 'sunny', '$2y$10$ec/8KA8eQrkKjwFXoBm9Eecl90PDcVoOYTTuKawugaNZPqRrGe8Ce', 'sunny@gmail.com', 'WIN_20260623_19_53_11_Pro.jpg', 'sunny', '9963210134', 'child'),
(20, 'sunny', '$2y$10$QiiA5jr.AnikGen9Dj.nrujULWgwC6VByoQ8K16NUZbBK5h9yKIl.', 'sunny@gmail.com', 'WIN_20260623_19_53_11_Pro.jpg', 'sunny', '9963210134', 'child'),
(21, 'sunny', '$2y$10$igAECBz1QBltm9DSuCcMt.TLn5bifqiR3xiGHooVuUVH0yuPlKZqq', 'sunny@gmail.com', 'WIN_20260623_19_53_11_Pro.jpg', 'sunny', '9963210134', 'child'),
(22, NULL, '$2y$10$E63Ndn9dfOKdfgnv9g7fEuOY9CMtQVkv8i/7zmjp9owsqXbNDbAnu', NULL, NULL, NULL, NULL, NULL),
(23, NULL, '$2y$10$/6ThBMk4l95Q/Ct1bWUyjutTaGPs0GdT4TV1Ota70YI3blKxcpE7G', NULL, NULL, NULL, NULL, NULL),
(24, NULL, '$2y$10$z2zg.FBwA/ZQuiZnSD2W4u.qB6a2n6kO7S2TYTKsfTlwWCFWeaf1S', NULL, NULL, NULL, NULL, NULL),
(25, NULL, '$2y$10$OrRr92qm0Z.MOHFiSvBJvuy6j.Be95E5R82YtNZGfRLoErO7mKFl6', NULL, NULL, NULL, NULL, NULL),
(26, '', '$2y$10$73cV5qCRQvJ3s8H1JA3/5.DC7sNBbxlva8OCIsic3O9TcYSIWfzke', '', NULL, '', '', ''),
(27, 'soku', '$2y$10$zSt3U.K1x0LhSy9Ub12G6usYHUeFcwTUAoH/WMRiOjacxPWTPT/Yi', 'ashok@gmail.com', 'WIN_20260623_18_17_28_Pro.jpg', 'ashok', '9347457225', 'std'),
(28, 'nikki', '$2y$10$oBBYQyW7nPSCOozdD18yrOnZ.MjF/AxMGMEYOnkPUlDsHdzERjNgG', 'nikki@gmail.com', NULL, 'nikki', '7095096385', 'i am nikki'),
(29, 'chinnu', '$2y$10$stb7hQ/7YIWwqlUpYo4uoe4dOcsp8DYj./DpYsPqj4ubrhHsQNwwq', 'agnikancharla@gmail.com', NULL, 'chinnu', '7095096385', 'carpenter'),
(30, 'chitti', '$2y$10$1ibsB8vXYtJKYm/b66Bos.WhCfF0DDuo8TH2PxEO5xTvU1YS1A.NS', 'chitti@gmail.com', NULL, 'chitti', '858658523', 'nothing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
