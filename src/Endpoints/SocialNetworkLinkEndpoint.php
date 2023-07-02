<?php

namespace PinaSocialLinks\Endpoints;

use PinaSocialLinks\Collections\SocialNetworkLinkCollection;
use Pina\App;
use Pina\Http\DelegatedCollectionEndpoint;
use Pina\Http\Request;

use function Pina\__;

class SocialNetworkLinkEndpoint extends DelegatedCollectionEndpoint
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->composer->configure(__('Ссылки на социальные сети'), __('Добавить ссылку на социальную сеть'));
        $this->collection = App::make(SocialNetworkLinkCollection::class);
    }

}