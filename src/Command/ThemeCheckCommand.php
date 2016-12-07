<?php
namespace WPTRT\CheckerCli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use WPTRT\CheckerCli\Engine\ReportGenerator;
use WPTRT\CheckerCli\Engine\Theme;
use WPTRT\CheckerCli\Engine\AnalyserStack;
use WPTRT\CheckerCli\Engine\CheckRunner;

class ThemeCheckCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('theme-check')
            ->addArgument('path', InputArgument::REQUIRED, 'Path to the theme folder.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'ThemeCheck',
            '==========',
        ]);

        // Create object for holding all information about the theme.
        $theme = new Theme;

        // Set theme path
        $theme->path = $input->getArgument('path');

        // Extract information from the theme files, and add to object.
        $analyser = new AnalyserStack($theme);
        $analysed_theme = $analyser->run();

        // Create check runner.
        $check_runner = new CheckRunner();

        // Run checks.
        $check_results = $check_runner->run($analysed_theme);

        // Interpret results
        $report_generator = new ReportGenerator();

        $report = $report_generator->run($check_results);

        // Output results.
        foreach ($report as $key => $value) {
            $output->writeln([
                $key,
                $value,
            ]);
        }
    }
}
