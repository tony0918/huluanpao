<?php
/**
 * @file
 * huluanpao_feature.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function huluanpao_feature_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "boxes" && $api == "box") {
    return array("version" => "1");
  }
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
  if ($module == "template_api" && $api == "template_api") {
    return array("version" => "1");
  }
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function huluanpao_feature_node_info() {
  $items = array(
    'simple_page' => array(
      'name' => t('Simple Page'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
