<?php namespace WPTRT\CheckerCli;

/**
 * Class Message.
 *
 * A detailed message describing a specific issue.
 */
class Message
{

    /**
     * Text of the message.
     *
     * @var string
     */
    protected $text;

    /**
     * Instantiate a Message object.
     *
     * @param string $text Text of the message.
     */
    public function __construct($text)
    {
        $this->text = $this->validate($text);
    }

    /**
     * Get the text of the message.
     *
     * @return string Text of the message.
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Validate the text of the message.
     *
     * @param string $text Text to validate.
     *
     * @return string Validated text.
     */
    protected function validate($text)
    {
        return trim($text);
    }

    public function __toString()
    {
        return (string)$this->text;
    }
}
