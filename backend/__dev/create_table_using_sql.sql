-- creating db tables using SQl should be easy .... 
--- lets think like this...
--- We should have a sample table .. from that table we can create newtables. 



-- sample table ....
DROP TABLE IF EXISTS `slh_sample`;
CREATE TABLE `slh_sample` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `published_status` enum('draft','published') NOT NULL DEFAULT 'draft',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by_uid` int(11) unsigned DEFAULT NULL,
  `created_by_name` varchar(256) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_by_uid` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





--- Copy same tables 
create table `new_table` like `slh_sample`;



