<?php

namespace PinaSocialLinks\Widgets;


use PinaSocialLinks\SQL\SocialNetworkLinkGateway;
use Pina\App;
use Pina\Controls\Control;
use Pina\Controls\Nav;
use Pina\Html;
use Pina\Model\LinkedItem;

class SocialLinks extends Control
{

    protected function draw()
    {
        $links = SocialNetworkLinkGateway::instance()->whereBy('enabled', 'Y')->get();

        if (empty($links)) {
            return '';
        }

        /** @var Nav $nav */
        $nav = App::make(Nav::class);
        $nav->addClass('nav bar');
        foreach ($links as $link) {
            $nav->add(new LinkedItem($this->resolveIcon($link['type']), $link['link']));
        }
        return $nav;
    }

    protected function resolveIcon(string $type)
    {
        App::assets()->addCss('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');
        switch ($type) {
            case 'vk':
                return Html::nest('i.fa fa-2x fa-vk');
            case 'instagram':
                return Html::nest('i.fa fa-2x fa-instagram');
            case 'facebook':
                return Html::nest('i.fa fa-2x fa-facebook');
            case 'ok':
                return Html::nest('i.fa fa-2x fa-odnoklassniki');
        }

        return Html::nest('i.fa fa-2x fa-' . $type);
    }

}