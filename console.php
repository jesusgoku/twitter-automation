#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use JesusGoku\Application\TwitterAutomationApplication as Application;
use JesusGoku\Command;

$app = new Application('Twitter Automation', 'v0.1');

$app->add(new Command\PostRandomTwitterCommand());

$app->run();

