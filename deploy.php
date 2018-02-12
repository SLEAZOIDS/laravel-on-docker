<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'git@github.com:SLEAZOIDS/laravel-on-docker.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('54.248.9.15')
    ->user('deployer')
    ->port(22)
    ->identityFile('~/sleazoids.pem')
    ->forwardAgent(true)
    ->multiplexing(true)
    ->addSshOption('UserKnownHostsFile', '/dev/null')
    ->addSshOption('StrictHostKeyChecking', 'no')
    ->set('deploy_path', '/var/www/html');

// Tasks

// サブディレクトリrelease_pathの変更
task('change_cwd', function () {
  $subdir = get('release_path') . DIRECTORY_SEPARATOR . 'src';
  writeln("サブディレクトリをリリースパスに変更 dir: $subdir");
  set('release_path', $subdir);
  run('cd {{release_path}}');
});

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
after('deploy:update_code', 'change_cwd');

// Migrate database before symlink new release.

// before('deploy:symlink', 'artisan:migrate');
