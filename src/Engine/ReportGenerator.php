<?php
namespace WPTRT\CheckerCli\Engine;

use WPTRT\CheckerCli\Engine\CheckResults;

class ReportGenerator
{
    public function run(CheckResults $check_results)
    {

        return [
            'phpcs'  => $check_results->phpcs(),
            'memory' => round((memory_get_peak_usage(true) / (1024 * 1024)), 2).'Mb',
        ];
    }
}
