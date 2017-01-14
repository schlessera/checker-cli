<?php namespace WPTRT\CheckerCli;

/**
 * This is the bootstrap file, which makes sure that everything is properly set up and then launches the application
 * lifecycle.
 */

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

use Symfony\Component\Console\Application;

$application = new Application();

$themeCheckCommand = new ThemeCheckCommand();
$application->add($themeCheckCommand);
$application->setDefaultCommand($themeCheckCommand->getName(), true);

$application->run();
