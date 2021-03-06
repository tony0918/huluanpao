<?php
/**
 * @file
 * huluanpao_feature.domains.inc
 */

/**
 * Implements hook_domain_default_domains().
 */
function huluanpao_feature_domain_default_domains() {
  $domains = array();
  $domains['en_huluanpao_com'] = array(
    'subdomain' => 'en.huluanpao.com',
    'sitename' => 'Huluanpao',
    'scheme' => 'http',
    'valid' => 1,
    'weight' => 3,
    'is_default' => 0,
    'machine_name' => 'en_huluanpao_com',
  );
  $domains['en_huluanpao_local'] = array(
    'subdomain' => 'en.huluanpao.local',
    'sitename' => 'Huluanpao-Test',
    'scheme' => 'http',
    'valid' => 1,
    'weight' => 2,
    'is_default' => 0,
    'machine_name' => 'en_huluanpao_local',
  );
  $domains['huluanpao_com'] = array(
    'subdomain' => 'huluanpao.com',
    'sitename' => '湖乱跑',
    'scheme' => 'http',
    'valid' => 1,
    'weight' => 1,
    'is_default' => 1,
    'machine_name' => 'huluanpao_com',
  );
  $domains['huluanpao_local'] = array(
    'subdomain' => 'huluanpao.local',
    'sitename' => '湖乱跑-Test',
    'scheme' => 'http',
    'valid' => 1,
    'weight' => -1,
    'is_default' => 0,
    'machine_name' => 'huluanpao_local',
  );
  $domains['www_huluanpao_com'] = array(
    'subdomain' => 'www.huluanpao.com',
    'sitename' => '湖乱跑new',
    'scheme' => 'http',
    'valid' => 1,
    'weight' => -2,
    'is_default' => 0,
    'machine_name' => 'www_huluanpao_com',
  );

  return $domains;
}

/**
 * Implements hook_domain_conf_default_variables().
 */
function huluanpao_feature_domain_conf_default_variables() {
  $domain_variables = array();
  $domain_variables['en_huluanpao_com'] = array(
    'language_default' => 'en',
    'site_name' => 'Site-Install',
    'site_mail' => 'admin@example.com',
    'site_slogan' => '',
    'site_frontpage' => 'node/5',
    'anonymous' => 'Anonymous',
    'admin_theme' => 'seven',
    'date_default_timezone' => 'Asia/Shanghai',
    'cache' => 1,
    'cache_lifetime' => 0,
    'maintenance_mode' => 0,
    'maintenance_mode_message' => '湖乱跑 is currently under maintenance. We should be back shortly. Thank you for your patience.',
  );
  $domain_variables['en_huluanpao_local'] = array(
    'site_name' => 'Site-Install',
    'site_mail' => 'admin@example.com',
    'site_slogan' => '',
    'site_frontpage' => 'node/5',
    'anonymous' => 'Anonymous',
    'admin_theme' => 'seven',
    'date_default_timezone' => 'Asia/Shanghai',
    'cache' => 1,
    'cache_lifetime' => 0,
    'maintenance_mode' => 0,
    'maintenance_mode_message' => '湖乱跑 is currently under maintenance. We should be back shortly. Thank you for your patience.',
    'language_default' => 'en',
  );
  $domain_variables['huluanpao_com'] = array(
    'site_name' => '湖乱跑',
    'site_mail' => 'admin@example.com',
    'site_slogan' => '',
    'site_frontpage' => 'node/1',
    'anonymous' => 'Anonymous',
    'admin_theme' => 'seven',
    'date_default_timezone' => 'Asia/Shanghai',
    'cache' => 1,
    'cache_lifetime' => 0,
    'maintenance_mode' => 0,
    'maintenance_mode_message' => '湖乱跑 is currently under maintenance. We should be back shortly. Thank you for your patience.',
    'language_default' => 'zh-hans',
    'node_admin_theme' => 1,
  );
  $domain_variables['huluanpao_local'] = array(
    'language_default' => 'zh-hans',
  );
  $domain_variables['www_huluanpao_com'] = array(
    'site_name' => '湖乱跑',
    'site_mail' => 'admin@example.com',
    'site_slogan' => '',
    'site_frontpage' => 'node/1',
    'anonymous' => 'Anonymous',
    'admin_theme' => 'seven',
    'date_default_timezone' => 'Asia/Shanghai',
    'cache' => 1,
    'cache_lifetime' => 0,
    'maintenance_mode' => 0,
    'maintenance_mode_message' => '湖乱跑 is currently under maintenance. We should be back shortly. Thank you for your patience.',
    'language_default' => 'zh-hans',
    'node_admin_theme' => 1,
  );

  return $domain_variables;
}
