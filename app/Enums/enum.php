<?php

namespace App\Enums;

/**
 * The Variable enum.
 *
 * @method static self TEMPERATURE()
 * @method static self HUMIDITY()
 * @method static self SOIL_HUMIDITY()
 * @method static self PRESSURE()
 * @method static self ALTITUDE()
 * @method static self WIND_SPEED()
 * @method static self WIND_DIRECTION()
 * @method static self RAINFALL()
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
