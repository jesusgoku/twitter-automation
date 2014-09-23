<?php

namespace JesusGoku\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TwitterOAuth\TwitterOAuth;

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
        $config = $this->getApplication()->getConfig();

        $settings = array(
            'consumer_key' => $config['twitter']['consumer_key'],
            'consumer_secret' => $config['twitter']['consumer_secret'],
            'oauth_token' => $config['twitter']['oauth_token'],
            'oauth_token_secret' => $config['twitter']['oauth_token_secret'],
            'output_format' => 'object',
        );

        $twitter = new TwitterOAuth($settings);

        foreach ($config['accounts'] as $account) {
            $message = $config['messages'][mt_rand(0, count($config['messages']) - 1)];
            $params = array(
                'status' => str_replace('{username}', '@' . $account, $message),
            );

            $twitter->post('statuses/update', $params);
        }

    }
}
