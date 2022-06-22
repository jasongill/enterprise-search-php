<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   https://opensource.org/licenses/MIT MIT License
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the MIT License.
 * See the LICENSE file in the project root for more information.
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update current triggers blocklist
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/automatic-query-refinement-blocklist.html
 * @generated This file is generated, please do not edit
 */
class PutTriggersBlocklist extends Request
{
	public function __construct()
	{
		$this->method = 'PUT';
		$this->path = "/api/ws/v1/automatic_query_refinement";
	}
}
