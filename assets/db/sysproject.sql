-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 23.45
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sysproject`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analyst`
--

CREATE TABLE `analyst` (
  `id_analyst` int(11) NOT NULL,
  `id_proserv` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `campaign` varchar(50) NOT NULL,
  `audience` varchar(100) NOT NULL,
  `periode` varchar(100) NOT NULL,
  `an_description` text DEFAULT NULL,
  `an_attachment` text NOT NULL,
  `an_enddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `analyst`
--

INSERT INTO `analyst` (`id_analyst`, `id_proserv`, `id_team`, `campaign`, `audience`, `periode`, `an_description`, `an_attachment`, `an_enddate`) VALUES
(1001, 1001, 1001, 'Test Campaign', '', '', 'Test Analyst', 'https://github.com/', '2023-11-23'),
(1002, 1002, 1001, 'Pengambilan Foto Minimalis', '25 - 35 Tahun', '3', 'Pengambilan foto dan video dengan konsep hunian yang nyaman dan minimalis', 'https://id.pinterest.com/pin/844493671040105/', '2023-11-19'),
(1003, 1003, 1002, 'Konten Sosial Media', '25 - 35 Tahun', 'Setiap Hari', 'Membuat konten dari materi fotografi untuk sosial media', 'https://id.pinterest.com/pin/483292603777003822/', '2023-11-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`id_client`, `client_name`, `company`, `address`, `phone`, `email`) VALUES
(1001, 'Bangun Property', 'Property', 'Tagereang', '08989342323', 'bangun@email.com'),
(1002, 'Alam Property', 'Property', 'Tangerang', '021832321231', 'alam@email.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_priod` varchar(25) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL,
  `attachment` text NOT NULL,
  `p_status` int(5) NOT NULL,
  `log` int(11) NOT NULL,
  `c_log` int(11) NOT NULL,
  `t_log` int(11) NOT NULL,
  `s_log` int(11) NOT NULL,
  `b_log` int(11) NOT NULL,
  `ptime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id_project`, `id_client`, `project_name`, `project_priod`, `start_date`, `end_date`, `description`, `attachment`, `p_status`, `log`, `c_log`, `t_log`, `s_log`, `b_log`, `ptime`) VALUES
(1001, 1001, 'Marketing Properti', 'Once', '2023-11-01', '2023-11-22', 'marketing properti baru pada sosial media', 'https://www.google.com/search?q=translate&rlz=1C1YTUH_idID1049ID1049&oq=&gs_lcrp=EgZjaHJvbWUqBggBEEUYOzIPCAAQRRg5GIMBGLEDGIAEMgYIARBFGDsyEwgCEC4YgwEYxwEYsQMY0QMYgAQyDQgDEAAYgwEYsQMYgAQyDQgEEAAYgwEYsQMYgAQyBwgFEAAYgAQyDQgGEAAYgwEYsQMYgAQyBggHEAUYQNIBCDE2NDZqMGo5qAIAsAIA&sourceid=chrome&ie=UTF-8', 4, 1, 1, 1, 2, 2, '2023-11-16 07:29:48'),
(1002, 1002, 'Marketing Properti Baru', 'Once', '2023-11-16', '2023-11-30', 'Pembuatan konten pemasaran properti', 'https://id.pinterest.com/', 3, 2, 2, 2, 4, 1, '2023-11-16 08:38:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proserv`
--

CREATE TABLE `proserv` (
  `id_proserv` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `proserv`
--

INSERT INTO `proserv` (`id_proserv`, `id_project`, `id_service`) VALUES
(1001, 1001, 1001),
(1002, 1002, 1001),
(1003, 1002, 1002);

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `id_task` int(11) NOT NULL,
  `result` text NOT NULL,
  `attachment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `id_task` int(11) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `id_task`, `start_time`, `end_time`) VALUES
(1002, 1002, '2023-11-17', '2023-11-18'),
(1003, 1003, '2023-11-19', '2023-11-20'),
(1005, 1005, '2023-11-18', '2023-11-19'),
(1006, 1006, '2023-11-18', '2023-11-23'),
(1007, 1007, '2023-11-20', '2023-11-23'),
(1008, 1008, '2023-11-17', '2023-11-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `service_name` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `service_name`, `description`) VALUES
(1001, 'Photography', 'Pengambilan foto dan video untuk kebutuhan pemasaran'),
(1002, 'Design Graphic', 'Membuat materi desain untuk kebutuhan pemasaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id_staff`, `id_team`, `staff_name`, `phone`, `email`) VALUES
(1001, 1001, 'Reza', '08989342323', 'staff1@email.com'),
(1002, 1002, 'Olivia', '082134324234', 'olivia@email.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `task`
--

CREATE TABLE `task` (
  `id_task` int(11) NOT NULL,
  `id_analyst` int(11) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_staff` int(11) NOT NULL,
  `task_attachment` text NOT NULL,
  `review` text NOT NULL,
  `t_status` int(5) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `task`
--

INSERT INTO `task` (`id_task`, `id_analyst`, `task_name`, `description`, `id_staff`, `task_attachment`, `review`, `t_status`, `time`) VALUES
(1002, 1001, 'taswswwsw', 'gdgdgdgdgdg', 1001, 'https://github.com/', 'errtrwerw', 3, '2023-11-16 07:27:29'),
(1003, 1001, 'ddfsdfsd', 'fsdfsdfsdfsd', 1001, '', 'xfdfdsfsd', 3, '2023-11-16 07:29:14'),
(1005, 1002, 'Foto Area 2', 'Pengambilan foto area 2', 1001, 'https://www.pinterest.com/pin/644648134167341831/', 'Ubah Lagi', 0, '2023-11-16 09:57:16'),
(1006, 1003, 'Membuat konten design', 'Membuat konten dari fotografi yang telah dilakukan', 1002, '', '', 1, '2023-11-16 08:33:21'),
(1007, 1003, 'Posting Sosial Media', 'Memposting desain pada sosial media', 1002, 'https://id.pinterest.com/pin/8725793021952595/', 'Input Ulang', 2, '2023-11-16 08:38:30'),
(1008, 1002, 'Foto Area 1', 'Pengambilan foto area 1', 1001, 'https://id.pinterest.com/pin/55802482873649349/', 'Diterima', 3, '2023-11-16 08:38:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `division` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id_team`, `division`) VALUES
(1001, 'Photograph'),
(1002, 'Graphic Designer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `role` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'analyst', 'analyst', 'analyst'),
(3, 'staff', 'staff', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analyst`
--
ALTER TABLE `analyst`
  ADD PRIMARY KEY (`id_analyst`),
  ADD KEY `id_proserv` (`id_proserv`) USING BTREE,
  ADD KEY `id_team` (`id_team`) USING BTREE;

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_client` (`id_client`) USING BTREE;

--
-- Indeks untuk tabel `proserv`
--
ALTER TABLE `proserv`
  ADD PRIMARY KEY (`id_proserv`),
  ADD KEY `id_project` (`id_project`,`id_service`) USING BTREE,
  ADD KEY `id_service` (`id_service`) USING BTREE;

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `id_task` (`id_task`) USING BTREE;

--
-- Indeks untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `id_task` (`id_task`) USING BTREE;

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD KEY `id_team` (`id_team`) USING BTREE;

--
-- Indeks untuk tabel `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `id_analyst` (`id_analyst`) USING BTREE,
  ADD KEY `id_staff` (`id_staff`) USING BTREE;

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `analyst`
--
ALTER TABLE `analyst`
  ADD CONSTRAINT `analyst_ibfk_1` FOREIGN KEY (`id_proserv`) REFERENCES `proserv` (`id_proserv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analyst_ibfk_2` FOREIGN KEY (`id_team`) REFERENCES `team` (`id_team`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proserv`
--
ALTER TABLE `proserv`
  ADD CONSTRAINT `proserv_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proserv_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `task` (`id_task`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `task` (`id_task`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `team` (`id_team`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`id_analyst`) REFERENCES `analyst` (`id_analyst`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
