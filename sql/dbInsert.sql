Use team02;



-- Continent DB

INSERT INTO continent (continent_name, id) VALUES ('Europe', '3001');
INSERT INTO continent (continent_name, id) VALUES ('Asia', '3002');
INSERT INTO continent (continent_name, id) VALUES ('North America', '3003');
INSERT INTO continent (continent_name, id) VALUES ('Oceania', '3004');
INSERT INTO continent (continent_name, id) VALUES ('South America', '3005');
INSERT INTO continent (continent_name, id) VALUES ('Africa', '3006');
INSERT INTO continent (continent_name, id) VALUES ('Antarctica', '3007');

-- Country DB

INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('UK', '826', 'GBR', 'GB', '3001', 'https://img.freepik.com/premium-vector/vector-image-of-the-british-flag-of-england-sign-of-the-kingdom-of-great-britain-lovely-london-badge_213497-1010.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Thailand', '764', 'THA', 'TH', '3002', 'https://img.freepik.com/free-vector/illustration-of-thailand-flag_53876-27145.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Indonesia', '360', 'IDN', 'ID', '3002', 'https://img.freepik.com/free-vector/illustration-of-indonesia-flag_53876-27131.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('USA', '840', 'USA', 'US', '3003', 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Flag_of_the_United_States_%28DoS_ECA_Color_Standard%29.svg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Japan', '392', 'JPN', 'JP', '3002', 'https://img.freepik.com/premium-vector/japan-flag_855948-3.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('France', '250', 'FRA', 'FR', '3001', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%29.svg/383px-Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%29.svg.png');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Australia', '36', 'AUS', 'AU', '3004', 'https://img.freepik.com/premium-vector/australia-flag-button-icon_147072-600.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Brazil', '76', 'BRA', 'BR', '3005', 'https://i.namu.wiki/i/zp21MgQRhFJiasIohLO-MnI7LB2jDRlN9pEpiMSMy_KAXJxPUJfPzlNU3G8JzpNnJ0_JOUHvQVA_4viZGYbn5A.svg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Netherlands', '528', 'NLD', 'NL', '3001', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/255px-Flag_of_the_Netherlands.svg.png');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('United Arab Emirates', '784', 'ARE', 'AE', '3002', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/255px-Flag_of_the_United_Arab_Emirates.svg.png');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Mexico', '484', 'MEX', 'MX', '3003', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/290px-Flag_of_Mexico.svg.png');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Spain', '724', 'ESP', 'ES', '3001', 'https://img.freepik.com/free-vector/illustration-of-spain-flag_53876-18168.jpg?size=626&ext=jpg&ga=GA1.1.1413502914.1697155200&semt=ais');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Germany', '276', 'DEU', 'DE', '3001', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_West_Germany%3B_Flag_of_Germany_%281990%E2%80%931996%29.svg/220px-Flag_of_West_Germany%3B_Flag_of_Germany_%281990%E2%80%931996%29.svg.png');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Morocco', '504', 'MAR', 'MA', '3006', 'https://www.infomorocco.net/uploads/9/4/9/2/9492999/moro-flag_orig.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Italy', '380', 'ITA', 'IT', '3001', 'https://img.freepik.com/free-vector/illustration-of-italy-flag_53876-27098.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Greece', '300', 'GRC', 'GR', '3001', 'https://img.freepik.com/premium-vector/flag-of-greece-vector-illustration_514344-273.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Egypt', '818', 'EGY', 'EG', '3006', 'https://img.freepik.com/free-vector/illustration-of-egypt-flag_53876-27140.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Canada', '124', 'CAN', 'CA', '3003', 'https://img.freepik.com/premium-vector/canada-flag-official-colors-and-proportion-correctly-national-canada-flag_721791-960.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('South Korea', '410', 'KOR', 'KR', '3002', 'https://img.freepik.com/premium-vector/vector-south-korea-flag_1001513-6.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('South Africa', '710', 'ZAF', 'ZA', '3006', 'https://img.freepik.com/premium-vector/national-flag-of-south-africa-with-official-colors_445068-1821.jpg');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('Cambodia', '116', 'KHM', 'KH', '3002','https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_Cambodia.svg/510px-Flag_of_Cambodia.svg.png');
INSERT INTO country (name, iso_number, iso_code3, iso_code2, continent_id, flag) VALUES ('New Zealand', '554', 'NZL', 'NZ', '3004', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/1024px-Flag_of_New_Zealand.svg.png');



-- city DB

INSERT INTO city VALUES(1001, 'London', 51.5074, -0.1278, 'The capital of the United Kingdom, known for its rich history, cultural attractions, and iconic landmarks such as the Tower Bridge and Buckingham Palace.', 'GB');
INSERT INTO city VALUES(1002, 'Phuket', 7.8804, 98.3923, 'An island in Thailand famous for its beautiful beaches, vibrant nightlife, and water sports.', 'TH');
INSERT INTO city VALUES(1003, 'Bali', -8.3405, 115.092, 'A popular Indonesian island destination with stunning beaches, lush rice terraces, and a vibrant culture.', 'ID');
INSERT INTO city VALUES(1004, 'New York', 40.7128, -74.006, 'The largest city in the United States, famous for its diverse culture, iconic skyscrapers, and attractions like Central Park and Times Square.', 'US');
INSERT INTO city VALUES(1005, 'Tokyo', 35.682839, 139.759455, 'The capital of Japan, known for its modern technology, historic temples, and vibrant street life.', 'JP');
INSERT INTO city VALUES(1006, 'Paris', 48.8566, 2.3522, 'The capital of France, celebrated for its art, fashion, and iconic landmarks like the Eiffel Tower and the Louvre.', 'FR');
INSERT INTO city VALUES(1007, 'Sydney', -33.8651, 151.2099, 'The largest city in Australia, renowned for its stunning harbor, the Sydney Opera House, and beautiful beaches.', 'AU');
INSERT INTO city VALUES(1008, 'Rio de Janeiro', -22.9068, -43.1729, 'A coastal city in Brazil, famous for its Carnival, Copacabana Beach, and Christ the Redeemer statue.', 'BR');
INSERT INTO city VALUES(1009, 'Amsterdam', 52.3676, 4.9041, 'The capital of the Netherlands, known for its picturesque canals, historic architecture, and vibrant cultural scene.', 'NL');
INSERT INTO city VALUES(1010, 'Dubai', 25.276987, 55.296249, 'A city in the United Arab Emirates known for its futuristic architecture, luxury shopping, and desert adventures.', 'AE');
INSERT INTO city VALUES(1011, 'Cancun', 21.1743, -86.8466, 'A popular tourist destination in Mexico, famous for its beautiful beaches and vibrant nightlife.', 'MX');
INSERT INTO city VALUES(1012, 'Barcelona', 41.3851, 2.1734, 'A vibrant Spanish city famous for its architecture, art, and unique Catalan culture.', 'ES');
INSERT INTO city VALUES(1013, 'Honolulu', 21.3069, -157.8583, 'The capital of Hawaii, known for its beautiful beaches, surf culture, and natural beauty.', 'US');
INSERT INTO city VALUES(1014, 'Berlin', 52.52, 13.405, 'The capital of Germany, known for its history, arts, and lively nightlife.', 'DE');
INSERT INTO city VALUES(1015, 'Marrakech', 31.6295, -7.9811, 'A city in Morocco famous for its colorful markets, historic palaces, and vibrant street life.', 'MA');
INSERT INTO city VALUES(1016, 'Edinburgh', 55.9533, -3.1883, 'The capital of Scotland, celebrated for its rich history, festivals, and stunning architecture.', 'GB');
INSERT INTO city VALUES(1017, 'Rome', 41.9028, 12.4964, 'The capital of Italy, known for its ancient history, iconic monuments, and delicious cuisine.', 'IT');
INSERT INTO city VALUES(1018, 'Bangkok', 13.7563, 100.5018, 'The capital of Thailand, famous for its vibrant street life, ornate temples, and delicious street food.', 'TH');
INSERT INTO city VALUES(1019, 'Santorini', 36.3932, 25.4615, 'A picturesque Greek island known for its stunning sunsets, white-washed buildings, and beautiful blue-domed churches.', 'GR');
INSERT INTO city VALUES(1020, 'Cairo', 30.0444, 31.2357, 'The capital of Egypt, famous for its ancient pyramids, historic sites, and bustling markets.', 'EG');
INSERT INTO city VALUES(1021, 'Vancouver', 49.2827, -123.1207, 'A Canadian city known for its natural beauty, outdoor activities, and diverse culture.', 'CA');
INSERT INTO city VALUES(1022, 'Seoul', 37.5665, 126.978, 'The capital of South Korea, celebrated for its technology, traditional palaces, and street food.', 'KR');
INSERT INTO city VALUES(1023, 'Los Angeles', 34.0522, -118.2437, 'A major city in California, known for its entertainment industry, beautiful beaches, and diverse neighborhoods.', 'US');
INSERT INTO city VALUES(1024, 'Cape Town', -33.9249, 18.4241, 'A South African city known for its stunning scenery, wildlife, and multicultural atmosphere.', 'ZA');
INSERT INTO city VALUES(1025, 'Phnom Penh', 11.5564, 104.9282, 'The capital of Cambodia, known for its rich history, royal palaces, and markets.', 'KH');
INSERT INTO city VALUES(1026, 'Athens', 37.9838, 23.7275, 'The capital of Greece, famous for its ancient ruins, historic sites, and Mediterranean cuisine.', 'GR');
INSERT INTO city VALUES(1027, 'Auckland', -36.8485, 174.7633, 'The largest city in New Zealand, known for its natural beauty, harbor, and outdoor activities.', 'NZ');




-- trip table
INSERT INTO trip VALUES(1, 'John Smith', 35, 'Male', '2023-05-01', '2023-05-08',7,'Airplane',2700 ,'Vacation rental',900,1001);
INSERT INTO trip VALUES(2, 'Jane Doe', 28, 'Female', '2023-06-15', '2023-06-20',5,'Train',344 ,'Guesthouse',400,1002);
INSERT INTO trip VALUES(3, 'David Lee', 45, 'Male', '2023-07-01', '2023-07-08',7,'Bus',70 ,'Guesthouse',400,1003);
INSERT INTO trip VALUES(4, 'Sarah Johnson', 29, 'Female', '2023-08-15', '2023-08-29',14,'Airplane',2700 ,'Hotel',1506,1004);
INSERT INTO trip VALUES(5, 'Kim Nguyen', 26, 'Female', '2023-09-10', '2023-09-17',7,'Bus',70 ,'Guesthouse',400,1005);
INSERT INTO trip VALUES(6, 'Michael Brown', 42, 'Male', '2023-10-05', '2023-10-10',5,'Ferry',150 ,'Hotel',1506,1006);
INSERT INTO trip VALUES(7, 'Emily Davis', 33, 'Female', '2023-11-20', '2023-11-30',10,'Airplane',2700 ,'Airbnb',1181,1007);
INSERT INTO trip VALUES(8, 'Lucas Santos', 25, 'Male', '2024-01-05', '2024-01-12',7,'Plane',753 ,'Riad',600,1008);
INSERT INTO trip VALUES(9, 'Laura Janssen', 31, 'Female', '2024-02-14', '2024-02-21',7,'Car',1433 ,'Airbnb',1181,1009);
INSERT INTO trip VALUES(10, 'Mohammed Ali', 39, 'Male', '2024-03-10', '2024-03-17',7,'Car',1433 ,'Hotel',1506,1010);
INSERT INTO trip VALUES(11, 'Ana Hernandez', 27, 'Female', '2024-04-01', '2024-04-08',7,'Train',344 ,'Airbnb',1181,1011);
INSERT INTO trip VALUES(12, 'Carlos Garcia', 36, 'Male', '2024-05-15', '2024-05-22',7,'Ferry',150 ,'Riad',600,1012);
INSERT INTO trip VALUES(13, 'Lily Wong', 29, 'Female', '2024-06-10', '2024-06-18',8,'Car rental',296 ,'Hotel',1506,1013);
INSERT INTO trip VALUES(14, 'Hans Mueller', 48, 'Male', '2024-07-01', '2024-07-10',9,'Train',344 ,'Resort',1521,1014);
INSERT INTO trip VALUES(15, 'Fatima Khouri', 26, 'Female', '2024-08-20', '2024-08-27',7,'Car rental',296 ,'Villa',1425,1015);
INSERT INTO trip VALUES(16, 'James MacKenzie', 32, 'Male', '2024-09-05', '2024-09-12',7,'Plane',753 ,'Villa',1425,1016);
INSERT INTO trip VALUES(17, 'Sarah Johnson', 29, 'Female', '2023-09-01', '2023-09-10',9,'Subway',20 ,'Hostel',622,1006);
INSERT INTO trip VALUES(18, 'Michael Chang', 28, 'Male', '2023-08-15', '2023-08-25',10,'Car rental',296 ,'Villa',1425,1003);
INSERT INTO trip VALUES(19, 'Olivia Rodriguez', 35, 'Female', '2023-07-22', '2023-07-28',6,'Car',1433 ,'Hostel',622,1001);
INSERT INTO trip VALUES(20, 'Kenji Nakamura', 45, 'Male', '2023-10-05', '2023-10-15',10,'Subway',20 ,'Hotel',1506,1005);
INSERT INTO trip VALUES(21, 'Emily Lee', 27, 'Female', '2023-11-20', '2023-11-25',5,'Car rental',296 ,'Hostel',622,1004);
INSERT INTO trip VALUES(22, 'James Wilson', 32, 'Male', '2023-12-05', '2023-12-12',7,'Bus',70 ,'Hostel',622,1007);
INSERT INTO trip VALUES(23, 'Sofia Russo', 29, 'Female', '2023-11-01', '2023-11-08',7,'Car',1433 ,'Airbnb',1181,1017);
INSERT INTO trip VALUES(24, 'Raj Patel', 40, 'Male', '2023-09-15', '2023-09-23',8,'Ferry',150 ,'Airbnb',1181,1018);
INSERT INTO trip VALUES(25, 'Lily Nguyen', 24, 'Female', '2023-12-22', '2023-12-28',6,'Flight',753 ,'Guesthouse',400,1006);
INSERT INTO trip VALUES(26, 'David Kim', 34, 'Male', '2023-08-01', '2023-08-10',9,'Train',344 ,'Hostel',622,1013);
INSERT INTO trip VALUES(27, 'Maria Garcia', 31, 'Female', '2023-10-20', '2023-10-28',8,'Ferry',150 ,'Airbnb',1181,1012);
INSERT INTO trip VALUES(28, 'Alice Smith', 30, 'Female', '2022-05-10', '2022-05-18',8,'Airplane',2700 ,'Airbnb',1181,1005);
INSERT INTO trip VALUES(29, 'Bob Johnson', 45, 'Male', '2022-06-15', '2022-06-22',7,'Airplane',2700 ,'Vacation rental',900,1002);
INSERT INTO trip VALUES(30, 'Charlie Lee', 25, 'Male', '2022-07-02', '2022-07-11',9,'Train',344 ,'Villa',1425,1006);
INSERT INTO trip VALUES(31, 'Emma Davis', 28, 'Female', '2022-08-20', '2022-09-02',13,'Subway',20 ,'Riad',600,1007);
INSERT INTO trip VALUES(32, 'Olivia Martin', 33, 'Female', '2022-09-05', '2022-09-14',9,'Car',1433 ,'Riad',600,1008);
INSERT INTO trip VALUES(33, 'Harry Wilson', 20, 'Male', '2022-10-12', '2022-10-20',8,'Plane',753 ,'Villa',1425,1019);
INSERT INTO trip VALUES(34, 'Sophia Lee', 37, 'Female', '2022-11-08', '2022-11-15',7,'Train',344 ,'Airbnb',1181,1020);
INSERT INTO trip VALUES(35, 'James Brown', 42, 'Male', '2023-01-05', '2023-01-15',10,'Train',344 ,'Hostel',622,1011);
INSERT INTO trip VALUES(36, 'Mia Johnson', 31, 'Female', '2023-02-14', '2023-02-20',6,'Car',1433 ,'Riad',600,1017);
INSERT INTO trip VALUES(37, 'William Davis', 27, 'Male', '2023-03-23', '2023-03-31',8,'Ferry',150 ,'Airbnb',1181,1012);
INSERT INTO trip VALUES(38, 'Amelia Brown', 38, 'Female', '2023-04-19', '2023-04-26',7,'Bus',70 ,'Airbnb',1181,1021);
INSERT INTO trip VALUES(39, 'Mia Johnson', 31, 'Female', '2022-06-12', '2022-06-19',7,'Airplane',2700 ,'Airbnb',1181,1006);
INSERT INTO trip VALUES(40, 'Adam Lee', 33, 'Male', '2023-01-02', '2023-01-09',7,'Car',1433 ,'Riad',600,1007);
INSERT INTO trip VALUES(41, 'Sarah Wong', 28, 'Female', '2022-12-10', '2022-12-18',8,'Bus',70 ,'Vacation rental',900,1005);
INSERT INTO trip VALUES(42, 'John Smith', 35, 'Male', '2023-07-01', '2023-07-08',7,'Ferry',150 ,'Guesthouse',400,1011);
INSERT INTO trip VALUES(43, 'Maria Silva', 30, 'Female', '2022-11-20', '2022-11-27',7,'Car rental',296 ,'Hotel',1506,1008);
INSERT INTO trip VALUES(44, 'Peter Brown', 55, 'Male', '2023-03-05', '2023-03-12',7,'Ferry',150 ,'Villa',1425,1001);
INSERT INTO trip VALUES(45, 'Emma Garcia', 27, 'Female', '2023-08-18', '2023-08-25',7,'Car',1433 ,'Hostel',622,1012);
INSERT INTO trip VALUES(46, 'Michael Davis', 41, 'Male', '2022-09-15', '2022-09-22',7,'Flight',753 ,'Guesthouse',400,1004);
INSERT INTO trip VALUES(47, 'Nina Patel', 29, 'Female', '2023-05-01', '2023-05-07',6,'Subway',20 ,'Hostel',622,1018);
INSERT INTO trip VALUES(48, 'Kevin Kim', 24, 'Male', '2022-07-10', '2022-07-17',7,'Plane',753 ,'Hostel',622,1021);
INSERT INTO trip VALUES(49, 'Laura van den Berg', 31, 'Female', '2023-06-20', '2023-06-28',8,'Bus',70 ,'Guesthouse',400,1009);
INSERT INTO trip VALUES(50, 'Jennifer Nguyen', 31, 'Female', '2023-08-15', '2023-08-22',7,'Plane',753 ,'Vacation rental',900,1006);
INSERT INTO trip VALUES(51, 'David Kim', 34, 'Male', '2023-10-10', '2023-10-20',10,'Flight',753 ,'Airbnb',1181,1005);
INSERT INTO trip VALUES(52, 'Rachel Lee', 27, 'Female', '2023-11-05', '2023-11-12',7,'Flight',753 ,'Airbnb',1181,1007);
INSERT INTO trip VALUES(53, 'Jessica Wong', 28, 'Female', '2023-12-24', '2023-12-31',7,'Flight',753 ,'Resort',1521,1004);
INSERT INTO trip VALUES(54, 'Felipe Almeida', 30, 'Male', '2024-01-15', '2024-01-24',9,'Subway',20 ,'Vacation rental',900,1008);
INSERT INTO trip VALUES(55, 'Nisa Patel', 23, 'Female', '2024-02-01', '2024-02-09',8,'Train',344 ,'Airbnb',1181,1018);
INSERT INTO trip VALUES(56, 'Ben Smith', 35, 'Male', '2024-03-15', '2024-03-23',8,'Bus',70 ,'Villa',1425,1001);
INSERT INTO trip VALUES(57, 'Laura Gomez', 29, 'Female', '2024-04-05', '2024-04-13',8,'Subway',20 ,'Resort',1521,1012);
INSERT INTO trip VALUES(58, 'Park Min Woo', 27, 'Male', '2024-05-10', '2024-05-18',8,'Car',1433 ,'Vacation rental',900,1022);
INSERT INTO trip VALUES(59, 'Michael Chen', 26, 'Male', '2024-06-20', '2024-06-27',7,'Airplane',2700 ,'Hotel',1506,1023);
INSERT INTO trip VALUES(60, 'Sofia Rossi', 33, 'Female', '2024-07-15', '2024-07-23',8,'Subway',20 ,'Hotel',1506,1017);
INSERT INTO trip VALUES(61, 'Rachel Sanders', 35, 'Female', '2022-07-12', '2022-07-18',6,'Train',344 ,'Airbnb',1181,1006);
INSERT INTO trip VALUES(62, 'Kenji Nakamura', 45, 'Male', '2022-09-03', '2022-09-10',7,'Car rental',296 ,'Resort',1521,1005);
INSERT INTO trip VALUES(63, 'Emily Watson', 29, 'Female', '2023-01-07', '2023-01-16',9,'Subway',20 ,'Guesthouse',400,1024);
INSERT INTO trip VALUES(64, 'David Lee', 45, 'Male', '2023-06-23', '2023-06-29',6,'Car rental',296 ,'Vacation rental',900,1007);
INSERT INTO trip VALUES(65, 'Ana Rodriguez', 31, 'Female', '2023-08-18', '2023-08-25',7,'Ferry',150 ,'Guesthouse',400,1012);
INSERT INTO trip VALUES(66, 'Tom Wilson', 27, 'Male', '2024-02-01', '2024-02-08',7,'Plane',753 ,'Resort',1521,1003);
INSERT INTO trip VALUES(67, 'Olivia Green', 39, 'Female', '2024-05-06', '2024-05-12',6,'Flight',753 ,'Hostel',622,1006);
INSERT INTO trip VALUES(68, 'James Chen', 25, 'Male', '2024-07-20', '2024-07-26',6,'Airplane',2700 ,'Hostel',622,1004);
INSERT INTO trip VALUES(69, 'Lila Patel', 33, 'Female', '2024-09-08', '2024-09-16',8,'Subway',20 ,'Villa',1425,1018);
INSERT INTO trip VALUES(70, 'Marco Rossi', 41, 'Male', '2025-02-14', '2025-02-20',6,'Subway',20 ,'Vacation rental',900,1017);
INSERT INTO trip VALUES(71, 'Sarah Brown', 37, 'Female', '2025-05-21', '2025-05-29',8,'Plane',753 ,'Villa',1425,1003);
INSERT INTO trip VALUES(73, 'Sarah Lee', 35, 'Female', '2022-08-05', '2022-08-12',7,'Subway',20 ,'Riad',600,1003);
INSERT INTO trip VALUES(74, 'Alex Kim', 29, 'Male', '2023-01-01', '2023-01-09',8,'Car rental',296 ,'Riad',600,1005);
INSERT INTO trip VALUES(75, 'Maria Hernandez', 42, 'Female', '2023-04-15', '2023-04-22',7,'Car rental',296 ,'Hostel',622,1011);
INSERT INTO trip VALUES(76, 'John Smith', 35, 'Male', '2023-06-07', '2023-06-14',7,'Plane',753 ,'Airbnb',1181,1006);
INSERT INTO trip VALUES(77, 'Mark Johnson', 31, 'Male', '2023-09-01', '2023-09-10',9,'Flight',753 ,'Riad',600,1024);
INSERT INTO trip VALUES(78, 'Amanda Chen', 25, 'Female', '2023-11-12', '2023-11-19',7,'Subway',20 ,'Vacation rental',900,1003);
INSERT INTO trip VALUES(79, 'David Lee', 45, 'Male', '2024-02-05', '2024-02-12',7,'Ferry',150 ,'Villa',1425,1007);
INSERT INTO trip VALUES(80, 'Nana Kwon', 27, 'Female', '2024-05-15', '2024-05-22',7,'Airplane',2700 ,'Guesthouse',400,1018);
INSERT INTO trip VALUES(81, 'Tom Hanks', 60, 'Male', '2024-08-20', '2024-08-27',7,'Plane',753 ,'Vacation rental',900,1004);
INSERT INTO trip VALUES(82, 'Emma Watson', 32, 'Female', '2025-01-01', '2025-01-08',7,'Ferry',150 ,'Hotel',1506,1002);
INSERT INTO trip VALUES(83, 'James Kim', 41, 'Male', '2025-04-15', '2025-04-22',7,'Car rental',296 ,'Hotel',1506,1017);
INSERT INTO trip VALUES(84, 'John Smith', 35, 'Male', '2021-06-15', '2021-06-20',6,'Car rental',296 ,'Vacation rental',900,1006);
INSERT INTO trip VALUES(85, 'Sarah Lee', 35, 'Female', '2021-07-01', '2021-07-10',10,'Bus',70 ,'Vacation rental',900,1005);
INSERT INTO trip VALUES(86, 'Maria Garcia', 31, 'Female', '2021-08-10', '2021-08-20',11,'Train',344 ,'Guesthouse',400,1003);
INSERT INTO trip VALUES(87, 'David Lee', 45, 'Male', '2021-09-01', '2021-09-10',9,'Train',344 ,'Airbnb',1181,1007);
INSERT INTO trip VALUES(88, 'Emily Davis', 33, 'Female', '2021-10-15', '2021-10-20',6,'Train',344 ,'Hotel',1506,1004);
INSERT INTO trip VALUES(89, 'James Wilson', 32, 'Male', '2021-11-20', '2021-11-30',11,'Car rental',296 ,'Airbnb',1181,1001);
INSERT INTO trip VALUES(90, 'Fatima Ahmed', 24, 'Female', '2022-01-01', '2022-01-08',8,'Car',1433 ,'Hostel',622,1010);
INSERT INTO trip VALUES(91, 'Liam Nguyen', 26, 'Male', '2022-02-14', '2022-02-20',7,'Train',344 ,'Guesthouse',400,1018);
INSERT INTO trip VALUES(92, 'Giulia Rossi', 30, 'Female', '2022-03-10', '2022-03-20',11,'Car',1433 ,'Hostel',622,1017);
INSERT INTO trip VALUES(93, 'Putra Wijaya', 33, 'Male', '2022-04-15', '2022-04-25',11,'Car',1433 ,'Villa',1425,1003);
INSERT INTO trip VALUES(94, 'Kim Min-ji', 27, 'Female', '2022-05-01', '2022-05-10',10,'Car rental',296 ,'Riad',600,1022);
INSERT INTO trip VALUES(95, 'John Smith', 35, 'Male', '2022-06-15', '2022-06-20',5,'Train',344 ,'Airbnb',1181,1006);
INSERT INTO trip VALUES(96, 'Emily Johnson', 28, 'Female', '2022-09-01', '2022-09-10',9,'Airplane',2700 ,'Guesthouse',400,1005);
INSERT INTO trip VALUES(97, 'David Lee', 45, 'Male', '2022-11-23', '2022-12-02',9,'Airplane',2700 ,'Resort',1521,1007);
INSERT INTO trip VALUES(98, 'Sarah Brown', 37, 'Female', '2023-02-14', '2023-02-19',5,'Plane',753 ,'Villa',1425,1001);
INSERT INTO trip VALUES(99, 'Michael Wong', 50, 'Male', '2023-05-08', '2023-05-14',6,'Flight',753 ,'Hostel',622,1004);
INSERT INTO trip VALUES(100, 'Jessica Chen', 31, 'Female', '2023-08-20', '2023-08-27',7,'Car rental',296 ,'Hotel',1506,1017);
INSERT INTO trip VALUES(101, 'Ken Tanaka', 42, 'Male', '2023-11-12', '2023-11-20',8,'Ferry',150 ,'Resort',1521,1018);
INSERT INTO trip VALUES(102, 'Maria Garcia', 31, 'Female', '2024-01-06', '2024-01-14',8,'Subway',20 ,'Airbnb',1181,1024);
INSERT INTO trip VALUES(103, 'Rodrigo Oliveira', 33, 'Male', '2024-04-03', '2024-04-10',7,'Car rental',296 ,'Hotel',1506,1008);
INSERT INTO trip VALUES(104, 'Olivia Kim', 29, 'Female', '2024-07-22', '2024-07-28',6,'Train',344 ,'Airbnb',1181,1003);
INSERT INTO trip VALUES(105, 'Robert Mueller', 41, 'Male', '2024-10-10', '2024-10-17',7,'Plane',753 ,'Vacation rental',900,1009);
INSERT INTO trip VALUES(106, 'John Smith', 35, 'Male', '2022-05-15', '2022-05-20',5,'Car rental',296 ,'Villa',1425,1006);
INSERT INTO trip VALUES(107, 'Sarah Lee', 35, 'Female', '2022-09-01', '2022-09-10',9,'Plane',753 ,'Guesthouse',400,1005);
INSERT INTO trip VALUES(108, 'Michael Wong', 50, 'Male', '2022-06-20', '2022-06-25',5,'Flight',753 ,'Vacation rental',900,1004);
INSERT INTO trip VALUES(109, 'Lisa Chen', 30, 'Female', '2022-08-12', '2022-08-20',8,'Ferry',150 ,'Hotel',1506,1003);
INSERT INTO trip VALUES(110, 'David Kim', 34, 'Male', '2022-07-01', '2022-07-10',9,'Train',344 ,'Villa',1425,1007);
INSERT INTO trip VALUES(111, 'Emily Wong', 38, 'Female', '2022-06-10', '2022-06-15',5,'Subway',20 ,'Villa',1425,1001);
INSERT INTO trip VALUES(112, 'Mark Tan', 45, 'Male', '2022-09-05', '2022-09-12',7,'Bus',70 ,'Airbnb',1181,1002);
INSERT INTO trip VALUES(113, 'Emma Lee', 31, 'Female', '2022-05-01', '2022-05-08',7,'Car rental',296 ,'Hostel',622,1017);
INSERT INTO trip VALUES(114, 'George Chen', 27, 'Male', '2022-07-15', '2022-07-22',7,'Airplane',2700 ,'Hostel',622,1019);
INSERT INTO trip VALUES(115, 'Sophia Kim', 29, 'Female', '2022-08-25', '2022-08-30',5,'Flight',753 ,'Hostel',622,1010);
INSERT INTO trip VALUES(116, 'Alex Ng', 33, 'Male', '2022-09-10', '2022-09-15',5,'Plane',753 ,'Guesthouse',400,1025);
INSERT INTO trip VALUES(117, 'Alice Smith', 30, 'Female', '2022-02-05', '2022-02-14',9,'Bus',70 ,'Airbnb',1181,1005);
INSERT INTO trip VALUES(118, 'Bob Johnson', 45, 'Male', '2022-03-15', '2022-03-22',7,'Subway',20 ,'Riad',600,1006);
INSERT INTO trip VALUES(119, 'Cindy Chen', 26, 'Female', '2022-05-01', '2022-05-12',11,'Ferry',150 ,'Airbnb',1181,1007);
INSERT INTO trip VALUES(120, 'David Lee', 45, 'Male', '2022-06-10', '2022-06-17',7,'Plane',753 ,'Riad',600,1017);
INSERT INTO trip VALUES(121, 'Emily Kim', 29, 'Female', '2022-07-20', '2022-07-30',10,'Plane',753 ,'Villa',1425,1003);
INSERT INTO trip VALUES(122, 'Frank Li', 41, 'Male', '2022-08-08', '2022-08-16',8,'Bus',70 ,'Vacation rental',900,1011);
INSERT INTO trip VALUES(123, 'Gina Lee', 35, 'Female', '2022-09-20', '2022-09-30',10,'Subway',20 ,'Airbnb',1181,1026);
INSERT INTO trip VALUES(124, 'Henry Kim', 24, 'Male', '2022-10-05', '2022-10-13',8,'Ferry',150 ,'Resort',1521,1005);
INSERT INTO trip VALUES(125, 'Isabella Chen', 30, 'Female', '2022-11-11', '2022-11-21',10,'Airplane',2700 ,'Airbnb',1181,1007);
INSERT INTO trip VALUES(126, 'Jack Smith', 28, 'Male', '2022-12-24', '2023-01-01',8,'Airplane',2700 ,'Resort',1521,1006);
INSERT INTO trip VALUES(127, 'Katie Johnson', 33, 'Female', '2023-02-10', '2023-02-18',8,'Subway',20 ,'Airbnb',1181,1003);
INSERT INTO trip VALUES(129, 'John Doe', 35, 'Male', '2023-05-01', '2023-05-07',6,'Car',1433 ,'Resort',1521,1006);
INSERT INTO trip VALUES(130, 'Jane Smith', 28, 'Female', '2023-05-15', '2023-05-22',7,'Train',344 ,'Villa',1425,1005);
INSERT INTO trip VALUES(131, 'Michael Johnson', 45, 'Male', '2023-06-01', '2023-06-10',9,'Train',344 ,'Hotel',1506,1024);
INSERT INTO trip VALUES(132, 'Sarah Lee', 35, 'Female', '2023-06-15', '2023-06-21',6,'Airplane',2700 ,'Resort',1521,1007);
INSERT INTO trip VALUES(133, 'David Kim', 34, 'Male', '2023-07-01', '2023-07-08',7,'Bus',70 ,'Hostel',622,1017);
INSERT INTO trip VALUES(134, 'Emily Davis', 33, 'Female', '2023-07-15', '2023-07-22',7,'Car rental',296 ,'Resort',1521,1004);
INSERT INTO trip VALUES(135, 'Jose Perez', 37, 'Male', '2023-08-01', '2023-08-10',9,'Airplane',2700 ,'Resort',1521,1008);
INSERT INTO trip VALUES(136, 'Emma Wilson', 29, 'Female', '2023-08-15', '2023-08-21',6,'Car',1433 ,'Villa',1425,1021);
INSERT INTO trip VALUES(137, 'Ryan Chen', 34, 'Male', '2023-09-01', '2023-09-08',7,'Car rental',296 ,'Vacation rental',900,1018);
INSERT INTO trip VALUES(138, 'Sofia Rodriguez', 25, 'Female', '2023-09-15', '2023-09-22',7,'Airplane',2700 ,'Airbnb',1181,1012);
INSERT INTO trip VALUES(139, 'William Brown', 39, 'Male', '2023-10-01', '2023-10-08',7,'Flight',753 ,'Resort',1521,1027);

-- landmark

INSERT INTO landmark VALUES(2001, "Big Ben", "https://www.thetrainline.com/cms/media/5743/uk-london-big-ben.jpg?mode=crop&width=660&height=440&quality=70", "London's clock tower", 1001);
INSERT INTO landmark VALUES(2002, "Patong Beach", "https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcQL3n6rfg8_wFwPHgF7CPU2f7n-qp1DYijHBwrcOxmsFvba8JL7pxpelV7fgwuabQkvMCgju2WZHiKXjfqcVrfl6zWpp-ft", "Popular beach in Phuket", 1002);
INSERT INTO landmark VALUES(2003, "Jalan Legian", "https://upload.wikimedia.org/wikipedia/commons/7/7e/Jalan_Legian_Hariadhi.jpg", "Tourism and entertainment strip", 1003);
INSERT INTO landmark VALUES(2004, "Statue of Liberty", "https://cdn.britannica.com/82/183382-050-D832EC3A/Detail-head-crown-Statue-of-Liberty-New.jpg", "Iconic statue in New York Harbor", 1004);
INSERT INTO landmark VALUES(2005, "Tokyo Tower", "https://upload.wikimedia.org/wikipedia/commons/5/58/Tokyo_Tower_2023.jpg", "Radio transmission tower in Tokyo", 1005);
INSERT INTO landmark VALUES(2006, "Eiffel Tower", "https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg/250px-Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg", "Iron tower in Paris", 1006);
INSERT INTO landmark VALUES(2007, "Sydney Opera House", "https://upload.wikimedia.org/wikipedia/commons/a/a0/Sydney_Australia._%2821339175489%29.jpg", "Music and theater venue in Sydney", 1007);
INSERT INTO landmark VALUES(2008, "Christ the Redeemer", "https://cdn.britannica.com/54/150754-050-5B93A950/statue-Christ-the-Redeemer-Rio-de-Janeiro.jpg", "Christ the Redeemer is a towering Art Deco statue of Jesus Christ perched atop the Corcovado mountain in Rio de Janeiro, Brazil, serving as an iconic symbol of both the city and Christianity.", 1008);
INSERT INTO landmark VALUES(2009, "Anne Frank House", "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Amsterdam_%28NL%29%2C_Anne-Frank-Huis_--_2015_--_7185.jpg/1920px-Amsterdam_%28NL%29%2C_Anne-Frank-Huis_--_2015_--_7185.jpg", "Anne Frank's hiding place in Amsterdam", 1009);
INSERT INTO landmark VALUES(2010, "Burj Al Arab", "https://upload.wikimedia.org/wikipedia/en/thumb/2/2a/Burj_Al_Arab%2C_Dubai%2C_by_Joi_Ito_Dec2007.jpg/500px-Burj_Al_Arab%2C_Dubai%2C_by_Joi_Ito_Dec2007.jpg", "7-star hotel in Dubai", 1010);
INSERT INTO landmark VALUES(2011, "Cancun Beach", "https://www.livedreamdiscover.com/wp-content/uploads/2018/11/Cancun-5.jpg", "Beach with turquoise waters in Mexico", 1011);
INSERT INTO landmark VALUES(2012, "Sagrada Familia", "https://i.namu.wiki/i/j67-iKR3Hx769TT9hdBzLHwM0z5Ng2C-irZQfJbcO-bCZWFgVc08JQpEQzPJLa-mBhOz7d0GphRz5vLjxl3PYA.webp", "Gaudi's architectural masterpiece in Barcelona", 1012);
INSERT INTO landmark VALUES(2013, "Diamond Head", "https://loveoahu.org/wp-content/uploads/diamond-head-1.jpg", "Volcanic crater in Hawaii", 1013);
INSERT INTO landmark VALUES(2014, "Brandenburg Gate", "https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcRjnxHvL_WLcxDolBIKn2fcUtspSbZVJI1rFEitdp9eHNlobDqkNuHvfnyzWpdjmvRXbXsLmu5y83Qv_YKQdBo3coSmsqBX", "Baroque-style gate in Berlin", 1014);
INSERT INTO landmark VALUES(2015, "Jemaa El-Fnaa Square", "https://www.lesjardinsdelamedina.com/blog/wp-content/uploads/2020/07/jama-el-fnaa-678x381.jpg", "Central square in Marrakech", 1015);
INSERT INTO landmark VALUES(2016, "Royal Mile", "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/High_Street%2C_Edinburgh.JPG/1920px-High_Street%2C_Edinburgh.JPG", "Historic street in Edinburgh", 1016);
INSERT INTO landmark VALUES(2017, "Colosseum", "https://www.artandobject.com/sites/default/files/styles/gallery_item/public/figure-1_0.jpeg?itok=RSQ7TxFQ", "Famous ancient Roman arena in Rome", 1017);
INSERT INTO landmark VALUES(2018, "Wat Arun", "https://a.cdn-hotels.com/gdcs/production50/d1634/bbe337ad-02fe-49d6-b761-02cab15d54f9.jpg?impolicy=fcrop&w=800&h=533&q=medium", "Beautiful temple in Bangkok", 1018);
INSERT INTO landmark VALUES(2019, "Oia", "https://a.cdn-hotels.com/gdcs/production33/d759/a6d5efb2-4232-43e1-b01e-6cef8b899bb0.jpg?impolicy=fcrop&w=1600&h=1066&q=medium", "Beautiful village in Santorini", 1019);
INSERT INTO landmark VALUES(2020, "Giza Pyramids", "https://media.architecturaldigest.com/photos/58e2a407c0e88d1a6a20066b/16:9/w_1280,c_limit/Pyramid%20of%20Giza%201.jpg", "Historic astronomical site in Cairo", 1020);
INSERT INTO landmark VALUES(2021, "Stanley Park", "https://www.hachettebookgroup.com/wp-content/uploads/2019/01/Vancouver_StanleyParkSeawall_jamesvancouver-iStock-520298306.jpg", "Large urban park in Vancouver", 1021);
INSERT INTO landmark VALUES(2022, "Gyeongbokgung Palace", "https://www.korea.net/upload/content/editImage/20230329144152690_2V3S9BMD.jpg", "Palace in Seoul", 1022);
INSERT INTO landmark VALUES(2023, "Hollywood Sign", "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Hollywood_Sign_%28Zuschnitt%29.jpg/800px-Hollywood_Sign_%28Zuschnitt%29.jpg", "Famous sign in Los Angeles", 1023);
INSERT INTO landmark VALUES(2024, "Table Mountain", "https://cdn.britannica.com/41/75841-050-FAAE44F0/Table-Mountain-Cape-Town-Western-Bay-South.jpg", "Mountain in Cape Town", 1024);
INSERT INTO landmark VALUES(2025, "Wat Phnom", "https://files.intocambodia.org/content/small/adfb128d97ca55fe045fd0dc2af2c285.jpg", "Temple in Phnom Penh", 1025);
INSERT INTO landmark VALUES(2026, "Acropolis", "https://cdn-imgix.headout.com/microbrands-banner-image/image/b698f96a3bf7e35418940973f33c4708-The%20Acropolis%20of%20Athens.jpeg", "Ancient temple in Athens", 1026);
INSERT INTO landmark VALUES(2027, "Sky Tower", "https://upload.wikimedia.org/wikipedia/commons/f/f8/01_Auckland_New_Zealand-1000137.jpg", "Observation tower in Auckland", 1027);


-- airport DB

INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('BQH', 'EGKB', 'Biggin Hill Airport', 'GB', 1001);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('LGW', 'EGKK', 'Gatwick Airport', 'GB', 1001);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('LHR', 'EGLL', 'Heathrow Airport', 'GB', 1001);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('LCY', 'EGLC', 'London City Airport', 'GB', 1001);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('STN', 'EGSS', 'Stansted Airport', 'GB', 1001);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('HKT', 'VTSP', 'Phuket International Airport', 'TH', 1002);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('DPS', 'WADD', 'Ngurah Rai Airport', 'ID', 1003);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('JFK', 'KJFK', 'John F Kennedy International Airport', 'US', 1004);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('LGA', 'KLGA', 'La Guardia International Airport', 'US', 1004);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('IAG', 'KIAG', 'Niagara Falls International Airport', 'US', 1004);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('NRT', 'RJAA', 'Narita Airport', 'JP', 1005);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('HND', 'RJTT', 'Tokyo International Airport', 'JP', 1005);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('CDG', 'LFPG', 'Charles De Gaulle Airport', 'FR', 1006);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('CHS', 'KCHS', 'Charleston International Airport', 'US', 1006);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('ORY', 'LFPO', 'Orly Airport', 'FR', 1006);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('SYD', 'YSSY', 'Kingsford Smith Airport', 'AU', 1007);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('RIO', 'RIDO', 'metropolitan area2', 'BR', 1008);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('GIG', 'SBGL', 'Rio de Janeiro International Airport', 'BR', 1008);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('SDU', 'SBRJ', 'Santos Dumont Regional Airport', 'BR', 1008);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('AMS', 'EHAM', 'Schiphol Airport', 'NL', 1009);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('DWC', 'OMDW', 'Al Maktoum International Airport', 'AE', 1010);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('DXB', 'OMDB', 'Dubai International Airport', 'AE', 1010);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('CUN', 'MMUN', 'Cancun International Airport', 'MX', 1011);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('BCN', 'LEBL', 'Barcelona International Airport', 'ES', 1012);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('HNL', 'PHNL', 'Honolulu International Airport', 'US', 1013);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('BER', 'EDDB', 'Berlin Brandenburg Airport', 'DE', 1014);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('SXF', 'ESXB', 'Schoenefeld International Airport', 'DE', 1014);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('TXL', 'EDDT', 'Tegel International Airport', 'DE', 1014);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('RAK', 'GMMX', 'Menara Airport', 'MA', 1015);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('EDI', 'EGPH', 'Edinburgh Airport', 'GB', 1016);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('CIA', 'LIRA', 'Ciampino Airport', 'IT', 1017);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('CVG', 'KCVG', 'Cincinnati/Northern Kentucky International Airport', 'US', 1017);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('DMK', 'VTBD', 'Don Mueang International', 'TH', 1018);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('BKK', 'VTBS', 'Suvarnabhumi International Airport', 'TH', 1018);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('JTR', 'LGSR', 'Santorini National Airport', 'GR', 1019);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('CAI', 'HECA', 'Cairo International Airport', 'EG', 1020);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('YVR', 'CYVR', 'Vancouver International Airport', 'CA', 1021);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('GMP', 'RKSS', 'Gimpo International Airport', 'KR', 1022);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('BTR', 'KBTR', 'Baton Rouge Metropolitan Airport', 'US', 1023);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('LFT', 'KLFT', 'Lafayette Regional Airport', 'US', 1023);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('MSY', 'KMSY', 'Louis Armstrong International Airport', 'US', 1023);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('MLU', 'KMLU', 'Malad City Airport', 'US', 1023);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('SHV', 'KSHV', 'Shreveport Regional Airport', 'US', 1023);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('CPT', 'FACT', 'Cape Town International Airport', 'ZA', 1024);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('PNH', 'VDPP', 'Pochentong Airport', 'KH', 1025);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('ATH', 'LGAV', 'Eleftherios Venizelos International Airport', 'GR', 1026);
INSERT INTO airport (IATA_code, ICAO_code, airport_name, country_id, city_id) VALUES ('AKL', 'NZAA', 'Auckland International Airport', 'NZ', 1027);

-- station DB

INSERT INTO station (id, station_name, city_id) VALUES ('4001', 'Tokyo Train Station', '1005');
INSERT INTO station (id, station_name, city_id) VALUES ('4002', 'Amsterdam Train Station', '1009');
INSERT INTO station (id, station_name, city_id) VALUES ('4003', 'Barcelona Train Station', '1012');
INSERT INTO station (id, station_name, city_id) VALUES ('4004', 'Edinburgh Train Station', '1016');
INSERT INTO station (id, station_name, city_id) VALUES ('4005', 'Paris Plane Station', '1006');
INSERT INTO station (id, station_name, city_id) VALUES ('4006', 'Bali Plane Station', '1003');
INSERT INTO station (id, station_name, city_id) VALUES ('4007', 'London Train Station', '1001');
INSERT INTO station (id, station_name, city_id) VALUES ('4008', 'Tokyo Plane Station', '1005');
INSERT INTO station (id, station_name, city_id) VALUES ('4009', 'New York Bus Station', '1004');
INSERT INTO station (id, station_name, city_id) VALUES ('4010', 'Sydney Plane Station', '1007');
INSERT INTO station (id, station_name, city_id) VALUES ('4011', 'Rome Train Station', '1017');
INSERT INTO station (id, station_name, city_id) VALUES ('4012', 'Bangkok Plane Station', '1018');
INSERT INTO station (id, station_name, city_id) VALUES ('4013', 'Paris Train Station', '1006');
INSERT INTO station (id, station_name, city_id) VALUES ('4014', 'Honolulu Plane Station', '1013');
INSERT INTO station (id, station_name, city_id) VALUES ('4015', 'Phuket Train Station', '1002');
INSERT INTO station (id, station_name, city_id) VALUES ('4016', 'Paris Car rental Station', '1006');
INSERT INTO station (id, station_name, city_id) VALUES ('4017', 'Sydney Car rental Station', '1007');
INSERT INTO station (id, station_name, city_id) VALUES ('4018', 'Rio de Janeiro Bus Station', '1008');
INSERT INTO station (id, station_name, city_id) VALUES ('4019', 'Santorini Plane Station', '1019');
INSERT INTO station (id, station_name, city_id) VALUES ('4020', 'Cairo Train Station', '1020');
INSERT INTO station (id, station_name, city_id) VALUES ('4021', 'Cancun Plane Station', '1011');
INSERT INTO station (id, station_name, city_id) VALUES ('4022', 'Barcelona Car rental Station', '1012');
INSERT INTO station (id, station_name, city_id) VALUES ('4023', 'Vancouver Bus Station', '1021');
INSERT INTO station (id, station_name, city_id) VALUES ('4024', 'Sydney Train Station', '1007');
INSERT INTO station (id, station_name, city_id) VALUES ('4025', 'Rio de Janeiro Plane Station', '1008');
INSERT INTO station (id, station_name, city_id) VALUES ('4026', 'Barcelona Plane Station', '1012');
INSERT INTO station (id, station_name, city_id) VALUES ('4027', 'New York Plane Station', '1004');
INSERT INTO station (id, station_name, city_id) VALUES ('4028', 'Bangkok Bus Station', '1018');
INSERT INTO station (id, station_name, city_id) VALUES ('4029', 'Vancouver Train Station', '1021');
INSERT INTO station (id, station_name, city_id) VALUES ('4030', 'Amsterdam Plane Station', '1009');
INSERT INTO station (id, station_name, city_id) VALUES ('4031', 'Tokyo Bus Station', '1005');
INSERT INTO station (id, station_name, city_id) VALUES ('4032', 'Rio de Janeiro Train Station', '1008');
INSERT INTO station (id, station_name, city_id) VALUES ('4033', 'Seoul Subway Station', '1022');
INSERT INTO station (id, station_name, city_id) VALUES ('4034', 'Los Angeles Car rental Station', '1023');
INSERT INTO station (id, station_name, city_id) VALUES ('4035', 'Cape Town Car rental Station', '1024');
INSERT INTO station (id, station_name, city_id) VALUES ('4036', 'Cape Town Car Station', '1024');
INSERT INTO station (id, station_name, city_id) VALUES ('4037', 'Phuket Plane Station', '1002');
INSERT INTO station (id, station_name, city_id) VALUES ('4038', 'Rome nan Station', '1017');
INSERT INTO station (id, station_name, city_id) VALUES ('4039', 'New York Car rental Station', '1004');
INSERT INTO station (id, station_name, city_id) VALUES ('4040', 'London Plane Station', '1001');
INSERT INTO station (id, station_name, city_id) VALUES ('4041', 'Dubai Plane Station', '1010');
INSERT INTO station (id, station_name, city_id) VALUES ('4042', 'Bangkok Train Station', '1018');
INSERT INTO station (id, station_name, city_id) VALUES ('4043', 'Rome Plane Station', '1017');
INSERT INTO station (id, station_name, city_id) VALUES ('4044', 'Bali Car rental Station', '1003');
INSERT INTO station (id, station_name, city_id) VALUES ('4045', 'Seoul Train Station', '1022');
INSERT INTO station (id, station_name, city_id) VALUES ('4046', 'Cape Town Plane Station', '1024');
INSERT INTO station (id, station_name, city_id) VALUES ('4047', 'Rio de Janeiro Car rental Station', '1008');
INSERT INTO station (id, station_name, city_id) VALUES ('4048', 'Santorini Ferry Station', '1019');
INSERT INTO station (id, station_name, city_id) VALUES ('4049', 'Dubai Car rental Station', '1010');
INSERT INTO station (id, station_name, city_id) VALUES ('4050', 'Phnom Penh Plane Station', '1025');
INSERT INTO station (id, station_name, city_id) VALUES ('4051', 'Athens Plane Station', '1026');
INSERT INTO station (id, station_name, city_id) VALUES ('4052', 'Paris Airplane Station', '1006');
INSERT INTO station (id, station_name, city_id) VALUES ('4053', 'Sydney Airplane Station', '1007');
INSERT INTO station (id, station_name, city_id) VALUES ('4054', 'New York Airplane Station', '1004');
INSERT INTO station (id, station_name, city_id) VALUES ('4055', 'Rio de Janeiro Car Station', '1008');
INSERT INTO station (id, station_name, city_id) VALUES ('4056', 'Vancouver Airplane Station', '1021');
INSERT INTO station (id, station_name, city_id) VALUES ('4057', 'Barcelona Airplane Station', '1012');
INSERT INTO station (id, station_name, city_id) VALUES ('4058', 'Auckland Train Station', '1027');

-- sample data for test

INSERT INTO user VALUES (5001,'alice@naver.com','alice','alice',21,'Female');
INSERT INTO prediction VALUES (6001, 7, '2023-11-05 12:13:12', 'Airplane', 2700, 'Vacation rental', 900, 5001, 1001);
INSERT INTO prediction VALUES (6002, 5, '2023-11-07 10:45:11', 'Train', 344, 'Guesthouse', 400, 5001, 1002);
INSERT INTO feedback VALUES (5001,4,'좋아요');
INSERT INTO Userliked VALUES (5001,1001);
INSERT INTO Userliked VALUES (5001,1002);
INSERT INTO Userliked VALUES (5001,1003);
INSERT INTO Userliked VALUES (5001,1004);
INSERT INTO Userliked VALUES (5001,1005);

--- sample data for review test

INSERT INTO `review` (`id`, `title`, `body`, `created_at`, `img`, `user_id`) VALUES
(1, 'A Whirlwind Adventure in the City of Lights: My Parisian Getaway', 'Paris, the city of love and lights, had always been a dream destination for me, and finally, I had the chance to immerse myself in its enchanting atmosphere. From the iconic Eiffel Tower to the charming cobblestone streets of Montmartre, every corner of Paris felt like a page torn from a romantic novel.\r\n\r\n\r\nMy journey began with a leisurely stroll along the Seine River, where the picturesque views of Notre-Dame Cathedral and the Louvre Museum took my breath away. The city\'s timeless architecture and artistic allure created a magical backdrop, making me feel like I was walking through a living museum.\r\n\r\nOf course, a visit to Paris wouldn\'t be complete without ascending the Eiffel Tower. As I reached the summit, the panoramic views of the city below were nothing short of spectacular. The twinkling lights of Paris spread out beneath me, and in that moment, I understood why they call it the City of Lights.\r\n\r\nExploring the vibrant neighborhoods, I found myself drawn to the bohemian charm of Montmartre. The artistic spirit of this hilltop village, with its narrow alleys and lively cafes, made me feel like I was part of a Renoir painting. I couldn\'t resist stopping at a local boulangerie for a freshly baked croissant and a cup of rich coffee, savoring the flavors of Parisian indulgence.\r\n\r\nMuseums such as the Louvre and Musée d\'Orsay provided a cultural feast for the senses, housing treasures that spanned centuries. Standing in front of the Mona Lisa and gazing at the works of Van Gogh, I felt a profound connection to the artistic legacy of humanity.\r\n\r\nParisian cuisine, a gastronomic delight, added another layer to my unforgettable experience. From delicate macarons at Ladurée to savory escargot in a cozy bistro, each meal was a culinary adventure. The fusion of flavors and the attention to detail in every dish reflected the city\'s dedication to the art of gastronomy.\r\n\r\nAs I bid adieu to the City of Lights, my heart was full of memories that would last a lifetime. Paris had exceeded my expectations, leaving me with a deep appreciation for its beauty, history, and the indescribable feeling of wandering through a city that embodies the essence of romance and sophistication. Until we meet again, Paris, merci for the enchanting escape.', '2023-11-18 07:25:35', NULL, 5002),
(2, 'A Glimpse into Seoul\'s Dynamic Charm', '\r\n\r\nSeoul, a bustling metropolis where tradition meets modernity, captivated me with its vibrant energy and rich cultural tapestry. From the historic palaces of Gyeongbokgung to the trendy streets of Gangnam, every corner of the city tells a unique story.\r\n\r\nNavigating the bustling markets and trying local delicacies like bibimbap and kimchi added a flavorful twist to my Seoul adventure. The seamless blend of ancient temples and futuristic skyscrapers creates a visual spectacle that is truly one-of-a-kind.\r\n\r\nThe warmth of the people, the soothing tones of a traditional tea ceremony, and the electrifying nightlife in Hongdae made my time in Seoul an unforgettable experience. As I bid farewell to this dynamic city, I carry with me the memories of a place where tradition and innovation coexist in perfect harmony.\r\n\r\n\r\n(written by ChatGPT AI)\r\n', '2023-11-18 07:37:58', NULL, 5002),
(3, 'Blissful Bali: A Tropical Paradise Unveiled', '\r\n\r\nMy journey to Bali, the Island of the Gods, was a soul-stirring adventure that exceeded all expectations. From the moment I set foot on its shores, I was embraced by the lush landscapes, vibrant culture, and the warm hospitality of the Balinese people.\r\n\r\nThe azure waters and pristine beaches, such as the iconic Kuta and the tranquil Nusa Dua, offered a haven for relaxation and water activities. Snorkeling amidst colorful coral reefs and watching the sun dip below the horizon created moments of sheer serenity.\r\n\r\nExploring the cultural heart of Bali in Ubud was a mesmerizing experience. The sacred Monkey Forest, traditional Balinese dances, and the intricate beauty of Tegallalang Rice Terraces showcased the island\'s rich heritage and artistic flair.\r\n\r\nBali\'s culinary scene was a delight for the senses. Sampling local delicacies like Nasi Goreng and Babi Guling added a flavorful touch to my gastronomic journey. The bustling markets and street food stalls were a paradise for food enthusiasts.\r\n\r\nThe spiritual ambiance of Bali was palpable at the ancient temples like Uluwatu and Tanah Lot. Witnessing a traditional Kecak dance against the backdrop of a sunset at Uluwatu Temple was a moment of cultural immersion.\r\n\r\nAs I reflect on my time in Bali, I\'m left with a profound sense of gratitude for the beauty that surrounded me. The gentle sounds of gamelan music, the scent of frangipani in the air, and the genuine smiles of the Balinese people created memories that will linger in my heart forever. Bali, with its enchanting landscapes and vibrant culture, truly lives up to its reputation as a tropical paradise. <br>\r\n\r\n(written by ChatGPT AI)', '2023-11-18 07:42:00', NULL, 5001),
(4, ' A Stroll Through Amsterdam\'s Enchanting Canals', '\r\n\r\nAmsterdam, with its charming canals and rich cultural tapestry, left an indelible mark on my travel diary. From the moment I arrived, I was captivated by the city\'s unique blend of history, art, and a laid-back atmosphere.\r\n\r\nThe iconic canals, lined with picturesque houses and crossed by quaint bridges, provided the perfect backdrop for leisurely walks. Exploring neighborhoods like Jordaan and De Pijp revealed hidden gems, from trendy boutiques to cozy cafes where I could savor Dutch treats like stroopwafels and poffertjes.\r\n\r\nA visit to the Anne Frank House was a poignant journey into history, while the Rijksmuseum and Van Gogh Museum showcased the artistic prowess that defines Amsterdam. The tulip-adorned landscapes of Keukenhof Gardens added a burst of color to my itinerary, creating a vivid kaleidoscope of floral beauty.\r\n\r\nCycling along the city\'s bike-friendly paths gave me a taste of local life, and a cruise on the serene canals offered a unique perspective of Amsterdam\'s architectural wonders. The Anne Frank House, with its solemn history, provided a powerful reflection on the resilience of the human spirit.\r\n\r\nThe lively atmosphere of Dam Square and the vibrant Anne Frank Huis neighborhood offered a glimpse into Amsterdam\'s contemporary allure. Sampling Dutch cheese at the local markets and enjoying a leisurely afternoon in Vondelpark allowed me to immerse myself in the city\'s everyday charm.\r\n\r\nAs I bid farewell to Amsterdam, I carried with me not only memories of its historic sites and artistic treasures but also the friendly spirit of the locals. Amsterdam\'s unique character, shaped by its canals and cultural diversity, made my journey a truly unforgettable experience.\r\n\r\n(written by ChatGPT AI)\r\n', '2023-11-18 07:45:29', NULL, 5001),
(5, 'Bail is the best city I\'ve ever been! ', 'test  123', '2023-11-18 07:49:48', NULL, 5002),
(6, 'I love New York!!! ', '', '2023-11-18 07:49:57', NULL, 5002);