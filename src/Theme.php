<?php namespace WPTRT\CheckerCli;

use Symfony\Component\Finder\Finder;

class Theme
{

    /**
     * Absolute path to the theme folder.
     *
     * @var string
     */
    private $path;

    /**
     * Instance of Symfony's Finder Component.
     *
     * @var Finder
     */
    private $fileFinder;

    /**
     * Array of properties that have been added by analysis.
     *
     * @var array
     */
    private $properties;

    /**
     * Array of issues that have been identified.
     *
     * @var Issue[]
     */
    private $issues;

    /**
     * Instantiate a Theme object.
     *
     * @param string $path Path to the theme root folder.
     */
    public function __construct($path)
    {
        $this->path       = $path;
        $this->filefinder = (new Finder())->files()->in($path);
    }

    /**
     * Get value of Path.
     *
     * @return string
     */

    public function getPath()
    {
        return $this->path;
    }

    /**
     * Get value of FileFinder.
     *
     * @return Finder|null
     */

    public function getFileFinder()
    {
        return $this->fileFinder;
    }

    /**
     * Add a new issue to the list of detected issues.
     *
     * @param Issue $issue Issue to add.
     */
    public function addIssue(Issue $issue)
    {
        $this->issues[] = $issue;
    }

    /**
     * Get all detected issues.
     *
     * @return Issue[]
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Set a given property to a new value.
     *
     * @param string $name  Name of the property to set.
     * @param mixed  $value New value of the property.
     *
     * @return self
     */
    public function setProperty($name, $value)
    {
        $this->properties[$name] = $value;

        return $this;
    }

    /**
     * Get the value of a specific property.
     *
     * @param string $name Property to get the value of.
     *
     * @return mixed Value of the requested property.
     * @throws Exception\UnknownProperty If the property does not exist.
     */
    public function getProperty($name)
    {
        if ( ! $this->hasProperty($name)) {
            throw Exception\UnknownProperty::fromProperty($name);
        }

        return $this->properties[$name];
    }

    /**
     * Check whether a property exists.
     *
     * @param string $name Name of the property to check.
     *
     * @return bool Whether the property exists.
     */
    public function hasProperty($name)
    {
        return array_key_exists($name, $this->properties);
    }
}
