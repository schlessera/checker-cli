<?php
namespace WPTRT\CheckerCli\Engine;

class Theme
{
    /**
     * Absolute path to the theme folder.
     *
     * @var string
     */
    public $path;

    /**
     * Instance of Symonfy's Finder Component.
     *
     * @var
     */
    public $fileFinder;
}
