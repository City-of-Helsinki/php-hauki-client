<?php
/**
 * DatePeriod
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
 * DatePeriod Class Doc Comment
 *
 * @category Class
 * @description Adds nested create feature
 * @package  Hauki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DatePeriod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DatePeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'resource' => 'int',
        'name' => 'string',
        'description' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'resource_state' => '\Hauki\Model\ResourceStateEnum',
        'override' => 'bool',
        'origins' => '\Hauki\Model\PeriodOrigin[]',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'time_span_groups' => '\Hauki\Model\TimeSpanGroup[]'
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
        'resource' => null,
        'name' => null,
        'description' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'resource_state' => null,
        'override' => null,
        'origins' => null,
        'created' => 'date-time',
        'modified' => 'date-time',
        'time_span_groups' => null
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
        'resource' => 'resource',
        'name' => 'name',
        'description' => 'description',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'resource_state' => 'resource_state',
        'override' => 'override',
        'origins' => 'origins',
        'created' => 'created',
        'modified' => 'modified',
        'time_span_groups' => 'time_span_groups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'resource' => 'setResource',
        'name' => 'setName',
        'description' => 'setDescription',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'resource_state' => 'setResourceState',
        'override' => 'setOverride',
        'origins' => 'setOrigins',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'time_span_groups' => 'setTimeSpanGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'resource' => 'getResource',
        'name' => 'getName',
        'description' => 'getDescription',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'resource_state' => 'getResourceState',
        'override' => 'getOverride',
        'origins' => 'getOrigins',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'time_span_groups' => 'getTimeSpanGroups'
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
        $this->container['resource'] = $data['resource'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['resource_state'] = $data['resource_state'] ?? null;
        $this->container['override'] = $data['override'] ?? null;
        $this->container['origins'] = $data['origins'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
        $this->container['time_span_groups'] = $data['time_span_groups'] ?? null;
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
        if ($this->container['resource'] === null) {
            $invalidProperties[] = "'resource' can't be null";
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
     * Gets resource
     *
     * @return int
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param int $resource resource
     *
     * @return self
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

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
            throw new \InvalidArgumentException('invalid length for $name when calling DatePeriod., must be smaller than or equal to 255.');
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
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * Gets override
     *
     * @return bool|null
     */
    public function getOverride()
    {
        return $this->container['override'];
    }

    /**
     * Sets override
     *
     * @param bool|null $override override
     *
     * @return self
     */
    public function setOverride($override)
    {
        $this->container['override'] = $override;

        return $this;
    }

    /**
     * Gets origins
     *
     * @return \Hauki\Model\PeriodOrigin[]|null
     */
    public function getOrigins()
    {
        return $this->container['origins'];
    }

    /**
     * Sets origins
     *
     * @param \Hauki\Model\PeriodOrigin[]|null $origins origins
     *
     * @return self
     */
    public function setOrigins($origins)
    {
        $this->container['origins'] = $origins;

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
     * Gets time_span_groups
     *
     * @return \Hauki\Model\TimeSpanGroup[]|null
     */
    public function getTimeSpanGroups()
    {
        return $this->container['time_span_groups'];
    }

    /**
     * Sets time_span_groups
     *
     * @param \Hauki\Model\TimeSpanGroup[]|null $time_span_groups time_span_groups
     *
     * @return self
     */
    public function setTimeSpanGroups($time_span_groups)
    {
        $this->container['time_span_groups'] = $time_span_groups;

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


