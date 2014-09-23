<?php

namespace JesusGoku\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PostRandomTwitterCommand extends Command
{
    protected function configure()
    {
        $this
          ->setName('twitter:random')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
