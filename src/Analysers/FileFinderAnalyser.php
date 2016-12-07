<?php
namespace WPTRT\CheckerCli\Analysers;

use Symfony\Component\Finder\Finder;
use WPTRT\CheckerCli\Engine\Theme;

class FileFinderAnalyser
{
    public function handle( Theme $theme )
    {
        $finder = new Finder();
        $theme->fileFinder = $finder->files()->in($theme->path);

        return $theme;
    }
}
