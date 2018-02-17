<?php

namespace App\ServiceProvider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

class TwigProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple[Twig::class] = function ($container) {
            $view = new Twig(__DIR__ . '/../Resources/views', [
                'cache' => __DIR__ .  '/../../var/cache',
                'auto_reaload' => true,
                'debug' => true
            ]);

            // Instantiate and add Slim specific extension
            $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
            $view->addExtension(new TwigExtension($container['router'], $basePath));

            return $view;
        };
    }
}
