-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Des 2020 pada 05.50
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsantri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nobp` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tgll` date NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `pas` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tinggibadan` int(11) NOT NULL,
  `beratbadan` int(11) NOT NULL,
  `golongandarah` varchar(4) NOT NULL,
  `warnakulit` varchar(15) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `nomorortu` varchar(20) NOT NULL,
  `alamatortu` text NOT NULL,
  `qr` varchar(50) NOT NULL,
  `s1` text NOT NULL,
  `s2` text NOT NULL,
  `s3` text NOT NULL,
  `s4` text NOT NULL,
  `s5` text NOT NULL,
  `s6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nobp`, `nama`, `tempat`, `tgll`, `kelas`, `pas`, `nohp`, `alamat`, `gender`, `tinggibadan`, `beratbadan`, `golongandarah`, `warnakulit`, `ayah`, `ibu`, `nomorortu`, `alamatortu`, `qr`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`) VALUES
('12', 'M. Agung Vafky ideal', 'pariaman selatan', '2020-03-09', '1', '4e630f03015066409f0e2614d952cb17.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'agung.png', '669ce5df4dd1a4db1c3fa8ac08a1778f.pdf', '7f671a3e1afdde8327819fe4e74b37ee.pdf', '53d7181cdc58467719f9ebebc28688b6.pdf', '83ebdd4ac8823dbc1933ec98b06bd9e8.pdf', 'b5ac5104b21a228a72a29b9654a1f4f5.pdf', '8dc7e036650df21c315e1560700efb89.pdf'),
('4', 'asaa', 'fdsv', '2020-04-08', '1', 'b72da9fe6f10e7c551e190036c3f23a2.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'dfa.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('111', 'aaaaagung', 'Pariaman', '2019-12-18', '2', 'f768003026a0adc455eb883a160b6d5e.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'jalar.png', 'e36849b1d777ed4114b0f461cf5f8abf.pdf', '6d9fc6d710cca3f857dd5e1f38fbd0d6.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('12222', 'gsdd', 's', '2020-04-07', '2', '8f632ee5e68b09507f14317c1869fd4e.png', '', '', '', 0, 0, '', '', '', '', '', '', 'gsdd.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('12111', 'agung je', 'pariaman', '2020-05-12', '3', 'default.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'agung je.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('211212', 'fsdfs', 'vdfvzs', '2020-05-08', '7', 'default.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'fsdfs.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('12345', 'afa', 'vnks', '2020-05-13', '3', '322c99a568fae4cbb0c772dc4f95ee02.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'afa.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('23232', 'ds', 'ssd', '2020-05-05', '2', 'default.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'ds.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('321', 'asdsa', 'dsa', '2020-05-06', '2', 'default.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'asdsa.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('567', 'agung iiiii', 'guygu', '2020-05-06', '', '41d6b344d8f4a942e5faba8834eaad47.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'ytyf.png', 'd6f3cbb4c3e5fb7cc2d30442062386c8.pdf', 'default.pdf', 'default.pdf', 'a2e27dae94da2963abbd6c7e20c770d4.pdf', 'default.pdf', 'default.pdf'),
('21312', 'dasxcfds', 'fvdsxcgv', '2020-05-13', '1', 'default.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'dasxcfds.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('21312', 'dasxcfds', 'fvdsxcgv', '2020-05-13', '1', 'default.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'dasxcfds.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('33333333', 'fwsdfsd', 'dffdcged', '2020-05-20', '1', 'd083fc883fc88015ca5b0281b0cca500.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'fwsdfsd.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('1111111', 'sddc', 'dscsd', '2020-04-27', '1', '2629d9ee77698aaf41a9d693f2ae3d98.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'sddc.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('4334534', 'retretr', 'ffyt', '2020-05-14', '2', 'default.jpg', '', '', '', 0, 0, '', '', '', '', '', '', 'retretr.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('5', 'dfdgdgf', 'drt', '2020-05-13', '2', 'default.jpg', '', '', '', 0, 0, '', '', '', '', '', '', '5.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('101010', 'islam', 'oads', '2020-05-18', '', 'a4bcaeb1bb8d127f90f01753c5340365.jpg', '', '', '', 0, 0, '', '', '', '', '', '', '101010.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', '5f2f7fdb960d6415dcabac888aae0f09.pdf', 'default.pdf'),
('5655', 'fsdn', 'fgdfcgnvs', '2001-04-12', '1', 'default.jpg', '', '', '', 0, 0, '', '', '', '', '', '', '5655.png', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf'),
('123', 'vdxcv', 'fdsfsd', '2211-03-12', '7', 'default.jpg', '232323', 'gjhgjh', 'Laki-laki', 126, 434, 'A', 'dasdas', 'dfssd', 'gyugyu', '121221', 'dasda', '123.png', '91ebaebd723b25ad085c244eb6ca9925.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf', 'default.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `idk` int(11) NOT NULL,
  `nkelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`idk`, `nkelas`) VALUES
(1, 'VII 1'),
(2, 'VII 2'),
(3, 'VII 3'),
(4, 'VII 4'),
(7, 'VII 5'),
(8, 'VII 6'),
(9, 'VII 8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `no` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `level` varchar(2) NOT NULL,
  `idkelas` varchar(3) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no`, `nama`, `pass`, `level`, `idkelas`, `foto`) VALUES
(1, 'M. Agung Vafky Ideal', 'e10adc3949ba59abbe56e057f20f883e', '1', '2', '9d0543ef098fcddee931cd7db729f440.jpg'),
(2, 'lutfiiiaaa', 'e10adc3949ba59abbe56e057f20f883e', '2', '1', 'cd01376ed5255e5cda2f23e0ab74bd55.jpg'),
(3, 'sdsd', '1f32aa4c9a1d2ea010adcf2348166a04', '2', '3', '7808be769933e482a3451f8f8b10485e.jpg'),
(4, 'nfds', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1', '2', '92b9cfea124e11410c1f0f2b6ea6bf75.jpg'),
(9, 'sadsdf', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1', '1', '2b42f2200c6883bc73a009b496ff411f.jpg'),
(33, 'gaaewa', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1', '2', 'c872ad4a51ac6e55556783a005406492.jpg'),
(34, 'gjh', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1', '2', 'default.jpg'),
(56, 'dnfnsd', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2', '2', 'default.jpg'),
(901, 'gaga', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1', '2', 'default.jpg'),
(902, 'amad', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '0b6d3518bed1dffbb1da01c9766e4497.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=903;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
