<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/php-fpm.php';
require 'contrib/npm.php';

set('application', 'watchVault');
set('repository', 'git@github.com:tvarga94/watchVault.git');
set('branch', 'master');
set('php_fpm_version', '8.0');

host('prod')
    ->set('remote_user', 'root')
    ->set('hostname', 'mylaravelapp.com')
    ->set('deploy_path', '/var/www/{{hostname}}');

desc('Deployment started');
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'artisan:migrate',
    'npm:install',
    'npm:run:prod',
    'deploy:publish',
    'php-fpm:reload',
]);

task('npm:run:prod', function () {
    cd('{{release_or_current_path}}');
    run('npm run prod');
});

after('deploy:failed', 'deploy:unlock');
desc('Deployment ended');
