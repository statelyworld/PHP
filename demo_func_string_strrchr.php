<?php
/* echo strrchr("<p>Welcome to [calculator] WordPress. This is your first post. Edit or delete it, then start writing!</p>
<!-- /wp:paragraph -->
[calculator]","[calculator]"); */

$string = "<p>Welcome to [micro_training_calculator] WordPress. This is [calculator] your first post. Edit or delete it, then start writing!</p>
<!-- /wp:paragraph -->
[calculator]";

$substring = '[calculator]';

$substringCount = substr_count($string, $substring);

echo $substring . " appears in " . $substringCount . ' times';
?>
