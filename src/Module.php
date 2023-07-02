<?php

namespace PinaSocialLinks;

use PinaSocialLinks\Endpoints\SocialNetworkLinkEndpoint;
use Pina\App;
use Pina\ModuleInterface;
use PinaDashboard\Dashboard;

class Module implements ModuleInterface
{
    public function __construct()
    {
    }

    public function getPath()
    {
        return __DIR__;
    }

    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    public function getTitle()
    {
        return 'Social Network Links';
    }

    public function http()
    {
        /** @var Dashboard $dashboard */
        $dashboard = App::load(Dashboard::class);
        $dashboard->register('social-network-links', SocialNetworkLinkEndpoint::class);
    }
}