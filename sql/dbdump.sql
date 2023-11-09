-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: team02
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `airport`
--

DROP TABLE IF EXISTS `airport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `airport` (
  `iata_code` varchar(32) NOT NULL,
  `icao_code` varchar(32) DEFAULT NULL,
  `airport_name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` char(2) NOT NULL,
  PRIMARY KEY (`iata_code`),
  UNIQUE KEY `icao_code` (`icao_code`),
  KEY `city_id` (`city_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `airport_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  CONSTRAINT `airport_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `country` (`iso_code2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `airport`
--

LOCK TABLES `airport` WRITE;
/*!40000 ALTER TABLE `airport` DISABLE KEYS */;
INSERT INTO `airport` VALUES ('AKL','NZAA','Auckland International Airport',1027,'NZ'),('AMS','EHAM','Schiphol Airport',1009,'NL'),('ATH','LGAV','Eleftherios Venizelos International Airport',1026,'GR'),('BCN','LEBL','Barcelona International Airport',1012,'ES'),('BER','EDDB','Berlin Brandenburg Airport',1014,'DE'),('BKK','VTBS','Suvarnabhumi International Airport',1018,'TH'),('BQH','EGKB','Biggin Hill Airport',1001,'GB'),('BTR','KBTR','Baton Rouge Metropolitan Airport',1023,'US'),('CAI','HECA','Cairo International Airport',1020,'EG'),('CDG','LFPG','Charles De Gaulle Airport',1006,'FR'),('CHS','KCHS','Charleston International Airport',1006,'US'),('CIA','LIRA','Ciampino Airport',1017,'IT'),('CPT','FACT','Cape Town International Airport',1024,'ZA'),('CUN','MMUN','Cancun International Airport',1011,'MX'),('CVG','KCVG','Cincinnati/Northern Kentucky International Airport',1017,'US'),('DMK','VTBD','Don Mueang International',1018,'TH'),('DPS','WADD','Ngurah Rai Airport',1003,'ID'),('DWC','OMDW','Al Maktoum International Airport',1010,'AE'),('DXB','OMDB','Dubai International Airport',1010,'AE'),('EDI','EGPH','Edinburgh Airport',1016,'GB'),('GIG','SBGL','Rio de Janeiro International Airport',1008,'BR'),('GMP','RKSS','Gimpo International Airport',1022,'KR'),('HKT','VTSP','Phuket International Airport',1002,'TH'),('HND','RJTT','Tokyo International Airport',1005,'JP'),('HNL','PHNL','Honolulu International Airport',1013,'US'),('IAG','KIAG','Niagara Falls International Airport',1004,'US'),('JFK','KJFK','John F Kennedy International Airport',1004,'US'),('JTR','LGSR','Santorini National Airport',1019,'GR'),('LCY','EGLC','London City Airport',1001,'GB'),('LFT','KLFT','Lafayette Regional Airport',1023,'US'),('LGA','KLGA','La Guardia International Airport',1004,'US'),('LGW','EGKK','Gatwick Airport',1001,'GB'),('LHR','EGLL','Heathrow Airport',1001,'GB'),('MLU','KMLU','Malad City Airport',1023,'US'),('MSY','KMSY','Louis Armstrong International Airport',1023,'US'),('NRT','RJAA','Narita Airport',1005,'JP'),('ORY','LFPO','Orly Airport',1006,'FR'),('PNH','VDPP','Pochentong Airport',1025,'KH'),('RAK','GMMX','Menara Airport',1015,'MA'),('RIO','RIDO','metropolitan area2',1008,'BR'),('SDU','SBRJ','Santos Dumont Regional Airport',1008,'BR'),('SHV','KSHV','Shreveport Regional Airport',1023,'US'),('STN','EGSS','Stansted Airport',1001,'GB'),('SXF','ESXB','Schoenefeld International Airport',1014,'DE'),('SYD','YSSY','Kingsford Smith Airport',1007,'AU'),('TXL','EDDT','Tegel International Airport',1014,'DE'),('YVR','CYVR','Vancouver International Airport',1021,'CA');
/*!40000 ALTER TABLE `airport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `info` text DEFAULT NULL COMMENT '도시 설명',
  `country_id` char(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `city_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`iso_code2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1001,'London',51.5074,-0.1278,'The capital of the United Kingdom, known for its rich history, cultural attractions, and iconic landmarks such as the Tower Bridge and Buckingham Palace.','GB'),(1002,'Phuket',7.8804,98.3923,'An island in Thailand famous for its beautiful beaches, vibrant nightlife, and water sports.','TH'),(1003,'Bali',-8.3405,115.092,'A popular Indonesian island destination with stunning beaches, lush rice terraces, and a vibrant culture.','ID'),(1004,'New York',40.7128,-74.006,'The largest city in the United States, famous for its diverse culture, iconic skyscrapers, and attractions like Central Park and Times Square.','US'),(1005,'Tokyo',35.6828,139.759,'The capital of Japan, known for its modern technology, historic temples, and vibrant street life.','JP'),(1006,'Paris',48.8566,2.3522,'The capital of France, celebrated for its art, fashion, and iconic landmarks like the Eiffel Tower and the Louvre.','FR'),(1007,'Sydney',-33.8651,151.21,'The largest city in Australia, renowned for its stunning harbor, the Sydney Opera House, and beautiful beaches.','AU'),(1008,'Rio de Janeiro',-22.9068,-43.1729,'A coastal city in Brazil, famous for its Carnival, Copacabana Beach, and Christ the Redeemer statue.','BR'),(1009,'Amsterdam',52.3676,4.9041,'The capital of the Netherlands, known for its picturesque canals, historic architecture, and vibrant cultural scene.','NL'),(1010,'Dubai',25.277,55.2962,'A city in the United Arab Emirates known for its futuristic architecture, luxury shopping, and desert adventures.','AE'),(1011,'Cancun',21.1743,-86.8466,'A popular tourist destination in Mexico, famous for its beautiful beaches and vibrant nightlife.','MX'),(1012,'Barcelona',41.3851,2.1734,'A vibrant Spanish city famous for its architecture, art, and unique Catalan culture.','ES'),(1013,'Honolulu',21.3069,-157.858,'The capital of Hawaii, known for its beautiful beaches, surf culture, and natural beauty.','US'),(1014,'Berlin',52.52,13.405,'The capital of Germany, known for its history, arts, and lively nightlife.','DE'),(1015,'Marrakech',31.6295,-7.9811,'A city in Morocco famous for its colorful markets, historic palaces, and vibrant street life.','MA'),(1016,'Edinburgh',55.9533,-3.1883,'The capital of Scotland, celebrated for its rich history, festivals, and stunning architecture.','GB'),(1017,'Rome',41.9028,12.4964,'The capital of Italy, known for its ancient history, iconic monuments, and delicious cuisine.','IT'),(1018,'Bangkok',13.7563,100.502,'The capital of Thailand, famous for its vibrant street life, ornate temples, and delicious street food.','TH'),(1019,'Santorini',36.3932,25.4615,'A picturesque Greek island known for its stunning sunsets, white-washed buildings, and beautiful blue-domed churches.','GR'),(1020,'Cairo',30.0444,31.2357,'The capital of Egypt, famous for its ancient pyramids, historic sites, and bustling markets.','EG'),(1021,'Vancouver',49.2827,-123.121,'A Canadian city known for its natural beauty, outdoor activities, and diverse culture.','CA'),(1022,'Seoul',37.5665,126.978,'The capital of South Korea, celebrated for its technology, traditional palaces, and street food.','KR'),(1023,'Los Angeles',34.0522,-118.244,'A major city in California, known for its entertainment industry, beautiful beaches, and diverse neighborhoods.','US'),(1024,'Cape Town',-33.9249,18.4241,'A South African city known for its stunning scenery, wildlife, and multicultural atmosphere.','ZA'),(1025,'Phnom Penh',11.5564,104.928,'The capital of Cambodia, known for its rich history, royal palaces, and markets.','KH'),(1026,'Athens',37.9838,23.7275,'The capital of Greece, famous for its ancient ruins, historic sites, and Mediterranean cuisine.','GR'),(1027,'Auckland',-36.8485,174.763,'The largest city in New Zealand, known for its natural beauty, harbor, and outdoor activities.','NZ');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `continent`
--

DROP TABLE IF EXISTS `continent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `continent` (
  `id` int(11) NOT NULL,
  `continent_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `continent_name` (`continent_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `continent`
--

LOCK TABLES `continent` WRITE;
/*!40000 ALTER TABLE `continent` DISABLE KEYS */;
INSERT INTO `continent` VALUES (3006,'Africa'),(3007,'Antarctica'),(3002,'Asia'),(3001,'Europe'),(3003,'North America'),(3004,'Oceania'),(3005,'South America');
/*!40000 ALTER TABLE `continent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `iso_number` int(3) DEFAULT NULL,
  `iso_code3` char(3) DEFAULT NULL,
  `iso_code2` char(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `flag` text DEFAULT NULL COMMENT '국기 img url',
  `info` text DEFAULT NULL COMMENT '국가 정보',
  `continent_id` int(11) NOT NULL,
  PRIMARY KEY (`iso_code2`),
  KEY `continent_id` (`continent_id`),
  CONSTRAINT `country_ibfk_1` FOREIGN KEY (`continent_id`) REFERENCES `continent` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (784,'ARE','AE','United Arab Emirates','https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/255px-Flag_of_the_United_Arab_Emirates.svg.png',NULL,3002),(36,'AUS','AU','Australia','https://img.freepik.com/premium-vector/australia-flag-button-icon_147072-600.jpg',NULL,3004),(76,'BRA','BR','Brazil','https://i.namu.wiki/i/zp21MgQRhFJiasIohLO-MnI7LB2jDRlN9pEpiMSMy_KAXJxPUJfPzlNU3G8JzpNnJ0_JOUHvQVA_4viZGYbn5A.svg',NULL,3005),(124,'CAN','CA','Canada','https://img.freepik.com/premium-vector/canada-flag-official-colors-and-proportion-correctly-national-canada-flag_721791-960.jpg',NULL,3003),(276,'DEU','DE','Germany','https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_West_Germany%3B_Flag_of_Germany_%281990%E2%80%931996%29.svg/220px-Flag_of_West_Germany%3B_Flag_of_Germany_%281990%E2%80%931996%29.svg.png',NULL,3001),(818,'EGY','EG','Egypt','https://img.freepik.com/free-vector/illustration-of-egypt-flag_53876-27140.jpg',NULL,3006),(724,'ESP','ES','Spain','https://img.freepik.com/free-vector/illustration-of-spain-flag_53876-18168.jpg?size=626&ext=jpg&ga=GA1.1.1413502914.1697155200&semt=ais',NULL,3001),(250,'FRA','FR','France','https://img.freepik.com/premium-vector/australia-flag-button-icon_147072-600.jpg',NULL,3001),(826,'GBR','GB','UK','https://img.freepik.com/premium-vector/vector-image-of-the-british-flag-of-england-sign-of-the-kingdom-of-great-britain-lovely-london-badge_213497-1010.jpg',NULL,3001),(300,'GRC','GR','Greece','https://img.freepik.com/premium-vector/flag-of-greece-vector-illustration_514344-273.jpg',NULL,3001),(360,'IDN','ID','Indonesia','https://img.freepik.com/free-vector/illustration-of-indonesia-flag_53876-27131.jpg',NULL,3002),(380,'ITA','IT','Italy','https://img.freepik.com/free-vector/illustration-of-italy-flag_53876-27098.jpg',NULL,3001),(392,'JPN','JP','Japan','https://img.freepik.com/premium-vector/japan-flag_855948-3.jpg',NULL,3002),(116,'KHM','KH','Cambodia','https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_Cambodia.svg/510px-Flag_of_Cambodia.svg.png',NULL,3002),(410,'KOR','KR','South Korea','https://img.freepik.com/premium-vector/vector-south-korea-flag_1001513-6.jpg',NULL,3002),(504,'MAR','MA','Morocco','https://www.infomorocco.net/uploads/9/4/9/2/9492999/moro-flag_orig.jpg',NULL,3006),(484,'MEX','MX','Mexico','https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/290px-Flag_of_Mexico.svg.png',NULL,3003),(528,'NLD','NL','Netherlands','https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/255px-Flag_of_the_Netherlands.svg.png',NULL,3001),(554,'NZL','NZ','New Zealand','https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/1024px-Flag_of_New_Zealand.svg.png',NULL,3004),(764,'THA','TH','Thailand','https://img.freepik.com/free-vector/illustration-of-thailand-flag_53876-27145.jpg',NULL,3002),(840,'USA','US','USA','https://upload.wikimedia.org/wikipedia/commons/a/a9/Flag_of_the_United_States_%28DoS_ECA_Color_Standard%29.svg',NULL,3003),(710,'ZAF','ZA','South Africa','https://img.freepik.com/premium-vector/national-flag-of-south-africa-with-official-colors_445068-1821.jpg',NULL,3006);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (5001,4,'좋아요');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `landmark`
--

DROP TABLE IF EXISTS `landmark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `landmark` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` text DEFAULT NULL COMMENT 'img url',
  `info` text DEFAULT NULL COMMENT '랜드마크 설명',
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `landmark_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `landmark`
--

LOCK TABLES `landmark` WRITE;
/*!40000 ALTER TABLE `landmark` DISABLE KEYS */;
INSERT INTO `landmark` VALUES (2001,'Big Ben','https://www.thetrainline.com/cms/media/5743/uk-london-big-ben.jpg?mode=crop&width=660&height=440&quality=70','London\'s clock tower',1001),(2002,'Patong Beach','https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcQL3n6rfg8_wFwPHgF7CPU2f7n-qp1DYijHBwrcOxmsFvba8JL7pxpelV7fgwuabQkvMCgju2WZHiKXjfqcVrfl6zWpp-ft','Popular beach in Phuket',1002),(2003,'Jalan Legian','https://upload.wikimedia.org/wikipedia/commons/7/7e/Jalan_Legian_Hariadhi.jpg','Tourism and entertainment strip',1003),(2004,'Statue of Liberty','https://cdn.britannica.com/82/183382-050-D832EC3A/Detail-head-crown-Statue-of-Liberty-New.jpg','Iconic statue in New York Harbor',1004),(2005,'Tokyo Tower','https://upload.wikimedia.org/wikipedia/commons/5/58/Tokyo_Tower_2023.jpg','Radio transmission tower in Tokyo',1005),(2006,'Eiffel Tower','https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg/250px-Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg','Iron tower in Paris',1006),(2007,'Sydney Opera House','https://upload.wikimedia.org/wikipedia/commons/a/a0/Sydney_Australia._%2821339175489%29.jpg','Music and theater venue in Sydney',1007),(2008,'Christ the Redeemer','https://cdn.britannica.com/54/150754-050-5B93A950/statue-Christ-the-Redeemer-Rio-de-Janeiro.jpg','Christ the Redeemer is a towering Art Deco statue of Jesus Christ perched atop the Corcovado mountain in Rio de Janeiro, Brazil, serving as an iconic symbol of both the city and Christianity.',1008),(2009,'Anne Frank House','https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Amsterdam_%28NL%29%2C_Anne-Frank-Huis_--_2015_--_7185.jpg/1920px-Amsterdam_%28NL%29%2C_Anne-Frank-Huis_--_2015_--_7185.jpg','Anne Frank\'s hiding place in Amsterdam',1009),(2010,'Burj Al Arab','https://upload.wikimedia.org/wikipedia/en/thumb/2/2a/Burj_Al_Arab%2C_Dubai%2C_by_Joi_Ito_Dec2007.jpg/500px-Burj_Al_Arab%2C_Dubai%2C_by_Joi_Ito_Dec2007.jpg','7-star hotel in Dubai',1010),(2011,'Cancun Beach','https://www.livedreamdiscover.com/wp-content/uploads/2018/11/Cancun-5.jpg','Beach with turquoise waters in Mexico',1011),(2012,'Sagrada Familia','https://i.namu.wiki/i/j67-iKR3Hx769TT9hdBzLHwM0z5Ng2C-irZQfJbcO-bCZWFgVc08JQpEQzPJLa-mBhOz7d0GphRz5vLjxl3PYA.webp','Gaudi\'s architectural masterpiece in Barcelona',1012),(2013,'Diamond Head','https://loveoahu.org/wp-content/uploads/diamond-head-1.jpg','Volcanic crater in Hawaii',1013),(2014,'Brandenburg Gate','https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcRjnxHvL_WLcxDolBIKn2fcUtspSbZVJI1rFEitdp9eHNlobDqkNuHvfnyzWpdjmvRXbXsLmu5y83Qv_YKQdBo3coSmsqBX','Baroque-style gate in Berlin',1014),(2015,'Jemaa El-Fnaa Square','https://www.lesjardinsdelamedina.com/blog/wp-content/uploads/2020/07/jama-el-fnaa-678x381.jpg','Central square in Marrakech',1015),(2016,'Royal Mile','https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/High_Street%2C_Edinburgh.JPG/1920px-High_Street%2C_Edinburgh.JPG','Historic street in Edinburgh',1016),(2017,'Colosseum','https://www.artandobject.com/sites/default/files/styles/gallery_item/public/figure-1_0.jpeg?itok=RSQ7TxFQ','Famous ancient Roman arena in Rome',1017),(2018,'Wat Arun','https://a.cdn-hotels.com/gdcs/production50/d1634/bbe337ad-02fe-49d6-b761-02cab15d54f9.jpg?impolicy=fcrop&w=800&h=533&q=medium','Beautiful temple in Bangkok',1018),(2019,'Oia','https://a.cdn-hotels.com/gdcs/production33/d759/a6d5efb2-4232-43e1-b01e-6cef8b899bb0.jpg?impolicy=fcrop&w=1600&h=1066&q=medium','Beautiful village in Santorini',1019),(2020,'Giza Pyramids','https://media.architecturaldigest.com/photos/58e2a407c0e88d1a6a20066b/16:9/w_1280,c_limit/Pyramid%20of%20Giza%201.jpg','Historic astronomical site in Cairo',1020),(2021,'Stanley Park','https://www.hachettebookgroup.com/wp-content/uploads/2019/01/Vancouver_StanleyParkSeawall_jamesvancouver-iStock-520298306.jpg','Large urban park in Vancouver',1021),(2022,'Gyeongbokgung Palace','https://www.korea.net/upload/content/editImage/20230329144152690_2V3S9BMD.jpg','Palace in Seoul',1022),(2023,'Hollywood Sign','https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Hollywood_Sign_%28Zuschnitt%29.jpg/800px-Hollywood_Sign_%28Zuschnitt%29.jpg','Famous sign in Los Angeles',1023),(2024,'Table Mountain','https://cdn.britannica.com/41/75841-050-FAAE44F0/Table-Mountain-Cape-Town-Western-Bay-South.jpg','Mountain in Cape Town',1024),(2025,'Wat Phnom','https://files.intocambodia.org/content/small/adfb128d97ca55fe045fd0dc2af2c285.jpg','Temple in Phnom Penh',1025),(2026,'Acropolis','https://cdn-imgix.headout.com/microbrands-banner-image/image/b698f96a3bf7e35418940973f33c4708-The%20Acropolis%20of%20Athens.jpeg','Ancient temple in Athens',1026),(2027,'Sky Tower','https://upload.wikimedia.org/wikipedia/commons/f/f8/01_Auckland_New_Zealand-1000137.jpg','Observation tower in Auckland',1027);
/*!40000 ALTER TABLE `landmark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prediction`
--

DROP TABLE IF EXISTS `prediction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prediction` (
  `id` int(11) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '기록에 추가한 날짜. 나중에 정렬할 때 사용하면 좋을 듯.',
  `transportation_type` varchar(255) DEFAULT NULL,
  `transportation_cost` int(11) DEFAULT NULL,
  `accommodation_type` varchar(255) DEFAULT NULL,
  `accommodation_cost` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `prediction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `prediction_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prediction`
--

LOCK TABLES `prediction` WRITE;
/*!40000 ALTER TABLE `prediction` DISABLE KEYS */;
INSERT INTO `prediction` VALUES (6001,7,'2023-11-05 03:13:12','Airplane',2700,'Vacation rental',900,5001,1001),(6002,5,'2023-11-07 01:45:11','Train',344,'Guesthouse',400,5001,1002);
/*!40000 ALTER TABLE `prediction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text DEFAULT NULL COMMENT '리뷰 내용',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '업로드한 날짜 ',
  `img` text DEFAULT NULL COMMENT 'image를 추가할 수 있도록?',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `station`
--

DROP TABLE IF EXISTS `station`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `station_name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `station_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `station`
--

LOCK TABLES `station` WRITE;
/*!40000 ALTER TABLE `station` DISABLE KEYS */;
INSERT INTO `station` VALUES (4001,'Tokyo Train Station',1005),(4002,'Amsterdam Train Station',1009),(4003,'Barcelona Train Station',1012),(4004,'Edinburgh Train Station',1016),(4005,'Paris Plane Station',1006),(4006,'Bali Plane Station',1003),(4007,'London Train Station',1001),(4008,'Tokyo Plane Station',1005),(4009,'New York Bus Station',1004),(4010,'Sydney Plane Station',1007),(4011,'Rome Train Station',1017),(4012,'Bangkok Plane Station',1018),(4013,'Paris Train Station',1006),(4014,'Honolulu Plane Station',1013),(4015,'Phuket Train Station',1002),(4016,'Paris Car rental Station',1006),(4017,'Sydney Car rental Station',1007),(4018,'Rio de Janeiro Bus Station',1008),(4019,'Santorini Plane Station',1019),(4020,'Cairo Train Station',1020),(4021,'Cancun Plane Station',1011),(4022,'Barcelona Car rental Station',1012),(4023,'Vancouver Bus Station',1021),(4024,'Sydney Train Station',1007),(4025,'Rio de Janeiro Plane Station',1008),(4026,'Barcelona Plane Station',1012),(4027,'New York Plane Station',1004),(4028,'Bangkok Bus Station',1018),(4029,'Vancouver Train Station',1021),(4030,'Amsterdam Plane Station',1009),(4031,'Tokyo Bus Station',1005),(4032,'Rio de Janeiro Train Station',1008),(4033,'Seoul Subway Station',1022),(4034,'Los Angeles Car rental Station',1023),(4035,'Cape Town Car rental Station',1024),(4036,'Cape Town Car Station',1024),(4037,'Phuket Plane Station',1002),(4038,'Rome nan Station',1017),(4039,'New York Car rental Station',1004),(4040,'London Plane Station',1001),(4041,'Dubai Plane Station',1010),(4042,'Bangkok Train Station',1018),(4043,'Rome Plane Station',1017),(4044,'Bali Car rental Station',1003),(4045,'Seoul Train Station',1022),(4046,'Cape Town Plane Station',1024),(4047,'Rio de Janeiro Car rental Station',1008),(4048,'Santorini Ferry Station',1019),(4049,'Dubai Car rental Station',1010),(4050,'Phnom Penh Plane Station',1025),(4051,'Athens Plane Station',1026),(4052,'Paris Airplane Station',1006),(4053,'Sydney Airplane Station',1007),(4054,'New York Airplane Station',1004),(4055,'Rio de Janeiro Car Station',1008),(4056,'Vancouver Airplane Station',1021),(4057,'Barcelona Airplane Station',1012),(4058,'Auckland Train Station',1027);
/*!40000 ALTER TABLE `station` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trip`
--

DROP TABLE IF EXISTS `trip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `travelerName` varchar(255) DEFAULT NULL,
  `travelerAge` int(11) DEFAULT NULL,
  `travelerSex` enum('Female','Male') DEFAULT NULL COMMENT 'Female / Male',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `transportation_type` varchar(255) DEFAULT NULL,
  `transportation_cost` int(11) DEFAULT NULL,
  `accommodation_type` varchar(255) DEFAULT NULL,
  `accommodation_cost` int(11) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `trip_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trip`
--

LOCK TABLES `trip` WRITE;
/*!40000 ALTER TABLE `trip` DISABLE KEYS */;
INSERT INTO `trip` VALUES (1,'John Smith',35,'Male','2023-05-01','2023-05-08',7,'Airplane',2700,'Vacation rental',900,1001),(2,'Jane Doe',28,'Female','2023-06-15','2023-06-20',5,'Train',344,'Guesthouse',400,1002),(3,'David Lee',45,'Male','2023-07-01','2023-07-08',7,'Bus',70,'Guesthouse',400,1003),(4,'Sarah Johnson',29,'Female','2023-08-15','2023-08-29',14,'Airplane',2700,'Hotel',1506,1004),(5,'Kim Nguyen',26,'Female','2023-09-10','2023-09-17',7,'Bus',70,'Guesthouse',400,1005),(6,'Michael Brown',42,'Male','2023-10-05','2023-10-10',5,'Ferry',150,'Hotel',1506,1006),(7,'Emily Davis',33,'Female','2023-11-20','2023-11-30',10,'Airplane',2700,'Airbnb',1181,1007),(8,'Lucas Santos',25,'Male','2024-01-05','2024-01-12',7,'Plane',753,'Riad',600,1008),(9,'Laura Janssen',31,'Female','2024-02-14','2024-02-21',7,'Car',1433,'Airbnb',1181,1009),(10,'Mohammed Ali',39,'Male','2024-03-10','2024-03-17',7,'Car',1433,'Hotel',1506,1010),(11,'Ana Hernandez',27,'Female','2024-04-01','2024-04-08',7,'Train',344,'Airbnb',1181,1011),(12,'Carlos Garcia',36,'Male','2024-05-15','2024-05-22',7,'Ferry',150,'Riad',600,1012),(13,'Lily Wong',29,'Female','2024-06-10','2024-06-18',8,'Car rental',296,'Hotel',1506,1013),(14,'Hans Mueller',48,'Male','2024-07-01','2024-07-10',9,'Train',344,'Resort',1521,1014),(15,'Fatima Khouri',26,'Female','2024-08-20','2024-08-27',7,'Car rental',296,'Villa',1425,1015),(16,'James MacKenzie',32,'Male','2024-09-05','2024-09-12',7,'Plane',753,'Villa',1425,1016),(17,'Sarah Johnson',29,'Female','2023-09-01','2023-09-10',9,'Subway',20,'Hostel',622,1006),(18,'Michael Chang',28,'Male','2023-08-15','2023-08-25',10,'Car rental',296,'Villa',1425,1003),(19,'Olivia Rodriguez',35,'Female','2023-07-22','2023-07-28',6,'Car',1433,'Hostel',622,1001),(20,'Kenji Nakamura',45,'Male','2023-10-05','2023-10-15',10,'Subway',20,'Hotel',1506,1005),(21,'Emily Lee',27,'Female','2023-11-20','2023-11-25',5,'Car rental',296,'Hostel',622,1004),(22,'James Wilson',32,'Male','2023-12-05','2023-12-12',7,'Bus',70,'Hostel',622,1007),(23,'Sofia Russo',29,'Female','2023-11-01','2023-11-08',7,'Car',1433,'Airbnb',1181,1017),(24,'Raj Patel',40,'Male','2023-09-15','2023-09-23',8,'Ferry',150,'Airbnb',1181,1018),(25,'Lily Nguyen',24,'Female','2023-12-22','2023-12-28',6,'Flight',753,'Guesthouse',400,1006),(26,'David Kim',34,'Male','2023-08-01','2023-08-10',9,'Train',344,'Hostel',622,1013),(27,'Maria Garcia',31,'Female','2023-10-20','2023-10-28',8,'Ferry',150,'Airbnb',1181,1012),(28,'Alice Smith',30,'Female','2022-05-10','2022-05-18',8,'Airplane',2700,'Airbnb',1181,1005),(29,'Bob Johnson',45,'Male','2022-06-15','2022-06-22',7,'Airplane',2700,'Vacation rental',900,1002),(30,'Charlie Lee',25,'Male','2022-07-02','2022-07-11',9,'Train',344,'Villa',1425,1006),(31,'Emma Davis',28,'Female','2022-08-20','2022-09-02',13,'Subway',20,'Riad',600,1007),(32,'Olivia Martin',33,'Female','2022-09-05','2022-09-14',9,'Car',1433,'Riad',600,1008),(33,'Harry Wilson',20,'Male','2022-10-12','2022-10-20',8,'Plane',753,'Villa',1425,1019),(34,'Sophia Lee',37,'Female','2022-11-08','2022-11-15',7,'Train',344,'Airbnb',1181,1020),(35,'James Brown',42,'Male','2023-01-05','2023-01-15',10,'Train',344,'Hostel',622,1011),(36,'Mia Johnson',31,'Female','2023-02-14','2023-02-20',6,'Car',1433,'Riad',600,1017),(37,'William Davis',27,'Male','2023-03-23','2023-03-31',8,'Ferry',150,'Airbnb',1181,1012),(38,'Amelia Brown',38,'Female','2023-04-19','2023-04-26',7,'Bus',70,'Airbnb',1181,1021),(39,'Mia Johnson',31,'Female','2022-06-12','2022-06-19',7,'Airplane',2700,'Airbnb',1181,1006),(40,'Adam Lee',33,'Male','2023-01-02','2023-01-09',7,'Car',1433,'Riad',600,1007),(41,'Sarah Wong',28,'Female','2022-12-10','2022-12-18',8,'Bus',70,'Vacation rental',900,1005),(42,'John Smith',35,'Male','2023-07-01','2023-07-08',7,'Ferry',150,'Guesthouse',400,1011),(43,'Maria Silva',30,'Female','2022-11-20','2022-11-27',7,'Car rental',296,'Hotel',1506,1008),(44,'Peter Brown',55,'Male','2023-03-05','2023-03-12',7,'Ferry',150,'Villa',1425,1001),(45,'Emma Garcia',27,'Female','2023-08-18','2023-08-25',7,'Car',1433,'Hostel',622,1012),(46,'Michael Davis',41,'Male','2022-09-15','2022-09-22',7,'Flight',753,'Guesthouse',400,1004),(47,'Nina Patel',29,'Female','2023-05-01','2023-05-07',6,'Subway',20,'Hostel',622,1018),(48,'Kevin Kim',24,'Male','2022-07-10','2022-07-17',7,'Plane',753,'Hostel',622,1021),(49,'Laura van den Berg',31,'Female','2023-06-20','2023-06-28',8,'Bus',70,'Guesthouse',400,1009),(50,'Jennifer Nguyen',31,'Female','2023-08-15','2023-08-22',7,'Plane',753,'Vacation rental',900,1006),(51,'David Kim',34,'Male','2023-10-10','2023-10-20',10,'Flight',753,'Airbnb',1181,1005),(52,'Rachel Lee',27,'Female','2023-11-05','2023-11-12',7,'Flight',753,'Airbnb',1181,1007),(53,'Jessica Wong',28,'Female','2023-12-24','2023-12-31',7,'Flight',753,'Resort',1521,1004),(54,'Felipe Almeida',30,'Male','2024-01-15','2024-01-24',9,'Subway',20,'Vacation rental',900,1008),(55,'Nisa Patel',23,'Female','2024-02-01','2024-02-09',8,'Train',344,'Airbnb',1181,1018),(56,'Ben Smith',35,'Male','2024-03-15','2024-03-23',8,'Bus',70,'Villa',1425,1001),(57,'Laura Gomez',29,'Female','2024-04-05','2024-04-13',8,'Subway',20,'Resort',1521,1012),(58,'Park Min Woo',27,'Male','2024-05-10','2024-05-18',8,'Car',1433,'Vacation rental',900,1022),(59,'Michael Chen',26,'Male','2024-06-20','2024-06-27',7,'Airplane',2700,'Hotel',1506,1023),(60,'Sofia Rossi',33,'Female','2024-07-15','2024-07-23',8,'Subway',20,'Hotel',1506,1017),(61,'Rachel Sanders',35,'Female','2022-07-12','2022-07-18',6,'Train',344,'Airbnb',1181,1006),(62,'Kenji Nakamura',45,'Male','2022-09-03','2022-09-10',7,'Car rental',296,'Resort',1521,1005),(63,'Emily Watson',29,'Female','2023-01-07','2023-01-16',9,'Subway',20,'Guesthouse',400,1024),(64,'David Lee',45,'Male','2023-06-23','2023-06-29',6,'Car rental',296,'Vacation rental',900,1007),(65,'Ana Rodriguez',31,'Female','2023-08-18','2023-08-25',7,'Ferry',150,'Guesthouse',400,1012),(66,'Tom Wilson',27,'Male','2024-02-01','2024-02-08',7,'Plane',753,'Resort',1521,1003),(67,'Olivia Green',39,'Female','2024-05-06','2024-05-12',6,'Flight',753,'Hostel',622,1006),(68,'James Chen',25,'Male','2024-07-20','2024-07-26',6,'Airplane',2700,'Hostel',622,1004),(69,'Lila Patel',33,'Female','2024-09-08','2024-09-16',8,'Subway',20,'Villa',1425,1018),(70,'Marco Rossi',41,'Male','2025-02-14','2025-02-20',6,'Subway',20,'Vacation rental',900,1017),(71,'Sarah Brown',37,'Female','2025-05-21','2025-05-29',8,'Plane',753,'Villa',1425,1003),(73,'Sarah Lee',35,'Female','2022-08-05','2022-08-12',7,'Subway',20,'Riad',600,1003),(74,'Alex Kim',29,'Male','2023-01-01','2023-01-09',8,'Car rental',296,'Riad',600,1005),(75,'Maria Hernandez',42,'Female','2023-04-15','2023-04-22',7,'Car rental',296,'Hostel',622,1011),(76,'John Smith',35,'Male','2023-06-07','2023-06-14',7,'Plane',753,'Airbnb',1181,1006),(77,'Mark Johnson',31,'Male','2023-09-01','2023-09-10',9,'Flight',753,'Riad',600,1024),(78,'Amanda Chen',25,'Female','2023-11-12','2023-11-19',7,'Subway',20,'Vacation rental',900,1003),(79,'David Lee',45,'Male','2024-02-05','2024-02-12',7,'Ferry',150,'Villa',1425,1007),(80,'Nana Kwon',27,'Female','2024-05-15','2024-05-22',7,'Airplane',2700,'Guesthouse',400,1018),(81,'Tom Hanks',60,'Male','2024-08-20','2024-08-27',7,'Plane',753,'Vacation rental',900,1004),(82,'Emma Watson',32,'Female','2025-01-01','2025-01-08',7,'Ferry',150,'Hotel',1506,1002),(83,'James Kim',41,'Male','2025-04-15','2025-04-22',7,'Car rental',296,'Hotel',1506,1017),(84,'John Smith',35,'Male','2021-06-15','2021-06-20',6,'Car rental',296,'Vacation rental',900,1006),(85,'Sarah Lee',35,'Female','2021-07-01','2021-07-10',10,'Bus',70,'Vacation rental',900,1005),(86,'Maria Garcia',31,'Female','2021-08-10','2021-08-20',11,'Train',344,'Guesthouse',400,1003),(87,'David Lee',45,'Male','2021-09-01','2021-09-10',9,'Train',344,'Airbnb',1181,1007),(88,'Emily Davis',33,'Female','2021-10-15','2021-10-20',6,'Train',344,'Hotel',1506,1004),(89,'James Wilson',32,'Male','2021-11-20','2021-11-30',11,'Car rental',296,'Airbnb',1181,1001),(90,'Fatima Ahmed',24,'Female','2022-01-01','2022-01-08',8,'Car',1433,'Hostel',622,1010),(91,'Liam Nguyen',26,'Male','2022-02-14','2022-02-20',7,'Train',344,'Guesthouse',400,1018),(92,'Giulia Rossi',30,'Female','2022-03-10','2022-03-20',11,'Car',1433,'Hostel',622,1017),(93,'Putra Wijaya',33,'Male','2022-04-15','2022-04-25',11,'Car',1433,'Villa',1425,1003),(94,'Kim Min-ji',27,'Female','2022-05-01','2022-05-10',10,'Car rental',296,'Riad',600,1022),(95,'John Smith',35,'Male','2022-06-15','2022-06-20',5,'Train',344,'Airbnb',1181,1006),(96,'Emily Johnson',28,'Female','2022-09-01','2022-09-10',9,'Airplane',2700,'Guesthouse',400,1005),(97,'David Lee',45,'Male','2022-11-23','2022-12-02',9,'Airplane',2700,'Resort',1521,1007),(98,'Sarah Brown',37,'Female','2023-02-14','2023-02-19',5,'Plane',753,'Villa',1425,1001),(99,'Michael Wong',50,'Male','2023-05-08','2023-05-14',6,'Flight',753,'Hostel',622,1004),(100,'Jessica Chen',31,'Female','2023-08-20','2023-08-27',7,'Car rental',296,'Hotel',1506,1017),(101,'Ken Tanaka',42,'Male','2023-11-12','2023-11-20',8,'Ferry',150,'Resort',1521,1018),(102,'Maria Garcia',31,'Female','2024-01-06','2024-01-14',8,'Subway',20,'Airbnb',1181,1024),(103,'Rodrigo Oliveira',33,'Male','2024-04-03','2024-04-10',7,'Car rental',296,'Hotel',1506,1008),(104,'Olivia Kim',29,'Female','2024-07-22','2024-07-28',6,'Train',344,'Airbnb',1181,1003),(105,'Robert Mueller',41,'Male','2024-10-10','2024-10-17',7,'Plane',753,'Vacation rental',900,1009),(106,'John Smith',35,'Male','2022-05-15','2022-05-20',5,'Car rental',296,'Villa',1425,1006),(107,'Sarah Lee',35,'Female','2022-09-01','2022-09-10',9,'Plane',753,'Guesthouse',400,1005),(108,'Michael Wong',50,'Male','2022-06-20','2022-06-25',5,'Flight',753,'Vacation rental',900,1004),(109,'Lisa Chen',30,'Female','2022-08-12','2022-08-20',8,'Ferry',150,'Hotel',1506,1003),(110,'David Kim',34,'Male','2022-07-01','2022-07-10',9,'Train',344,'Villa',1425,1007),(111,'Emily Wong',38,'Female','2022-06-10','2022-06-15',5,'Subway',20,'Villa',1425,1001),(112,'Mark Tan',45,'Male','2022-09-05','2022-09-12',7,'Bus',70,'Airbnb',1181,1002),(113,'Emma Lee',31,'Female','2022-05-01','2022-05-08',7,'Car rental',296,'Hostel',622,1017),(114,'George Chen',27,'Male','2022-07-15','2022-07-22',7,'Airplane',2700,'Hostel',622,1019),(115,'Sophia Kim',29,'Female','2022-08-25','2022-08-30',5,'Flight',753,'Hostel',622,1010),(116,'Alex Ng',33,'Male','2022-09-10','2022-09-15',5,'Plane',753,'Guesthouse',400,1025),(117,'Alice Smith',30,'Female','2022-02-05','2022-02-14',9,'Bus',70,'Airbnb',1181,1005),(118,'Bob Johnson',45,'Male','2022-03-15','2022-03-22',7,'Subway',20,'Riad',600,1006),(119,'Cindy Chen',26,'Female','2022-05-01','2022-05-12',11,'Ferry',150,'Airbnb',1181,1007),(120,'David Lee',45,'Male','2022-06-10','2022-06-17',7,'Plane',753,'Riad',600,1017),(121,'Emily Kim',29,'Female','2022-07-20','2022-07-30',10,'Plane',753,'Villa',1425,1003),(122,'Frank Li',41,'Male','2022-08-08','2022-08-16',8,'Bus',70,'Vacation rental',900,1011),(123,'Gina Lee',35,'Female','2022-09-20','2022-09-30',10,'Subway',20,'Airbnb',1181,1026),(124,'Henry Kim',24,'Male','2022-10-05','2022-10-13',8,'Ferry',150,'Resort',1521,1005),(125,'Isabella Chen',30,'Female','2022-11-11','2022-11-21',10,'Airplane',2700,'Airbnb',1181,1007),(126,'Jack Smith',28,'Male','2022-12-24','2023-01-01',8,'Airplane',2700,'Resort',1521,1006),(127,'Katie Johnson',33,'Female','2023-02-10','2023-02-18',8,'Subway',20,'Airbnb',1181,1003),(129,'John Doe',35,'Male','2023-05-01','2023-05-07',6,'Car',1433,'Resort',1521,1006),(130,'Jane Smith',28,'Female','2023-05-15','2023-05-22',7,'Train',344,'Villa',1425,1005),(131,'Michael Johnson',45,'Male','2023-06-01','2023-06-10',9,'Train',344,'Hotel',1506,1024),(132,'Sarah Lee',35,'Female','2023-06-15','2023-06-21',6,'Airplane',2700,'Resort',1521,1007),(133,'David Kim',34,'Male','2023-07-01','2023-07-08',7,'Bus',70,'Hostel',622,1017),(134,'Emily Davis',33,'Female','2023-07-15','2023-07-22',7,'Car rental',296,'Resort',1521,1004),(135,'Jose Perez',37,'Male','2023-08-01','2023-08-10',9,'Airplane',2700,'Resort',1521,1008),(136,'Emma Wilson',29,'Female','2023-08-15','2023-08-21',6,'Car',1433,'Villa',1425,1021),(137,'Ryan Chen',34,'Male','2023-09-01','2023-09-08',7,'Car rental',296,'Vacation rental',900,1018),(138,'Sofia Rodriguez',25,'Female','2023-09-15','2023-09-22',7,'Airplane',2700,'Airbnb',1181,1012),(139,'William Brown',39,'Male','2023-10-01','2023-10-08',7,'Flight',753,'Resort',1521,1027);
/*!40000 ALTER TABLE `trip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL COMMENT '회원가입 및 로그인에 사용',
  `pw` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `sex` enum('Female','Male') DEFAULT NULL COMMENT 'Female / Male',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (5001,'alice@naver.com','alice','alice',21,'Female');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userliked`
--

DROP TABLE IF EXISTS `userliked`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userliked` (
  `user_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`city_id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `userliked_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `userliked_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userliked`
--

LOCK TABLES `userliked` WRITE;
/*!40000 ALTER TABLE `userliked` DISABLE KEYS */;
INSERT INTO `userliked` VALUES (5001,1001),(5001,1002),(5001,1003),(5001,1004),(5001,1005);
/*!40000 ALTER TABLE `userliked` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-09  9:47:32
