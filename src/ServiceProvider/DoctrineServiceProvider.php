<?php

namespace App\ServiceProvider;

use Doctrine\Common\Cache\FilesystemCache;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class DoctrineServiceProvider implements ServiceProviderInterface
{
    
    public function register(Container $pimple)
    {
        $config = Setup::createAnnotationMetadataConfiguration(
            [__DIR__ . '/../Domain/Model'],
            true,
            __DIR__ . '/../../var/proxy',
            new FilesystemCache(__DIR__ . '/../../var/cache'),
            false
        );
        
        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../var/db.sqlite'
        ];
        
        $pimple[EntityManager::class] = EntityManager::create($connection, $config);
    }
}
