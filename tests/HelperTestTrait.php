<?php

declare(strict_types=1);

namespace OpenEuropa\Changelog\Tests;

use Composer\Autoload\ClassLoader;
use Symfony\Component\Yaml\Yaml;

/**
 * Helper test methods.
 *
 * These parent methods cannot be inherited, as they use __DIR__, which is the
 * PHP file directory. But when openeuropa/task-runner is a dependency, under
 * vendor/, the paths are no more correct.
 *
 * @todo Fix the the parent method to be inheritable and drop this trait.
 * @see https://github.com/openeuropa/task-runner/issues/149
 */
trait HelperTestTrait
{
    /**
     * {@inheritdoc}
     */
    protected function getFixtureContent($filepath): array
    {
        return Yaml::parse(file_get_contents(__DIR__ . "/fixtures/{$filepath}"));
    }

    /**
     * {@inheritdoc}
     */
    protected function getClassLoader(): ClassLoader
    {
        return require __DIR__ . '/../vendor/autoload.php';
    }

    /**
     * {@inheritdoc}
     */
    protected function getSandboxRoot(): string
    {
        return __DIR__ . "/sandbox";
    }
}
