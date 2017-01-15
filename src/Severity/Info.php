<?php namespace WPTRT\CheckerCli\Severity;

use WPTRT\CheckerCli\Severity;

class Info extends Severity
{

    public function __toString()
    {
        return '<info>INFO</info>';
    }
}
