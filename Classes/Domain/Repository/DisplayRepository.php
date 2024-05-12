<?php

declare(strict_types=1);

namespace Weisgerber\Adsense\Domain\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Repository;
use Weisgerber\Adsense\Domain\Model\Display;

class DisplayRepository extends Repository
{
	public function findByUid($uid)
	{
		$connection = GeneralUtility::makeInstance(ConnectionPool::class)
			->getConnectionForTable(Display::TABLE_NAME);

		/** @var QueryBuilder $queryBuilder */
		$queryBuilder = $connection->createQueryBuilder();
		$query = $queryBuilder
			->select('code')
			->from(Display::TABLE_NAME);

		$rows = $query->executeQuery()->fetchOne();
		return $rows;
	}
}
