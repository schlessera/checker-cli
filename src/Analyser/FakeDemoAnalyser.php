<?php namespace WPTRT\CheckerCli\Analyser;

use WPTRT\CheckerCli\Analyser;
use WPTRT\CheckerCli\Property;
use WPTRT\CheckerCli\Theme;

class FakeDemoAnalyser implements Analyser
{

    /**
     * Handle a single analysis step.
     *
     * @param Theme $theme Theme to analyse.
     *
     * @return Theme Analysed theme.
     */
    public function analyse(Theme $theme)
    {
        $theme->setProperty(Property::HEADER_THEME_NAME, 'Test Theme')
              ->setProperty(Property::HEADER_AUTHOR, 'Testy McTest');

        return $theme;
    }
}
