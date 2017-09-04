<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/../app/config/dev.php'; //config for prod, for dev: dev.php
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';

$app->run();