<?php namespace WPTRT\CheckerCli;

use Symfony\Component\Console\Style\SymfonyStyle;

class ReportGenerator implements RunnerInterface
{

    /**
     * Console input/output interface.
     *
     * @var SymfonyStyle
     */
    protected $io;

    /**
     * Instantiate a ReportGenerator object.
     *
     * @param IOInterfaces $interfaces Input and Output interfaces to use.
     */
    public function __construct(IOInterfaces $interfaces)
    {
        $this->io = new SymfonyStyle($interfaces->getInput(), $interfaces->getOutput());

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
        $this->renderIntro($theme);
        $this->renderBody($theme);
        $this->renderConclusion($theme);

        return $theme;
    }

    /**
     * Render the report intro.
     *
     * @param Theme $theme Theme to render the intro for.
     */
    protected function renderIntro(Theme $theme)
    {
        $this->io->title(
            sprintf(
                'Report for theme "%1$s"',
                $theme->getProperty(Property::HEADER_THEME_NAME)
            )
        );
    }

    /**
     * Render the report body.
     *
     * @param Theme $theme Theme to render the body for.
     */
    protected function renderBody(Theme $theme)
    {
        $this->io->section('Checking for issues...');
        $this->io->listing($theme->getIssues());
    }

    /**
     * Render the report conclusion.
     *
     * @param Theme $theme Theme to render the conclusion for.
     */
    protected function renderConclusion(Theme $theme)
    {
        $this->io->note(
            sprintf(
                'Found %d issue(s).',
                count($theme->getIssues())
            )
        );
    }
}
