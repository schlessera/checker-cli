# checker-cli

## Overview

A command line tool to perform various checks on WordPress themes. Currently the command does nothing but return a standard comment.

To run the check:
- Clone the repository to your local: `git clone git@github.com:fklein-lu/checker-cli.git`.
- Step into the `checker-cli` directory.
- Run `composer install`.
- Run `php src/Application.php theme-check <theme-folder>` to run the check.

## Technical details

This tool should be independent of WordPress. The PSR-2 Coding Standard is used.

This is the architecture overview:

![WPTRT Architecture Overview](http://wpbestpractices.com/content/uploads/2016/12/WPTRT-Theme-Check.png)
