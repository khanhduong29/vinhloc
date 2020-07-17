-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 17, 2020 lúc 09:56 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vinhloc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Chất liệu', '2020-07-16 08:11:56', '2020-07-16 08:11:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attribute_id`, `value`, `created_at`, `updated_at`) VALUES
(7, 4, 'Đồng nguyên chất', '2020-07-16 08:12:57', '2020-07-16 08:12:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `location`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', 'bg-1.jpg', '1', '#', 1, '2020-07-16 08:42:37', '2020-07-16 08:42:37'),
(2, 'đ', 'bg-4.jpg', '2', '#', 1, '2020-07-16 08:43:28', '2020-07-16 08:43:28'),
(3, 'đ', 'bg-2.jpg', '3', '#', 1, '2020-07-16 08:44:02', '2020-07-16 08:44:02'),
(4, 'đ', 'keyboard_backlight_red_136083_3840x2160.jpg', '4', '#', 1, '2020-07-16 08:44:22', '2020-07-16 08:44:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `name`, `slug`, `des`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, '3 PHONG CÁCH ĐÈN NỘI THẤT KHÔNG BAO GIỜ LỖI THỜI', '3-phong-cach-den-noi-that-khong-bao-gio-loi-thoi', '<p><span style=\"font-family: Roboto-Regular; font-size: 14px;\">Đèn thả là bộ đèn mang tính chất nghệ thuật, vừa cung cấp ánh sáng cho ngôi nhà, lại vừa tạo nên nét đẹp cho ngôi nhà. Vậy làm sao để nhận biết được một bộ đèn đẹp qua những dấu hiệu đơn giản? Đèn thả là bộ đèn mang tính chất nghệ thuật, vừa cung cấp ánh sáng cho ngôi nhà, lại vừa tạo nên nét đẹp cho ngôi nhà. Vậy làm sao để nhận biết được một bộ đèn đẹp qua những dấu hiệu đơn giản?</span><br></p>', '<div id=\"attachment_408\" class=\"wp-caption aligncenter\" style=\"color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; font-size: 14px;\"><p class=\"wp-caption-text\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; line-height: inherit; color: inherit; font-family: inherit; font-weight: inherit; font-style: inherit; overflow-wrap: break-word;\">Một ý tưởng độc đáo cho ngôi nhà, một hình ảnh đa sắc màu nhưng vẫn mang đậm hơi thở của người thiết kế. Đèn trang trí nội thất đang lên ngôi với rất nhiều kiểu dáng đặc biệt.</p></div><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; overflow-wrap: break-word;\">Những phong cách đèn nội thất luôn được nhiều người chọn lựa nhất sau đây sẽ giúp bạn hiểu hơn về ngành đèn này.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; overflow-wrap: break-word;\">Xem thêm:&nbsp;<a href=\"http://denvinhloc.vn/tin-tuc/744-nhung-mau-den-noi-that-danh-rieng-cho-trung-thu.html\" style=\"color: rgb(254, 179, 0); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: none; transition: all 0.3s ease-in-out 0s; margin: 0px; padding: 0px; vertical-align: baseline;\">Những mẫu đèn nội thất dành riêng cho mùa Tết Trung Thu</a></p><h2 style=\"margin: 0.83em 0px; font-family: Lora-Regular, sans-serif; font-weight: bold; line-height: inherit; color: rgb(198, 206, 202); font-size: 1.5em; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><strong style=\"font-weight: bold; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 21px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: inherit; font-family: inherit; font-style: inherit;\">TRANG TRÍ ĐÈN NỘI THẤT ĐƠN GIẢN, CỔ ĐIỂN</strong></h2><div id=\"attachment_410\" class=\"wp-caption aligncenter\" style=\"color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; font-size: 14px;\"><img class=\"size-full wp-image-410\" src=\"http://denvinhloc.vn/wp-content/uploads/2017/05/den-trang-tri-phong-ngu.png\" alt=\"den-trang-tri-phong-ngu\" width=\"746\" height=\"497\" style=\"border: 0px; margin: 10px auto; padding: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: inherit; font-family: inherit; font-weight: inherit; font-style: inherit; max-width: 100%; object-fit: inherit; display: block; height: auto;\"><p class=\"wp-caption-text\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: inherit; font-family: inherit; font-weight: inherit; font-style: inherit; overflow-wrap: break-word; text-align: center;\">den-trang-tri-phong-ngu</p></div><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; overflow-wrap: break-word;\">Ngày nay, khi con người quá nhộn nhịp với sắc màu cuộc sống. Có đôi lúc bạn muốn quay về những ngày tháng cổ xưa để lánh xa khỏi đô thị ồn ào này. Những thiết kế đơn giản, không cầu kỳ nhưng vẫn nói lên sự thanh lịch, trang nhã đã khiến bao người phải ngẩn ngơ trước vẻ đẹp đó. Thiết kế này không bao hàm những chi tiết cầu kỳ. Nó có thể được trưng diện tại các căn hộ chung cư, nội thất phố cho đến những căn biệt thự hạng sang. Mặc dù được trang trí đơn giản nhưng chất liệu của nó cũng nói lên tất cả, Chất liệu chủ yếu của những loại đèn này thường là thủy tinh cao cấp, kim loại hoặc nhựa resin, composite…</p><h2 style=\"margin: 0.83em 0px; font-family: Lora-Regular, sans-serif; font-weight: bold; line-height: inherit; color: rgb(198, 206, 202); font-size: 1.5em; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><strong style=\"font-weight: bold; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 21px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: inherit; font-family: inherit; font-style: inherit;\">ĐÈN TRANG TRÍ TINH TẾ, ĐẶC SẮC</strong></h2><div id=\"attachment_411\" class=\"wp-caption aligncenter\" style=\"color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; font-size: 14px;\"><img class=\"size-full wp-image-411\" src=\"http://denvinhloc.vn/wp-content/uploads/2017/05/sdc10181.jpg\" alt=\"Den trang tri tinh te, dac sac\" width=\"600\" height=\"500\" style=\"border: 0px; margin: 10px auto; padding: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: inherit; font-family: inherit; font-weight: inherit; font-style: inherit; max-width: 100%; object-fit: inherit; display: block; height: auto;\"><p class=\"wp-caption-text\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: inherit; font-family: inherit; font-weight: inherit; font-style: inherit; overflow-wrap: break-word; text-align: center;\">Den trang tri tinh te, dac sac</p></div><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; overflow-wrap: break-word;\">Nếu bạn đang sở hữu trong tay một không gian đương đại, tân cổ điển thì&nbsp;<a rel=\"noopener noreferrer\" href=\"http://denvinhloc.vn/\" target=\"_blank\" style=\"color: rgb(254, 179, 0); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: none; transition: all 0.3s ease-in-out 0s; margin: 0px; padding: 0px; vertical-align: baseline;\">đèn nội thất</a>&nbsp;phải được thiết kế rất cầu kỳ, tinh xảo thì mới hài hòa được với không gian. Đại diện cho không gian này, những bộ đèn pha lê với những chi tiết bắt mắt hay đơn giản là những bộ đèn Châu Âu cầu kỳ từ hình thức. Tất cả đều được thể hiện theo đúng ý tưởng của bạn. Những mẫu đèn này toát lên vẻ sang trọng, cổ điển như những không gian Tây Âu. Các nhà hàng, quán café hay khách sạn sang trọng đều có thể lắp đặt những bộ đèn này. Hoặc đơn giản bạn muốn không gian của gia đình mình có nét phong thủy giúp cả nhà luôn an lành và gặp nhiều tài lộc, phong cách này cũng rất phù hợp.</p><h2 style=\"margin: 0.83em 0px; font-family: Lora-Regular, sans-serif; font-weight: bold; line-height: inherit; color: rgb(198, 206, 202); font-size: 1.5em; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><strong style=\"font-weight: bold; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 21px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: inherit; font-family: inherit; font-style: inherit;\">ĐÈN TRANG TRÍ THEO NÉT CỔ ĐIỂN</strong></h2><div id=\"attachment_412\" class=\"wp-caption aligncenter\" style=\"color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; font-size: 14px;\"><img class=\"size-full wp-image-412\" src=\"http://denvinhloc.vn/wp-content/uploads/2017/05/img_1570.png\" alt=\"Den trang tri theo net co dien\" width=\"600\" height=\"500\" style=\"border: 0px; margin: 10px auto; padding: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: inherit; font-family: inherit; font-weight: inherit; font-style: inherit; max-width: 100%; object-fit: inherit; display: block; height: auto;\"><p class=\"wp-caption-text\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: inherit; font-family: inherit; font-weight: inherit; font-style: inherit; overflow-wrap: break-word; text-align: center;\">Den trang tri theo net co dien</p></div><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; overflow-wrap: break-word;\">Tất cả những chi tiết trên bộ đèn này đều mang hơi hướng cổ điển. Nét đẹp truyền thống sẽ được thể hiện ngay trên chính những bộ đèn mà bạn chọn lựa. Và kiểu trang trí này hợp với người Á Đông, cho nên phần nhiều chất liệu được sử dụng là gỗ, nhựa giả gỗ, da động vật,.. Ánh sáng đèn thường có màu vàng hoặc trắng vàng. Những bộ&nbsp;<a rel=\"noopener noreferrer\" href=\"http://denvinhloc.vn/san-pham/den-op-tran.html\" target=\"_blank\" style=\"color: rgb(254, 179, 0); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: none; transition: all 0.3s ease-in-out 0s; margin: 0px; padding: 0px; vertical-align: baseline;\">đèn trần</a>,&nbsp;<a rel=\"noopener noreferrer\" href=\"http://denvinhloc.vn/san-pham/den-treo-tuong.html\" target=\"_blank\" style=\"color: rgb(254, 179, 0); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: none; transition: all 0.3s ease-in-out 0s; margin: 0px; padding: 0px; vertical-align: baseline;\">đèn tường</a>, đèn thả hay&nbsp;<a href=\"http://denvinhloc.vn/san-pham/den-ban.html\" target=\"_parent\" style=\"color: rgb(254, 179, 0); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: none; transition: all 0.3s ease-in-out 0s; margin: 0px; padding: 0px; vertical-align: baseline;\">đèn bàn</a>&nbsp;đều được thể hiện tốt với phong cách này.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 0.9rem; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: inherit; color: rgb(198, 206, 202); font-family: Lora-Regular, sans-serif; overflow-wrap: break-word;\">Như vậy dù bạn chọn phong cách nào, dù có hiện đại, cổ điển hay chỉ là những mẫu đơn giản thì việc thể hiện theo các tiêu chí như trên vẫn cần đảm bảo. Hãy đến với Vĩnh Lộc Lighting để cảm nhận mọi phong cách mà chúng tôi cung cấp. Nếu cần tư vấn hãy liên hệ qua hotline: 0916681919 để được tư vấn ngay hôm nay nhé!</p>', 'hà nguyễn 11.jpg', '2020-07-16 01:55:56', '2020-07-16 02:02:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `slug`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'den-chum', 'Đèn chùm', '137edd4960d1868fdfc0.jpg', '2020-07-16 04:32:32', '2020-07-16 04:32:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `config`
--

CREATE TABLE `config` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `config`
--

INSERT INTO `config` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'email', 'Denvinhloc243@gmail.com', '2020-07-17 01:55:42', '2020-07-17 03:44:16'),
(2, 'phone', '091 668 1919', '2020-07-17 01:58:34', '2020-07-17 01:58:34'),
(3, 'address', '234 Tôn Đức Thắng, Đống Đa, Hà Nội', '2020-07-17 01:59:09', '2020-07-17 01:59:09'),
(4, 'about', '<h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\"><span style=\"margin: 0px; padding: 0px; color: rgb(219, 175, 86); text-transform: uppercase; font-size: 17px;\">THÔNG TIN CHUNG</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Tên công ty: Công ty Cổ Phẩn Đầu Tư Nội Thất Và Dịch Vụ Phú Vinh - Vĩnh Lộc Luxury</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Địa chỉ: 243 Tôn Đức Thắng, Đống Đa, Hà Nội</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\"><a href=\"http://localhost/vinhloc/about\" title=\"\" style=\"margin: 0px; padding: 0px; color: rgb(254, 179, 0); border: none; outline: none;\">091 688 1919&nbsp;</a>-&nbsp;<a href=\"http://localhost/vinhloc/about\" title=\"\" style=\"margin: 0px; padding: 0px; color: rgb(254, 179, 0); border: none; outline: none;\">0243 5135 724</a></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">website:&nbsp;<a href=\"http://localhost/vinhloc/index.html\" style=\"margin: 0px; padding: 0px; color: rgb(254, 179, 0); border: none; outline: none;\">vinhlocluxury.com</a></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\"><a href=\"http://localhost/vinhloc/about\" title=\"\" style=\"margin: 0px; padding: 0px; color: rgb(254, 179, 0); border: none; outline: none;\">denvinhloc243@gmail.com</a></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Ngành nghề kinh doanh:&nbsp;<span style=\"margin: 0px; padding: 0px; font-weight: bolder;\">Đèn trang trí nội - ngoại thất và âm thanh</span></p><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\"><span style=\"margin: 0px; padding: 0px; color: rgb(219, 175, 86); text-transform: uppercase; font-size: 17px;\">ĐÔI NÉT VỀ VĨNH LỘC</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Trải qua 9 năm kinh nghiệm trên thị trường, cùng với những sản phẩm độc, đẹp, đẳng cấp và mới mẻ, Vĩnh Lộc Luxury luôn tự hào là doanh nghiệp đi đầu trong lĩnh vực trang trí đèn nội - ngoại thất.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Không những chỉ cung cấp các mẫu đèn độc đáo, cao cấp mà chúng tôi còn nhận thi công, lắp đặt và tư vấn miễn phí khi quý khách yêu cầu. Sự đón nhận và ủng hộ của quý khách hàng và đối tác đã tạo động lực cho công ty chúng tôi ngày một phát triển lớn mạnh hơn.</p><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\"><span style=\"margin: 0px; padding: 0px; color: rgb(219, 175, 86); text-transform: uppercase; font-size: 17px;\">SỨ MỆNH, TẦM NHÌN, TÔN CHỈ HOẠT ĐỘNG</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Vĩnh Lộc Luxury luôn tự hào là một doanh nghiệp có nhiều năm kinh nghiệm trong lĩnh vực thi công trang trí đèn nội - ngoại thất. Sứ mệnh của công ty là đem những giá trị đích thực, những trải nghiệm đắt giá cho khách hàng khi sử dụng dịch vụ, nhằm đưa lĩnh vực trang trí nội- ngoại thất lên một tầm cao mới. Mọi thứ không dừng lại ở vẻ đẹp mà hơn hết nó là cả một nghệ thuật tiềm tàng trong từng kiến trúc xây dựng.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Sự phát triển của ngành bất động sản đi lên kéo theo nhiều ngành nghề có liên quan cũng được chú trọng hơn. Trang trí đèn nội thất cũng là một trong số ngành nghề đó. Việc chú trọng vào các sản phẩm có giá trị, mang tính thẩm mỹ cao chính là việc mà công ty chúng tôi đang hướng đến. Công ty đang mở rộng quy mô kinh doanh toàn quốc, nhập về các sản phẩm được khách hàng yêu thích để nhằm thỏa mãn nhu cầu tối cao về nghệ thuật của con người.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">“Uy tín tạo dựng niềm tin” là mục tiêu mà đèn Vĩnh Lộc hướng tới. Chúng tôi đi từ chất lượng sản phẩm và dịch vụ để xây dựng nên sự tin tưởng của khách hàng. Thương hiệu đèn Vĩnh Lộc hiện nay cũng đang phát triển mạnh trên thị trường. Sự đón nhận những mẫu mã sản phẩm trên thị trường với Vĩnh Lộc là điều ưu ái nhất mà khách hàng mang đến cho chúng tôi.</p>', '2020-07-17 01:59:33', '2020-07-17 02:28:58'),
(5, 'company', 'Công ty Cổ Phẩn Đầu Tư Nội Thất Và Dịch Vụ Phú Vinh - Vĩnh Lộc Lighting', '2020-07-17 02:00:24', '2020-07-17 02:00:24'),
(6, 'website', 'https://vinhlocluxury.com/', '2020-07-17 02:00:36', '2020-07-17 02:00:36'),
(7, 'service', '<h3 style=\"margin: 20px 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\"><span style=\"margin: 0px; padding: 0px; color: rgb(219, 175, 86); text-transform: uppercase; font-size: 20px;\">CUNG CẤP DỊCH VỤ CHUYÊN NGHIỆP, HIỆN ĐẠI</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Quý khách đang đi tìm một địa chỉ uy tín, cung cấp các sản phẩm hiện đại, mang đậm phong cách Châu Âu? Hãy đến với Vĩnh Lộc Luxury, công ty chúng tôi luôn có những sản phẩm mới nhất, tốt nhất, độc đáo nhất khi mà trên thị trường chưa xuất hiện.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Khi Quý khách đặt hàng tại&nbsp;<a href=\"http://localhost/vinhloc/index.html\" style=\"margin: 0px; padding: 0px; color: rgb(254, 179, 0); border: none; outline: none;\">vinhlocluxury.com</a>, Quý khách sẽ được vận chuyển và lắp đặt miễn phí hoàn toàn. Những đơn hàng nội thành, chỉ mất chưa đầy 30 phút, hàng sẽ có sẵn tới địa chỉ quý khách muốn. Đội ngũ nhân sự sẽ giúp quý khách lắp đặt hệ thống đèn chuyên nghiệp. Từng chi tiết khi lắp như: hướng đèn, vị trí đặt đèn, quy cách bảo quản sẽ được nhân viên tư vấn nhiệt tình.</p><h3 style=\"margin: 20px 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\"><span style=\"margin: 0px; padding: 0px; color: rgb(219, 175, 86); text-transform: uppercase; font-size: 20px;\">ĐỘI NGŨ NHÂN SỰ GIÀU KINH NGHIỆM, NHIỆT TÌNH, SÁNG TẠO</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\">Sự chuyên nghiệp không dừng lại ở các sản phẩm của Vĩnh Lộc mà con người nơi đây cũng sẽ khiến quý khách cảm nhận được điều đó. Đội ngũ nhân viên kinh doanh sẽ tư vấn cho bạn những mẫu đèn nào đang được thịnh hành nhất, quý khách nên chọn loại đèn nào để phù hợp với căn phòng của mình. Nhân viên kỹ thuật là người sẽ hoàn thiện giúp quý khách những công trình, những tuyệt tác đẹp nhất, độc nhất.</p><h3 style=\"margin: 20px 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\"><span style=\"margin: 0px; padding: 0px; color: rgb(219, 175, 86); text-transform: uppercase; font-size: 20px;\">CUNG CẤP DỊCH VỤ THI CÔNG, TRANG TRÍ ĐÈN NỘI THẤT TẠI NHÀ, TẠI CÔNG TRÌNH</span></h3><div class=\"contain-sr\" style=\"margin: 0px; padding: 0px; font-family: Cambria, sans-serif; overflow: hidden; color: rgb(198, 206, 202);\"><div class=\"img-right\" style=\"margin: 0px; padding: 0px 0px 0px 15px; width: 330px; float: right;\"><img src=\"http://localhost/vinhloc/public/frontend/images/product/2e3d45f2764a9014c95b.jpg\" alt=\"\" style=\"margin: 0px; padding: 0px; width: 315px;\"></div><div class=\"word-left\" style=\"margin: 0px; padding: 0px; width: 495px;\">Những công trình chúng tôi thi công chính là bằng chứng xác thực nhất để khẳng định chất lượng của Vĩnh Lộc. Quý khách sẽ bắt gặp bất cứ một công trình trang trí đèn nội thất nào đó, nhưng nó chỉ là vẻ đẹp thông thường do bộ đèn ấy mang lại thôi mà không thể nhìn được nghệ thuật toát lên từ những tác phẩm đó. Nhưng đến với Vĩnh Lộc Luxury, ngắm những công trình chúng tôi thi công, chắc chắn quý khách sẽ cảm thấy hoàn toàn khác biệt so với những bên khác làm. Quý khách hãy ghé thăm công trình của chúng tôi để biết thêm về những thành công mà chúng tôi đạt được.</div></div><h3 style=\"margin: 20px 0px; padding: 0px; font-family: Cambria, sans-serif; color: rgb(198, 206, 202);\"><span style=\"margin: 0px; padding: 0px; color: rgb(219, 175, 86); text-transform: uppercase; font-size: 20px;\">CẢM NHẬN CỦA KHÁCH HÀNG VỀ DỊCH VỤ CỦA VĨNH LỘC LUXURY</span></h3><div class=\"contain-sr\" style=\"margin: 0px; padding: 0px; font-family: Cambria, sans-serif; overflow: hidden; color: rgb(198, 206, 202);\"><div class=\"img-right\" style=\"margin: 0px; padding: 0px 0px 0px 15px; width: 330px; float: right;\"><img src=\"http://localhost/vinhloc/public/frontend/images/product/0fcdb1b05c06ba58e317.jpg\" alt=\"\" style=\"margin: 0px; padding: 0px; width: 315px;\"></div><div class=\"word-left\" style=\"margin: 0px; padding: 0px; width: 495px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px;\">Trong số các dự án Vĩnh Lộc thi công, một câu nói của vị khách hàng đã giúp chúng tôi có thêm động lực và phát triển như hôm nay. Mr.Đoàn – Tổng giám đốc Phú Thái Group VT 15 – Ecopark bày tỏ cảm xúc:</p><p class=\"font-italic\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px;\">“Một tác phẩm nghệ thuật cần nổi bật lên cái hồn của người nghệ sỹ. Những người làm nên một tuyệt tác để đời đáng được trân trọng. Vĩnh Lộc – đơn vị đã giúp tôi hoàn thành một tác phẩm nghệ thuật. Theo cá nhân tôi nghĩ, nếu cứ giữ vững phong độ này hoặc hơn thế nữa, chắc chắn Vĩnh Lộc sẽ không chỉ dừng lại ở những nghệ thuật trong nước mà còn vươn tầm ra khu vực.”</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px;\">Đó là lời bày tỏ cảm xúc rất chân thành của Mr Đoàn, còn rất nhiều những cá nhân và tập thể khác bày tỏ niềm hạnh phúc khi được hợp tác với Vĩnh Lộc. Cùng đến với thế giới đèn của chúng tôi để cảm nhận được sự kho tàng nghệ thuật trong từng tác phẩm nhé.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px;\">Chúc quý khách mạnh khỏe và thành công!</p></div></div>', '2020-07-17 02:01:05', '2020-07-17 02:37:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `construction`
--

CREATE TABLE `construction` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Minh', 'minhbs200x@gmail.com', '$2y$10$Fr8rKr8utxlUYcI4M9tjKuJnKQisX1hG0rn15cxj7apd84Z3ifFHa', 'cJLRMLW5fvhbj1wfHgfy1CbY4x8PFJuSTOvoAWUcENrkHynJbDbJbEIAzm9n', '2020-07-14 07:38:50', '2020-07-14 07:38:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_10_025444_create_products_table', 1),
(4, '2020_07_10_025926_create_banner_table', 1),
(5, '2020_07_10_030107_create_blog_table', 1),
(6, '2020_07_10_030454_create_brand_table', 1),
(7, '2020_07_10_030729_create_construction_table', 1),
(8, '2020_07_10_031046_create_categories_table', 1),
(9, '2020_07_11_011215_create_product_attr_table', 1),
(10, '2020_07_11_011643_create_attribute_table', 1),
(11, '2020_07_11_011902_create_attr_values_table', 1),
(12, '2020_07_11_023732_create_customer_table', 1),
(13, '2020_07_14_221708_create_attributes_table', 2),
(14, '2020_07_14_221833_create_attribute_values_table', 2),
(15, '2020_07_14_222235_create_product_attribute_table', 2),
(16, '2020_07_16_105602_create_oders_table', 2),
(17, '2020_07_16_105633_create_oder_detail_table', 2),
(18, '2020_07_16_155009_create_config_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id_oder` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_detail`
--

CREATE TABLE `oder_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_oder` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `cate_id`, `code`, `slug`, `name`, `price`, `image`, `des`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'MT8079D-4B', 'den-chum', 'Đèn chùm', 89900.00, '061915d98b626d3c3473.jpg', '<p>fffffffffffffffff</p><p>fffffffffffffffffffffffffff</p><p>ffffffffffffffffffff</p>', 1, '2020-07-16 08:13:30', '2020-07-16 08:13:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `products_id`, `attribute_id`, `created_at`, `updated_at`) VALUES
(2, 2, 4, '2020-07-16 08:13:30', '2020-07-16 08:13:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'minh', 'user1.png', 'admin@gmail.com', NULL, '$2y$10$Fr8rKr8utxlUYcI4M9tjKuJnKQisX1hG0rn15cxj7apd84Z3ifFHa', '1', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `construction`
--
ALTER TABLE `construction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id_oder`);

--
-- Chỉ mục cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
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
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `construction`
--
ALTER TABLE `construction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id_oder` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
