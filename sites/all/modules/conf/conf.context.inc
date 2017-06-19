<?php
/**
 * @file
 * conf.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function conf_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'front';
  $context->description = '';
  $context->tag = 'gitslike';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '<front>' => '<front>',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'block-1' => array(
          'module' => 'block',
          'delta' => '1',
          'region' => 'text_blocks',
          'weight' => '-10',
        ),
        'block-2' => array(
          'module' => 'block',
          'delta' => '2',
          'region' => 'text_blocks',
          'weight' => '-9',
        ),
        'views-slike_po_porudzbini-block' => array(
          'module' => 'views',
          'delta' => 'slike_po_porudzbini-block',
          'region' => 'preview_block1',
          'weight' => '-10',
        ),
        'views-prodajna_galerija-block' => array(
          'module' => 'views',
          'delta' => 'prodajna_galerija-block',
          'region' => 'preview_block2',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('gitslike');
  $export['front'] = $context;

  return $export;
}
