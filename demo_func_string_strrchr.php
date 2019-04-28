<?php
/* echo strrchr("<p>Welcome to [micro_training_calculator] WordPress. This is your first post. Edit or delete it, then start writing!</p>
<!-- /wp:paragraph -->
[micro_training_calculator]","[micro_training_calculator]"); */

$string = "<p>Welcome to [micro_training_calculator] WordPress. This is [micro_training_calculator] your first post. Edit or delete it, then start writing!</p>
<!-- /wp:paragraph -->
[micro_training_calculator]";

$substring = '[micro_training_calculator]';

$substringCount = substr_count($string, $substring);

echo $substring . " appears in " . $substringCount . ' times';
?>