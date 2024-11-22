
CREATE TABLE IF NOT EXISTS `messenger_bot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `fb_page_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_type` enum('text','image','audio','video','file','quick reply','text with buttons','generic template','carousel','media') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `bot_type` enum('generic','keyword') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'generic',
  `keyword_type` enum('reply','post-back','no match','get-started','email-quick-reply','phone-quick-reply','location-quick-reply','birthday-quick-reply') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'reply',
  `keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `buttons` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `bot_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postback_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_replied_at` datetime NOT NULL,
  `is_template` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `broadcaster_labels` tinytext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'comma separated',
  `drip_campaign_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE IF NOT EXISTS `messenger_bot_broadcast_contact_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `label_id` varchar(250) NOT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  `unsubscribe` enum('0','1') NOT NULL DEFAULT '0',
  `invisible` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_id` (`page_id`,`group_name`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `messenger_bot_domain_whitelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `messenger_bot_user_info_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `domain` tinytext NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `messenger_bot_persistent_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `page_id` varchar(100) NOT NULL,
  `locale` varchar(20) NOT NULL DEFAULT 'default',
  `item_json` longtext NOT NULL,
  `composer_input_disabled` enum('0','1') NOT NULL DEFAULT '0',
  `poskback_id_json` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_id` (`page_id`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `messenger_bot_postback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `postback_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `use_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `messenger_bot_table_id` int(11) NOT NULL,
  `bot_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_template` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_jsoncode` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_for` enum('reply_message','unsubscribe','resubscribe','email-quick-reply','phone-quick-reply','location-quick-reply','birthday-quick-reply','chat-with-human','chat-with-bot') COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_id` int(11) NOT NULL,
  `inherit_from_template` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `broadcaster_labels` tinytext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'comma separated',
  `drip_campaign_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`postback_id`,`page_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `messenger_bot_reply_error_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `fb_page_id` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `error_message` varchar(250) NOT NULL,
  `bot_settings_id` int(11) NOT NULL,
  `error_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `messenger_bot_subscriber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `page_table_id` int(11) NOT NULL,
  `page_id` varchar(200) NOT NULL,
  `permission` enum('0','1') NOT NULL DEFAULT '1',
  `subscribe_id` varchar(255) NOT NULL,
  `client_thread_id` varchar(255) NOT NULL,
  `contact_group_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `locale` varchar(255) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `unavailable` enum('0','1') NOT NULL DEFAULT '0',
  `last_error_message` text NOT NULL,
  `unavailable_conversation` enum('0','1') NOT NULL DEFAULT '0',
  `last_error_message_conversation` varchar(256) NOT NULL,
  `refferer_id` varchar(100) NOT NULL COMMENT 'get started refference number from ref parameter of chat plugin',
  `refferer_source` varchar(50) NOT NULL COMMENT 'checkbox_plugin or CUSTOMER_CHAT_PLUGIN or MESSENGER_CODE or SHORTLINK or FB PAGE or COMMENT PRIVATE REPLY',
  `refferer_uri` tinytext NOT NULL COMMENT 'CUSTOMER_CHAT_PLUGIN URL',
  `subscribed_at` datetime NOT NULL,
  `unsubscribed_at` datetime NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_image_download` enum('0','1') NOT NULL DEFAULT '0',
  `image_path` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `is_bot_subscriber` enum('0','1') NOT NULL DEFAULT '1',
  `is_imported` enum('0','1') NOT NULL DEFAULT '0',
  `is_updated_name` enum('0','1') NOT NULL DEFAULT '1',
  `last_name_update_time` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `entry_time` datetime NOT NULL,
  `last_update_time` datetime NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `phone_number_entry_time` datetime NOT NULL,
  `phone_number_last_update` datetime NOT NULL,
  `user_location` varchar(30) NOT NULL,
  `location_map_url` text NOT NULL,
  `birthdate` date NOT NULL,
  `birthdate_entry_time` datetime NOT NULL,
  `last_subscriber_interaction_time` datetime NOT NULL COMMENT 'UTC Time - When user last sent message',
  `is_24h_1_sent` enum('0','1') NOT NULL DEFAULT '0' COMMENT '24H+1 message Broadcasting created or not',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`page_id`,`subscribe_id`) USING BTREE,
  KEY `contact_group_id` (`contact_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

