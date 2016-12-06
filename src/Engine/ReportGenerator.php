<?php
namespace WPTRT\CheckerCli\Engine;

use WPTRT\CheckerCli\Engine\CheckResults;

class ReportGenerator
{
    public function run( CheckResults $check_results )
    {

        return [
            'passed' => 'None',
        ];
    }
}
