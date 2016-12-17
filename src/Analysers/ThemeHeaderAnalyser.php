<?php
namespace WPTRT\CheckerCli\Analysers;

use WPTRT\CheckerCli\Engine\AnalyserInterface;
use WPTRT\CheckerCli\Engine\Theme;

class ThemeHeaderAnalyser implements AnalyserInterface
{

    private $file_headers = array(
        'name'        => 'Theme Name',
        'theme_uri'   => 'Theme URI',
        'description' => 'Description',
        'author'      => 'Author',
        'author_uri'  => 'Author URI',
        'version'     => 'Version',
        'template'    => 'Template',
        'status'      => 'Status',
        'tags'        => 'Tags',
        'text_domain' => 'Text Domain',
        'domain_path' => 'Domain Path',
    );

    public function getStylesheet(Theme $theme)
    {
        return $theme->path . '/style.css';
    }

    public function getHeader(Theme $theme)
    {
        foreach ($theme->fileFinder as $file) {
            if ('style.css' === $file->getRelativePathname()) {
                $contents = $file->getContents();
                if (strlen($contents) > 8192) {
                    $contents = substr($contents, 0, 8192);
                }
                $contents = str_replace("\r", "\n", $contents);
                foreach ($this->file_headers as $field => $header) {
                    if (preg_match('/^[ \t\/*#@]*' . preg_quote($header, '/') . ':(.*)$/mi', $contents, $match)
                        && $match[1]) {
                        $this->file_headers[ $field ] = $this->cleanHeaderComment($match[1]);
                    } else {
                        $this->file_headers[ $field ] = '';
                    }
                }
                // Reduce memory.
                unset($contents);
            }
        }

        $theme->ThemeHeader = $this->file_headers;
        return $theme;
    }

    private function cleanHeaderComment($content)
    {
        return trim(preg_replace("/\s*(?:\*\/|\?>).*/", '', $content));
    }
}
