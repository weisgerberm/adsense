<?php declare(strict_types=1);

namespace Weisgerber\Adsense\DataProcessing;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Frontend\DataProcessing\FilesProcessor;
use Weisgerber\Adsense\Domain\Repository\DisplayRepository;

class DisplayProcessor implements DataProcessorInterface
{
	/**
	 * @param ContentObjectRenderer $cObj The data of the content element or page
	 * @param array $contentObjectConfiguration The configuration of Content Object
	 * @param array $processorConfiguration The configuration of this processor
	 * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
	 * @return array the processed data as key/value store
	 */
	public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
	{
		DebuggerUtility::var_dump("asd");
		if($processedData['data']['adsense_display_before'] || $processedData['data']['adsense_display_after']) {
			/** @var DisplayRepository $displayRepository */
			$displayRepository = GeneralUtility::makeInstance(DisplayRepository::class);
			if($processedData['data']['adsense_display_before']){
				$processedData['adsenseBefore'] = $displayRepository->findByUid(['uid' => $processedData['data']['adsense_display_before']]);
			}
			if($processedData['data']['adsense_display_after']){
				$processedData['adsenseAfter'] = $displayRepository->findByUid(['uid' => $processedData['data']['adsense_display_after']]);
			}
		}

		return $processedData;
	}
}
