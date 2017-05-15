
DROP TABLE IF EXISTS `bono_module_aboutbox`;

CREATE TABLE `bono_module_aboutbox` (
	
	`content` LONGTEXT NOT NULL COMMENT 'Content',
	`lang_id` INT NOT NULL COMMENT 'Associated language id'
	
) DEFAULT CHARSET = UTF8;
