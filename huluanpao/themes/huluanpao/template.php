<?php

/**
 * @file
 * template.php
 */
function huluanpao_process_page(&$variables) {
  $current_domain = domain_get_domain();
  if (!empty($current_domain) && isset($current_domain['machine_name'])) {
    $theme_name = $current_domain['machine_name'] . '_header';
    $variables['huluanpao_header'] = theme($theme_name);
    $theme_name = $current_domain['machine_name'] . '_footer';
    $variables['huluanpao_footer'] = theme($theme_name);
  }

}

function huluanpao_js_alter(&$javascript) {
  if ('story.html' == request_path()) {
    unset($javascript['profiles/huluanpao/themes/huluanpao/js/footer.js']);
  }

}

function huluanpao_theme($existing, $type, $theme, $path) {
  return array(
    'huluanpao_local_header' => array(
      'template' => 'templates/sections/huluanpao-header'
    ),
    'huluanpao_local_footer' => array(
      'template' => 'templates/sections/huluanpao-footer'
    ),
    'huluanpao_com_header' => array(
      'template' => 'templates/sections/huluanpao-header'
    ),
    'huluanpao_com_footer' => array(
      'template' => 'templates/sections/huluanpao-footer'
    ),
    'en_huluanpao_local_header' => array(
      'template' => 'templates/sections/huluanpao-header-en'
    ),
    'en_huluanpao_local_footer' => array(
      'template' => 'templates/sections/huluanpao-footer-en'
    ),
    'en_huluanpao_com_header' => array(
      'template' => 'templates/sections/huluanpao-header-en'
    ),
    'en_huluanpao_com_footer' => array(
      'template' => 'templates/sections/huluanpao-footer-en'
    )
  );
}

//function huluanpao_preprocess_page(&$variables) {
//  if (isset($variables['node']->type)) {
//    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
//  }
//  if (request_path() == 'index.html' || request_uri() == '/') {
//    $variables['theme_hook_suggestions'][] = 'page__front';
//  }
//}