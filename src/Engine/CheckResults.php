<?php
namespace WPTRT\CheckerCli\Engine;

class CheckResults
{
    private $analysed_theme;

    public function __construct($analysed_theme) {
        $this->analysed_theme = $analysed_theme;
    }

    public function phpcs()
    {
        $values['files']       = $this->analysed_theme->path;
        $values['reportWidth'] = '9999';
        $values['standard']    = 'WordPress-Theme';
        $phpcs_cli = new \PHP_CodeSniffer_CLI();
        ob_start();
        $phpcs_cli->process( $values );
        return ob_get_clean();
    }
}
