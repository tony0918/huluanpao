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

config.webroot = 'webroot';

var drupalMakeFile = path.resolve(config.project_name, 'build.make');
if (test('-d', path.resolve(config.webroot, 'sites'))) {
  chmod('-R', '777', path.resolve(config.webroot, 'sites'));
}
rm('-rf', config.webroot);

var mysqlPrefix = 'mysql --host=' + config.mysql_host + ' --user=' + config.mysql_user + ' --password=' + config.mysql_password;
var detectDatabase = mysqlPrefix + ' -qfsBe "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME=\'' + config.mysql_database + '\';"';
var createDatabase = mysqlPrefix + ' -e "create database ' + config.mysql_database + ';"';

exec('drush make ' + drupalMakeFile + ' ' + config.webroot + ' -y');
var db = exec(detectDatabase).output;
if(db.search(config.mysql_database) < 0) {
  exec(createDatabase);
}

// Copy the whole folder to Drupal profile for Product.
// cp('-R', config.project_name, path.resolve(config.webroot, 'profiles'));

// Create symlink for development.
ln('-sf', config.project_name, path.resolve(config.webroot, 'profiles', config.project_name));
