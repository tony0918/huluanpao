<?php

function huluanpao_append_domain_access_settings() {
  $settings = "include_once DRUPAL_ROOT . '/sites/all/modules/domain/settings.inc';";
  file_put_contents(DRUPAL_ROOT . '/sites/default/settings.php', $settings, FILE_APPEND | LOCK_EX);
}

function huluanpao_assign_domain_to_user() {
  $query = db_insert('domain_editor')->fields(array('uid', 'domain_id'));
  $query->values(array('uid' => 1, 'domain_id' => 2));
  $query->execute();
}
