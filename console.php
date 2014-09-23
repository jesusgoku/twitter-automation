#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use JesusGoku\Application\TwitterAutomationApplication as Application;
use JesusGoku\Command;

$config = Yaml::parse(__DIR__ . '/config/config.yml');

$app = new Application('Twitter Automation', 'v0.1', $config);

$app->add(new Command\PostRandomTwitterCommand());

$app->run();
