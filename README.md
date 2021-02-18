# Changelog generator for OpenEuropa Taskrunner

[![Build Status](https://drone.fpfis.eu/api/badges/openeuropa/task-runner-changelog/status.svg)](https://drone.fpfis.eu/openeuropa/task-runner-changelog)
[![Packagist](https://img.shields.io/packagist/v/openeuropa/task-runner-changelog.svg)](https://packagist.org/packages/openeuropa/task-runner-changelog)

[Task Runner](https://github.com/openeuropa/task-runner) commands for generating and handling the changelog.

This is a CLI command that generates a changelog using the [OpenEuropa
Taskrunner](https://github.com/openeuropa/task-runner). It wraps the
[github-changelog-generator](https://github.com/github-changelog-generator/github-changelog-generator)
project.

This generates changelogs for projects that:
1. Are publicly hosted on GitHub.
1. Use GitHub issues and pull requests to manage development.
1. Publish releases on GitHub.

## Requirements

- [Composer](https://getcomposer.org/download/)
- [Docker](https://www.docker.com/get-docker)
- A [Github access token](https://docs.github.com/en/github/authenticating-to-github/creating-a-personal-access-token)

## Installation

Add the project as a composer dependency inside the project for which to
generate changelogs:

```sh
$ composer require openeuropa/task-runner-changelog
```

## Usage

A GitHub Access token is required. It is advised to create a new token to use
exclusively for this command.

The following examples will generate a changelog in the file `CHANGELOG.md`
which will be placed in the project root folder.

```bash
# Generate a changelog for an unreleased development version.
$ ./vendor/bin/run changelog:generate --token=TOKEN
```

```bash
# Generate a changelog for an upcoming 1.2.3 release.
$ ./vendor/bin/run changelog:generate --token=TOKEN --tag=1.2.3
```

For more information and additonal options see the built-in help:

```bash
$ ./vendor/bin/run changelog:generate --help
```

## Development

Read the [Task Runner](https://github.com/openeuropa/task-runner) documentation: https://github.com/openeuropa/task-runner/blob/master/README.md
