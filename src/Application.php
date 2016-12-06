#!/usr/bin/env php
<?php
// application.php

require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

// Bootstrap
require __DIR__.'/Engine/RunnerInterface.php';

require __DIR__.'/Engine/Theme.php';
require __DIR__.'/Engine/AnalyserStack.php';
require __DIR__.'/Engine/CheckRunner.php';
require __DIR__.'/Engine/CheckResults.php';
require __DIR__.'/Engine/ReportGenerator.php';


// Register commands
require __DIR__.'/Command/ThemeCheckCommand.php';

$application->add(new WPTRT\CheckerCli\Command\ThemeCheckCommand());

$application->run();
