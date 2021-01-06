-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 10:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcartlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `image`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Husqvarna Automower 430XH Robotic Lawn Mower', 120, 'prod1.jpg', '3299.99', '[INSTALLATION INCLUDED] Standard installation can be included with Automower 430XH by a Husqvarna professional installer\r\n[UNIQUE CUTTING SYSTEM] Safety-enhanced mower clips grass a little at a time, fertilizing soil like a mulching mower\r\n[MANEUVERABLE] Guided by hidden wires, mower intelligently handles obstacles, tight spaces, and slopes up to 24 degrees\r\n[THEFT PROOF] Equipped with PIN code and theft-deterrent alarm to guarantee security\r\n[GPS NAVIGATION] Automower Connect-enabled robotic mower ready for GPS navigation and theft tracking', '2021-01-05 15:33:14', '2021-01-05 15:33:14'),
(2, 'Owl Robot', 121, 'prod2.jpg', '169.99', 'Manual Driving & Smart Interaction: Remote control Owl Robot via app to cruise at home and track pets for a fun hide and seek game. Automatically triggers multiple action modes by infrared sensing to interact with your pet and make it more active. Full HD Camera & Night Vision: 1080p Full HD Pet Camera with 4x zoom and night vision, you will be able to see your pet clearly day and night, save high quility images or video, and control Owl Robot flexibly. Treat Tossing & 2-way Audio: You can make Owl Robot moves and leaves a snack route to lure your curious pet. While it is naughty or anxious, you can comfort it by instant voice and dispense favorite treats(size of 4mm-16mm) to make it happy. PIR Detection & TF Recording: Owl Robot will automatically react by be tounched and detects pet behavior. And video can also be recorded automatically after installing TF card(no included). Help you monitor your home situation 24 hours a day, 7 days a week. More details: Long battery life for 8 hours of continuous use. Two connection modes make the use more friendly. Even if your phone doesn\'t have a network, you can still use the owl in AP mode (remote control need home 2.4G wifi,not compatible with 5G wifi)', NULL, NULL),
(3, 'Pool Cleaner Robot', 122, 'prod3.png', '699.99', 'Product description And for pools built above ground level Active friction CleverClean Service rapid Easy cleaning Light weight Rapid drainage Top access    Active brush  The use of the active brush results in a particularly efficient rubbing and cleaning. The active brush rotates at twice the speed of the robot, thus removing algae and bacteria, resulting in a clean, transparent and healthy pool water. Light weight  The small weight, the ergonomic line, and the fast drainage of clean water make it easy to remove the Dolphin from the pool!     Maintenance without weights  Filtration system, accessible from the top - fast and clean evacuation and washing', NULL, NULL),
(4, 'Furbo Dog Camera', 123, 'prod4.jpg', '133.99', 'Alert type	Audio And Motion Wireless Communication Technology	Wi-Fi,Bluetooth Low light technology	Infrared Brand	Furbo Video Capture Resolution	1080p About this item 1080p Full HD Camera & Night Vision: livestream video to monitor your pet on your phone with a 160-degree wide-angle view, day & night. 2-Way Audio & BARKING ALERT: Furbo’s BARKING SENSOR detects when your dog is barking. It sends push notifications to your smartphone when it detects barking. Know what’s going on at home and talk to calm them down via the app. Fun TREAT TOSSING: TOSS a treat to your dogs via the free Furbo iOS/Android app. Fill it with your dogs’ favorite treats & play a game of catch. Easy 3-Step Setup: 1) plug in to a power outlet using its USB cord 2) download the Furbo app 3) connect to your home wifi. Stable internet connection & Wifi signal are recommended for best performance. Included Components: Charger', NULL, '2021-01-05 16:29:57'),
(5, 'Waterproof Smart Mirror', 124, 'prod5.jpg', '499.99', 'About this item IP66 WATERPROOF: Haocrown bathroom TV is built to the highest waterproof standards (IP66), and you can install it everywhere you want, near the bathtub, or even under the shower. Let you relax in the bath and tune in to your favourite TV shows. TVs comes with great, high quality IP68 waterproof remote control,even if it is immersed in water, there is no problem. SMART TV?Haocrown LED Television is a Android 10.0 system Smart TV in HDMI2 channel . Simply connect to Wi-Fi, log in your account and enjoy the world wide web.Watch Netflix, Youtube, the latest news, and of course live TV (download your provider’s app),see your photo albums, connect with friends, and much, much more.Almost everything you can do on your smart phone; you can do on the Haocrown waterproof tv. MAGIC MIRROR DESIGN:When switched off, the TV transforms into a mirror, making it not only a great tech-feature but also an appealing home accessory , suitable for use in bathrooms, swimming pools, kitchens, yachts, Sauna. Additionally, the screen is scratch-resistant, rustproof and fog-free offering an everlasting high-quality viewing experience without any unwanted steam or marks. INNOVATIVE INTELLIGENCE?Resolution 1920x1080 Delivers Incredible Clarity and Vibrant Colours.Powerful Built-In Vibration Speaker Technology,you Can Enjoy High-Definition Stereo Sound While Bathing.It Has Better MPS Display Technology with Mirror Panel To Upgrade Regular LED/LCD Display\'s Brightness. Color Temperature, and Contrast Ratio Parameters to be Best Effect, So Even When It\'s Installed in Strong Room Lighting, You Won\'t Feel the Glare While Watching TV. EASY TO INSTALL IN TWO MODES?The Haocrown waterproof TVs come included with a wall-mount and recess mounting bracket, making it easy to tightly fix the television to the desired spot. Recess Dimensions for In-wall: 524 x 358x 36mm/20.6\"W x 14.1\"H x 1.4\"D.?1 YEAR WARRANTY ?Please Contact Us if You Have any Concerns.If You Need to Customize Other Sizes and Colors, Please Contact Us.', NULL, NULL),
(6, 'Vector Robot', 125, 'prod6.jpg', '699.99', 'About this item Vector is a companion made to hang out and help out. Powered by ai and advanced robotics, he\'s alive with personality and engaged by sight, sound, and touch. Vector is voice-activated and will answer questions, take photos for you, time dinner, show you the weather, and more. Voice features are currently English language only. If you choose to set up Alexa on your vector, you\'ll be able to: set reminders, control smart home devices like lights, speakers, and thermostats, and so much more. Vector can independently navigate and self-charge. He recognizes people and avoids obstacles. Vector is an updating platform, Cloud connected via Wi-Fi so he\'s always learning and updating with new skills and features. Requirements: a compatible iOS or Android device and the free vector app for set up only. Check compatibility at Anki.Com/devices. Includes 1 Vector robot, 1 cube, 1 charger (USB power adapter not included). There are some Alexa features Vector will not support like playing songs from streaming music services via Spotify, SiriusXM, Pandora, etc. But we\'d rather you connect your tunes to an external smart speaker so Vector can show off his dance moves While Anki has ceased product development and manufacturing, Anki has stated that it will provide long term support to maintain the operation and functionality in the existing products and apps. A self-serve Help Center to assist in getting the most out of your product has been implemented by Anki. Regretfully there are no agents available but Anki has indicated that they will be monitoring cloud operations for Anki accounts and Vector.', NULL, NULL),
(7, 'Smart Pet Feed', 126, 'prod10.jpg', '125.99', 'About this item ALEXA ENABLED: Ask your Amazon Echo device to feed your dog or cat a snack, hands-free, from anywhere in your home AUTOMATIC REPLENISHMENT: Use Amazon Dash Replenishment to automatically reorder your pet’s food when it’s running low LOW & EMPTY FOOD NOTIFICATIONS: With the addition of new sensors, the feeder automatically notifies you when food levels are low or if the feeder is empty SMARTPHONE COMPATIBLE: Use the PetSafe Smart Feed app to monitor your pet’s meals from anywhere; app requires an iPhone or iPod device iOS 9.0 or later or a compatible Android smartphone 6.0 or later SLOW FEED OPTION: Slow Feed setting dispenses meals larger than 1/8 cup in small amounts over 15 minutes making it a great solution for pets who tend to eat too quickly FLEXIBLE PORTIONS: Schedule up to 12 meals daily that can be dispensed from 1/8 cup to 4 cups to fit your pet\'s needs; If you need to temporarily stop the feeder from dispensing you can turn off the schedule in the app TOP-SHELF DISHWASHER SAFE: Lid, hopper, bowl and bowl holder are top-shelf dishwasher-safe for convenient cleaning; Best for cats and small or medium dogs U.S.-BASED CUSTOMER CARE: Let our pet product experts help; we’re available Monday through Saturday to answer your questions at 1-800-845-3274 QUALITY GUARANTEED: PetSafe brand has been a trusted global leader in pet behavior, containment and lifestyle innovations for nearly 30 years; we help pets and their people live happily together 2020 PET INNOVATION AWARD WINNER - Received the award for “Electronic Feeders/Waterers Product of the Year” for its innovative design to ensure your pet is fed on time every time', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
