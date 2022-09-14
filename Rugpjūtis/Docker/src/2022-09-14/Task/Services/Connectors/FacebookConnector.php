<?php

namespace Connectors;

class FacebookConnector
{
    function __construct(private string $facebookAppName, private string $facebookAppKey)
    {
        $this->setAppName($facebookAppName);
        $this->setAppKey($facebookAppKey);
    }

    public function setAppName(string $facebookAppName): void
    {
        $this->appName = $facebookAppName;
    }

    public function setAppKey(string $facebookAppKey): void
    {
        $this->appKey = $facebookAppKey;
    }
}