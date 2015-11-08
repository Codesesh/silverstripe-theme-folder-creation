#!/usr/bin/env php
<?php
$name = 'kp';
echo getcwd();
mkdir(getcwd()."/$name/js/", 0777, true);
mkdir(getcwd()."/$name/css/", 0777, true);
mkdir(getcwd()."/$name/images/", 0777, true);
mkdir(getcwd()."/$name/templates/Includes", 0777, true);
mkdir(getcwd()."/$name/templates/Layout", 0777, true);

// echo $currentFolder;

// echo "What is the name of your theme?:";
// $themeName = fgets(STDIN);
// echo 'Theme Name: ' .$themeName;

// mkdir($currentFolder.$themeName);




