<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;
$man = new Hello();
echo $man->talk();
echo "<br>";
$girl = new SayHello();
echo $girl->world();