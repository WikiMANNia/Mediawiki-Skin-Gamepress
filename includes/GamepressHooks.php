<?php

namespace MediaWiki\Skin\Gamepress;

class GamepressHooks
{
    public static function onRegistration() {
        Compat::init();
    }
}
