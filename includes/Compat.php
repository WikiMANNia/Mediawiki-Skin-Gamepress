<?php

namespace MediaWiki\Skin\Gamepress;

class Compat {

    public static function init(): void {
        self::aliasCoreClasses();
    }

    private static function aliasCoreClasses(): void {

		if ( class_exists( \Html::class ) && /* < 1.40 */
			!class_exists( 'MediaWiki\\Html\\Html', false ) ) {
			class_alias(
				\Html::class,
				'MediaWiki\\Html\\Html'
			);
		}
		if ( class_exists( \Linker::class ) && /* < 1.40 */
			!class_exists( 'MediaWiki\\Linker\\Linker', false ) ) {
			class_alias(
				\Linker::class,
				'MediaWiki\\Linker\\Linker'
			);
		}
		if ( class_exists( \Title::class ) && /* < 1.40 */
			!class_exists( 'MediaWiki\\Title\\Title', false ) ) {
			class_alias(
				\Title::class,
				'MediaWiki\\Title\\Title'
			);
		}
		if ( class_exists( \GlobalVarConfig::class ) && /* < 1.41 */
			!class_exists( 'MediaWiki\\Config\\GlobalVarConfig', false ) ) {
			class_alias(
				\GlobalVarConfig::class,
				'MediaWiki\\Config\\GlobalVarConfig'
			);
		}
		if ( class_exists( \RequestContext::class ) && /* < 1.42 */
			!class_exists( 'MediaWiki\\Context\\RequestContext', false ) ) {
			class_alias(
				\RequestContext::class,
				'MediaWiki\\Context\\RequestContext'
			);
		}
		if ( class_exists( \Skin::class ) && /* < 1.44 */
			!class_exists( 'MediaWiki\\Skin\\Skin', false ) ) {
			class_alias(
				\Skin::class,
				'MediaWiki\\Skin\\Skin'
			);
		}
		if ( class_exists( \BaseTemplate::class ) && /* < ? */
			!class_exists( 'MediaWiki\\Skin\\BaseTemplate', false ) ) {
			class_alias(
				\BaseTemplate::class,
				'MediaWiki\\Skin\\BaseTemplate'
			);
		}
		if ( class_exists( \SkinComponentUtils::class ) && /* < ? */
			!class_exists( 'MediaWiki\\Skin\\SkinComponentUtils', false ) ) {
			class_alias(
				\SkinComponentUtils::class,
				'MediaWiki\\Skin\\SkinComponentUtils'
			);
		}
		if ( class_exists( \Sanitizer::class ) && /* < ? */
			!class_exists( 'MediaWiki\\Parser\\Sanitizer', false ) ) {
			class_alias(
				\Sanitizer::class,
				'MediaWiki\\Parser\\Sanitizer'
			);
		}
	}
}
