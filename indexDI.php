<?php

include 'vendor/autoload.php';

use DI\ContainerBuilder;

$main = function (): \Eerison\DI\MainDI
{
    $build = new ContainerBuilder();
    $build->addDefinitions('config/config.php');

    $container = $build->build();

    return $container->get('eerison.main');
};

$main()();

