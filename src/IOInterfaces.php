<?php namespace WPTRT\CheckerCli;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class IOInterfaces
{

    /**
     * Console input interface.
     *
     * @var InputInterface
     */
    private $input;

    /**
     * Console output interface.
     *
     * @var OutputInterface
     */
    private $output;

    public function __construct(InputInterface $input, OutputInterface $output)
    {
        $this->input  = $input;
        $this->output = $output;
    }

    /**
     * Get the input interface.
     *
     * @return InputInterface
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Get the output interface.
     *
     * @return OutputInterface
     */
    public function getOutput()
    {
        return $this->output;
    }
}
