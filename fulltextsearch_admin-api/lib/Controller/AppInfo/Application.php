<?php

declare(strict_types=1);

namespace OCA\FullTextSearch_AdminAPI\AppInfo;

use OCP\AppFramework\App;
use OCA\FullTextSearch_ElasticSearch\Service\ConfigService;
use OCA\FullTextSearch_ElasticSearch\Service\MiscService;

class Application extends App {

    public function __construct() {
        parent::__construct('FullTextSearch_AdminAPI');

        $container = $this->getContainer();

        $container->registerService(\OCA\FullTextSearch_ElasticSearch\Service\SearchMappingService::class, function (IContainer $c) {
            return new \OCA\FullTextSearch_AdminAPI\Service\SearchMappingService(
                $c->query(ConfigService::class),
                $c->query(MiscService::class)
            )
        });
    }

}