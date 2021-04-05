<?php

require 'Singleton.php';

$instance = Singleton::getInstacnce();
$instance2 = Singleton::getInstacnce();

var_dump($instance === $instance2);
var_dump($instance, $instance2);
