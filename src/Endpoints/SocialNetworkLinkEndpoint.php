<?php

namespace PinaSocialLinks\Endpoints;

use PinaSocialLinks\Collections\SocialNetworkLinkCollection;
use Pina\App;
use Pina\Http\DelegatedCollectionEndpoint;
use Pina\Http\Request;

class SocialNetworkLinkEndpoint extends DelegatedCollectionEndpoint
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->composer->configure('Social network links', "Create social network link");
        $this->collection = App::make(SocialNetworkLinkCollection::class);
    }

}