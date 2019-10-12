-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 09:02 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '<p>asdasddasd</p>\r\n', '<p>asdasdasdasd</p>\r\n', '<p>asdasdasdasd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `graduated_date` date NOT NULL,
  `img` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '<p>elaqe az2asdasdsad</p>\r\n', '<p>elaqe&nbsp;en2</p>\r\n', '<p>elaqe&nbsp;ru2</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `max_student` int(11) NOT NULL,
  `lesson_start_hour` time NOT NULL,
  `lesson_end_hour` time NOT NULL,
  `whole_hour` int(11) NOT NULL,
  `whole_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`, `start_date`, `max_student`, `lesson_start_hour`, `lesson_end_hour`, `whole_hour`, `whole_month`) VALUES
(16, 'asdas', 'asdsa', 'asdsa', '<p>asdsa</p>\r\n', '<p>asdasd</p>\r\n', '<p>asdsad</p>\r\n', 'default.png', '0022-02-22', 2222, '22:22:00', '22:22:00', 22, 2222),
(38, 'asd', 'asd', 'asda', '<p>asd</p>\r\n', '<p>asd</p>\r\n', '<p>asd</p>\r\n', 'default.png', '0000-00-00', 2147483647, '22:22:00', '22:22:00', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `course_teachers`
--

CREATE TABLE `course_teachers` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_teachers`
--

INSERT INTO `course_teachers` (`id`, `teacher_id`, `course_id`) VALUES
(3, 1, 16),
(1, 2, 38);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`, `date`) VALUES
(1, 'xzczxc', 'xxcvxcvxvx', 'asdasd', '<p>Zx</p>\r\n', '<blockquote>\r\n<p>ZXZXZ</p>\r\n</blockquote>\r\n', '<p>XZxzX</p>\r\n', 'default.png', '0222-02-22'),
(2, 'asdasd', 'asdasd', 'asd', '<p>asdasdasdasd</p>\r\n', '<p>asdad</p>\r\n', '<p>asdasdasd</p>\r\n', 'iphone_ipad_apple_watches_stylus_pen_style_99204_1920x1080.jpg', '2019-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`, `link`) VALUES
(2, 'asda', 'asdasdas', 'das', '<p>asdas</p>\r\n', '<p>asdasd</p>\r\n', '<p>asda</p>\r\n', '190501_wnt_index_cruise_hpMain_16x9_992.jpg', 'asdasda');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 'Cavid Leleyev', 'Javid Lalayev', 'Djavid LAlayec', '<h2>orem Ipsum Nedir?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n\r\n<h2>Neden Kullanırız?</h2>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Nereden Gelir?</h2>\r\n\r\n<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<h2>Nereden Bulabilirim?</h2>\r\n\r\n<p>Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;re</p>\r\n', '<h2>orem Ipsum Nedir?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n\r\n<h2>Neden Kullanırız?</h2>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Nereden Gelir?</h2>\r\n\r\n<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<h2>Nereden Bulabilirim?</h2>\r\n\r\n<p>Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;re</p>\r\n', '<h2>orem Ipsum Nedir?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n\r\n<h2>Neden Kullanırız?</h2>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Nereden Gelir?</h2>\r\n\r\n<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<h2>Nereden Bulabilirim?</h2>\r\n\r\n<p>Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;re</p>\r\n', 'germany_cochem_mosel_river_castle_104431_1920x1080.jpg'),
(2, 'sad', 'asd', 'sad', '<p>asd</p>\r\n', '<p>asd</p>\r\n', '<p>asd</p>\r\n', 'macbook_pro_apple_laptop_headphones_table_98893_2560x1440.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`,`course_id`),
  ADD KEY `course_teachers_ibfk_1` (`course_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `course_teachers`
--
ALTER TABLE `course_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD CONSTRAINT `course_teachers_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_teachers_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
