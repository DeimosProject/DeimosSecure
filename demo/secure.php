<?php

/**
 * @var $loader \Composer\Autoload\ClassLoader
 */
require dirname(__DIR__) . '/vendor/autoload.php';

$secure = new \Deimos\Secure\Secure();

// secure
$secure->iv('_gPuZWJ/Tm^1!y4d');
$secure->secret('MTNE]8Gpz&B709%yXDQ1[4.k!#\';n}Pu-hvU&mK{?dlSoxg:s/qab"C@FV6HR,*t');

$storage = $secure->encrypt('Hello World');

var_dump($storage, $secure->decrypt($storage));