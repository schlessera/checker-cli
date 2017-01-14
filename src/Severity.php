<?php namespace WPTRT\CheckerCli;

/**
 * Class Severity.
 *
 * Represents the severity and impact of a specific issue.
 */
class Severity
{

    /**
     * Create a new error.
     *
     * @return Severity\Error
     */
    public static function error()
    {
        return new Severity\Error();
    }

    /**
     * Create a new warning.
     *
     * @return Severity\Warning
     */
    public static function warning()
    {
        return new Severity\Warning();
    }

    /**
     * Create a new info.
     *
     * @return Severity\Info
     */
    public static function info()
    {
        return new Severity\Info();
    }
}
