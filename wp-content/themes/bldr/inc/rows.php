<?php
/**
 * Dynamic styles for the Page Builder rows
 *
 * @package bldr
 */
?>
<?php

function bldr_panels_row_style_fields($fields) {

	$fields['color'] = array(
		'name' => __('Color', 'bldr'),
		'type' => 'color',
	);	

	$fields['background'] = array(
		'name' => __('Background Color', 'bldr'),
		'type' => 'color',
	);
	
	$fields['background_image'] = array(
		'name' => __('Background Image URL (Call-to-Action Widget only)', 'bldr'),
		'type' => 'url',
	);

	return $fields;
}
add_filter('siteorigin_panels_row_style_fields', 'bldr_panels_row_style_fields'); 

function bldr_panels_panels_row_style_attributes($attr, $style) {
	$attr['style'] = '';

	if(!empty($style['background'])) $attr['style'] .= 'background-color: '.$style['background'].'; ';
	if(!empty($style['color'])) $attr['style'] .= 'color: '.$style['color'].'; ';
	if(!empty($style['background_image'])) $attr['style'] .= 'background-image: url('.esc_url($style['background_image']).'); '; 

	if(empty($attr['style'])) unset($attr['style']); 
	return $attr;
}
add_filter('siteorigin_panels_row_style_attributes', 'bldr_panels_panels_row_style_attributes', 10, 2);