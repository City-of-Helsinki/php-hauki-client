<?php
/**
 * WeekdaysEnum
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Hauki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Hauki API
 *
 * API for the City of Helsinki opening hours database  # Introduction  To do.  # Authentication methods  <SecurityDefinitions />
 *
 * The version of the OpenAPI document: 0.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Hauki\Model;
use \Hauki\ObjectSerializer;

/**
 * WeekdaysEnum Class Doc Comment
 *
 * @category Class
 * @package  Hauki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WeekdaysEnum
{
    /**
     * Possible values of this enum
     */
    const 1 = 1;
    const 2 = 2;
    const 3 = 3;
    const 4 = 4;
    const 5 = 5;
    const 6 = 6;
    const 7 = 7;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::1,
            self::2,
            self::3,
            self::4,
            self::5,
            self::6,
            self::7,
        ];
    }
}

