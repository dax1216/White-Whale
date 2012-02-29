DROP TABLE IF EXISTS card_wiki_infos;
DROP PROCEDURE IF EXISTS populateCardWiki;

delimiter $$

CREATE TABLE `card_wiki_infos` (
  `card_wiki_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `overview` varchar(4096) DEFAULT NULL,
  `variations` varchar(2048) DEFAULT NULL,
  `rarity` varchar(2048) DEFAULT NULL,
  `famous_copies` varchar(2048) DEFAULT NULL,
  `public_sales` varchar(2048) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`card_wiki_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1$$

delimiter $$

CREATE PROCEDURE populateCardWiki()
BEGIN
DECLARE i INT DEFAULT 1;
WHILE (i < 932) DO
INSERT INTO card_wiki_infos VALUES (i, "","","","","",CURDATE(), CURDATE());
SET i =i + 1;
END WHILE;

END$$

delimiter ;
call populateCardWiki();

DROP PROCEDURE populateCardWiki;
