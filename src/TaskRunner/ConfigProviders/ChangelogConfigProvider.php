<?php

declare(strict_types=1);

namespace OpenEuropa\Changelog\TaskRunner\ConfigProviders;

use OpenEuropa\TaskRunner\Contract\ConfigProviderInterface;
use OpenEuropa\TaskRunner\Traits\ConfigFromFilesTrait;
use Robo\Config\Config;

/**
 * Provides the basic default configuration for the changelog commands.
 *
 * @priority 1500
 */
class ChangelogConfigProvider implements ConfigProviderInterface
{
    use ConfigFromFilesTrait;

    /**
     * {@inheritdoc}
     */
    public static function provide(Config $config): void
    {
        static::importFromFiles($config, [
            __DIR__ . '/../../../config/changelog.yml',
        ]);
    }
}
