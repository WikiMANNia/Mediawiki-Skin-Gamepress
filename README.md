# MediaWiki Gamepress

Die Pflege dieses Forks des MediaWiki-Skins [Gamepress](https://www.mediawiki.org/wiki/Skin:Gamepress/de) wird von WikiMANNia verwaltet.

The maintenance of this fork of the MediaWiki skin [Gamepress](https://www.mediawiki.org/wiki/Skin:Gamepress) is managed by WikiMANNia.

El mantenimiento de esta bifurcación del tema de MediaWiki [Gamepress](https://www.mediawiki.org/wiki/Skin:Gamepress/es) está gestionado por WikiMANNia.

## Description

Der Skin Gamepress unterstützt Themen, siehe dazu Erweiterung [Theme](https://www.mediawiki.org/wiki/Extension:Theme/de).

The Gamepress skin supports themes; see the [Theme](https://www.mediawiki.org/wiki/Extension:Theme) extension for details.

El tema Gamepress admite temas; consulta la extensión de [Temas](https://www.mediawiki.org/wiki/Extension:Theme/es) para obtener más información.

Aktuell sind das die Themen:

Currently, the themes are:

Actualmente, los temas disponibles son:
* ´blue´
* ´green´
* ´orange´

## Compatibility

This skin has been tested with MediaWiki versions `1.39.17`, `1.43.9`, `1.45.4`, and `1.47.0-alpha`.

The skin is expected to work with MediaWiki 1.36–1.38, but these versions are not currently tested.

## Version history

Version 1.4 - Oct 30, 2020
- Remove $wgMemc, bump skin version + minimum required MW version (was 1.32+, now 1.34+)

Jan 5, 2021
- Upgrade SkinGamepress to take advantage of new skin capabilities
-- Provide viewport via skin registration responsive option
-- add styles via skin registration styles option
-- move IE support stylesheet to the initPage method as setupSkinUserCss method is deprecated
-- Drop  skinname and stylename properties (made redundant by name option)
- Bug: T266735

Mar 25, 2021
- Delete old, nowadays unused Special:Preferences CSS

Apr 21, 2021
- Hide the "jump to" accessibility links in printable view

Dec 10, 2021
- Require MediaWiki 1.35 for object specs on ValidSkinNames in skin.json

Apr 26, 2022
- Prepare for MediaWiki breaking change
- Follow instructions on: https://www.mediawiki.org/wiki/Manual:ResourceLoaderSkinModule#For_skins_deprecating_the_legacy_feature
- The modules mediawiki.skinning.interface and mediawiki.skinning.content.externallinks will soon be removed from MediaWiki core (see T304322)
- Also seems that skins.gamepress.site is being loaded as a style so this is also corrected.

May 5, 2022
- Define skinname-gamepress i18n msg for prettier name display on Special:Preferences etc.

Sep 16, 2022
- Upgrade for 1.39
-- Fix parseMessage argument notice
-- Drop support for older branches (these will now have dedicated branches)
-- Add visualClear missing style (leftover from legacy migration)
-- Drop older IE support
-- content-thumbnails is now content-media
- Bug: T306942

Feb 3, 2023
- Adjust author URLs
-- Remove link to Aleksandra's site since it appears to have been defunct since 2015(/2016)
-- Update the URL to Bizzeebeever's Uncyclopedia user page to use HTTPS, Uncyc has supported it for a long time

Feb 2, 2024
- skin: Update class name for SkinModule, renamed in MW 1.39

Mar 18, 2025
- Replace class aliases from MediaWiki 1.40
- Common classes are namespaced and the class
- aliases were removed in fcbb75b8a4 (MediaWiki 1.44)
- Fixing usage of aliases added in MediaWiki 1.40

Aug 16, 2025
- Remove "i18n-all-lists-margins" and "interface-message-box" features to avoid deprecation notice, require MW 1.43+
- As per the deprecation notice/core file resources/src/mediawiki.skinning/i18n-all-lists-margins.less, the skin already loads the "elements" feature, thus no need to separately load this.
- The "interface-message-box" feature is not needed except to support a handful of extensions and can be safely removed, as per [[mw:Manual:ResourceLoaderSkinModule]].

Version 1.5 - Oct 7, 2026

- Add namespace
- Add file ´Compat.php´
- Add backward compatibility to REL1_36
- Migrated ´skin.json´ from manifest version 1 to manifest version 2.
