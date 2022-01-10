<?php
/**
 * StatisticGetCpuDetailsResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Generated\Client\Vps
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Generated\Client\Vps\Model;

use \ArrayAccess;
use \Generated\Client\Vps\ObjectSerializer;

/**
 * StatisticGetCpuDetailsResponse Class Doc Comment
 *
 * @category Class
 * @package  Generated\Client\Vps
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StatisticGetCpuDetailsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Statistic_GetCpuDetailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => 'string[]',
        'user' => 'double[]',
        'nice' => 'double[]',
        'system' => 'double[]',
        'idle' => 'double[]',
        'iowait' => 'double[]',
        'irq' => 'double[]',
        'softirq' => 'double[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => null,
        'user' => 'double',
        'nice' => 'double',
        'system' => 'double',
        'idle' => 'double',
        'iowait' => 'double',
        'irq' => 'double',
        'softirq' => 'double'
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
        'date' => 'date',
        'user' => 'user',
        'nice' => 'nice',
        'system' => 'system',
        'idle' => 'idle',
        'iowait' => 'iowait',
        'irq' => 'irq',
        'softirq' => 'softirq'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'user' => 'setUser',
        'nice' => 'setNice',
        'system' => 'setSystem',
        'idle' => 'setIdle',
        'iowait' => 'setIowait',
        'irq' => 'setIrq',
        'softirq' => 'setSoftirq'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'user' => 'getUser',
        'nice' => 'getNice',
        'system' => 'getSystem',
        'idle' => 'getIdle',
        'iowait' => 'getIowait',
        'irq' => 'getIrq',
        'softirq' => 'getSoftirq'
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
        $this->container['date'] = $data['date'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['nice'] = $data['nice'] ?? null;
        $this->container['system'] = $data['system'] ?? null;
        $this->container['idle'] = $data['idle'] ?? null;
        $this->container['iowait'] = $data['iowait'] ?? null;
        $this->container['irq'] = $data['irq'] ?? null;
        $this->container['softirq'] = $data['softirq'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets date
     *
     * @return string[]|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string[]|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets user
     *
     * @return double[]|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param double[]|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets nice
     *
     * @return double[]|null
     */
    public function getNice()
    {
        return $this->container['nice'];
    }

    /**
     * Sets nice
     *
     * @param double[]|null $nice nice
     *
     * @return self
     */
    public function setNice($nice)
    {
        $this->container['nice'] = $nice;

        return $this;
    }

    /**
     * Gets system
     *
     * @return double[]|null
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param double[]|null $system system
     *
     * @return self
     */
    public function setSystem($system)
    {
        $this->container['system'] = $system;

        return $this;
    }

    /**
     * Gets idle
     *
     * @return double[]|null
     */
    public function getIdle()
    {
        return $this->container['idle'];
    }

    /**
     * Sets idle
     *
     * @param double[]|null $idle idle
     *
     * @return self
     */
    public function setIdle($idle)
    {
        $this->container['idle'] = $idle;

        return $this;
    }

    /**
     * Gets iowait
     *
     * @return double[]|null
     */
    public function getIowait()
    {
        return $this->container['iowait'];
    }

    /**
     * Sets iowait
     *
     * @param double[]|null $iowait iowait
     *
     * @return self
     */
    public function setIowait($iowait)
    {
        $this->container['iowait'] = $iowait;

        return $this;
    }

    /**
     * Gets irq
     *
     * @return double[]|null
     */
    public function getIrq()
    {
        return $this->container['irq'];
    }

    /**
     * Sets irq
     *
     * @param double[]|null $irq irq
     *
     * @return self
     */
    public function setIrq($irq)
    {
        $this->container['irq'] = $irq;

        return $this;
    }

    /**
     * Gets softirq
     *
     * @return double[]|null
     */
    public function getSoftirq()
    {
        return $this->container['softirq'];
    }

    /**
     * Sets softirq
     *
     * @param double[]|null $softirq softirq
     *
     * @return self
     */
    public function setSoftirq($softirq)
    {
        $this->container['softirq'] = $softirq;

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

