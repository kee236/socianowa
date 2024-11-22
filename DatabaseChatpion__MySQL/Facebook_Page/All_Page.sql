

//1.facebook_ex_autoreply


CREATE TABLE IF NOT EXISTS `facebook_ex_autoreply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_rx_fb_user_info_id` int(11) NOT NULL,
  `auto_reply_campaign_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `page_info_table_id` int(11) NOT NULL,
  `page_name` mediumtext COLLATE utf8mb4_unicode_ci,
  `post_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_created_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_description` longtext COLLATE utf8mb4_unicode_ci,
  `post_thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `template_manager_table_id` int(11) NOT NULL,
  `broadcaster_labels` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'auto_id of labels comma separated',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`page_info_table_id`,`post_id`),
  KEY `dashboard` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


//2.facebook_ex_conversation_campaign

CREATE TABLE IF NOT EXISTS `facebook_ex_conversation_campaign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `page_id` int(11) NOT NULL,
  `fb_page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `excluded_label_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `label_names` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_time_zone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_locale` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_type` enum('page-wise','lead-wise','group-wise') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page-wise',
  `campaign_message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_time` datetime NOT NULL,
  `time_zone` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `posting_status` enum('0','1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '4=hold(Stopped for Error count >)',
  `is_try_again` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `last_try_error_count` int(11) NOT NULL,
  `is_spam_caught` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `error_message` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_thread` int(11) NOT NULL,
  `successfully_sent` int(11) NOT NULL,
  `added_at` datetime NOT NULL,
  `completed_at` datetime NOT NULL,
  `report` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay_time` int(11) NOT NULL DEFAULT '0' COMMENT '0 means random',
  PRIMARY KEY (`id`),
  KEY `status` (`posting_status`),
  KEY `dashboard` (`user_id`),
  KEY `dashboard2` (`user_id`,`completed_at`),
  KEY `dashboard3` (`user_id`,`posting_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


//3.facebook_ex_conversation_campaign_send

CREATE TABLE IF NOT EXISTS `facebook_ex_conversation_campaign_send` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `client_thread_id` varchar(255) NOT NULL,
  `client_username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `message_sent_id` varchar(255) NOT NULL,
  `sent_time` datetime NOT NULL,
  `lead_id` int(11) NOT NULL,
  `processed` enum('0','1') NOT NULL DEFAULT '0',
  `link` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `campaign_id` (`campaign_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


//4.facebook_rx_auto_post


CREATE TABLE IF NOT EXISTS `facebook_rx_auto_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `facebook_rx_fb_user_info_id` int(11) NOT NULL,
  `post_type` enum('text_submit','link_submit','image_submit','video_submit') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text_submit',
  `campaign_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_group_user_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_or_group_or_user` enum('page','group','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_or_group_or_user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_preview_image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_caption` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_thumb_url` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_share_post` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_share_this_post_by_pages` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_share_to_profile` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_like_post` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_private_reply` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_private_reply_text` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_private_reply_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'taken by cronjob or not',
  `auto_private_reply_count` int(11) NOT NULL,
  `auto_private_reply_done_ids` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_comment` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_comment_text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posting_status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'pending,processing,completed',
  `post_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'fb post id',
  `post_url` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_updated_at` datetime NOT NULL,
  `schedule_time` datetime NOT NULL,
  `time_zone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_auto_comment_cron_jon_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'post''s auto comment is done by cron job',
  `post_auto_like_cron_jon_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'post''s auto like is done by cron job',
  `post_auto_share_cron_jon_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'post''s auto share is done by cron job',
  `error_mesage` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_child` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `parent_campaign_id` int(11) NOT NULL,
  `page_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ultrapost_auto_reply_table_id` int(11) NOT NULL,
  `is_autopost` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `repeat_times` int(11) NOT NULL,
  `time_interval` int(11) NOT NULL,
  `full_complete` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_type` enum('now','later') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`facebook_rx_fb_user_info_id`),
  KEY `posting_status` (`posting_status`),
  KEY `dashboard` (`user_id`,`last_updated_at`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE IF NOT EXISTS `facebook_rx_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_name` varchar(100) DEFAULT NULL,
  `api_id` varchar(250) DEFAULT NULL,
  `api_secret` varchar(250) DEFAULT NULL,
  `numeric_id` varchar(250) NOT NULL,
  `user_access_token` varchar(500) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `use_by` enum('only_me','everyone') NOT NULL DEFAULT 'only_me',
  `developer_access` enum('0','1') NOT NULL DEFAULT '0',
  `facebook_id` varchar(50) NOT NULL,
  `secret_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


//5


CREATE TABLE IF NOT EXISTS `facebook_rx_cta_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `facebook_rx_fb_user_info_id` int(11) NOT NULL,
  `campaign_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_group_user_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'auto_like_post_comment',
  `page_or_group_or_user` enum('page') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'cta post is only available for page',
  `cta_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cta_value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_preview_image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_caption` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_share_post` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_share_this_post_by_pages` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_share_to_profile` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_like_post` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_private_reply` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_private_reply_text` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_private_reply_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'taken by cronjob or not',
  `auto_private_reply_count` int(11) NOT NULL,
  `auto_private_reply_done_ids` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_comment` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_comment_text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posting_status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'pending,processing,completed',
  `post_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'fb post id',
  `post_url` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_updated_at` datetime NOT NULL,
  `schedule_time` datetime NOT NULL,
  `time_zone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_auto_comment_cron_jon_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'post''s auto comment is done by cron job',
  `post_auto_like_cron_jon_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'post''s auto like is done by cron job',
  `post_auto_share_cron_jon_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'post''s auto share is done by cron job',
  `error_mesage` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_child` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `parent_campaign_id` int(11) NOT NULL,
  `page_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ultrapost_auto_reply_table_id` int(11) NOT NULL,
  `repeat_times` int(11) NOT NULL,
  `time_interval` int(11) NOT NULL,
  `schedule_type` enum('now','later') COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_complete` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`facebook_rx_fb_user_info_id`),
  KEY `posting_status` (`posting_status`),
  KEY `dashboard` (`user_id`,`last_updated_at`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

//6.


CREATE TABLE IF NOT EXISTS `facebook_rx_fb_group_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `facebook_rx_fb_user_info_id` int(11) NOT NULL,
  `group_id` varchar(200) NOT NULL,
  `group_cover` text,
  `group_profile` text,
  `group_name` varchar(200) DEFAULT NULL,
  `group_access_token` text NOT NULL,
  `add_date` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

//7.

CREATE TABLE IF NOT EXISTS `facebook_rx_fb_page_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `facebook_rx_fb_user_info_id` int(11) NOT NULL,
  `page_id` varchar(200) NOT NULL,
  `page_cover` text,
  `page_profile` text,
  `page_name` varchar(200) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `page_access_token` text NOT NULL,
  `page_email` varchar(200) DEFAULT NULL,
  `add_date` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `auto_sync_lead` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0=disabled,1=enabled,2=processing,3=completed',
  `last_lead_sync` datetime NOT NULL,
  `next_scan_url` text NOT NULL,
  `current_lead_count` int(11) NOT NULL,
  `current_subscribed_lead_count` int(11) NOT NULL,
  `current_unsubscribed_lead_count` int(11) NOT NULL,
  `msg_manager` enum('0','1') NOT NULL DEFAULT '0',
  `bot_enabled` enum('0','1','2') NOT NULL DEFAULT '0',
  `started_button_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `welcome_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_human_email` varchar(250) NOT NULL,
  `no_match_found_reply` enum('enabled','disabled') NOT NULL DEFAULT 'disabled',
  `persistent_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `enable_mark_seen` enum('0','1') NOT NULL DEFAULT '0',
  `enbale_type_on` enum('0','1') NOT NULL DEFAULT '0',
  `estimated_reach` varchar(50) NOT NULL,
  `last_estimaed_at` datetime NOT NULL,
  `review_status` enum('NOT SUBMITTED','PENDING','REJECTED','APPROVED','LIMITED') NOT NULL DEFAULT 'NOT SUBMITTED',
  `review_status_last_checked` datetime NOT NULL,
  `reply_delay_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`),
  KEY `user_id` (`user_id`,`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



//8.

CREATE TABLE IF NOT EXISTS `facebook_rx_fb_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_rx_config_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `access_token` text NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `fb_id` varchar(200) NOT NULL,
  `add_date` date NOT NULL,
  `deleted` enum('0','1') NOT NULL,
  `need_to_delete` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

//9.
CREATE TABLE IF NOT EXISTS `facebook_rx_slider_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `facebook_rx_fb_user_info_id` int(11) NOT NULL,
  `post_type` enum('slider_post','carousel_post') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'slider_post',
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel_content` longtext COLLATE utf8mb4_unicode_ci,
  `carousel_link` mediumtext COLLATE utf8mb4_unicode_ci,
  `slider_images` longtext COLLATE utf8mb4_unicode_ci,
  `slider_image_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_transition_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campaign_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_group_user_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_or_group_or_user` enum('page','group','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_or_group_or_user_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_share_post` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_share_this_post_by_pages` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_share_to_profile` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_like_post` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_private_reply` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `auto_private_reply_text` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_private_reply_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'taken by cronjob or not',
  `auto_private_reply_count` int(11) NOT NULL,
  `auto_private_reply_done_ids` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_comment` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_comment_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `posting_status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'pending,processing,completed',
  `post_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_url` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_updated_at` datetime NOT NULL,
  `schedule_time` datetime NOT NULL,
  `time_zone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_auto_comment_cron_jon_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `post_auto_like_cron_jon_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `post_auto_share_cron_jon_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `error_mesage` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_child` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `parent_campaign_id` int(11) NOT NULL,
  `page_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ultrapost_auto_reply_table_id` int(11) NOT NULL,
  `repeat_times` int(11) NOT NULL,
  `time_interval` int(11) NOT NULL,
  `schedule_type` enum('now','later') COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_complete` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`facebook_rx_fb_user_info_id`),
  KEY `posting_status` (`posting_status`),
  KEY `dashboard` (`user_id`,`last_updated_at`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

//10

CREATE TABLE IF NOT EXISTS `fb_msg_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `facebook_rx_fb_user_info_id` int(11) NOT NULL,
  `page_table_id` int(12) NOT NULL,
  `from_user` varchar(255) DEFAULT NULL,
  `from_user_id` varchar(255) DEFAULT NULL,
  `last_snippet` longtext NOT NULL,
  `message_count` varchar(255) DEFAULT NULL,
  `thread_id` varchar(255) NOT NULL,
  `inbox_link` text NOT NULL,
  `unread_count` varchar(255) DEFAULT NULL,
  `sync_time` datetime NOT NULL,
  `last_update_time` varchar(100) NOT NULL COMMENT 'this time in +00 UTC format, We need to convert it to the user time zone',
  PRIMARY KEY (`id`),
  UNIQUE KEY `thread_id` (`thread_id`,`user_id`,`facebook_rx_fb_user_info_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



