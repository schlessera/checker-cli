<?php namespace WPTRT\CheckerCli;

/**
 * Class Location.
 *
 * Represents the location where a specific issue has been found.
 */
class Location
{

    /**
     * Create a new location object from a file.
     *
     * @param string   $filepath  Path and name of the file.
     * @param int|null $lineStart Optional. Starting line.
     * @param int|null $lineEnd   Optional. Ending line.
     *
     * @return Location
     */
    public static function fromFile($filepath, $lineStart = null, $lineEnd = null)
    {
        return new Location\FileLocation($filepath, $lineStart, $lineEnd);
    }
}
