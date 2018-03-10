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
}
