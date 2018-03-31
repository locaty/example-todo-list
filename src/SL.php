<?php

namespace App;

use Locaty;

class SL extends Locaty\SL {

    /**
     * @return Service\Logger
     */
    public static function logger(): Service\Logger {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return self::_get(Service\Logger::class);
    }

    /**
     * @return Service\Repository\Main
     */
    public static function mainRepository(): Service\Repository\Main {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return self::_get(Service\Repository\Main::class);
    }
}
