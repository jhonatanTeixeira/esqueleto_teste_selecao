<?php

$app = require '../bootstrap.php';

$app->get('/', \App\Action\HelloAction::class);

$app->run();