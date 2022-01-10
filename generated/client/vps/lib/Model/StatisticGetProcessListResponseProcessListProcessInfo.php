<?php
/**
 * StatisticGetProcessListResponseProcessListProcessInfo
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
 * StatisticGetProcessListResponseProcessListProcessInfo Class Doc Comment
 *
 * @category Class
 * @package  Generated\Client\Vps
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StatisticGetProcessListResponseProcessListProcessInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Statistic_GetProcessListResponse_ProcessList_ProcessInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pid' => 'int',
        'nice' => 'int',
        'virt' => 'string',
        'rss' => 'string',
        'state' => 'string',
        'cpu_percent' => 'float',
        'mem_percent' => 'float',
        'time_running' => 'float',
        'name' => 'string',
        'user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pid' => 'uint32',
        'nice' => 'int32',
        'virt' => 'uint64',
        'rss' => 'uint64',
        'state' => null,
        'cpu_percent' => 'float',
        'mem_percent' => 'float',
        'time_running' => 'float',
        'name' => null,
        'user' => null
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
        'pid' => 'pid',
        'nice' => 'nice',
        'virt' => 'virt',
        'rss' => 'rss',
        'state' => 'state',
        'cpu_percent' => 'cpu_percent',
        'mem_percent' => 'mem_percent',
        'time_running' => 'time_running',
        'name' => 'name',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pid' => 'setPid',
        'nice' => 'setNice',
        'virt' => 'setVirt',
        'rss' => 'setRss',
        'state' => 'setState',
        'cpu_percent' => 'setCpuPercent',
        'mem_percent' => 'setMemPercent',
        'time_running' => 'setTimeRunning',
        'name' => 'setName',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pid' => 'getPid',
        'nice' => 'getNice',
        'virt' => 'getVirt',
        'rss' => 'getRss',
        'state' => 'getState',
        'cpu_percent' => 'getCpuPercent',
        'mem_percent' => 'getMemPercent',
        'time_running' => 'getTimeRunning',
        'name' => 'getName',
        'user' => 'getUser'
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
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['nice'] = $data['nice'] ?? null;
        $this->container['virt'] = $data['virt'] ?? null;
        $this->container['rss'] = $data['rss'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['cpu_percent'] = $data['cpu_percent'] ?? null;
        $this->container['mem_percent'] = $data['mem_percent'] ?? null;
        $this->container['time_running'] = $data['time_running'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
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
     * Gets pid
     *
     * @return int|null
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param int|null $pid pid
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets nice
     *
     * @return int|null
     */
    public function getNice()
    {
        return $this->container['nice'];
    }

    /**
     * Sets nice
     *
     * @param int|null $nice nice
     *
     * @return self
     */
    public function setNice($nice)
    {
        $this->container['nice'] = $nice;

        return $this;
    }

    /**
     * Gets virt
     *
     * @return string|null
     */
    public function getVirt()
    {
        return $this->container['virt'];
    }

    /**
     * Sets virt
     *
     * @param string|null $virt virt
     *
     * @return self
     */
    public function setVirt($virt)
    {
        $this->container['virt'] = $virt;

        return $this;
    }

    /**
     * Gets rss
     *
     * @return string|null
     */
    public function getRss()
    {
        return $this->container['rss'];
    }

    /**
     * Sets rss
     *
     * @param string|null $rss rss
     *
     * @return self
     */
    public function setRss($rss)
    {
        $this->container['rss'] = $rss;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets cpu_percent
     *
     * @return float|null
     */
    public function getCpuPercent()
    {
        return $this->container['cpu_percent'];
    }

    /**
     * Sets cpu_percent
     *
     * @param float|null $cpu_percent cpu_percent
     *
     * @return self
     */
    public function setCpuPercent($cpu_percent)
    {
        $this->container['cpu_percent'] = $cpu_percent;

        return $this;
    }

    /**
     * Gets mem_percent
     *
     * @return float|null
     */
    public function getMemPercent()
    {
        return $this->container['mem_percent'];
    }

    /**
     * Sets mem_percent
     *
     * @param float|null $mem_percent mem_percent
     *
     * @return self
     */
    public function setMemPercent($mem_percent)
    {
        $this->container['mem_percent'] = $mem_percent;

        return $this;
    }

    /**
     * Gets time_running
     *
     * @return float|null
     */
    public function getTimeRunning()
    {
        return $this->container['time_running'];
    }

    /**
     * Sets time_running
     *
     * @param float|null $time_running time_running
     *
     * @return self
     */
    public function setTimeRunning($time_running)
    {
        $this->container['time_running'] = $time_running;

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
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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

