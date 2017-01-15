<?php namespace WPTRT\CheckerCli\Severity;

use WPTRT\CheckerCli\Severity;

class Error extends Severity
{

    public function __toString()
    {
        return '<error>ERROR</error>';
    }
}
