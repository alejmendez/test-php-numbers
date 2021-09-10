<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';

use app\Numbers\Numbers;

$appNumbers = new Numbers(1, 100);
$appNumbers->print();