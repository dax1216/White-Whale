<?php
class M4f5700dbe70c42e6996c1bc979828ae1 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'acc_catalogs' => array(
					'acc_catalog_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'acc_catalog_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'brands' => array(
					'brand_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'brand_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'card_players' => array(
					'card_player_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'position_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'player_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'is_primary' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'card_first_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'card_last_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'card_nick_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'franchise_group_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'team_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'card_player_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'card_variation_images' => array(
					'card_variation_image_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'card_variation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'rear_img_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'front_img_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'is_active' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'card_variation_image_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'card_variations' => array(
					'card_variation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'variation_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'is_base' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'card_variation_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'card_wiki_infos' => array(
					'card_wiki_info_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'overview' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 4096, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'variations' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'rarity' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'famous_copies' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'public_sales' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'card_wiki_info_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'cards' => array(
					'card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'short_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'descriptor' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'card_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'set_info_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'card_wiki_info_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'franchise_group_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'team_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'notes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'card_id', 'unique' => 1),
						'name_UNIQUE' => array('column' => 'name', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'comments' => array(
					'comment_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'text' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'comment_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'franchise_groups' => array(
					'franchise_group_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'year_started' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'year_finished' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'franchise_group_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'franchises' => array(
					'franchise_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'nat_assoc' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'active' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'franchise_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'grade_types' => array(
					'grade_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'grade_type_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'grade_values' => array(
					'grade_value_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'is_raw' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'grade_value_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'images' => array(
					'image_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'file_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'local_file_path' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'cloud_file_path' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'width' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'height' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'size' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'orientation' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'image_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'leagues' => array(
					'league_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 2, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'league_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'mycollection_images' => array(
					'mycollection_image_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'user_card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'rear_img_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'front_img_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'is_active' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'mycollection_image_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'offer_images' => array(
					'offer_image_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'rear_image_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'front_img_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'offer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'is_active' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'offer_image_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'offers' => array(
					'offer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'user_card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'accepted' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'offer_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'players' => array(
					'player_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'first_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'nick_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'given_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name_note' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'year_started' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'year_finished' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'hall_of_fame' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'player_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'positions' => array(
					'position_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'position_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'price_ranges' => array(
					'price_range_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'low_value' => array('type' => 'float', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'high_value' => array('type' => 'float', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'price_range_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'qualifiers' => array(
					'qualifier_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'qualifier_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'set_infos' => array(
					'set_info_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'short_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'subset_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'acc_catalog_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'brand_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'dist_start_year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'dist_end_year' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'set_wiki_info_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'set_info_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'set_wiki_infos' => array(
					'set_wiki_info_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'overview' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 4096, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'size' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'production' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'distribution' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'rarity' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'base_overview' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'variations' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'famous_copies' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'counterfeit' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'references' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'set_wiki_info_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'teams' => array(
					'team_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'franchise_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'franchise_group_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'league_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'ballpark' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'year_started' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'year_finished' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'is_minor' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'team_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'themes' => array(
					'theme_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'theme_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'transactions' => array(
					'transaction_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'user_card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'buyer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'sell_price' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
					'is_white_whale' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'sold_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'paid_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'shipped_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'received_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'payment_sent_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'tracking_link' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'transaction_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'user_cards' => array(
					'user_card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'card_variation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'grade_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'grade_value_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'grade_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'own_card' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'active_sell' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'white_whale' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'bought_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'listed_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'sell_price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
					'low_price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
					'high_price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
					'private_notes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'public_notes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'user_card_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'user_cards_qualifiers' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'user_card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'qualifier_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'user_cards_themes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'theme_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'user_card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'user_roles' => array(
					'user_role_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'user_role_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'users' => array(
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'full_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'first_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'user_role_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'email_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'cell_phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'home_phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'image_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'paypal_account_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'city' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'state' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'zip' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'country' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'last_login' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'udpated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'user_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'variations' => array(
					'variation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'short_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'variation_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'watches' => array(
					'watch_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'user_card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'watch_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'acc_catalogs', 'brands', 'card_players', 'card_variation_images', 'card_variations', 'card_wiki_infos', 'cards', 'comments', 'franchise_groups', 'franchises', 'grade_types', 'grade_values', 'images', 'leagues', 'mycollection_images', 'offer_images', 'offers', 'players', 'positions', 'price_ranges', 'qualifiers', 'set_infos', 'set_wiki_infos', 'teams', 'themes', 'transactions', 'user_cards', 'user_cards_qualifiers', 'user_cards_themes', 'user_roles', 'users', 'variations', 'watches'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
