<?php

namespace JesusGoku\Application;

interface TwitterAutomationApplicationInterface
{
    /**
     * @param array $config
     *
     * @return $this
     */
    public function setConfig($config = array());

    /**
     * @return array
     */
    public function getConfig();
}
