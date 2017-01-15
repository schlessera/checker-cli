<?php namespace WPTRT\CheckerCli\Severity;

use WPTRT\CheckerCli\Severity;

class Warning extends Severity
{

    public function __toString()
    {
        return '<comment>WARNING</comment>';
    }
}
