<?php
/**
 * CustomersPostRequest
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
 * CustomersPostRequest Class Doc Comment
 *
 * @category Class
 * @package  Troi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomersPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_customers_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client' => '\Troi\Model\ApiSyncItem',
        'debitor' => '\Troi\Model\ApiSyncItem',
        'tax_rate' => '\Troi\Model\ApiSyncItem',
        'tax_rate_display_mode' => 'int',
        'payment_term' => '\Troi\Model\ApiSyncItem',
        'is_active' => 'bool',
        'contact' => '\Troi\Model\ApiSyncItem',
        'shortcut' => 'string',
        'number' => 'string',
        'vat_number' => 'string',
        'tax_number' => 'string',
        'name' => 'string',
        'customer_default_email' => 'string',
        'file_share_name' => 'string',
        'id' => 'string',
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
        'client' => null,
        'debitor' => null,
        'tax_rate' => null,
        'tax_rate_display_mode' => null,
        'payment_term' => null,
        'is_active' => null,
        'contact' => null,
        'shortcut' => null,
        'number' => null,
        'vat_number' => null,
        'tax_number' => null,
        'name' => null,
        'customer_default_email' => null,
        'file_share_name' => null,
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
        'client' => false,
        'debitor' => false,
        'tax_rate' => false,
        'tax_rate_display_mode' => false,
        'payment_term' => false,
        'is_active' => false,
        'contact' => false,
        'shortcut' => false,
        'number' => false,
        'vat_number' => false,
        'tax_number' => false,
        'name' => false,
        'customer_default_email' => false,
        'file_share_name' => false,
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
        'client' => 'Client',
        'debitor' => 'Debitor',
        'tax_rate' => 'TaxRate',
        'tax_rate_display_mode' => 'TaxRateDisplayMode',
        'payment_term' => 'PaymentTerm',
        'is_active' => 'IsActive',
        'contact' => 'Contact',
        'shortcut' => 'Shortcut',
        'number' => 'Number',
        'vat_number' => 'VatNumber',
        'tax_number' => 'TaxNumber',
        'name' => 'Name',
        'customer_default_email' => 'customerDefaultEmail',
        'file_share_name' => 'FileShareName',
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
        'client' => 'setClient',
        'debitor' => 'setDebitor',
        'tax_rate' => 'setTaxRate',
        'tax_rate_display_mode' => 'setTaxRateDisplayMode',
        'payment_term' => 'setPaymentTerm',
        'is_active' => 'setIsActive',
        'contact' => 'setContact',
        'shortcut' => 'setShortcut',
        'number' => 'setNumber',
        'vat_number' => 'setVatNumber',
        'tax_number' => 'setTaxNumber',
        'name' => 'setName',
        'customer_default_email' => 'setCustomerDefaultEmail',
        'file_share_name' => 'setFileShareName',
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
        'client' => 'getClient',
        'debitor' => 'getDebitor',
        'tax_rate' => 'getTaxRate',
        'tax_rate_display_mode' => 'getTaxRateDisplayMode',
        'payment_term' => 'getPaymentTerm',
        'is_active' => 'getIsActive',
        'contact' => 'getContact',
        'shortcut' => 'getShortcut',
        'number' => 'getNumber',
        'vat_number' => 'getVatNumber',
        'tax_number' => 'getTaxNumber',
        'name' => 'getName',
        'customer_default_email' => 'getCustomerDefaultEmail',
        'file_share_name' => 'getFileShareName',
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
        $this->setIfExists('client', $data ?? [], null);
        $this->setIfExists('debitor', $data ?? [], null);
        $this->setIfExists('tax_rate', $data ?? [], null);
        $this->setIfExists('tax_rate_display_mode', $data ?? [], null);
        $this->setIfExists('payment_term', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('shortcut', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('vat_number', $data ?? [], null);
        $this->setIfExists('tax_number', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('customer_default_email', $data ?? [], null);
        $this->setIfExists('file_share_name', $data ?? [], null);
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

        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets client
     *
     * @return \Troi\Model\ApiSyncItem
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Troi\Model\ApiSyncItem $client client
     *
     * @return self
     */
    public function setClient($client)
    {
        if (is_null($client)) {
            throw new \InvalidArgumentException('non-nullable client cannot be null');
        }
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets debitor
     *
     * @return \Troi\Model\ApiSyncItem|null
     */
    public function getDebitor()
    {
        return $this->container['debitor'];
    }

    /**
     * Sets debitor
     *
     * @param \Troi\Model\ApiSyncItem|null $debitor debitor
     *
     * @return self
     */
    public function setDebitor($debitor)
    {
        if (is_null($debitor)) {
            throw new \InvalidArgumentException('non-nullable debitor cannot be null');
        }
        $this->container['debitor'] = $debitor;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return \Troi\Model\ApiSyncItem|null
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param \Troi\Model\ApiSyncItem|null $tax_rate tax_rate
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {
        if (is_null($tax_rate)) {
            throw new \InvalidArgumentException('non-nullable tax_rate cannot be null');
        }
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_rate_display_mode
     *
     * @return int|null
     */
    public function getTaxRateDisplayMode()
    {
        return $this->container['tax_rate_display_mode'];
    }

    /**
     * Sets tax_rate_display_mode
     *
     * @param int|null $tax_rate_display_mode tax_rate_display_mode
     *
     * @return self
     */
    public function setTaxRateDisplayMode($tax_rate_display_mode)
    {
        if (is_null($tax_rate_display_mode)) {
            throw new \InvalidArgumentException('non-nullable tax_rate_display_mode cannot be null');
        }
        $this->container['tax_rate_display_mode'] = $tax_rate_display_mode;

        return $this;
    }

    /**
     * Gets payment_term
     *
     * @return \Troi\Model\ApiSyncItem|null
     */
    public function getPaymentTerm()
    {
        return $this->container['payment_term'];
    }

    /**
     * Sets payment_term
     *
     * @param \Troi\Model\ApiSyncItem|null $payment_term payment_term
     *
     * @return self
     */
    public function setPaymentTerm($payment_term)
    {
        if (is_null($payment_term)) {
            throw new \InvalidArgumentException('non-nullable payment_term cannot be null');
        }
        $this->container['payment_term'] = $payment_term;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Troi\Model\ApiSyncItem|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Troi\Model\ApiSyncItem|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            throw new \InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets shortcut
     *
     * @return string|null
     */
    public function getShortcut()
    {
        return $this->container['shortcut'];
    }

    /**
     * Sets shortcut
     *
     * @param string|null $shortcut shortcut
     *
     * @return self
     */
    public function setShortcut($shortcut)
    {
        if (is_null($shortcut)) {
            throw new \InvalidArgumentException('non-nullable shortcut cannot be null');
        }
        $this->container['shortcut'] = $shortcut;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string|null $vat_number vat_number
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        if (is_null($vat_number)) {
            throw new \InvalidArgumentException('non-nullable vat_number cannot be null');
        }
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets tax_number
     *
     * @return string|null
     */
    public function getTaxNumber()
    {
        return $this->container['tax_number'];
    }

    /**
     * Sets tax_number
     *
     * @param string|null $tax_number tax_number
     *
     * @return self
     */
    public function setTaxNumber($tax_number)
    {
        if (is_null($tax_number)) {
            throw new \InvalidArgumentException('non-nullable tax_number cannot be null');
        }
        $this->container['tax_number'] = $tax_number;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets customer_default_email
     *
     * @return string|null
     */
    public function getCustomerDefaultEmail()
    {
        return $this->container['customer_default_email'];
    }

    /**
     * Sets customer_default_email
     *
     * @param string|null $customer_default_email customer_default_email
     *
     * @return self
     */
    public function setCustomerDefaultEmail($customer_default_email)
    {
        if (is_null($customer_default_email)) {
            throw new \InvalidArgumentException('non-nullable customer_default_email cannot be null');
        }
        $this->container['customer_default_email'] = $customer_default_email;

        return $this;
    }

    /**
     * Gets file_share_name
     *
     * @return string|null
     */
    public function getFileShareName()
    {
        return $this->container['file_share_name'];
    }

    /**
     * Sets file_share_name
     *
     * @param string|null $file_share_name file_share_name
     *
     * @return self
     */
    public function setFileShareName($file_share_name)
    {
        if (is_null($file_share_name)) {
            throw new \InvalidArgumentException('non-nullable file_share_name cannot be null');
        }
        $this->container['file_share_name'] = $file_share_name;

        return $this;
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
     * @param string|null $id id
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
     * @param string|null $path /customers/1
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


