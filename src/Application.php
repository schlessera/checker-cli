#!/usr/bin/env php
<?php
// application.php

require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new WPTRT\CheckerCli\Command\ThemeCheckCommand());

$application->run();
