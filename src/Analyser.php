<?php namespace WPTRT\CheckerCli;

/**
 * Interface Analyser.
 *
 * Represents a single analysis step.
 */
interface Analyser
{

    /**
     * Handle a single analysis step.
     *
     * @param Theme $theme Theme to analyse.
     *
     * @return Theme Analysed theme.
     */
    public function analyse(Theme $theme);
}
