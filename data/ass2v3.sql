-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 04:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ass2`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `ID` int(4) NOT NULL,
  `title` varchar(100) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `ngaydang` datetime NOT NULL,
  `noidung` mediumtext NOT NULL,
  `type` varchar(10) NOT NULL,
  `luot_xem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`ID`, `title`, `Username`, `ngaydang`, `noidung`, `type`, `luot_xem`) VALUES
(2, 'Bùi Thơm Với Nem Nắm Giao Thủy', 'ptmthai', '2019-04-01 10:16:15', 'Ngày nay, nem nắm Giao Thủy là món ăn rất được ưa chuộng trong các bữa tiệc liên hoan, hội hè, đình đám... Món ăn dân dã, mộc mạc ấy đã vượt qua \"cổng làng\" để đến với khắp mọi miền của đất nước và cả nước ngoài với những cách thức chế biến khác nhau. Tuy nhiên, chỉ khi nào du khách có dịp về thăm mảnh đất Giao Thủy, được thưởng thức món nem nắm do chính người dân nơi đây chế biến bằng bí quyết cổ truyền thì mới có thể cảm nhận hết được hương vị đậm đà đặc trưng của nó.<br>\r\nNem nắm Giao Thủy, được làm từ bì và thịt lợn. Bì lợn làm nem được lựa chọn kỹ càng từ da của những con lợn khỏe mạnh, không quá già hoặc quá non. Sau khi loại bỏ lông và phần mỡ dính dưới da, bì lợn được đem luộc chín tới (nước sôi khoảng 3- 5 phút) để bì vừa dai lại vừa mềm, nếu luộc kỹ bì sẽ bị keo dính ăn không ngon. Bì phải thái mỏng bằng tay, tuyệt đối không dùng bằng máy thái.<br>\r\nThịt lợn làm nem được lựa từ thịt nạc ở 2 quả mông của con lợn. Thịt được đem luộc chín tái lòng đào, thái mỏng để khi chế biến nem có vị ngọt và bùi và dùng sống dao dần kỹ.<br>\r\nĐể thưởng thức hết vị thơm ngon của nem nắm Giao Thủy, phải được “đẩy đưa” bởi nước mắm ngon, pha thêm vị chua, cay, ngọt của ớt, giấm, đường. Khi thưởng thức, chỉ cần gắp từng miếng nem rồi cuốn với lá sung, lá đinh lăng thành miếng dài, nên chọn những lá sung tật có những nốt sần trên lá dùng để cuốn nem thì ăn mới bùi. Lá đinh lăng thì phải chọn lá vừa già tới thì mới cảm nhận được hết vị đăng đắng. Khi nhai miếng nem ta cảm thấy cái mềm mềm, bùi bùi, ngầy ngậy của thịt, thấy chất dai, giòn sừn sựt của bì lợn và thoang thoảng hương thơm đồng nội của thính cùng vị cay nồng của tỏi... Tất cả hương vị tinh túy của một vùng quê biển hòa quyện vào nhau,̉ chắp cánh cho vị giác của người thưởng thức được thăng hoa.', 'bắc', 42),
(5, 'Thử là sẽ thích 9 món ăn ngày tết miền Nam với hương vị “ÔI MÊ LY”', 'ductacong', '2019-02-07 08:35:18', 'Trong ngày tết Nguyên Đán mà bạn được thưởng thức món ăn ngày tết miền Nam với hương vị tuyệt ngon thì hẳn là điều tuyệt vời. Với tiết trời còn chút lắng đọng cùng nhiều vườn cây trái sum suê mà những ngày tết ở miền Nam có một nét đẹp rất riêng.<br>\r\nDịp tết Cổ truyền là một trong những ngày lễ lớn mà ở mỗi vùng miền của nước ta sẽ có những màu sắc rất riêng. Được thưởng thức những món ăn ngon nức tiếng trong dịp lễ tết ở miền Nam thì bạn sẽ không thể quên được hương vị đặc biệt của những món ăn này.<br>\r\n1. Bánh tét<br>\r\nMón bánh tét ở miền Nam là một món ăn vô cùng đa dạng về cả màu sắc lẫn hương vị khác nhau. Với mỗi một loại bánh lại có nguyên liệu cùng tạo hình và nhiều màu sắc mới lạ. Nếu bạn được thưởng thức món bánh tét là món ăn ngày tết miền Nam thì bảo đảm bạn sẽ thích mê với hương vị tuyệt ngon của nó. Bánh sẽ được làm từ nhiều loại nguyên liệu: lá cẩm, gạo nếp, dừa nạo, đậu đen, đậu đỏ… mà nhiều người còn tao nên những chiếc bánh hình hoa mai, chữ Phú hay chữ Thọ để mang lại may mắn cho cả gia đình trong ngày tết này.<br>\r\n2. Củ cải ngâm nước mắm<br>\r\nNhắc tới món ăn ngày tết miền Nam thì bạn sẽ không thể bỏ qua món củ cải ngâm nước mắm với hương vị đặc trưng. Củ cải đã được chế biến kỹ rồi ngâm cùng nước mắm thơm ngon tạo nên một món ăn đặc biệt mà ai cũng phải ghiền khi được thưởng thức. Bởi vậy mà trong dịp lễ tết của người miền Nam thì bạn sẽ dễ dàng bắt gặp món ăn này trong bữa cơm của họ.<br>\r\n3. Canh khổ qua<br>\r\nTheo quan niệm của dân gian thì trong ngày tết mà thưởng thức món canh khổ qua có ý nghĩa là mong muốn cho những khổ cực của năm cũ sẽ qua đi để chào đón sự may mắn, tốt đẹp trong năm mới sẽ tới. Bởi vậy mà món ăn này cũng là một trong những món ăn ngày tết miền Nam mà nhiều người thích mê.<br>\r\nKhông chỉ đơn giản là mang ý nghĩa tốt lành mà món canh khổ qua này còn có tác dụng cung cấp năng lượng cho cơ thể con người một cách tốt nhất. Món canh này có nhiều tác dụng: giải nhiệt, chống ngán, giải mỡ,… nên nếu được thưởng thức món canh này trong ngày tết với nhiều đồ ăn chứa đạm thì hẳn là một điều vô cùng tuyệt vời.<br>\r\n4. Thịt kho tàu<br>\r\nMột trong những món ăn ngày tết miền Nam không thể thiếu chính là món thịt kho tàu được người dân miền Nam vô cùng yêu thích. Thịt được nấu nhừ cùng trứng với màu cánh gián của nước sốt khiến cho món ăn này kích thích thị giác của người nhìn. Bảo đảm ai cũng phải thích mê khi được thưởng thức món thịt kho trong những ngày lễ tết. Món ăn là sự cầu mong cho cuộc sống của con người luôn có nước lợ để tẩy rửa được vị mặn của đồng chua cho một mùa màng bội thu.<br>\r\n5. Canh măng<br>\r\nLà một món ăn cung cấp nhiều chất xơ cùng vitamin cho cơ thể con người mà canh măng đã trở thành một món ăn ngày tết miền Nam mà nhiều gia đình thích mê. Điểm đặc biệt của món canh măng ở miền Nam là sử dụng măng tươi để nấu nên vị rất ngon.\r\nTrong ngày lễ tết mà được thưởng thức món canh măng với hương vị thơm ngon tuyệt vời thì chắc hẳn ai cũng phải thích mê bởi nó mang một sắc thái rất riêng à ai cũng cảm thấy cuốn hút vô cùng.<br>\r\n6. Chả giò<br>\r\nĐiểm mặt những món ăn ngày tết miền Nam không thể không có thì món chả giò chính là một món ăn tuyệt ngon mà bạn nên lưu tâm. Những miếng chả được gói nhân thơm ngon trong chiếc bánh đa giòn rụm mà ai cũng phải thích mê.<br>\r\nNếu ngày tết bạn cảm thấy dễ ngán vì có nhiều món ăn chứa chất béo thì gia đình bạn có thể chuẩn bị món chả giò bằng nhân hoa quả sẽ có được hương vị thơm ngon tuyệt vời. Chính vì vậy mà món ăn này được nhiều người yêu thích trong dịp tết Nguyên Đán.<br>\r\n7. Gỏi gà xé phay<br>\r\nĐược xem là một món ăn ngày tết miền Nam mang lại cảm giác rất tuyệt mà gỏi gà xé phay sẽ là một món ăn không thể thiếu trong bữa cơm ngày tết. Món ăn này có vị chua ngọt lại chế biến tuyệt ngon chứa nhiều chất dinh dưỡng mà ai ăn cũng ghiền. Bạn có thể ăn thoải mái mà không lo sẽ tăng cân khi thưởng thức món ăn này thế nên nó là một món ăn đặc biệt mà gia đình nào cũng thích mê.\r\n8. Củ kiệu trộn tôm khô<br>\r\nMón củ kiệu trộn tôm khô chính là một món ăn ngày tết miền Nam mà cực kỳ nhiều người yêu thích. Bảo đảm đây là một món ăn ngon mà những “dân nhậu” sẽ không thể bỏ qua trong dịp lễ tết.<br>\r\nVới vị chua của dưa kiệu cùng vị thơm ngọt của tôm đất làm người ăn càng nhai càng cảm thấy bùi. Nếu ăn món ăn này cùng bánh tét sẽ là một món ăn ngon hết ý mà ai cũng phải thích mê. Chính vì vậy mà người miền Nam cực kỳ yêu thích món ăn này.<br>\r\n9. Mứt dừa<br>\r\nĐể đón lễ tết ở miền Nam sẽ không thể thiếu món mứt dừa mang hương thơm ngon mê ly. Đây là một món ăn ngày tết miền Nam mà nhà nào cũng có. Với sự biến tấu khác nhau đã tạo nên món mứt dừa có nhiều hương vị thơm ngon mà dịp lễ tết người miền Nam vẫn thường mời khách. Màu sắc cùng mùi vị tuyệt ngon làm cho món ăn này dễ dàng chinh phục được mọi vị khách tới nhà bạn vui chơi.', 'nam', 26),
(6, '15 món ngon miền Tây được lòng người Sài Gòn', 'truongsasanh', '2018-11-16 05:23:35', 'Bún mắm, hủ tiếu Mỹ Tho, lẩu cá kèo... là những món ăn khiến những người con tha phương chạnh lòng khi nhớ đến quê nhà.\r\nCá lóc nướng trui ăn kèm rau sống, bánh tráng mỏng, bún tươi chấm kèm mắm nêm hay mắm me. Một phần cá lóc có giá từ 120.000 đồng. <br>\r\nLẩu cá kèo là món ăn nổi tiếng của người dân Nam Bộ. Món ăn có vị chua của lá giang, nhân nhẫn của rau đắng cùng loại cá có kích thước non ngón cái. Bạn có thể tìm thấy lẩu cá kéo ở nhiều quán ăn của Sài thành. Nổi tiếng nhất là các quán trên đường Bà Huyện Thanh Quan (quận 3). Ảnh: Nguyên Trang.   <br>\r\nNem nướng miền Tây có vị ngọt của đường. Theo chia sẻ của chủ một quán nem Long An gia truyền, để món ăn ngon, đầu bếp phải chế biến thịt heo mới ra lò.  <br>\r\nCháo lòng: Thương hiệu cháo lòng nổi tiếng của miền Tây là Cái Tắc và Châu Đốc. Cháo thường được nấu theo phong cách sơn thủy (cái và nước phân rõ), ăn kèm bánh mì hay bún tươi.  <br>\r\nBánh tằm bì là một trong những món ăn dân dã của miền Tây. Bánh có sự kết hợp giữa vị mặn của mắm, các loại chả, nem... và vị ngọt, béo của nước cốt dừa.  <br>\r\nBánh bèo thường được đổ bằng chén nhỏ, ăn kèm đậu xanh đánh nhuyễn, tôm chấy, hành phi, nước mắm chua ngọt và nước cốt dừa.  <br>\r\nChuối nướng: Chuối sứ (xiêm/mốc) chín rục, bọc trong một lớp nếp, cơm dừa mỏng, nướng trên nếp than. Chuối nướng ăn kèm nước cốt dừa và mè rang vàng.  <br>\r\nNem cuốn có thành phần tương tự nem nướng, nhưng cách thưởng thức lại giống gỏi cuốn. Nem nướng chín, xắt mỏng, cuốn cùng các loại rau. Món này ăn kèm mắm nêm hay tương ngọt, đồ chua, đậu phộng...  <br>\r\nThịt cuốn mắm Thái rất phổ biến ở Châu Đốc (An Giang) - xứ sở của món mắm này.  <br>\r\nBánh xèo miền Tây đổ bằng chảo nên có kích thước cùng phần nhân nhiều vượt trội. Nhiều yếu tố quyết định độ ngon của món ăn, như kỹ thuật chiên, độ tươi của nguyên liệu và nước mắm chua ngọt.  <br>\r\nBánh ống lá dứa được làm từ khoai mì cà nhỏ giống như gạo tấm, trộn với bột gạo nếp, xác dừa nạo theo tỷ lệ thích hợp. Hỗn hợp này được trộn với nước lá dứa để tạo màu xanh. Bánh được hấp chín bằng hơi nước.  <br>\r\nNước cỏ lau có tạo hình giống sương sâm hay thạch găng. Món nước này có tác dụng thanh nhiệt, mát gan, giải độc.  <br>\r\nLẩu mắm có vị thơm đậm đà vì nước dùng được nấu cùng mắm linh và mắm sặc. Món ăn này hấp dẫn thực khách với sự phong phú của các loại rau, nguyên liệu ăn kèm.  <br>\r\nBún mắm được xem như hình thức thu nhỏ của lẩu mắm. Một tô bún mắm \"đúng bài\" phải có đầy đủ các nguyên liệu như cá, thịt heo quay, mực, tôm, cà tím...  <br>\r\nBún cá lóc là một trong những đặc sản quen thuộc của miền Tây. Tùy địa phương hay sở thích của người nấu, món ăn này có tạo hình, nguyên liệu, hương vị khác nhau. <br> \r\nBún kèn là đặc sản của Hà Tiên. Trong món bún này, cá xào nghệ là thành phần tốn thời gian và công đoạn chế biến nhất.  ', 'nam', 21),
(10, 'CÁCH NẤU LƯƠN OM CHUỐI NGHỆ MIỀN TRUNG ĐƠN GIẢN HẤP DẪN', 'maibalocmail', '2019-02-20 11:14:32', 'Chỉ với những bước đơn giản mà chuyên mục Các món ăn ngon của Miền Trung chia sẻ dưới đây, bạn sẽ có ngay món lươn om chuối nghệ miền Trung thơm ngon chuẩn vị. Nào, hãy cùng vào bếp trổ tài nấu món ăn này để chiêu đãi gia đình và bạn bè ngay nhé!<br>\r\nNguyên liệu làm món lươn ôm chuối nghệ<br>\r\n• 300gr lươn (chọn con lươn béo, tươi, ngon)<br>\r\n• 4 quả chuối xanh<br>\r\n• 3 miếng đậu hủ<br>\r\n• Thịt ba chỉ: 150gr<br>\r\n• 1 mớ lá tía tô, lá lốt, hành lá<br>\r\n• Ớt tươi: 1 quả<br>\r\n• Hành khô: 1 củ<br>\r\n• Tỏi: 1 củ<br>\r\n• Gia vị: mắm tôm, giấm,nước nghệ, mì chính, muối ăn, dầu ăn, hạt tiêu, 10gr bột đao<br>\r\nCách làm món lươn om chuối nghệ<br>\r\nBước 1:<br>\r\n• Bạn cắt đậu thành miếng vừa ăn, đun dầu ăn nóng già sau đó rán vàng.<br>\r\n• Chuối tước nhẹ lớp vỏ xanh bên ngoài, chuẩn bị một thau nước có pha thêm nước cốt chanh hoặc cho chút dấm để thả chuối vào. Với cách làm này, chuối sau khi sơ chế sẽ không bị thâm, món ăn đẹp mắt hơn. Sau đó, bạn cắt chuối thành từng khúc, cho vào bát nước vừa chuẩn bị, rửa sạch rồi cho vào nồi đun sôi, khi nước sôi nhắc ra khỏi bếp, để ráo, khi chuối còn nóng trộn chuối với 2 thìa nước cốt nghệ.<br>\r\n• Tỏi, hành bóc vỏ, băm nhỏ; ớt tươi rửa sạch, cắt nhỏ.<br>\r\n• Lươn mua về bạn cho muối vào để sạch chất nhờn, cho muối nhiều lần và làm đi làm lại cho lươn hết nhớt. Tiếp tục, bạn vuốt lươn bằng nước cốt chanh hay nước vo gạo nhiều lần nữa, lúc này lươn đã sạch nhờn thì bạn cắt thành nhiều khúc khoảng 3 cm. Để lươn dễ thấm gia vị hơn bạn lấy dao khứa thân lươn, cho lươn vào một bát, ướp với các gia vị: 1 thìa nước nghệ, 1 thìa hành, tỏi băm, 1 thìa cafe đường, 1/2 thìa cafe hạt tiêu, 1/2 thìa cafe muối, trộn đều các nguyên liệu.<br>\r\n• Thịt ba chỉ rửa sạch, chần qua nước sôi, sau đó cắt miếng mỏng, ướp với các gia vị tương tự lươn, để trong vòng 10 phút, sau đó cho vào chảo dầu rán cháy cạnh.<br>\r\n• Hành lá, tía tô, lá lốt nhặt bỏ phần trên và chỗ hỏng, sau đó rửa sạch và cắt nhỏ.\\r\\n• Mắm tôm hòa với 2 thìa nước, để nước lắng xuống thì lọc bỏ cặn đi<br>\r\nBước 2: <br>\r\n• Đặt nồi lên bếp, cho dầu ăn vào đun nóng, sau đó cho tỏi và hành băm vào phi đến khi vàng thơm thì cho lươn vào đảo đều, lưu ý là đảo nhẹ tay để lươn ko bị nát.<br>\r\n• Bạn tiến hành xào đến khi lươn săn lại thì bạn cho thịt ba chỉ, đậu hủ chiên và chuối vào, nêm thêm 2 thìa mắm tôm, 2 thìa dấm, 1 thìa nước mắm, 1 thìa mì chính, 1 thìa muối, 1 bát nước lọc, 1/2 thìa hạt tiêu, bột đao pha với chút nước, đảo đều các nguyên liệu, sau đó đun nhỏ lửa.<br>\r\n• Bạn đun trong khoảng 10 đến 15 phút đến khi thấy nước sánh lại, lươn và chuối đã chín thì nêm lại gia vị lần nữa cho vừa miệng, cho ớt cắt sợi chỉ vào, đảo đều, tắt bếp.<br>\r\nChỉ với các bước đơn giản như trên là bạn đã có ngay món lươn om chuối nghệ vô cùng thơm ngon, hấp dẫn, lại có giá trị dinh dưỡng cao cho cơ thể rồi. Còn chần chừ gì mà không thực hiện ngay nào! Chúc các bạn thành công!', 'trung', 86),
(35, 'Hột vịt lộn chấm nước dừa', 'hanhdn', '2019-05-12 22:18:36', 'Bát bún riêu ngon có sự góp mặt của bún trắng, gạch cua nâu hồng, cà chua đỏ, hành xanh, chút mắm tôm cho dậy mùi, hành phi thơm, cầu kỳ hơn có thể thêm đậu rán vàng, miếng giò tai rồi ăn kèm với các thức rau sống như kinh giới, xà lách, rau mùi.', 'bắc', 0),
(36, 'Há»™t vá»‹t lá»™n cháº¥m nÆ°á»›c tÆ°Æ¡ng', 'maibalocmail', '2019-05-13 11:41:04', 'Há»™t vá»‹t lá»™n cháº¥m nÆ°á»›c tÆ°Æ¡ng.', 'Miá»n Báº', 1),
(1558001578, 'ddd', 'ductacong', '2019-05-16 12:12:58', 'ffff', 'Miền Bắc', 0),
(1558001591, 'ddd', 'ductacong', '2019-05-16 12:13:11', 'fff', 'Miền Bắc', 0),
(1558001661, 'd', 'ductacong', '2019-05-16 12:14:21', 'd', 'Miền Bắc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `content` varchar(100) CHARACTER SET utf8 NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `postid` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dang_ky`
--

CREATE TABLE `dang_ky` (
  `Username` varchar(20) NOT NULL,
  `Ho_va_ho_lot` varchar(20) DEFAULT NULL,
  `Ten` varchar(20) DEFAULT NULL,
  `Mat_khau` varchar(50) NOT NULL,
  `So_dien_thoai` varchar(10) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Gioi_tinh` varchar(3) NOT NULL,
  `Ngay_sinh` date DEFAULT NULL,
  `Avatar` varchar(50) NOT NULL,
  `role` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dang_ky`
--

INSERT INTO `dang_ky` (`Username`, `Ho_va_ho_lot`, `Ten`, `Mat_khau`, `So_dien_thoai`, `Email`, `Gioi_tinh`, `Ngay_sinh`, `Avatar`, `role`) VALUES
('dr_hvnchuong', 'Hồ Văn Nhật', 'Chương', '69068ad881f1aa8183d7c56954050abb', '0903344499', 'dr_hvnchuong@yahoo.com.vn', 'Nam', '1954-02-20', 'images/avatar_M.jpg', 'user'),
('ductacong', 'Ngô Cao', 'Trí', '4bdc705346b9627e5891ebaf58417da5', '0909090909', 'tringocao@gmail.com', 'Nam', '1956-02-02', 'images/avatar_M.jpg', 'admin'),
('hanhdn', 'Cô Hạnhd', 'Lùnd', 'e76577342e0ea06600cdc2a06041e3bc', '0903326063', 'dnhanh@gmail.com', 'Nữ', '1984-05-17', 'images/avatar_F.jpg', 'user'),
('hqviet', 'Huỳnh Quốc', 'Việt', '46c83f2b6d04f796384a33f5cc65d68c', '0933606960', 'hqviet@hcmut.edu.vn', 'Nam', '1985-02-03', 'images/avatar_M.jpg', 'user'),
('maibalocmail', 'Mai Bá', 'Lộc', '28af182d0b79bce892c3a0278b0fe9a6', '0984737098', 'maibalocmail@yahoo.com', 'Nam', '1983-11-18', 'images/IMG_1624.JPG', 'user'),
('nbthinh', 'Nguyễn Bửu', 'Thịnh', '9999faa1a414ef986c4447c004631559', '0903427221', 'thinh.nguyen0908117036@hcmut.edu.vn', 'Nam', '1994-02-12', 'images/avatar_M.jpg', 'user'),
('nthlien', 'Nguyễn Thị Hoàng', 'Liên', 'f90517102f79bd8b6ad2d85082b11329', '0913164185', 'nthlien@gmail.com', 'Nữ', '1979-03-14', 'images/avatar_F.jpg', 'user'),
('nvtai', 'Nguyễn Văn', 'Xỉu', '5f7163b3a494c6bbbf1ee01767051e85', '0908100287', 'nvtai@yahoo.com', 'Nam', '1954-01-01', 'images/avatar_M.jpg', 'user'),
('ptmthai', 'Phạm Thị Minh', 'Thái', '4400cdd8e3acfa6cd0b0385f5ee22210', '0903016467', 'ptmthai@gmail.com', 'Nữ', '1979-01-01', 'images/avatar_F.jpg', 'user'),
('truongsasanh', 'Trương Sa', 'Sanh', '5a089d7c2dbba1b21236abc946714fd2', '0903703045', 'truongsasanh@gmail.com', 'Nam', '1954-01-01', 'images/avatar_M.jpg', 'user'),
('tthmai', 'Trần Thanh', 'Mai', '34ef5e5a59ed1c93dce534663a39b7d9', '0907777777', 'tthmai@gmail.com', 'Nữ', '1944-07-07', 'images/avatar_F.jpg', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `vitrianh` varchar(100) NOT NULL,
  `idbaiviet` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`, `vitrianh`, `idbaiviet`) VALUES
(2, 'nem nắm giao thủy', './images/giaothuy.jpg', 2),
(5, 'món ăn miền nam', './images/monmiennam.png', 5),
(6, 'món ngon miền tây', './images/canoc.jpg', 6),
(10, 'nấu om nghệ an', './images/luonom.jpg', 10),
(14, '', 'images/1558001578.', 1558001578),
(15, '', 'images/1558001591.', 1558001591),
(17, 'WIN_20190418_14_30_37_Pro.jpg', 'images/1558001662.jpg', 1558001661);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `username` (`Username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `postid` (`postid`);

--
-- Indexes for table `dang_ky`
--
ALTER TABLE `dang_ky`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `showanh` (`idbaiviet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1558001662;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `username` FOREIGN KEY (`Username`) REFERENCES `dang_ky` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`username`) REFERENCES `dang_ky` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`postid`) REFERENCES `baiviet` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `showanh` FOREIGN KEY (`idbaiviet`) REFERENCES `baiviet` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
