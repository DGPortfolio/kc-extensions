<?php

// ----------------------------------------------------------------------------------------------------
// KingComposer Element Demo Data (All 21 Fields and Dependency, Relation Demo)
//  Load this into your plugin or theme with KingComposer active and look under 
//   the "Category_Name_Here" and load the "Label_Name_Here" element. Then view it's contents.
// ----------------------------------------------------------------------------------------------------

add_action('init', 'King_Composer_Element_Demo___', 99);
function King_Composer_Element_Demo___() {
	if (function_exists('kc_add_map')) {
		$element_name         = 'Element_Name_Here';
		$element_description  = 'Element_Description_Here';
		$element_category     = 'Element_Category';
		$element_icon         = 'sl-layers';
		$shortcode_syntax     = 'shortcode_syntax_here';
		$live_editor_path     = '';
		$tab_name             = 'Tab_Name_Here';
		$default_style_tab    = 'Default Style';
		$design_tab           = 'Design';
		$group_repeater_tab   = 'Group / Repeater';
		$group_repeater_label = 'Group_Repeater_Label_Name_Here';
		$group_repeater_desc  = 'Description_Here';
		$animation_tab        = 'Animation';
		kc_add_map(
		array(
			$shortcode_syntax => // Shortcode ID/Syntax
			array(
				// ----------------------------------------------------------------------
				// Element config in add elements window
				// ----------------------------------------------------------------------
				'name'          => __($element_name,        'Your_Optional_Text_Domain_Name_Here'),
				'description'   => __($element_description, 'Your_Optional_Text_Domain_Name_Here'),
				'category'	    => $element_category,
				'icon'		    => $element_icon,
				'live_editor'   => $live_editor_path, // @REF https://goo.gl/8lbtpj
				'is_container'  => TRUE, // TRUE = [shortcode_syntax_here][/shortcode_syntax_here] NOTE: Required when using Textarea HTML Fields
				// ----------------------------------------------------------------------
				// Nested and nested add element window changes
				// ----------------------------------------------------------------------
				'nested'        => FALSE, // Allow add elements into your element. This override is_container to hold nested elements.
				'accept_child'  => '', // Give the element shortcode_id. Use commas to specify multiple elements
				'except_child'	=> '', // Give the element shortcode_id. Use commas to specify multiple elements
				'accept_parent'	=> '', // Give the element shortcode_id. Use commas to specify multiple elements
				'except_parent'	=> '', // Give the element shortcode_id. Use commas to specify multiple elements
				// ----------------------------------------------------------------------
				// Assets
				//  @NOTE
				//   Any assets will be loaded ONLY when this shortcode is used by the user
				// ----------------------------------------------------------------------
				'assets' => 
				array(
					'styles' => 
					array(
                        // 'inline'    => TRUE,
                        // 'priority'  => 99,
						'-style'    => '', // Path to asset here
						'jquery-ui' => '', // Leave empty to call built-in assets
					),
					'scripts' => 
					array(
                        // 'inline'   => FALSE,
                        // 'priority' => 99,
						'-script'  => '', // Path to asset here
						'jquery'   => '', // Leave empty to call built-in assets
					),
				),
				// ----------------------------------------------------------------------
				// Administration
				// ----------------------------------------------------------------------
				'system_only' => FALSE, // TRUE = NOT visible in elements window
				'admin_label' => FALSE, // TRUE = Generates backend element preview
				'filter'      => '', // PHP function name, data will be run through this filter before process
				'params' => 
				array(
					// ----------------------------------------------------------------------
					// General Tab
					// ----------------------------------------------------------------------
					'Tab_Name_Here' => 
					array(
						// ----------------------------------------------------------------------
						// Toggle / Switcher
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_toggle_id_here',
							'type'        => 'toggle',
							'value'       => '',
						),
						// ----------------------------------------------------------------------
						// Text
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_text_id_here',
							'type'        => 'text',
							'value'       => '',
						),
						// ----------------------------------------------------------------------
						// Autocomplete / Autosuggest
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_autocomplete_id_here-ids',
							'type'        => 'autocomplete',
						),
						// ----------------------------------------------------------------------
						// Select
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_select_id_here',
							'type'        => 'select',
							'value'       => '',
							'options' => 
							array(
								'select_value_1' => 'Select_Option_1_Here',
								'select_value_2' => 'Select_Option_2_Here',
								'select_value_3' => 'Select_Option_3_Here',
							),
							// 'options' => Funcion_Name_Here(), // Or custom function
						),
						// ----------------------------------------------------------------------
						// Multiple Select
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_multiple_id_here',
							'type'        => 'multiple',
							'value'       => '',
							'options' => 
							array(
								'multiple_value_1' => 'Select_Option_1_Here',
								'multiple_value_2' => 'Select_Option_2_Here',
								'multiple_value_3' => 'Select_Option_3_Here',
							),
							// 'options' => Funcion_Name_Here(), // Or custom function
						),
						// ----------------------------------------------------------------------
						// Checkbox
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_checkbox_id_here',
							'type'        => 'checkbox',
							'value'       => '',
							'options' => 
							array(
								'checkbox_value_1' => 'Select_Option_1_Here',
								'checkbox_value_2' => 'Select_Option_2_Here',
								'checkbox_value_3' => 'Select_Option_3_Here',
							),
							// 'options' => Funcion_Name_Here(), // Or custom function
						),
						// ----------------------------------------------------------------------
						// Radio
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_radio_id_here',
							'type'        => 'radio',
							'value'       => '',
							'options' => 
							array(
								'radio_value_1' => 'Select_Option_1_Here',
								'radio_value_2' => 'Select_Option_2_Here',
								'radio_value_3' => 'Select_Option_3_Here',
							),
							// 'options' => Funcion_Name_Here(), // Or custom function
						),
						// ----------------------------------------------------------------------
						// Radio Image
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_radio_image_id_here',
							'type'        => 'radio_image',
							'value'       => '',
							'options' => 
							array(
								'radio_image_value_1' => 'https://goo.gl/8k0VUj', // Your direct image path
								'radio_image_value_2' => 'https://goo.gl/8k0VUj', // Your direct image path
								'radio_image_value_3' => 'https://goo.gl/8k0VUj', // Your direct image path
							),
							// 'options' => Funcion_Name_Here(), // Or custom function
						),
						// ----------------------------------------------------------------------
						// Attach Image
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_attach_image_here',
							'type'        => 'attach_image',
							'value'       => 'URL is currently empty',
						),
						// ----------------------------------------------------------------------
						// Attach Images
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_attach_images_here',
							'type'        => 'attach_images',
							'value'       => 'URL is currently empty',
						),
						// ----------------------------------------------------------------------
						// Link
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_link_id_here',
							'type'        => 'link',
							'value'       => 'URL is currently empty',
						),
						// ----------------------------------------------------------------------
						// Color Picker
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_color_picker_id_here',
							'type'        => 'color_picker',
							'value'       => '',
						),
						// ----------------------------------------------------------------------
						// Number Slider
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'type'        => 'number_slider',
							'value'       => '',
							'options' => 
							array(
								'min'        => 0,
								'max'        => 12,
								'unit'       => '',
								'show_input' => TRUE,
							),
						),
						// ----------------------------------------------------------------------
						// Icon Picker
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_icon_picker_id_here',
							'type'        => 'icon_picker',
							'value'       => '',
						),
						// ----------------------------------------------------------------------
						// Icon Picker
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_date_picker_id_here',
							'type'        => 'date_picker',
							'value'       => '',
						),
						// ----------------------------------------------------------------------
						// Post Taxonomy
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_post_taxonomy_id_here',
							'type'        => 'post_taxonomy',
							'value'       => '',
						),
						// ----------------------------------------------------------------------
						// WYSIWYG Editor (Loads on demand)
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_editor_id_here',
							'type'        => 'editor',
							'value'       => base64_encode(''),
						),
						// ----------------------------------------------------------------------
						// WYSIWYG Editor (Loads on Load)
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'type'        => 'textarea_html',
							'name'        => 'content',
							'value'       => '',
						),
						// ----------------------------------------------------------------------
						// Raw text area
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_textarea_id_here',
							'type'        => 'textarea',
							'value'       => base64_encode(''),
						),
						// ----------------------------------------------------------------------
						// Google Map
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_google_map_id_here',
							'type'        => 'google_map',
						),
					),
					// ----------------------------------------------------------------------
					// Default Style Tab
					// ----------------------------------------------------------------------
					'Default Style' => 
					array(
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_default_css_id_here',
							'type'        => 'css',
							'value'       => '',
						),
					),
					// ----------------------------------------------------------------------
					// Custom Style Tab
					// ----------------------------------------------------------------------
					'Design' => 
					array(
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_design_id_here',
							'type'        => 'css',
							'value'       => '',
							'options' => 
							array(
								array(
									
									'screens' => 'any, 1024, 999, 767, 479',
									
									'Background' => 
									
									array(
										array('property' => 'width',         'label' => 'Width',  'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'height',        'label' => 'Height', 'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'background',                         'selector' => 'Your_Css_Selector_ID_Here'),
									),
									
									'Container' => 
									
									array(
										array('property' => 'padding',       'label' => 'Padding',       'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'margin',        'label' => 'Margin',        'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'border',        'label' => 'Border',        'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'box-shadow',    'label' => 'Box Shadow',    'selector' => 'Your_Css_Selector_ID_Here'),
									),
									
									'Typography' => 
									
									array(
										array('property' => 'color',           'label' => 'Color',           'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'font-size',       'label' => 'Font Size',       'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'font-weight',     'label' => 'Font Weight',     'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'font-style',      'label' => 'Font Style',      'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'font-family',     'label' => 'Font Family',     'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'text-align',      'label' => 'Text Align',      'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'text-shadow',     'label' => 'Text Shadow',     'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'text-transform',  'label' => 'Text Transform',  'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'text-decoration', 'label' => 'Text Decoration', 'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'line-height',     'label' => 'Line Height',     'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'letter-spacing',  'label' => 'Letter Spacing',  'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'overflow',        'label' => 'Overflow',        'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'word-break',      'label' => 'Word Break',      'selector' => 'Your_Css_Selector_ID_Here'),
									),
									
									'Misc' => 
									
									array(
										array('property' => 'float',         'label' => 'Float',   'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'display',       'label' => 'Display', 'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'opacity',       'label' => 'Opacity', 'selector' => 'Your_Css_Selector_ID_Here'),
									),
									
									'CSS' => 
									
									array(
										array('property' => 'custom', 'label' => 'Custom CSS', 'selector' => 'Your_Css_Selector_ID_Here')
									)
								),
							),
						),
					),
					// ----------------------------------------------------------------------
					// Group/Repeater Tab
					// ----------------------------------------------------------------------
					'Group / Repeater' => 
					array(
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_group_id_here',
							'type'        => 'group',
							'options'     => array('add_text' => __('Add Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here')),
							'value'       => 
							base64_encode(json_encode(array(
								// Group / Repeater 1 default values
								"1" => 
								array(
									"label" => "Repeater_1_Label_Name_Here",
									"unique_group_repeater_toggle_id_here" => "yes",
								),
								// Group / Repeater 2 default values
								"2" => 
								array(
									"label" => "Repeater_2_Label_Name_Here",
									"unique_group_repeater_text_id_here" => "Optional_Default_Value_Here",
								),
								// Group / Repeater 3 default values
								"3" => 
								array(
									"label" => "Repeater_3_Label_Name_Here",
									"unique_group_repeater_checkbox_id_here" => "group_repeater_checkbox_value_3",
								),
							))),
							'params' => 
							array(
								// ----------------------------------------------------------------------
								// Text field to give the Group / Repeater a custom identifiable name
								// ----------------------------------------------------------------------
								array(
									'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
									'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
									'name'        => 'label',
									'type'        => 'text',
								),
								// ----------------------------------------------------------------------
								// Toggle
								// ----------------------------------------------------------------------
								array(
									'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
									'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
									'name'        => 'unique_group_repeater_toggle_id_here',
									'type'        => 'toggle',
									'value'       => '',
								),
								// ----------------------------------------------------------------------
								// Text
								// ----------------------------------------------------------------------
								array(
									'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
									'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
									'name'        => 'unique_group_repeater_text_id_here',
									'type'        => 'text',
									'value'       => '',
								),
								// ----------------------------------------------------------------------
								// Checkbox
								// ----------------------------------------------------------------------
								array(
									'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
									'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
									'name'        => 'unique_group_repeater_checkbox_id_here',
									'type'        => 'checkbox',
									'value'       => '',
									'options' => 
									array(
										'group_repeater_checkbox_value_1' => 'Select_Option_1_Here',
										'group_repeater_checkbox_value_2' => 'Select_Option_2_Here',
										'group_repeater_checkbox_value_3' => 'Select_Option_3_Here',
									),
									// 'options' => Funcion_Name_Here(), // Or custom function
									'relation' => 
									array(
										'parent'    => 'unique_group_id_here-unique_group_repeater_toggle_id_here',
										'show_when' => 'yes',
									),
								),
							),
						),
					),
					// ----------------------------------------------------------------------
					// Animation Tab
					// ----------------------------------------------------------------------
					'Animation' => 
					array(
						array(
							'type'    => 'animate'
						),
					),
				),
			),
		)
	);
	}
}

add_action('init', 'King_Composer_Nested_Element_Demo___', 99);
function King_Composer_Nested_Element_Demo___() {
	if (function_exists('kc_add_map')) {
		$element_name           = 'Element_Container_Name_Here';
		$element_description    = 'Element_Description_Here';
		$element_category       = 'Element_Category';
		$element_icon           = 'sl-layers';
		$shortcode_syntax       = 'container_shortcode_syntax_here';
		$allowed_child_elements = 'shortcode_syntax_here';
		$live_editor_path       = '';
		$tab_name               = 'Tab_Name_Here';
		$default_style_tab      = 'Default Style';
		$design_tab             = 'Design';
		$group_repeater_tab     = 'Group / Repeater';
		$group_repeater_label   = 'Group_Repeater_Label_Name_Here';
		$group_repeater_desc    = 'Description_Here';
		$animation_tab          = 'Animation';
		kc_add_map(
		array(
			$shortcode_syntax => // Shortcode ID/Syntax
			array(
				// ----------------------------------------------------------------------
				// Element config in add elements window
				// ----------------------------------------------------------------------
				'name'          => __($element_name,        'Your_Optional_Text_Domain_Name_Here'),
				'description'   => __($element_description, 'Your_Optional_Text_Domain_Name_Here'),
				'category'	    => $element_category,
				'icon'		    => $element_icon,
				'live_editor'   => $live_editor_path, // @REF https://goo.gl/8lbtpj
				'is_container'  => TRUE, // TRUE = [shortcode_syntax_here][/shortcode_syntax_here] NOTE: Required when using Textarea HTML Fields
				// ----------------------------------------------------------------------
				// Nested and nested add element window changes
				// ----------------------------------------------------------------------
				'nested'        => TRUE, // Allow add elements into your element. This override is_container to hold nested elements.
				'accept_child'  => $allowed_child_elements, // Give the element shortcode_id. Use commas to specify multiple elements
				'except_child'	=> '', // Give the element shortcode_id. Use commas to specify multiple elements
				'accept_parent'	=> '', // Give the element shortcode_id. Use commas to specify multiple elements
				'except_parent'	=> '', // Give the element shortcode_id. Use commas to specify multiple elements
				// ----------------------------------------------------------------------
				// Assets
				//  @NOTE
				//   Any assets will be loaded ONLY when this shortcode is used by the user
				// ----------------------------------------------------------------------
				'assets' => 
				array(
					'styles' => 
					array(
                        // 'inline'    => TRUE,
                        // 'priority'  => 99,
						'-style'    => '', // Path to asset here
						'jquery-ui' => '', // Leave empty to call built-in assets
					),
					'scripts' => 
					array(
                        // 'inline'   => FALSE,
                        // 'priority' => 99,
						'-script'  => '', // Path to asset here
						'jquery'   => '', // Leave empty to call built-in assets
					),
				),
				// ----------------------------------------------------------------------
				// Administration
				// ----------------------------------------------------------------------
				'system_only' => FALSE, // TRUE = NOT visible in elements window
				'admin_label' => FALSE, // TRUE = Generates backend element preview
				'filter'      => '', // PHP function name, data will be run through this filter before process
				'params' => 
				array(
					// ----------------------------------------------------------------------
					// General Tab
					// ----------------------------------------------------------------------
					'Tab_Name_Here' => 
					array(
						// ----------------------------------------------------------------------
						// Toggle / Switcher
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_toggle_id_here',
							'type'        => 'toggle',
							'value'       => '',
						),
					),
					// ----------------------------------------------------------------------
					// Default Style Tab
					// ----------------------------------------------------------------------
					'Default Style' => 
					array(
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_default_css_id_here',
							'type'        => 'css',
							'value'       => '',
						),
					),
					// ----------------------------------------------------------------------
					// Custom Style Tab
					// ----------------------------------------------------------------------
					'Design' => 
					array(
						array(
							'label'       => __('Label_Name_Here', 'Your_Optional_Text_Domain_Name_Here'), 'admin_label' => TRUE,
							'description' => __('Description_Here', 'Your_Optional_Text_Domain_Name_Here'),
							'name'        => 'unique_design_id_here',
							'type'        => 'css',
							'value'       => '',
							'options' => 
							array(
								array(
									
									'screens' => 'any, 1024, 999, 767, 479',
									
									'Background' => 
									
									array(
										array('property' => 'width',         'label' => 'Width',  'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'height',        'label' => 'Height', 'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'background',                         'selector' => 'Your_Css_Selector_ID_Here'),
									),
									
									'Container' => 
									
									array(
										array('property' => 'padding',       'label' => 'Padding',       'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'margin',        'label' => 'Margin',        'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'border',        'label' => 'Border',        'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'box-shadow',    'label' => 'Box Shadow',    'selector' => 'Your_Css_Selector_ID_Here'),
									),
									
									'Typography' => 
									
									array(
										array('property' => 'color',           'label' => 'Color',           'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'font-size',       'label' => 'Font Size',       'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'font-weight',     'label' => 'Font Weight',     'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'font-style',      'label' => 'Font Style',      'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'font-family',     'label' => 'Font Family',     'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'text-align',      'label' => 'Text Align',      'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'text-shadow',     'label' => 'Text Shadow',     'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'text-transform',  'label' => 'Text Transform',  'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'text-decoration', 'label' => 'Text Decoration', 'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'line-height',     'label' => 'Line Height',     'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'letter-spacing',  'label' => 'Letter Spacing',  'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'overflow',        'label' => 'Overflow',        'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'word-break',      'label' => 'Word Break',      'selector' => 'Your_Css_Selector_ID_Here'),
									),
									
									'Misc' => 
									
									array(
										array('property' => 'float',         'label' => 'Float',   'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'display',       'label' => 'Display', 'selector' => 'Your_Css_Selector_ID_Here'),
										array('property' => 'opacity',       'label' => 'Opacity', 'selector' => 'Your_Css_Selector_ID_Here'),
									),
									
									'CSS' => 
									
									array(
										array('property' => 'custom', 'label' => 'Custom CSS', 'selector' => 'Your_Css_Selector_ID_Here')
									)
								),
							),
						),
					),
					// ----------------------------------------------------------------------
					// Animation Tab
					// ----------------------------------------------------------------------
					'Animation' => 
					array(
						array(
							'name'    => 'animate',
							'type'    => 'animate'
						),
					),
				),
			),
		)
	);
	}
}
