<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

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
        '',
    ]);
    }
}
