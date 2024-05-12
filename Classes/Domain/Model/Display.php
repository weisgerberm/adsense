<?php

declare(strict_types=1);

namespace Weisgerber\Adsense\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Display extends AbstractEntity
{
	public const string TABLE_NAME = 'tx_adsense_domain_model_display';

	protected string $code;

	public function getCode(): string
	{
		return $this->code;
	}

	public function setCode(string $code): void
	{
		$this->code = $code;
	}
}
