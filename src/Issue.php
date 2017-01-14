<?php namespace WPTRT\CheckerCli;

/**
 * Class Issue.
 *
 * Value object that records one single issue.
 */
class Issue
{

    /**
     * Severity of the issue that was found.
     *
     * @var Severity
     */
    protected $severity;

    /**
     * Detailed message describing the issue.
     *
     * @var Message
     */
    protected $message;

    /**
     * Location of where the issue was detected.
     *
     * @var Location
     */
    protected $location;

    /**
     * Instantiate an Issue object.
     *
     * @param Severity $severity Severity of the issue that was found.
     * @param Message  $message  Detailed message describing the issue.
     * @param Location $location Location of where the issue was detected.
     */
    public function __construct(Severity $severity, Message $message, Location $location)
    {
        $this->severity = $severity;
        $this->message  = $message;
        $this->location = $location;
    }

    /**
     * Get value of Message.
     *
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get value of Severity.
     *
     * @return Severity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Get value of Location.
     *
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }
}
