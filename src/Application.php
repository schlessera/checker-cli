#!/usr/bin/env php
<?php
// application.php

require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use WPTRT\CheckerCli\Command\ThemeCheckCommand;

$application = new Application();

$application->add(new ThemeCheckCommand());

$application->run();
