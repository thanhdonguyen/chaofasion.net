-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 02:20 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaofashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE `cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(6, 'Đầm', 'da-m', 1, 0, '11', '1', NULL, NULL),
(7, 'Áo', 'a-o', 1, 0, '1', '1', NULL, NULL),
(8, 'Quần', 'qua-n', 1, 0, '1', '1', NULL, NULL),
(9, 'Áo Thun', 'a-o-thun', 1, 7, '1', '1', NULL, NULL),
(10, 'Áo Sơ Mi', 'a-o-so-mi', 1, 7, '1', '1', NULL, NULL),
(11, 'Túi Xách', 'tu-i-xa-ch', 1, 0, '1', '1', NULL, NULL),
(12, 'Áo Kiểu', 'a-o-kie-u', 1, 7, '1', '1', NULL, NULL),
(13, 'Áo Khoác', 'a-o-khoa-c', 1, 0, '1', '1', NULL, NULL),
(14, 'Đầm Suông', 'da-m-suong', 1, 6, '1', '1', NULL, NULL),
(15, 'Đầm Ôm', 'da-m-om', 1, 6, '1', '1', NULL, NULL),
(16, 'Đầm Maxi', 'da-m-maxi', 1, 6, '1', '1', NULL, NULL),
(17, 'Jean Dài', 'jean-da-i', 1, 8, '1', '1', NULL, NULL),
(18, 'Tregging kaki thun', 'tregging-kaki-thun', 1, 8, '1', '1', NULL, NULL),
(19, 'legging', 'legging', 1, 8, '1', '1', NULL, NULL),
(20, 'Túi Cối', 'tu-i-co-i', 1, 11, '1', '1', NULL, NULL),
(21, ' Túi Đi Tiệc', 'tu-i-di-tie-c', 1, 11, '1', '', NULL, NULL),
(22, 'Áo Da', 'a-o-da', 1, 13, '1', '1', NULL, NULL),
(23, 'Áo Khoác Kiểu', 'a-o-khoa-c-kie-u', 1, 13, '1', '1', NULL, NULL),
(24, 'Mắt Kính', 'ma-t-ki-nh', 1, 0, '1', '1', NULL, NULL),
(25, 'New', 'new', 1, 24, '1', '1', NULL, NULL),
(26, 'Chân Váy', 'chan-va-y', 1, 0, '1', '1', NULL, NULL),
(27, 'CV Jean', 'cv-jean', 1, 26, '1', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE `check_out` (
  `id` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2017_05_05_105501_create_cates_table', 1),
(16, '2017_05_05_111336_create_products_table', 1),
(17, '2017_05_05_113123_create_product_images_table', 1),
(21, '2017_06_13_141552_CreateDatHangTable', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(15, 'Áo sát nách nơ ', 'ao-sa-t-na-ch-no', 190000, 'áo sát nách cổ cột nơ trước or sau tùy ý', 'Trắng', '1500474970_djlj_19990342_255601491607092_7841653485687088567_n.jpg', 'A01', 'kate nhập có co giãn nhẹ', 2, 12, '2017-07-19 08:17:03', '2017-08-12 09:17:13'),
(18, 'Đầm băng cuốn hoa nổi', 'dam-bang-cuon-hoa-noi', 350000, 'Đầm băng cuốn trễ vai phối chân váy lưới đính hoa nổi\r\nCo giãn\r\nSố đo\r\nDài:84 cm\r\nNgang ngực:86 cm\r\nEo:64 cm ', 'Xanh đen', '1500474933_6eOS_1498631133.jpg', 'CHAO-D01X', 'Thun, lưới', 2, 15, '2017-07-19 08:56:16', '2017-08-12 09:39:13'),
(19, 'Đầm kate pha đuôi cá', 'dam-kate-pha-duoi-ca-', 220000, 'Đầm kate sát nách thêu hoa  bên vai pha đuôi cá\r\nSố đo\r\nDài:90 cm\r\nNgang ngực:88 cm ', 'Xanh', '1500474921_zvDC_1497085010.jpg', 'DS01', 'Chất liệu\r\nKate nhập', 2, 14, '2017-07-19 09:00:50', '2017-08-12 09:38:54'),
(24, 'Quần jean cạp cao 2 túi', 'qua-n-jean-ca-p-cao-2-tu-i', 250000, 'Hàng dư xịn. Chất liệu denim cực kì mềm mịn, mặc siêu êm, co giãn tốt, sờ vào rất đã tay. Form lưng cao che bụng cực tốt, kiểu dáng skinny ôm chân cực tôn dáng.', 'Xanh đen,đen,xám ', '1502541143_NmLU_20638929_367772880305731_3625975556730657251_n.jpg', 'Jean01', 'Jean xuất chuẩn xịn', 2, 17, '2017-08-12 10:28:11', '2017-08-12 12:32:23'),
(23, 'Áo Khoác Da Nhập', 'a-o-khoa-c-da-nha-p', 380000, 'Áo khoác da phối dây kéo khoá pha túi nắp cài dây belt\r\nDài:48 cm\r\nNgang ngực:86 cm', 'Đen,Vàng,Xanh,Đỏ Đô', '1r66_20768183_266247503875824_7405610360537921184_n.jpg', 'AKD01', 'Da Nhập', 2, 22, '2017-08-12 09:22:00', '2017-08-12 09:37:33'),
(16, 'Maxi trễ vai gân thun bèo ngực', 'maxi-tre-vai-gan-thun-beo-nguc', 240000, 'Co giãn\r\nSố đo\r\nDài:120 cm\r\nNgang ngực:86 cm co giãn tới 120 cm\r\nEo:86 cm\r\nHàng nhập loại 1', 'đen,nâu', '1500475014_LnNO_20106326_255665298267378_5371447012302061810_n.jpg', 'CHAO-MTV01', 'Thun gân', 2, 16, '2017-07-19 08:37:48', '2017-08-12 09:39:32'),
(25, 'Jean Mango lai xước', 'jean-mango-lai-xuo-c', 250000, '✳️HÀNG VỀ MÀU #ĐẬM \r\n✔️Mango xước lai tua chất jeans ôm dày dặn co giãn tốt ,form ôm tôn dáng ', 'Màu đậm như hình', 'KSJW_20638589_265966223903952_8259956265534320343_n.jpg', 'Jean02', 'chất jeans ôm dày dặn', 2, 17, '2017-08-12 10:38:24', '2017-08-12 10:38:24'),
(26, 'jean Topshop 9 tất lai xéo', 'jean-topshop-9-ta-t-lai-xe-o', 250000, 'Topshop lai tua xéo , chất jeans dày dặn mềm mại, co giãn cực kì tốt , form ôm tôn dáng , đặc biệc phần ống lạ lạ đang là hotttrend đó nha', 'Xanh nhạt.Xanh đậm như hình', '1502541066_Qg7u_20621139_424296534632016_4032673281458217416_n.jpg', 'Jean03', 'chất jeans dày dặn mềm mại, co giãn cực kì tốt', 2, 17, '2017-08-12 10:47:44', '2017-08-12 12:31:06'),
(22, 'Túi cối đi biển', 'tu-i-co-i-di-bie-n', 250000, 'Túi cối kèm thắt nơ,bên trong có dây rút tiện lợi,vừa cầm tay,vừa đeo được', '2 màu như hình.Nâu pha đen và Nâu', '1502541173_Ks2R_20727911_267365430430698_8799151556151391396_n.jpg', 'TC01', 'Cối Nhập Quảng Châu', 2, 20, '2017-08-12 09:09:11', '2017-08-12 12:32:53'),
(27, 'Chân Váy Jean xuất xịn', 'chan-va-y-jean-xua-t-xi-n', 230000, 'Chân váy jeans #Vintage ,chất jeans dày dặn co giãn ít , nhìn cực chất luôn các nàng , mixx pull + sneaker nữa là best \r\nSize S M L ', 'Xanh nhạt', '1502541054_VlG2_20707995_267036477130260_1453249853055128870_n.jpg', 'CVJ01', 'chất jeans dày dặn co giãn ít', 2, 27, '2017-08-12 11:09:22', '2017-08-12 12:30:54'),
(28, 'Mắt kính New', 'ma-t-ki-nh-new', 80000, 'Mắt Kính Gọng Trắng cực cá tính\r\nPhù hợp với mọi gương mặt\r\n', 'Trắng', '1502541029_9znX_20729655_266991377134770_6695244283981600009_n.jpg', 'MK01', 'Kính gọng nhựa', 2, 24, '2017-08-12 11:13:51', '2017-08-12 12:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '1497450017_dam-cong-so-kk66-26-1.jpg', 1, NULL, NULL),
(2, '1497450017_dam-cong-so-kk66-26-2.jpg', 1, NULL, NULL),
(3, '1497450181_dam-cong-so-kk66-25_1.jpg', 2, NULL, NULL),
(4, '1497450181_dam-cong-so-kk66-25_2.jpg', 2, NULL, NULL),
(5, '1497450268_dam-cong-so-kk66-21_1.jpg', 3, NULL, NULL),
(6, '1497450268_dam-cong-so-kk66-21_2.jpg', 3, NULL, NULL),
(7, '1497450339_dam-cong-so-kk66-23_1.jpg', 4, NULL, NULL),
(8, '1497450339_dam-cong-so-kk66-23_2.jpg', 4, NULL, NULL),
(9, '1497450411_dam-cong-so-kk66-22_1.jpg', 5, NULL, NULL),
(10, '1497450411_dam-cong-so-kk66-22_2.jpg', 5, NULL, NULL),
(11, '1497450588_dam-cong-so-kk66-20_2.jpg', 8, NULL, NULL),
(12, '1497450588_dam-cong-so-kk66-20_1.jpg', 8, NULL, NULL),
(14, '1498313251_19399237_242871336213441_2053832075049247878_n.jpg', 11, NULL, NULL),
(16, '1498313251_19399915_242871346213440_1810612642127820527_n.jpg', 11, NULL, NULL),
(17, '1498313252_19437563_242871386213436_4584130675922761830_n.jpg', 11, NULL, NULL),
(18, '1498573358_19510351_245144555986119_8278916294078378866_n.jpg', 12, NULL, NULL),
(19, '1498573358_19424404_245144742652767_2876516076394723237_n.jpg', 12, NULL, NULL),
(20, '1498573358_19511067_245144739319434_4093351322224608594_n.jpg', 12, NULL, NULL),
(21, '1498573358_19554738_245142892652952_8402500028808186912_n.jpg', 12, NULL, NULL),
(22, '1498574708_19399574_243497202817521_2027521505288176699_n.jpg', 13, NULL, NULL),
(23, '1498574708_19400167_243497146150860_8583813279367336545_n.jpg', 13, NULL, NULL),
(24, '1498574708_19399112_243497102817531_6510995323011479311_n.jpg', 13, NULL, NULL),
(25, '1500455506_18891578_231968070637101_8022910824324950324_o.jpg', 1, NULL, NULL),
(26, '1500455576_19366472_255601518273756_6775604169037197162_n.jpg', 1, NULL, NULL),
(27, '1500455970_18891578_231968070637101_8022910824324950324_o.jpg', 15, NULL, NULL),
(28, '1500455970_18839332_231968067303768_4611445373607964996_n.jpg', 15, NULL, NULL),
(29, '1500455970_20108406_255601501607091_3717322859588160647_n.jpg', 15, NULL, NULL),
(30, '1500455970_19366472_255601518273756_6775604169037197162_n.jpg', 15, NULL, NULL),
(31, '1500457330_19989455_255665294934045_8443660817308697454_n.jpg', 16, NULL, NULL),
(32, '1500457794_1496201633.jpg', 17, NULL, NULL),
(33, '1500457794_1496201636.jpg', 17, NULL, NULL),
(34, '1500457794_1496201640.jpg', 17, NULL, NULL),
(35, '1500458217_1498631189.jpg', 18, NULL, NULL),
(36, '1500458217_1498631190.jpg', 18, NULL, NULL),
(37, '1500458217_1498631190_1.jpg', 18, NULL, NULL),
(38, '1500458217_1498631191.jpg', 18, NULL, NULL),
(47, '1502529997_20664662_267356383764936_8624205405854063980_n.jpg', 23, NULL, NULL),
(40, '1500459583_1499954529.jpg', 20, NULL, NULL),
(41, '1500459583_1499954532_1.jpg', 20, NULL, NULL),
(46, '1500459870_19990040_255520681615173_5599756368184348701_n.jpg', 21, NULL, NULL),
(48, '1502529997_20729620_267356340431607_6948623483974393760_n.jpg', 23, NULL, NULL),
(49, '1502529997_1502422516.jpg', 23, NULL, NULL),
(50, '1502529997_1502422522.jpg', 23, NULL, NULL),
(51, '1502529997_1502371777.jpg', 23, NULL, NULL),
(52, '1502529997_1502371775.jpg', 23, NULL, NULL),
(53, '1502529997_20728116_267356427098265_1501396325091116946_n.jpg', 23, NULL, NULL),
(54, '1502529997_20729620_267356340431607_6948623483974393760_n.jpg', 23, NULL, NULL),
(55, '1502529997_20800021_267356370431604_4047855394973245960_n.jpg', 23, NULL, NULL),
(56, '1502530708_20708225_267364210430820_8570291399071515422_n.jpg', 22, NULL, NULL),
(57, '1502530708_20708379_267364250430816_1715824559781043442_n.jpg', 22, NULL, NULL),
(58, '1502530708_20664633_267364207097487_6742223853970078046_n.jpg', 22, NULL, NULL),
(59, '1502530708_20729740_267364283764146_6612173191448245554_n.jpg', 22, NULL, NULL),
(60, '1502530708_20770307_267036470463594_6279733938926762612_n.jpg', 22, NULL, NULL),
(61, '1502530708_20799223_267364290430812_406080044864779890_n.jpg', 22, NULL, NULL),
(68, '1502534105_20663677_265976477236260_4259007165645831673_n.jpg', 24, NULL, NULL),
(63, '1502533806_20663629_367772893639063_5361973782740938805_n.jpg', 24, NULL, NULL),
(64, '1502533806_20663660_367772890305730_2824925418621560398_n.jpg', 24, NULL, NULL),
(65, '1502533806_20663962_367772873639065_6533810482033380227_n.jpg', 24, NULL, NULL),
(69, '1502534105_20663837_265976420569599_8685575295580639009_n.jpg', 24, NULL, NULL),
(70, '1502534105_20663827_265976363902938_9110856416993891764_n.jpg', 24, NULL, NULL),
(71, '1502534105_20663784_265976450569596_7148170519155782509_n.jpg', 24, NULL, NULL),
(72, '1502534105_20664451_265976400569601_3828944995819019900_n.jpg', 24, NULL, NULL),
(73, '1502534105_20708219_265976463902928_5565231055478775371_n.jpg', 24, NULL, NULL),
(74, '1502534402_20727861_265966217237286_2229532149844971367_n.jpg', 25, NULL, NULL),
(75, '1502534467_20799986_428519790876357_7874221727905890804_n.jpg', 24, NULL, NULL),
(76, '1502534467_20638536_427829434278726_4743730889408824275_n.jpg', 24, NULL, NULL),
(77, '1502534467_20664539_427829457612057_7163984813887658052_n.jpg', 24, NULL, NULL),
(78, '1502534562_20620845_425806277814375_6747573953966495155_n.jpg', 25, NULL, NULL),
(79, '1502534562_20604206_425806287814374_3811704259827860872_n.jpg', 25, NULL, NULL),
(80, '1502534976_20621290_425588124502857_5850746751634878785_n.jpg', 26, NULL, NULL),
(81, '1502534976_20476183_424296554632014_3990248474082825478_n.jpg', 26, NULL, NULL),
(82, '1502534976_20526043_424296557965347_8876243383079525345_n.jpg', 26, NULL, NULL),
(83, '1502534976_20708438_427394977655505_5977109794772207728_n.jpg', 26, NULL, NULL),
(84, '1502536208_20431608_423925991335737_8372898204815005212_n.jpg', 27, NULL, NULL),
(85, '1502536208_20431431_423926014669068_7261148951310118400_n.jpg', 27, NULL, NULL),
(86, '1502536208_20429985_423926001335736_5999678514968688056_n.jpg', 27, NULL, NULL),
(87, '1502536208_20770307_267036470463594_6279733938926762612_n.jpg', 27, NULL, NULL),
(88, '1502536208_20664082_267036587130249_4884195697590129760_n (1).jpg', 27, NULL, NULL),
(89, '1502536208_20707995_267036477130260_1453249853055128870_n (1).jpg', 27, NULL, NULL),
(90, '1502536492_20767888_266991340468107_9203014524802039724_n.jpg', 28, NULL, NULL),
(91, '1502536492_20664701_266991383801436_370799392902290988_n.jpg', 28, NULL, NULL),
(92, '1502536492_20708240_266991303801444_8904966500773585904_n.jpg', 28, NULL, NULL),
(93, '1502536492_20664942_266991307134777_1002330406614766399_n.jpg', 28, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `hinh`, `url`, `created_at`, `updated_at`) VALUES
(6, 'RRFb_slider-2.png', '#', NULL, NULL),
(8, 'JUxE_slide-33.png', '#', NULL, NULL),
(9, 'srNX_slide-11.png', '#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', '$2y$10$nXtLrn25PUne5MqwIgc9JeSKhhF/AfCT2sr5MAdA.HcnhyecTMhcq', 'thanhdo200@gmail.com', 1, 'sPYYoRwwq6AFPCRWhjKDKGshK7IoylzRZrCp1C4KVGdYkfg0DuMvwvhBSyhc', NULL, '2017-06-14 07:12:35'),
(3, 'thanhdo', '$2y$10$CIsRBxHjzWe.GNyssnK6b.8lXbW.0.rbyZQ/xxs/PjHjTDQDZKxve', 'thanhdo181@gmail.com', 1, 'UowFxdb9L9HEUTnPdEJCzEsniACsw7QMcD6Pb2B0', '2017-06-14 07:12:18', '2017-06-14 07:12:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `check_out`
--
ALTER TABLE `check_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slider_hinh_unique` (`hinh`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `check_out`
--
ALTER TABLE `check_out`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
