<?php
namespace WPTRT\CheckerCli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use WPTRT\CheckerCli\Engine\Theme;
use WPTRT\CheckerCli\Engine\AnalyserStack;


class ThemeCheckCommand extends Command
{
    protected function configure()
    {
        $this->setName('theme-check');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln([
        'ThemeCheck',
        '==========',
	]);

		// Create object for holding all information about the theme.
		$theme = new Theme;

		// Extract information from the theme files, and add to object.
		$analyser = new AnalyserStack( $theme );
		$analysed_theme = $analyser->process();

		// Create check runner.

		// Run checks.

		// Interpret results

		// Output results.

    }
}
