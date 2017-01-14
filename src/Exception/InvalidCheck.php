<?php namespace WPTRT\CheckerCli\Exception;

use RuntimeException;

/**
 * Class InvalidCheck.
 *
 * This exception is thrown when the CheckRunner tries to instantiate an invalid Check class.
 *
 * @package WPTRT\CheckerCli\Exception
 */
final class InvalidCheck extends RuntimeException implements CheckerCliException
{

    /**
     * Create InvalidCheck exception from a class name.
     *
     * @param string $class Class that resulted in an invalid Check.
     *
     * @return InvalidCheck
     */
    public static function fromClass($class)
    {
        $message = sprintf(
            'Could not initialise because of invalid Check class "%1$s".',
            $class
        );

        return new self($message);
    }
}
