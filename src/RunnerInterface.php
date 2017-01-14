<?php namespace WPTRT\CheckerCli;

interface RunnerInterface
{

    /**
     * Process a theme with the current runner.
     *
     * @param Theme $theme Theme to process.
     *
     * @return Theme Processed theme.
     */
    public function run(Theme $theme);
}
