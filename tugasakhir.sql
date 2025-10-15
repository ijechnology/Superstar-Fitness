-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2024 pada 23.46
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `coach` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `type` varchar(100) NOT NULL,
  `intensity` varchar(100) NOT NULL,
  `complexity` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `classes`
--

INSERT INTO `classes` (`id`, `name`, `coach`, `date`, `time`, `type`, `intensity`, `complexity`, `duration`, `description`) VALUES
(30, 'Energy Aerobics', 'Mrs. Barita', '2024-06-22', '07:04:00', 'Cardio', 'Medium', 'Moderate', '60 Minutes', 'Drop that beat and get moving with our energetic aerobic exercise class. Combining dance elements with low- and high-intensity aerobic movements, one session of Energy Aerobics and you’ve got your cardio ticked and conquered. Sweat it out with us and you’ll leave looking and feeling sensational.'),
(31, 'Bodycombat', 'Ms. Davitya', '2024-06-27', '18:00:00', 'Cardio', 'Medium', 'Moderate', '60 Minutes', 'Unleash your inner warrior with this high-energy martial-arts inspired workout. Drawing moves from karate, boxing, Taekwondo and Muay Thai, this intense workout will leave you feeling fierce, fit and strong. Blast away calories, develop agility and speed and tone your legs, arms, back and shoulders, all while feeling like a total badass.'),
(32, 'Race 30', 'Mrs. Setiawati', '2024-07-21', '18:15:00', 'Cycling', 'High', 'Easy', '30 Minutes', 'HIIT? Check Work on your lower body? Check. Stars ready to take on the Race 30 challenge, check in! This high intensity indoor cycling class makes you work hard. But it will pay it all back with some sculpted sexy legs and a smoking hot endurance. The moment you get on that bike, we’re keeping your heart rate up so your fat burn is maximum in minimum time. That means you’ll continue to burn calories even after you walk out of class.\r\nIf you’re a star with the desire to get maximum results in minimum time, Race30 is ready for you.'),
(33, 'RPM', 'ms. Nurul', '2024-11-23', '14:30:00', 'Cycling', 'High', 'Easy', '50 Minutes', 'It’s time to ride and grind with RPM, our group indoor cycling program. This low-impact workout promises maximum cardio and calorie burn. Climb hills, sprint and cruise all to the beat of the music as you push your limits, letting your heart beat reach between 70% to 84% of its maximum rate. Ride hard and watch your cardio and aerobic fitness soar till you’re killing every class and leading the pack.'),
(34, 'DNA Mask', 'Mrs. Izzah', '2024-07-27', '11:00:00', 'Dance', 'Low', 'Advance', '50 Minutes', 'So you think you can dance? Well we know you’ll show us your star power with DN’A Mask, our contemporary dance class that focuses on telling a story with your body. Nothing’s off limits: we’re mixing up lyrical, ballet, jazz with an added touch of sultriness. Every time you join the DN’A party, you’ll be working on your flexibility, fitness and X factor.\r\nEven if it’s your first time, or you’ve done it countless times: DN’A Mask is your opportunity to get sexy.'),
(35, 'DNA Seduce', 'Mr. DIY', '2024-08-03', '17:25:00', 'Dance', 'Low', 'Advance', '50 Minutes', 'It’s sure to get steamy with our burlesque inspired workout, DN’A Seduce. Play the role of a sexy vixen with this dance workout but don’t underestimate the challenge that burlesque brings about. We’ll work your legs, arms and flexibility just with a little extra coquettish touch.'),
(36, 'Ground Blast', 'Mr. CW', '2024-09-19', '10:00:00', 'HIIT', 'Medium', 'Moderate', '30 Minutes', 'Fun? We’ve got it. Fit? You’ll definitely be, and fast with FastFit. This one crazy challenging class incorporates three-dimensional functional exercises to train your entire body to work as one. It’s full on calorie burn with metabolic conditioning for rapid fat loss. So if you’re serious about looking and feeling like a star, FastFit is for you.\r\n\r\nBeginners, don’t be intimidated. Regulars, we’ll modify things to make sure you’re always challenged.'),
(37, 'Fastfit', 'Mr. Corbuzier', '2024-09-09', '09:45:00', 'HIIT', 'Medium', 'Moderate', '50 Minutes', 'Fun? We’ve got it. Fit? You’ll definitely be, and fast with FastFit. This one crazy challenging class incorporates three-dimensional functional exercises to train your entire body to work as one. It’s full on calorie burn with metabolic conditioning for rapid fat loss. So if you’re serious about looking and feeling like a star, FastFit is for you.\r\nBeginners, don’t be intimidated. Regulars, we’ll modify things to make sure you’re always challenged.'),
(38, 'Pilates', 'Mr. Sunshine', '2024-06-24', '08:22:00', 'Mind', 'Medium', 'Easy', '60 Minutes', 'Grab a mat and get ready to crunch, plank and move your way to a lean, toned and balanced body. Pilates has a plethora of benefits for a star like you. It incorporates yoga elements that help stretch and lengthen all major muscle groups while improving strength, flexibility and balance. If that isn’t enough, it strengthens the core, ab and back muscles, builds strength and endurance, and realigns your body while improving coordination and balance. The biggest stars in the world love it, and we’re sure you will to.'),
(39, 'Gentle Yoga', 'Mr. Yogi', '2024-07-06', '21:35:00', 'Mind', 'Low', 'Easy', '50 Minutes', 'Seek refuge from life’s demands with Gentle Yoga, a gentle yoga that’s perfect for stars looking for a light and easy stretch. With the support of props such as blocks, bands and belts, find release and therapy for aching backs, necks, knees and shoulders. Slip in after your workout or take it as a rehabilitation practice. Now, gently move your way to a life of balance.\r\nint: low'),
(40, 'Bosu', 'Mr. Bizu', '2024-08-16', '16:36:00', 'Strength', 'Medium', 'Moderate', '60 Minutes', 'It’s an all-in-one class that’s sure to burn calories, get your heart rate up and build muscle in one boss workout! Using a BOSU trainer and other equipment, our instructors will challenge your balance, cardio and strength. Incorporating that BOSU ball means those core muscles will have to work like mad to keep you stable, leaving you strong and toned. So come down and have a ball with us!'),
(41, 'Bodypump', 'Mr. Bopam', '2024-08-29', '08:59:00', 'Strength', 'Medium', 'Moderate', '60 Minutes', 'Get strong with the super addictive Body Pump. This barbell workout will exhaust your muscles with light to moderate weights in high reps. Get pumped to the beat as you burn calories, shape and tone your entire body, increase core strength and improve bone health. You’ll leave the class feeling challenged and motivated, pumped for even more!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `memberships`
--

CREATE TABLE `memberships` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `package` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `memberships`
--

INSERT INTO `memberships` (`id`, `firstname`, `lastname`, `email`, `phone`, `package`, `date`) VALUES
(37, 'ailyssa', 'junior robert', 'ailyssarr@gmail.com', '0844477392', '1 Year', '2022-06-17'),
(38, 'octa', 'vember', 'octaaaa@hotmail.com', '09777555332', '1 Month', '2024-05-08'),
(39, 'aul', 'mega', 'ull@yahoo.com', '085715513240', '4 Month', '2024-06-05'),
(47, 'noerol', 'ijechh', 'izzaanrl@gmail.com', '082119285436', '4 Month', '2024-01-23'),
(50, 'barita', 'wati', 'bar@gmail.com', '085717715439', '1 Year', '2028-06-20'),
(53, 'barita', 'ijah', 'izzaanrl@gmail.com', '08111511116', '1 Month', '2024-06-05'),
(54, 'imo', 'smchon', 'navalryn12@gmail.com', '085715513240', '1 Year', '2023-06-07'),
(55, 'il', 'to', 'ilto@m.com', '62872039211', '4 Month', '2023-12-12'),
(58, '$firstname', '$lastname', '$email', '$phone', '$package', '2024-06-07'),
(59, 'ailyssa', 'davitya', 'izzaanrl@gmail.com', '082119285436', '1', '2024-06-07'),
(60, 'barita', 'davitya', 'izzaanrl@gmail.com', '08111511116', '1', '2024-06-07'),
(61, 'barita', 'davitya', 'izzaanrl@gmail.com', '08111511116', '1 Month', '2024-06-07'),
(62, 'barita', 'davitya', 'izzaanrl@gmail.com', '62872039211', '1 Month', '2024-06-07'),
(63, 'ailyssa', 'davitya', 'izzaanrl@gmail.com', '08111511116', '1 Month', '2024-06-07'),
(64, 'barita', 'davitya', 'izzaanrl@gmail.com', '08111511116', '1', '2024-06-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`id`, `name`, `banner`, `class`) VALUES
(32, 'Cardio', 'cardio.webp', ''),
(33, 'Cycling', 'cycling.webp', ''),
(34, 'Dance', 'dance.webp', ''),
(35, 'HIIT', 'HITT.jpg', ''),
(36, 'Mind', 'mind.webp', ''),
(37, 'Strength', 'strength.webp', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
