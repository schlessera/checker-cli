<?php namespace WPTRT\CheckerCli;

use Symfony\Component\Console\Output\OutputInterface;

class ReportGenerator implements RunnerInterface
{

    /**
     * Console output interface.
     *
     * @var OutputInterface
     */
    private $output;

    /**
     * Instantiate a ReportGenerator object.
     *
     * @param OutputInterface $output
     */
    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    /**
     * Process a theme with the current runner.
     *
     * @param Theme $theme Theme to process.
     *
     * @return Theme Processed theme.
     */
    public function run(Theme $theme)
    {
        foreach( $theme->getIssues() as $issue  ) {
            $this->output->writeln(
                $issue->getMessage()
            );
        }
    }
}
