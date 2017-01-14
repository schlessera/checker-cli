<?php namespace WPTRT\CheckerCli\Exception;

use RuntimeException;

/**
 * Class InvalidAnalyser.
 *
 * This exception is thrown when the AnalyserStack tries to instantiate an invalid Analyser class.
 *
 * @package WPTRT\CheckerCli\Exception
 */
final class InvalidAnalyser extends RuntimeException implements CheckerCliException
{

    /**
     * Create InvalidAnalyser exception from a class name.
     *
     * @param string $class Class that resulted in an invalid Analyser.
     *
     * @return InvalidAnalyser
     */
    public static function fromClass($class)
    {
        $message = sprintf(
            'Could not initialise because of invalid Analyser class "%1$s".',
            $class
        );

        return new self($message);
    }
}
