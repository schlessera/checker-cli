<?php
namespace WPTRT\CheckerCli\Engine;

class AnalyserStack
{
    private $theme;

    public function __construct($theme)
    {
        $this->theme = $theme;
    }

    public function run()
    {
        return $this->theme;
    }
}
