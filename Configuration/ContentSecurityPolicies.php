<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Security\ContentSecurityPolicy\{Directive,
	HashValue,
	Mutation,
	MutationCollection,
	MutationMode,
	Scope,
	SourceKeyword,
	SourceScheme,
	UriValue
};
use TYPO3\CMS\Core\Type\Map;

return Map::fromEntries([
		Scope::frontend(),
		// Sad to say there is no way for CSP with adsense https://support.google.com/adsense/thread/102839782/content-security-policy-csp-settings-for-adsense?hl=en
		new MutationCollection(
			new Mutation(
				MutationMode::Set,
				Directive::ScriptSrcElem,
				SourceKeyword::unsafeInline,
				SourceKeyword::self,
				new UriValue('*'),
			),
			new Mutation(
				MutationMode::Set,
				Directive::StyleSrcElem,
				SourceKeyword::unsafeInline,
				SourceKeyword::self,
				new UriValue('*'),
			),
			new Mutation(
				MutationMode::Set,
				Directive::FrameSrc,
				SourceKeyword::unsafeInline,
				SourceKeyword::self,
				new UriValue('*'),
			),
			new Mutation(
				MutationMode::Set,
				Directive::FontSrc,
				SourceKeyword::unsafeInline,
				SourceKeyword::self,
				new UriValue('*'),
			),
			new Mutation(
				MutationMode::Set,
				Directive::ConnectSrc,
				SourceKeyword::unsafeInline,
				SourceKeyword::self,
				new UriValue('*'),
			),
			new Mutation(
				MutationMode::Set,
				Directive::ImgSrc,
				SourceScheme::data,
				SourceKeyword::unsafeInline,
				SourceKeyword::self,
				new UriValue('*'),
			),
		),
	]

);
