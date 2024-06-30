-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 30, 2024 lúc 11:31 AM
-- Phiên bản máy phục vụ: 8.0.36
-- Phiên bản PHP: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php3_congdiem_ass1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`) VALUES
(1, 'Alex John'),
(2, 'John Castler'),
(3, 'Madam'),
(4, 'Alex 1'),
(5, 'John Student'),
(6, 'Customer F'),
(7, 'Customer G'),
(8, 'Customer H'),
(9, 'Customer I'),
(10, 'Customer J');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `department_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `department_id`) VALUES
(1, 'Employee A', 1),
(2, 'Employee B', 5),
(3, 'Employee C', 3),
(4, 'Employee D', 7),
(5, 'Employee E', 2),
(6, 'Employee F', 3),
(7, 'Employee G', 1),
(8, 'Employee H', 6),
(9, 'Employee I', 3),
(10, 'Employee J', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logs`
--

CREATE TABLE `logs` (
  `id` int NOT NULL,
  `message` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `logs`
--

INSERT INTO `logs` (`id`, `message`, `created_at`) VALUES
(2, 'Log 2', '2020-01-01'),
(3, 'Log 3', '2020-02-01'),
(4, 'Log 4', '2020-03-01'),
(5, 'Log 5', '2020-04-01'),
(6, 'Log 6', '2020-05-01'),
(7, 'Log 7', '2020-06-01'),
(8, 'Log 8', '2020-07-01'),
(9, 'Log 9', '2020-08-01'),
(10, 'Log 10', '2020-09-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `status`, `total`) VALUES
(1, 1, 'completed', 150),
(2, 2, 'pending', 80),
(3, 3, 'completed', 120),
(4, 4, 'shipped', 200),
(5, 5, 'completed', 90),
(6, 6, 'pending', 60),
(7, 7, 'completed', 110),
(8, 8, 'shipped', 140),
(9, 9, 'completed', 50),
(10, 10, 'completed', 130);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 10),
(2, 2, 2, 5),
(3, 3, 3, 7),
(4, 4, 3, 3),
(5, 5, 1, 20),
(6, 6, 2, 2),
(7, 7, 7, 15),
(8, 8, 8, 9),
(9, 9, 4, 4),
(10, 10, 4, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'Product 1', 10, 100),
(2, 'Product 2', 20, 50),
(3, 'Product 3', 15, 70),
(4, 'Product 4', 25, 30),
(5, 'Product 5', 5, 200),
(6, 'Product 6', 30, 20),
(7, 'Product 7', 12, 150),
(8, 'Product 8', 18, 90),
(9, 'Product 9', 22, 40),
(10, 'Product 10', 8, 250),
(24, 'Sản phẩm thêm mới', 150, 30),
(25, 'Sản phẩm thêm mới', 150, 30),
(26, 'Sản phẩm thêm mới', 150, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sales`
--

CREATE TABLE `sales` (
  `id` int NOT NULL,
  `amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `sales`
--

INSERT INTO `sales` (`id`, `amount`) VALUES
(1, 1000),
(2, 2000),
(3, 3000),
(4, 4000),
(5, 5000),
(6, 6000),
(7, 700),
(8, 800),
(9, 900),
(10, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `status`, `birth_date`) VALUES
(1, 'John Doe', 28, 'active', '1996-05-15'),
(2, 'Jane Smith', 22, 'inactive', '2002-07-21'),
(3, 'Michael Johnson', 30, 'active', '1994-03-09'),
(4, 'Emily Davis', 27, 'inactive', '1997-12-05'),
(5, 'Chris Lee', 35, 'active', '1989-05-20'),
(6, 'Anna White', 24, 'active', '2000-10-11'),
(7, 'David Brown', 32, 'inactive', '1992-04-14'),
(8, 'Linda Black', 26, 'active', '1998-05-23'),
(9, 'James Green', 29, 'inactive', '1995-08-30'),
(10, 'Patricia Blue', 31, 'active', '1993-11-16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
