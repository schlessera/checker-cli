#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
require __DIR__.'/ThemeCheckCommand.php';

$application->add(new ThemeCheckCommand());

$application->run();
