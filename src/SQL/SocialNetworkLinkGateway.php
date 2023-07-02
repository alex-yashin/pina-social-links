<?php

namespace PinaSocialLinks\SQL;

use PinaSocialLinks\Types\SocialNetworkType;
use Pina\Data\Schema;
use Pina\TableDataGateway;
use Pina\Types\EnabledType;
use Pina\Types\StringType;
use Exception;

class SocialNetworkLinkGateway extends TableDataGateway
{

    protected static $table = 'social_network_link';

    /**
     * @return Schema
     * @throws Exception
     */
    public function getSchema()
    {
        $schema = new Schema();
        $schema->addAutoincrementPrimaryKey('id', 'ID');
        $schema->add('type', 'Тип', SocialNetworkType::class);
        $schema->add('link', 'Ссылка', StringType::class);
        $schema->add('enabled', 'Активность', EnabledType::class);
        $schema->setPrimaryKey(['id']);
        return $schema;
    }

}