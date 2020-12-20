-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 10:46 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `nip`, `jk`, `alamat`, `email`, `no_tlp`, `foto`, `password`) VALUES
('Prayoga Eka Chandra,S.T', '10514001', 'Laki - Laki', 'bandung', 'yoga@gmail.com', '08987057055', 'foto.jpg', '123');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` varchar(50) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `tgl_agenda` date DEFAULT NULL,
  `agenda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nis`, `tgl_agenda`, `agenda`) VALUES
('AGN0001', '10514009', '2018-12-15', '<p>Undang-undang Sisdiknas No. 20 Tahun 2003 telah mengatakan bahwa Pendidikan nasional berfungsi mengembangkan kemampuan dan membentuk watak serta peradaban bangsa yang bermartabat dalam rangka mencerdaskan kehidupan bangsa, bertujuan untuk berkembangnya potensi peserta didik agar menjadi manusia yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, dan menjadi warga negara yang demokratis serta bertanggung jawab” (Pasal 3 UU RI No 20/ 2003).\nSekolah Menengah Kejuruan adalah salah satu jenjang pendidikan menengah dengan kekhususan mempersiapkan lulusannya untuk siap bekerja. Pendidikan kejuruan mempunyai arti yang bervariasi namun dapat dilihat suatu benang merahnya. Menurut Evans dalam Djojonegoro (1999) mendefinisikan bahwa pendidikan kejuruan adalah bagian dari sistem pendidikan yang mempersiapkan seseorang agar lebih mampu bekerja pada suatu kelompok pekerjaan atau satu bidang pekerjaan daripada bidang-bidang pekerjaan lainnya. Dengan pengertian bahwa setiap bidang studi adalah pendidikan kejuruan sepanjang bidang studi tersebut dipelajari lebih mendalam dan kedalaman tersebut dimaksudkan sebagai bekal memasuki dunia kerja.\nMengacu pada pada isi Undang-Undang Sistem Pendidikan Nasional  No. 20 Tahun 2003 pasal 3 mengenai tujuan pendidikan nasional dan penjelasan pasal 15 yang menyebutkan bahwa pendidikan kejuruan merupakan pendidikan menengah yang mempersiapkan peserta didik terutama untuk bekerja di bidang tertentu.\nPendidikan kejuruan adalah pendidikan yang mempersiapkan peserta didik untuk dapat bekerja dalam bidang tertentu. Pengertian ini mengandung pesan bahwa setiap institusi yang menyelenggarakan pendidikan keJuruan harus berkomitmen menjadikan tamatannya mampu bekerja dalam bidang tertentu (Depdikbud, 1995).</p>'),
('AGN002', '10514009', '2018-12-16', '<p>ini adalah tanggal 16</p>'),
('AGN003', '10514009', '2018-12-17', '<p><div class=\"MsoNormal\" style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; line-height: 19.8px; margin-left: 1cm; text-indent: 1cm; text-align: justify;\"><span style=\"font-family: Verdana, sans-serif;\"><span style=\"font-size: x-small;\"><span lang=\"IN\">Undang-undang Sisdiknas No. 20 Tahun 2003 telah mengatakan bahwa Pendidikan nasional berfungsi mengembangkan kemampuan dan membentuk watak serta peradaban bangsa yang bermartabat dalam rangka mencerdaskan kehidupan bangsa, bertujuan untuk berkembangnya potensi peserta didik agar menjadi manusia yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, dan menjadi warga negara yang demokratis serta bertanggung jawab&rdquo; (Pasal 3 UU RI No 20/ 2003).</span></span></span></div>\r\n<div style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; text-align: justify;\">&nbsp;</div>\r\n<div class=\"MsoNormal\" style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; line-height: 19.8px; margin-left: 1cm; text-indent: 1cm; text-align: justify;\"><span style=\"font-family: Verdana, sans-serif;\"><span style=\"font-size: x-small;\"><span lang=\"IN\">Sekolah Menengah Kejuruan adalah salah satu jenjang pendidikan menengah dengan kekhususan mempersiapkan lulusannya untuk siap bekerja. Pendidikan kejuruan mempunyai arti yang bervariasi namun dapat dilihat suatu benang merahnya. Menurut Evans dalam Djojonegoro (1999) mendefinisikan bahwa pendidikan kejuruan adalah bagian dari sistem pendidikan yang mempersiapkan seseorang agar lebih mampu bekerja pada suatu kelompok pekerjaan atau satu bidang pekerjaan daripada bidang-bidang pekerjaan lainnya. Dengan pengertian bahwa setiap bidang studi adalah pendidikan kejuruan sepanjang bidang studi tersebut dipelajari lebih mendalam dan kedalaman tersebut dimaksudkan sebagai bekal memasuki dunia kerja.</span></span></span></div>\r\n<div style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; text-align: justify;\">&nbsp;</div>\r\n<div class=\"MsoNormal\" style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; line-height: 19.8px; margin-left: 1cm; text-indent: 1cm; text-align: justify;\"><span style=\"font-family: Verdana, sans-serif;\"><span style=\"font-size: x-small;\"><span lang=\"IN\">Mengacu pada pada isi Undang-Undang Sistem Pendidikan Nasional&nbsp; No. 20 Tahun 2003 pasal 3 mengenai tujuan pendidikan nasional dan penjelasan pasal 15 yang menyebutkan bahwa pendidikan kejuruan merupakan pendidikan menengah yang mempersiapkan peserta didik terutama untuk bekerja di bidang tertentu.</span></span></span></div>\r\n<div style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; text-align: justify;\">&nbsp;</div>\r\n<div class=\"MsoNormal\" style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; line-height: 19.8px; margin-left: 1cm; text-indent: 1cm; text-align: justify;\"><span style=\"font-family: Verdana, sans-serif;\"><span style=\"font-size: x-small;\"><span lang=\"IN\">Pendidikan kejuruan adalah pendidikan yang mempersiapkan peserta didik untuk dapat bekerja dalam bidang tertentu. Pengertian ini mengandung pesan bahwa setiap institusi yang menyelenggarakan pendidikan keJuruan harus berkomitmen menjadikan tamatannya mampu bekerja dalam bidang tertentu (Depdikbud, 1995).</span></span></span></div>\r\n<div style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; text-align: justify;\">&nbsp;</div>\r\n<div class=\"MsoNormal\" style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; line-height: 19.8px; margin-left: 1cm; text-indent: 1cm; text-align: justify;\"><span style=\"font-family: Verdana, sans-serif;\"><span style=\"font-size: x-small;\"><span lang=\"IN\">Berdasarkan definisi di atas, maka sekolah menengah kejuruan sebagai sub sistim pendidikan nasional seyogyanya mengutamakan mempersiapkan peserta didiknya untuk mampu memilih karir, memasuki lapangan kerja, berkompetisi, dan mengembangkan dirinya dengan sukses di lapangan kerja yang cepat berubah dan berkembang.</span></span></span></div>\r\n<div style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; text-align: justify;\">&nbsp;</div>\r\n<div class=\"MsoNormal\" style=\"color: #222222; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.2px; line-height: 19.8px; margin-left: 1cm; text-indent: 1cm; text-align: justify;\"><span style=\"font-family: Verdana, sans-serif;\"><span style=\"font-size: x-small;\"><span lang=\"IN\">&nbsp;&nbsp;&nbsp;&nbsp; Tercapai tidaknya tujuan di atas sangat tergantung pada masukan dan sejumlah variabel dalam proses pendidikan. Salah satu variabel dalam proses pendidikan yang menentukan ketercapaian&nbsp; tujuan SMK adalah kerja sama antara SMK dengan dunia usaha dan dunia pendidikan tinggi (Depdikbud, 1995). Semakin erat hubungan antara SMK dengan dunia pendidikan tinggi, logikanya semakin baik kualitas tamatannya, yang berarti kualitas tamatan dapat ditingkatkan karena di dunia pendidikan tinggi, ilmu dan teknologi akan berkembang.</span></span></span></div></p>'),
('AGN004', '10514105', '2018-12-20', '<p><p>isi</p></p>'),
('AGN005', '10514009', '2019-01-07', '<p><p>ffff</p></p>'),
('AGN006', '10514009', '2019-01-08', '<p><p>SEKARANG</p></p>'),
('AGN007', '10514009', '2019-01-11', '<p><p>aa</p></p>');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_akhir`
--

CREATE TABLE `nilai_akhir` (
  `id_na` varchar(15) NOT NULL,
  `id_prakerin` varchar(15) NOT NULL,
  `id_np` varchar(15) NOT NULL,
  `id_nl` varchar(15) NOT NULL,
  `id_ns` varchar(15) NOT NULL,
  `nilai_akhir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_akhir`
--

INSERT INTO `nilai_akhir` (`id_na`, `id_prakerin`, `id_np`, `id_nl`, `id_ns`, `nilai_akhir`) VALUES
('NA001', 'PRA002', 'NP002', 'NL002', 'NS002', 84),
('NA002', 'PRA003', 'NP003', 'NL003', 'NS003', 86);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_laporan`
--

CREATE TABLE `nilai_laporan` (
  `id_nl` varchar(15) NOT NULL,
  `id_prakerin` varchar(20) DEFAULT NULL,
  `id_penguji` varchar(20) DEFAULT NULL,
  `nilaiA` int(11) NOT NULL,
  `n_adaftasi` int(3) NOT NULL,
  `n_aplikasi` int(3) NOT NULL,
  `n_implementasi` int(11) NOT NULL,
  `rata_rataB` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_laporan`
--

INSERT INTO `nilai_laporan` (`id_nl`, `id_prakerin`, `id_penguji`, `nilaiA`, `n_adaftasi`, `n_aplikasi`, `n_implementasi`, `rata_rataB`) VALUES
('NL001', 'PRA001', 'PE_001', 77, 77, 77, 77, 77),
('NL002', 'PRA002', 'PE_001', 88, 70, 70, 70, 70),
('NL003', 'PRA003', 'PE_001', 80, 70, 80, 90, 80);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_perusahaan`
--

CREATE TABLE `nilai_perusahaan` (
  `id_np` varchar(15) NOT NULL,
  `id_prakerin` varchar(20) NOT NULL,
  `unit_kerja` varchar(25) NOT NULL,
  `p1` varchar(20) NOT NULL,
  `p2` varchar(20) NOT NULL,
  `p3` varchar(20) NOT NULL,
  `p4` varchar(20) NOT NULL,
  `p5` varchar(20) NOT NULL,
  `p6` varchar(20) NOT NULL,
  `nilaiP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_perusahaan`
--

INSERT INTO `nilai_perusahaan` (`id_np`, `id_prakerin`, `unit_kerja`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `nilaiP`) VALUES
('NP002', 'PRA002', 'Sekertaris', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 90),
('NP003', 'PRA003', 'Sekertaris', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 90);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_sidang`
--

CREATE TABLE `nilai_sidang` (
  `id_ns` varchar(15) NOT NULL,
  `id_prakerin` varchar(20) NOT NULL,
  `id_penguji` varchar(15) DEFAULT NULL,
  `n_penampilan` int(10) NOT NULL,
  `n_penyampaian` int(10) NOT NULL,
  `n_penguasaan` int(10) NOT NULL,
  `n_menjawab` int(10) NOT NULL,
  `rata_rataC` int(10) DEFAULT NULL,
  `rata_rataD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_sidang`
--

INSERT INTO `nilai_sidang` (`id_ns`, `id_prakerin`, `id_penguji`, `n_penampilan`, `n_penyampaian`, `n_penguasaan`, `n_menjawab`, `rata_rataC`, `rata_rataD`) VALUES
('NS002', 'PRA002', 'PE_001', 70, 70, 70, 70, 70, 70),
('NS003', 'PRA003', 'PE_001', 80, 75, 80, 90, 78, 85);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` varchar(20) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `jurusan` varchar(25) DEFAULT NULL,
  `kuota_tersedia` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `no_telp`, `alamat_perusahaan`, `jurusan`, `kuota_tersedia`) VALUES
('PRS001', 'Bank BNI', '022548888', 'Bandung', 'Akuntansi', 4),
('PRS002', 'software house', '0898705555', 'Bandung', 'Akuntansi', 3),
('PRS003', 'Bank BTN', '0898705555', 'Bandung', 'Akuntansi', 4),
('PRS004', 'Javan Cipta Solusi PT', '08987057055', 'Bandung', 'Rekayasa Perangkat Lunak', 3),
('PRS005', 'PT Citra Retailindo', '08987057055', 'Bandung', 'Rekayasa Perangkat Lunak', 4),
('PRS006', 'PT. ARTE KREASI INDONESIA (Peter&Co)', '08987057055', 'Bandung', 'Desain Komunikasi Visual', 4),
('PRS007', 'Trackerindo Anugerah Sejahtera CV', '08987057055', 'Cimahi', 'Desain Komunikasi Visual', 3),
('PRS008', 'Octagon Studio(3D Animator', '08987057055', 'Bandung', 'Animasi', 2),
('PRS009', 'Team Azurite(Junior Game Programmer)', '08987057055', 'Bandung', 'Animasi', 1),
('PRS010', 'PT RF Berjangka Wisma bumiputera', '08987057055', 'Bandung', 'Pemasaran', 2),
('PRS011', 'Gayana Advertise', '08987057055', 'Bandung', 'Pemasaran', 2);

-- --------------------------------------------------------

--
-- Table structure for table `p_prakerin`
--

CREATE TABLE `p_prakerin` (
  `id_prakerin` varchar(15) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `id_perusahaan` varchar(15) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_prakerin`
--

INSERT INTO `p_prakerin` (`id_prakerin`, `nis`, `id_perusahaan`, `status`) VALUES
('PRA001', '10514009', 'PRS001', 'DITERIMA'),
('PRA002', '10514105', 'PRS001', 'PENDING'),
('PRA003', '10514036', 'PRS002', 'DITERIMA'),
('PRA004', '161710070129', 'PRS004', 'DITERIMA');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_daftar`
--

CREATE TABLE `siswa_daftar` (
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(15) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `no_hp` varchar(17) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_ajaran` varchar(4) DEFAULT NULL,
  `sr` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `password` varchar(15) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `terverifikasi` varchar(5) DEFAULT NULL,
  `kodepos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_daftar`
--

INSERT INTO `siswa_daftar` (`nis`, `nama_siswa`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `kelas`, `jurusan`, `no_hp`, `alamat`, `tahun_ajaran`, `sr`, `url`, `password`, `foto`, `terverifikasi`, `kodepos`) VALUES
('10514009', 'MOCHAMAD BAIDURI', 'Laki - Laki', 'BANDUNG', '1996-04-15', 'ISLAM', 'AK-2', 'Akuntansi', '08987057055', 'BANDUNG INDAH PERMAI', '2017', '', '../../sr/', '12345', 'foto 3x4.jpg', 'Ya', 0),
('10514036', 'MOCHAMAD IKHSAN', 'Laki - Laki', 'Bandung', '1996-03-14', 'Islam', 'AK-2', 'Akuntansi', '0895331097303', 'Gg. H. Kurdi 1/14 Bandung', '2017', '10514035.rar', '../../sr/Doc - 30-10-2018 - 22.11.jpg', 'hey monster', 'IMG_9785.JPG', 'Ya', 0),
('10514105', 'IQBAL BHASTIAR', 'Laki - Laki', 'BANDUNG', '2018-12-19', 'islam', 'XI RPL 3', 'Rekayasa Perangkat Lunak', '08987057055', 'bandung', '2017', '10514105.rar', '../../sr/BPSDMP KOMINFO BANDUNG.rar', '123', 'bay.jpg', 'Tidak', 0),
('161710070015', 'ARIA WISUDANA', 'Laki - Laki', 'Bandung', '2019-05-10', 'islam', 'XI RPL 3', 'Rekayasa Perangkat Lunak', '08987057055', 'Bandung', '2017', 'Belum Upload', 'Belum Upload', '123', 'belum waktunya input nilai.jpg', 'Ya', 0),
('161710070017', 'ARY ICHSAN HILMAWAN', 'Laki - Laki', 'Bandung', '2019-05-08', 'islam', 'XI RPL 3', 'Rekayasa Perangkat Lunak', '08987057055', 'bandung', '2017', 'Belum Upload', 'Belum Upload', '123', '', NULL, 12345),
('161710070021', 'BAYU NUGRAHA PRATAMA', 'Laki - Laki', 'Bandung', '2019-05-11', 'Kristen', 'XI RPL 3', 'Rekayasa Perangkat Lunak', '0999', 'Bandung', '2017', 'Belum Upload', 'Belum Upload', '123', 'belum waktunya input nilai.jpg', NULL, 123),
('161710070129', 'ANTO WIDIANTO', 'Laki - Laki', 'Bandung', '2019-01-02', 'islam', 'XI RPL 3', 'Rekayasa Perangkat Lunak', '08987057055', 'bandung', '2017', 'ABSTRAK OKE.docx', '../../sr/ABSTRAK OKE.docx', '123', 'IMG_1166.JPG', 'Ya', 0),
('161710070132', 'AHMAD YUUNUS', 'Laki - Laki', 'Bandung', '2019-01-23', 'Islam', 'XI RPL 3', 'Rekayasa Perangkat Lunak', '08987057055', 'bandung', '2017', 'Belum Upload', 'Belum Upload', '123', 'IMG_1191.JPG', 'Ya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_siswa`
--

CREATE TABLE `verifikasi_siswa` (
  `nama` varchar(30) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tahun_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifikasi_siswa`
--

INSERT INTO `verifikasi_siswa` (`nama`, `nis`, `jurusan`, `kelas`, `tahun_masuk`) VALUES
('MOCHAMAD BAIDURI', '10514009', 'Akuntansi', '', '2016'),
('MOCHAMAD IKHSAN', '10514036', 'Akuntansi', '', '2016'),
('IQBAL BHASTIAR', '10514105', 'Akuntansi', '', '2016'),
('ARIA WISUDANA', '161710070015', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('ARY ICHSAN HILMAWAN', '161710070017', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('BAYU NUGRAHA PRATAMA', '161710070021', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('FADLAN SEPTIAN', '161710070033', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('FAIZAL FARID', '161710070036', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('FIKY ZIDAN MAYESA', '161710070039', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('GILANG KURNIAWAN', '161710070042', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('IIS APRILIANI PIDI YANTI', '161710070047', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('ILHAM FIRMANSYAH', '161710070049', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('INSAN PERSADA', '161710070053', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('JODI PASCAL', '161710070056', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('MOCHAMAD RIFQI SUKMANA', '161710070062', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('MUCHAMAD RICKY FADHIILAH', '161710070064', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('MUHAMAD RIZKI RIFFANDI', '161710070070', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('MUHAMMAD AIMAN ABDUL HAFIZH', '161710070072', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('NEVANKA MAGHFIROH PUTRA IRFANS', '161710070081', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('PAULA RAHMADANI', '161710070087', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('RENALDY MUHAMMAD', '161710070093', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('REVI PUTRI SRINITI', '161710070094', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('RIDHO RIZKI NURHAFIDZ', '161710070095', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('RIKKI NUGRAHA GHAMARI SUJANA', '161710070099', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('RIZAL FADILLA', '161710070102', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('RIZKI AHMAD FAUZI', '161710070104', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('RIZKI CAHYA PURNAMA', '161710070105', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('TIARA AMALIA MUTAQINAH', '161710070116', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('TIOFANI AKSAL FIRIJKI', '161710070117', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('TONI FITRIANSYAH', '161710070118', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('YURIKE SASKIA PUTRI', '161710070124', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('ANTO WIDIANTO', '161710070129', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('RIAD RAMADAN', '161710070131', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017'),
('AHMAD YUUNUS', '161710070132', 'Rekayasa Perangkat Lunak', 'XI RPL 3', '2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `nilai_akhir`
--
ALTER TABLE `nilai_akhir`
  ADD PRIMARY KEY (`id_na`);

--
-- Indexes for table `nilai_laporan`
--
ALTER TABLE `nilai_laporan`
  ADD PRIMARY KEY (`id_nl`);

--
-- Indexes for table `nilai_perusahaan`
--
ALTER TABLE `nilai_perusahaan`
  ADD PRIMARY KEY (`id_np`);

--
-- Indexes for table `nilai_sidang`
--
ALTER TABLE `nilai_sidang`
  ADD PRIMARY KEY (`id_ns`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `p_prakerin`
--
ALTER TABLE `p_prakerin`
  ADD PRIMARY KEY (`id_prakerin`);

--
-- Indexes for table `siswa_daftar`
--
ALTER TABLE `siswa_daftar`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `verifikasi_siswa`
--
ALTER TABLE `verifikasi_siswa`
  ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
