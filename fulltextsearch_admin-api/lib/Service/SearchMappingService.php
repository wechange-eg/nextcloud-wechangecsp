<?php

declare(strict_types=1);

namespace OCA\FullTextSearch_AdminAPI\Service;

use OCP\FullTextSearch\Model\IDocumentAccess;
use OCP\FullTextSearch\Model\ISearchRequest;
use OCP\FullTextSearch\Model\ISearchRequestSimpleQuery;

class SearchMappingService extends \OCA\FullTextSearch_Elasticsearch\Service\SearchMappingService {
    public function generateSearchQuery(
		ISearchRequest $request, IDocumentAccess $access, string $providerId
	): array {
        $query = parent::generateSearchQuery($request, $access, $providerId);
        1/0;
        return $query;
	}
}
