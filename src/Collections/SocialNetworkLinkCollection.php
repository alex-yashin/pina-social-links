<?php

namespace PinaSocialLinks\Collections;

use PinaSocialLinks\SQL\SocialNetworkLinkGateway;
use Pina\Data\DataCollection;

class SocialNetworkLinkCollection extends DataCollection
{

    protected function makeQuery()
    {
        return SocialNetworkLinkGateway::instance();
    }

}