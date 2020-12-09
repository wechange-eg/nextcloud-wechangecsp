<?php

declare(strict_types=1);

namespace OCA\FullTextSearch_AdminAPI\Service;

use OCP\FullTextSearch\Model\IDocumentAccess;
use OCP\FullTextSearch\Model\ISearchRequest;

/**
 * Extend the SearchMappingService to support sorting of results
 */
class SearchMappingService extends \OCA\FullTextSearch_Elasticsearch\Service\SearchMappingService {
    public function generateSearchQueryParams(
        ISearchRequest $request, IDocumentAccess $access, string $providerId
	): array {
        $params = parent::generateSearchQueryParams($request, $access, $providerId);
        $sort = $request->getOptionArray('sort');
        if ($sort) {
            $params['body']['sort'] = $sort;
        }
        return $params;
	}
}
