<?php namespace WPTRT\CheckerCli\Exception;

use RuntimeException;

/**
 * Class InvalidRunner.
 *
 * This exception is thrown when the RunnerStack tries to instantiate an invalid Runner class.
 *
 * @package WPTRT\CheckerCli\Exception
 */
final class InvalidRunner extends RuntimeException implements CheckerCliException
{

    /**
     * Create InvalidRunner exception from a class name.
     *
     * @param string $class Class that resulted in an invalid Runner.
     *
     * @return InvalidRunner
     */
    public static function fromClass($class)
    {
        $message = sprintf(
            'Could not initialise because of invalid Runner class "%1$s".',
            $class
        );

        return new self($message);
    }
}
