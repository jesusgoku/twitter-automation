<?php

namespace JesusGoku\Application;

use Symfony\Component\Console\Application;

class TwitterAutomationApplication
    extends Application
    implements TwitterAutomationApplicationInterface
{
    /** @var array $config */
    private $config;

    /**
     * @param string $name
     * @param string $version
     * @param array  $config
     */
    public function __construct($name = 'UNKNOWN', $version = 'UNKNOWN', $config = array())
    {
      parent::__construct($name, $version);

      $this->config = $config;
    }

    /**
     * @inheritdoc
     */
    public function setConfig($config = array())
    {
        $this->config = $config;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getConfig()
    {
        return $this->config;
    }
}
