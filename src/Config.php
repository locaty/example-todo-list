<?php

namespace App;

use Locaty;

class Config extends Locaty\Config\Basic {

    /**
     * @return string
     */
    public static function getRollbarToken(): string {
        return self::$_config['rollbar']['token'];
    }

    /**
     * @return string
     */
    public static function getRollbarEnvironment(): string {
        return self::$_config['rollbar']['environment'];
    }
}
