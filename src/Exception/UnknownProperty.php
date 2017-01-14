<?php namespace WPTRT\CheckerCli\Exception;

use RuntimeException;

/**
 * Class UnknownProperty.
 *
 * This exception is thrown when the RunnerStack tries to instantiate an invalid Runner class.
 *
 * @package WPTRT\CheckerCli\Exception
 */
final class UnknownProperty extends RuntimeException implements CheckerCliException
{

    /**
     * Create UnknownProperty exception from a property name.
     *
     * @param string $property Property that was not found.
     *
     * @return UnknownProperty
     */
    public static function fromProperty($property)
    {
        $message = sprintf(
            'Could not find requested property "%1$s".',
            $property
        );

        return new self($message);
    }
}
