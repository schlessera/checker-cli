<?php
namespace WPTRT\CheckCli\Engine;

use WPTRT\CheckCli\Engine\CheckResults;

class ReportGenerator
{
    public function run( CheckResults $check_results )
    {

        return [
            'passed' => 'None',
        ];
    }
}
