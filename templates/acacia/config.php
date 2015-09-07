<?php/** * Default theme single.php template * * To customize your default landing page, create a single-landing-page.php and customize * http://docs.inboundnow.com/landing-pages/dev/creating-templates/default-wp-themes * * DO NOT USE THE DEFAULT TEMPLATE FOR INNOVATING NEW THEMES! Instead use the demo template or any other the others */do_action('lp_global_config'); // global config action hook//gets template directory name to use as identifier - do not edit - include in all template files$key = lp_get_parent_directory(dirname(__FILE__));$lp_data[$key]['info'] =array(	'data_type' => 'template', // Template Data Type	'version' => "1.0.0", // Version Number	'label' => 'Acacia', // Nice Name	'category' => '1 column layout, Responsive', // Template Category	'demo' => 'http://docs.inboundnow.com/landing-pages/dev/creating-templates/default-wp-themes', // Demo Link	'description'  => 'A beautiful modern landing page with image on top', // template description	'acf' => true,);/* Load ACF definitions for Acacia */if( function_exists('acf_add_local_field_group') ):acf_add_local_field_group(array (	'key' => 'group_55e947ec8e060',	'title' => 'Acacia Landing',	'fields' => array (		array (			'key' => 'field_55e948a88c0b6',			'label' => 'Acacia Template Body',			'name' => 'acacia_template_body',			'type' => 'flexible_content',			'instructions' => 'This is the main box in the landing page. Add an attractive image and a well studied headline to leep your visitor in the page.',			'required' => 0,			'conditional_logic' => 0,			'wrapper' => array (				'width' => '',				'class' => '',				'id' => '',			),			'button_label' => 'Add Row',			'min' => '',			'max' => '',			'layouts' => array (				array (					'key' => '55e948b5a5956',					'name' => 'hero_box',					'label' => 'Hero Box',					'display' => 'row',					'sub_fields' => array (						array (							'key' => 'field_55e94a778c0b7',							'label' => 'Background Color',							'name' => 'hero_bg_color',							'type' => 'color_picker',							'instructions' => 'Choose the background color of your hero box',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#67B49F',						),						array (							'key' => 'field_55e94c3e7a690',							'label' => 'Add Media',							'name' => 'add_media',							'type' => 'radio',							'instructions' => 'Choose whether you want an image or video in your hero box',							'required' => 1,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'choices' => array (								'image' => 'Image',								'video' => 'Video',							),							'other_choice' => 0,							'save_other_choice' => 0,							'default_value' => 'image',							'layout' => 'horizontal',						),						array (							'key' => 'field_55e94acfb442a',							'label' => 'Image',							'name' => 'hero_image',							'type' => 'image',							'instructions' => 'Add here your hero image',							'required' => 1,							'conditional_logic' => array (								array (									array (										'field' => 'field_55e94c3e7a690',										'operator' => '==',										'value' => '',									),								),							),							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'return_format' => 'url',							'preview_size' => 'thumbnail',							'library' => 'all',							'min_width' => '',							'min_height' => '',							'min_size' => '',							'max_width' => '',							'max_height' => '',							'max_size' => '',							'mime_types' => '',						),						array (							'key' => 'field_55e94afdb442b',							'label' => 'Video',							'name' => 'hero_video',							'type' => 'oembed',							'instructions' => 'Add here your hero video',							'required' => 0,							'conditional_logic' => array (								array (									array (										'field' => 'field_55e94c3e7a690',										'operator' => '==',										'value' => 'video',									),								),							),							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'width' => 640,							'height' => 390,						),						array (							'key' => 'field_55e94e5c040bd',							'label' => 'Headline',							'name' => 'hero_headline',							'type' => 'text',							'instructions' => 'Add your headline here',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '',							'placeholder' => '',							'prepend' => '',							'append' => '',							'maxlength' => '',							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55e94e93040be',							'label' => 'Headline color',							'name' => 'hero_headline_color',							'type' => 'color_picker',							'instructions' => 'Choose the color of your headline',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#FFFFFF',						),						array (							'key' => 'field_55e94fa8040bf',							'label' => 'Sub Headline',							'name' => 'hero_subh_eadline',							'type' => 'text',							'instructions' => 'Add your sub headline here',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '',							'placeholder' => '',							'prepend' => '',							'append' => '',							'maxlength' => '',							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55e94fe2040c0',							'label' => 'Sub Headline Color',							'name' => 'hero_sub_headline_color',							'type' => 'color_picker',							'instructions' => 'Choose the color of your sub headline',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#FFFFFF',						),						array (							'key' => 'field_55e95010d9a8f',							'label' => 'Button Text',							'name' => 'hero_button_text',							'type' => 'text',							'instructions' => 'Add here the text inside the button',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '',							'placeholder' => '',							'prepend' => '',							'append' => '',							'maxlength' => '',							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55e9503fd9a90',							'label' => 'Button Text Color',							'name' => 'hero_button_text_color',							'type' => 'color_picker',							'instructions' => 'Choose the color of the text button',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#FFFFFF',						),						array (							'key' => 'field_55e9507fd9a91',							'label' => 'Button Link',							'name' => 'hero_button_link',							'type' => 'url',							'instructions' => 'Add the URL to which you\'ll send those who click on the button',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#',							'placeholder' => '',						),						array (							'key' => 'field_55e950b9d9a92',							'label' => 'Button Background Color',							'name' => 'hero_button_bg_color',							'type' => 'color_picker',							'instructions' => 'Choose the background color of the button',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#AAAAAA',						),					),					'min' => 1,					'max' => '',				),				array (					'key' => '55e956f0ee5af',					'name' => 'three_columns_text',					'label' => 'Three Columns Text',					'display' => 'row',					'sub_fields' => array (						array (							'key' => 'field_55e95713ee5b0',							'label' => 'Background Color',							'name' => 'three_col_bg_color',							'type' => 'color_picker',							'instructions' => 'Choose the background color of your three columns box',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#FFFFFF',						),						array (							'key' => 'field_55e95752ee5b1',							'label' => 'Text Color',							'name' => 'three_col_text_color',							'type' => 'color_picker',							'instructions' => 'Choose the color of the text',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#676C72',						),						array (							'key' => 'field_55ed4ee644ea0',							'label' => 'Headline',							'name' => 'three_col_headline',							'type' => 'text',							'instructions' => 'Add your headline',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => 'Lorem ipsum dolor sit amet',							'placeholder' => '',							'prepend' => '',							'append' => '',							'maxlength' => '',							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55e95cd32ea2f',							'label' => 'Column 1 Text',							'name' => 'three_col_column_1_text',							'type' => 'textarea',							'instructions' => 'Add the text message of the column 1',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',							'placeholder' => '',							'maxlength' => '',							'rows' => '',							'new_lines' => 'wpautop',							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55e95d822ea30',							'label' => 'Column 1 Icon',							'name' => 'three_col_column_1_icon',							'type' => 'text',							'instructions' => '',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '',							'placeholder' => '',							'prepend' => '',							'append' => '',							'maxlength' => 1,							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55e95e70a67b9',							'label' => 'Column 2 Text',							'name' => 'three_col_column_2_text',							'type' => 'textarea',							'instructions' => 'Add the text message of the column 2',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',							'placeholder' => '',							'maxlength' => '',							'rows' => '',							'new_lines' => 'wpautop',							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55e95e80a67ba',							'label' => 'Column 2 Icon',							'name' => 'three_col_column_2_icon',							'type' => 'text',							'instructions' => '',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '',							'placeholder' => '',							'prepend' => '',							'append' => '',							'maxlength' => 1,							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55e95e98a67bb',							'label' => 'Column 3 Text',							'name' => 'three_col_column_3_text',							'type' => 'textarea',							'instructions' => 'Add the text message of the column 3',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',							'placeholder' => '',							'maxlength' => '',							'rows' => '',							'new_lines' => 'wpautop',							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55e95eada67bc',							'label' => 'Column 3 Icon',							'name' => 'three_col_column_3_icon',							'type' => 'text',							'instructions' => '',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '',							'placeholder' => '',							'prepend' => '',							'append' => '',							'maxlength' => 1,							'readonly' => 0,							'disabled' => 0,						),					),					'min' => '',					'max' => '',				),				array (					'key' => '55e95ed9579d4',					'name' => 'testimonials',					'label' => 'Testimonials',					'display' => 'row',					'sub_fields' => array (						array (							'key' => 'field_55e95eeb579d5',							'label' => 'Background Color',							'name' => 'testimonials_bg_color',							'type' => 'color_picker',							'instructions' => 'Choose the background color of your testimonials box',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#67B49F',						),						array (							'key' => 'field_55e95f56579d6',							'label' => 'Testimonial',							'name' => 'testimonial',							'type' => 'repeater',							'instructions' => '',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'min' => '',							'max' => '',							'layout' => 'table',							'button_label' => 'Add New Testimonial',							'sub_fields' => array (								array (									'key' => 'field_55e95f83579d7',									'label' => 'Testimonial Image',									'name' => 'testimonial_image',									'type' => 'image',									'instructions' => 'Add a picture of your testimonial',									'required' => 1,									'conditional_logic' => 0,									'wrapper' => array (										'width' => '',										'class' => '',										'id' => '',									),									'return_format' => 'url',									'preview_size' => 'thumbnail',									'library' => 'all',									'min_width' => '',									'min_height' => '',									'min_size' => '',									'max_width' => '',									'max_height' => '',									'max_size' => '',									'mime_types' => '',								),								array (									'key' => 'field_55e95fbc579d8',									'label' => 'Testimonial Text',									'name' => 'testimonial_text',									'type' => 'textarea',									'instructions' => 'Add a fancy sentence from your testimonial',									'required' => 1,									'conditional_logic' => 0,									'wrapper' => array (										'width' => '',										'class' => '',										'id' => '',									),									'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',									'placeholder' => '',									'maxlength' => '',									'rows' => '',									'new_lines' => 'wpautop',									'readonly' => 0,									'disabled' => 0,								),								array (									'key' => 'field_55e96011579d9',									'label' => 'Testimonial Name',									'name' => 'testimonial_name',									'type' => 'text',									'instructions' => 'Add the name of your testimonial',									'required' => 1,									'conditional_logic' => 0,									'wrapper' => array (										'width' => '',										'class' => '',										'id' => '',									),									'default_value' => '',									'placeholder' => '',									'prepend' => '',									'append' => '',									'maxlength' => '',									'readonly' => 0,									'disabled' => 0,								),								array (									'key' => 'field_55e96034579da',									'label' => 'Testimonial Name Link',									'name' => 'testimonial_name_link',									'type' => 'url',									'instructions' => 'Add a link to the site of your testimonial (optional)',									'required' => 0,									'conditional_logic' => 0,									'wrapper' => array (										'width' => '',										'class' => '',										'id' => '',									),									'default_value' => '',									'placeholder' => '',								),							),						),					),					'min' => '',					'max' => '',				),				array (					'key' => '55ed348dc1743',					'name' => 'faq_section',					'label' => 'FAQ Section',					'display' => 'row',					'sub_fields' => array (						array (							'key' => 'field_55ed34a5c1744',							'label' => 'Background Color',							'name' => 'faq_bg_color',							'type' => 'color_picker',							'instructions' => 'Choose the background color of the FAQ section',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#FFFFFF',						),						array (							'key' => 'field_55ed34c4c1745',							'label' => 'Text Color',							'name' => 'faq_text_color',							'type' => 'color_picker',							'instructions' => 'Choose the text color of the FAQ section',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#676C72',						),						array (							'key' => 'field_55ed34ffc1746',							'label' => 'Headline',							'name' => 'faq_headline',							'type' => 'text',							'instructions' => 'Add here the headline of your FAQ section',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => 'Frequently Asked Questions',							'placeholder' => '',							'prepend' => '',							'append' => '',							'maxlength' => '',							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55ed3550c1747',							'label' => 'FAQs',							'name' => 'faqs',							'type' => 'repeater',							'instructions' => 'Add all your FAQs here',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'min' => '',							'max' => '',							'layout' => 'table',							'button_label' => 'Add Row',							'sub_fields' => array (								array (									'key' => 'field_55ed3574c1748',									'label' => 'FAQ Title',									'name' => 'faq_title',									'type' => 'text',									'instructions' => 'The title of the question',									'required' => 0,									'conditional_logic' => 0,									'wrapper' => array (										'width' => '',										'class' => '',										'id' => '',									),									'default_value' => 'Lorem Ipsum Dolor Sit Amet',									'placeholder' => '',									'prepend' => '',									'append' => '',									'maxlength' => '',									'readonly' => 0,									'disabled' => 0,								),								array (									'key' => 'field_55ed35c3c1749',									'label' => 'FAQ Content',									'name' => 'faq_content',									'type' => 'textarea',									'instructions' => 'The answer to the question',									'required' => 0,									'conditional_logic' => 0,									'wrapper' => array (										'width' => '',										'class' => '',										'id' => '',									),									'default_value' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',									'placeholder' => '',									'maxlength' => '',									'rows' => '',									'new_lines' => 'wpautop',									'readonly' => 0,									'disabled' => 0,								),							),						),						array (							'key' => 'field_55ed3660678a6',							'label' => 'More Questions Button Text',							'name' => 'more_questions_button_text',							'type' => 'text',							'instructions' => 'Add the text of the \'more questions\' button',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => 'More Questions?',							'placeholder' => '',							'prepend' => '',							'append' => '',							'maxlength' => '',							'readonly' => 0,							'disabled' => 0,						),						array (							'key' => 'field_55ed36a4678a7',							'label' => 'More Questions Button Link',							'name' => 'more_questions_button_link',							'type' => 'url',							'instructions' => 'Add the link of the \'more questions\' button',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#',							'placeholder' => '',						),						array (							'key' => 'field_55ed36c8678a8',							'label' => 'More Questions Button Color',							'name' => 'more_questions_button_color',							'type' => 'color_picker',							'instructions' => 'Choose the color of your \'more questions\' button',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#67B49F',						),						array (							'key' => 'field_55ed370c678a9',							'label' => 'More Questions Button Text Color',							'name' => 'more_questions_button_text_color',							'type' => 'color_picker',							'instructions' => 'Choose the color of your \'more questions\' button text',							'required' => 0,							'conditional_logic' => 0,							'wrapper' => array (								'width' => '',								'class' => '',								'id' => '',							),							'default_value' => '#FFFFFF',						),					),					'min' => '',					'max' => '',				),			),		),	),	'location' => array (		array (			array (				'param' => 'post_type',				'operator' => '==',				'value' => 'landing-page',			),			array (				'param' => 'template_id',				'operator' => '==',				'value' => $key,			)		),	),	'menu_order' => 0,	'position' => 'normal',	'style' => 'default',	'label_placement' => 'top',	'instruction_placement' => 'label',	'hide_on_screen' => '',	'active' => 1,	'description' => '',));endif;