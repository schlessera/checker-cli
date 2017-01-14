<?php namespace WPTRT\CheckerCli\Location;

use WPTRT\CheckerCli\Location;

class FileLocation extends Location
{

    /**
     * Path and name of the file.
     *
     * @var string
     */
    private $filepath;

    /**
     * Starting line within the file.
     *
     * @var int|null
     */
    private $lineStart;

    /**
     * Ending line within the file.
     *
     * @var int|null
     */
    private $lineEnd;

    /**
     * Instantiate a FileLocation object.
     *
     * @param string   $filepath  Path and name of the file.
     * @param int|null $lineStart Starting line within the file.
     * @param int|null $lineEnd   Ending line within the file.
     */
    public function __construct($filepath, $lineStart = null, $lineEnd = null)
    {

        $this->filepath  = $filepath;
        $this->lineStart = $lineStart;
        $this->lineEnd   = $lineEnd;
    }
}
