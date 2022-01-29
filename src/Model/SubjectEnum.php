<?php
/**
 * SubjectEnum
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Hauki\Model;
use \Hauki\ObjectSerializer;

/**
 * SubjectEnum Class Doc Comment
 *
 * @category Class
 * @package  Hauki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubjectEnum
{
    /**
     * Possible values of this enum
     */
    const DAY = 'day';
    const WEEK = 'week';
    const MONTH = 'month';
    const MON = 'mon';
    const TUE = 'tue';
    const WED = 'wed';
    const THU = 'thu';
    const FRI = 'fri';
    const SAT = 'sat';
    const SUN = 'sun';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAY,
            self::WEEK,
            self::MONTH,
            self::MON,
            self::TUE,
            self::WED,
            self::THU,
            self::FRI,
            self::SAT,
            self::SUN,
        ];
    }
}


