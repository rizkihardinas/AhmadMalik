-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2020 at 01:33 AM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u316681686_vapestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `min_price` double NOT NULL,
  `max_price` double NOT NULL,
  `description` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `photo` text NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `name`, `address`, `min_price`, `max_price`, `description`, `latitude`, `longitude`, `photo`, `dateCreated`) VALUES
(2, 'Patahola Volars', ' Jl. Kemerdekaan', 60000, 5000000, '<p>Whatsapp +629503334321</p>', -6.193810160864217, 106.74331069381691, 'IMG_7289.jpg', '2020-10-31 15:26:06'),
(5, 'Woedu', 'Tess', 50000, 1000000, '<p>Tess</p>', -6.183021511702094, 106.82210012694941, '123174667_387621832378639_3898094407930378533_n.jpg', '2020-11-04 14:48:25'),
(7, 'vapeOI', 'Jl. Kramat Sentiong No.75C, RT.12/RW.7, Kramat, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10450', 15000, 3000000, '<p>phone&nbsp;<a data-dtype=\"d3ifr\" data-local-attribute=\"d3ph\" jscontroller=\"cSkPLb\" href=\"https://www.google.com/search?safe=strict&amp;rlz=1C1CHBF_enID919ID919&amp;sxsrf=ALeKk008BjQpG_Ye36IuBPSrW5ChvxbzBw:1605077879846&amp;ei=eYmrX7b1OtWamged2oaoDg&amp;q=alamat%20toko%20vape%20jakarta%20pusat&amp;oq=alamat+toko+vape+jakarta+pusat&amp;gs_lcp=CgZwc3ktYWIQAzIJCAAQyQMQFhAeOgQIABBHOgcIIxDqAhAnOggIABDJAxCRAjoFCAAQkQI6BwgAELEDEEM6BQguELEDOggILhCxAxCDAToLCC4QsQMQxwEQowI6CAgAELEDEIMBOgUIABCxAzoCCAA6BAgjECc6BwguEMkDEEM6BQguEJECOgQIABBDOg4ILhCxAxDJAxCRAhCTAjoRCC4QsQMQxwEQowIQyQMQkwI6AgguOggIABDJAxDLAToFCAAQywE6BggAEBYQHlDVlBxYo-gcYOXqHGgBcAR4A4AB8AeIAeM4kgEPMC44LjQuMS4xLjIuMy4xmAEAoAEBqgEHZ3dzLXdperABCsgBCMABAQ&amp;sclient=psy-ab&amp;ved=2ahUKEwiLsvWG9fnsAhVv8HMBHdluDcAQvS4wAHoECAsQMQ&amp;uact=5&amp;tbs=lf:1,lf_ui:10&amp;tbm=lcl&amp;rflfq=1&amp;num=10&amp;rldimm=18326312919665380008&amp;lqi=Ch5hbGFtYXQgdG9rbyB2YXBlIGpha2FydGEgcHVzYXRIsojbqOyqgIAIWkAKEGFsYW1hdCB0b2tvIHZhcGUQABABEAIYARgCGAMYBCIeYWxhbWF0IHRva28gdmFwZSBqYWthcnRhIHB1c2F0&amp;phdesc=6n4EFUUGkn4&amp;rlst=f#\" jsdata=\"QKGTRc;;CmgLJI\" jsaction=\"rcuQ6b:npT2md;F75qrd\" data-ved=\"2ahUKEwifhr2M9fnsAhVkmeYKHXQyBdQQkAgoADAKegQIGBAW\" style=\"background-color: rgb(255, 255, 255); color: rgb(102, 0, 153); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1); font-family: arial, sans-serif; font-size: 14px;\"><span aria-label=\"Call phone number 0817-155-234\" role=\"link\">0817-155-234</span></a></p>', -6.186509660071721, 106.85080806365454, '128569_9c09d67a-5453-4720-9e62-a182c9c3c52a.jpg', '2020-11-11 07:06:43'),
(8, 'cikini vape', '15, Jl. Cikini V No.16B, RW.5, Cikini, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10330', 30000, 4000000, '<p><span class=\"w8qArf\" style=\"font-weight: bolder; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a class=\"fl\" href=\"https://www.google.com/search?safe=strict&amp;hl=en&amp;sxsrf=ALeKk01aVFW1YChxwkIqqeEun5my6qDVZg:1605078482408&amp;q=cikini+vape+phone&amp;ludocid=9703798891663770671&amp;sa=X&amp;ved=2ahUKEwjh44um9_nsAhUeIbcAHRHPAmQQ6BMwCXoECBMQFQ\" data-ved=\"2ahUKEwjh44um9_nsAhUeIbcAHRHPAmQQ6BMwCXoECBMQFQ\" style=\"color: rgb(26, 13, 171); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\">Phone</a>:&nbsp;</span><span class=\"LrzXr zdqRlf kno-fv\" style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a data-dtype=\"d3ifr\" data-local-attribute=\"d3ph\" jscontroller=\"cSkPLb\" href=\"https://www.google.com/search?safe=strict&amp;hl=en&amp;sxsrf=ALeKk012M1rR9wYfJ8M1ItLzBEZWKkxC7w:1605078474866&amp;source=hp&amp;ei=xo2rX_miMb3Zz7sPgsmWsAs&amp;q=alamat%20toko%20vape%20jakarta%20pusat&amp;oq=&amp;gs_lcp=CgZwc3ktYWIQARgAMgcIIxDqAhAnMgcIIxDqAhAnMgcIIxDqAhAnMgcIIxDqAhAnMgcIIxDqAhAnMgcIIxDqAhAnMgcIIxDqAhAnMgcIIxDqAhAnMgcIIxDqAhAnMgcIIxDqAhAnUABYAGC6GWgBcAB4AYAB9gKIAfYCkgEDMy0xmAEAqgEHZ3dzLXdperABCg&amp;sclient=psy-ab&amp;tbs=lf:1,lf_ui:10&amp;tbm=lcl&amp;rflfq=1&amp;num=10&amp;rldimm=9703798891663770671&amp;lqi=Ch5hbGFtYXQgdG9rbyB2YXBlIGpha2FydGEgcHVzYXRIj92UoZWrgIAIWkAKEGFsYW1hdCB0b2tvIHZhcGUQABABEAIYARgCGAMYBCIeYWxhbWF0IHRva28gdmFwZSBqYWthcnRhIHB1c2F0&amp;phdesc=vASgoSLi09c&amp;ved=2ahUKEwi1xNKi9_nsAhU14nMBHesyBCoQvS4wAXoECAsQPg&amp;rlst=f#\" jsdata=\"QKGTRc;;AXAKL8\" jsaction=\"rcuQ6b:npT2md;F75qrd\" data-ved=\"2ahUKEwjh44um9_nsAhUeIbcAHRHPAmQQkAgoADAJegQIExAW\" style=\"color: rgb(102, 0, 153); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\"><span aria-label=\"Call phone number 0822-9777-7899\" role=\"link\">0822-9777-7899</span></a></span><br></p>', -6.19264344951614, 106.83772404607691, '1400583_3a4dd28b-e15a-4585-a282-6f0982ab6369.jpg', '2020-11-11 07:11:12'),
(9, 'vaping coy', 'Jl. Kartini Raya No.27, RT.13/RW.5, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 40115', 50000, 500000, '<p><span class=\"w8qArf\" style=\"font-weight: bolder; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a class=\"fl\" href=\"https://www.google.com/search?safe=strict&amp;hl=en&amp;sxsrf=ALeKk01wwmAfEU8Kz-QvGxmW0pkXbh6a2A:1605079083468&amp;q=vapingcoy+phone&amp;ludocid=3635755745386451716&amp;sa=X&amp;ved=2ahUKEwjMp97E-fnsAhULOisKHagCC-gQ6BMwB3oECBEQFQ\" data-ved=\"2ahUKEwjMp97E-fnsAhULOisKHagCC-gQ6BMwB3oECBEQFQ\" style=\"color: rgb(26, 13, 171); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\">Phone</a>:&nbsp;</span><span class=\"LrzXr zdqRlf kno-fv\" style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a data-dtype=\"d3ifr\" data-local-attribute=\"d3ph\" jscontroller=\"cSkPLb\" href=\"https://www.google.com/search?safe=strict&amp;sa=X&amp;hl=en&amp;tbs=lf:1,lf_ui:10&amp;tbm=lcl&amp;sxsrf=ALeKk002cDvi56dx3GqvOFVFtX8_2ZieZg:1605079075985&amp;q=alamat+toko+vape+jakarta+pusat&amp;rflfq=1&amp;num=10&amp;ved=2ahUKEwi_7qPB-fnsAhUEXSsKHUnuBgUQjGp6BAgLEFg&amp;biw=1366&amp;bih=578#\" jsdata=\"QKGTRc;;Azqdf8\" jsaction=\"rcuQ6b:npT2md;F75qrd\" data-ved=\"2ahUKEwjMp97E-fnsAhULOisKHagCC-gQkAgoADAHegQIERAW\" style=\"color: rgb(102, 0, 153); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\"><span aria-label=\"Call phone number 0812-8096-6539\" role=\"link\">0812-8096-6539</span></a></span><br></p>', -6.156871638380878, 106.83622752764126, 'download.jpg', '2020-11-11 07:18:15'),
(10, 'gerobak vapor', 'Jl. Kramat Jaya Baru No.328A, RT.9/RW.10, Johar Baru, Kec. Johar Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10560', 50000, 3000000, '<p><span class=\"w8qArf\" style=\"font-weight: bolder; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a class=\"fl\" href=\"https://www.google.com/search?safe=strict&amp;hl=en&amp;sxsrf=ALeKk01EdvXm_lrBeiaPJbsxTvAimMtrNg:1605079214630&amp;q=gerobak+vapor+phone&amp;ludocid=3267185154615286013&amp;sa=X&amp;ved=2ahUKEwjjjaKD-vnsAhX8FLcAHWrFAFsQ6BMwCnoECBYQKQ\" data-ved=\"2ahUKEwjjjaKD-vnsAhX8FLcAHWrFAFsQ6BMwCnoECBYQKQ\" style=\"color: rgb(26, 13, 171); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\">Phone</a>:&nbsp;</span><span class=\"LrzXr zdqRlf kno-fv\" style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a data-dtype=\"d3ifr\" data-local-attribute=\"d3ph\" jscontroller=\"cSkPLb\" href=\"https://www.google.com/search?safe=strict&amp;sa=X&amp;hl=en&amp;tbs=lf:1,lf_ui:10&amp;tbm=lcl&amp;sxsrf=ALeKk002cDvi56dx3GqvOFVFtX8_2ZieZg:1605079075985&amp;q=alamat+toko+vape+jakarta+pusat&amp;rflfq=1&amp;num=10&amp;ved=2ahUKEwi_7qPB-fnsAhUEXSsKHUnuBgUQjGp6BAgLEFg&amp;biw=1366&amp;bih=578#\" jsdata=\"QKGTRc;;A56s7g\" jsaction=\"rcuQ6b:npT2md;F75qrd\" data-ved=\"2ahUKEwjjjaKD-vnsAhX8FLcAHWrFAFsQkAgoADAKegQIFhAq\" style=\"color: rgb(102, 0, 153); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\"><span aria-label=\"Call phone number (021) 21473147\" role=\"link\">(021) 21473147</span></a></span><br></p>', -6.182597072504194, 106.85434536315324, 'download_(1).jpg', '2020-11-11 07:23:31'),
(11, 'A+ vape store', ' Jl. Musi No.30, RT.11/RW.2, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150', 50000, 3000000, '<p><span class=\"w8qArf\" style=\"font-weight: bolder; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a class=\"fl\" href=\"https://www.google.com/search?safe=strict&amp;hl=en&amp;sxsrf=ALeKk02GwxAz6ammyrpkrJqYkmiI8wPvyQ:1605079452821&amp;q=a%2B+vape+shop+phone&amp;ludocid=2713358488600775562&amp;sa=X&amp;ved=2ahUKEwjpqO30-vnsAhU5FbcAHbv1CQ8Q6BMwB3oECBEQFQ\" data-ved=\"2ahUKEwjpqO30-vnsAhU5FbcAHbv1CQ8Q6BMwB3oECBEQFQ\" style=\"color: rgb(26, 13, 171); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\">Phone</a>:&nbsp;</span><span class=\"LrzXr zdqRlf kno-fv\" style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a data-dtype=\"d3ifr\" data-local-attribute=\"d3ph\" jscontroller=\"cSkPLb\" href=\"https://www.google.com/search?safe=strict&amp;sa=X&amp;hl=en&amp;tbs=lf:1,lf_ui:10&amp;tbm=lcl&amp;sxsrf=ALeKk01rwN_saFq86wVQ4-9FKogNNDePjA:1605079443572&amp;q=alamat+toko+vape+jakarta+pusat&amp;rflfq=1&amp;num=10&amp;ved=2ahUKEwil3Mfw-vnsAhUSgOYKHQ12Bn0QjGp6BAgLEFg&amp;biw=1366&amp;bih=578#\" jsdata=\"QKGTRc;;BFRoK0\" jsaction=\"rcuQ6b:npT2md;F75qrd\" data-ved=\"2ahUKEwjpqO30-vnsAhU5FbcAHbv1CQ8QkAgoADAHegQIERAW\" style=\"color: rgb(102, 0, 153); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\"><span aria-label=\"Call phone number 0897-8984-008\" role=\"link\">0897-8984-008</span></a></span><br></p>', -6.1743307827516105, 106.81000906568198, '2017-10-05.jpg', '2020-11-11 07:30:12'),
(12, 'Jakarta Vape Lounge Benhil', 'Jalan Bendungan Hilir, Jl. Bend. Hilir Gg. 3 No.5, RT.11/RW.1, Bend. Hilir, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10210', 50000, 500000, '<p><span class=\"w8qArf\" style=\"font-weight: bolder; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a class=\"fl\" href=\"https://www.google.com/search?safe=strict&amp;hl=en&amp;sxsrf=ALeKk02lHQjj_iIsmN8A9VmECbm8hrrObA:1605079850264&amp;q=jakarta+vape+lounge+benhil+central+jakarta+city+phone&amp;ludocid=12689829812349492220&amp;sa=X&amp;ved=2ahUKEwjTkq-y_PnsAhWab30KHeJkBKAQ6BMwB3oECBEQFQ\" data-ved=\"2ahUKEwjTkq-y_PnsAhWab30KHeJkBKAQ6BMwB3oECBEQFQ\" style=\"color: rgb(26, 13, 171); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\">Phone</a>:&nbsp;</span><span class=\"LrzXr zdqRlf kno-fv\" style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a data-dtype=\"d3ifr\" data-local-attribute=\"d3ph\" jscontroller=\"cSkPLb\" href=\"https://www.google.com/search?safe=strict&amp;sa=X&amp;hl=en&amp;tbs=lf:1,lf_ui:10&amp;tbm=lcl&amp;sxsrf=ALeKk01rwN_saFq86wVQ4-9FKogNNDePjA:1605079443572&amp;q=alamat+toko+vape+jakarta+pusat&amp;rflfq=1&amp;num=10&amp;ved=2ahUKEwil3Mfw-vnsAhUSgOYKHQ12Bn0QjGp6BAgLEFg&amp;biw=1366&amp;bih=578#\" jsdata=\"QKGTRc;;BYOh84\" jsaction=\"rcuQ6b:npT2md;F75qrd\" data-ved=\"2ahUKEwjTkq-y_PnsAhWab30KHeJkBKAQkAgoADAHegQIERAW\" style=\"color: rgb(102, 0, 153); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\"><span aria-label=\"Call phone number 0812-9628-7422\" role=\"link\">0812-9628-7422</span></a></span><br></p>', -6.214162628245461, 106.81314406673715, 'unnamed.jpg', '2020-11-11 07:34:22'),
(13, 'vape groove', 'Jl. Rawasari Timur I No.29, RT.6/RW.2, Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510', 50000, 1000000, '<p><span class=\"w8qArf\" style=\"font-weight: bolder; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a class=\"fl\" href=\"https://www.google.com/search?safe=strict&amp;hl=en&amp;sxsrf=ALeKk03XUycQaQ8lRjPM5qznkb8bWrX_2g:1605080105868&amp;q=vape+groove+phone&amp;ludocid=16523090353470396151&amp;sa=X&amp;ved=2ahUKEwiZv6Gs_fnsAhXafn0KHdh3BlcQ6BMwCHoECBIQFQ\" data-ved=\"2ahUKEwiZv6Gs_fnsAhXafn0KHdh3BlcQ6BMwCHoECBIQFQ\" style=\"color: rgb(26, 13, 171); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\">Phone</a>:&nbsp;</span><span class=\"LrzXr zdqRlf kno-fv\" style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a data-dtype=\"d3ifr\" data-local-attribute=\"d3ph\" jscontroller=\"cSkPLb\" href=\"https://www.google.com/search?safe=strict&amp;sa=X&amp;hl=en&amp;tbs=lf:1,lf_ui:10&amp;tbm=lcl&amp;sxsrf=ALeKk01rwN_saFq86wVQ4-9FKogNNDePjA:1605079443572&amp;q=alamat+toko+vape+jakarta+pusat&amp;rflfq=1&amp;num=10&amp;ved=2ahUKEwil3Mfw-vnsAhUSgOYKHQ12Bn0QjGp6BAgLEFg&amp;biw=1366&amp;bih=578#\" jsdata=\"QKGTRc;;BkakzY\" jsaction=\"rcuQ6b:npT2md;F75qrd\" data-ved=\"2ahUKEwiZv6Gs_fnsAhXafn0KHdh3BlcQkAgoADAIegQIEhAW\" style=\"color: rgb(102, 0, 153); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\"><span aria-label=\"Call phone number 0878-8447-1924\" role=\"link\">0878-8447-1924</span></a></span><br></p>', -6.183361297425691, 106.8739229794063, 'download_(2).jpg', '2020-11-11 07:39:29'),
(14, 'movi ', 'Jl. Jaksa No.4, RW.2, Kb. Sirih, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10340', 50000, 4000000, '<p><span class=\"w8qArf\" style=\"font-weight: bolder; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a class=\"fl\" href=\"https://www.google.com/search?safe=strict&amp;hl=en&amp;sxsrf=ALeKk03AXYGxfLFmQ6NLlo7xMILiwmJmZw:1605080761251&amp;q=movi+-+ministry+of+vape+indonesia+phone&amp;ludocid=16675753562353894494&amp;sa=X&amp;ved=2ahUKEwiYx-Hk__nsAhVNAHIKHdS7A8YQ6BMwDHoECBcQFQ\" data-ved=\"2ahUKEwiYx-Hk__nsAhVNAHIKHdS7A8YQ6BMwDHoECBcQFQ\" style=\"color: rgb(26, 13, 171); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\">Phone</a>:&nbsp;</span><span class=\"LrzXr zdqRlf kno-fv\" style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\"><a data-dtype=\"d3ifr\" data-local-attribute=\"d3ph\" jscontroller=\"cSkPLb\" href=\"https://www.google.com/search?safe=strict&amp;sa=X&amp;hl=en&amp;tbs=lf:1,lf_ui:10&amp;tbm=lcl&amp;sxsrf=ALeKk01rwN_saFq86wVQ4-9FKogNNDePjA:1605079443572&amp;q=alamat+toko+vape+jakarta+pusat&amp;rflfq=1&amp;num=10&amp;ved=2ahUKEwil3Mfw-vnsAhUSgOYKHQ12Bn0QjGp6BAgLEFg&amp;biw=1366&amp;bih=578#\" jsdata=\"QKGTRc;;CDqotc\" jsaction=\"rcuQ6b:npT2md;F75qrd\" data-ved=\"2ahUKEwiYx-Hk__nsAhVNAHIKHdS7A8YQkAgoADAMegQIFxAW\" style=\"color: rgb(102, 0, 153); -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);\"><span aria-label=\"Call phone number 0899-9903-030\" role=\"link\">0899-9903-030</span></a></span><br></p>', -6.182974125811711, 106.83042001208372, '1250642_02662b25-8772-41a2-ac5a-221940003780.jpg', '2020-11-11 07:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` int(11) NOT NULL,
  `idJenis` int(11) NOT NULL,
  `idLink` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `idJenis`, `idLink`, `title`, `description`, `dateCreated`, `status`) VALUES
(5, 2, 3, 'Users has review', 'Users has review', '2020-10-31 16:14:15', '0'),
(6, 1, 3, 'User has register', 'new user has register', '2020-10-31 10:34:05', '0'),
(7, 1, 4, 'User has register', 'new user has register', '2020-11-04 07:44:00', '0'),
(8, 1, 5, 'User has register', 'new user has register', '2020-11-04 07:47:25', '0'),
(9, 1, 6, 'User has register', 'new user has register', '2020-11-04 07:50:46', '0'),
(10, 1, 7, 'User has register', 'new user has register', '2020-11-04 07:57:20', '0'),
(11, 1, 8, 'User has register', 'new user has register', '2020-11-04 07:59:03', '0'),
(12, 1, 9, 'User has register', 'new user has register', '2020-11-04 08:16:53', '0'),
(13, 2, 4, 'Users has review', 'Users has review', '2020-11-04 09:22:41', '0'),
(14, 2, 5, 'Users has review', 'Users has review', '2020-11-04 09:23:00', '0'),
(15, 2, 6, 'Users has review', 'Users has review', '2020-11-04 13:57:23', '0'),
(16, 2, 7, 'Users has review', 'Users has review', '2020-11-04 14:37:11', '0'),
(17, 1, 10, 'User has register', 'new user has register', '2020-11-04 14:43:16', '0'),
(18, 2, 8, 'Users has review', 'Users has review', '2020-11-04 14:52:22', '0'),
(19, 1, 11, 'User has register', 'new user has register', '2020-11-05 01:24:45', '0'),
(20, 1, 12, 'User has register', 'new user has register', '2020-11-05 01:37:11', '0'),
(21, 1, 13, 'User has register', 'new user has register', '2020-11-05 01:44:20', '0'),
(22, 2, 9, 'Users has review', 'Users has review', '2020-11-05 04:22:47', '0'),
(23, 2, 10, 'Users has review', 'Users has review', '2020-11-05 05:59:42', '0'),
(24, 1, 14, 'User has register', 'new user has register', '2020-11-11 12:11:12', '0'),
(25, 2, 11, 'Users has review', 'Users has review', '2020-11-11 12:19:53', '0'),
(26, 1, 15, 'User has register', 'new user has register', '2020-11-11 12:29:58', '0'),
(27, 1, 16, 'User has register', 'new user has register', '2020-11-11 12:35:40', '0'),
(28, 1, 17, 'User has register', 'new user has register', '2020-11-11 13:06:36', '0'),
(29, 1, 18, 'User has register', 'new user has register', '2020-11-11 13:06:36', '0'),
(30, 1, 19, 'User has register', 'new user has register', '2020-11-11 14:23:42', '0'),
(31, 1, 20, 'User has register', 'new user has register', '2020-11-11 14:28:17', '0'),
(32, 1, 21, 'User has register', 'new user has register', '2020-11-11 14:28:17', '0'),
(33, 2, 1, 'Users has review', 'Users has review', '2020-11-17 04:10:14', '0'),
(34, 2, 2, 'Users has review', 'Users has review', '2020-11-17 04:10:27', '0'),
(35, 2, 3, 'Users has review', 'Users has review', '2020-11-17 04:18:27', '0');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `foto` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `foto`, `link`, `dateCreated`, `idUser`) VALUES
(1, 'Panduan Pod System Untuk Pemula – Mulai Dari Sini!', '<h4 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 25.5px; font-family: Arial, Helvetica, sans-serif; font-size: 17px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">CARA MEMILIH POD SYSTEM YANG TEPAT</strong></h4><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Vape Pod Sistem sangat populer saat ini. Mereka menawarkan penyerapan nikotin yang cepat dan sangat mudah untuk dibawa kemana-mana. Tetapi dengan begitu banyak model di pasaran, sering kali sulit untuk menentukan pikiran Kalian pada Pod tertentu. Berikut kami mencoba membantu kalian memilih POD yang tepat untuk kebutuhan.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">OPEN SYSTEM VS CLOSED SYSTEM VAPES</strong></p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Ada 2 jenis Pod beredar di pasaran, Open sistem dan Close System. Open Pod Sistem memungkinkan pod diisi ulang dengan e-liquid sementara Close System yang tertutup sudah diisi sebelumnya dan tidak dapat diisi ulang.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">&nbsp;</strong></p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Contoh Open Pod System :</strong></p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Vladdin , Smok Novo , Smok Nord , Smok Infinix , Jusfog Minifit , Justfog C601, Aspire Breeze , Shaan Lite , Joytech Teros, , dll</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Contoh Closed System :</strong>&nbsp;JUUL , NCIG</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><em style=\"margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">HAL-HAL LAIN YANG ANDA HARUS MEMPERTIMBANGKAN:</em></p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Kapasitas Battery</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Ketahuilah kapasitas battery Pod yang ingin kalian cari, agar kalian dapat menggunakan Pod lebih lama. Hal ini juga sangat penting di perhatikan untuk kalian yang ingin berhenti merokok memulai dengan Vape Pod, agar dapat memenuhi kebutuhan vaping dalam sehari.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Feeling Inhale atau isapan</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Setiap Pod memiliki feeling inhale yang berbeda beda, ada yang loose / lebih gampang &amp; ada yang lebih padat isapannya seperti menghisap rokok. Pastikan kalian mencobanya lebih dahulu tester yang tersedia di toko Vape. Memastikan kalian nyaman nantinya menggunakan.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Gunakan level Nicotine yang tepat</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">ada 2 pilihan jenis nicotine : Free base Nicotine &amp; Salt Nicotine. Free base memberikan kalian sensasi Throat Hit di awal sedotan / inhale, sedangkan Salt Nicotine lebih rendah throat hit nya , tetapi penyerapan nicotine ke dalam tubuh lebih cepat. Menggunakan level nicotine yang tepat membantu kalian untuk lebih jarang menggunakan Pod,dan tentunya battery daya tahannya lebih lama.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Garansi</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Mengapa garansi itu penting ? untuk memastikan kalian terlindungi dari kerusakan.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Budget</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Siapkan budget terlebih dahulu. Pada dasarnya semua POD sistem pengoprasian nya sama, Yang membedakan adalah Fitur yang terdapat di dalam nya.Seperti display atau indicator battery , Otomatis / Manual inhale (isapan) &amp; jenis coil yang di pakai.</p>', 'memilih_pod.jpg', '', '2020-10-31 15:41:56', 1),
(2, '7 Tips Memilih Vape yang Tepat untuk Pemula', '<ol><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Ketahui perbedaan jenis <b>vape</b>. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Sesuaikan dengan bujet. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Baca dulu review-nya. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Ketahui liquid dan kegunaannya. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Pilih baterai yang cocok. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Pilih charger yang digunakan dengan benar. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Mengetahui OHM/Resistance.</li></ol>', 'meimilihvape.jpg', '', '2020-10-31 15:46:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMerchant` int(11) NOT NULL,
  `rating` double NOT NULL,
  `review` text NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `idUser`, `idMerchant`, `rating`, `review`, `dateCreated`) VALUES
(1, 13, 12, 3, 'bagus kak', '2020-11-17 04:10:14'),
(2, 13, 13, 5, 'bagus banget kak', '2020-11-17 04:10:27'),
(3, 16, 13, 2, 'nice', '2020-11-17 04:18:27');

--
-- Triggers `rating`
--
DELIMITER $$
CREATE TRIGGER `NOTIF_RATING` AFTER INSERT ON `rating` FOR EACH ROW INSERT INTO notifikasi(idJenis,idLink,title,description) VALUES(2,NEW.id,'Users has review','Users has review')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ratingpost`
--

CREATE TABLE `ratingpost` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idPost` int(11) NOT NULL,
  `rating` double NOT NULL,
  `comment` text NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratingpost`
--

INSERT INTO `ratingpost` (`id`, `idUser`, `idPost`, `rating`, `comment`, `dateCreated`) VALUES
(16, 13, 1, 5, 'hs\n', '2020-11-15 07:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `savedpost`
--

CREATE TABLE `savedpost` (
  `id` int(11) NOT NULL,
  `idPost` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `phone` char(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `dateCreated`) VALUES
(3, 'Resti Meliani', 'null', 'resti.meliani1998@gmail.com', '2020-10-31 10:34:05'),
(10, 'Andi', '6281808863166', 'andi@gmail.com', '2020-11-04 14:43:16'),
(13, 'Rani Indriana', 'null', 'raniindriana91@gmail.com', '2020-11-05 01:37:11'),
(14, 'Wilgan', 'null', 'willysetiawan7@gmail.com', '2020-11-11 12:11:12'),
(15, 'guk gong', 'null', 'gukgong0@gmail.com', '2020-11-11 12:29:58'),
(16, 'Herry Wijaya', 'null', 'herry.drwijaya@gmail.com', '2020-11-11 12:35:40'),
(17, 'amelia', '081212139616', 'ameliafitri780@gmail.com', '2020-11-11 13:06:36'),
(19, 'putri juwita ', '6287832443259', 'putri210697@gmail.com', '2020-11-11 14:23:42');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `NOTIF_USERS` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO notifikasi(idJenis,idLink,title,description) VALUES(1,NEW.id,'User has register','new user has register')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `visitorpost`
--

CREATE TABLE `visitorpost` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `idPost` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitorpost`
--

INSERT INTO `visitorpost` (`id`, `ip`, `idPost`, `dateCreated`) VALUES
(1, '36.79.248.14', 0, '2020-11-15 07:29:28'),
(2, '36.79.248.14', 2, '2020-11-15 07:31:17'),
(3, '36.79.248.14', 1, '2020-11-15 07:31:24'),
(4, '36.79.248.122', 1, '2020-11-16 02:02:25'),
(5, '36.79.248.122', 2, '2020-11-16 02:02:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idMerchant` (`idMerchant`);

--
-- Indexes for table `ratingpost`
--
ALTER TABLE `ratingpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idPost` (`idPost`);

--
-- Indexes for table `savedpost`
--
ALTER TABLE `savedpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitorpost`
--
ALTER TABLE `visitorpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratingpost`
--
ALTER TABLE `ratingpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `savedpost`
--
ALTER TABLE `savedpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `visitorpost`
--
ALTER TABLE `visitorpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
