<?php
date_default_timezone_set('Asia/Jakarta');
ignore_user_abort(true);
set_time_limit(0);

$repo          = '~/grav/user';
$branch        = 'master';
$output        = array();

// update github Repo
$output[] = date('Y-m-d, H:i:s', time()) . "\n";
$output[] = "GitHub Pull\n============================\n" . shell_exec('cd '.$repo.' && git pull origin '.$branch);

// redirect output to logs
file_put_contents(rtrim(getcwd(), '/').'/logs/grav.log', implode("\n", $output) . "\n----------------------------\n", FILE_APPEND);
