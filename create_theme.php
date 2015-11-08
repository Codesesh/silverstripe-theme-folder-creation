#!/usr/bin/env php
<?php

echo "What is the name of your theme? ";
$handle = fopen('php://stdin', 'r');
$themeName = fgets($handle);

$themeName = trim($themeName);

mkdir(getcwd()."/$themeName/js/", 0777, true);
mkdir(getcwd()."/$themeName/css/", 0777, true);
mkdir(getcwd()."/$themeName/images/", 0777, true);
mkdir(getcwd()."/$themeName/templates/Includes", 0777, true);
mkdir(getcwd()."/$themeName/templates/Layout", 0777, true);





