<?php
/**
 * ApiAbsence
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Troi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Troi API
 *
 * This is the official API documentation of Troi.  # Authentication  Troi offers basic auth for authentication.  <security-definitions />
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: helpdesk@troi.de
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Troi\Model;

use \ArrayAccess;
use \Troi\ObjectSerializer;

/**
 * ApiAbsence Class Doc Comment
 *
 * @category Class
 * @package  Troi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiAbsence implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiAbsence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start' => 'string',
        'end' => 'string',
        'subject' => 'string',
        'description' => 'string',
        'destination' => 'object',
        'employee' => '\Troi\Model\ApiSyncItem',
        'absence_type' => '\Troi\Model\ApiAbsenceType',
        'half_day' => 'int',
        'absence_unit' => 'int',
        'absence_hours' => 'int',
        'id' => 'int',
        'id' => 'int',
        'path' => 'string',
        'e_tag' => 'string',
        'is_deleted' => 'bool',
        'class_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start' => null,
        'end' => null,
        'subject' => null,
        'description' => null,
        'destination' => null,
        'employee' => null,
        'absence_type' => null,
        'half_day' => null,
        'absence_unit' => null,
        'absence_hours' => null,
        'id' => null,
        'id' => null,
        'path' => null,
        'e_tag' => null,
        'is_deleted' => null,
        'class_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'start' => false,
        'end' => false,
        'subject' => false,
        'description' => false,
        'destination' => false,
        'employee' => false,
        'absence_type' => false,
        'half_day' => false,
        'absence_unit' => false,
        'absence_hours' => false,
        'id' => false,
        'id' => false,
        'path' => false,
        'e_tag' => false,
        'is_deleted' => false,
        'class_name' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'start' => 'Start',
        'end' => 'End',
        'subject' => 'Subject',
        'description' => 'Description',
        'destination' => 'Destination',
        'employee' => 'Employee',
        'absence_type' => 'absenceType',
        'half_day' => 'halfDay',
        'absence_unit' => 'absenceUnit',
        'absence_hours' => 'absenceHours',
        'id' => 'id',
        'id' => 'Id',
        'path' => 'Path',
        'e_tag' => 'ETag',
        'is_deleted' => 'IsDeleted',
        'class_name' => 'ClassName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start' => 'setStart',
        'end' => 'setEnd',
        'subject' => 'setSubject',
        'description' => 'setDescription',
        'destination' => 'setDestination',
        'employee' => 'setEmployee',
        'absence_type' => 'setAbsenceType',
        'half_day' => 'setHalfDay',
        'absence_unit' => 'setAbsenceUnit',
        'absence_hours' => 'setAbsenceHours',
        'id' => 'setId',
        'id' => 'setId',
        'path' => 'setPath',
        'e_tag' => 'setETag',
        'is_deleted' => 'setIsDeleted',
        'class_name' => 'setClassName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start' => 'getStart',
        'end' => 'getEnd',
        'subject' => 'getSubject',
        'description' => 'getDescription',
        'destination' => 'getDestination',
        'employee' => 'getEmployee',
        'absence_type' => 'getAbsenceType',
        'half_day' => 'getHalfDay',
        'absence_unit' => 'getAbsenceUnit',
        'absence_hours' => 'getAbsenceHours',
        'id' => 'getId',
        'id' => 'getId',
        'path' => 'getPath',
        'e_tag' => 'getETag',
        'is_deleted' => 'getIsDeleted',
        'class_name' => 'getClassName'
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
        $this->setIfExists('start', $data ?? [], null);
        $this->setIfExists('end', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('employee', $data ?? [], null);
        $this->setIfExists('absence_type', $data ?? [], null);
        $this->setIfExists('half_day', $data ?? [], null);
        $this->setIfExists('absence_unit', $data ?? [], null);
        $this->setIfExists('absence_hours', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('e_tag', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('class_name', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets start
     *
     * @return string|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param string|null $start start
     *
     * @return self
     */
    public function setStart($start)
    {
        if (is_null($start)) {
            throw new \InvalidArgumentException('non-nullable start cannot be null');
        }
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return string|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param string|null $end end
     *
     * @return self
     */
    public function setEnd($end)
    {
        if (is_null($end)) {
            throw new \InvalidArgumentException('non-nullable end cannot be null');
        }
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

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
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return object|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param object|null $destination destination
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets employee
     *
     * @return \Troi\Model\ApiSyncItem|null
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \Troi\Model\ApiSyncItem|null $employee employee
     *
     * @return self
     */
    public function setEmployee($employee)
    {
        if (is_null($employee)) {
            throw new \InvalidArgumentException('non-nullable employee cannot be null');
        }
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets absence_type
     *
     * @return \Troi\Model\ApiAbsenceType|null
     */
    public function getAbsenceType()
    {
        return $this->container['absence_type'];
    }

    /**
     * Sets absence_type
     *
     * @param \Troi\Model\ApiAbsenceType|null $absence_type absence_type
     *
     * @return self
     */
    public function setAbsenceType($absence_type)
    {
        if (is_null($absence_type)) {
            throw new \InvalidArgumentException('non-nullable absence_type cannot be null');
        }
        $this->container['absence_type'] = $absence_type;

        return $this;
    }

    /**
     * Gets half_day
     *
     * @return int|null
     */
    public function getHalfDay()
    {
        return $this->container['half_day'];
    }

    /**
     * Sets half_day
     *
     * @param int|null $half_day half_day
     *
     * @return self
     */
    public function setHalfDay($half_day)
    {
        if (is_null($half_day)) {
            throw new \InvalidArgumentException('non-nullable half_day cannot be null');
        }
        $this->container['half_day'] = $half_day;

        return $this;
    }

    /**
     * Gets absence_unit
     *
     * @return int|null
     */
    public function getAbsenceUnit()
    {
        return $this->container['absence_unit'];
    }

    /**
     * Sets absence_unit
     *
     * @param int|null $absence_unit absence_unit
     *
     * @return self
     */
    public function setAbsenceUnit($absence_unit)
    {
        if (is_null($absence_unit)) {
            throw new \InvalidArgumentException('non-nullable absence_unit cannot be null');
        }
        $this->container['absence_unit'] = $absence_unit;

        return $this;
    }

    /**
     * Gets absence_hours
     *
     * @return int|null
     */
    public function getAbsenceHours()
    {
        return $this->container['absence_hours'];
    }

    /**
     * Sets absence_hours
     *
     * @param int|null $absence_hours absence_hours
     *
     * @return self
     */
    public function setAbsenceHours($absence_hours)
    {
        if (is_null($absence_hours)) {
            throw new \InvalidArgumentException('non-nullable absence_hours cannot be null');
        }
        $this->container['absence_hours'] = $absence_hours;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets e_tag
     *
     * @return string|null
     */
    public function getETag()
    {
        return $this->container['e_tag'];
    }

    /**
     * Sets e_tag
     *
     * @param string|null $e_tag e_tag
     *
     * @return self
     */
    public function setETag($e_tag)
    {
        if (is_null($e_tag)) {
            throw new \InvalidArgumentException('non-nullable e_tag cannot be null');
        }
        $this->container['e_tag'] = $e_tag;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted is_deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        if (is_null($is_deleted)) {
            throw new \InvalidArgumentException('non-nullable is_deleted cannot be null');
        }
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets class_name
     *
     * @return string|null
     */
    public function getClassName()
    {
        return $this->container['class_name'];
    }

    /**
     * Sets class_name
     *
     * @param string|null $class_name class_name
     *
     * @return self
     */
    public function setClassName($class_name)
    {
        if (is_null($class_name)) {
            throw new \InvalidArgumentException('non-nullable class_name cannot be null');
        }
        $this->container['class_name'] = $class_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


