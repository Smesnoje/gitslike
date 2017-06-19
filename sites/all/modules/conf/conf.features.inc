<?php
/**
 * @file
 * conf.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function conf_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function conf_image_default_styles() {
  $styles = array();

  // Exported image style: slike_po_porudzbini.
  $styles['slike_po_porudzbini'] = array(
    'label' => 'slike po porudzbini',
    'effects' => array(
      1 => array(
        'name' => 'image_resize',
        'data' => array(
          'width' => 120,
          'height' => 70,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}
