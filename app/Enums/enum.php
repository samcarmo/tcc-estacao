<?php

namespace App\Enums;

/**
 * The Variable enum.
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

class Variable
{
    const TEMP = 'TEMPERATURE';
    const HUMI = 'HUMIDITY';
    const SHUM = 'SOIL_HUMIDITY';
    const PRES = 'PRESSURE';
    const ALTI = 'ALTITUDE';
    const WSPE = 'WIND_SPEED';
    const WDIR = 'WIND_DIRECTION';
    const RAIN = 'RAINFALL';
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
