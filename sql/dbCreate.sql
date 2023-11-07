-- 11/01 카톡 내용 반영
CREATE TABLE `user` (
  `id` integer PRIMARY KEY,
  `email` varchar(255) UNIQUE COMMENT '회원가입 및 로그인에 사용',
  `pw` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` TINYINT,
  `sex` ENUM ('Female', 'Male') COMMENT 'Female / Male'
);

CREATE TABLE `prediction` (
  `id` integer PRIMARY KEY,
  `duration` integer,
  `created_at` timestamp COMMENT '기록에 추가한 날짜. 나중에 정렬할 때 사용하면 좋을 듯.',
  `transportation_type` varchar(255),
  `transportation_cost` integer,
  `accommodation_type` varchar(255),
  `accommodation_cost` integer,
  `user_id` integer NOT NULL,
  `city_id` integer NOT NULL
);

CREATE TABLE `trip` (
  `id` integer PRIMARY KEY,
  `travelerName` varchar(255),
  `travelerAge` integer,
  `travelerSex` ENUM ('Female', 'Male') COMMENT 'Female / Male',
  `start_date` date,
  `end_date` date,
  `duration` integer,
  `transportation_type` varchar(255),
  `transportation_cost` integer,
  `accommodation_type` varchar(255),
  `accommodation_cost` integer,
  `city_id` integer NOT NULL
);

CREATE TABLE `Userliked` (
  `user_id` integer NOT NULL,
  `city_id` integer,
  PRIMARY KEY (`user_id`, `city_id`)
);

CREATE TABLE `country` (
  `iso_number` integer(3),
  `iso_code3` char(3),
  `iso_code2` char(2) PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `flag` text COMMENT '국기 img url',
  `info` text COMMENT '국가 정보',
  `continent_id` integer NOT NULL
);

CREATE TABLE `review` (
  `id` integer PRIMARY KEY,
  `title` VARCHAR(255) NOT NULL,
  `body` text COMMENT '리뷰 내용',
  `created_at` timestamp COMMENT '업로드한 날짜 ',
  `img` text COMMENT 'image를 추가할 수 있도록?',
  `user_id` integer NOT NULL
);

CREATE TABLE `airport` (
  `iata_code` varchar(32) PRIMARY KEY,
  `icao_code` varchar(32) UNIQUE,
  `airport_name` varchar(255) NOT NULL,
  `city_id` integer NOT NULL,
  `country_id` char(2) NOT NULL
);

CREATE TABLE `station` (
  `id` integer PRIMARY KEY,
  `station_name` varchar(255) NOT NULL,
  `city_id` integer NOT NULL
);

CREATE TABLE `city` (
  `id` integer PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `latitude` float,
  `longitude` float,
  `info` text COMMENT '도시 설명',
  `country_id` char(2) NOT NULL
);

CREATE TABLE `landmark` (
  `id` integer PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `img` text COMMENT 'img url',
  `info` text COMMENT '랜드마크 설명',
  `city_id` integer NOT NULL
);

CREATE TABLE `continent` (
  `id` integer PRIMARY KEY,
  `continent_name` varchar(255) UNIQUE NOT NULL
);

CREATE TABLE `feedback` (
  `user_id` integer PRIMARY KEY,
  `rating` integer NOT NULL,
  `message` text
);

ALTER TABLE user AUTO_INCREMENT=5001;

ALTER TABLE `airport` ADD FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

ALTER TABLE `prediction` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `prediction` ADD FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

ALTER TABLE `trip` ADD FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

ALTER TABLE `Userliked` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `Userliked` ADD FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

ALTER TABLE `country` ADD FOREIGN KEY (`continent_id`) REFERENCES `continent` (`id`);

ALTER TABLE `review` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `airport` ADD FOREIGN KEY (`country_id`) REFERENCES `country` (`iso_code2`);

ALTER TABLE `station` ADD FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

ALTER TABLE `city` ADD FOREIGN KEY (`country_id`) REFERENCES `country` (`iso_code2`);

ALTER TABLE `landmark` ADD FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

ALTER TABLE `feedback` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
