<?php
/**
 * TimeSpan
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

use \ArrayAccess;
use \Hauki\ObjectSerializer;

/**
 * TimeSpan Class Doc Comment
 *
 * @category Class
 * @package  Hauki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TimeSpan implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimeSpan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'group' => 'int',
        'name' => 'string',
        'description' => 'string',
        'start_time' => 'string',
        'end_time' => 'string',
        'end_time_on_next_day' => 'bool',
        'full_day' => 'bool',
        'weekdays' => 'int[]',
        'resource_state' => '\Hauki\Model\ResourceStateEnum',
        'created' => '\DateTime',
        'modified' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'group' => null,
        'name' => null,
        'description' => null,
        'start_time' => 'time',
        'end_time' => 'time',
        'end_time_on_next_day' => null,
        'full_day' => null,
        'weekdays' => null,
        'resource_state' => null,
        'created' => 'date-time',
        'modified' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'group' => 'group',
        'name' => 'name',
        'description' => 'description',
        'start_time' => 'start_time',
        'end_time' => 'end_time',
        'end_time_on_next_day' => 'end_time_on_next_day',
        'full_day' => 'full_day',
        'weekdays' => 'weekdays',
        'resource_state' => 'resource_state',
        'created' => 'created',
        'modified' => 'modified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'group' => 'setGroup',
        'name' => 'setName',
        'description' => 'setDescription',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'end_time_on_next_day' => 'setEndTimeOnNextDay',
        'full_day' => 'setFullDay',
        'weekdays' => 'setWeekdays',
        'resource_state' => 'setResourceState',
        'created' => 'setCreated',
        'modified' => 'setModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'group' => 'getGroup',
        'name' => 'getName',
        'description' => 'getDescription',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'end_time_on_next_day' => 'getEndTimeOnNextDay',
        'full_day' => 'getFullDay',
        'weekdays' => 'getWeekdays',
        'resource_state' => 'getResourceState',
        'created' => 'getCreated',
        'modified' => 'getModified'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const WEEKDAYS_1 = 1;
    const WEEKDAYS_2 = 2;
    const WEEKDAYS_3 = 3;
    const WEEKDAYS_4 = 4;
    const WEEKDAYS_5 = 5;
    const WEEKDAYS_6 = 6;
    const WEEKDAYS_7 = 7;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeekdaysAllowableValues()
    {
        return [
            self::WEEKDAYS_1,
            self::WEEKDAYS_2,
            self::WEEKDAYS_3,
            self::WEEKDAYS_4,
            self::WEEKDAYS_5,
            self::WEEKDAYS_6,
            self::WEEKDAYS_7,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['end_time_on_next_day'] = $data['end_time_on_next_day'] ?? null;
        $this->container['full_day'] = $data['full_day'] ?? null;
        $this->container['weekdays'] = $data['weekdays'] ?? null;
        $this->container['resource_state'] = $data['resource_state'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['modified'] === null) {
            $invalidProperties[] = "'modified' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets group
     *
     * @return int|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param int|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling TimeSpan., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string|null $start_time start_time
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string|null $end_time end_time
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets end_time_on_next_day
     *
     * @return bool|null
     */
    public function getEndTimeOnNextDay()
    {
        return $this->container['end_time_on_next_day'];
    }

    /**
     * Sets end_time_on_next_day
     *
     * @param bool|null $end_time_on_next_day end_time_on_next_day
     *
     * @return self
     */
    public function setEndTimeOnNextDay($end_time_on_next_day)
    {
        $this->container['end_time_on_next_day'] = $end_time_on_next_day;

        return $this;
    }

    /**
     * Gets full_day
     *
     * @return bool|null
     */
    public function getFullDay()
    {
        return $this->container['full_day'];
    }

    /**
     * Sets full_day
     *
     * @param bool|null $full_day full_day
     *
     * @return self
     */
    public function setFullDay($full_day)
    {
        $this->container['full_day'] = $full_day;

        return $this;
    }

    /**
     * Gets weekdays
     *
     * @return int[]|null
     */
    public function getWeekdays()
    {
        return $this->container['weekdays'];
    }

    /**
     * Sets weekdays
     *
     * @param int[]|null $weekdays weekdays
     *
     * @return self
     */
    public function setWeekdays($weekdays)
    {
        $allowedValues = $this->getWeekdaysAllowableValues();
        if (!is_null($weekdays) && array_diff($weekdays, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'weekdays', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['weekdays'] = $weekdays;

        return $this;
    }

    /**
     * Gets resource_state
     *
     * @return \Hauki\Model\ResourceStateEnum|null
     */
    public function getResourceState()
    {
        return $this->container['resource_state'];
    }

    /**
     * Sets resource_state
     *
     * @param \Hauki\Model\ResourceStateEnum|null $resource_state resource_state
     *
     * @return self
     */
    public function setResourceState($resource_state)
    {
        $this->container['resource_state'] = $resource_state;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime $modified modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


