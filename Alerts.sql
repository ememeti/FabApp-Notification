

DROP TABLE IF EXISTS `alerts`;
CREATE TABLE `alerts` (
  `A_id` int(11) NOT NULL,
  `t_id` int(11) NULL,
  `dev_id` int(11) NOT NULL,
  `Operator` char(10) NOT NULL,
  `Start_date` datetime DEFAULT NULL,
  `Op_email` varchar(100) DEFAULT NULL,
  `Op_phone` char(10) DEFAULT NULL,
  `carrier` varchar(50) DEFAULT NULL
) ENGINE = MyISAM DEFAULT CHARSET = utf8;




ALTER TABLE `alerts`
ADD
  PRIMARY KEY (`A_id`),
ADD
  KEY `Operator` (`Operator`),
ADD
  KEY `Transaction_ID` (`t_id`),
ADD
  KEY `Dev_id` (`dev_id`);


ALTER TABLE `alerts`
MODIFY
  `A_id` int(11) NOT NULL AUTO_INCREMENT;