-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 04:47 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sachtruyen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

CREATE TABLE `chapter` (
  `id` int(10) UNSIGNED NOT NULL,
  `truyen_id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `tomtat` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `kichhoat` int(11) NOT NULL,
  `slug_chapter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chapter`
--

INSERT INTO `chapter` (`id`, `truyen_id`, `tieude`, `tomtat`, `noidung`, `kichhoat`, `slug_chapter`) VALUES
(1, 11, 'Chapter 1: Conan bị biến dạng thành trẻ em', 'Cuộc phiêu lưu của Nobita và những người bạn trẻ khi biến dạng thành trẻ em', '<p>Mở đầu c&acirc;u truyện, cậu học sinh trung học 16 tuổi Shinichi Kudo bị biến th&agrave;nh cậu b&eacute; Conan Edogawa. Shinichi trong phần đầu của Th&aacute;m tử lừng danh Conan được mi&ecirc;u tả l&agrave; một th&aacute;m tử học đường. Trong một lần đi chơi c&ocirc;ng vi&ecirc;n &quot;Miền Nhiệt đới&quot; với c&ocirc; bạn từ thuở nhỏ (cũng l&agrave; bạn g&aacute;i) Ran Mori , cậu bị d&iacute;nh v&agrave;o vụ &aacute;n một h&agrave;nh kh&aacute;ch tr&ecirc;n Chuyến t&agrave;u tốc h&agrave;nh trong c&ocirc;ng vi&ecirc;n, Kishida , bị giết trong một vụ &aacute;n cắt đầu r&ugrave;ng rợn. Cậu đ&atilde; l&agrave;m s&aacute;ng tỏ vụ &aacute;n v&agrave; tr&ecirc;n đường về nh&agrave;, chứng kiến một vụ l&agrave;m ăn mờ &aacute;m của những người đ&agrave;n &ocirc;ng mặc to&agrave;n đồ đen. Kudo bị ph&aacute;t hiện, bị đ&aacute;nh ngất sau đ&oacute; những người đ&agrave;n &ocirc;ng &aacute;o đen đ&atilde; cho cậu uống một thứ thuốc độc chưa qua thử nghiệm l&agrave; Apotoxin-4869 (APTX4869) với mục đ&iacute;ch thủ ti&ecirc;u cậu. Tuy nhi&ecirc;n chất độc đ&atilde; kh&ocirc;ng giết chết Kudo. Khi tỉnh lại, cậu b&agrave;ng ho&agrave;ng nhận thấy th&acirc;n thể m&igrave;nh đ&atilde; bị teo nhỏ trong h&igrave;nh dạng của một cậu học sinh tiểu học....</p>', 1, 'chapter-1-conan-bi-bien-dang-thanh-tre-em'),
(4, 11, 'Chapter 2: Gia đình thám tử Kogoro gặp Conan', 'Cuộc gặp gỡ định mênh của gia đình Ran đã cứu giúp dc Conan', 'Thám tử của Trường trung học Kudo Shinichi. Shinichi được mọi người biết đến là một người hiện đại được ví như  Sherlock Holmes.Đã có sự thay dooirdr lớn trong cuộc đời của ông khi ông bị đánh thuốc mê và trở thành một đứa trẻ. Bây giờ che giấu tên thật của mình, Shinichi sống với người yêu thời thơ ấu của ông Ran Mori dưới tên của Conan Edogawa, và hy vọng sẽ tìm thấy một số manh mối về những người đàn ông trong màu đen thông qua các khách hàng và các trường hợp cha.Cha của Ran một thấm tử hạng hai đã nhanh chóng trở nên nổi tiếng với sự giúp sức của Conan.Ông đã lien tục phá được những vụ án ly kì khiến danh tiếng của ông ngày một cao', 1, 'chapter-2-gia-dinh-tham-tu-kogoro-gap-conan'),
(5, 11, 'Chapter 3: Buổi học của Conan', 'Conan chỉ có một khoá học buổi sáng. Nếu như cậu không phải học sinh tiểu học, hôm nay cậu đã cúp luôn cho rồi.', '<p>Conan nghe như vậy tự nhi&ecirc;n c&oacute; cảm gi&aacute;c mất m&aacute;c, chắc bởi v&igrave; sau n&agrave;y nếu kh&ocirc;ng gặp lại hắn nữa, cậu sẽ mất đi một kỳ ph&ugrave;ng địch thủ.<br />\r\n<br />\r\n&quot;Giờ c&ograve;n muốn chạy sao?&quot;<br />\r\n<br />\r\n&quot;Kh&ocirc;ng phải, nhưng m&agrave; con n&iacute;t cũng cần c&oacute; ng&agrave;y lớn l&ecirc;n m&agrave;.&quot; (&yacute; n&oacute;i anh cũng cần phải chạy về chuẩn bị cho phi vụ ^_^)<br />\r\n<br />\r\n&quot;Th&igrave; cũng như nhau th&ocirc;i.&quot;<br />\r\n<br />\r\nBất luận Kaitou Kid n&oacute;i thế n&agrave;o, Conan cũng kh&ocirc;ng nuốt nổi c&aacute;i giọng điệu biện hộ cho những lần thất tung đột ngột của hắn.<br />\r\n<br />\r\n&quot;Lần n&agrave;y chỉ c&oacute; hai người ch&uacute;ng ta, ta sẽ kh&ocirc;ng quanh co nữa, đ&ecirc;m mai ta sẽ trộm đi ch&iacute;nh sự tự t&ocirc;n của ngươi.&quot;<br />\r\n<br />\r\nConan đang muốn chạy tới hỏi ra lẽ th&igrave; một l&aacute; hồng t&acirc;m Q ph&oacute;ng tới cắm ngay trước b&agrave;n ch&acirc;n l&agrave;m cậu dừng bước, Kaitou KID như thường lệ thừa cơ biến mất.<br />\r\n<br />\r\n&quot;...Vậy m&agrave; n&oacute;i kh&ocirc;ng quanh co...Đến thời điểm cũng kh&ocirc;ng c&oacute; b&aacute;o trước...&quot;<br />\r\n<br />\r\nNgửa đầu nh&igrave;n trời một l&aacute;t, trời đ&ecirc;m s&aacute;ng tối lập lo&agrave; v&ocirc; định, chỉ c&oacute; vầng trăng v&agrave;nh vạnh của đ&ecirc;m rằm l&agrave; s&aacute;ng r&otilde; nhất.. Bỗng nhi&ecirc;n một trận gi&oacute; lạnh thổi tới, nhắc Conan đ&atilde; đến l&uacute;c phải quay về.<br />\r\n<br />\r\nH&ocirc;m nay l&agrave; thứ bảy cuối tuần, Conan chỉ c&oacute; một kho&aacute; học buổi s&aacute;ng. Nếu như cậu kh&ocirc;ng phải học sinh tiểu học, h&ocirc;m nay cậu đ&atilde; c&uacute;p lu&ocirc;n cho rồi.</p>', 1, 'chapter-3-buoi-hoc-cua-conan'),
(6, 13, 'Chapter 1: Tán em Y Vy Trang nha', 'Cuộc phiêu lưu của Nobita và những người bạn', '<p>Oh yeah oh yeah</p>', 1, 'chapter-1-tan-em-y-vy-trang-nha'),
(7, 6, 'Chapter 1: Test hệ thống lỗi chapter', 'Lam sao de tan dc em Y vy Trang', '<p>chao cac ban nha</p>', 1, 'chapter-1-tan-em-y-vy-trang-nha'),
(8, 12, 'Chapter 1: Đến xứ sở mặt trời', 'Cua gái nha', '<p>abc</p>', 1, 'chapter-1-den-xu-so-mat-troi'),
(10, 23, 'Truyện cổ tích: Cô bé quàng khăn đỏ', 'Cua gái nha', '<h1>C&ocirc; b&eacute; qu&agrave;ng khăn đỏ</h1>\r\n\r\n<p><img alt=\"truyện cổ tích\" src=\"https://truyencotich.vn/wp-content/uploads/2012/10/1b5-660x440.jpg\" /></p>\r\n\r\n<p>Ng&agrave;y xửa, ng&agrave;y xưa, c&oacute; một c&ocirc; b&eacute; thường hay qu&agrave;ng chiếc khăn m&agrave;u đỏ, v&igrave; vậy, mọi người gọi c&ocirc; l&agrave; c&ocirc; b&eacute; qu&agrave;ng khăn đỏ. Một h&ocirc;m, mẹ c&ocirc; bảo c&ocirc; mang b&aacute;nh sang biếu b&agrave; ngoại. Trước khi đi, mẹ c&ocirc; dặn:</p>\r\n\r\n<p>&ndash; Con đi th&igrave; đi đường thẳng, đừng đi đường v&ograve;ng qua rừng m&agrave; ch&oacute; s&oacute;i ăn thịt con đấy. Tr&ecirc;n đường đi, c&ocirc; thấy đường v&ograve;ng qua rừng c&oacute; nhiều hoa, nhiều bướm, kh&ocirc;ng nghe lời mẹ dặn, c&ocirc; tung tăng đi theo đường đ&oacute;. Đi được một qu&atilde;ng th&igrave; gặp S&oacute;c, S&oacute;c nhắc:</p>\r\n\r\n<p><ins><ins><ins><iframe frameborder=\"0\" height=\"0\" id=\"aswift_7\" name=\"aswift_7\" scrolling=\"no\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-8704329899201751&amp;output=html&amp;h=90&amp;adk=790155796&amp;adf=446936388&amp;pi=t.aa~a.3751700487~i.15~rp.4&amp;w=1070&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1634144767&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2891035567&amp;psa=1&amp;ad_type=text_image&amp;format=1070x90&amp;url=https%3A%2F%2Fsachtruyen247.com%2Fxem-chapter%2Ftong-hop-truyen-co-tich-viet-nam%2Fco-be-quang-khan-do&amp;flash=0&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=1070&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8IeaiwYQtqK4qf6Y6YmZARI9ACzbtrBcsxr5SvNrU39lRCtHX61zeYbXqeKjdY8FgAF8Zv-YoxkD_zkHsfFqh7D61gj75nL7-yNUGsts7Q&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiOTQuMC40NjA2LjgxIixbXSxudWxsLG51bGwsIjY0Il0.&amp;tt_state=W3siaXNzdWVyT3JpZ2luIjoiaHR0cHM6Ly9hdHRlc3RhdGlvbi5hbmRyb2lkLmNvbSIsInN0YXRlIjo3fV0.&amp;dt=1634144767759&amp;bpp=3&amp;bdt=956&amp;idt=3&amp;shv=r20211011&amp;mjsv=m202110050101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Df10024b2065cec67-221fbdd554c900de%3AT%3D1623319043%3ART%3D1623319043%3AS%3DALNI_MYXUvSAt8boTHLUDHP_SNCxI7TbhA&amp;prev_fmts=433x280%2C0x0%2C1070x280&amp;nras=2&amp;correlator=5340510213710&amp;frm=20&amp;pv=1&amp;ga_vid=1578645618.1623319048&amp;ga_sid=1634144767&amp;ga_hid=1190411842&amp;ga_fc=0&amp;u_tz=420&amp;u_his=5&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;adx=140&amp;ady=2119&amp;biw=1349&amp;bih=625&amp;scr_x=0&amp;scr_y=0&amp;eid=44750886%2C31062423%2C31061828%2C21067496&amp;oid=2&amp;pvsid=3295724571102962&amp;pem=6&amp;ref=https%3A%2F%2Fsachtruyen247.com%2Fxem-truyen%2Ftong-hop-truyen-co-tich-viet-nam&amp;eae=0&amp;fc=384&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C625&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2021-10-13-14&amp;ifi=8&amp;uci=a!8&amp;btvi=2&amp;fsb=1&amp;xpc=GQtXISicPD&amp;p=https%3A//sachtruyen247.com&amp;dtd=48\" width=\"1070\"></iframe></ins></ins></ins></p>\r\n\r\n<p>&ndash; C&ocirc; b&eacute; qu&agrave;ng khăn đỏ ơi, l&uacute;c n&atilde;y t&ocirc;i nghe mẹ c&ocirc; dặn đi đường thẳng, đừng đi đường v&ograve;ng cơ m&agrave;. Sao c&ocirc; lại đi đường n&agrave;y?</p>\r\n\r\n<p>C&ocirc; b&eacute; kh&ocirc;ng trả lời S&oacute;c. C&ocirc; cứ đi theo đường v&ograve;ng qua rừng. Vừa đi, c&ocirc; vừa h&aacute;i hoa, bắt bướm. V&agrave;o đến cửa rừng th&igrave; c&ocirc; gặp ch&oacute; s&oacute;i. Con ch&oacute; s&oacute;i rất to đến trước mặt c&ocirc;. N&oacute; cất giọng ồm ồm hỏi:</p>\r\n\r\n<p>&ndash; N&agrave;y, c&ocirc; b&eacute; đi đ&acirc;u thế?</p>\r\n\r\n<p>Nghe ch&oacute; s&oacute;i hỏi, c&ocirc; b&eacute; qu&agrave;ng khăn đỏ sợ lắm, nhưng cũng đ&agrave;nh bạo dạn trả lời:</p>\r\n\r\n<p>&ndash; T&ocirc;i đi sang nh&agrave; b&agrave; ngoại t&ocirc;i.</p>\r\n\r\n<p>Nghe c&ocirc; b&eacute; n&oacute;i đi sang b&agrave; ngoại, ch&oacute; s&oacute;i nghĩ bụng: &Agrave;, th&igrave; ra n&oacute; lại c&ograve;n c&oacute; b&agrave; ngoại nữa, thế th&igrave; m&igrave;nh phải ăn thịt cả hai b&agrave; ch&aacute;u. Nghĩ vậy n&ecirc;n ch&oacute; s&oacute;i lại hỏi:</p>\r\n\r\n<p>&ndash; Nh&agrave; b&agrave; ngoại c&ocirc; ở đ&acirc;u?</p>\r\n\r\n<p>&ndash; Ở b&ecirc;n kia khu rừng. C&aacute;i nh&agrave; c&oacute; ống kh&oacute;i đấy, cứ đẩy cửa l&agrave; v&agrave;o được ngay.</p>\r\n\r\n<p>Nghe xong, ch&oacute; s&oacute;i bỏ c&ocirc; b&eacute; qu&agrave;ng khăn đỏ ở đấy rồi chạy một mạch đến nh&agrave; b&agrave; ngoại c&ocirc; b&eacute;. N&oacute; đẩy cửa v&agrave;o vồ lấy b&agrave; cụ rồi nuốt chửng ngay v&agrave;o bụng. Xong xu&ocirc;i, n&oacute; l&ecirc;n giường nằm đắp chăn giả l&agrave; b&agrave; ngoại ốm.</p>\r\n\r\n<p>L&uacute;c c&ocirc; b&eacute; qu&agrave;ng khăn đỏ đến, c&ocirc; thấy ch&oacute; s&oacute;i đắp chăn nằm tr&ecirc;n giường, c&ocirc; tưởng &ldquo;b&agrave; ngoại&rdquo; bị ốm thật, c&ocirc; hỏi:</p>\r\n\r\n<p>&ndash; B&agrave; ơi! B&agrave; ốm đ&atilde; l&acirc;u chưa?</p>\r\n\r\n<p>S&oacute;i kh&ocirc;ng đ&aacute;p giả vờ r&ecirc;n hừ&hellip; hừ&hellip;</p>\r\n\r\n<p>&ndash; B&agrave; ơi, mẹ ch&aacute;u bảo mang b&aacute;nh sang biếu b&agrave;.</p>\r\n\r\n<p>&ndash; Thế &agrave;, thế th&igrave; b&agrave; c&aacute;m ơn ch&aacute;u v&agrave; mẹ ch&aacute;u. Ch&aacute;u ngoan qu&aacute;. Ch&aacute;u lại đ&acirc;y với b&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&ocirc; b&eacute; qu&agrave;ng khăn đỏ chạy ngay đến cạnh giường, nhưng c&ocirc; ngạc nhi&ecirc;n l&ugrave;i lại hỏi;</p>\r\n\r\n<p>&ndash; B&agrave; ơi! Sao h&ocirc;m nay tai b&agrave; d&agrave;i thế?</p>\r\n\r\n<p>&ndash; Tai b&agrave; d&agrave;i để b&agrave; nghe ch&aacute;u n&oacute;i được r&otilde; hơn. Ch&oacute; s&oacute;i đ&aacute;p</p>\r\n\r\n<p>&ndash; Thế c&ograve;n mắt b&agrave;, sao h&ocirc;m nay mắt b&agrave; to thế?</p>\r\n\r\n<p>&ndash; Mắt b&agrave; to để b&agrave; nh&igrave;n ch&aacute;u được r&otilde; hơn.</p>\r\n\r\n<p>Chưa tin, c&ocirc; b&eacute; qu&agrave;ng khăn đỏ lại hỏi:</p>\r\n\r\n<p>&ndash; Thế c&ograve;n mồm b&agrave;, sao h&ocirc;m nay mồm b&agrave; to thế?</p>\r\n\r\n<p>&ndash; Mồm b&agrave; to để b&agrave; ăn thịt ch&aacute;u đấy.</p>\r\n\r\n<p>S&oacute;i n&oacute;i xong liền nhảy ra khỏi giường, nuốt chửng em b&eacute; Khăn Đỏ đ&aacute;ng thương.</p>\r\n\r\n<p>S&oacute;i đ&atilde; no n&ecirc; lại nằm xuống giường ngủ ng&aacute;y o o. May sao, l&uacute;c đ&oacute; b&aacute;c thợ săn đi ngang thấy thế. B&aacute;c giơ s&uacute;ng l&ecirc;n định bắn. Nhưng b&aacute;c chợt nghĩ ra l&agrave; chắc s&oacute;i đ&atilde; ăn thịt b&agrave; l&atilde;o, v&agrave; tuy vậy vẫn c&ograve;n c&oacute; cơ cứu b&agrave;. B&aacute;c nghĩ kh&ocirc;ng n&ecirc;n bắn m&agrave; n&ecirc;n lấy k&eacute;o rạch bụng con s&oacute;i đang ngủ ra. Vừa rạch được v&agrave;i mũi th&igrave; thấy chiếc khăn qu&agrave;ng đỏ ch&oacute;e, rạch được v&agrave;i mũi nữa th&igrave; c&ocirc; b&eacute; nhảy ra k&ecirc;u:</p>\r\n\r\n<p>&ndash; Trời ơi! Ch&aacute;u sợ qu&aacute;! Trong bụng s&oacute;i, tối đen như mực. B&agrave; l&atilde;o cũng c&ograve;n sống chui ra, thở hổn hển. Khăn đỏ vội đi nhặt đ&aacute; to nh&eacute;t đầy bụng s&oacute;i. S&oacute;i tỉnh giấc muốn nhảy l&ecirc;n, nhưng đ&aacute; nặng qu&aacute;, n&oacute; ng&atilde; khuỵu xuống, lăn ra chết.</p>\r\n\r\n<p>Từ dạo ấy, c&ocirc; b&eacute; qu&agrave;ng khăn đỏ kh&ocirc;ng bao giờ d&aacute;m l&agrave;m sai lời mẹ dặn.</p>', 1, 'truyen-co-tich-co-be-quang-khăn-do'),
(11, 24, 'Chương 1: Cám dỗ', 'Cua gái nha', 'Dục vọng trút xuống như nước lũ, một khi phá vỡ miệng cống càng không thể vãn hồi. Ở tuổi dậy thì, Tần Tình biết mình khác các bạn nữ đồng trang lứa, nữ sinh bị nam sinh chạm một cái đều mặt đỏ tim đập mà cô thì ngược lại, cô muốn làm tình, cái ý nghĩ đó đã ở trong đầu nhiều năm. Khi cơ thể bắt dầu phát triển, hai vú của Tần Tình trướng lên to hơn người khác. Thời điểm mọi người còn là trái xanh thì cô đã là quả ngọt, chỉ cần nhẹ nhàng cắn cũng có thể nếm được vị ngon ngọt. \"Tình Tình, buổi tối có muốn tới quán bar thả lỏng chút không?\" Lâm Tây Tây một bên trả lời Wechat một bên hỏi Tần Tình Hai mươi tuổi Tần Tình ngày càng xinh đẹp hơn, mái tóc ngắn vừa với làn da trắng nõn đến độ có thể véo ra nước, xinh đẹp đến động lòng người. Đôi mắt hai mí to tròn càng khiến người ta yêu thương. Cô thờ ơ trả lời: \"Quán bar có gì tốt mà đến, tớ vẫn muốn ở nhà xem AV hơn\" Cô không uống rượu đến quán bar làm gì, nhàm chán còn không bằng ở nhà xem AV mới tìm, nghe nói bộ này dương vật của nam chính vô cùng to hahaha, nghĩ đến đây cô đã âm thầm liếm môi. \"Ơ kìa, đi với tớ đi mà, nhiều người như vậy nhưng chỉ có tớ là con gái nên xấu hổ lắm.\" Lâm Tây Tây lắc lắc cánh tay cô nói thêm: \"Không phải cậu mới vừa chia tay học trưởng sao, cũng nên tìm mục tiêu mới đi?\" Nghe nhắc đến bạn trai cũ, Tần Tình lập tức buồn bực, cô đã chịu vất vả từ cao trung lên đại học để có thể tự do yêu đương, tận hưởng khoái cảm. Bạn trai của cô nhìn thì cao to nhưng chưa đi vào đã bắn, thật là chọc tức cô, còn không bằng bản thân mình tự làm. \"Thôi được rồi, tớ đi với cậu, vừa hay nhìn xem có mục tiêu mới nào hay không, hì hì.\" Tần Tình cười một cái \"Ok, đã hẹn xong, tối nay 7 giờ tớ hẹn bọn họ ở dưới lầu đợi chúng ta.\" Lâm Tây Tây vừa trả lời Wechat nói. \"Đã biết, tớ phải về tắm một cái đã.\" Tần Tình mang balo ra khỏi phòng học, kinh nguyệt vừa đi vài ngày tham muốn sắc dục càng mãnh liệt, vốn tưởng có bạn trai thì sẽ không cần tự mình giải quyết, ai ngờ vẫn tự lực cánh sinh. Có nên lên mạng mua Sextoy không nhỉ? Tần Tình vừa đi vừa nghĩ \"Á!\" Cô không chú ý va vào ai đó, người bị va vào không sao, ngược lại cái mông cô đang ngồi trên đất. \"Đi không nhìn đường, cô không sao chứ?\" Cô ngồi trên mặt đất nhìn người đàn ông trước mặt và dò xuống đôi chân dài của anh ta. Thấy anh đưa tay ra muốn giúp đỡ. \"Được rồi, không có việc gì!\" Cô vẫy tay từ chối, tự mình đứng dậy, phủi bụi dính dưới mông và bàn tay. Hôm nay cô mặc váy cổ chữ V khoét sâu, từ góc độ của anh có thể thấy được rõ ràng bầu ngực đang được ôm trọn trong chiếc áo lót màu hồng, theo động tác của cô mà nảy lên, Từ Khải Sinh nhíu mày: \"Bạn học, lần sau đi đường nhớ cẩn thận một chút.\" Tần Tình lại bị chỗ phồng lên ngay đũng quần của anh hấp dẫn. Từ khi bắt đầu thủ dâm, cô có thói quen nhìn vào đũng quần của các anh chàng đẹp trai trước. Ngay cả Lâm Tây Tây cũng nói móc cô \"nhìn chòng chọc háng mèo\". Nhưng mà người đàn ông trước mặt thật đẹp trai nha, mũi cao thẳng, ngón tay giữa cũng rất dài. Nghe nói loại đàn ông này ở trên giường có thể làm cho phụ nữ sung sướng đến chết. Tiểu huyệt co rút một cái, cô cảm thấy quần lót hơi ướt. Người đàn ông nhìn cô một cách thú vị \"Bạn học, bạn có biết nhìn chằm chằm vào đũng quần của người khác là rất không lễ phép không?\" Cuối cùng Tần Tình cũng ý thức lại, khuôn mặt có chút xấu hổ. Cô cúi đầu định chạy đi nhưng bị anh kéo lại, móc ra một cây viết, viết lên tay cô một dãy số, \"Số điện thoại của tôi.\"', 1, 'chương-1-cam-do'),
(12, 25, 'Chapter 1: Bạch Lộ Phi', 'không có', 'Hoa Hy Minh + Jean\r\n\r\nDược vương cốc nằm tại biên cảnh Ly quốc xa xôi, đây quả thật là một chốn bồng lai thanh tịnh cách biệt với nhân thế, mười dặm rừng trúc dập dờn sóng biếc, suối nước róc rách, gió cốc vi vu, sậy non trắng xóa. Phàm là người sống nơi thế ngoại tiên cảnh bậc này, đều là những nhân vật tuấn dật xuất trần tựa trích tiên, và vị trích tiên xứng đôi cùng Dược vương cốc này được gọi là Chu Tam Công.\r\n\r\nChu Tam Công rất trích tiên, tiên ở chỗ ai cũng không nói rõ được ông đã sống lâu bao tuổi. Ba năm trước đây lúc ta đến Dược vương cốc, ông vuốt chòm râu dài nhìn ta hiền từ, dáng dấp của ông trông chẳng khác nào thổ địa công công trong lòng ta, khiến ta không khỏi kinh hãi vì ngỡ là gặp thiên nhân. Chu Tam Công khi đó, râu tóc bạc trắng, mày mi cũng trắng, trắng triệt để hoàn toàn hệt như vật đổi sao dời. Ta đã từng vạch tới vạch lui trên đầu Chu Tam Công để cố tìm cho ra một cọng tóc đen. Kết quả là, ta vô cùng lo lắng rồi bản thân cũng một đầu bạc trắng thế, cũng không tìm được một sợi đen như Tam Công. Chỉ có thể cảm khái thời gian rất dễ dàng bỏ rơi con người, thời gian trôi qua làm chín hồng quả anh đào, cũng làm bạc trắng Tam Công.\r\n\r\n \r\n\r\n\r\nBạc trắng hết cả thế có hai chỗ tốt. Thứ nhất, Tam Công bây giờ và Tam Công của ba năm trước đây giống nhau như đúc, tóc bạc chẳng nhiều thêm nửa sợi, đây cũng là căn nguyên tạo nên truyền thuyết trích tiên Tam Công, dung nhan của ông mãi mãi không thay đổi. Thứ hai, trong ngày tuyết rơi, Tam Công trong bộ áo quần trắng toát thường bị ta coi như một người tuyết, thỉnh thoảng vòng qua vẹo lại mà có ngứa tay thì bẻ ngay một cành cây cắm lên đầu ông.\r\n\r\nNhiều người nói rằng ngọn ngành thần thoại của Dược vương cốc bắt nguồn từ sư phụ ta, nhưng ta không cho là đúng. Tam Công là minh chứng cho thế nhân thấy rằng trong Dược vương cốc có thể sống lâu trăm tuổi, lập địa thành yêu.\r\n\r\nTam Công trong lòng ta chính là một trích tiên như tuyết, mi tóc như tuyết, áo trắng hơn tuyết, tịch mịch như tuyết, độc lập với đời. Vì để ông không cảm thấy cô đơn, thời gian sư phụ chế thuốc, Mạnh Thường Quân ta đây sẽ tìm một cái ghế dài ngồi bên cạnh Tam Công. Những lúc ấy, ông sẽ ôn tồn điềm đạm cùng ta quay ngược dòng thời gian tìm về những câu chuyện xưa thật là xưa.\r\n\r\n \r\n\r\n\r\nTam Công nói: Rất lâu trước đây, Dược vương cốc là một vùng sông nước hữu tình, cầu nhỏ vắt ngang, chim bay trên trời, gió chiều vi vu, các cô nương giặt áo tẩy cát, ngân nga hát khẽ.\r\n\r\nTa hỏi Tam Công: Vì sao bây giờ thiên sơn (ngọn núi lớn dài ngàn dặm) không thấy bóng chim bay, vạn kính (con đường vạn dặm) không thấy dấu chân người?\r\n\r\nTam Công đáp: Vật đổi sao dời haizzz vật đổi sao dời.\r\nTam Công còn nói: Khi đó có một tiểu nương tử vấn một chiếc khăn trùm đầu hoa xanh ngày ngày đi ngang qua trước cửa sổ phòng ta.\r\n\r\nTa hỏi Tam Công: Sau đó tiểu nương tử ấy làm vợ người khác?\r\n\r\nTam Công đáp: Vật đổi sao dời haizzz vật đổi sao dời.\r\n\r\nTừ đó về sau mỗi khi Tam Công kể chuyện xưa, phần lớn thời gian ta đều nhắm mắt ngủ.\r\n\r\n \r\n\r\n\r\nGiữa ba năm mở mắt nhắm mắt, từ trong vật đổi sao dời của Tam Công ta đã lần mò ra được ngọn nguồn của Dược vương cốc. Trước đây Dược vương cốc là một thôn trang nhỏ yên bình mộc mạc, trời xanh mây trắng, cỏ tươi mơn mởn, hương thơm ngạt ngào, khói bếp lượn lờ. Thiếu nữ trai tráng trong thôn nam cày cấy nữ dệt đan, buộc tóc kẻ mi. Thế nhưng vật đổi sao dời haizzz vật đổi sao dời, người trong thôn dần đều bạc đầu. Ngay cả tiểu nương tử vấn khăn trùm hoa xanh đi ngang trước cửa sổ phòng Tam Công, khóe mắt cũng đã in dấu nếp nhăn nhỏ. Người dần thưa thớt, thôn trang suy tàn, chỉ còn Tam Công vẫn ở lại trong một gian trạch viện tịch mịch như tuyết bên cạnh rừng trúc, sống trong cảnh một ngày mà tựa một năm.\r\n\r\nSau đó thật lâu, có một vị công tử đến đây. Vị công tử này trồng đủ loại hoa cỏ bên cạnh trạch viện, mỗi ngày hái cúc dưới giậu đông, thư thới ngắm núi nam. Trong một đêm, nghìn vạn gốc lê nở hoa. Không ít người mộ danh mà đến, ban đầu chỉ là những cô nương thiếu nữ, Chu Tam Công lại được thấy rất nhiều tiểu nương tử vấn khăn trùm hoa xanh, còn có khăn hoa hồng, khăn hoa cúc và cả không vấn khăn. Không như ngày xưa tiểu cô nương “Đi ngang trước cửa sổ”, lần này là “Si ngốc chờ trước cửa sổ, si ngốc chờ haizzz, chờ đến khi hoa nở hoa tàn lại hóa thành vũng xuân.” Sau đó dần dần đến thêm nhiều người đủ các hình dạng màu sắc. Người đến người đi, cứ thế rất nhiều người đến đến đi đi, không ngờ, đã đạp lõm cả thôn trang. Cứ thế cái chốn bồng lai này thành hình.\r\n\r\n \r\n\r\n\r\nĐạp đạp, càng ngày càng lõm, cuối cùng tạo thành cốc.\r\n\r\nVị công tử khiến núi sông biến đổi, thế sự xoay vần, tại hạ bất tài, chính là sư phụ của ta.\r\n\r\nSư phụ của ta, Hạ Cảnh Nam, cốc chủ Dược vương cốc, là một cao nhân. So với Hoa Đà còn hơn Hoa Đà, so với Quan Thế Âm còn hơn Bồ Tát, là thần y danh chấn một phương trên giang hồ. Thường ngày lúc ta trò chuyện với Tam Công, nấu rượu kể về những nhân vật phong lưu, chỗ nào không hiểu sẽ thỉnh giáo ông, bởi vì ông sống lâu hơn ta rất nhiều, hiểu biết vượt qua thiên thu vạn đại.\r\n\r\nTa hỏi Tam Công: Gia Cát Khổng Minh là một bậc kỳ nhân, thế nhưng vợ ông ta dung mạo có mị hoặc giang sơn không?\r\n\r\n*Ai đọc sách sử sẽ biết dung mạo Hoàng Nguyệt Anh vợ Gia Cát Lượng xấu xí hơn người. Tìm hiểu thêm Ở ĐÂY.\r\n\r\nTam Công đáp: Thế sự vô thường haizzz thế sự vô thường.\r\n\r\nTa lại hỏi Tam Công: Hoàng thái tử Lý Thừa Kiền của Lý Thế Dân có con trai, nhưng ta nghe nói y yêu thích Long Dương (đàn ông con trai), chẳng lẽ là người đoạn tụ (đồng tính luyến ái) cũng có thể lấy vợ sinh con như thường ư?\r\n\r\nTam Công đáp: Thế sự vô thường haizzz thế sự vô thường.\r\n\r\nTa hỏi Tam Công: “Tam Công, ông có biết sư phụ có người trong lòng hay không?”\r\n\r\nTam Công ngẩng đầu nhìn ta, thở dài một hơi, nói, “Ta không biết.”\r\n\r\nCho nên ta mới nói sư phụ là cao nhân, từ phản ứng của Tam Công thì biết, bất kỳ nhân vật phong lưu nào ông ta đều nói “Thế sự vô thường haizzz thế sự vô thường”, chỉ duy chuyện của sư phụ ta, Tam Công mới chịu nói thật.\r\n\r\nDược vương cốc rất lớn, trước khi Lâu Tây Nguyệt nhập cốc, ta là nữ nhân duy nhất; sau khi hắn nhập cốc, điều này cũng không thay đổi. Nhưng từ khi hắn nhập cốc đã giúp cả người và danh tiếng của Dược vương cốc tăng lên rất nhiều.\r\n\r\nTa rất hứng thú với Lâu Tây Nguyệt, trong những nhân vật phong lưu tại Ly quốc thì Lâu gia ở Giang Nam chiếm ba vị. Môn chủ Lâu Ngọc Phong của Ngọc La Môn, nổi danh giang hồ nhờ Lâu gia kiếm, mười mấy năm trước rửa tay chậu vàng gác kiếm, rời khỏi phân tranh giang hồ, tập trung vào việc làm ăn của Lâu gia, bây giờ đã trở thành một thương nhân hạng nhất hạng nhì ở Giang Nam.\r\n\r\nThanh hoa nương tử, phu nhân của Lâu Ngọc Phong, một thân áo xanh mông lung như ánh trăng, một cây sáo ngọc âm hay tuyệt diệu, bao nhiêu hiệp khách giang hồ kẻ trước người sau quỳ dưới váy nàng. Một đôi Kim Đồng Ngọc Nữ, tình ý triền miên, sinh hạ một… hai… ba bốn năm sáu bảy cậu con trai nối dòng.\r\n\r\nTrong đó Thất công tử là xinh đẹp nhất, hấp thu linh khí của trời đất, kết tụ tinh hoa của nhật nguyệt; theo như đồn đãi hắn thừa hưởng nét phong lưu phóng khoáng từ cha, vẻ đẹp mỹ miều động lòng người, tư duy sắc bén thấu triệt từ mẹ. Sở trường của Thất công tử là dùng chiếc quạt hoa đào đánh vào tâm hồn thiếu nữ thế gian, đương khi nàng kia tâm thần nhộn nhạo, hắn đã ‘Phất tay áo cưỡi mây bay’ mất, thật là am tường đạo lý như gần như xa, nửa che nửa đậy.\r\n\r\nĐương nhiên, dù sao đồn đãi cũng chỉ là đồn đãi. Khi gặp Lâu Tây Nguyệt, ta nghĩ hắn tiêu sái đúng là có tiêu sái, song vẫn thua người nào đó.\r\n\r\nTa dẫn Lâu Tây Nguyệt dạo bộ trong cốc, “Tây Nguyệt, đây là vườn hoa thảo của Dược vương cốc. Trong này phần lớn trồng những loại dược liệu thông thường, sau này dần dần ta sẽ nói cho cậu biết dược tính của từng loại một.”\r\n\r\nLâu Tây Nguyệt nhìn qua một lượt, chỉ vào một gốc tử hành thảo (cọng cỏ thân màu tím), “Gân lá của cỏ này có màu đỏ máu, mới nhìn qua thật giống kinh mạch con người.”\r\n\r\n“Đây là tử hành thảo, có thể giải trừ hàn độc. Sau khi dùng nó, trong thời gian ngắn ý chí hỗn loạn, dễ dàng chìm vào giấc mộng, mà cảnh trong mộng lại đẹp vô cùng, đó chính là mong muốn ước nguyện chôn sâu trong lòng người. Cho nên nói, cỏ này vừa là độc dược vừa là giải dược, nếu cứ mãi chìm trong mộng không chịu tỉnh lại, vậy tính mạng cũng chẳng còn.” Màn trời hơi âm u, xa xa cỏ lau dập dìu như biển mây, ta tựa hồ nghe được lòng của mình, giật mình, lẩm bẩm, “Tử hành thảo còn được gọi là Yên hoa túy.” (cơn say đẹp tựa hoa trôi, khói mây, mộng ảo)\r\n\r\nLâu Tây Nguyệt lơ đãng nói, “Yên hoa túy ư, tên rất hay. Đãn nguyện tạm thành nhân khiển quyển, bất phương thường nhâm nguyệt mông lông*.”\r\n\r\n*Tạm dịch: Chỉ nguyện cùng người lưu luyến thoáng qua, chẳng ngại ánh trăng mộng ảo thường ngày – 但愿暂成人缱绻, 不妨常任月朦胧. Câu thơ trích từ một trong ba bài thơ <<Nguyên tiêu>> của Chu Thục Chân – một tài nữ nổi tiếng thời Bắc Tống. Ý rằng đôi tình nhân chỉ nguyện gặp gỡ lưu luyến nhau trong một phút chốc đêm hội tết nguyên tiêu, không ngại vẻ đẹp trăng sáng mông lung mộng ảo của tình yêu. Bởi vì họ không biết sau này có còn cơ duyên gặp lại hay không. Đêm tết Nguyên Tiêu cũng giống như là hội đêm thất tịch, ngày gặp gỡ tìm duyên của các cặp trai gái tuổi mới lớn, dịp này là cơ hội họ gặp gỡ và yêu nhau. Đại khái bài thơ nói về tâm lý phức tạp của những đôi tình nhân yêu nhau.\r\n\r\nMột câu thơ này của Lâu Tây Nguyệt khiến ta mơ hồ, tất cả tình cảm thiếu nữ ôm ấp canh cánh trong lòng đều theo một câu này mà tuôn trào, ta không khỏi lên tiếng tán thưởng, “Chậc chậc, Tây Nguyệt, quả không hỗ là một tay phong nguyệt lão làng, văn thơ đối ngẫu hạ bút thành văn.”\r\n\r\nLâu Tây Nguyệt, “…”\r\n\r\nMột lát sau, hắn mới khiêm tốn đáp, “Sư phụ quá khen rồi.”\r\n\r\nDạo một vòng mà đã gần đến hoàng hôn. Ta đói bụng, bèn nói với Lâu Tây Nguyệt, “Cơm tối hôm nay, vi sư muốn ăn gà rừng hầm nấm.”\r\n\r\nLâu Tây Nguyệt ngẩng đầu nhìn ta, hơi do dự, “Sư phụ, trong Dược vương cốc vẫn chưa có gà.”\r\n\r\nTa ngạc nhiên, “Nhưng hôm cậu nhập cốc, rõ ràng ta đã ăn củ từ hầm canh gà mà.”\r\n\r\nLâu Tây Nguyệt cúi đầu nói, “Cái đấy là đệ tử sai Nam Nhạn xuất cốc mua về.”\r\n\r\nNam Nhạn là gã hầu của Lâu Tây Nguyệt, Lâu Tây Nguyệt chính là đại biểu điển hình của công tử phú gia đương thời. Cuộc sống trải qua mỗi ngày chỉ cần duỗi tay thay áo, há miệng ăn cơm. Khi Lâu Tây Nguyệt đến Dược vương cốc bái sư, Nam Nhạn tay trái cắp một bao cẩm y hoa phục của Lâu Tây Nguyệt, vai phải đeo một hộp gấm bên trong đựng ngọc Tứ phương tường và vàng bạc châu báu, trước ngực treo một cây sáo noãn ngọc Hoài An cùng một cây mộc cầm, khiến ta không thể không hoàn toàn tán thưởng, bóp cổ tay cảm khái: Lâu Tây Nguyệt, đánh đổ một thời đại rồi*.\r\n\r\n*Ý tán thưởng cách sống cực phẩm đánh đổ cả 1 đời của Lâu Tây Nguyệt. Cả 1 thời đại không một ai cực phẩm như vậy, hạ gục họ. Ở đây vừa có ý trào phúng vừa có ý khen chê, khó nói rõ phải xem biểu hiện của nhân vật, tác giả chỉ đang diễn tả trạng thái của họ.\r\n\r\nTuy trong Dược vương cốc có rất nhiều kỳ hoa dị thảo, nhưng quái lạ là côn trùng cá cảnh chim muông rất khó sinh trưởng ở đây. Hồi ta mới đến Dược vương cốc thì không hay biết điều này. Lúc xuất cốc đi chợ sẽ thường mang về một ít vịt con gà con chim con mèo con để nuôi, nhưng chưa được mấy ngày, những con vật này hoặc miệng sùi bọt mép, hoặc toàn thân co quắp, hoặc ủ rũ chán chường mà chết. Sau khi độc hại rất nhiều sinh linh, ta vô cùng đau đớn, ta trách trời thương dân, ta cảm thấy lạnh lẽo như tuyết, ta rưng rưng nhìn sư phụ. Sư phụ quay người vào nhà, bảy ngày sau, ta phát hiện trong cái hồ trong sơn cốc xuất hiện một chú cá nhỏ sinh long hoạt hổ.\r\n\r\nSư phụ viết cho ta một phương thuốc, “Tiểu Hương, con trộn những loại dược thảo này vào thức ăn của cá, nó sẽ không chết.”\r\n\r\nTa biết, sư phụ của ta, là vạn năng.\r\n\r\nTrước khi Lâu Tây Nguyệt nhập cốc, đã hai mươi ba ngày tròn ta chưa biết vị thịt. Ngày đầu tiên hắn nhập cốc, ta biết ngay những ngày tháng tươi đẹp như cửu hạn phùng cam lộ* đã đến, đồng thời trong lòng lại một lần nữa vô cùng khẳng định việc thu nhận đệ tử này của mình.\r\n\r\n*Cửu hạn phùng cam lộ: nắng hạn lâu ngày gặp sương ngọt; cam lộ: sương ngọt (ví điềm lành).\r\n\r\nTa nhíu mi tâm, đứng trước gió than thở: “Tây Nguyệt à, gần đây vi sư đang suy nghĩ làm thế nào để luyện khởi tử hoàn hồn đan, cho nên có chút lao tâm lao lực quá độ. Vì vậy muốn uống canh gà để bồi bổ một chút.”\r\n\r\nLâu Tây Nguyệt khổ sở nói, “Sư phụ, xuất cốc phải mất rất nhiều thời gian, huống chi bây giờ trời đã tối. Nếu Nam Nhạn có đi ngay, chỉ sợ cũng phải ngày mai mới về được.”\r\n\r\nTa chống má nói rù rì, “Trước đây ta có nghe qua câu này ‘Lâu Thất Phiến, phất tay áo cưỡi mây bay’. Tây Nguyệt, khinh công của cậu rất tốt đúng không?”\r\n\r\n“Cạch—” Cây quạt trong tay Lâu Tây Nguyệt rơi xuống đất.\r\n\r\nNói đến, kể từ ngày đầu tiên nhập cốc, Lâu Tây Nguyệt phong tình vạn chủng mở ra chiếc quạt hoa đào, thì sau đó ta không còn may mắn được thưởng thức đóa hoa đào nở rực rỡ đó nữa. Mấy ngày liên tiếp, Lâu Tây Nguyệt cũng không ‘Phe phẩy quạt cười như hoa đào’, nhưng chiếc quạt hoa đào này, đã mấy lần rơi xuống đất. Ta rất lo lắng: Dù cây quạt này có cứng cáp thế nào, nhưng nhất thiết chớ để rớt nữa không thì sẽ gãy mất thôi.\r\n\r\n“Sư phụ, vậy Tây Nguyệt sẽ xuất cốc mua ít gà vịt, xin người đợi chút.”\r\n\r\nTa hài lòng, “Ừ, đi nhanh về nhanh.” Khi nhìn bóng lưng Lâu Tây Nguyệt, ta còn thêm vào một câu cuối cùng, “Tây Nguyệt, thức ăn hôm qua hơi nhạt. Hôm nay cậu nhớ thêm nhiều muối hơn.”\r\n\r\nLúc ta xoay người, hình như lại nghe thấy tiếng cây quạt rơi xuống đất.\r\n\r\nTrở lại trong phòng, ta tính toán, lần xuất cốc này sư phụ đã đi bảy bảy bốn mươi chín ngày, là lần lâu nhất từ trước tới nay. Bình thường đều là người khác đăng môn bái phỏng, cho dù có đi ra ngoài, thì qua mấy ngày cũng sẽ có chim bay về đưa tin. Thế nhưng lần này, người đã đi nhiều ngày như vậy, mà vẫn bặt vô âm tín. Ta không khỏi có phần lo lắng, bèn đặt bút viết một phong thư rất dài, đại ý là:\r\n\r\nThời gian sư phụ không có ở đây, mỗi ngày con đều treo đèn quá đêm, đầu huyền lương, thùy trứ cổ*, nghiêm túc sao chép sách thuốc, đồng thời nhổ sạch cỏ dại trong cốc không còn một ngọn; lại bởi giải được một chứng bệnh nan y mà danh tiếng của Dược vương cốc càng tăng lên, con sẽ không ngừng cố gắng phát dương quang đại Dược vương cốc; đến ngày sư phụ quay về cốc, nhất định sẽ nhìn thấy một Dược vương cốc ngay ngắn trật tự, một Dược vương cốc phát triển không ngừng; trước đây sư phụ giao cho con nhiệm vụ quét dọn dược trì, khi đó con nói mình làm không được, nhưng bây giờ con cảm thấy ‘Trên đời không có việc gì khó, chỉ sợ người có tâm**’, kính xin sư phụ yên tâm, con nhất định sẽ dọn dẹp sạch sẽ dược trì; Tam Công rất khỏe, con cũng rất khỏe, không biết ngày nào sư phụ mới quay về?\r\n\r\n*Đầu huyền lương, thùy trứ cổ (cột tóc vào dây buộc lên xà nhà, dùng dùi đục đâm vào đùi): trong câu thành ngữ ‘Huyền lương trứ cổ’ – ý chỉ ‘Học hành chăm chỉ và làm việc không mệt mỏi.’\r\n\r\n**Trên đời không có việc gì khó, chỉ sợ người có tâm: người có tâm ở đây là người đặt tâm tư vào làm việc, khi đó dù sự việc khó khăn cỡ nào cũng sẽ sợ hãi họ có tâm mà làm thành.\r\n\r\nNgoại trừ một câu cuối cùng, những điều khác đều là công việc của Lâu Tây Nguyệt.\r\n\r\nNhưng điều ta thật sự muốn viết, chỉ có một câu sau cùng này.\r\n\r\nViết xong thư này, ta gấp lại. Trong lòng kích động, suy nghĩ một chút, liền kẹp thêm một lá trúc vào. Ta ra khỏi phòng đặt thư vào miệng Đại Phong, Đại Phong là một con bạch kiên hoa điêu (đại bàng đầu nâu) sư phụ nuôi. Trước nay ta không xem Đại Phong giống như những con vật nuôi khác trong cốc, bởi vì Đại Phong rất thông minh, mỗi một ánh mắt, mỗi một động tác nó đều có thể hiểu được. Ta cũng không cho rằng đại phong là người, có lẽ nó là nhân thú, dù thế nào thì trong lòng ta, nó và ta là đồng loại.\r\n\r\nDược vương cốc chúng ta xưa nay hào khí ngất trời, người khác dùng bồ câu để truyền tin, chúng ta dùng Đại Phong kích thước lớn gấp trăm lần đưa thư.\r\n\r\nNghĩ đến điều này, ta vô cùng tự hào vỗ vỗ Đại Phong. Thấy nó phỗ cánh một cái, tiếp theo kêu lên một tiếng tung cánh hòa vào bầu trời, giữa không trung xoay một vòng, rồi vọt thẳng lên tận trời xanh.\r\n\r\nMàn đêm buông xuống, ánh sao sáng rực.\r\n\r\nĐột nhiên ta hối hận, đây là lần đầu tiên ta viết thư cho sư phụ, sau này có lẽ sẽ được sư phụ giữ lại thỉnh thoảng lật ra xem lại, đáng ra ta phải trực bạch* hơn nữa, như vậy mới có thể có giá trị cất giữ, một câu cuối cùng phải đổi thành: Sư phụ, con nhớ người muốn chết.\r\n\r\n*Trực bạch: thẳng thắng trực tiếp nói trắng ra.', 1, 'chapter-1-bach-lo-phi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `slug_danhmuc` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `kichhoat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `slug_danhmuc`, `mota`, `kichhoat`) VALUES
(11, 'Truyện trinh thám', 'truyen-trinh-tham', 'Sưu tầm truyện trinh thám hay nhất', 1),
(13, 'Truyện kinh dị', 'truyen-kinh-di', 'Nói chung là ok', 1),
(16, 'Truyện anime', 'truyen-anime', 'hay', 1),
(18, 'Truyện xàm', 'truyen-xam', 'Nói chung là ok', 1),
(20, 'Truyện cổ tích', 'truyen-co-tich', 'Sưu tầm truyện cổ tích Việt Nam', 1),
(21, 'Truyện kiếm hiệp', 'truyen-kiem-hiep', 'Sưu tầm truyện kiếm hiệp hay nhất', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `map` int(11) NOT NULL,
  `tieude_footer` text NOT NULL,
  `logo` varchar(200) NOT NULL,
  `updated_at` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `information`
--

INSERT INTO `information` (`id`, `tieude`, `mota`, `copyright`, `map`, `tieude_footer`, `logo`, `updated_at`) VALUES
(1, 'Sách Truyện Online - Net Truyện', 'Website đọc truyện online đầy đủ cập nhật mới nhất 2021. Đọc truyện online, truyện mới, truyện full, truyện dài, truyện dịch convert, truyện hay, truyện chữ, tiểu thuyết. Với nhiều thể loại hấp dẫn truyện Tiên Hiệp, Kiếm Hiệp, truyện Ngôn Tình, Đam Mỹ...', 'Copyright © 2021 SachTruyen Online', 0, 'Website đọc truyện online chất lượng hàng đầu việt nam, với nhiều truyện tiên hiệp, truyện kiếm hiệp, truyện ngôn tình, truyện teen, truyện đô thị được tác giả và dịch giả chọn lọc và đăng tải. Truy cập website nghĩa là bạn đã đồng ý với các quy định và điều khoản của chúng tôi. Vui lòng đọc kỹ các thông tin liên quan ở phía dưới.\r\nChính sách bảo mật   -  Điều khoản sử dụng   -  Quy định về nội dung   -  Vấn đề bản quyền   -  Thỏa thuận quyền riêng tư\r\n\r\nWebsite hoạt động dưới Giấy phép truy cập mở Creative Commons Attribution 4.0 International License..', 'logo-nettruyen2583.png', '2021-10-15 23:38:40');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_16_111051_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('holuat162@gmail.com', '$2y$10$.KMOMMsQW5ljD7XvTboOxuESecN/4Xpd07xHP5.7Ro.Vk0XpOUrba', '2021-10-15 08:00:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit articles', 'web', '2021-10-16 08:33:35', '2021-10-16 08:33:35'),
(2, 'add articles', 'web', '2021-10-16 08:34:32', '2021-10-16 08:34:32'),
(3, 'delete articles', 'web', '2021-10-16 08:34:45', '2021-10-16 08:34:45'),
(4, 'publish articles', 'web', '2021-10-16 08:35:05', '2021-10-16 08:35:05'),
(5, 'add category', 'web', '2021-10-16 08:45:56', '2021-10-16 08:45:56'),
(6, 'edit category', 'web', '2021-10-16 08:47:22', '2021-10-16 08:47:22'),
(7, 'delete category', 'web', '2021-10-16 08:47:43', '2021-10-16 08:47:43'),
(8, 'publish category', 'web', '2021-10-16 08:48:02', '2021-10-16 08:48:02'),
(9, 'add genre', 'web', '2021-10-16 08:48:58', '2021-10-16 08:48:58'),
(10, 'delete genre', 'web', '2021-10-16 08:49:19', '2021-10-16 08:49:19'),
(11, 'edit genre', 'web', '2021-10-16 08:49:37', '2021-10-16 08:49:37'),
(12, 'publish genre', 'web', '2021-10-16 08:49:51', '2021-10-16 08:49:51'),
(13, 'add information', 'web', '2021-10-17 08:23:46', '2021-10-17 08:24:23'),
(14, 'edit information', 'web', '2021-10-17 08:31:21', '2021-10-17 08:31:21'),
(15, 'add book', 'web', '2021-10-17 15:27:25', '2021-10-17 15:27:25'),
(16, 'edit book', 'web', '2021-10-17 15:28:03', '2021-10-17 15:28:03'),
(17, 'delete book', 'web', '2021-10-17 15:28:46', '2021-10-17 15:28:46'),
(18, 'publish book', 'web', '2021-10-17 15:34:50', '2021-10-17 15:34:50'),
(19, 'add movie', 'web', '2021-10-19 04:19:37', '2021-10-19 04:19:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'writer', 'web', '2021-10-16 05:05:25', '2021-10-16 05:06:33'),
(2, 'editer', 'web', '2021-10-16 05:06:38', '2021-10-16 05:06:42'),
(3, 'publisher', 'web', '2021-10-16 05:06:54', '2021-10-16 05:06:54'),
(4, 'admin', 'web', '2021-10-16 05:06:54', '2021-10-16 05:06:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 4),
(2, 1),
(2, 4),
(3, 4),
(4, 3),
(4, 4),
(5, 1),
(5, 4),
(6, 2),
(6, 4),
(7, 4),
(8, 3),
(8, 4),
(9, 1),
(9, 4),
(10, 4),
(11, 2),
(11, 4),
(12, 3),
(12, 4),
(13, 4),
(14, 4),
(15, 1),
(15, 4),
(16, 2),
(16, 4),
(17, 4),
(18, 3),
(18, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id` int(11) NOT NULL,
  `tensach` varchar(255) NOT NULL,
  `slug_sach` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `kichhoat` int(11) NOT NULL,
  `tukhoa` mediumtext NOT NULL,
  `noidung` text NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `views` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `tensach`, `slug_sach`, `tomtat`, `hinhanh`, `kichhoat`, `tukhoa`, `noidung`, `created_at`, `updated_at`, `views`) VALUES
(1, 'Giáo Dục Dành Cho Trẻ Nhút Nhát', 'giao-duc-danh-cho-tre-nhut-nhat', 'Trong cuộc sống, chúng ta thường nghe thấy các bậc phụ huynh phàn nàn: “Con tôi rất nhút nhát, hay xấu hổ, không hay nói chuyện, khách đến nhà là chạy đi mất”.Những vấn đề như vậy khiến các bậc cha mẹ vô cùng lo lắng. Tóm lại, những tình trạng kể trên đều có liên quan đến tính cách nhút nhát của trẻ.', 'giaoductre81.jpg', 1, 'phương pháp giáo dục,giáo dục trẻ,sách giáo dục', '<p>V&igrave; nh&uacute;t nh&aacute;t, c&aacute;c em kh&ocirc;ng d&aacute;m ph&aacute;t biểu &yacute; kiến trước chỗ đ&ocirc;ng người, khi gặp người lạ hoặc ở trong m&ocirc;i trường xa lạ, c&aacute;c em thường tỏ ra xấu hổ, ngại ng&ugrave;ng, lo lắng, kh&ocirc;ng thể giao tiếp với mọi người một c&aacute;ch thoải m&aacute;i, cởi mở; Trong cuộc sống v&agrave; học tập, c&aacute;c em lu&ocirc;n thiếu t&iacute;nh chủ động, dũng kh&iacute; v&agrave; sự tự tin, n&ecirc;n đ&atilde; để lỡ nhiều cơ hội v&agrave; th&agrave;nh c&ocirc;ng vốn thuộc về ch&uacute;ng. V&igrave; vậy, nh&uacute;t nh&aacute;t l&agrave; h&ograve;n đ&aacute; cản đường trưởng th&agrave;nh v&agrave; th&agrave;nh c&ocirc;ng của trẻ.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vậy tại sao trẻ lại c&oacute; t&iacute;nh c&aacute;ch nh&uacute;t nh&aacute;t? L&agrave;m thế n&agrave;o gi&uacute;p trẻ t&iacute;nh c&aacute;ch nh&uacute;t nh&aacute;t, yếu đuối trở n&ecirc;n dũng cảm v&agrave; đạt được th&agrave;nh c&ocirc;ng trong x&atilde; hội l&agrave; vấn đề được rất nhiều bậc cha mẹ quan t&acirc;m.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chuy&ecirc;n gia t&acirc;m l&iacute; ph&acirc;n t&iacute;ch v&agrave; chỉ ra rằng, trẻ nh&uacute;t nh&aacute;t, ngo&agrave;i ảnh hưởng bởi khả năng thi&ecirc;n bẩm, c&aacute;ch gi&aacute;o dục sau n&agrave;y cũng l&agrave; nguy&ecirc;n nh&acirc;n quan trọng. Hiện nay đa số trẻ em đều l&agrave; con một, thiếu sự giao tiếp với những đứa trẻ kh&aacute;c, cha mẹ lại qu&aacute; nu&ocirc;ng chiều, khiến trẻ kh&oacute; th&iacute;ch nghi với ho&agrave;n cảnh, khi đối diện với người lạ hoặc m&ocirc;i trường lạ, trẻ dễ xuất hiện t&acirc;m l&iacute; sợ h&atilde;i. C&oacute; bậc cha mẹ c&ograve;n qu&aacute; nghi&ecirc;m khắc, khiến cả ng&agrave;y trẻ sống trong cảm gi&aacute;c sợ h&atilde;i, kh&ocirc;ng d&aacute;m thử việc mới, dần dần trở th&agrave;nh nh&uacute;t nh&aacute;t.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trẻ nh&uacute;t nh&aacute;t, c&oacute; ảnh hưởng bất lợi đến sự ph&aacute;t triển to&agrave;n diện về thể chất v&agrave; t&acirc;m hồn. V&igrave; thế, cha mẹ cần coi trọng, quan t&acirc;m đến vấn đề n&agrave;y. Chỉ khi n&agrave;o cha mẹ nắm bắt được l&iacute; luận gi&aacute;o dục khoa học, c&oacute; phương ph&aacute;p gi&aacute;o dục th&iacute;ch hợp, ki&ecirc;n tr&igrave; hướng dẫn, trẻ mới trở n&ecirc;n dũng cảm, tự tin v&agrave; hoạt b&aacute;t.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đối với trẻ nh&uacute;t nh&aacute;t, bố mẹ kh&ocirc;ng n&ecirc;n n&ocirc;n n&oacute;ng, sốt ruột. Kh&ocirc;ng thể tr&aacute;ch m&oacute;c trẻ, hoặc hi vọng một c&aacute;ch ảo tưởng rằng một ng&agrave;y n&agrave;o đ&oacute; ch&uacute;ng sẽ trở n&ecirc;n dũng cảm, hoạt b&aacute;t, nhanh nhẹn. Cần biết ph&aacute;t hiện ưu điểm của trẻ, t&iacute;ch cực động vi&ecirc;n v&agrave; cổ vũ để trẻ dần dần mạnh dạn hơn.</p>', '2021-10-09 10:46:40', '2021-10-09 10:46:40', 15),
(2, 'Nuôi con không phải là cuộc chiến', 'nuoi-con-khong-phai-la-cuoc-chien', 'Là cuốn sách của tác giả Việt, giúp bạn hiểu chu kì, giúp bạn hiểu chu kì sinh học của con', 'nuoicon45.PNG', 1, 'nuôi con,dạy con', '<p>Nhớ cập nhật nội dung s&aacute;ch Nu&ocirc;i con nha admin, haha</p>', '2021-10-12 19:27:10', '2021-10-12 19:27:10', 24),
(3, 'Cafe cùng Tony - Tony Buổi Sáng', 'cafe-cung-tony-tony-buoi-sang', 'Cafe cùng tony tác phẩm văn học. Tony Buổi Sáng Blog là một trang thông tin tổng hợp nhằm thay đổi tư duy và định hướng cho các bạn trẻ hội nhập và làm giàu cho bản thân mình và xã hội', 'tnbs59.PNG', 1, 'Tony Buổi Sáng,Tony', '<p>T&aacute;c giả: Tony Buổi S&aacute;ng</p>\r\n\r\n<p>Số trang: 213</p>\r\n\r\n<p>Mục s&aacute;ch: Kỹ năng sống</p>\r\n\r\n<p>T&igrave;nh trạng: Ho&agrave;n th&agrave;nh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe height=\"480\" src=\"https://drive.google.com/file/d/1oS2Y40gGTyWlsRKanZbaU4ncmlLER4F7/preview\" width=\"100%\"></iframe></p>\r\n\r\n<p>&gt;</p>\r\n\r\n<p>&gt;</p>', '2021-10-17 22:22:04', '2021-10-17 22:22:04', 245);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) UNSIGNED NOT NULL,
  `tentheloai` varchar(255) NOT NULL,
  `slug_theloai` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `kichhoat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `tentheloai`, `slug_theloai`, `mota`, `kichhoat`) VALUES
(1, 'Kinh dị', 'kinh-di', 'ám ảnh kinh hoàng nên đọc', 1),
(2, 'Hành động', 'hanh-dong', 'Hành động mạo hiểm có một không hai', 1),
(7, 'Truyện 18+', 'truyen-18', 'Nói chung là ok', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuocdanh`
--

CREATE TABLE `thuocdanh` (
  `id` int(10) UNSIGNED NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `truyen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thuocdanh`
--

INSERT INTO `thuocdanh` (`id`, `danhmuc_id`, `truyen_id`) VALUES
(4, 13, 18),
(6, 13, 13),
(7, 11, 12),
(8, 16, 11),
(9, 11, 11),
(10, 13, 7),
(11, 18, 6),
(12, 13, 6),
(13, 18, 19),
(14, 11, 20),
(15, 11, 21),
(16, 11, 22),
(18, 20, 23),
(19, 18, 24),
(20, 21, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuocloai`
--

CREATE TABLE `thuocloai` (
  `id` int(11) UNSIGNED NOT NULL,
  `theloai_id` int(11) NOT NULL,
  `truyen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thuocloai`
--

INSERT INTO `thuocloai` (`id`, `theloai_id`, `truyen_id`) VALUES
(2, 2, 18),
(4, 1, 13),
(5, 2, 12),
(6, 2, 11),
(7, 1, 7),
(8, 1, 6),
(15, 2, 13),
(16, 2, 23),
(17, 7, 24),
(18, 2, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `tentruyen` varchar(255) NOT NULL,
  `tukhoa` varchar(255) NOT NULL,
  `tacgia` varchar(200) NOT NULL,
  `tomtat` text NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `theloai_id` int(10) UNSIGNED NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `slug_truyen` varchar(255) NOT NULL,
  `kichhoat` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `truyen_noibat` int(11) NOT NULL DEFAULT 0,
  `views` int(255) NOT NULL,
  `created_at` varchar(30) DEFAULT current_timestamp(),
  `updated_at` varchar(30) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`id`, `tentruyen`, `tukhoa`, `tacgia`, `tomtat`, `danhmuc_id`, `theloai_id`, `hinhanh`, `slug_truyen`, `kichhoat`, `tinhtrang`, `truyen_noibat`, `views`, `created_at`, `updated_at`) VALUES
(6, 'Truyện xàm', 'Nhảm nhí,xàm xí', 'Ngọc Huyền', 'xàm quá', 1, 1, '243.jpg', 'truyen-xam', 1, 1, 2, 450, '2021-08-23 15:45:07', '2021-10-12 18:56:34'),
(7, 'Truyện kinh dị', 'giết người,truyện ma', 'Ngọc Vy', 'Truyện ma hấp dẫn', 1, 1, '103177621-256-k9888823889.jpg', 'truyen-kinh-di', 1, 1, 2, 345, '2021-08-23 15:45:07', '2021-10-14 13:28:11'),
(11, 'Trinh thám Conan', 'Phiêu lưu, giải mã,Thám tử lừng danh,Conan', 'Ngọc Trinh', 'giai ma cai chet an do cac tham tu tai ba', 1, 2, '69.jpg', 'trinh-tham-conan', 1, 1, 1, 1000, '2021-08-23 15:45:07', '2021-10-13 10:34:09'),
(12, 'Giải mã bí ẩn Maya', 'Khám phá, phiêu lưu, mạo hiểm', 'Ngọc Tâm', 'rat hay va bo ich cho gioi tre dam me doc trinh thám nha', 1, 2, '789.jpg', 'giai-ma-bi-an-maya', 1, 2, 0, 45, '2021-08-23 15:45:07', '2021-10-12 18:54:49'),
(13, 'Cái chết đen', 'Viễn tưởng,kinh dị', 'Đức Luật', 'anh yêu em nhiều lắm em có biết không hả?', 1, 1, 'truyenkinhdi514.jpg', 'cai-chet-den', 1, 1, 2, 78, '2021-08-23 15:45:07', '2021-10-14 13:27:07'),
(23, 'Tổng hợp truyện cổ tích Việt Nam', 'truyện cổ tích,cổ tích,Việt Nam', 'Dân gian', 'Xưa có một ông vua tuổi già lâm bệnh, nghĩ bụng: “Ta chết đến nơi mất rồi”. Vua cho đòi “bác Jôhannơt trung thành” tới. Bác là người hầu được vua yêu nhất. Bác đã suốt đời tận tụy với vua. Vì vậy mà vua gọi bác là “bác Jôhannơt trung thành”. Khi bác đến bên giường vua, vua phán: – Jôhannơt trung thành ơi, ta biết ta sắp chết, ta chỉ băn khoăn về con ta. Nó còn ít tuổi, dại dột, nếu nhà ngươi không hứa với ta sẽ dạy cho nó biết những cái gì cần biết và khuyên nó như người cha thứ hai, thì ta không yên tâm mà nhắm mắt. Bác Jôhannơt đáp: – Dù phải hy sinh đến tính mệnh, thần cũng không rời bỏ hoàng tử. Thần xin thề một lòng một dạ phụng sự hoàng tử.', 2, 2, 'Than_dong_dat_viet8630.jpg', 'tong-hop-truyen-co-tich-viet-nam', 1, 1, 1, 245, '2021-10-13 23:41:47', '2021-10-14 00:22:02'),
(24, 'Truyện 18+', 'sắc dục,yêu đương', 'Đức Luật', 'Thể loại: Hiện đại, cao H, cường công cường thụ, ABO AxA tag phụ: thúc chất, niên hạ, công nhỏ tuổi hơn thụ . Độ dài: 35c , phiên ngoại 2 couple. Bản gốc Trung: cần vip để tải Tác giả: Wy Tử Mạch / wy紫陌 Tình trạng bản covert: 35ch chính văn + phiên ngoại Tình trạng Edit: Đã rape xong, chưa được sự cho phép của tác giả nên tránh reup dùm', 1, 7, 'truyen-tranh-dam-my-1985.jpg', 'truyen-18', 1, 1, 0, 15, '2021-10-14 12:30:22', '2021-10-14 12:52:00'),
(25, 'Giang Nam Ngoại Truyện', 'giang nam ngoại truyện,ngoại truyện,truyện kiếm hiệp', 'Lão Thiên', 'Tên xuất bản: Giang Nam Ngoại Truyện Tên gốc (trên mạng): Niêm Hoa Nhất Khiếu Tác giả: Lão Thiên Edit + Dịch: Jeanne + Hoa Hy Minh Văn Án', 2, 2, '132968173-256-k1853938896.jpg', 'giang-nam-ngoai-truyen', 1, 1, 1, 284, '2021-10-14 13:23:08', '2021-10-14 13:36:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'holuat_admin', 'holuat162@gmail.com', NULL, '$2y$10$tdxDowOPYg0aRU.3lqbRQeorQi6k.zD.X349plnqddjjN/.vtYZvW', 'z4oWNHtIIEkTZYqKROCdf9tLeb26h0alNazVsI5TirOk5KYsng0EZGcnPI0o', '2021-06-09 09:27:39', '2021-06-09 09:27:39'),
(2, 'hogiao_writer', 'holuat162_write@gmail.com', NULL, '$2y$10$xsFMbipyvYP.nfgS5QxXGOx6gWsOdSkW/lTRQBeo1eBO.UAGHJEvK', NULL, '2021-09-02 03:47:04', '2021-09-02 03:47:04'),
(3, 'holich_editer', 'holuat162_edit@gmail.com', NULL, '$2y$10$mkaGQ3GKf4Q222E.3s9.SOBHQFLMLRfMGrXyrIJiykwVmTIUREC6m', NULL, '2021-10-15 08:03:41', '2021-10-15 08:03:41'),
(4, 'hophap_publisher', 'holuat162_publish@gmail.com', NULL, '$2y$10$mkaGQ3GKf4Q222E.3s9.SOBHQFLMLRfMGrXyrIJiykwVmTIUREC6m', NULL, '2021-10-15 08:03:41', '2021-10-15 08:03:41'),
(10, 'holuat_writer', 'holuat123@gmail.com', NULL, '$2y$10$uAuIUa9cuDr/Kc8yq/KgsubxV1fB7lycsYOsgY2zJhY8kGpZqCRUm', NULL, '2021-10-18 09:32:51', '2021-10-18 09:32:51');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `truyen_id` (`truyen_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuocdanh`
--
ALTER TABLE `thuocdanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuocloai`
--
ALTER TABLE `thuocloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `thuocdanh`
--
ALTER TABLE `thuocdanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `thuocloai`
--
ALTER TABLE `thuocloai`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
