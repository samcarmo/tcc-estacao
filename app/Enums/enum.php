<?php

namespace App\Enums;

/**
 * The Status enum.
 *
 * @method static self TEMP()
 * @method static self HUMI()
 * @method static self SHUM()
 * @method static self PRES()
 * @method static self ALTI()
 * @method static self WSPE()
 * @method static self WDIR()
 * @method static self RAIN()
 */

class Status
{
    const TEMP = 1;
    const HUMI = 2;
    const SHUM = 3;
    const PRES = 4;
    const ALTI = 5;
    const WSPE = 6;
    const WDIR = 7;
    const RAIN = 8;
    /**
     * Retrieve a map of enum keys and values.
     *
     * @return array
     */
    public static function map(): array
    {
        return [
            static::TEMP => 'Temperature',
            static::HUMI => 'Humidity',
            static::SHUM => 'Soil humidity',
            static::PRES => 'Pressure',
            static::ALTI => 'Altitude',
            static::WSPE => 'Wind speed',
            static::WDIR => 'Wind direction',
            static::RAIN => 'Rainfall',
        ];
    }
}
