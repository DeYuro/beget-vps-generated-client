<?php
/**
 * SnapshotSnapshot
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
 * SnapshotSnapshot Class Doc Comment
 *
 * @category Class
 * @package  Generated\Client\Vps
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SnapshotSnapshot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Snapshot_Snapshot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'vps_id' => 'string',
        'vps_name' => 'string',
        'date_create' => 'string',
        'size' => 'string',
        'status' => 'string',
        'operating_system' => '\Generated\Client\Vps\Model\StructuresOperatingSystem',
        'description' => 'string',
        'configuration' => '\Generated\Client\Vps\Model\SnapshotRequiredConfiguration',
        'price_day' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uint64',
        'vps_id' => null,
        'vps_name' => null,
        'date_create' => null,
        'size' => 'uint64',
        'status' => 'enum',
        'operating_system' => null,
        'description' => null,
        'configuration' => null,
        'price_day' => 'double'
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
        'vps_id' => 'vps_id',
        'vps_name' => 'vps_name',
        'date_create' => 'date_create',
        'size' => 'size',
        'status' => 'status',
        'operating_system' => 'operating_system',
        'description' => 'description',
        'configuration' => 'configuration',
        'price_day' => 'price_day'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'vps_id' => 'setVpsId',
        'vps_name' => 'setVpsName',
        'date_create' => 'setDateCreate',
        'size' => 'setSize',
        'status' => 'setStatus',
        'operating_system' => 'setOperatingSystem',
        'description' => 'setDescription',
        'configuration' => 'setConfiguration',
        'price_day' => 'setPriceDay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'vps_id' => 'getVpsId',
        'vps_name' => 'getVpsName',
        'date_create' => 'getDateCreate',
        'size' => 'getSize',
        'status' => 'getStatus',
        'operating_system' => 'getOperatingSystem',
        'description' => 'getDescription',
        'configuration' => 'getConfiguration',
        'price_day' => 'getPriceDay'
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
        $this->container['vps_id'] = $data['vps_id'] ?? null;
        $this->container['vps_name'] = $data['vps_name'] ?? null;
        $this->container['date_create'] = $data['date_create'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['operating_system'] = $data['operating_system'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['configuration'] = $data['configuration'] ?? null;
        $this->container['price_day'] = $data['price_day'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id snapshot id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets vps_id
     *
     * @return string|null
     */
    public function getVpsId()
    {
        return $this->container['vps_id'];
    }

    /**
     * Sets vps_id
     *
     * @param string|null $vps_id vps id (uuid)
     *
     * @return self
     */
    public function setVpsId($vps_id)
    {
        $this->container['vps_id'] = $vps_id;

        return $this;
    }

    /**
     * Gets vps_name
     *
     * @return string|null
     */
    public function getVpsName()
    {
        return $this->container['vps_name'];
    }

    /**
     * Sets vps_name
     *
     * @param string|null $vps_name vps name
     *
     * @return self
     */
    public function setVpsName($vps_name)
    {
        $this->container['vps_name'] = $vps_name;

        return $this;
    }

    /**
     * Gets date_create
     *
     * @return string|null
     */
    public function getDateCreate()
    {
        return $this->container['date_create'];
    }

    /**
     * Sets date_create
     *
     * @param string|null $date_create snapshot create date W3C
     *
     * @return self
     */
    public function setDateCreate($date_create)
    {
        $this->container['date_create'] = $date_create;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size bytes
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status current snapshot status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets operating_system
     *
     * @return \Generated\Client\Vps\Model\StructuresOperatingSystem|null
     */
    public function getOperatingSystem()
    {
        return $this->container['operating_system'];
    }

    /**
     * Sets operating_system
     *
     * @param \Generated\Client\Vps\Model\StructuresOperatingSystem|null $operating_system operating_system
     *
     * @return self
     */
    public function setOperatingSystem($operating_system)
    {
        $this->container['operating_system'] = $operating_system;

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
     * @param string|null $description user title for snapshot
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \Generated\Client\Vps\Model\SnapshotRequiredConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Generated\Client\Vps\Model\SnapshotRequiredConfiguration|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets price_day
     *
     * @return double|null
     */
    public function getPriceDay()
    {
        return $this->container['price_day'];
    }

    /**
     * Sets price_day
     *
     * @param double|null $price_day cost per day in rub
     *
     * @return self
     */
    public function setPriceDay($price_day)
    {
        $this->container['price_day'] = $price_day;

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


