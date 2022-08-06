<?php

namespace Firebase\Bundle\CloudMessagingBundle;

use Firebase\Bundle\CloudMessagingBundle\DependencyInjection\CloudMessagingExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CloudMessagingBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new CloudMessagingExtension();
    }
}
