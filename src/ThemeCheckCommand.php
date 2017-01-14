<?php
namespace WPTRT\CheckerCli;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Stopwatch\Stopwatch;

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
        $stopwatch = new Stopwatch();
        $stopwatch->start('Theme Check');

        $pipeline = [
            AnalyserStack::class   => [
                Analyser\FakeDemoAnalyser::class,
            ],
            CheckRunner::class     => [
                Check\FakeDemoCheck::class,
            ],
            ReportGenerator::class => $output,
        ];

        $theme = new Theme($input->getArgument('path'));

        foreach ($pipeline as $runnerClass => $stack) {
            $stopwatch->openSection();

            $runner = new $runnerClass($stack);

            if ( ! $runner instanceof RunnerInterface) {
                throw Exception\InvalidRunner::fromClass($runnerClass);
            }

            $theme = $runner->run($theme);

            $stopwatch->stopSection($runnerClass);
        }

        $event = $stopwatch->stop('Theme Check');
        $output->writeln(
            sprintf(
                'Executed theme check in %s seconds, using %s memory.',
                $event->getDuration(),
                $event->getMemory()
            )
        );
    }
}
