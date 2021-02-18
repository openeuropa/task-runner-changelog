<?php

declare(strict_types=1);

namespace OpenEuropa\TaskRunner\Tests;

use OpenEuropa\Changelog\TaskRunner\Commands\ChangelogCommands;
use OpenEuropa\Changelog\Tests\HelperTestTrait;
use OpenEuropa\TaskRunner\TaskRunner;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\NullOutput;

/**
 * Tests changelog commands.
 */
class ChangelogCommandTest extends AbstractTest
{
    use HelperTestTrait;

    /**
     * @param array $options
     * @param string $expected
     *
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     *
     * @dataProvider changelogDataProvider
     */
    public function testChangelogCommands(array $options, $expected): void
    {
        $runner = new TaskRunner(new StringInput(''), new NullOutput(), $this->getClassLoader());
        /** @var \OpenEuropa\Changelog\TaskRunner\Commands\ChangelogCommands $commands */
        $commands = $runner->getCommands(ChangelogCommands::class);
        $this->assertSame($expected, $commands->generateChangelog($options)->getCommand());
    }

    /**
     * @return array
     */
    public function changelogDataProvider(): array
    {
        return $this->getFixtureContent('changelog.yml');
    }
}
