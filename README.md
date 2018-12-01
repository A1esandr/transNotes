Простое приложение для ведения записей.
Использован Yii2

Для использования требуется БД с одной таблицей.
Таблица БД

CREATE TABLE `note` (
 `id` int(8) NOT NULL AUTO_INCREMENT,
 `date` date DEFAULT NULL,
 `content` text,
 `process` text,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8
