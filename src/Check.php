<?php namespace WPTRT\CheckerCli;

/**
 * Interface Check.
 *
 * This is a single check that is executed against the analysed theme.
 */
interface Check
{

    /**
     * Execute a check.
     *
     * @param Theme $theme Theme to check.
     *
     * @return Theme Checked theme.
     */
    public function check(Theme $theme);
}
