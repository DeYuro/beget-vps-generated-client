<?php

require __DIR__ . '/vendor/autoload.php';


$val = getopt("l:p:");

(new \Application\Test())->run($val["l"],$val["p"]);