<?php namespace WPTRT\CheckerCli;

class AnalyserStack implements RunnerInterface
{

    /**
     * Array of class names that define the stack.
     *
     * @var string[]
     */
    private $stack;

    /**
     * Instantiate an AnalyserStack object.
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
        foreach ($this->stack as $analyserClass) {
            $analyser = new $analyserClass();

            if ( ! $analyser instanceof Analyser) {
                throw Exception\InvalidAnalyser::fromClass($analyserClass);
            }

            $theme = $analyser->analyse($theme);
        }

        return $theme;
    }
}
