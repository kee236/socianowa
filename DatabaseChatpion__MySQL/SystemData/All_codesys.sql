CREATE TABLE IF NOT EXISTS `add_ons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add_on_name` varchar(255) NOT NULL,
  `unique_name` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `installed_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `purchase_code` varchar(100) NOT NULL,
  `module_folder_name` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_name` (`unique_name`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `ad_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section1_html` longtext,
  `section1_html_mobile` longtext,
  `section2_html` longtext,
  `section3_html` longtext,
  `section4_html` longtext,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '0 means all',
  `is_seen` enum('0','1') NOT NULL DEFAULT '0',
  `seen_by` text NOT NULL COMMENT 'if user_id = 0 then comma seperated user_ids',
  `last_seen_at` datetime NOT NULL,
  `color_class` varchar(50) NOT NULL DEFAULT 'primary',
  `icon` varchar(50) NOT NULL DEFAULT 'fas fa-bell',
  `status` enum('published','draft') NOT NULL DEFAULT 'draft',
  PRIMARY KEY (`id`),
  KEY `for_user_id` (`user_id`,`status`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `page_response_autoreply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_response_user_info_id` int(11) NOT NULL,
  `auto_reply_campaign_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `page_info_table_id` int(11) NOT NULL,
  `page_name` mediumtext COLLATE utf8mb4_unicode_ci,
  `post_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_created_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_description` longtext COLLATE utf8mb4_unicode_ci,
  `reply_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_like_comment` enum('no','yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `multiple_reply` enum('no','yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_reply_enabled` enum('no','yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nofilter_word_found_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_reply_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_private_reply_status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_private_reply_count` int(11) NOT NULL,
  `auto_private_reply_done_ids` longtext COLLATE utf8mb4_unicode_ci,
  `auto_reply_done_info` longtext COLLATE utf8mb4_unicode_ci,
  `last_updated_at` datetime NOT NULL,
  `last_reply_time` datetime NOT NULL,
  `error_message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hide_comment_after_comment_reply` enum('no','yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete_offensive` enum('hide','delete') COLLATE utf8mb4_unicode_ci NOT NULL,
  `offensive_words` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `private_message_offensive_words` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden_comment_count` int(11) NOT NULL,
  `deleted_comment_count` int(11) NOT NULL,
  `auto_comment_reply_count` int(11) NOT NULL,
  `pause_play` enum('play','pause') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`page_info_table_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE IF NOT EXISTS `page_response_auto_like_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_response_auto_like_share_report_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `auto_like_page_table_id` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `page_response_auto_like_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_response_user_info_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `page_info_table_id` int(11) NOT NULL,
  `page_name` text,
  `page_id` varchar(200) NOT NULL,
  `auto_share_post` enum('0','1') NOT NULL DEFAULT '0',
  `auto_share_this_post_by_pages` text NOT NULL,
  `delay_time` varchar(20) NOT NULL,
  `auto_like_post` enum('0','1') NOT NULL DEFAULT '0',
  `auto_like_this_post_by_pages` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`page_info_table_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `page_response_auto_like_share_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_response_auto_like_share_id` int(11) NOT NULL,
  `page_response_user_info_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `page_info_table_id` int(11) NOT NULL,
  `page_name` text,
  `page_id` varchar(200) NOT NULL,
  `post_id` varchar(200) NOT NULL,
  `auto_share_post` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0 = no, 1 = yes, 2 = processing, 3=completed',
  `share_count` int(11) NOT NULL,
  `share_done` int(11) NOT NULL,
  `share_last_tried` datetime NOT NULL,
  `auto_share_this_post_by_pages` text NOT NULL,
  `auto_share_report` longtext,
  `delay_time` varchar(20) NOT NULL,
  `auto_like_post` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0 = no, 1 = yes, 2 = processing, 3=completed',
  `like_count` int(11) NOT NULL,
  `like_done` int(11) NOT NULL,
  `like_last_tried` datetime NOT NULL,
  `auto_like_this_post_by_pages` text NOT NULL,
  `auto_like_report` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `page_response_auto_share_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_response_auto_like_share_report_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `auto_share_page_table_id` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `page_response_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_response_autoreply_id` int(11) NOT NULL,
  `auto_reply_campaign_name` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `page_info_table_id` int(11) NOT NULL,
  `page_name` text,
  `post_id` varchar(200) NOT NULL,
  `post_created_at` varchar(255) DEFAULT NULL,
  `post_description` longtext,
  `reply_type` varchar(200) NOT NULL,
  `auto_like_comment` enum('no','yes') NOT NULL,
  `multiple_reply` enum('no','yes') NOT NULL,
  `comment_reply_enabled` enum('no','yes') NOT NULL,
  `nofilter_word_found_text` longtext NOT NULL,
  `auto_reply_text` longtext NOT NULL,
  `auto_private_reply_status` enum('0','1','2') NOT NULL DEFAULT '0',
  `auto_private_reply_count` int(11) NOT NULL,
  `auto_private_reply_done_ids` longtext,
  `auto_reply_done_info` longtext,
  `last_updated_at` datetime NOT NULL,
  `last_reply_time` datetime NOT NULL,
  `error_message` text NOT NULL,
  `hide_comment_after_comment_reply` enum('no','yes') NOT NULL,
  `is_delete_offensive` enum('hide','delete') NOT NULL,
  `offensive_words` longtext NOT NULL,
  `private_message_offensive_words` longtext NOT NULL,
  `hidden_comment_count` int(11) NOT NULL,
  `deleted_comment_count` int(11) NOT NULL,
  `auto_comment_reply_count` int(11) NOT NULL,
  `already_replied_comment_ids` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_response_autoreply_id` (`page_response_autoreply_id`,`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

