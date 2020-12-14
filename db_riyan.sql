CREATE SCHEMA IF NOT EXISTS `db_riyan` DEFAULT CHARACTER SET utf8 ;
USE `db_riyan` ;

CREATE TABLE IF NOT EXISTS `db_riyan`.`download` (
	`id` int(11) NOT NULL auto_increment,  
	`tanggal_upload` date NOT NULL,  
	`nama_file` varchar(100) NOT NULL,  
	`tipe_file` varchar(10) NOT NULL,  
	`ukuran_file` varchar(20) NOT NULL,  
	`file` varchar(255) NOT NULL,  
	PRIMARY KEY  (`id`)) 
ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;