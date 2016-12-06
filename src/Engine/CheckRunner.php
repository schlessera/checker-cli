<?php
namespace WPTRT\CheckerCli\Engine;

use WPTRT\CheckerCli\Engine\Theme;
use WPTRT\CheckerCli\Engine\RunnerInterface;

class CheckRunner implements RunnerInterface {
    protected $analysed_theme;
    protected $check_report;

    public function __construct( Theme $analysed_theme)
    {
        $this->analysed_theme = $analysed_theme;
    }

    public function run()
    {
        $this->check_report = new CheckResults;

        return $this->check_report;
    }
}
