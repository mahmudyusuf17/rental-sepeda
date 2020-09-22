-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2020 pada 07.01
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `email`, `password`, `gambar`, `level`, `blokir`, `id_session`) VALUES
(1, 'Mahmud Yusuf', 'mahmudyusuf17', 'mahmudyusuf17@gmail.com', 'd5133c970ad3a99c2248fed76970d06c', 'my.jpg', 'admin', 'N', ''),
(2, 'Asita Delyana Devi', 'ddilady', 'asitadelyana@gmail.com', '202cb962ac59075b964b07152d234b70', 'dila.jpg', 'admin', 'N', ''),
(3, 'Ridho Alamsyah', 'ridho@alamsyah', 'ridhoalamsyah@gmail.com', '8def097986e40d2ec44d6086dda27f7a', 'ridho.jpg', 'admin', 'N', ''),
(4, 'Irvan Fauzi Rinjani', 'irvan@fauzi', 'irvanfauzi@gmail.com', '9bb2a5de0d783b27367868536589428a', 'irvan.jpg', 'admin', 'N', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `usia` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jabatan`, `alamat`, `usia`) VALUES
(1, 'Aldino Nanda', 'Database Administrator', 'Jln. Kebagusan No.3, RT10/RW03', '21'),
(2, 'Haditiya Rahman', 'UX Design', 'Jln. Kramatjati No.13 RT12/RW01 ', '24'),
(3, 'Bonafius Joshua', 'Web Developer', 'Jln. Sawangan No.1 RT12/RW09', '22'),
(4, 'Fahri Nurrahman', 'System Analyst', 'Jln. Margonda No.8 RT04/RW08', '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_ktp`, `no_telp`, `alamat`) VALUES
(1, 'Ridho Alamsyah', '3275051206980014', '088808136739', 'Jln. Widuri RT013/RW03 Kec. Setiabudi'),
(2, 'Mahmud Yusuf', '3224051606980014', '088808223347', 'Jln. Cipayung RT20/RW30'),
(3, 'Irvan Fauzy', '3275051206980015', '088809139983', 'Jln. Randu RT01/RW02, Kota Depok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_sepeda` int(11) NOT NULL,
  `jaminan` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_peminjaman`, `tgl_kembali`, `id_pelanggan`, `id_sepeda`, `jaminan`, `keterangan`, `status_pembayaran`) VALUES
(1, '2019-12-01', '2019-12-03', 1, 1, 'KTP', '1 Unit', 'Lunas'),
(2, '2019-12-01', '2019-12-06', 2, 7, 'SIM C', '1 Unit', 'Lunas'),
(3, '2019-12-31', '2020-01-01', 3, 12, 'SIM C', '2 Unit', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `jml_sepeda` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `denda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `tgl_peminjaman`, `tgl_pengembalian`, `jml_sepeda`, `id_peminjaman`, `denda`) VALUES
(1, '2019-12-01', '2019-12-03', 1, 1, 0),
(2, '2019-12-01', '2019-12-07', 1, 2, 10000),
(3, '2019-12-31', '2020-01-01', 2, 3, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepeda`
--

CREATE TABLE `sepeda` (
  `id_sepeda` int(11) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `no_rangka` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_perhari` varchar(12) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sepeda`
--

INSERT INTO `sepeda` (`id_sepeda`, `merek`, `jenis`, `no_rangka`, `warna`, `gambar`, `deskripsi`, `jumlah`, `harga_perhari`, `status`) VALUES
(1, 'Mongoose Legion', 'BMX', '12A20', 'Biru abu-abu', 'bmx-mongoose-legion.jpg', 'sepeda bmx biru abu dengan rangka 4130 chromoly, rem U-brakes removable mounts, dan roda berukuran 20 inch. Cocok untuk pemula dari segala usia.', 15, '60000', 'Tersedia'),
(2, 'Kross Evox', 'BMX', '12A21', 'Biru Hitam', 'bmx-kross-evox.jpg', 'sepeda bmx biru hitam dengan rangka MIG welded dan rem V-Brake, cocok untuk anak-anak yang ingin beratraksi dengan bmx.', 50, '50000', 'Tersedia'),
(3, 'Kross 20T', 'BMX', '12A25', 'Hijau', 'bmx-kross-20T.jpg', 'sepeda bmx hijau dengan rangka MIG welded dan rem V-Brake, cocok untuk anak-anak yang ingin beratraksi dengan bmx.', 15, '50000', 'Tersedia'),
(4, 'Pacific', 'Gunung', '13B01', 'Merah', 'mountain-pacific.jpg', 'sepeda gunung merah dengan suspensi 27,5 dan gigi Shimano 2x10 speed. Cocok untuk travelling dan berpetualang ke berbagai medan.', 5, '60000', 'Tersedia'),
(5, 'Raleigh', 'Gunung', '13B02', 'Hitam', 'mountain-raleigh.jpg', 'sepeda gunung hitam merah dengan rangka hydroformed alumunium frame, ban berukuran 27,5 inch dan rem tektro mechanical disc. Cocok untuk berpetualang di tempat lembab.', 10, '50000', 'Tersedia'),
(6, 'Reid', 'Gunung', '13B03', 'Biru Hitam', 'mountain-reid.jpg', 'sepeda gunung biru hitam dengan suspensi fork dan rangka hydroformed alloy yang dirancang khusus untuk wanita. Cocok untuk berpetualang di tempat luas seperti hutan dan pegunungan.', 40, '50000', 'Tersedia'),
(7, 'London Taxi', 'Kasual', '14C20', 'Hitam coklat', 'casual-london-taxi.jpg', 'sepeda kasual dengan desain klasik. Dilengkapi dengan rangka Hi-ten steel dan ban berukuran 700x38 inch. Cocok untuk bersepeda di jalan perkotaan.', 25, '80000', 'Tersedia'),
(8, 'Sixthreezero', 'Kasual', '14C21', 'Abu-abu', 'casual-sixthreezero.jpg', 'sepeda kasual abu-abu dengan rangka 19 inch steel dan ban berukuran 26 inch. Cocok untuk bersepeda mengelilingi pantai.', 30, '40000', 'Tersedia'),
(9, 'Townie', 'Kasual', '14C22', 'Merah muda', 'casual-townie.jpg', 'sepeda kasual merah muda dengan gigi Shimano 7-speed derailleur dan ban berukuran 26 inch. Cocok untuk berkeliling disekitar kota atau perumahan.', 35, '30000', 'Tersedia'),
(10, 'PK Ripper', 'Fixie', '15F11', 'Biru Hitam', 'fixie-pk-ripper.jpg', 'sepeda fixie (fixed gear) biru hitam dengan kustomisasi tampilan yang memukau. Cocok untuk dipakai di segala tempat.', 15, '70000', 'Tersedia'),
(11, 'Polygon', 'Fixie', '15F12', 'Putih', 'fixie-polygon.jpg', 'sepeda fixie (fixed gear) putih dengan cat metallic. Cocok untuk dipakai di segala tempat', 5, '50000', 'Tersedia'),
(12, 'United Soloist', 'Fixie', '15F13', 'Merah kuning hijau', 'fixie-united-soloist.jpg', 'sepeda fixie (fixed gear) dengan kustomisasi cat merah kuning hijau yang memukau. Cocok untuk dipakai di segala tempat.', 10, '40000', 'Tersedia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_sepeda` (`id_sepeda`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indeks untuk tabel `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`id_sepeda`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_sepeda`) REFERENCES `sepeda` (`id_sepeda`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
