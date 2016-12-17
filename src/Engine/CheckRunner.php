<?php
namespace WPTRT\CheckerCli\Engine;

class CheckRunner
{
    protected $check_report;

    public function run($analysed_theme)
    {
        $this->check_report = new CheckResults($analysed_theme);

        return $this->check_report;
    }
}
