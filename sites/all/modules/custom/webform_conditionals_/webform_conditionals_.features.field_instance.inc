<?php
/**
 * @file
 * webform_conditionals_.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function webform_conditionals__field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-webform-field_webforma_entity'.
  $field_instances['node-webform-field_webforma_entity'] = array(
    'bundle' => 'webform',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'entityreference',
        'settings' => array(
          'bypass_access' => FALSE,
          'link' => FALSE,
        ),
        'type' => 'entityreference_label',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_webforma_entity',
    'label' => 'webforma_entity',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'options',
      'settings' => array(),
      'type' => 'options_buttons',
      'weight' => -4,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('webforma_entity');

  return $field_instances;
}
