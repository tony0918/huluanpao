require('shelljs/global');

var jf = require('jsonfile');
var path = require('path');

if (!which('git')) {
  console.error("This script requires git.");
  exit(1);
}

var configFile = path.resolve(__dirname, 'etc/config.json');
var config = jf.readFileSync(configFile);

if(!config) {
  console.error("Reading config file error.");
  exit(1);
}

var installDrupal = 'drush si ' + config.project_name + ' --db-url=mysql://' + config.mysql_user + ':' + config.mysql_password + '@' + config.mysql_host + '/' + config.mysql_database 
  + ' --account-pass=' + config.drupal_admin_password + ' --yes';
console.log(installDrupal);
exec(installDrupal);


// Added some domain settings to settings.php file.
var settingsFile = path.resolve('sites/default/settings.php');
chmod('-R', '777', settingsFile);
exec('drush ev "huluanpao_append_domain_access_settings();"');
chmod('-R', '644', settingsFile);

exec('drush en huluanpao_feature --uri="http://huluanpao.local" -y');
//exec('drush en domain_locale nuskin_override -y');
exec('drush cc drush');
//exec('drush domain-locale-set huluanpao.local "zh-cn zh-hk zh-tw en-hk" --default=zh-cn');
//exec('drush domain-locale-set huluanpao-hk.local "zh-cn zh-hk zh-tw en-hk" --default=zh-hk');
//exec('drush domain-locale-set huluanpao-tw.local "zh-cn zh-hk zh-tw en-hk" --default=zh-tw');
//exec('drush domain-locale-set en.huluanpao-hk.local "zh-cn zh-hk zh-tw en-hk" --default=en-hk');

exec('drush ev "huluanpao_assign_domain_to_user();"');
exec('drush ev "node_access_rebuild();"');