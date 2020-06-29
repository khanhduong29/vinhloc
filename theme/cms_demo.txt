/*
 Navicat Premium Data Transfer

 Source Server         : CMS_DEMO
 Source Server Type    : MySQL
 Source Server Version : 50621
 Source Host           : localhost:3306
 Source Schema         : cms_demo

 Target Server Type    : MySQL
 Target Server Version : 50621
 File Encoding         : 65001

 Date: 27/06/2020 08:46:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for configs
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `act` tinyint(1) NULL DEFAULT 0,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'TEXT',
  `region` int(11) NULL DEFAULT NULL,
  `note` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_delete` tinyint(1) NULL DEFAULT 0,
  `ord` int(10) NULL DEFAULT NULL COMMENT 'Sắp xếp',
  `default_data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`, `keyword`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 62 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO `configs` VALUES (1, 'LOGO', '{\"id\":\"176\",\"name\":\"logo3.png\",\"title\":null,\"caption\":null,\"alt\":null,\"description\":null,\"create_time\":\"1579576911\",\"parent\":\"0\",\"is_file\":\"1\",\"path\":\"uploads/\",\"file_name\":\"logo3.png\",\"extra\":\"{\\\"extension\\\":\\\"png\\\",\\\"size\\\":\\\"36.83 KB\\\",\\\"date\\\":1579576911,\\\"isfile\\\":1,\\\"dir\\\":\\\"uploads\\\\/\\\",\\\"path\\\":\\\"uploads\\\\/logo3.png\\\",\\\"width\\\":300,\\\"height\\\":101,\\\"thumb\\\":\\\"uploads\\\\/thumbs\\\\/def\\\\/logo3.png\\\"}\",\"trash\":\"0\"}', 1, 'IMGV2', 1, 'Logo website 1', 0, 1, NULL);
INSERT INTO `configs` VALUES (2, 'FACE', 'https://www.facebook.com/tech5s/', 0, 'TEXT', 9, 'Facebook', 0, NULL, NULL);
INSERT INTO `configs` VALUES (3, 'ANALYTICS', '', 1, 'TEXT', 1, 'Analytics', 0, NULL, NULL);
INSERT INTO `configs` VALUES (4, 'SITE_NAME', 'Bách Hợp Tiểu Thuyết', 1, 'TEXT', 3, 'Tên website', 0, NULL, NULL);
INSERT INTO `configs` VALUES (5, 'TITLE_SEO', 'Bách Hợp Tiểu Thuyết - Góc Nhỏ Của Những Đam Mê', 1, 'TEXT', 3, 'Tiêu đề SEO', 0, NULL, NULL);
INSERT INTO `configs` VALUES (6, 'DES_SEO', 'BHTT - Góc Nhỏ Của Những Đam Mê', 1, 'TEXTAREA', 3, 'Mô tả SEO', 0, NULL, NULL);
INSERT INTO `configs` VALUES (7, 'KEY_SEO', 'BHTT', 1, 'TEXTAREA', 3, 'Từ khóa SEO', 0, NULL, NULL);
INSERT INTO `configs` VALUES (8, 'FAVICON', '{\"id\":\"198\",\"name\":\"logo-bhtt2.png\",\"title\":null,\"caption\":null,\"alt\":null,\"description\":null,\"create_time\":\"1579599984\",\"parent\":\"0\",\"is_file\":\"1\",\"path\":\"uploads/\",\"file_name\":\"logo-bhtt2.png\",\"extra\":\"{\\\"extension\\\":\\\"png\\\",\\\"size\\\":\\\"49.50 KB\\\",\\\"date\\\":1579599984,\\\"isfile\\\":1,\\\"dir\\\":\\\"uploads\\\\/\\\",\\\"path\\\":\\\"uploads\\\\/logo-bhtt2.png\\\",\\\"width\\\":100,\\\"height\\\":100,\\\"thumb\\\":\\\"uploads\\\\/thumbs\\\\/def\\\\/logo-bhtt2.png\\\"}\",\"trash\":\"0\"}', 1, 'IMGV2', 1, 'Favicon', 0, NULL, NULL);
INSERT INTO `configs` VALUES (9, 'WMT', '', 1, 'TEXT', 1, 'Web master tool', 0, NULL, NULL);
INSERT INTO `configs` VALUES (10, 'CMS_HEADER', '<!-- Global site tag (gtag.js) - Google Analytics -->\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-157523482-1\"></script>\n<script>\n  window.dataLayer = window.dataLayer || [];\n  function gtag(){dataLayer.push(arguments);}\n  gtag(\'js\', new Date());\n\n  gtag(\'config\', \'UA-157523482-1\');\n</script>\n', 1, 'TEXTAREA', 5, 'Chèn nội dung header', 1, NULL, NULL);
INSERT INTO `configs` VALUES (11, 'CMS_FOOTER', '<!-- Yandex.Metrika counter -->\n<script type=\"text/javascript\" >\n   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};\n   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})\n   (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");\n\n   ym(57363724, \"init\", {\n        clickmap:true,\n        trackLinks:true,\n        accurateTrackBounce:true,\n        webvisor:true\n   });\n</script>\n<noscript><div><img src=\"https://mc.yandex.ru/watch/57363724\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>\n<!-- /Yandex.Metrika counter -->', 1, 'TEXTAREA', 5, 'Chèn nội dung footer', 1, NULL, NULL);
INSERT INTO `configs` VALUES (12, 'MAIL_USER', 'nguyenvanan9889@gmail.com', 1, 'TEXT', 8, 'Email gửi', 0, 4, NULL);
INSERT INTO `configs` VALUES (13, 'MAIL_PASS', 'opuoyqnhefttbvzy', 1, 'TmailXT', 8, 'Pass mail gửi', 0, 5, NULL);
INSERT INTO `configs` VALUES (14, 'MAIL_NAME', 'Truyện BHTT', 1, 'TEXT', 8, 'Tên mail', 0, 2, NULL);
INSERT INTO `configs` VALUES (15, 'MAIL_NHAN', 'nguyenvanan9889@gmail.com', 1, 'TEXT', 8, 'Email nhận thông tin khách hàng gửi', NULL, 3, NULL);
INSERT INTO `configs` VALUES (16, 'MAIL_TITLE', 'Thông tin khách hàng', 0, 'TEXT', 8, 'Tiêu đề mail', NULL, 1, NULL);
INSERT INTO `configs` VALUES (17, 'GOOGLE_RECAPTCHA_SECRE', 'DyVyy-K-XHnrFm5BilJBTkSC', 1, 'TEXT', 9, 'GOOGLE_RECAPTCHA_SECRE', NULL, NULL, NULL);
INSERT INTO `configs` VALUES (18, 'GOOGLE_RECAPTCHA_SITE_KEY', '560556443621-hvolnlhr0rp6enukuco2t3qhf2k4c3sv.apps.googleusercontent.com', 1, 'TEXT', 9, 'GOOGLE_RECAPTCHA_SITE_KEY', NULL, NULL, NULL);
INSERT INTO `configs` VALUES (19, 'FB_APPID', '303371367366190', 1, 'TEXT', 9, 'Facebook app id', NULL, NULL, NULL);
INSERT INTO `configs` VALUES (20, 'FB_APP_SECRET', '82097575b9027eddce35a2738458a16e', 1, 'TEXT', 9, 'Facebook app secret', NULL, NULL, NULL);
INSERT INTO `configs` VALUES (21, 'FBSHARE', '{\"id\":\"2\",\"name\":\"leader.png\",\"title\":\"xinc hào\",\"caption\":\"\",\"alt\":\"\",\"description\":\"\",\"create_time\":\"1574237503\",\"parent\":\"0\",\"is_file\":\"1\",\"path\":\"uploads/\",\"file_name\":\"leader.png\",\"extra\":\"{\\\"extension\\\":\\\"png\\\",\\\"size\\\":\\\"4.42 KB\\\",\\\"date\\\":1574237500,\\\"isfile\\\":1,\\\"dir\\\":\\\"uploads\\\\/\\\",\\\"path\\\":\\\"uploads\\\\/leader.png\\\",\\\"width\\\":128,\\\"height\\\":128,\\\"thumb\\\":\\\"uploads\\\\/thumbs\\\\/def\\\\/leader.png\\\"}\"}', 1, 'IMGV2', 1, 'Ảnh Share Facebook', 0, 1, NULL);
INSERT INTO `configs` VALUES (22, 'COPYRIGHT', 'Copyright 2019 by BHTT. All rights reserved.', 1, 'TEXT', 1, 'Copy right', 0, 1, NULL);
INSERT INTO `configs` VALUES (23, 'FB', 'https://www.facebook.com/webbhtt', 1, 'TEXT', 9, 'Facebook', 0, 1, NULL);
INSERT INTO `configs` VALUES (24, 'YT', 'https://www.youtube.com/channel/UCSdwt7qBzhJXln2sPU_Sbkg?view_as=subscriber', 1, 'TEXT', 9, 'Youtube', 0, NULL, NULL);
INSERT INTO `configs` VALUES (25, 'TW', 'https://twitter.com/search?q=Truy%E1%BB%87n%20b%C3%A1ch%20h%E1%BB%A3p&src=typed_query', 1, 'TEXT', 9, 'Twitter', 0, NULL, NULL);
INSERT INTO `configs` VALUES (26, 'SKYPE', 'webbhtt@outlook.com', 1, 'TEXT', 9, 'Skype', 0, NULL, NULL);
INSERT INTO `configs` VALUES (27, 'BG_TRUYEN', '{\"id\":\"33\",\"name\":\"background1.png\",\"title\":null,\"caption\":null,\"alt\":null,\"description\":null,\"create_time\":\"1577681824\",\"parent\":\"4\",\"is_file\":\"1\",\"path\":\"uploads/demo/\",\"file_name\":\"background1.png\",\"extra\":\"{\\\"extension\\\":\\\"png\\\",\\\"size\\\":\\\"277.60 KB\\\",\\\"date\\\":1577681808,\\\"isfile\\\":1,\\\"dir\\\":\\\"uploads\\\\/demo\\\\/\\\",\\\"path\\\":\\\"uploads\\\\/demo\\\\/background1.png\\\",\\\"width\\\":1366,\\\"height\\\":255,\\\"thumb\\\":\\\"uploads\\\\/demo\\\\/thumbs\\\\/def\\\\/background1.png\\\"}\",\"trash\":\"0\"}', 1, 'IMGV2', 1, 'Ảnh nền trang chuyện', 0, NULL, NULL);
INSERT INTO `configs` VALUES (29, 'LOGO_LOADING', '{\"id\":\"198\",\"name\":\"logo-bhtt2.png\",\"title\":null,\"caption\":null,\"alt\":null,\"description\":null,\"create_time\":\"1579599984\",\"parent\":\"0\",\"is_file\":\"1\",\"path\":\"uploads/\",\"file_name\":\"logo-bhtt2.png\",\"extra\":\"{\\\"extension\\\":\\\"png\\\",\\\"size\\\":\\\"49.50 KB\\\",\\\"date\\\":1579599984,\\\"isfile\\\":1,\\\"dir\\\":\\\"uploads\\\\/\\\",\\\"path\\\":\\\"uploads\\\\/logo-bhtt2.png\\\",\\\"width\\\":100,\\\"height\\\":100,\\\"thumb\\\":\\\"uploads\\\\/thumbs\\\\/def\\\\/logo-bhtt2.png\\\"}\",\"trash\":\"0\"}', 1, 'IMGV2', 1, 'Logo loading', 0, 1, NULL);
INSERT INTO `configs` VALUES (30, 'HOME', 'https://bhtt.vn', 1, 'TEXT', 1, 'Link trang chủ', 0, NULL, NULL);
INSERT INTO `configs` VALUES (31, 'MUSIC_HOME', 'audio.mp3', 1, 'TEXT', 1, 'Đường dẫn nhạc nền', 0, NULL, NULL);
INSERT INTO `configs` VALUES (32, 'LOGO_V2', '{\"id\":\"198\",\"name\":\"logo-bhtt2.png\",\"title\":null,\"caption\":null,\"alt\":null,\"description\":null,\"create_time\":\"1579599984\",\"parent\":\"0\",\"is_file\":\"1\",\"path\":\"uploads/\",\"file_name\":\"logo-bhtt2.png\",\"extra\":\"{\\\"extension\\\":\\\"png\\\",\\\"size\\\":\\\"49.50 KB\\\",\\\"date\\\":1579599984,\\\"isfile\\\":1,\\\"dir\\\":\\\"uploads\\\\/\\\",\\\"path\\\":\\\"uploads\\\\/logo-bhtt2.png\\\",\\\"width\\\":100,\\\"height\\\":100,\\\"thumb\\\":\\\"uploads\\\\/thumbs\\\\/def\\\\/logo-bhtt2.png\\\"}\",\"trash\":\"0\"}', 1, 'IMGV2', 1, 'Logo website 2', 0, 1, NULL);
INSERT INTO `configs` VALUES (36, 'FAVICON72', '', 1, 'IMGV2', 9981, 'Favicon 72px', 1, 1, NULL);
INSERT INTO `configs` VALUES (37, 'FAVICON96', '', 1, 'IMGV2', 9981, 'Favicon 96px', 1, 1, NULL);
INSERT INTO `configs` VALUES (38, 'FAVICON128', '', 1, 'IMGV2', 9981, 'Favicon 128px', 1, 1, NULL);
INSERT INTO `configs` VALUES (39, 'FAVICON144', '', 1, 'IMGV2', 9981, 'Favicon 144px', 1, 1, NULL);
INSERT INTO `configs` VALUES (40, 'FAVICON152', '', 1, 'IMGV2', 9981, 'Favicon 152px', 1, 1, NULL);
INSERT INTO `configs` VALUES (41, 'FAVICON192', '', 1, 'IMGV2', 9981, 'Favicon 192px', 1, 1, NULL);
INSERT INTO `configs` VALUES (42, 'FAVICON384', '', 1, 'IMGV2', 9981, 'Favicon 384px', 1, 1, NULL);
INSERT INTO `configs` VALUES (43, 'FAVICON512', '', 1, 'IMGV2', 9981, 'Favicon 512px', 1, 1, NULL);
INSERT INTO `configs` VALUES (44, 'BACKGROUND_COLOR', '', 1, 'COLOR', 9981, 'Background Color', 1, 1, NULL);
INSERT INTO `configs` VALUES (45, 'MAP_LINK', '', 1, 'TEXT', 9981, 'Link Google Map', 1, 1, NULL);
INSERT INTO `configs` VALUES (46, 'FBAPPID', '2836932789703230', 1, 'TEXT', 1, 'App ID Facebook', 0, 1, NULL);
INSERT INTO `configs` VALUES (47, 'BGLOGIN', '{\"id\":\"323\",\"name\":\"bg.png\",\"title\":null,\"caption\":null,\"alt\":null,\"description\":null,\"create_time\":\"1588971692\",\"parent\":\"0\",\"is_file\":\"1\",\"path\":\"uploads/\",\"file_name\":\"bg.png\",\"extra\":\"{\\\"extension\\\":\\\"png\\\",\\\"size\\\":\\\"53.86 KB\\\",\\\"date\\\":1588971691,\\\"isfile\\\":1,\\\"dir\\\":\\\"uploads\\\\/\\\",\\\"path\\\":\\\"uploads\\\\/bg.png\\\",\\\"width\\\":517,\\\"height\\\":467,\\\"thumb\\\":\\\"uploads\\\\/thumbs\\\\/def\\\\/bg.png\\\"}\",\"trash\":\"0\"}', 1, 'IMGV2', 1, 'Ảnh nền login', 0, NULL, NULL);
INSERT INTO `configs` VALUES (48, 'QLOILOGIN', '<ul>\n<li>Cập nhật truyện mới nhất hàng ngày</li>\n<li>Tham gia với những thành viên cùng sở thích</li>\n<li>Đăng tải và chia sẻ truyện yêu thích</li>\n</ul>', 1, 'EDITOR', 1, 'Nội dung thành viên', 0, NULL, NULL);
INSERT INTO `configs` VALUES (49, 'LOIMOI', '<p>Gửi lời mời gia nhập gia đình BHTT.</p>', 1, 'EDITOR', 1, 'Lời mời thành viên', 0, NULL, NULL);
INSERT INTO `configs` VALUES (50, 'FAVICON72', '', 1, 'IMGV2', 9981, 'Favicon 72px', 1, 1, NULL);
INSERT INTO `configs` VALUES (51, 'FAVICON96', '', 1, 'IMGV2', 9981, 'Favicon 96px', 1, 1, NULL);
INSERT INTO `configs` VALUES (52, 'FAVICON128', '', 1, 'IMGV2', 9981, 'Favicon 128px', 1, 1, NULL);
INSERT INTO `configs` VALUES (53, 'FAVICON144', '', 1, 'IMGV2', 9981, 'Favicon 144px', 1, 1, NULL);
INSERT INTO `configs` VALUES (54, 'FAVICON152', '', 1, 'IMGV2', 9981, 'Favicon 152px', 1, 1, NULL);
INSERT INTO `configs` VALUES (55, 'FAVICON192', '', 1, 'IMGV2', 9981, 'Favicon 192px', 1, 1, NULL);
INSERT INTO `configs` VALUES (56, 'FAVICON384', '', 1, 'IMGV2', 9981, 'Favicon 384px', 1, 1, NULL);
INSERT INTO `configs` VALUES (57, 'FAVICON512', '', 1, 'IMGV2', 9981, 'Favicon 512px', 1, 1, NULL);
INSERT INTO `configs` VALUES (58, 'BACKGROUND_COLOR', '', 1, 'COLOR', 9981, 'Background Color', 1, 1, NULL);
INSERT INTO `configs` VALUES (59, 'MAP_LINK', '', 1, 'TEXT', 9981, 'Link Google Map', 1, 1, NULL);
INSERT INTO `configs` VALUES (60, 'ALERT', '<p>Hệ thống đang trong quá trình nâng cấp tính năng mới. Vui lòng đăng nhập vào website bằng tài khoản email và mật khẩu cũ.</p>\n<p>Những trường hợp bị mất mật khẩu hoặc không nhớ được email đăng ký vui lòng liên hệ Admin qua Fanpage để được hỗ trợ.</p>', 1, 'EDITOR', 1, 'Lời chào', 0, NULL, NULL);
INSERT INTO `configs` VALUES (61, 'TIME_EDIT', '999999999', 1, 'TEXT', 1, 'Thời gian sửa truyện', 0, NULL, NULL);

-- ----------------------------
-- Table structure for group_menu
-- ----------------------------
DROP TABLE IF EXISTS `group_menu`;
CREATE TABLE `group_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of group_menu
-- ----------------------------
INSERT INTO `group_menu` VALUES (1, 'Menu header');
INSERT INTO `group_menu` VALUES (2, 'Menu chân trang');

-- ----------------------------
-- Table structure for history
-- ----------------------------
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` bigint(20) NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 782 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of history
-- ----------------------------
INSERT INTO `history` VALUES (1, 'admin', 1586748771, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (2, 'admin', 1587115477, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (3, 'admin', 1587116310, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (4, 'admin', 1587184240, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (5, 'admin', 1589420045, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (6, 'admin', 1589422000, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (7, 'admin', 1589422175, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (8, 'admin', 1589422310, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (9, 'admin', 1589426258, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (10, 'admin', 1589427149, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (11, 'admin', 1589439514, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (12, 'admin', 1589439544, 'Thêm mới nội dung pages', '::1');
INSERT INTO `history` VALUES (13, 'admin', 1589441949, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (14, 'admin', 1589441963, 'Thêm mới nội dung pages', '::1');
INSERT INTO `history` VALUES (15, 'admin', 1589442186, 'Thêm mới nội dung pages', '::1');
INSERT INTO `history` VALUES (16, 'admin', 1589447627, 'Thêm mới nội dung pages', '::1');
INSERT INTO `history` VALUES (17, 'admin', 1589476678, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (18, 'admin', 1589621281, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (19, 'admin', 1589698420, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (20, 'admin', 1589708793, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (21, 'admin', 1589725646, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (22, 'admin', 1589725927, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (23, 'admin', 1589726107, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (24, 'admin', 1589727183, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (25, 'admin', 1589727266, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (26, 'admin', 1589727300, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (27, 'admin', 1589727323, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (28, 'admin', 1589727358, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (29, 'admin', 1589728496, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (30, 'admin', 1589728499, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (31, 'admin', 1589728501, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (32, 'admin', 1589728503, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (33, 'admin', 1589728505, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (34, 'admin', 1589728507, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (35, 'admin', 1589728509, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (36, 'admin', 1589728512, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (37, 'admin', 1589728514, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (38, 'admin', 1589728531, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (39, 'admin', 1589728534, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (40, 'admin', 1589728537, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (41, 'admin', 1589728540, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (42, 'admin', 1589728549, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (43, 'admin', 1589729395, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (44, 'admin', 1589731008, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (45, 'admin', 1589731897, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (46, 'admin', 1589731938, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (47, 'admin', 1589732031, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (48, 'admin', 1589733536, 'Chỉnh sửa nội dung configs', '::1');
INSERT INTO `history` VALUES (49, 'admin', 1589738650, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (50, 'admin', 1589738661, 'Cập nhật nhanh pro : display-1-[{\"id\":\"158\"}]', '::1');
INSERT INTO `history` VALUES (51, 'admin', 1589738942, 'Cập nhật nhanh pro : is_delete-0-[{\"id\":\"158\"}]', '::1');
INSERT INTO `history` VALUES (52, 'admin', 1589739874, 'Cập nhật nhanh pro : display-1-[{\"id\":\"165\"}]', '::1');
INSERT INTO `history` VALUES (53, 'admin', 1589743135, 'Xóa nội dung users_history', '::1');
INSERT INTO `history` VALUES (54, 'admin', 1589743136, 'Xóa nội dung users_history', '::1');
INSERT INTO `history` VALUES (55, 'admin', 1589743138, 'Xóa nội dung users_history', '::1');
INSERT INTO `history` VALUES (56, 'admin', 1589771555, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (57, 'admin', 1589771707, 'Đăng nhập hệ thống ', '1.53.210.235');
INSERT INTO `history` VALUES (58, 'admin', 1589819968, 'Đăng nhập hệ thống ', '123.20.139.126');
INSERT INTO `history` VALUES (59, 'admin', 1589821282, 'Thêm mới nội dung chapter : Chương 260 : Tưởng ngươi', '58.186.107.202');
INSERT INTO `history` VALUES (60, 'admin', 1589822182, 'Thêm mới nội dung chapter : Chương 261 : Mộng xuân vô ngân', '171.247.194.168');
INSERT INTO `history` VALUES (61, 'admin', 1589822313, 'Thêm mới nội dung chapter : Chương 262 : Tin dữ', '171.247.194.168');
INSERT INTO `history` VALUES (62, 'admin', 1589822340, 'Chỉnh sửa nội dung chapter : Chương 262 : Tin dữ', '171.247.194.168');
INSERT INTO `history` VALUES (63, 'admin', 1589842841, 'Đăng nhập hệ thống ', '27.79.169.50');
INSERT INTO `history` VALUES (64, 'admin', 1589853797, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (65, 'admin', 1589856776, 'Thêm mới nội dung pages', '14.160.24.158');
INSERT INTO `history` VALUES (66, 'admin', 1589856787, 'Thêm mới nội dung pages', '14.160.24.158');
INSERT INTO `history` VALUES (67, 'admin', 1589856798, 'Thêm mới nội dung pages', '14.160.24.158');
INSERT INTO `history` VALUES (68, 'admin', 1589858565, 'Thêm mới nội dung pages', '14.160.24.158');
INSERT INTO `history` VALUES (69, 'admin', 1589858582, 'Thêm mới nội dung pages', '14.160.24.158');
INSERT INTO `history` VALUES (70, 'admin', 1589858684, 'Cập nhật nhanh pro : display-1-[{\"id\":\"167\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (71, 'admin', 1589858684, 'Cập nhật nhanh pro : display-1-[{\"id\":\"166\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (72, 'admin', 1589858771, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (73, 'admin', 1589858774, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (74, 'admin', 1589858777, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (75, 'admin', 1589858938, 'Thêm mới nội dung pages', '14.160.24.158');
INSERT INTO `history` VALUES (76, 'admin', 1589859415, 'Thêm mới nội dung pages', '14.160.24.158');
INSERT INTO `history` VALUES (77, 'admin', 1589859542, 'Chỉnh sửa nội dung pages : Thông tin người dùng', '14.160.24.158');
INSERT INTO `history` VALUES (78, 'admin', 1589860579, 'Đăng nhập hệ thống ', '14.253.8.23');
INSERT INTO `history` VALUES (79, 'admin', 1589860796, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (80, 'admin', 1589860862, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (81, 'admin', 1589860891, 'Thêm mới nội dung say_high : Chào mừng tới với website BHTT', '14.160.24.158');
INSERT INTO `history` VALUES (82, 'admin', 1589862302, 'Thêm mới nội dung chapter : Chương 78 : Tiêu tán', '113.190.232.104');
INSERT INTO `history` VALUES (83, 'admin', 1589862812, 'Chỉnh sửa nội dung configs', '14.160.24.158');
INSERT INTO `history` VALUES (84, 'admin', 1589863114, 'Chỉnh sửa nội dung configs', '14.160.24.158');
INSERT INTO `history` VALUES (85, 'admin', 1589863427, 'Chỉnh sửa nội dung configs', '14.160.24.158');
INSERT INTO `history` VALUES (86, 'admin', 1589865144, 'Thêm mới nội dung chapter : Chương 263 : Ghen tuông nùng', '113.172.141.44');
INSERT INTO `history` VALUES (87, 'admin', 1589865562, 'Thêm mới nội dung chapter : Chương 264 : Vượt quốc cứu người ( 1 )', '113.160.202.185');
INSERT INTO `history` VALUES (88, 'admin', 1589865586, 'Chỉnh sửa nội dung chapter : Chương 264 : Vượt quốc cứu người ( 1 )', '113.160.202.185');
INSERT INTO `history` VALUES (89, 'admin', 1589866242, 'Thêm mới nội dung chapter : Chương 265 : Vượt quốc cứu người ( 2 )', '118.68.122.152');
INSERT INTO `history` VALUES (90, 'admin', 1589867719, 'Thêm mới nội dung chapter : Chương 77 : Con rối', '171.235.224.126');
INSERT INTO `history` VALUES (91, 'admin', 1589867748, 'Chỉnh sửa nội dung chapter : Chương 265 : Vượt quốc cứu người ( 2 )', '171.235.224.126');
INSERT INTO `history` VALUES (92, 'admin', 1589869204, 'Thêm mới nội dung chapter : Chương 266 : Vượt quốc cứu người ( 3 )', '27.74.252.159');
INSERT INTO `history` VALUES (93, 'admin', 1589870491, 'Thêm mới nội dung chapter : Chương 267 : Vượt quốc cứu người ( 4 )', '113.160.226.24');
INSERT INTO `history` VALUES (94, 'admin', 1589871510, 'Thêm mới nội dung chapter : Chương 268 : Vượt quốc cứu người ( 5 )', '14.188.145.132');
INSERT INTO `history` VALUES (95, 'admin', 1589871987, 'Chỉnh sửa nội dung chapter : Chương 39: Ký ức tìm về', '14.188.145.132');
INSERT INTO `history` VALUES (96, 'admin', 1589872187, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (97, 'admin', 1589873636, 'Cập nhật nhanh pro : free-1-[{\"id\":\"140\"}]', '113.161.92.215');
INSERT INTO `history` VALUES (98, 'admin', 1589873638, 'Cập nhật nhanh pro : free-0-[{\"id\":\"140\"}]', '113.161.92.215');
INSERT INTO `history` VALUES (99, 'admin', 1589873643, 'Cập nhật nhanh pro : free-1-[{\"id\":\"140\"}]', '116.118.35.197');
INSERT INTO `history` VALUES (100, 'admin', 1589873700, 'Cập nhật nhanh pro : free-0-[{\"id\":\"140\"}]', '116.118.7.155');
INSERT INTO `history` VALUES (101, 'admin', 1589876495, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (102, 'admin', 1589876496, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (103, 'admin', 1589876640, 'Cập nhật nhanh pro : display-1-[{\"id\":\"169\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (104, 'admin', 1589879881, 'Xóa nội dung chapter', '14.160.24.158');
INSERT INTO `history` VALUES (105, 'admin', 1589884941, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (106, 'admin', 1589884944, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (107, 'admin', 1589884952, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (108, 'admin', 1589884954, 'Xóa nội dung chapter', '14.160.24.158');
INSERT INTO `history` VALUES (109, 'admin', 1589884973, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (110, 'admin', 1589884976, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (111, 'admin', 1589885068, 'Xóa nội dung chapter', '14.160.24.158');
INSERT INTO `history` VALUES (112, 'admin', 1589885110, 'Xóa nội dung chapter', '14.160.24.158');
INSERT INTO `history` VALUES (113, 'admin', 1589885773, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (114, 'admin', 1589908802, 'Đăng nhập hệ thống ', '113.186.101.195');
INSERT INTO `history` VALUES (115, 'admin', 1589908847, 'Chỉnh sửa nội dung pro : Bẻ cong thẳng nữ thanh mai bút kí', '113.186.101.195');
INSERT INTO `history` VALUES (116, 'admin', 1589908878, 'Chỉnh sửa nội dung pro : Bẻ cong thẳng nữ thanh mai bút kí', '113.186.101.195');
INSERT INTO `history` VALUES (117, 'admin', 1589908972, 'Xóa nội dung tag_pro', '113.186.101.195');
INSERT INTO `history` VALUES (118, 'admin', 1589910513, 'Thêm mới nội dung pro : Ánh Sáng Nhạt Nhòa', '27.70.46.248');
INSERT INTO `history` VALUES (119, 'admin', 1589910513, 'Thêm mới nội dung pro : Ánh Sáng Nhạt Nhòa', '27.70.46.248');
INSERT INTO `history` VALUES (120, 'admin', 1589910524, 'Xóa nội dung pro', '27.70.46.248');
INSERT INTO `history` VALUES (121, 'admin', 1589910668, 'Xóa nội dung tag_pro', '27.70.46.248');
INSERT INTO `history` VALUES (122, 'admin', 1589912457, 'Thêm mới nội dung chapter : Chương 1 : Biến cố', '113.23.109.185');
INSERT INTO `history` VALUES (123, 'admin', 1589913584, 'Thêm mới nội dung chapter : Chương 2 : Hôn diễn', '222.252.55.223');
INSERT INTO `history` VALUES (124, 'admin', 1589939462, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (125, 'admin', 1589939485, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (126, 'admin', 1589939491, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (127, 'admin', 1589944311, 'Xóa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (128, 'admin', 1589944316, 'Xóa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (129, 'admin', 1589944322, 'Xóa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (130, 'admin', 1589944340, 'Xóa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (131, 'admin', 1589949261, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (132, 'admin', 1589950295, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (133, 'admin', 1589950306, 'Cập nhật nhanh pro : display-1-[{\"id\":\"177\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (134, 'admin', 1589950450, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (135, 'admin', 1589950462, 'Xóa nội dung chapter', '14.160.24.158');
INSERT INTO `history` VALUES (136, 'admin', 1589951084, 'Đăng nhập hệ thống ', '171.240.209.51');
INSERT INTO `history` VALUES (137, 'admin', 1589952336, 'Thêm mới nội dung pro : Tại Sao Không Lấy Thân Báo Đáp ?', '14.184.15.190');
INSERT INTO `history` VALUES (138, 'admin', 1589952369, 'Chỉnh sửa nội dung cate_pro : Kết Hôn - Sinh Con', '14.184.15.190');
INSERT INTO `history` VALUES (139, 'admin', 1589952454, 'Chỉnh sửa nội dung cate_pro : Dưỡng Thành', '14.184.15.190');
INSERT INTO `history` VALUES (140, 'admin', 1589952491, 'Cập nhật nhanh tag_pro : position-1-[{\"id\":\"89\"}]', '14.184.15.190');
INSERT INTO `history` VALUES (141, 'admin', 1589953371, 'Thêm mới nội dung chapter : Chương 1 : Cùng ta về nhà', '42.112.243.220');
INSERT INTO `history` VALUES (142, 'admin', 1589956346, 'Cập nhật nhanh pro : display-1-[{\"id\":\"179\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (143, 'admin', 1589956745, 'Thêm mới nội dung chapter : Chương 2 : Kem', '112.197.118.215');
INSERT INTO `history` VALUES (144, 'admin', 1589958872, 'Thêm mới nội dung chapter : Chương 3 : Công chúa', '14.234.68.7');
INSERT INTO `history` VALUES (145, 'admin', 1589958977, 'Thêm mới nội dung chapter : Chương 4 : Bí mật', '14.234.68.7');
INSERT INTO `history` VALUES (146, 'admin', 1589959081, 'Thêm mới nội dung chapter : Chương 5 : Đãi nơi này', '14.234.68.7');
INSERT INTO `history` VALUES (147, 'admin', 1589962678, 'Thêm mới nội dung chapter : Chương 6 : Ta muốn cưới ngươi', '14.161.15.204');
INSERT INTO `history` VALUES (148, 'admin', 1589962699, 'Chỉnh sửa nội dung chapter : Chương 5 : Đãi nơi này', '14.161.15.204');
INSERT INTO `history` VALUES (149, 'admin', 1589962719, 'Chỉnh sửa nội dung chapter : Chương 6 : Ta muốn cưới ngươi', '14.161.15.204');
INSERT INTO `history` VALUES (150, 'admin', 1589962834, 'Thêm mới nội dung chapter : Chương 7 : Muốn nhanh lên lớn lên', '14.161.15.204');
INSERT INTO `history` VALUES (151, 'admin', 1589962943, 'Thêm mới nội dung chapter : Chương 8 : Đều cho ngươi', '14.161.15.204');
INSERT INTO `history` VALUES (152, 'admin', 1589963383, 'Thêm mới nội dung chapter : Chương 9 : Sơ trưởng thành', '113.22.237.163');
INSERT INTO `history` VALUES (153, 'admin', 1589973589, 'Đăng nhập hệ thống ', '117.3.57.65');
INSERT INTO `history` VALUES (154, 'admin', 1589975190, 'Chỉnh sửa nội dung pro : Thu Dưỡng Nữ Chủ Lúc Thiếu Niên', '42.119.203.204');
INSERT INTO `history` VALUES (155, 'admin', 1589975354, 'Chỉnh sửa nội dung pro : Lay Động Tiếng Lòng', '27.65.99.27');
INSERT INTO `history` VALUES (156, 'admin', 1589975410, 'Chỉnh sửa nội dung pro : Nuông Chiều', '27.65.99.27');
INSERT INTO `history` VALUES (157, 'admin', 1589976129, 'Chỉnh sửa nội dung chapter : Chương 1 ', '125.234.120.50');
INSERT INTO `history` VALUES (158, 'admin', 1589976210, 'Chỉnh sửa nội dung chapter : Chương 2', '125.234.120.50');
INSERT INTO `history` VALUES (159, 'admin', 1589976447, 'Chỉnh sửa nội dung chapter : Chương 3', '27.74.243.78');
INSERT INTO `history` VALUES (160, 'admin', 1589976521, 'Chỉnh sửa nội dung chapter : Chương 4', '27.74.243.78');
INSERT INTO `history` VALUES (161, 'admin', 1589976593, 'Chỉnh sửa nội dung chapter : Chương 5', '27.74.243.78');
INSERT INTO `history` VALUES (162, 'admin', 1589976809, 'Chỉnh sửa nội dung chapter : Chương 6', '27.74.243.78');
INSERT INTO `history` VALUES (163, 'admin', 1589976868, 'Chỉnh sửa nội dung chapter : Chương 7', '27.74.243.78');
INSERT INTO `history` VALUES (164, 'admin', 1589977157, 'Chỉnh sửa nội dung chapter : Chương 8', '113.22.20.222');
INSERT INTO `history` VALUES (165, 'admin', 1589977416, 'Chỉnh sửa nội dung chapter : Chương 9', '118.71.164.96');
INSERT INTO `history` VALUES (166, 'admin', 1589977571, 'Chỉnh sửa nội dung chapter : Chương 10', '103.199.32.49');
INSERT INTO `history` VALUES (167, 'admin', 1589977708, 'Chỉnh sửa nội dung chapter : Chương 11', '103.199.32.49');
INSERT INTO `history` VALUES (168, 'admin', 1589977781, 'Chỉnh sửa nội dung chapter : Chương 12', '103.199.32.49');
INSERT INTO `history` VALUES (169, 'admin', 1589978677, 'Chỉnh sửa nội dung chapter : Chương 13', '118.71.206.254');
INSERT INTO `history` VALUES (170, 'admin', 1589978780, 'Chỉnh sửa nội dung chapter : Chương 14', '118.71.206.254');
INSERT INTO `history` VALUES (171, 'admin', 1589979418, 'Thêm mới nội dung chapter : Chương 15', '113.185.42.100');
INSERT INTO `history` VALUES (172, 'admin', 1589980179, 'Thêm mới nội dung chapter : Chương 16', '171.231.9.104');
INSERT INTO `history` VALUES (173, 'admin', 1589988096, 'Đăng nhập hệ thống ', '123.20.56.24');
INSERT INTO `history` VALUES (174, 'admin', 1589989481, 'Thêm mới nội dung chapter : Chương 17', '42.119.95.88');
INSERT INTO `history` VALUES (175, 'admin', 1589989636, 'Thêm mới nội dung chapter : Chương 18', '42.119.95.88');
INSERT INTO `history` VALUES (176, 'admin', 1589989942, 'Thêm mới nội dung chapter : Chương 19', '42.113.196.121');
INSERT INTO `history` VALUES (177, 'admin', 1589993379, 'Thêm mới nội dung chapter : Chương 11', '113.20.100.75');
INSERT INTO `history` VALUES (178, 'admin', 1589993538, 'Thêm mới nội dung chapter : Chương 12', '113.20.100.75');
INSERT INTO `history` VALUES (179, 'admin', 1589993619, 'Thêm mới nội dung chapter : Chương 13', '113.20.100.75');
INSERT INTO `history` VALUES (180, 'admin', 1589993708, 'Thêm mới nội dung chapter : Chương 14', '113.20.100.75');
INSERT INTO `history` VALUES (181, 'admin', 1589996305, 'Thêm mới nội dung chapter : Chương 15', '27.74.175.183');
INSERT INTO `history` VALUES (182, 'admin', 1589996376, 'Thêm mới nội dung chapter : Chương 16', '27.74.175.183');
INSERT INTO `history` VALUES (183, 'admin', 1590026668, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (184, 'admin', 1590026733, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (185, 'admin', 1590030009, 'Đăng nhập hệ thống ', '1.53.204.178');
INSERT INTO `history` VALUES (186, 'admin', 1590030089, 'Xóa nội dung chapter', '1.53.204.178');
INSERT INTO `history` VALUES (187, 'admin', 1590030103, 'Xóa nội dung chapter', '1.53.204.178');
INSERT INTO `history` VALUES (188, 'admin', 1590030108, 'Xóa nội dung chapter', '1.53.204.178');
INSERT INTO `history` VALUES (189, 'admin', 1590030114, 'Xóa nội dung chapter', '1.53.204.178');
INSERT INTO `history` VALUES (190, 'admin', 1590030118, 'Xóa nội dung chapter', '1.53.204.178');
INSERT INTO `history` VALUES (191, 'admin', 1590032586, 'Thêm mới nội dung chapter : Chương 79 : Trở về thành', '27.76.191.193');
INSERT INTO `history` VALUES (192, 'admin', 1590032689, 'Thêm mới nội dung chapter : Chương 80 : Khả nghi', '27.76.191.193');
INSERT INTO `history` VALUES (193, 'admin', 1590033084, 'Thêm mới nội dung chapter : Chương 68', '1.53.242.18');
INSERT INTO `history` VALUES (194, 'admin', 1590034805, 'Thêm mới nội dung chapter : Chương 269 : Vượt qua cứu người ( 6 )', '171.224.181.209');
INSERT INTO `history` VALUES (195, 'admin', 1590034889, 'Thêm mới nội dung chapter : Chương 270 : Điên rồi', '171.224.181.209');
INSERT INTO `history` VALUES (196, 'admin', 1590035016, 'Thêm mới nội dung chapter : Chương 271 : Tự thú', '171.224.181.209');
INSERT INTO `history` VALUES (197, 'admin', 1590035133, 'Thêm mới nội dung chapter : Chương 272 : Cuối cùng cuồng hoan', '171.224.181.209');
INSERT INTO `history` VALUES (198, 'admin', 1590035245, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8536\"}]', '171.224.181.209');
INSERT INTO `history` VALUES (199, 'admin', 1590036169, 'Thêm mới nội dung chapter : Chương 3 : Giáo ngươi', '113.184.208.115');
INSERT INTO `history` VALUES (200, 'admin', 1590036176, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8538\"}]', '113.184.208.115');
INSERT INTO `history` VALUES (201, 'admin', 1590036189, 'Chỉnh sửa nội dung chapter : Chương 3 : Giáo ngươi', '113.184.208.115');
INSERT INTO `history` VALUES (202, 'admin', 1590036227, 'Chỉnh sửa nội dung chapter : Chương 2 : Hôn diễn', '113.184.208.115');
INSERT INTO `history` VALUES (203, 'admin', 1590042854, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (204, 'admin', 1590110744, 'Đăng nhập hệ thống ', '14.167.85.37');
INSERT INTO `history` VALUES (205, 'admin', 1590111230, 'Chỉnh sửa nội dung pro : Ngươi là nữ vương, Ta là đặc công ', '113.177.36.207');
INSERT INTO `history` VALUES (206, 'admin', 1590111279, 'Chỉnh sửa nội dung pro : Ngươi Là Nữ Vương, Ta Là Đặc Công', '113.177.36.207');
INSERT INTO `history` VALUES (207, 'admin', 1590111413, 'Chỉnh sửa nội dung pro : Ngươi Là Nữ Vương, Ta Là Đặc Công', '113.177.36.207');
INSERT INTO `history` VALUES (208, 'admin', 1590112540, 'Thêm mới nội dung chapter : Chương 81 : Dị thường', '1.55.206.189');
INSERT INTO `history` VALUES (209, 'admin', 1590113663, 'Thêm mới nội dung chapter : Chương 273 : Rốt cuộc tới', '14.228.189.148');
INSERT INTO `history` VALUES (210, 'admin', 1590113761, 'Thêm mới nội dung chapter : Chương 274 : Lang ngôn lang ngữ', '14.228.189.148');
INSERT INTO `history` VALUES (211, 'admin', 1590114268, 'Chỉnh sửa nội dung chapter : Chương 1 : Biến cố', '14.239.186.16');
INSERT INTO `history` VALUES (212, 'admin', 1590114866, 'Chỉnh sửa nội dung chapter : Chương 2 : Hôn diễn', '14.186.60.22');
INSERT INTO `history` VALUES (213, 'admin', 1590114962, 'Chỉnh sửa nội dung chapter : Chương 3 : Giáo ngươi', '14.186.60.22');
INSERT INTO `history` VALUES (214, 'admin', 1590198446, 'Đăng nhập hệ thống ', '27.78.67.65');
INSERT INTO `history` VALUES (215, 'admin', 1590199239, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (216, 'admin', 1590199239, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (217, 'admin', 1590199239, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (218, 'admin', 1590199240, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (219, 'admin', 1590200284, 'Cập nhật nhanh pro : display-1-[{\"id\":\"181\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (220, 'admin', 1590200425, 'Chỉnh sửa nội dung pro : bài kiểm thử', '14.160.24.158');
INSERT INTO `history` VALUES (221, 'admin', 1590200525, 'Cập nhật nhanh pro : display-1-[{\"id\":\"182\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (222, 'admin', 1590201092, 'Chỉnh sửa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (223, 'admin', 1590201246, 'Chỉnh sửa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (224, 'admin', 1590201262, 'Chỉnh sửa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (225, 'admin', 1590201436, 'Cập nhật nhanh pro : display-0-[{\"id\":\"182\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (226, 'admin', 1590201530, 'Cập nhật nhanh users : email-trinhle.tt96@gmail.com-[{\"id\":\"248\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (227, 'admin', 1590201710, 'Cập nhật nhanh users : email-techtechss12@gmail.com-[{\"id\":\"247\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (228, 'admin', 1590201718, 'Cập nhật nhanh pro : display-1-[{\"id\":\"182\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (229, 'admin', 1590202274, 'Cập nhật nhanh pro : display-1-[{\"id\":\"183\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (230, 'admin', 1590202975, 'Cập nhật nhanh pro : display-1-[{\"id\":\"185\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (231, 'admin', 1590230310, 'Đăng nhập hệ thống ', '14.163.229.185');
INSERT INTO `history` VALUES (232, 'admin', 1590231508, 'Thêm mới nội dung pro : Công Nàng Thực Sự Có Bệnh [ Xuyên Nhanh ]', '123.21.28.15');
INSERT INTO `history` VALUES (233, 'admin', 1590283328, 'Đăng nhập hệ thống ', '113.162.228.163');
INSERT INTO `history` VALUES (234, 'admin', 1590283622, 'Chỉnh sửa nội dung cate_pro : Huyền Nghi - Trinh Thám', '113.162.228.163');
INSERT INTO `history` VALUES (235, 'admin', 1590283737, 'Chỉnh sửa nội dung tag_pro : Huyền Nghi - Trinh Thám', '113.162.228.163');
INSERT INTO `history` VALUES (236, 'admin', 1590285863, 'Thêm mới nội dung chapter : Chương 1 : Kiều diễm hoa hậu giảng đường x si tình giáo y', '42.112.224.74');
INSERT INTO `history` VALUES (237, 'admin', 1590288425, 'Thêm mới nội dung chapter : Chương 275 : Quỷ môn quan', '42.113.82.148');
INSERT INTO `history` VALUES (238, 'admin', 1590288565, 'Thêm mới nội dung chapter : Chương 276 : Lang ngôn lang ngữ lại tới nữa', '42.113.82.148');
INSERT INTO `history` VALUES (239, 'admin', 1590288599, 'Chỉnh sửa nội dung chapter : Chương 275 : Quỷ môn quan', '42.113.82.148');
INSERT INTO `history` VALUES (240, 'admin', 1590288699, 'Thêm mới nội dung chapter : Chương 277 : Lang hổ chi năm', '42.113.82.148');
INSERT INTO `history` VALUES (241, 'admin', 1590288807, 'Thêm mới nội dung chapter : Chương 278 : Đánh nát ảo tưởng', '42.113.82.148');
INSERT INTO `history` VALUES (242, 'admin', 1590288903, 'Thêm mới nội dung chapter : Chương 279 : Thẩm Thần Tài', '42.113.82.148');
INSERT INTO `history` VALUES (243, 'admin', 1590289081, 'Chỉnh sửa nội dung chapter : Chương 1 : Biến cố', '42.113.82.148');
INSERT INTO `history` VALUES (244, 'admin', 1590290095, 'Thêm mới nội dung chapter : Chương 4 : Hoa hồng', '1.53.211.45');
INSERT INTO `history` VALUES (245, 'admin', 1590291482, 'Thêm mới nội dung pro : Không Được Làm Nũng', '1.53.211.45');
INSERT INTO `history` VALUES (246, 'admin', 1590293213, 'Chỉnh sửa nội dung pro : Không Được Làm Nũng', '117.2.128.222');
INSERT INTO `history` VALUES (247, 'admin', 1590294707, 'Thêm mới nội dung chapter : Chương 1', '42.119.159.118');
INSERT INTO `history` VALUES (248, 'admin', 1590294744, 'Chỉnh sửa nội dung pro : Không Được Làm Nũng', '42.119.159.118');
INSERT INTO `history` VALUES (249, 'admin', 1590310694, 'Đăng nhập hệ thống ', '113.169.254.85');
INSERT INTO `history` VALUES (250, 'admin', 1590312137, 'Chỉnh sửa nội dung chapter : Chương 1 : Bánh quy', '123.24.160.61');
INSERT INTO `history` VALUES (251, 'admin', 1590312469, 'Chỉnh sửa nội dung chapter : Chương 2 : Kem', '14.176.231.5');
INSERT INTO `history` VALUES (252, 'admin', 1590314686, 'Thêm mới nội dung chapter : Chương 10 : Dắt lấy', '123.18.61.197');
INSERT INTO `history` VALUES (253, 'admin', 1590314783, 'Chỉnh sửa nội dung pro : Làm Nũng Trong Ngực Nàng', '123.18.61.197');
INSERT INTO `history` VALUES (254, 'admin', 1590314929, 'Chỉnh sửa nội dung chapter : Chương 1 : Bánh quy', '123.18.61.197');
INSERT INTO `history` VALUES (255, 'admin', 1590314977, 'Chỉnh sửa nội dung chapter : Chương 2 : Kem', '123.18.61.197');
INSERT INTO `history` VALUES (256, 'admin', 1590315061, 'Chỉnh sửa nội dung chapter : Chương 3 : Công chúa', '123.18.61.197');
INSERT INTO `history` VALUES (257, 'admin', 1590315099, 'Chỉnh sửa nội dung chapter : Chương 4 : Bí mật', '123.18.61.197');
INSERT INTO `history` VALUES (258, 'admin', 1590315141, 'Chỉnh sửa nội dung chapter : Chương 5 : Đãi nơi này', '123.18.61.197');
INSERT INTO `history` VALUES (259, 'admin', 1590315194, 'Chỉnh sửa nội dung chapter : Chương 6 : Ta muốn cưới ngươi', '123.18.61.197');
INSERT INTO `history` VALUES (260, 'admin', 1590315233, 'Chỉnh sửa nội dung chapter : Chương 7 : Muốn nhanh lên lớn lên', '123.18.61.197');
INSERT INTO `history` VALUES (261, 'admin', 1590315266, 'Chỉnh sửa nội dung chapter : Chương 8 : Đều cho ngươi', '123.18.61.197');
INSERT INTO `history` VALUES (262, 'admin', 1590315300, 'Chỉnh sửa nội dung chapter : Chương 9 : Sơ trưởng thành', '123.18.61.197');
INSERT INTO `history` VALUES (263, 'admin', 1590315407, 'Thêm mới nội dung chapter : Chương 11 : Tuổi dậy thì ngây thơ', '123.18.61.197');
INSERT INTO `history` VALUES (264, 'admin', 1590315625, 'Thêm mới nội dung chapter : Chương 12 : Điện thoại', '123.18.61.197');
INSERT INTO `history` VALUES (265, 'admin', 1590316471, 'Thêm mới nội dung chapter : Chương 2', '171.224.179.30');
INSERT INTO `history` VALUES (266, 'admin', 1590344356, 'Đăng nhập hệ thống ', '27.79.169.50');
INSERT INTO `history` VALUES (267, 'admin', 1590344369, 'Xóa nội dung pro', '27.79.169.50');
INSERT INTO `history` VALUES (268, 'admin', 1590344372, 'Xóa nội dung pro', '27.79.169.50');
INSERT INTO `history` VALUES (269, 'admin', 1590374289, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (270, 'admin', 1590377166, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (271, 'admin', 1590378827, 'Chỉnh sửa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (272, 'admin', 1590378892, 'Chỉnh sửa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (273, 'admin', 1590379127, 'Chỉnh sửa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (274, 'admin', 1590379258, 'Chỉnh sửa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (275, 'admin', 1590379353, 'Chỉnh sửa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (276, 'admin', 1590379537, 'Đăng nhập hệ thống ', '116.111.164.190');
INSERT INTO `history` VALUES (277, 'admin', 1590380867, 'Thêm mới nội dung pro : Mối Quan Hệ Với Trợ Thủ Ngày Càng Nguy Hiểm', '171.253.131.170');
INSERT INTO `history` VALUES (278, 'admin', 1590381076, 'Thêm mới nội dung nuy_group_user : Uploader', '14.169.237.93');
INSERT INTO `history` VALUES (279, 'admin', 1590381599, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (280, 'admin', 1590381753, 'Thêm mới nội dung nuy_user', '27.74.242.173');
INSERT INTO `history` VALUES (281, 'admin', 1590381773, 'Chỉnh sửa nội dung nuy_user', '27.74.242.173');
INSERT INTO `history` VALUES (282, 'admin', 1590381854, 'Chỉnh sửa nội dung nuy_role', '27.74.242.173');
INSERT INTO `history` VALUES (283, 'minhchau', 1590381910, 'Đăng nhập hệ thống ', '1.53.210.49');
INSERT INTO `history` VALUES (284, 'admin', 1590381957, 'Chỉnh sửa nội dung nuy_role', '27.74.242.173');
INSERT INTO `history` VALUES (285, 'minhchau', 1590382055, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (286, 'minhchau', 1590382199, 'Chỉnh sửa nội dung pro : Mối Quan Hệ Với Trợ Thủ Ngày Càng Nguy Hiểm', '14.240.40.204');
INSERT INTO `history` VALUES (287, 'admin', 1590382381, 'Chỉnh sửa nội dung pro : Tiểu Thư Pháp Y Là Thân Ái Của Ta', '171.251.254.170');
INSERT INTO `history` VALUES (288, 'minhchau', 1590382532, 'Chỉnh sửa nội dung pro : Mối Quan Hệ Với Trợ Thủ Ngày Càng Nguy Hiểm', '14.240.40.204');
INSERT INTO `history` VALUES (289, 'minhchau', 1590382621, 'Chỉnh sửa nội dung pro : Không Được Làm Nũng', '14.240.40.204');
INSERT INTO `history` VALUES (290, 'admin', 1590382713, 'Chỉnh sửa nội dung users', '14.160.24.158');
INSERT INTO `history` VALUES (291, 'minhchau', 1590383062, 'Chỉnh sửa nội dung pro : Công Nàng Thực Sự Có Bệnh [ Xuyên Nhanh ]', '14.240.40.204');
INSERT INTO `history` VALUES (292, 'minhchau', 1590383653, 'Chỉnh sửa nội dung pro : Công Nàng Thực Sự Có Bệnh [ Xuyên Nhanh ]', '14.240.40.204');
INSERT INTO `history` VALUES (293, 'minhchau', 1590383734, 'Chỉnh sửa nội dung pro : Mối Quan Hệ Với Trợ Thủ Ngày Càng Nguy Hiểm', '14.240.40.204');
INSERT INTO `history` VALUES (294, 'admin', 1590383951, 'Thêm mới nội dung chapter : Chương 1', '1.53.210.49');
INSERT INTO `history` VALUES (295, 'admin', 1590388354, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (296, 'admin', 1590406207, 'Đăng nhập hệ thống ', '14.166.37.103');
INSERT INTO `history` VALUES (297, 'minhchau', 1590412198, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (298, 'minhchau', 1590412314, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (299, 'admin', 1590415794, 'Thêm mới nội dung chapter : Chương 2', '14.241.119.74');
INSERT INTO `history` VALUES (300, 'admin', 1590415898, 'Thêm mới nội dung chapter : Chương 2', '14.241.119.74');
INSERT INTO `history` VALUES (301, 'admin', 1590415916, 'Thêm mới nội dung chapter', '14.241.119.74');
INSERT INTO `history` VALUES (302, 'admin', 1590415966, 'Thêm mới nội dung chapter', '14.241.119.74');
INSERT INTO `history` VALUES (303, 'admin', 1590416000, 'Thêm mới nội dung chapter', '14.177.133.183');
INSERT INTO `history` VALUES (304, 'admin', 1590416082, 'Đăng nhập hệ thống ', '14.169.237.93');
INSERT INTO `history` VALUES (305, 'admin', 1590416128, 'Thêm mới nội dung chapter : Chương 2', '14.169.237.93');
INSERT INTO `history` VALUES (306, 'admin', 1590416245, 'Thêm mới nội dung chapter', '14.169.237.93');
INSERT INTO `history` VALUES (307, 'admin', 1590416265, 'Đăng nhập hệ thống ', '116.111.14.25');
INSERT INTO `history` VALUES (308, 'admin', 1590416494, 'Thêm mới nội dung chapter : Chương 2', '116.111.14.25');
INSERT INTO `history` VALUES (309, 'admin', 1590416750, 'Đăng nhập hệ thống ', '27.79.169.50');
INSERT INTO `history` VALUES (310, 'admin', 1590416850, 'Đăng nhập hệ thống ', '1.55.86.172');
INSERT INTO `history` VALUES (311, 'admin', 1590416869, 'Thêm mới nội dung chapter', '1.55.86.172');
INSERT INTO `history` VALUES (312, 'admin', 1590416982, 'Thêm mới nội dung pro_categories : TEST TRUYEN', '27.79.169.50');
INSERT INTO `history` VALUES (313, 'admin', 1590417014, 'Cập nhật nhanh pro_categories : act-1-[{\"id\":\"14\"}]', '27.79.169.50');
INSERT INTO `history` VALUES (314, 'admin', 1590417046, 'Thêm mới nội dung pro : TETS TUYỆN', '27.79.169.50');
INSERT INTO `history` VALUES (315, 'admin', 1590417046, 'Thêm mới nội dung chapter', '1.55.86.172');
INSERT INTO `history` VALUES (316, 'admin', 1590417063, 'Thêm mới nội dung chapter', '1.55.86.172');
INSERT INTO `history` VALUES (317, 'admin', 1590417074, 'Thêm mới nội dung chapter : TEST', '27.79.169.50');
INSERT INTO `history` VALUES (318, 'admin', 1590417099, 'Thêm mới nội dung chapter : Vũ Văn Thức', '27.79.169.50');
INSERT INTO `history` VALUES (319, 'admin', 1590417108, 'Thêm mới nội dung pro_categories', '1.55.86.172');
INSERT INTO `history` VALUES (320, 'admin', 1590417114, 'Xóa nội dung pro_categories', '1.55.86.172');
INSERT INTO `history` VALUES (321, 'admin', 1590417121, 'Cập nhật nhanh pro_categories : act-0-[{\"id\":\"14\"}]', '1.55.86.172');
INSERT INTO `history` VALUES (322, 'admin', 1590417189, 'Thêm mới nội dung chapter', '1.55.86.172');
INSERT INTO `history` VALUES (323, 'admin', 1590417214, 'Thêm mới nội dung chapter : NGO THI DU', '27.79.169.50');
INSERT INTO `history` VALUES (324, 'admin', 1590417232, 'Thêm mới nội dung chapter', '1.55.86.172');
INSERT INTO `history` VALUES (325, 'admin', 1590417242, 'Xóa nội dung chapter', '1.55.86.172');
INSERT INTO `history` VALUES (326, 'admin', 1590417271, 'Thêm mới nội dung chapter', '1.55.86.172');
INSERT INTO `history` VALUES (327, 'admin', 1590417279, 'Xóa nội dung chapter', '1.55.86.172');
INSERT INTO `history` VALUES (328, 'admin', 1590417431, 'Xóa nội dung chapter', '14.165.36.50');
INSERT INTO `history` VALUES (329, 'admin', 1590417599, 'Thêm mới nội dung chapter : Chương 2', '14.165.36.50');
INSERT INTO `history` VALUES (330, 'admin', 1590417663, 'Xóa nội dung chapter', '27.79.169.50');
INSERT INTO `history` VALUES (331, 'admin', 1590419692, 'Thêm mới nội dung chapter : Chương 3', '118.71.210.157');
INSERT INTO `history` VALUES (332, 'admin', 1590420604, 'Thêm mới nội dung chapter : Chương 4', '27.73.108.192');
INSERT INTO `history` VALUES (333, 'admin', 1590421737, 'Thêm mới nội dung chapter : Chương 5', '171.233.29.48');
INSERT INTO `history` VALUES (334, 'minhchau', 1590430255, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (335, 'admin', 1590456293, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (336, 'admin', 1590456752, 'Thêm mới nội dung chapter : sdsds', '14.160.24.158');
INSERT INTO `history` VALUES (337, 'admin', 1590456773, 'Chỉnh sửa nội dung chapter : sdsds', '14.160.24.158');
INSERT INTO `history` VALUES (338, 'admin', 1590456782, 'Xóa nội dung chapter', '14.160.24.158');
INSERT INTO `history` VALUES (339, 'admin', 1590456796, 'Cập nhật nhanh pro : display-1-[{\"id\":\"190\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (340, 'admin', 1590456941, 'Cập nhật nhanh pro_categories : slug-truyen-moi-cap-nhat-[{\"id\":\"9\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (341, 'admin', 1590456994, 'Chỉnh sửa nội dung menu : Truyện Mới Cập Nhật', '14.160.24.158');
INSERT INTO `history` VALUES (342, 'admin', 1590457259, 'Chỉnh sửa nội dung menu : Truyện Mới Cập Nhật', '14.160.24.158');
INSERT INTO `history` VALUES (343, 'admin', 1590457309, 'Chỉnh sửa nội dung menu : Thể Loại Truyện', '14.160.24.158');
INSERT INTO `history` VALUES (344, 'admin', 1590458164, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (345, 'admin', 1590458174, 'Cập nhật nhanh pro_categories : home-1-[{\"id\":\"9\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (346, 'admin', 1590458285, 'Chỉnh sửa nội dung pro_categories : Truyện Mới Cập Nhật', '14.160.24.158');
INSERT INTO `history` VALUES (347, 'admin', 1590458844, 'Chỉnh sửa nội dung pro : TETS TUYỆN', '14.160.24.158');
INSERT INTO `history` VALUES (348, 'admin', 1590458881, 'Chỉnh sửa nội dung pro : TETS TUYỆN', '14.160.24.158');
INSERT INTO `history` VALUES (349, 'admin', 1590458935, 'Cập nhật nhanh pro : hot-1-[{\"id\":\"189\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (350, 'admin', 1590458986, 'Chỉnh sửa nội dung pro : TETS TUYỆN', '14.160.24.158');
INSERT INTO `history` VALUES (351, 'admin', 1590459121, 'Chỉnh sửa nội dung pro : Mối Quan Hệ Với Trợ Thủ Ngày Càng Nguy Hiểm', '14.160.24.158');
INSERT INTO `history` VALUES (352, 'admin', 1590459346, 'Chỉnh sửa nội dung menu : Truyện Mới Cập Nhật', '14.160.24.158');
INSERT INTO `history` VALUES (353, 'admin', 1590459375, 'Chỉnh sửa nội dung menu : Truyện Mới Cập Nhật', '14.160.24.158');
INSERT INTO `history` VALUES (354, 'admin', 1590459405, 'Cập nhật nhanh menu : act-1-[{\"id\":\"26\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (355, 'admin', 1590459430, 'Chỉnh sửa nội dung menu : ABO', '14.160.24.158');
INSERT INTO `history` VALUES (356, 'admin', 1590459447, 'Cập nhật nhanh menu : act-0-[{\"id\":\"26\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (357, 'admin', 1590459459, 'Chỉnh sửa nội dung menu : ABO', '14.160.24.158');
INSERT INTO `history` VALUES (358, 'admin', 1590459465, 'Cập nhật nhanh menu : act-0-[{\"id\":\"14\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (359, 'admin', 1590459489, 'Chỉnh sửa nội dung menu : Thể Loại Truyện', '14.160.24.158');
INSERT INTO `history` VALUES (360, 'admin', 1590459494, 'Cập nhật nhanh menu : act-0-[{\"id\":\"26\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (361, 'admin', 1590459798, 'Cập nhật nhanh pro : act-0-[{\"id\":\"190\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (362, 'admin', 1590459799, 'Cập nhật nhanh pro : status-0-[{\"id\":\"190\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (363, 'admin', 1590466399, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (364, 'admin', 1590471305, 'Đăng nhập hệ thống ', '116.98.175.247');
INSERT INTO `history` VALUES (365, 'admin', 1590472230, 'Chỉnh sửa nội dung pro : Tiểu Thư Pháp Y Là Thân Ái Của Ta', '115.72.194.194');
INSERT INTO `history` VALUES (366, 'admin', 1590473190, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (367, 'admin', 1590474053, 'Chỉnh sửa nội dung chapter : Chương 14: Thẩm vấn', '113.20.101.141');
INSERT INTO `history` VALUES (368, 'admin', 1590474163, 'Chỉnh sửa nội dung chapter : Chương 40: Nghi hoặc', '113.20.101.141');
INSERT INTO `history` VALUES (369, 'admin', 1590474259, 'Xóa nội dung chapter', '113.20.101.141');
INSERT INTO `history` VALUES (370, 'admin', 1590474315, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1674\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (371, 'admin', 1590474316, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1676\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (372, 'admin', 1590474317, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1677\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (373, 'admin', 1590474318, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1679\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (374, 'admin', 1590474319, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1680\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (375, 'admin', 1590474319, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1683\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (376, 'admin', 1590474319, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1682\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (377, 'admin', 1590474319, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1685\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (378, 'admin', 1590474320, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1686\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (379, 'admin', 1590474422, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1693\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (380, 'admin', 1590474422, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1691\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (381, 'admin', 1590474423, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1689\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (382, 'admin', 1590474424, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"1688\"}]', '113.20.101.141');
INSERT INTO `history` VALUES (383, 'admin', 1590476136, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"7991\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (384, 'admin', 1590476140, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"7993\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (385, 'admin', 1590476266, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"7991\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (386, 'admin', 1590476269, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"7993\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (387, 'admin', 1590476273, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"7993\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (388, 'admin', 1590476279, 'Cập nhật nhanh chapter : is_delete-1-[{\"id\":\"7993\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (389, 'admin', 1590476307, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"7993\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (390, 'admin', 1590476339, 'Cập nhật nhanh chapter : is_delete-0-[{\"id\":\"7993\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (391, 'admin', 1590476696, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (392, 'admin', 1590476749, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (393, 'admin', 1590476755, 'Cập nhật nhanh pro : is_delete-0-[{\"id\":\"195\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (394, 'admin', 1590476756, 'Cập nhật nhanh pro : display-1-[{\"id\":\"195\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (395, 'admin', 1590477304, 'Xóa nội dung pro', '14.160.24.158');
INSERT INTO `history` VALUES (396, 'admin', 1590477319, 'Xóa nội dung chapter', '14.160.24.158');
INSERT INTO `history` VALUES (397, 'admin', 1590477322, 'Xóa nội dung chapter', '14.160.24.158');
INSERT INTO `history` VALUES (398, 'minhchau', 1590477852, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (399, 'minhchau', 1590478073, 'Chỉnh sửa nội dung chapter : Chương 28: Tâm sự', '14.240.40.204');
INSERT INTO `history` VALUES (400, 'minhchau', 1590478199, 'Chỉnh sửa nội dung chapter : Chương 28: Tâm sự', '14.240.40.204');
INSERT INTO `history` VALUES (401, 'minhchau', 1590478823, 'Đăng nhập hệ thống ', '115.74.214.123');
INSERT INTO `history` VALUES (402, 'minhchau', 1590479156, 'Chỉnh sửa nội dung chapter : Chương 1: Cố mộng', '115.74.214.123');
INSERT INTO `history` VALUES (403, 'minhchau', 1590479376, 'Chỉnh sửa nội dung chapter : Chương 2: Ra tòa', '115.74.214.123');
INSERT INTO `history` VALUES (404, 'minhchau', 1590479522, 'Chỉnh sửa nội dung chapter : Chương 3: Trước kia', '115.74.214.123');
INSERT INTO `history` VALUES (405, 'minhchau', 1590479908, 'Chỉnh sửa nội dung chapter : Chương 4: Ăn vạ', '115.74.214.123');
INSERT INTO `history` VALUES (406, 'minhchau', 1590480187, 'Chỉnh sửa nội dung chapter : Chương 5: Giao phong', '115.74.214.123');
INSERT INTO `history` VALUES (407, 'minhchau', 1590480612, 'Chỉnh sửa nội dung chapter : Chương 6: Giao thủ', '115.74.214.123');
INSERT INTO `history` VALUES (408, 'minhchau', 1590481189, 'Chỉnh sửa nội dung pro : Đội Trưởng Đồ Và Bác Sĩ Thẩm', '115.74.214.123');
INSERT INTO `history` VALUES (409, 'minhchau', 1590481234, 'Chỉnh sửa nội dung pro : Cưng Vợ Điên Cuồng', '115.74.214.123');
INSERT INTO `history` VALUES (410, 'minhchau', 1590481263, 'Chỉnh sửa nội dung pro : Cường Liêu', '115.74.214.123');
INSERT INTO `history` VALUES (411, 'minhchau', 1590481291, 'Chỉnh sửa nội dung pro : Gặp Được Chân Tình', '115.74.214.123');
INSERT INTO `history` VALUES (412, 'minhchau', 1590481320, 'Chỉnh sửa nội dung pro : Chúng Ta Yêu Nhau Là Vì Dân Trừ Hại', '115.74.214.123');
INSERT INTO `history` VALUES (413, 'minhchau', 1590481352, 'Chỉnh sửa nội dung pro : Khó Lòng Kiềm Chế', '115.74.214.123');
INSERT INTO `history` VALUES (414, 'minhchau', 1590481409, 'Chỉnh sửa nội dung pro : Xuyên Thành Nữ Phụ Tai Tiếng', '115.74.214.123');
INSERT INTO `history` VALUES (415, 'minhchau', 1590481437, 'Chỉnh sửa nội dung pro : Cùng Nhớ Về Ngày Xưa', '115.74.214.123');
INSERT INTO `history` VALUES (416, 'minhchau', 1590481461, 'Chỉnh sửa nội dung pro : Lòng Dạ Hiểm Độc Mỹ Thực Quán', '115.74.214.123');
INSERT INTO `history` VALUES (417, 'minhchau', 1590481487, 'Chỉnh sửa nội dung pro : Tình Nghịch', '115.74.214.123');
INSERT INTO `history` VALUES (418, 'minhchau', 1590481508, 'Chỉnh sửa nội dung pro : Chị Dâu', '115.74.214.123');
INSERT INTO `history` VALUES (419, 'minhchau', 1590481545, 'Chỉnh sửa nội dung pro : Cấp Trên Mỗi Ngày Đều Liêu Ta', '115.74.214.123');
INSERT INTO `history` VALUES (420, 'minhchau', 1590481574, 'Chỉnh sửa nội dung pro : Dục Vọng Ái Tình', '115.74.214.123');
INSERT INTO `history` VALUES (421, 'minhchau', 1590481609, 'Chỉnh sửa nội dung pro : Lão Sư Của Tôi Là Bách Hợp Khống', '115.74.214.123');
INSERT INTO `history` VALUES (422, 'minhchau', 1590481741, 'Chỉnh sửa nội dung pro : Lòng Dạ Hiểm Độc Mỹ Thực Quán', '115.74.214.123');
INSERT INTO `history` VALUES (423, 'minhchau', 1590481802, 'Chỉnh sửa nội dung pro : Cấp Trên Mỗi Ngày Đều Liêu Ta', '115.74.214.123');
INSERT INTO `history` VALUES (424, 'minhchau', 1590481881, 'Chỉnh sửa nội dung pro : Dục Vọng Ái Tình', '115.74.214.123');
INSERT INTO `history` VALUES (425, 'minhchau', 1590481923, 'Chỉnh sửa nội dung pro : Lão Sư Của Tôi Là Bách Hợp Khống', '115.74.214.123');
INSERT INTO `history` VALUES (426, 'minhchau', 1590481971, 'Chỉnh sửa nội dung pro : Số Hiệu 36624', '115.74.214.123');
INSERT INTO `history` VALUES (427, 'minhchau', 1590482012, 'Chỉnh sửa nội dung pro : Là Của Tôi Đừng Hòng Trốn', '115.74.214.123');
INSERT INTO `history` VALUES (428, 'minhchau', 1590494442, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (429, 'minhchau', 1590494787, 'Chỉnh sửa nội dung pro : 36 kế hưu thê', '14.240.40.204');
INSERT INTO `history` VALUES (430, 'minhchau', 1590494816, 'Chỉnh sửa nội dung pro : Bạn gái tai tiếng', '14.240.40.204');
INSERT INTO `history` VALUES (431, 'minhchau', 1590494927, 'Chỉnh sửa nội dung pro : Càng Chơi Càng lớn', '14.240.40.204');
INSERT INTO `history` VALUES (432, 'minhchau', 1590494957, 'Chỉnh sửa nội dung pro : Tái Kiến Lan Lăng', '14.240.40.204');
INSERT INTO `history` VALUES (433, 'minhchau', 1590494988, 'Chỉnh sửa nội dung pro : Thiếp thân cao thủ của Ảnh hậu', '14.240.40.204');
INSERT INTO `history` VALUES (434, 'minhchau', 1590495019, 'Chỉnh sửa nội dung pro : Rốt cuộc gặp được em', '14.240.40.204');
INSERT INTO `history` VALUES (435, 'minhchau', 1590495053, 'Chỉnh sửa nội dung pro : Nữ Thần Luôn Cao Cao Tại Thượng', '14.240.40.204');
INSERT INTO `history` VALUES (436, 'minhchau', 1590495216, 'Chỉnh sửa nội dung pro : Đã Hợp Thì Không Tan', '14.240.40.204');
INSERT INTO `history` VALUES (437, 'minhchau', 1590495261, 'Chỉnh sửa nội dung pro : Sự Ngọt Ngào Trên Đầu Môi', '14.240.40.204');
INSERT INTO `history` VALUES (438, 'minhchau', 1590495313, 'Chỉnh sửa nội dung pro : Phu Nhân Không Đứng Đắn', '14.240.40.204');
INSERT INTO `history` VALUES (439, 'minhchau', 1590495973, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (440, 'minhchau', 1590496197, 'Chỉnh sửa nội dung pro : Phu Nhân Không Đứng Đắn', '14.240.40.204');
INSERT INTO `history` VALUES (441, 'minhchau', 1590496238, 'Chỉnh sửa nội dung pro : Tiểu Thư Pháp Y Là Thân Ái Của Ta', '14.240.40.204');
INSERT INTO `history` VALUES (442, 'minhchau', 1590496296, 'Chỉnh sửa nội dung pro : Xin Đừng Ăn Giấm', '14.240.40.204');
INSERT INTO `history` VALUES (443, 'minhchau', 1590496331, 'Chỉnh sửa nội dung pro : Ký Sự Nuôi Dưỡng Nhân Vật Phản Diện Chốn Hào Môn', '14.240.40.204');
INSERT INTO `history` VALUES (444, 'minhchau', 1590496364, 'Chỉnh sửa nội dung pro : Cuộc Hôn Nhân Bị Tính Kế', '14.240.40.204');
INSERT INTO `history` VALUES (445, 'minhchau', 1590496436, 'Chỉnh sửa nội dung pro : Nhảy Lên Hôn Ngươi', '14.240.40.204');
INSERT INTO `history` VALUES (446, 'minhchau', 1590496592, 'Chỉnh sửa nội dung pro : Nhảy Lên Hôn Ngươi', '14.240.40.204');
INSERT INTO `history` VALUES (447, 'minhchau', 1590496621, 'Chỉnh sửa nội dung pro : Bạch Nguyệt Quang Muốn Giúp Ta Nuôi Dưỡng Đứa Bé', '14.240.40.204');
INSERT INTO `history` VALUES (448, 'minhchau', 1590496657, 'Chỉnh sửa nội dung pro : Cùng Người Đùa Giỡn Mà Thành Thật', '14.240.40.204');
INSERT INTO `history` VALUES (449, 'minhchau', 1590496924, 'Chỉnh sửa nội dung pro : Bạn Học Không Phải Người Xấu', '14.240.40.204');
INSERT INTO `history` VALUES (450, 'minhchau', 1590497058, 'Chỉnh sửa nội dung pro : Phóng Túng', '14.240.40.204');
INSERT INTO `history` VALUES (451, 'minhchau', 1590497122, 'Chỉnh sửa nội dung pro : Đỉnh Cao Của Sự Chinh Phục', '14.240.40.204');
INSERT INTO `history` VALUES (452, 'minhchau', 1590497156, 'Chỉnh sửa nội dung pro : Có Thể Trước Kết Hôn', '14.240.40.204');
INSERT INTO `history` VALUES (453, 'minhchau', 1590497184, 'Chỉnh sửa nội dung pro : Tuyển Tập Dao Đình Luyến', '14.240.40.204');
INSERT INTO `history` VALUES (454, 'minhchau', 1590497235, 'Chỉnh sửa nội dung pro : Lâm Thị Lang Cố', '14.240.40.204');
INSERT INTO `history` VALUES (455, 'minhchau', 1590497265, 'Chỉnh sửa nội dung pro : Dư Sinh Vi Kỳ', '14.240.40.204');
INSERT INTO `history` VALUES (456, 'minhchau', 1590497741, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (457, 'minhchau', 1590497866, 'Chỉnh sửa nội dung pro : Dư Tình Khả Đãi [ Trọng Sinh ]', '14.240.40.204');
INSERT INTO `history` VALUES (458, 'minhchau', 1590497939, 'Chỉnh sửa nội dung pro : Hàng Yêu Mộng', '14.240.40.204');
INSERT INTO `history` VALUES (459, 'minhchau', 1590497976, 'Chỉnh sửa nội dung pro : Liêu Ngươi, Lại Ngươi, Ái Định Ngươi [Trọng Sinh]', '14.240.40.204');
INSERT INTO `history` VALUES (460, 'minhchau', 1590498058, 'Chỉnh sửa nội dung pro : Nhất Niệm Thành Kỳ', '14.240.40.204');
INSERT INTO `history` VALUES (461, 'minhchau', 1590498082, 'Chỉnh sửa nội dung pro : Tổng Tài Cùng Nàng Ôn Nhu Tổng Giám', '14.240.40.204');
INSERT INTO `history` VALUES (462, 'minhchau', 1590498111, 'Chỉnh sửa nội dung pro : Năm Tháng Lâu Dài', '14.240.40.204');
INSERT INTO `history` VALUES (463, 'minhchau', 1590498134, 'Chỉnh sửa nội dung pro : Con Đường Khác', '14.240.40.204');
INSERT INTO `history` VALUES (464, 'minhchau', 1590498164, 'Chỉnh sửa nội dung pro : Sự Ngọt Ngào Của Hôn Nhân', '14.240.40.204');
INSERT INTO `history` VALUES (465, 'minhchau', 1590498215, 'Chỉnh sửa nội dung pro : Tiểu Tỷ, Bất Hung', '14.240.40.204');
INSERT INTO `history` VALUES (466, 'minhchau', 1590498246, 'Chỉnh sửa nội dung pro : Xuân Điền Viên', '14.240.40.204');
INSERT INTO `history` VALUES (467, 'minhchau', 1590498276, 'Chỉnh sửa nội dung pro : Bạn Gái Tôi Là Pháp Y', '14.240.40.204');
INSERT INTO `history` VALUES (468, 'minhchau', 1590498301, 'Chỉnh sửa nội dung pro : Ta Muốn Cô Độc Tự Mỹ Lệ [ xuyên nhanh ]', '14.240.40.204');
INSERT INTO `history` VALUES (469, 'minhchau', 1590498326, 'Chỉnh sửa nội dung pro : Tuyển Tập Truyện Ngắn Của Nhật Lãng', '14.240.40.204');
INSERT INTO `history` VALUES (470, 'minhchau', 1590498350, 'Chỉnh sửa nội dung pro : Nàng sơn , nàng hải', '14.240.40.204');
INSERT INTO `history` VALUES (471, 'minhchau', 1590498375, 'Chỉnh sửa nội dung pro : Nàng thuộc về ta', '14.240.40.204');
INSERT INTO `history` VALUES (472, 'minhchau', 1590498402, 'Chỉnh sửa nội dung pro : Loạn Nhịp Vì Ngươi', '14.240.40.204');
INSERT INTO `history` VALUES (473, 'minhchau', 1590498426, 'Chỉnh sửa nội dung pro : Diệp Sán', '14.240.40.204');
INSERT INTO `history` VALUES (474, 'minhchau', 1590498457, 'Chỉnh sửa nội dung pro : Ở Tu La tràng cầu sinh [ xuyên nhanh ]', '14.240.40.204');
INSERT INTO `history` VALUES (475, 'minhchau', 1590498487, 'Chỉnh sửa nội dung pro : Khi nữ vương yêu', '14.240.40.204');
INSERT INTO `history` VALUES (476, 'minhchau', 1590498512, 'Chỉnh sửa nội dung pro : Nghịch Đồ Tu Tiên Chỉ Nam', '14.240.40.204');
INSERT INTO `history` VALUES (477, 'minhchau', 1590498574, 'Chỉnh sửa nội dung pro : Cô giáo ở nhà tôi ', '14.240.40.204');
INSERT INTO `history` VALUES (478, 'minhchau', 1590498604, 'Chỉnh sửa nội dung pro : Tim Đập Thình Thịch', '14.240.40.204');
INSERT INTO `history` VALUES (479, 'minhchau', 1590498638, 'Chỉnh sửa nội dung pro : Nuông Chiều', '14.240.40.204');
INSERT INTO `history` VALUES (480, 'minhchau', 1590498661, 'Chỉnh sửa nội dung pro : Lay Động Tiếng Lòng', '14.240.40.204');
INSERT INTO `history` VALUES (481, 'minhchau', 1590498685, 'Chỉnh sửa nội dung pro : Cùng Tình Địch Giữ Khoảng Cách Thất Bại ', '14.240.40.204');
INSERT INTO `history` VALUES (482, 'minhchau', 1590498717, 'Chỉnh sửa nội dung pro : Tô An cưới vợ ', '14.240.40.204');
INSERT INTO `history` VALUES (483, 'minhchau', 1590498741, 'Chỉnh sửa nội dung pro : Biết Vậy Sẽ Không Làm Tổng Tài', '14.240.40.204');
INSERT INTO `history` VALUES (484, 'minhchau', 1590498764, 'Chỉnh sửa nội dung pro : Phía sau ánh dương', '14.240.40.204');
INSERT INTO `history` VALUES (485, 'minhchau', 1590498791, 'Chỉnh sửa nội dung pro : Sau Khi Trọng Sinh Kết Hôn Chớp Nhoáng Cùng Bạch Nguyệt Quang Của Tiền Nhiệm', '14.240.40.204');
INSERT INTO `history` VALUES (486, 'minhchau', 1590498815, 'Chỉnh sửa nội dung pro : Sủng Nịch Vô Hạn', '14.240.40.204');
INSERT INTO `history` VALUES (487, 'minhchau', 1590498840, 'Chỉnh sửa nội dung pro : Văn Phòng Xử Lý Chia Tay', '14.240.40.204');
INSERT INTO `history` VALUES (488, 'minhchau', 1590498866, 'Chỉnh sửa nội dung pro : Tiết Mục Kết Hôn Trước Khi Ly Hôn', '14.240.40.204');
INSERT INTO `history` VALUES (489, 'minhchau', 1590498889, 'Chỉnh sửa nội dung pro : Hôn nhẹ nhóc câm của ta', '14.240.40.204');
INSERT INTO `history` VALUES (490, 'minhchau', 1590498914, 'Chỉnh sửa nội dung pro : Đồ Đệ Vô Sỉ', '14.240.40.204');
INSERT INTO `history` VALUES (491, 'minhchau', 1590499032, 'Chỉnh sửa nội dung pro : Tiền Thê Tu La Tràng', '14.240.40.204');
INSERT INTO `history` VALUES (492, 'minhchau', 1590499064, 'Chỉnh sửa nội dung pro : Đạo Diễn Có Chút Hư Hỏng ', '14.240.40.204');
INSERT INTO `history` VALUES (493, 'minhchau', 1590499093, 'Chỉnh sửa nội dung pro : Tỷ Tỷ Của Nam Chủ Sau Khi Trọng Sinh', '14.240.40.204');
INSERT INTO `history` VALUES (494, 'minhchau', 1590499143, 'Chỉnh sửa nội dung pro : Phong Hoa Bất Độ Ứng Quy Xử', '14.240.40.204');
INSERT INTO `history` VALUES (495, 'minhchau', 1590506097, 'Đăng nhập hệ thống ', '8.38.172.110');
INSERT INTO `history` VALUES (496, 'minhchau', 1590507202, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (497, 'minhchau', 1590507330, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (498, 'minhchau', 1590507413, 'Đăng nhập hệ thống ', '14.240.40.204');
INSERT INTO `history` VALUES (499, 'minhchau', 1590507649, 'Đăng nhập hệ thống ', '8.38.172.110');
INSERT INTO `history` VALUES (500, 'minhchau', 1590508034, 'Đăng nhập hệ thống ', '8.38.172.110');
INSERT INTO `history` VALUES (501, 'admin', 1590509491, 'Đăng nhập hệ thống ', '42.113.1.92');
INSERT INTO `history` VALUES (502, 'admin', 1590511006, 'Đăng nhập hệ thống ', '1.53.210.49');
INSERT INTO `history` VALUES (503, 'admin', 1590511915, 'Chỉnh sửa nội dung chapter : Chương 32 : Sinh Nhật', '1.53.210.49');
INSERT INTO `history` VALUES (504, 'admin', 1590515951, 'Thêm mới nội dung chapter : Chương 33 : Giai điệu', '1.53.210.49');
INSERT INTO `history` VALUES (505, 'admin', 1590516208, 'Thêm mới nội dung chapter : Chương 34 : Làm bài tập', '1.53.210.49');
INSERT INTO `history` VALUES (506, 'admin', 1590546931, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (507, 'admin', 1590562188, 'Đăng nhập hệ thống ', '222.254.23.213');
INSERT INTO `history` VALUES (508, 'admin', 1590577201, 'Đăng nhập hệ thống ', '27.71.85.155');
INSERT INTO `history` VALUES (509, 'minhchau', 1590580116, 'Đăng nhập hệ thống ', '14.252.191.135');
INSERT INTO `history` VALUES (510, 'minhchau', 1590580155, 'Chỉnh sửa nội dung pro : Dỗ Dành Ta Uống Thuốc', '14.252.191.135');
INSERT INTO `history` VALUES (511, 'minhchau', 1590580185, 'Chỉnh sửa nội dung pro : Vũ Trụ Đệ Nhất Giấm Thần', '14.252.191.135');
INSERT INTO `history` VALUES (512, 'minhchau', 1590580223, 'Chỉnh sửa nội dung pro : Cùng nàng kết hôn trước yêu sau', '14.252.191.135');
INSERT INTO `history` VALUES (513, 'minhchau', 1590580252, 'Chỉnh sửa nội dung pro : Tâm Sự Ngọt Nhất Thế Giới', '14.252.191.135');
INSERT INTO `history` VALUES (514, 'minhchau', 1590580278, 'Chỉnh sửa nội dung pro : Sự Chờ Đợi Mỹ Lệ Nhất Của Em', '14.252.191.135');
INSERT INTO `history` VALUES (515, 'minhchau', 1590580307, 'Chỉnh sửa nội dung pro : Biết vậy chẳng làm tổng tài', '14.252.191.135');
INSERT INTO `history` VALUES (516, 'minhchau', 1590580335, 'Chỉnh sửa nội dung pro : Biết vậy chẳng làm tổng tài', '14.252.191.135');
INSERT INTO `history` VALUES (517, 'minhchau', 1590580351, 'Chỉnh sửa nội dung pro : Nhà Thực Vật Học Của Tôi', '14.252.191.135');
INSERT INTO `history` VALUES (518, 'minhchau', 1590580375, 'Chỉnh sửa nội dung pro : Nhà Thực Vật Học Của Tôi', '14.252.191.135');
INSERT INTO `history` VALUES (519, 'minhchau', 1590580456, 'Chỉnh sửa nội dung pro : Ban Mã Tuyến', '14.252.191.135');
INSERT INTO `history` VALUES (520, 'minhchau', 1590580484, 'Chỉnh sửa nội dung pro : Ưu Thương Trong Mắt Khó Có Thể Xóa Đi', '14.252.191.135');
INSERT INTO `history` VALUES (521, 'minhchau', 1590580630, 'Chỉnh sửa nội dung pro : Thu Dưỡng Nữ Chủ Lúc Thiếu Niên', '14.252.191.135');
INSERT INTO `history` VALUES (522, 'minhchau', 1590580669, 'Chỉnh sửa nội dung pro : Hà Xúc Phùng Sinh', '14.252.191.135');
INSERT INTO `history` VALUES (523, 'minhchau', 1590580739, 'Chỉnh sửa nội dung pro : Thiên Hạ Đệ Nhất Phế Sài Đế Cơ', '14.252.191.135');
INSERT INTO `history` VALUES (524, 'minhchau', 1590580786, 'Chỉnh sửa nội dung pro : Nàng Muốn Làm Máy Rút Tiền Của Ta', '14.252.191.135');
INSERT INTO `history` VALUES (525, 'minhchau', 1590580822, 'Chỉnh sửa nội dung pro : Tâm Sâu Tựa Biển', '14.252.191.135');
INSERT INTO `history` VALUES (526, 'minhchau', 1590580849, 'Chỉnh sửa nội dung pro : Tâm Lý Tâm Ngoại', '14.252.191.135');
INSERT INTO `history` VALUES (527, 'minhchau', 1590580875, 'Chỉnh sửa nội dung pro : Mối Quan Hệ Bí Ẩn', '14.252.191.135');
INSERT INTO `history` VALUES (528, 'minhchau', 1590580899, 'Chỉnh sửa nội dung pro : Hoa Tâm Không Phải Bệnh', '14.252.191.135');
INSERT INTO `history` VALUES (529, 'minhchau', 1590580925, 'Chỉnh sửa nội dung pro : Tú Ân Ái Đối Với Toàn Thế Giới[ xuyên nhanh ]', '14.252.191.135');
INSERT INTO `history` VALUES (530, 'minhchau', 1590580950, 'Chỉnh sửa nội dung pro : Chờ Người Nói Yêu Tôi', '14.252.191.135');
INSERT INTO `history` VALUES (531, 'minhchau', 1590580991, 'Chỉnh sửa nội dung pro : Hoán Đổi Ảnh Hậu', '14.252.191.135');
INSERT INTO `history` VALUES (532, 'minhchau', 1590581017, 'Chỉnh sửa nội dung pro : Phân Cách', '14.252.191.135');
INSERT INTO `history` VALUES (533, 'minhchau', 1590581044, 'Chỉnh sửa nội dung pro : Cố tiểu thư và Khúc tiểu thư', '14.252.191.135');
INSERT INTO `history` VALUES (534, 'minhchau', 1590581082, 'Chỉnh sửa nội dung pro : Cuộc sống này là những con số [Lam Tịch]', '14.252.191.135');
INSERT INTO `history` VALUES (535, 'minhchau', 1590581110, 'Chỉnh sửa nội dung pro : Trì Mộ, Trì Mộ về nơi đâu', '14.252.191.135');
INSERT INTO `history` VALUES (536, 'minhchau', 1590581134, 'Chỉnh sửa nội dung pro : Một loại khác có thể', '14.252.191.135');
INSERT INTO `history` VALUES (537, 'minhchau', 1590581159, 'Chỉnh sửa nội dung pro : Mất', '14.252.191.135');
INSERT INTO `history` VALUES (538, 'minhchau', 1590581181, 'Chỉnh sửa nội dung pro : Nghiên phẩm tân minh', '14.252.191.135');
INSERT INTO `history` VALUES (539, 'minhchau', 1590581211, 'Chỉnh sửa nội dung pro : Ngươi Là Nữ Vương, Ta Là Đặc Công', '14.252.191.135');
INSERT INTO `history` VALUES (540, 'minhchau', 1590581238, 'Chỉnh sửa nội dung pro : Cung Khuynh', '14.252.191.135');
INSERT INTO `history` VALUES (541, 'minhchau', 1590581276, 'Chỉnh sửa nội dung pro : Niên niên hữu dư', '14.252.191.135');
INSERT INTO `history` VALUES (542, 'minhchau', 1590581308, 'Chỉnh sửa nội dung pro : Ngự Tỷ Hành Động', '14.252.191.135');
INSERT INTO `history` VALUES (543, 'minhchau', 1590581334, 'Chỉnh sửa nội dung pro : Nội tâm của ta cơ hồ bị phá vỡ', '14.252.191.135');
INSERT INTO `history` VALUES (544, 'minhchau', 1590581361, 'Chỉnh sửa nội dung pro : Sống lại so chiêu cùng tình địch ngự tỷ', '14.252.191.135');
INSERT INTO `history` VALUES (545, 'minhchau', 1590581391, 'Chỉnh sửa nội dung pro : Núi Của Nàng , Biển Của Nàng', '14.252.191.135');
INSERT INTO `history` VALUES (546, 'minhchau', 1590581417, 'Chỉnh sửa nội dung pro : Trọng Sinh Chi Trưởng Công Chúa', '14.252.191.135');
INSERT INTO `history` VALUES (547, 'minhchau', 1590581462, 'Chỉnh sửa nội dung pro : Yêu Người Cô Đơn', '14.252.191.135');
INSERT INTO `history` VALUES (548, 'minhchau', 1590581485, 'Chỉnh sửa nội dung pro : Trọng Sinh Chi Khanh Tâm Phó Nghiễn', '14.252.191.135');
INSERT INTO `history` VALUES (549, 'minhchau', 1590581520, 'Chỉnh sửa nội dung pro : Thật ra thì em rất trong sáng', '14.252.191.135');
INSERT INTO `history` VALUES (550, 'minhchau', 1590581545, 'Chỉnh sửa nội dung pro : Xuyên Sách Chi Phù Mộng Tam Sinh', '14.252.191.135');
INSERT INTO `history` VALUES (551, 'minhchau', 1590581572, 'Chỉnh sửa nội dung pro : Lễ Tình Nhân Vui Vẻ', '14.252.191.135');
INSERT INTO `history` VALUES (552, 'minhchau', 1590581597, 'Chỉnh sửa nội dung pro : Quả Chanh Non', '14.252.191.135');
INSERT INTO `history` VALUES (553, 'minhchau', 1590581631, 'Chỉnh sửa nội dung pro : Bẻ cong thẳng nữ thanh mai bút kí', '14.252.191.135');
INSERT INTO `history` VALUES (554, 'minhchau', 1590581658, 'Chỉnh sửa nội dung pro : Ánh Sáng Nhạt Nhòa', '14.252.191.135');
INSERT INTO `history` VALUES (555, 'minhchau', 1590581692, 'Chỉnh sửa nội dung pro : Làm Nũng Trong Ngực Nàng', '14.252.191.135');
INSERT INTO `history` VALUES (556, 'minhchau', 1590581724, 'Chỉnh sửa nội dung pro : Công Nàng Thực Sự Có Bệnh [ Xuyên Nhanh ]', '14.252.191.135');
INSERT INTO `history` VALUES (557, 'minhchau', 1590581751, 'Chỉnh sửa nội dung pro : Không Được Làm Nũng', '14.252.191.135');
INSERT INTO `history` VALUES (558, 'minhchau', 1590582517, 'Chỉnh sửa nội dung chapter : Chương 7: Thân cận', '14.252.191.135');
INSERT INTO `history` VALUES (559, 'admin', 1590582679, 'Thêm mới nội dung chapter : Chương 2 : Kiều diễm hoa hậu giảng đường x si tình giáo y', '14.171.70.111');
INSERT INTO `history` VALUES (560, 'admin', 1590583136, 'Thêm mới nội dung chapter : Chương 3 : Kiều diễm hoa hậu giảng đường x si tình giáo y', '113.172.72.96');
INSERT INTO `history` VALUES (561, 'minhchau', 1590583162, 'Chỉnh sửa nội dung chapter : Chương 8: Nữ thi', '14.252.191.135');
INSERT INTO `history` VALUES (562, 'admin', 1590583357, 'Thêm mới nội dung chapter : Chương 4 : Kiều diễm hoa hậu giảng đường x si tình giáo y', '113.172.72.96');
INSERT INTO `history` VALUES (563, 'minhchau', 1590583723, 'Chỉnh sửa nội dung chapter : Chương 9: Giải phẫu', '14.252.191.135');
INSERT INTO `history` VALUES (564, 'minhchau', 1590584148, 'Chỉnh sửa nội dung chapter : Chương 10: Nghi vấn   ', '14.252.191.135');
INSERT INTO `history` VALUES (565, 'minhchau', 1590584711, 'Chỉnh sửa nội dung chapter : Chương 11: Học sinh', '14.252.191.135');
INSERT INTO `history` VALUES (566, 'minhchau', 1590585205, 'Chỉnh sửa nội dung chapter : Chương 12: Khắc khẩu', '14.252.191.135');
INSERT INTO `history` VALUES (567, 'minhchau', 1590585701, 'Chỉnh sửa nội dung chapter : Chương 13: Quan hệ', '14.252.191.135');
INSERT INTO `history` VALUES (568, 'minhchau', 1590586222, 'Chỉnh sửa nội dung chapter : Chương 14: Thẩm vấn', '14.252.191.135');
INSERT INTO `history` VALUES (569, 'minhchau', 1590586726, 'Chỉnh sửa nội dung chapter : Chương 15: Gầy yếu', '14.252.191.135');
INSERT INTO `history` VALUES (570, 'admin', 1590587301, 'Đăng nhập hệ thống ', '123.19.11.250');
INSERT INTO `history` VALUES (571, 'admin', 1590588359, 'Thêm mới nội dung chapter : Chương 5 : Kiều diễm hoa hậu giảng đường x si tình giáo y', '117.5.149.49');
INSERT INTO `history` VALUES (572, 'admin', 1590589686, 'Thêm mới nội dung chapter : Chương 6 : Kiều diễm hoa hậu giảng đường x si tình giáo y', '58.186.120.31');
INSERT INTO `history` VALUES (573, 'admin', 1590590791, 'Thêm mới nội dung chapter : Chương 7 : Kiều diễm hoa hậu giảng đường x si tình giáo y', '171.236.149.149');
INSERT INTO `history` VALUES (574, 'admin', 1590591129, 'Thêm mới nội dung chapter : Chương 8 : Kiều diễm hoa hậu giảng đường x si tình giáo y', '14.236.1.35');
INSERT INTO `history` VALUES (575, 'admin', 1590591452, 'Thêm mới nội dung chapter : Chương 9 : Kiều diễm hoa hậu giảng đường x si tình giáo y', '123.16.111.240');
INSERT INTO `history` VALUES (576, 'admin', 1590597051, 'Đăng nhập hệ thống ', '14.182.17.153');
INSERT INTO `history` VALUES (577, 'admin', 1590597173, 'Chỉnh sửa nội dung chapter : Chương 81 : Dị thường', '14.182.17.153');
INSERT INTO `history` VALUES (578, 'admin', 1590599363, 'Thêm mới nội dung chapter : Chương 82 : Bí ẩn', '171.255.124.209');
INSERT INTO `history` VALUES (579, 'admin', 1590599722, 'Thêm mới nội dung chapter : Chương 83 : Biến chuyển', '115.79.220.196');
INSERT INTO `history` VALUES (580, 'admin', 1590600167, 'Thêm mới nội dung chapter : Chương 84 : Phản phệ', '171.239.249.64');
INSERT INTO `history` VALUES (581, 'admin', 1590601222, 'Thêm mới nội dung chapter : Chương 85 : Áp chế', '14.169.12.175');
INSERT INTO `history` VALUES (582, 'admin', 1590601313, 'Thêm mới nội dung chapter : Chương 86 : Nguy cơ', '14.169.12.175');
INSERT INTO `history` VALUES (583, 'admin', 1590601400, 'Thêm mới nội dung chapter : Chương 87 : Bẫy rập', '14.169.12.175');
INSERT INTO `history` VALUES (584, 'admin', 1590601761, 'Thêm mới nội dung chapter : Chương 59', '14.169.12.175');
INSERT INTO `history` VALUES (585, 'admin', 1590601833, 'Thêm mới nội dung chapter : Chương 60', '14.169.12.175');
INSERT INTO `history` VALUES (586, 'admin', 1590602104, 'Thêm mới nội dung chapter : Chương 61', '42.119.238.107');
INSERT INTO `history` VALUES (587, 'admin', 1590602367, 'Thêm mới nội dung chapter : Chương 62', '203.205.50.212');
INSERT INTO `history` VALUES (588, 'admin', 1590602546, 'Thêm mới nội dung chapter : Chương 63', '203.205.50.212');
INSERT INTO `history` VALUES (589, 'admin', 1590603485, 'Thêm mới nội dung chapter : Chương 116 (H)', '42.116.112.144');
INSERT INTO `history` VALUES (590, 'admin', 1590603562, 'Thêm mới nội dung chapter : Chương 117', '42.116.112.144');
INSERT INTO `history` VALUES (591, 'admin', 1590604711, 'Thêm mới nội dung chapter : Chương 118', '27.71.168.71');
INSERT INTO `history` VALUES (592, 'admin', 1590604781, 'Thêm mới nội dung chapter : Chương 119', '113.167.67.245');
INSERT INTO `history` VALUES (593, 'admin', 1590605854, 'Thêm mới nội dung chapter : Chương 120', '42.114.19.47');
INSERT INTO `history` VALUES (594, 'admin', 1590605990, 'Thêm mới nội dung chapter : Chương 121', '42.114.19.47');
INSERT INTO `history` VALUES (595, 'admin', 1590606084, 'Thêm mới nội dung chapter : Chương 122', '42.114.19.47');
INSERT INTO `history` VALUES (596, 'admin', 1590606159, 'Thêm mới nội dung chapter : Chương 123', '42.114.19.47');
INSERT INTO `history` VALUES (597, 'admin', 1590606252, 'Thêm mới nội dung chapter : Chương 124', '42.114.19.47');
INSERT INTO `history` VALUES (598, 'admin', 1590606357, 'Thêm mới nội dung chapter : Chương 125 : Phiên Ngoại', '42.114.19.47');
INSERT INTO `history` VALUES (599, 'admin', 1590606818, 'Chỉnh sửa nội dung pro : Phu Nhân Không Đứng Đắn', '14.171.41.206');
INSERT INTO `history` VALUES (600, 'admin', 1590606831, 'Chỉnh sửa nội dung pro : Phu Nhân Không Đứng Đắn', '14.171.41.206');
INSERT INTO `history` VALUES (601, 'admin', 1590606833, 'Chỉnh sửa nội dung pro : Phu Nhân Không Đứng Đắn', '14.171.41.206');
INSERT INTO `history` VALUES (602, 'admin', 1590606870, 'Cập nhật nhanh pro : status-1-[{\"id\":\"57\"}]', '14.177.214.42');
INSERT INTO `history` VALUES (603, 'admin', 1590606888, 'Cập nhật nhanh pro : status-1-[{\"id\":\"63\"}]', '171.236.64.166');
INSERT INTO `history` VALUES (604, 'admin', 1590606897, 'Cập nhật nhanh pro : status-1-[{\"id\":\"76\"}]', '171.236.64.166');
INSERT INTO `history` VALUES (605, 'admin', 1590606902, 'Cập nhật nhanh pro : status-1-[{\"id\":\"75\"}]', '171.236.64.166');
INSERT INTO `history` VALUES (606, 'admin', 1590606903, 'Cập nhật nhanh pro : status-1-[{\"id\":\"74\"}]', '171.236.64.166');
INSERT INTO `history` VALUES (607, 'admin', 1590606904, 'Cập nhật nhanh pro : status-1-[{\"id\":\"73\"}]', '171.236.64.166');
INSERT INTO `history` VALUES (608, 'admin', 1590606905, 'Cập nhật nhanh pro : status-1-[{\"id\":\"72\"}]', '171.236.64.166');
INSERT INTO `history` VALUES (609, 'admin', 1590606906, 'Cập nhật nhanh pro : status-1-[{\"id\":\"71\"}]', '171.236.64.166');
INSERT INTO `history` VALUES (610, 'admin', 1590606913, 'Cập nhật nhanh pro : status-1-[{\"id\":\"68\"}]', '171.236.64.166');
INSERT INTO `history` VALUES (611, 'admin', 1590606938, 'Cập nhật nhanh pro : status-1-[{\"id\":\"109\"}]', '42.114.170.127');
INSERT INTO `history` VALUES (612, 'admin', 1590606971, 'Cập nhật nhanh pro : status-1-[{\"id\":\"132\"}]', '42.114.170.127');
INSERT INTO `history` VALUES (613, 'admin', 1590609107, 'Thêm mới nội dung chapter : Chương 280 : Động thủ đi', '171.235.176.97');
INSERT INTO `history` VALUES (614, 'admin', 1590609138, 'Chỉnh sửa nội dung chapter : Chương 280 : Động thủ đi', '171.235.176.97');
INSERT INTO `history` VALUES (615, 'admin', 1590609166, 'Chỉnh sửa nội dung chapter : Chương 280 : Động thủ đi', '171.235.176.97');
INSERT INTO `history` VALUES (616, 'admin', 1590609167, 'Chỉnh sửa nội dung chapter : Chương 280 : Động thủ đi', '171.235.176.97');
INSERT INTO `history` VALUES (617, 'admin', 1590609172, 'Chỉnh sửa nội dung chapter : Chương 280 : Động thủ đi', '171.235.176.97');
INSERT INTO `history` VALUES (618, 'admin', 1590609366, 'Đăng nhập hệ thống ', '1.53.196.218');
INSERT INTO `history` VALUES (619, 'admin', 1590609383, 'Chỉnh sửa nội dung chapter : Chương 280 : Động thủ đi', '1.53.196.218');
INSERT INTO `history` VALUES (620, 'admin', 1590609440, 'Thêm mới nội dung chapter : Chương 281 : Kính bạo', '1.53.196.218');
INSERT INTO `history` VALUES (621, 'admin', 1590609538, 'Thêm mới nội dung chapter : Chương 282 : Liều mạng', '1.53.196.218');
INSERT INTO `history` VALUES (622, 'admin', 1590609637, 'Thêm mới nội dung chapter : Chương 283 : Tức giận đến dậm chân', '1.53.196.218');
INSERT INTO `history` VALUES (623, 'admin', 1590609728, 'Thêm mới nội dung chapter : Chương 284 : Vậy đừng ngủ', '1.53.196.218');
INSERT INTO `history` VALUES (624, 'admin', 1590611055, 'Thêm mới nội dung chapter : Chương 285 : Thật ngọt', '1.53.196.218');
INSERT INTO `history` VALUES (625, 'admin', 1590611167, 'Thêm mới nội dung chapter : Chương 286 : Ta rất nhớ ngươi', '1.53.196.218');
INSERT INTO `history` VALUES (626, 'admin', 1590611254, 'Thêm mới nội dung chapter : Chương 287 : Hút một ngụm tỷ tỷ', '1.53.196.218');
INSERT INTO `history` VALUES (627, 'admin', 1590611327, 'Thêm mới nội dung chapter : Chương 288 : Dấu vết', '1.53.196.218');
INSERT INTO `history` VALUES (628, 'admin', 1590611478, 'Đăng nhập hệ thống ', '1.53.196.218');
INSERT INTO `history` VALUES (629, 'admin', 1590612176, 'Thêm mới nội dung chapter : Chương 5 : Anh túc', '1.53.196.218');
INSERT INTO `history` VALUES (630, 'admin', 1590632882, 'Đăng nhập hệ thống ', '113.161.81.212');
INSERT INTO `history` VALUES (631, 'admin', 1590633082, 'Chỉnh sửa nội dung chapter : Chương 284 : Vậy đừng ngủ', '113.161.81.212');
INSERT INTO `history` VALUES (632, 'admin', 1590633291, 'Chỉnh sửa nội dung chapter : Chương 282 : Liều mạng', '14.248.204.71');
INSERT INTO `history` VALUES (633, 'admin', 1590633344, 'Chỉnh sửa nội dung chapter : Chương 281 : Kính bạo', '14.248.204.71');
INSERT INTO `history` VALUES (634, 'admin', 1590635578, 'Đăng nhập hệ thống ', '14.160.24.158');
INSERT INTO `history` VALUES (635, 'admin', 1590635640, 'Cập nhật nhanh chapter : ord-78-[{\"id\":\"8485\"}]', '14.160.24.158');
INSERT INTO `history` VALUES (636, 'admin', 1590638602, 'Thêm mới nội dung chapter : Chương 6 : Vé vào cửa', '171.231.118.40');
INSERT INTO `history` VALUES (637, 'admin', 1590638700, 'Thêm mới nội dung chapter : Chương 7 : Động tâm', '171.231.118.40');
INSERT INTO `history` VALUES (638, 'admin', 1590638915, 'Thêm mới nội dung chapter : Chương 8 : Ôm', '171.231.118.40');
INSERT INTO `history` VALUES (639, 'admin', 1590643405, 'Thêm mới nội dung chapter : Chương 3', '113.183.103.245');
INSERT INTO `history` VALUES (640, 'admin', 1590643507, 'Thêm mới nội dung chapter : Chương 4', '113.183.103.245');
INSERT INTO `history` VALUES (641, 'admin', 1590643596, 'Thêm mới nội dung chapter : Chương 5', '113.183.103.245');
INSERT INTO `history` VALUES (642, 'admin', 1590643881, 'Thêm mới nội dung chapter : Chương 6', '113.183.103.245');
INSERT INTO `history` VALUES (643, 'admin', 1590645588, 'Thêm mới nội dung chapter : Chương 6', '171.250.246.86');
INSERT INTO `history` VALUES (644, 'admin', 1590645697, 'Thêm mới nội dung chapter : Chương 7', '171.250.246.86');
INSERT INTO `history` VALUES (645, 'admin', 1590645786, 'Thêm mới nội dung chapter : Chương 8', '171.250.246.86');
INSERT INTO `history` VALUES (646, 'admin', 1590645885, 'Thêm mới nội dung chapter : Chương 9', '171.250.246.86');
INSERT INTO `history` VALUES (647, 'admin', 1590645982, 'Thêm mới nội dung chapter : Chương 10', '171.250.246.86');
INSERT INTO `history` VALUES (648, 'admin', 1590646578, 'Thêm mới nội dung chapter : Chương 17', '27.71.126.151');
INSERT INTO `history` VALUES (649, 'admin', 1590646828, 'Thêm mới nội dung chapter : Chương 18 (H)', '27.71.126.151');
INSERT INTO `history` VALUES (650, 'admin', 1590648340, 'Đăng nhập hệ thống ', '116.104.135.123');
INSERT INTO `history` VALUES (651, 'admin', 1590654817, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (652, 'admin', 1591174036, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (653, 'admin', 1591236264, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (654, 'admin', 1591258000, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (655, 'admin', 1591258350, 'Chỉnh sửa nội dung configs', '::1');
INSERT INTO `history` VALUES (656, 'admin', 1591259771, 'Chỉnh sửa nội dung configs', '::1');
INSERT INTO `history` VALUES (657, 'admin', 1591328242, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (658, 'admin', 1591544113, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (659, 'admin', 1591845092, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (660, 'admin', 1591864026, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (661, 'admin', 1591864028, 'Cập nhật nhanh chapter : is_delete-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (662, 'admin', 1591864031, 'Cập nhật nhanh chapter : is_delete-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (663, 'admin', 1591865929, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (664, 'admin', 1591866039, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (665, 'admin', 1591866555, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (666, 'admin', 1591866948, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (667, 'admin', 1591867494, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (668, 'admin', 1591867498, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (669, 'admin', 1591867818, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (670, 'admin', 1591867826, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (671, 'admin', 1591868317, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (672, 'admin', 1591868322, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (673, 'admin', 1591868694, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (674, 'admin', 1591868695, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (675, 'admin', 1591868785, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (676, 'admin', 1591868791, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (677, 'admin', 1591868840, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (678, 'admin', 1591868847, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (679, 'admin', 1591868851, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (680, 'admin', 1591868856, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (681, 'admin', 1592016338, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (682, 'admin', 1592016376, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (683, 'admin', 1592016538, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (684, 'admin', 1592016543, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (685, 'admin', 1592016874, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (686, 'admin', 1592016879, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (687, 'admin', 1592017250, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (688, 'admin', 1592017255, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (689, 'admin', 1592017260, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (690, 'admin', 1592017404, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (691, 'admin', 1592017405, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (692, 'admin', 1592017405, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (693, 'admin', 1592017478, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (694, 'admin', 1592017479, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (695, 'admin', 1592017665, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (696, 'admin', 1592017670, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (697, 'admin', 1592019504, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (698, 'admin', 1592019509, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (699, 'admin', 1592193296, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (700, 'admin', 1592193305, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (701, 'admin', 1592193333, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (702, 'admin', 1592193338, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (703, 'admin', 1592193349, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (704, 'admin', 1592193362, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (705, 'admin', 1592193372, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (706, 'admin', 1592193785, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (707, 'admin', 1592193851, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (708, 'admin', 1592193875, 'Cập nhật nhanh chapter : name-Chương 1 : Tôi đã yêu em như thế nào ?-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (709, 'admin', 1592193883, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (710, 'admin', 1592195135, 'Chỉnh sửa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (711, 'admin', 1592196889, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (712, 'admin', 1592196894, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (713, 'admin', 1592196911, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8643\"}]', '::1');
INSERT INTO `history` VALUES (714, 'admin', 1592197080, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8643\"}]', '::1');
INSERT INTO `history` VALUES (715, 'admin', 1592197132, 'Chỉnh sửa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (716, 'admin', 1592197158, 'Chỉnh sửa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (717, 'admin', 1592197207, 'Chỉnh sửa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (718, 'admin', 1592203101, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8643\"}]', '::1');
INSERT INTO `history` VALUES (719, 'admin', 1592203107, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8643\"}]', '::1');
INSERT INTO `history` VALUES (720, 'admin', 1592203487, 'Chỉnh sửa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (721, 'admin', 1592203784, 'Xóa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (722, 'admin', 1592203960, 'Xóa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (723, 'admin', 1592204326, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (724, 'admin', 1592204337, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8643\"}]', '::1');
INSERT INTO `history` VALUES (725, 'admin', 1592204350, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8643\"}]', '::1');
INSERT INTO `history` VALUES (726, 'admin', 1592204355, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"8643\"}]', '::1');
INSERT INTO `history` VALUES (727, 'admin', 1592204439, 'Chỉnh sửa nội dung configs', '::1');
INSERT INTO `history` VALUES (728, 'admin', 1592205063, 'Cập nhật nhanh level : name-Hiền tài-[{\"id\":\"7\"}]', '::1');
INSERT INTO `history` VALUES (729, 'admin', 1592205078, 'Cập nhật nhanh level : name--[{\"id\":\"7\"}]', '::1');
INSERT INTO `history` VALUES (730, 'admin', 1592205079, 'Xóa nội dung level', '::1');
INSERT INTO `history` VALUES (731, 'admin', 1592206621, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8644\"}]', '::1');
INSERT INTO `history` VALUES (732, 'admin', 1592206622, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8643\"}]', '::1');
INSERT INTO `history` VALUES (733, 'admin', 1592206623, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8642\"}]', '::1');
INSERT INTO `history` VALUES (734, 'admin', 1592206624, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8641\"}]', '::1');
INSERT INTO `history` VALUES (735, 'admin', 1592206625, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"8639\"}]', '::1');
INSERT INTO `history` VALUES (736, 'admin', 1592206651, 'Chỉnh sửa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (737, 'admin', 1592207216, 'Xóa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (738, 'admin', 1592207468, 'Xóa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (739, 'admin', 1592207519, 'Xóa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (740, 'admin', 1592207574, 'Xóa nội dung list_unlocks', '::1');
INSERT INTO `history` VALUES (741, 'admin', 1592211974, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (742, 'admin', 1592213680, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (743, 'admin', 1592213797, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (744, 'admin', 1592217379, 'Cập nhật nhanh chapter : act-0-[{\"id\":\"8640\"}]', '::1');
INSERT INTO `history` VALUES (745, 'admin', 1592217388, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"8640\"}]', '::1');
INSERT INTO `history` VALUES (746, 'admin', 1592362487, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"9040\"}]', '::1');
INSERT INTO `history` VALUES (747, 'admin', 1592362487, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"9039\"}]', '::1');
INSERT INTO `history` VALUES (748, 'admin', 1592362504, 'Cập nhật nhanh chapter : is_unlock-1-[{\"id\":\"9040\"}]', '::1');
INSERT INTO `history` VALUES (749, 'admin', 1592362508, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"9040\"}]', '::1');
INSERT INTO `history` VALUES (750, 'admin', 1592362762, 'Cập nhật nhanh pro : display-1-[{\"id\":\"194\"}]', '::1');
INSERT INTO `history` VALUES (751, 'admin', 1592362765, 'Cập nhật nhanh pro : display-1-[{\"id\":\"193\"}]', '::1');
INSERT INTO `history` VALUES (752, 'admin', 1592362766, 'Cập nhật nhanh pro : display-1-[{\"id\":\"192\"}]', '::1');
INSERT INTO `history` VALUES (753, 'admin', 1592362767, 'Cập nhật nhanh pro : display-1-[{\"id\":\"191\"}]', '::1');
INSERT INTO `history` VALUES (754, 'admin', 1592362768, 'Cập nhật nhanh pro : display-1-[{\"id\":\"189\"}]', '::1');
INSERT INTO `history` VALUES (755, 'admin', 1592362769, 'Cập nhật nhanh pro : display-1-[{\"id\":\"188\"}]', '::1');
INSERT INTO `history` VALUES (756, 'admin', 1592362771, 'Cập nhật nhanh pro : display-1-[{\"id\":\"190\"}]', '::1');
INSERT INTO `history` VALUES (757, 'admin', 1592362772, 'Cập nhật nhanh pro : display-1-[{\"id\":\"187\"}]', '::1');
INSERT INTO `history` VALUES (758, 'admin', 1592362773, 'Cập nhật nhanh pro : display-1-[{\"id\":\"186\"}]', '::1');
INSERT INTO `history` VALUES (759, 'admin', 1592362774, 'Cập nhật nhanh pro : display-1-[{\"id\":\"180\"}]', '::1');
INSERT INTO `history` VALUES (760, 'admin', 1592362802, 'Cập nhật nhanh pro : status-0-[{\"id\":\"194\"}]', '::1');
INSERT INTO `history` VALUES (761, 'admin', 1592362950, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"9038\"}]', '::1');
INSERT INTO `history` VALUES (762, 'admin', 1592363126, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (763, 'admin', 1592363149, 'Chỉnh sửa nội dung chapter :  Chương 1: Ly hôn', '::1');
INSERT INTO `history` VALUES (764, 'admin', 1592364399, 'Cập nhật nhanh pro : act-1-[{\"id\":\"196\"}]', '::1');
INSERT INTO `history` VALUES (765, 'admin', 1592364403, 'Cập nhật nhanh pro : act-1-[{\"id\":\"195\"}]', '::1');
INSERT INTO `history` VALUES (766, 'admin', 1592366218, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"9042\"}]', '::1');
INSERT INTO `history` VALUES (767, 'admin', 1592366263, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"9041\"}]', '::1');
INSERT INTO `history` VALUES (768, 'admin', 1592366509, 'Xóa nội dung chapter', '::1');
INSERT INTO `history` VALUES (769, 'admin', 1592366512, 'Xóa nội dung chapter', '::1');
INSERT INTO `history` VALUES (770, 'admin', 1592366517, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (771, 'admin', 1592366520, 'Xóa nội dung pro', '::1');
INSERT INTO `history` VALUES (772, 'admin', 1592549524, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (773, 'admin', 1592558633, 'Cập nhật nhanh chapter : point-55-[{\"id\":\"9043\"}]', '::1');
INSERT INTO `history` VALUES (774, 'admin', 1592558711, 'Cập nhật nhanh pro : slug-test-truyen-[{\"id\":\"198\"}]', '::1');
INSERT INTO `history` VALUES (775, 'admin', 1592594858, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (776, 'admin', 1592594880, 'Cập nhật nhanh chapter : act-1-[{\"id\":\"9043\"}]', '::1');
INSERT INTO `history` VALUES (777, 'admin', 1592594881, 'Cập nhật nhanh chapter : is_unlock-0-[{\"id\":\"9043\"}]', '::1');
INSERT INTO `history` VALUES (778, 'admin', 1592595943, 'Xóa nội dung pro_categories', '::1');
INSERT INTO `history` VALUES (779, 'admin', 1592736062, 'Đăng nhập hệ thống ', '::1');
INSERT INTO `history` VALUES (780, 'admin', 1592761412, 'Cập nhật nhanh chapter : point-0-[{\"id\":\"9043\"}]', '::1');
INSERT INTO `history` VALUES (781, 'admin', 1592762234, 'Cập nhật nhanh chapter : point-20-[{\"id\":\"9043\"}]', '::1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Tên',
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Link',
  `img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Icon menu',
  `parent` int(11) NULL DEFAULT NULL COMMENT 'Cha',
  `ord` int(11) NULL DEFAULT NULL COMMENT 'Sắp xếp',
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Title',
  `group_id` int(11) NULL DEFAULT NULL COMMENT 'Nhóm',
  `act` int(11) NOT NULL,
  `hot` tinyint(2) NULL DEFAULT NULL,
  `bacap` tinyint(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci COMMENT = 'Menu' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 'Trang Chủ', '', '', '', 0, 1, '', 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (5, 'Truyện Edit', '', NULL, '', 5, 0, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (7, 'Truyện mới cập nhật', '', NULL, '', 7, 3, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (8, 'Diễn Đàn', 'dien-dan', NULL, '', 0, 5, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (9, 'Danh Mục Truyện', '', NULL, '', 0, 2, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (10, 'Truyện Edit', 'truyenedit', NULL, '', 9, 0, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (11, 'Truyện QT', 'truyenqt', NULL, '', 9, 0, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (12, 'Truyện Sáng Tác', 'truyensang-tac', NULL, '', 9, 0, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (14, 'Thư Viện', 'thu-vien', NULL, '', 0, 0, NULL, 2, 0, NULL, NULL);
INSERT INTO `menu` VALUES (15, 'Bản Tin', '', NULL, '', 0, 0, NULL, 2, 1, NULL, NULL);
INSERT INTO `menu` VALUES (16, 'Thảo Luận', 'lien-he-voi-minh', NULL, '', 0, 0, NULL, 2, 1, NULL, NULL);
INSERT INTO `menu` VALUES (17, 'Về BHTT', 've-bhtt', NULL, '', 0, 0, NULL, 2, 1, NULL, NULL);
INSERT INTO `menu` VALUES (18, 'Quy Định Chung', 'quy-dinh-chung', NULL, '', 0, 0, NULL, 2, 1, NULL, NULL);
INSERT INTO `menu` VALUES (19, 'Truyện mới cập nhật', '', NULL, '', 19, 3, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (20, 'Truyện Mới Cập Nhật', 'truyen-moi-cap-nhat', NULL, '', 0, 3, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (23, 'Đoản Văn', 'doan-van', NULL, '', 9, 0, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (24, 'Thể Loại Truyện', 'load-cate', NULL, '', 0, 4, NULL, 1, 1, NULL, NULL);
INSERT INTO `menu` VALUES (25, 'NP', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (26, 'ABO', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (27, 'Cổ Đại', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (28, 'Hiện Đại', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (29, 'Trọng Sinh', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (30, 'Xuyên Nhanh', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (33, 'Sư Đồ', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (34, 'Thực Văn', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (35, 'Tiên Hiệp', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (36, 'Võng Du', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (37, 'Xuyên Không', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (38, 'Mạt Thế', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (39, 'Huyền Huyễn', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (40, 'Mỹ Thực', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (41, 'Đồng Nhân', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (42, 'Xuyên Thư', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (43, 'Hệ Thống', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (44, 'Điềm Văn', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (45, 'Trinh Thám', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (46, 'Giới Giải Trí', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (47, 'Cổ Xuyên Kim', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);
INSERT INTO `menu` VALUES (48, 'Linh Dị Thần Quái', '', NULL, '', 24, 0, NULL, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Tên bài viết',
  `short_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Mô tả ngắn',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Nội dung',
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Hình ảnh',
  `parent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Danh mục bài viết',
  `create_time` bigint(20) NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `act` tinyint(4) NULL DEFAULT NULL COMMENT 'Kích hoạt',
  `ord` int(11) NULL DEFAULT NULL COMMENT 'Sắp xếp',
  `publish_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Đăng bởi',
  `home` tinyint(4) NOT NULL,
  `update_time` bigint(20) NULL DEFAULT NULL COMMENT 'Ngày sửa',
  `banner` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Banner',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idx_act`(`act`) USING BTREE,
  INDEX `create_time`(`create_time`) USING BTREE,
  FULLTEXT INDEX `fulltext`(`name`, `short_content`, `content`),
  FULLTEXT INDEX `name`(`name`),
  FULLTEXT INDEX `short_content`(`short_content`)
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for news_categories
-- ----------------------------
DROP TABLE IF EXISTS `news_categories`;
CREATE TABLE `news_categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Tên',
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Hình ảnh',
  `short_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Mô tả ngắn',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Nội dung',
  `create_time` bigint(20) NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `ord` int(11) NULL DEFAULT NULL COMMENT 'Sắp xếp',
  `parent` int(11) NULL DEFAULT 0 COMMENT 'Danh mục cha',
  `act` tinyint(4) NOT NULL,
  `home` tinyint(1) NOT NULL,
  `update_time` bigint(20) NULL DEFAULT NULL COMMENT 'Ngày sửa',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Thời gian gửi',
  `info_customer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Thông tin khách hàng',
  `info_pro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Thông tin sản phẩm',
  `act` tinyint(4) NULL DEFAULT 0 COMMENT 'Trạng thái',
  `city` int(4) NULL DEFAULT NULL,
  `provide` int(4) NULL DEFAULT NULL,
  `pro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Pro',
  `viewed` tinyint(4) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pro
-- ----------------------------
DROP TABLE IF EXISTS `pro`;
CREATE TABLE `pro`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Tên',
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Hình ảnh',
  `short_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Mô tả ngắn',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Nội dung',
  `create_time` bigint(20) NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `ord` int(11) NULL DEFAULT NULL COMMENT 'Sắp xếp',
  `parent` int(11) NULL DEFAULT 0 COMMENT 'Danh mục cha',
  `act` tinyint(4) NOT NULL,
  `home` tinyint(1) NOT NULL,
  `update_time` bigint(20) NULL DEFAULT NULL COMMENT 'Ngày sửa',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pro_categories
-- ----------------------------
DROP TABLE IF EXISTS `pro_categories`;
CREATE TABLE `pro_categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Tên bài viết',
  `short_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Mô tả ngắn',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Nội dung',
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Hình ảnh',
  `parent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Danh mục bài viết',
  `create_time` bigint(20) NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `act` tinyint(4) NULL DEFAULT NULL COMMENT 'Kích hoạt',
  `ord` int(11) NULL DEFAULT NULL COMMENT 'Sắp xếp',
  `publish_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Đăng bởi',
  `home` tinyint(4) NOT NULL,
  `update_time` bigint(20) NULL DEFAULT NULL COMMENT 'Ngày sửa',
  `banner` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Banner',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idx_act`(`act`) USING BTREE,
  INDEX `create_time`(`create_time`) USING BTREE,
  FULLTEXT INDEX `fulltext`(`name`, `short_content`, `content`),
  FULLTEXT INDEX `name`(`name`),
  FULLTEXT INDEX `short_content`(`short_content`)
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for slide
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `create_time` bigint(20) NULL DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Title',
  `ord` int(11) NULL DEFAULT NULL,
  `act` tinyint(4) NOT NULL,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `update_time` bigint(20) NULL DEFAULT NULL COMMENT 'Ngày sửa',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'Nội dung(vi)',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of slide
-- ----------------------------
INSERT INTO `slide` VALUES (1, 'Slider 1', '{\"id\":\"19\",\"name\":\"h-slider.jpg\",\"title\":null,\"caption\":null,\"alt\":null,\"description\":null,\"create_time\":\"1569984460\",\"parent\":\"0\",\"is_file\":\"1\",\"path\":\"uploads/\",\"file_name\":\"h-slider.jpg\",\"extra\":\"{\\\"extension\\\":\\\"jpg\\\",\\\"size\\\":\\\"95.85 KB\\\",\\\"date\\\":1569984458,\\\"isfile\\\":1,\\\"dir\\\":\\\"uploads\\\\/\\\",\\\"path\\\":\\\"uploads\\\\/h-slider.jpg\\\",\\\"width\\\":990,\\\"height\\\":536,\\\"thumb\\\":\\\"uploads\\\\/thumbs\\\\/def\\\\/h-slider.jpg\\\"}\"}', 1569991433, NULL, 1, 1, '', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `act` int(11) NULL DEFAULT NULL,
  `create_time` bigint(20) NULL DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent` int(11) NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (4, 'admin', '$2a$08$Y30ndaUamGuj6GbPd0Ix4.riM.X4kWLuF8CtTMxd.vmg4gMmRTR7a', 1, 3600, '', 1, 'nguyenvanan9889@gmail.com');
INSERT INTO `user` VALUES (5, 'minhchau', '$2a$08$IfAbnUJe3Y/ArGeee4mYIuOPA7ANGbgRGZKKIh0Yr8PT6VnoZXHzC', 1, 1590381668, 'uploader', 6, 'chauminh8313@gmail.com');
INSERT INTO `user` VALUES (6, 'ziney7612', '$2a$08$mKS.IglJMMWmMRHYj9hyJOVKD6ZfgWSBV62ptVDDs9N3K4VWnNjUC', 1, 1591247968, 'Uploader', 6, 'ziney7612@gmail.com');

-- ----------------------------
-- Table structure for visit_online
-- ----------------------------
DROP TABLE IF EXISTS `visit_online`;
CREATE TABLE `visit_online`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `create_time` bigint(20) NULL DEFAULT NULL,
  `url` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Triggers structure for table configs
-- ----------------------------
DROP TRIGGER IF EXISTS `tr_config_update`;
delimiter ;;
CREATE TRIGGER `tr_config_update` AFTER UPDATE ON `configs` FOR EACH ROW BEGIN
	
	declare idd int;
	declare nname varchar(255);
	set nname = OLD.keyword;
	set idd = NEW.act;
	
	

	IF ((idd = 0 or idd = null) and (nname ='CMS_HEADER' or nname ='CMS_FOOTER' or nname ='LOGO' or nname ='FACE' or nname ='FAVICON'or nname ='FBSHARE')) THEN
		SIGNAL SQLSTATE '45000' SET message_text = 'You can not update to 0 on this row, this row is require for Tech 5s CMS!';
	END IF;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table configs
-- ----------------------------
DROP TRIGGER IF EXISTS `tr_config_de`;
delimiter ;;
CREATE TRIGGER `tr_config_de` AFTER DELETE ON `configs` FOR EACH ROW BEGIN
	declare idd int;
	declare nname varchar(255);
	set nname = OLD.keyword;
	set idd = OLD.is_delete;
	

	IF (idd is null or idd = 0 or nname ='CMS_HEADER' or nname ='CMS_FOOTER' or nname ='LOGO' or nname ='FACE' or nname ='FAVICON'or nname ='FBSHARE') THEN
		SIGNAL SQLSTATE '45000' SET message_text = 'You can not remove this row, this row is require for Tech 5s CMS!';
	END IF;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
