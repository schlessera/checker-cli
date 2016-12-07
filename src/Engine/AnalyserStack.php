<?php
namespace WPTRT\CheckerCli\Engine;

use WPTRT\CheckerCli\Analysers\FileFinderAnalyser;

class AnalyserStack
{
	private $theme;

	public function __construct( $theme )
	{
		$this->theme = $theme;
	}

	public function run()
	{
	    // @todo: Replace the manual chaining with the AnalyserStack.
	    $fileFinder = new FileFinderAnalyser();
	    $this->theme = $fileFinder->handle( $this->theme );

	    return $this->theme;
	}
}
