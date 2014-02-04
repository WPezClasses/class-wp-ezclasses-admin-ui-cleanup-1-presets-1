<?php
/** 
 * Provides the raw fuel for the automation engine Class_WP_ezClasses_Admin_UI_Cleanup_1. 
 *
 * In order to facilitate the automation, the hooks' (i.e., actions and filters) details are seperated from code that implements them. With those details "standardized", it's not just a matter of picking the one you want to feed to the engine.   
 *
 * PHP version 5.3
 *
 * LICENSE: MIT
 *
 * @package WP ezClasses
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license MIT
 */
 
/*
 * == Change Log == 
 *
 * --- 12 July 2013 - Ready!
 */


if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}


if (!class_exists('Class_WP_ezClasses_Admin_UI_Cleanup_1_Presets_1')) {
	class Class_WP_ezClasses_Admin_UI_Cleanup_1_Presets_1 extends Class_WP_ezClasses_Master_Singleton {
	
		/**
		 *
		 */
		protected function __construct(){
			parent::__construct();
		}

		/**
		 * 
		 */
		public function ezc_init($arr_args = NULL){
		
		}

	
		/*
		 *
		 */
		public function admin_ui_cleanup_presets($arr_args = array()) {
		
			$str_return_source = 'Class_WP_ezClasses_Admin_UI_Cleanup_1_Presets_1 :: admin_ui_cleanup_presets()'; 

			/*
			 * Keeping it simple and foregoing the usual formal _valiate method (at least for now)
			 */

			if ( ! is_array($arr_args) || empty($arr_args) ){	
				$arr_args = $this->admin_ui_cleanup_presets_defaults();
			}

			//TODO - validate? 		

			$arr_admin_ui_cleanup = array( 
									'appearance_editor_remove'	=> array(
																	'active'		=> true,
																	'hook_type'		=> 'action',
																	'hook_name'		=> 'admin_init',
																	'method_name'	=> 'appearance_editor_remove_submenu_page',	
																	'priority'		=> 10,
																	'args_count'	=> NULL,																			
																	'arr_args'		=> NULL,
																	'note'			=> 'Removes the WP Appearance > Editor.',
																),
																
									'settings_media_remove'		=> array(
																	'active'		=> true,
																	'hook_type'		=> 'action',
																	'hook_name'		=> 'admin_menu',
																	'method_name'	=> 'settings_media_remove_submenu_page',
																	'priority'		=> 10,
																	'args_count'	=> NULL,
																	'arr_args'		=> NULL,
																	'note'			=> 'Removes the submenu Settings > Media.',
																),
																
									'settings_media_add'		=> array(
																	'active'		=> true,
																	'hook_type'		=> 'action',	
																	'hook_name'		=> 'admin_menu',
																	'method_name'	=> 'settings_media_add_submenu_page',
																	'priority'		=> 10,																		
																	'args_count'	=> NULL,																			
																	'arr_args'		=> NULL,
																	'note'			=> 'Adds the submenu Settings > Media that is read only.',
																),	
																
									'remove_quick_press'		=> array(
																	'active'		=> true,
																	'hook_type'		=> 'action',	
																	'hook_name'		=> 'wp_dashboard_setup',
																	'method_name'	=> 'admin_dashboard_remove_quick_press',
																	'priority'		=> 10,																		
																	'args_count'	=> NULL,																			
																	'arr_args'		=> NULL,
																	'note'			=> 'Remove the Quick Press meta from the Admin Dashboard',
																),	

									'remove_incoming_links'		=> array(
																	'active'		=> true,
																	'hook_type'		=> 'action',	
																	'hook_name'		=> 'wp_dashboard_setup',
																	'method_name'	=> 'admin_dashboard_remove_incoming_links',
																	'priority'		=> 10,																		
																	'args_count'	=> NULL,																			
																	'arr_args'		=> NULL,
																	'note'			=> 'Remove the Incoming Links meta from the Admin Dashboard',
																),
																
									'remove_right_now'			=> array(
																	'active'		=> true,
																	'hook_type'		=> 'action',	
																	'hook_name'		=> 'wp_dashboard_setup',
																	'method_name'	=> 'admin_dashboard_remove_right_now',
																	'priority'		=> 10,																		
																	'args_count'	=> NULL,																			
																	'arr_args'		=> NULL,
																	'note'			=> 'Remove the Right Now meta from the Admin Dashboard',
																),															
																
									'remove_recent_drafts'		=> array(
																	'active'		=> true,
																	'hook_type'		=> 'action',	
																	'hook_name'		=> 'wp_dashboard_setup',
																	'method_name'	=> 'admin_dashboard_remove_dashboard_recent_drafts',
																	'priority'		=> 10,																		
																	'args_count'	=> NULL,																			
																	'arr_args'		=> NULL,
																	'note'			=> 'Remove the Recent Drafts meta from the Admin Dashboard',
																),	

									'remove_dashboard_primary'	=> array(
																	'active'		=> true,
																	'hook_type'		=> 'action',	
																	'hook_name'		=> 'wp_dashboard_setup',
																	'method_name'	=> 'admin_dashboard_remove_dashboard_primary',
																	'priority'		=> 10,																		
																	'args_count'	=> NULL,																			
																	'arr_args'		=> NULL,
																	'note'			=> 'Remove the WordPress Blog meta from the Admin Dashboard',
																),

									'remove_dashboard_secondary'	=> array(
																	'active'		=> true,
																	'hook_type'		=> 'action',	
																	'hook_name'		=> 'wp_dashboard_setup',
																	'method_name'	=> 'admin_dashboard_remove_dashboard_secondary',
																	'priority'		=> 10,																		
																	'args_count'	=> NULL,																			
																	'arr_args'		=> NULL,
																	'note'			=> 'Remove the Other WordPress News meta from the Admin Dashboard',
																),																

																
									'remove_recent_comments'		=> array(
																		'active'		=> true,
																		'hook_type'		=> 'action',	
																		'hook_name'		=> 'wp_dashboard_setup',
																		'method_name'	=> 'admin_dashboard_remove_dashboard_recent_comments',
																		'priority'		=> 10,																		
																		'args_count'	=> NULL,																			
																		'arr_args'		=> NULL,
																		'note'			=> 'Remove the Recent Comments meta from the Admin Dashboard',
																	),	

																	
									'remove_all_posts_quick_edit'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'post_row_actions',
																		'method_name'	=> 'posts_all_posts_list_remove_quick_edit',
																		'priority'		=> 10,																		
																		'args_count'	=> 2,																			
																		'arr_args'		=> array(
																								'exclude'	=> array(), // $current_screen->post_type
																								'remove'	=> array('inline hide-if-no-js'),
																							),					
																		'note'			=> 'Remove the Quick Edit link that show on hover under a post title',
																	),	

																	
									'remove_all_posts_edit_trash'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'post_row_actions',
																		'method_name'	=> 'posts_all_posts_list_remove_edit_trash',
																		'priority'		=> 10,																		
																		'args_count'	=> 2,																			
																		'arr_args'		=> array(
																								'exclude'	=> array(),
																								'remove'	=> array('edit', 'trash'),
																								), 
																		'note'			=> 'Remove the Edit and Trash links that show on hover under a post title',
																	),	

																	
									'remove_all_posts_edit_trash_view'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'post_row_actions',
																		'method_name'	=> 'posts_all_posts_list_remove_edit_trash_view',
																		'priority'		=> 10,																		
																		'args_count'	=> 2,																			
																		'arr_args'		=> array(
																								'exclude'	=> array(),
																								'remove'	=> array('edit', 'trash', 'view'),
																								), 
																		'note'			=> 'Remove the Edit, Trash and View links that show on hover under a post title',
																	),

																	


									'remove_all_pages_quick_edit'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'page_row_actions',
																		'method_name'	=> 'pages_all_pages_list_remove_quick_edit',
																		'priority'		=> 10,																		
																		'args_count'	=> 2,																			
																		'arr_args'		=> array(
																								'exclude'	=> array(),
																								'remove'	=> array('inline hide-if-no-js'),
																								), 
																		'note'			=> 'Remove the Quick Edit link that show on hover under a post title',
																	),
																	
																
	
									'remove_all_pages_edit_trash'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'page_row_actions',
																		'method_name'	=> 'pages_all_pages_list_remove_edit_trash',
																		'priority'		=> 10,																		
																		'args_count'	=> 2,																			
																		'arr_args'		=> array(
																								'exclude'	=> array(),
																								'remove'	=> array('edit', 'trash'),
																								), 
																		'note'			=> 'Remove the Edit and Trash links that show on hover under a post title',
																	),	

										

																	
	

									'remove_all_pages_edit_trash_view'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'page_row_actions',
																		'method_name'	=> 'pages_all_pages_list_remove_edit_trash_view',
																		'priority'		=> 10,																		
																		'args_count'	=> 2,																			
																		'arr_args'		=> array(
																								'exclude'	=> array(),
																								'remove'	=> array('edit', 'trash', 'view'),
																								), 
																		'note'			=> 'Remove the Edit, Trash and View links that show on hover under a post title',
																	),	
																	
									'remove_bulk_actions_posts'			=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'bulk_actions-edit-post',   						// http://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
																		'method_name'	=> 'posts_all_pages_all_remove_bulk_actions',
																		'priority'		=> 10,																		
																		'args_count'	=> 1,																			
																		'arr_args'		=> array(), // *exclude* which post types. empty array() = remove from all post types
																		'note'			=> 'Remove the Bulk Actions select dropdown from All Posts',
																	),	
	
									'remove_bulk_actions_pages'			=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'bulk_actions-edit-page',						// http://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
																		'method_name'	=> 'posts_all_pages_all_remove_bulk_actions',
																		'priority'		=> 10,																		
																		'args_count'	=> 1,																			
																		'arr_args'		=> array(), // *exclude* which post types. empty array() = remove from all post types
																		'note'			=> 'Remove the Bulk Actions select dropdown from All Pages',
																	),	
																								
									'remove_yoast_seo_posts_filter_dropdown'	=> array(
																				'active'		=> true,
																				'hook_type'		=> 'action',	
																				'hook_name'		=> 'wp',   						// http://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
																				'method_name'	=> 'globals_wp_filter_unset_action_or_filter',
																				'priority'		=> 10,																		
																				'args_count'	=> 1,																			
																				'arr_args'		=> array(
																										'tag' 					=> 'restrict_manage_posts', // aka hook name
																										'function_to_remove'	=> 'posts_filter_dropdown',
																										'priority'				=> '10',
																										'object_name'			=> 'WPSEO_Metabox',
																										),
																				'note'			=> 'Remove the Yoast SEO "All SEO Scores" Bulk Actions select dropdown from All Posts',
																			),	
																																
									'remove_yoast_seo_columns_posts'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'manage_edit-post_columns',						
																		'method_name'	=> 'manage_post_custom_columns_remove_yoast_seo',
																		'priority'		=> 10,																		
																		'args_count'	=> 1,																			
																		'arr_args'		=> array(
																								'post' => array('wpseo-score', 'wpseo-title', 'wpseo-metadesc', 'wpseo-focuskw'),
																								),
																		'note'			=> 'Removes the Yoast SEO plugin cols from All Posts list',
																	),

									'remove_yoast_seo_columns_pages'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'manage_edit-page_columns',						
																		'method_name'	=> 'manage_page_custom_columns_remove_yoast_seo',
																		'priority'		=> 10,																		
																		'args_count'	=> 1,																			
																		'arr_args'		=> array(
																								'page' => array('wpseo-score', 'wpseo-title', 'wpseo-metadesc', 'wpseo-focuskw'), 
																							),
																		'note'			=> 'Removes the Yoast SEO plugin cols from All Pages list.',
																	),

									'remove_yoast_seo_admin_bar'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'action',	
																		'hook_name'		=> 'wp_before_admin_bar_render',						
																		'method_name'	=> 'wp_before_admin_bar_render_remove_yoast_seo',
																		'priority'		=> 75,																		
																		'args_count'	=> NULL,																			
																		'arr_args'		=> NULL,
																		'note'			=> 'Removes the Yoast SEO plugin link from the Admin menu bar.',
																	),
																	
									'media_box_default_sizes_unset'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'intermediate_image_sizes_advanced',						
																		'method_name'	=> 'media_box_unset_default_sizes',
																		'priority'		=> 20,																		
																		'args_count'	=> 1,																			
																		'arr_args'		=> array(
																								'sizes' => array('post-thumbnail', 'thumbnail', 'medium', 'large'), 
																							),
																		'note'			=> 'Removes these sizes from the Media Box when adding a media in a post.',
																	),
																	
									'media_box_default_settings'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'action',	
																		'hook_name'		=> 'after_setup_theme',						
																		'method_name'	=> 'media_box_default_settings',
																		'priority'		=> 10,																		
																		'args_count'	=> NULL,																			
																		'arr_args'		=> array(
																								'image_default_align'		=> 'right',
																								'image_default_link_type'	=> 'none',
																								'image_default_size'		=> 'full'																								
																							),
																		'note'			=> 'Reworks the Media Box default settings.',
																	),
																	
									'media_box_default_sizes_add'	=> array(
																		'active'		=> true,
																		'hook_type'		=> 'filter',	
																		'hook_name'		=> 'image_size_names_choose',						
																		'method_name'	=> 'media_box_default_sizes_add_custom',
																		'priority'		=> 11,																		
																		'args_count'	=> 1,																			
																		'arr_args'		=> NULL,
																		'note'			=> 'Adds the current intermediate_image_sizes to the Media Box select image size.',
																	),																
																	
																	
																																																				
						); // close: $arr_admin_ui_cleanup = array( 

			$arr_return = array();

			//DOTO - validate?
			foreach ($arr_args as $str_preset => $bool_status){ 
				if ( $bool_status === true ) {
					if ( isset($arr_admin_ui_cleanup[$str_preset]) ){
						$arr_return[$str_preset] = $arr_admin_ui_cleanup[$str_preset];
					} else{
						$arr_return = $this->admin_ui_cleanup_presets_custom($str_preset);
						if ( is_array($arr_return)){
							$arr_return[$str_preset] = $arr_return;
						}
					}
				}		
			}
			
			//TODO - what if the arr_return is empty()? let the calling code sort it out? 		
			return $arr_return;	
		}
		
		/**
		 * Extend the Setup Presets class with a child class and add your own presets with this method
		 */		
		public function admin_ui_cleanup_presets_custom($str_preset) {	
			/*
			 * Does the Master Singleton allow for the use of filters?
			 */
			if ( $this->ezCONFIGS('filters') ){
				$arr_return = apply_filters('filter_ezc_admin_ui_cleanup_1_presets_1_presets_custom', $str_preset);
				if ( is_array($arr_return) ){
					return $arr_return;
				}
			}
			/*
			 * Notice how we don't pass a preset value. By passing NULL we will force presets_admin_ui_cleanup() to use the default value for this preset. 
			 */
			$arr_return = $this->admin_ui_cleanup_presets();
			return $arr_return;	
		}
			
		/**
		 * Use a filter to override the default, or if you extend this class you can overide the whole method. Or just
		 * do you own combinations. 
		 */
		public function admin_ui_cleanup_presets_defaults(){	
		
			$arr_defaults = $this->admin_ui_cleanup_presets_combinations('all');
			/*
			 * Does the Master Singleton allow for the use of filters?
			 */
			if ( $this->ezCONFIGS('filters') ){
				$arr_defaults_via_filter = apply_filters('filter_ezc_admin_ui_cleanup_1_presets_1_defaults', $arr_defaults);
				if ( is_array($arr_defaults_via_filter) ){
					$arr_defaults = $arr_defaults_via_filter;
				}
			}
			return $arr_defaults;			
		}
		
		/*
		 * The combos are simply for convenience. You can certainly setup your own combos. 
		 */
		public function admin_ui_cleanup_presets_combinations($str_preset = NULL) {
		
			// No validation for defaults. Either you get what you asked for, or you get nothing at all
		
			$arr_admin_ui_cleanup_combo_1		= array('combo1' => true, 'combo_1' => true);
			$arr_admin_ui_cleanup_combo_2		= array('combo2' => true, 'combo_2' => true);
			$arr_admin_ui_cleanup_quick_press	= array('quickpress' => true, 'quick_press' => true);
			$arr_admin_ui_cleanup_dashboard		= array('dashboard' => true, 'dash_board' => true);
			$arr_admin_ui_cleanup_yoast_seo		= array('yoastseo' => true, 'yoast_seo' => true);
			$arr_admin_ui_cleanup_media_box		= array('mediabox' => true, 'media_box' => true);
			$arr_admin_ui_cleanup_all			= array('all' => true);

			$arr_combo = array();
			
			if ( isset ($arr_admin_ui_cleanup_combo_1[$str_preset]) ){
			
				$arr_combo = array(
								'appearance_editor_remove' 					=> true, 
								'settings_media_remove'						=> true,
								'settings_media_add'						=> true,
								'remove_quick_press'						=> true,
								'remove_all_posts_quick_edit'				=> true,
								'remove_all_posts_edit_trash'				=> true,
								'remove_all_pages_quick_edit'				=> true,
								'remove_all_pages_edit_trash'				=> true,
							);
								
			} elseif ( isset($arr_admin_ui_cleanup_combo_2[$str_preset]) ){
			
				$arr_combo = array(
								'appearance_editor_remove' 					=> true, 
								'settings_media_remove'						=> true,
								'settings_media_add'						=> true,
								'remove_quick_press'						=> true,
								'remove_all_posts_quick_edit'				=> true,
								'remove_all_posts_edit_trash'				=> true,
								'remove_all_pages_quick_edit'				=> true,
								'remove_all_pages_edit_trash'				=> true,
								'remove_bulk_actions_posts'					=> true,
								'remove_bulk_actions_pages'					=> true,

							);	
							
			} elseif ( isset($arr_admin_ui_cleanup_quick_press[$str_preset]) ){
			
				$arr_combo = array(
								'remove_quick_press'						=> true,
							);
							
			} elseif ( isset($arr_admin_ui_cleanup_dashboard[$str_preset]) ){
			
						$arr_combo = array(
								'remove_quick_press'						=> true,
								'remove_incoming_links'						=> true,
								'remove_right_now'							=> true,
								'remove_recent_drafts'						=> true,
								'remove_dashboard_primary'					=> true,
								'remove_dashboard_secondary'				=> true,
								'remove_recent_comments'					=> true,
								);	
							
			} elseif ( isset($arr_admin_ui_cleanup_yoast_seo[$str_preset]) ){
			
						$arr_combo = array(
								'remove_yoast_seo_columns_posts'			=> true,
								'remove_yoast_seo_columns_pages'			=> true,
								'remove_yoast_seo_admin_bar'				=> true,
								'remove_yoast_seo_posts_filter_dropdown' 	=> true,
								);	

			} elseif ( isset($arr_admin_ui_cleanup_media_box[$str_preset]) ){
			
						$arr_combo = array(
								'media_box_default_sizes_unset'				=> true,
								'media_box_default_settings'				=> true,
								'media_box_default_sizes_add'				=> true,
								);									

			} elseif ( isset($arr_admin_ui_cleanup_all[$str_preset]) ){
			
				$arr_combo = array(
								'appearance_editor_remove' 					=> true, 
								'settings_media_remove'						=> true,
								'settings_media_add'						=> true,
								'remove_quick_press'						=> true,
								'remove_incoming_links'						=> true,
								'remove_right_now'							=> true,
								'remove_recent_drafts'						=> true,
								'remove_dashboard_primary'					=> true,
								'remove_dashboard_secondary'				=> true,
								'remove_recent_comments'					=> true,
								'remove_all_posts_quick_edit'				=> true,
								'remove_all_posts_edit_trash'				=> true,
								'remove_all_pages_quick_edit'				=> true,
								'remove_all_pages_edit_trash'				=> true,
								'remove_bulk_actions_posts'					=> true,
								'remove_bulk_actions_pages'					=> true,
								'remove_yoast_seo_columns_posts'			=> true,
								'remove_yoast_seo_columns_pages'			=> true,
								'remove_yoast_seo_admin_bar'				=> true,
								'remove_yoast_seo_posts_filter_dropdown' 	=> true,
								'media_box_default_sizes_unset'				=> true,
								'media_box_default_settings'				=> true,
								'media_box_default_sizes_add'				=> true,
							);	
				}
			
			return $arr_combo;
		}
		
	} // close: class
} // close: if class exists
?>