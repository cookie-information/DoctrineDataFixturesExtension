<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2016-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace BehatExtension\DoctrineDataFixturesExtension\Bundle;

use Symfony\Component\DependencyInjection\Alias;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

final class BehatDoctrineDataFixturesExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->setAlias('doctrine.fixtures.loader.alias', new Alias('doctrine.fixtures.loader', true));
    }

    public function getAlias(): string
    {
        return 'behat_doctrine_data_fixtures_extension';
    }
}
