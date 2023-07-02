<?php

namespace PinaSocialLinks\Types;

use Pina\Types\EnumType;

class SocialNetworkType extends EnumType
{
    public function __construct()
    {
        $this->variants[] = ['id' => 'vk', 'title' => 'VK'];
        $this->variants[] = ['id' => 'instagram', 'title' => 'Instagram'];
        $this->variants[] = ['id' => 'facebook', 'title' => 'Facebook'];
        $this->variants[] = ['id' => 'ok', 'title' => 'Odnoklassniki'];
    }
}