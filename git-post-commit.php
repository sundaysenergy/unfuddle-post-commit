<?php
ignore_user_abort(1);

$pull = exec('/usr/bin/git pull');
if (!$pull || !is_string($pull)) {
  $pull = 'NO GIT Response';
}
$pull .= exec('/usr/bin/git submodule update');

print $pull;

?>
