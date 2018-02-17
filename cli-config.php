<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\EntityManager;

$app = require 'bootstrap.php';

return ConsoleRunner::createHelperSet($app->getContainer()->get(EntityManager::class));

