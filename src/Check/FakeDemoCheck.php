<?php namespace WPTRT\CheckerCli\Check;

use WPTRT\CheckerCli\Check;
use WPTRT\CheckerCli\Issue;
use WPTRT\CheckerCli\Location;
use WPTRT\CheckerCli\Message;
use WPTRT\CheckerCli\Severity;
use WPTRT\CheckerCli\Theme;

class FakeDemoCheck implements Check
{

    /**
     * Execute a check.
     *
     * @param Theme $theme Theme to check.
     *
     * @return Theme Checked theme.
     */
    public function check(Theme $theme)
    {
        $theme->addIssue(
            new Issue(
                Severity::error(),
                new Message('This is a demo error issue.'),
                Location::fromFile('testfile.nonsense', 5, 10)
            )
        );

        return $theme;
    }
}
