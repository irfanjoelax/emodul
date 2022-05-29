-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2019 pada 04.47
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_modul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `idmtr` int(11) UNSIGNED NOT NULL,
  `namamtr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`idmtr`, `namamtr`) VALUES
(2, 'Lingkungan Hidup'),
(4, 'Pencemaran'),
(5, 'Perubahan Lingkungan'),
(6, 'Limbah'),
(7, 'Kerusakan Lingkungan'),
(8, 'Upaya Pelestarian Lingkungan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `idptr` int(11) UNSIGNED NOT NULL,
  `kmptnsiptr` text DEFAULT NULL,
  `tjnptr` text DEFAULT NULL,
  `bntnptr` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`idptr`, `kmptnsiptr`, `tjnptr`, `bntnptr`) VALUES
(1, '<p><span xss=removed><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sed eligendi accusamus aut deleniti eum aliquid doloremque magnam, necessitatibus cupiditate impedit natus eveniet laborum hic pariatur maxime inventore iste ullam!</strong></span></p>\r\n', '<ul>\r\n <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sed eligendi accusamus aut deleniti eum aliquid doloremque magnam, necessitatibus cupiditate impedit natus eveniet laborum hic pariatur maxime inventore iste ullam!</li>\r\n <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sed eligendi accusamus aut deleniti eum aliquid doloremque magnam, necessitatibus cupiditate impedit natus eveniet laborum hic pariatur maxime inventore iste ullam!</li>\r\n <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sed eligendi accusamus aut deleniti eum aliquid doloremque magnam, necessitatibus cupiditate impedit natus eveniet laborum hic pariatur maxime inventore iste ullam!</li>\r\n</ul>\r\n', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sed eligendi accusamus aut deleniti eum aliquid doloremque magnam, necessitatibus cupiditate impedit natus eveniet laborum hic pariatur maxime inventore iste ullam!</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `idsoal` int(11) UNSIGNED NOT NULL,
  `tnysoal` text DEFAULT NULL,
  `asoal` varchar(30) DEFAULT NULL,
  `bsoal` varchar(30) DEFAULT NULL,
  `csoal` varchar(30) DEFAULT NULL,
  `dsoal` varchar(30) DEFAULT NULL,
  `esoal` varchar(30) DEFAULT NULL,
  `gmbrsoal` varchar(255) DEFAULT NULL,
  `kncsoal` varchar(5) DEFAULT NULL,
  `aktfsoal` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`idsoal`, `tnysoal`, `asoal`, `bsoal`, `csoal`, `dsoal`, `esoal`, `gmbrsoal`, `kncsoal`, `aktfsoal`) VALUES
(5, 'Ini adalah gambar dari sebuah bahasa pemrograman apa ?', 'PHP', 'Java', 'HTML', 'Javascript', 'CSS', 'php.jpg', 'a', '1'),
(7, 'Berikut yang merupakan bahasa markup ?', 'PHP', 'Java', 'HTML', 'Javascript', 'CSS', NULL, 'c', '1'),
(8, 'PHP tergolong dalam bahasa tingkat ?', 'mesin', 'rendah', 'sedang', 'tinggi', 'terstruktur', NULL, 'd', '1'),
(9, 'Berikut adalah sebuah bahasa cascading untuk desain website ?', 'PHP', 'Java', 'HTML', 'Javascript', 'CSS', NULL, 'e', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submateri`
--

CREATE TABLE `submateri` (
  `idsubmtr` int(11) UNSIGNED NOT NULL,
  `mtrid` int(11) UNSIGNED NOT NULL,
  `namasubmtr` varchar(255) DEFAULT NULL,
  `isisubmtr` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `submateri`
--

INSERT INTO `submateri` (`idsubmtr`, `mtrid`, `namasubmtr`, `isisubmtr`) VALUES
(3, 2, 'Pengertian', '<p>sdfsdfarvervSDhqetnsrfhdtnjd,jkw rgsrysjtjdykwmrvzdgsbyrth</p>\r\n\r\n<ul>\r\n <li>drgr5tgsdfbsrbaergarghsdrgnbadhgfserhgoaerg</li>\r\n <li>argseghsruighrgjahjdkrgfsfrgsdkjgsjgksdfjhgiwsg</li>\r\n <li>sdgserjvnsighiserg</li>\r\n</ul>\r\n'),
(4, 2, 'Manusia Dan Lingkungan', '<p>mantao ini sudah awal adfakeh</p>\r\n\r\n<ul>\r\n <li>FASKDJFHAEFASFFSDFASDFASDFASDF</li>\r\n <li>SDFSERGsdfsergervwsfseg</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"\" src=\"/www/ci_modul/backend/vendor/fileman/Uploads/Images/user.png\" xss=removed></p>\r\n'),
(5, 2, 'Pengelolaan', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(6, 4, 'Pencemaran Udara', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(7, 4, 'Pencemaran Tanah', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(8, 5, 'Faktor Alam', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(9, 5, 'Faktor Manusia', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(10, 6, 'Jenis-jenis', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(11, 6, 'Daur Ulang', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(12, 8, 'Secara Administratif', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(13, 8, 'Secara Teknologis', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(14, 8, 'Secara Edukatif', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(15, 7, 'Kerusakan Pantai Cirebon Oleh Sampah', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(16, 7, 'Limbah Batubara Cirebon', '<p>1)  #include <iostream></p>\r\n\r\n<p>Pada setiap program harus di awali dengan preprocessor directive. preprocessor directive adalah statement program yang di awali dengan tanda # sedangkan include berfungsi sebagai alat pemanggil suatu file header yang telah di sediakan  sesuai dengan contoh, file header yang di panggil adalah file iostream. Perlu sekali di pahami bahwa file header yang di gunakan dalam bahsa C++ untuk proses input/output  standar adalah <iostream>, sedangkan dalam bahsa C adalah <stdio></p>\r\n\r\n<p> </p>\r\n\r\n<p>2)  Int main()</p>\r\n\r\n<p>     fungsi awal untuk memulai sebuah program</p>\r\n\r\n<p> </p>\r\n\r\n<p>3)  { …}</p>\r\n\r\n<p>sebuah tanda dimana semua yang di ketikkan di dalam lingkup kurung kurung kurawal itu merupakan isi dari program yang di buat</p>\r\n\r\n<p> </p>\r\n\r\n<p>4)  Printf (“ … “);</p>\r\n\r\n<p>di gunakan untuk menampilkan output atau tulisan di layar. Selain itu kita juga dapat menggunakan cout&lt;&lt;” text anda “ &lt;<endl>\r\n\r\n<p> </p>\r\n\r\n<p>5)  Scanf(“ %.. “ , & .. ); scanf ialah berfungs sebagai alat penerima input yang merekam aktifitas keyboard yang selanjutnya akan di proses oleh memory. %.. bisa di isi dengan beberapa bilangan atau operator sesuai dengan beberapa standar operator. Sedangkan &.. di isi dengan dengan variabel yang telah di tentukan sebelumnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>6)  // tanda pemberi komentar dalam satu program diman tidak di baca sebagai funsi atau perintak tertentu, melainkan sebagai penjelas bagi programmer itu sendiri  tanda // hanya boleh untuk 1 baris saja</p>\r\n\r\n<p> </p>\r\n\r\n<p>7) /* ….. */ .</p>\r\n\r\n<p> untuk memberikan komentar yang panjangnya lebih dari 1 baris.</p>\r\n\r\n<p> </p>\r\n\r\n<p>8)  return 0;</p>\r\n\r\n<p>tanda bahwa program telah selesai. Apabila nilainya 0 maka proses berjalan tanpa ada masalah</p>\r\n\r\n<p>.</p>\r\n'),
(17, 6, 'Test Aja Sob', '<p><a href=\"http://facebook.com\">silakan klik link blog berikut</a></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idusr` int(11) NOT NULL,
  `nimusr` varchar(20) NOT NULL,
  `namausr` varchar(255) NOT NULL,
  `userusr` varchar(255) NOT NULL,
  `passusr` varchar(255) NOT NULL,
  `lvlusr` varchar(5) DEFAULT NULL,
  `emailusr` varchar(255) DEFAULT NULL,
  `tlpusr` varchar(15) DEFAULT NULL,
  `almtusr` text DEFAULT NULL,
  `nliusr` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idusr`, `nimusr`, `namausr`, `userusr`, `passusr`, `lvlusr`, `emailusr`, `tlpusr`, `almtusr`, `nliusr`) VALUES
(1, 'admin', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'admin@admin.com', '08115544412', 'jalan kantor aja wal', 0),
(11, '150105011', 'Muhammad Irfan Permana', 'irfan', '24b90bc48a67ac676228385a7c71a119', '2', 'irfanthejoelax@gmail.com', '08115544266', 'jalan rapak indah', 100),
(12, '190405021', 'Lina Apriyani', 'lina', 'f6f4deb7dad1c2e5e0b4d6569dc3c1c5', '2', 'lina@mail.com', '082246805241', 'jalan adi sucipto palaran', 100),
(13, '240504021', 'Rizka Wardana', 'rizka', 'aef2c231d5e776c0e0656eaf68767848', '2', 'rizka@mail.com', '085246805241', 'jalan adi sucipto palaran', 75),
(14, '15010504006', 'Hafidz Hidayatullah', 'hafidz', '29bca9f62e4af2306bcf9bc406ade0c4', '2', 'hafidz@mail.com', '08115555432', 'jalan mangkupalas', 50),
(15, '200405026', 'Rima Melati', 'rima', '4dd905b9812103974a967aead8c7a58a', '2', 'rima@mail.com', '085268025241', 'jalan harun nafsi', 25);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`idmtr`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`idptr`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`idsoal`);

--
-- Indeks untuk tabel `submateri`
--
ALTER TABLE `submateri`
  ADD PRIMARY KEY (`idsubmtr`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idusr`),
  ADD UNIQUE KEY `emailusr` (`emailusr`),
  ADD UNIQUE KEY `emailusr_2` (`emailusr`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `idmtr` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `idptr` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `idsoal` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `submateri`
--
ALTER TABLE `submateri`
  MODIFY `idsubmtr` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idusr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
