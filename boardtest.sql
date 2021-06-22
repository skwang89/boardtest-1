-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        8.0.22 - MySQL Community Server - GPL
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- 테이블 boardtest.board 구조 내보내기
CREATE TABLE IF NOT EXISTS `board` (
  `board_id` int unsigned NOT NULL AUTO_INCREMENT,
  `board_pid` int DEFAULT '0',
  `board_pw` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subject` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_general_ci,
  `hits` int unsigned DEFAULT '0',
  `reg_date` datetime DEFAULT NULL,
  PRIMARY KEY (`board_id`),
  KEY `board_pid` (`board_pid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 boardtest.board:~12 rows (대략적) 내보내기
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` (`board_id`, `board_pid`, `board_pw`, `user_id`, `user_name`, `subject`, `contents`, `hits`, `reg_date`) VALUES
	(1, 0, NULL, 'advisor', 'kim', '제목처음', '내용처음', 0, '2021-06-10 09:04:17'),
	(2, 0, NULL, 'advisor', 'kim', '제목둘', '내용둘', 0, '2021-06-10 09:04:17'),
	(3, 0, NULL, 'advisor', 'kim', '제목셋', '내용셋', 0, '2021-06-10 09:04:17'),
	(4, 0, NULL, 'advisor', 'kim', '제목넷', '내용넷', 0, '2021-06-10 09:04:17'),
	(5, 0, NULL, 'advisor', 'kim', '제목다섯', '내용다섯', 0, '2021-06-10 09:04:17'),
	(6, 0, NULL, 'advisor', 'kim', '제목여섯', '내용여섯', 0, '2021-06-10 09:04:17'),
	(7, 0, NULL, 'advisor', 'kim', '제목일곱', '내용일곱', 0, '2021-06-10 09:04:17'),
	(8, 0, NULL, 'advisor', 'kim', '제목여덟', '내용여덟', 0, '2021-06-10 09:04:17'),
	(9, 0, NULL, 'advisor', 'kim', '제목아홉', '내용아홉', 0, '2021-06-10 09:04:17'),
	(10, 0, NULL, 'advisor', 'kim', '제목열', '내용열', 0, '2021-06-10 09:04:17'),
	(11, 1, NULL, 'guest', 'lee', '댓글처음', '댓글내용처음', 0, '2021-06-10 09:04:17'),
	(12, 2, NULL, 'guest', 'lee', '댓글둘수정수정', '댓글내용둘', 0, '2021-06-14 07:06:16');
/*!40000 ALTER TABLE `board` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
