-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 09:58 AM
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
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `Id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Penulis` varchar(50) NOT NULL,
  `Penerbit` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Tanggal_terbit` date NOT NULL,
  `Sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`Id`, `Judul`, `Penulis`, `Penerbit`, `ISBN`, `Tanggal_terbit`, `Sinopsis`) VALUES
(1, 'Di Tanah Lada', 'Ziggy Zesyazeoviennazabrizkie', 'Gramedia Pustaka Utama', '9786020318967', '2021-04-07', 'Namanya Salva. Panggilannya Ava. Namun papanya memanggil dia Saliva atau ludah karena menganggapnya tidak berguna. Ava sekeluarga pindah ke Rusun Nero setelah Kakek Kia meninggal. Kakek Kia, ayahnya Papa, pernah memberi Ava kamus sebagai hadiah ulang tahun yang ketiga. Sejak itu Ava menjadi anak yang pintar berbahasa Indonesia. Sayangnya, kebanyakan orang dewasa lebih menganggap penting anak yang pintar berbahasa Inggris. Setelah pindah ke Rusun Nero, Ava bertemu dengan anak laki-laki bernama P. Iya, namanya hanya terdiri dari satu huruf P. Dari pertemuan itulah, petualangan Ava dan P bermula hingga sampai pada akhir yang mengejutkan.'),
(2, 'Laut Bercerita', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', '9786024246945', '2017-10-23', 'Jakarta, Maret 1998 Di sebuah senja, di sebuah rumah susun di Jakarta, mahasiswa bernama Biru Laut disergap empat lelaki tak dikenal. Bersama kawan-kawannya, Daniel Tumbuan, Sunu Dyantoro, Alex Perazon, dia dibawa ke sebuah tempat yang tak dikenal. Berbulan-bulan mereka disekap, diinterogasi, dipukul, ditendang, digantung, dan disetrum agara bersedia menjawab satu pertanyaan penting: siapakah yang berdiri di balik gerakan aktivis dan mahasiswa saat itu. Jakarta, Juni 1998 Keluarga Arya Wibisono, seperti biasa, pada hari Minggu sore memasak bersama, menyediakan makanan kesukaan Biru Laut. Sang ayah akan meletakkan satu piring untuk dirinya, satu piring untuk sang ibu, Biru Laut, dan satu piring untuk si bungsu Asmara Jati. Mereka duduk menanti dan menanti. Tapi Biru Laut tak kunjung muncul. Jakarta, 2000 Asmara Jati, adik Biru Laut, beserta Tim Komisi Orang Hilang yang dipimpin Aswin Pradana mencoba mencari jejak mereka yang hilang serta merekam dan mempelajari testimoni mereka yang kembali. Anjani, kekasih Laut, para orangtua dan istri aktivis yang hilang menuntut kejelasan tentang anggota keluarga mereka. Sementara Biru Laut, dari dasar laut yang sunyi bercerita kepada kita, kepada dunia tentang apa yang terjadi pada dirinya dan kawan-kawannya. Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.'),
(3, 'As Long As the Lemon Trees Grow', 'Zoulfa Katouh', 'Mizan Publishing', '9781526648549', '2023-05-16', 'Akibat perang Suriah, Salama kehilangan orangtua, dan Hamza, kakaknya ditawan, entah masih hidup atau sudah mati. Kini, Salama harus menjaga Layla, kakak iparnya yang sedang hamil. Hamza berpesan agar Salama menjaga Layla dan calon bayinya. Satu-satunya cara menjaga Layla dari perang adalah mengungsi ke Eropa, tapi setiap kali melihat para korban perang, rasa bersalah menikam Salama. Haruskah dia pergi dari Suriah, ketika bangsanya bergelimpangan akibat perang? Keputusasaan dan ketakutan bercampur hingga mewujud dalam sosok pria bermata dingin, Khaft, yang mendorong Salama untuk pergi. Namun, Salama bertemu Kenan, pemuda bermata hijau dengan semangat membara membela negara. Kini, Salama harus memilih antara tetap tinggal untuk negaranya, ataukah pergi demi memenuhi janjinya kepada Hamza.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `ISBN` (`ISBN`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
