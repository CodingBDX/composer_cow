<?php

require '../vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$speak = $bessie->say();
$tongue = $bessie->setTongue('U');
echo $speak;

// or just echo the object for direct output
echo $tongue;
