<?php

namespace App\ServiceProvider;

use App\Action\HelloAction;
use Doctrine\ORM\EntityManager;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Slim\Views\Twig;

class ActionServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple[HelloAction::class] = function ($container) {
            return new HelloAction($container[EntityManager::class], $container[Twig::class]);
        };
    }
}
