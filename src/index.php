<?php
require_once '../vendor/autoload.php';

use app\Numbers\Numbers;

$appNumbers = new Numbers(1, 100);
$appNumbers->print();