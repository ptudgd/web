-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2018 lúc 05:25 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(255) NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isVender` tinyint(1) DEFAULT NULL,
  `isCustomer` tinyint(1) DEFAULT NULL,
  `WriteDate` datetime DEFAULT NULL,
  `EditDate` datetime DEFAULT NULL,
  `WriterId` int(255) DEFAULT NULL,
  `EditorId` int(255) DEFAULT NULL,
  `CustomerName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`CustomerId`, `Phone`, `Email`, `isVender`, `isCustomer`, `WriteDate`, `EditDate`, `WriterId`, `EditorId`, `CustomerName`) VALUES
(1, '01674404746', 'nguyenhoangduy1997@gmail.com', 1, 1, NULL, NULL, NULL, NULL, 'Nguyen Hoang Duy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `EmployeeId` int(255) NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WriteDate` datetime DEFAULT NULL,
  `EditDate` datetime DEFAULT NULL,
  `WriterId` int(255) DEFAULT NULL,
  `EditorId` int(255) DEFAULT NULL,
  `EmployeeName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`EmployeeId`, `Phone`, `Email`, `Address`, `WriteDate`, `EditDate`, `WriterId`, `EditorId`, `EmployeeName`) VALUES
(1, '01674404746', 'nguyenhoangduy1997@gmail.com', 'Q8', NULL, NULL, NULL, NULL, 'Nguyen Hoang Duy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductId` int(255) NOT NULL,
  `ProductName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Barcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quantity` datetime DEFAULT NULL,
  `WriteDate` datetime DEFAULT NULL,
  `EditDate` datetime DEFAULT NULL,
  `WriterId` int(255) DEFAULT NULL,
  `EditorId` int(255) DEFAULT NULL,
  `Note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductGroupId` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Barcode`, `Quantity`, `WriteDate`, `EditDate`, `WriterId`, `EditorId`, `Note`, `ProductGroupId`) VALUES
(20200, 'Colorful 1050Ti 2 Fan', '123456789012', NULL, NULL, NULL, NULL, NULL, 'Khong Bao Hanh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productgroup`
--

CREATE TABLE `productgroup` (
  `ProductGroupId` int(255) NOT NULL,
  `ProductGroupName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productgroup`
--

INSERT INTO `productgroup` (`ProductGroupId`, `ProductGroupName`, `Note`) VALUES
(1, 'Linh kien', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale`
--

CREATE TABLE `sale` (
  `SaleId` int(255) NOT NULL,
  `SaleGroupId` int(255) NOT NULL,
  `SaleDate` datetime DEFAULT NULL,
  `CustomerId` int(255) DEFAULT NULL,
  `EmployeeId` int(255) DEFAULT NULL,
  `Note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WriteDate` datetime DEFAULT NULL,
  `EditDate` datetime DEFAULT NULL,
  `WriterId` int(255) DEFAULT NULL,
  `EditorId` int(255) DEFAULT NULL,
  `Version` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sale`
--

INSERT INTO `sale` (`SaleId`, `SaleGroupId`, `SaleDate`, `CustomerId`, `EmployeeId`, `Note`, `WriteDate`, `EditDate`, `WriterId`, `EditorId`, `Version`) VALUES
(1, 1, NULL, 1, 1, 'Ghi chú', NULL, NULL, NULL, NULL, '2018-04-28 04:48:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `saleitem`
--

CREATE TABLE `saleitem` (
  `SaleId` int(255) NOT NULL,
  `SaleGroupId` int(255) NOT NULL,
  `SaleItemId` int(255) NOT NULL,
  `ProductId` int(255) DEFAULT NULL,
  `Qty` decimal(65,0) DEFAULT NULL,
  `Price` int(255) DEFAULT NULL,
  `Discount` int(255) DEFAULT NULL,
  `Total` int(255) DEFAULT NULL,
  `Remark` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WriteDate` datetime DEFAULT NULL,
  `EditDate` datetime DEFAULT NULL,
  `WriterId` int(255) DEFAULT NULL,
  `EditorId` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `saleitem`
--

INSERT INTO `saleitem` (`SaleId`, `SaleGroupId`, `SaleItemId`, `ProductId`, `Qty`, `Price`, `Discount`, `Total`, `Remark`, `WriteDate`, `EditDate`, `WriterId`, `EditorId`) VALUES
(1, 1, 1, 20200, '1', 10000, NULL, 10000, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EmployeeId` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Username`, `Password`, `Email`, `EmployeeId`) VALUES
('admin', 'admin', 'nguyenhoangduy1997@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`);

--
-- Chỉ mục cho bảng `productgroup`
--
ALTER TABLE `productgroup`
  ADD PRIMARY KEY (`ProductGroupId`);

--
-- Chỉ mục cho bảng `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`SaleId`,`SaleGroupId`);

--
-- Chỉ mục cho bảng `saleitem`
--
ALTER TABLE `saleitem`
  ADD PRIMARY KEY (`SaleId`,`SaleGroupId`,`SaleItemId`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
