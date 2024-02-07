<?php

require 'vendor/autoload.php';

use Eazybright\DesignPatternsPHP\Singleton\Database;

$db = Database::getInstance();
$db->query('SELECT * FROM TABLE `first_instance`');
$db2 = Database::getInstance();
$db->query('ALTER TABLE `second_instance` ADD type string');