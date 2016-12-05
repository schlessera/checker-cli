#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

// Bootstrap
require __DIR__.'/Engine/Theme.php';
require __DIR__.'/Engine/AnalyserStack.php';

// ... register commands
require __DIR__.'/Command/ThemeCheckCommand.php';



$application->add(new WPTRT\CheckerCli\Command\ThemeCheckCommand());

$application->run();
