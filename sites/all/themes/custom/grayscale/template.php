<?php
/**
* Override or insert variables into the html template.
*/
function grayscale_process_html(&$vars) {
// Add classes for the font styles
$classes = explode(' ', $vars['classes']);
$classes[] = theme_get_setting('font_family');
$classes[] = theme_get_setting('font_size');
$vars['classes'] = trim(implode(' ', $classes));
}
