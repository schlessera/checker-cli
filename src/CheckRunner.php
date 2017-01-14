<?php namespace WPTRT\CheckerCli;

class CheckRunner implements RunnerInterface
{

    /**
     * Array of class names that define the stack.
     *
     * @var string[]
     */
    private $stack;

    /**
     * Instantiate a CheckRunner object.
     *
     * @param string[] $stack Array of class names that define the stack.
     */
    public function __construct(array $stack = [])
    {
        $this->stack = (array)$stack;
    }

    /**
     * Process a theme with the current runner.
     *
     * @param Theme $theme Theme to process.
     *
     * @return Theme Processed theme.
     */
    public function run(Theme $theme)
    {
        foreach ($this->stack as $checkClass) {
            $check = new $checkClass();

            if ( ! $check instanceof Check) {
                throw Exception\InvalidCheck::fromClass($checkClass);
            }

            $theme = $check->check($theme);
        }

        return $theme;
    }
}
