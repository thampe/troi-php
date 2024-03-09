<?php
/**
 * ApiService
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
 * ApiService Class Doc Comment
 *
 * @category Class
 * @package  Troi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiService implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'client' => '\Troi\Model\ApiClient',
        'customer' => '\Troi\Model\ApiCustomer',
        'project' => '\Troi\Model\ApiProject',
        'description' => 'string',
        'internal_description' => 'string',
        'root_id' => 'int',
        'unit_id' => 'int',
        'purchase_price' => 'float',
        'sale_price' => 'float',
        'account_id' => 'int',
        'account' => '\Troi\Model\ApiAccount',
        'cost_center_id' => 'int',
        'service_fee_id' => 'int',
        'item_number' => 'int',
        'source' => 'string',
        'type' => 'int',
        'is_npo' => 'bool',
        'is_os' => 'bool',
        'is_ap' => 'bool',
        'is_ksk' => 'bool',
        'is_default' => 'bool',
        'is_dropdown_visible' => 'bool',
        'is_closed_for_time_recording' => 'bool',
        'is_deleted' => 'bool',
        'tax_rate' => 'bool',
        'id' => 'string',
        'path' => 'string',
        'e_tag' => 'string',
        'is_active' => 'bool',
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
        'name' => null,
        'client' => null,
        'customer' => null,
        'project' => null,
        'description' => null,
        'internal_description' => null,
        'root_id' => null,
        'unit_id' => null,
        'purchase_price' => null,
        'sale_price' => null,
        'account_id' => null,
        'account' => null,
        'cost_center_id' => null,
        'service_fee_id' => null,
        'item_number' => null,
        'source' => null,
        'type' => null,
        'is_npo' => null,
        'is_os' => null,
        'is_ap' => null,
        'is_ksk' => null,
        'is_default' => null,
        'is_dropdown_visible' => null,
        'is_closed_for_time_recording' => null,
        'is_deleted' => null,
        'tax_rate' => null,
        'id' => null,
        'path' => null,
        'e_tag' => null,
        'is_active' => null,
        'class_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'client' => false,
        'customer' => false,
        'project' => false,
        'description' => false,
        'internal_description' => false,
        'root_id' => false,
        'unit_id' => false,
        'purchase_price' => false,
        'sale_price' => false,
        'account_id' => false,
        'account' => false,
        'cost_center_id' => false,
        'service_fee_id' => false,
        'item_number' => false,
        'source' => false,
        'type' => false,
        'is_npo' => false,
        'is_os' => false,
        'is_ap' => false,
        'is_ksk' => false,
        'is_default' => false,
        'is_dropdown_visible' => false,
        'is_closed_for_time_recording' => false,
        'is_deleted' => false,
        'tax_rate' => false,
        'id' => false,
        'path' => false,
        'e_tag' => false,
        'is_active' => false,
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
        'name' => 'Name',
        'client' => 'Client',
        'customer' => 'Customer',
        'project' => 'Project',
        'description' => 'Description',
        'internal_description' => 'InternalDescription',
        'root_id' => 'RootId',
        'unit_id' => 'UnitId',
        'purchase_price' => 'PurchasePrice',
        'sale_price' => 'SalePrice',
        'account_id' => 'AccountId',
        'account' => 'Account',
        'cost_center_id' => 'CostCenterId',
        'service_fee_id' => 'ServiceFeeId',
        'item_number' => 'ItemNumber',
        'source' => 'Source',
        'type' => 'Type',
        'is_npo' => 'IsNpo',
        'is_os' => 'IsOs',
        'is_ap' => 'IsAp',
        'is_ksk' => 'IsKsk',
        'is_default' => 'IsDefault',
        'is_dropdown_visible' => 'IsDropdownVisible',
        'is_closed_for_time_recording' => 'IsClosedForTimeRecording',
        'is_deleted' => 'IsDeleted',
        'tax_rate' => 'TaxRate',
        'id' => 'id',
        'path' => 'Path',
        'e_tag' => 'ETag',
        'is_active' => 'IsActive',
        'class_name' => 'ClassName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'client' => 'setClient',
        'customer' => 'setCustomer',
        'project' => 'setProject',
        'description' => 'setDescription',
        'internal_description' => 'setInternalDescription',
        'root_id' => 'setRootId',
        'unit_id' => 'setUnitId',
        'purchase_price' => 'setPurchasePrice',
        'sale_price' => 'setSalePrice',
        'account_id' => 'setAccountId',
        'account' => 'setAccount',
        'cost_center_id' => 'setCostCenterId',
        'service_fee_id' => 'setServiceFeeId',
        'item_number' => 'setItemNumber',
        'source' => 'setSource',
        'type' => 'setType',
        'is_npo' => 'setIsNpo',
        'is_os' => 'setIsOs',
        'is_ap' => 'setIsAp',
        'is_ksk' => 'setIsKsk',
        'is_default' => 'setIsDefault',
        'is_dropdown_visible' => 'setIsDropdownVisible',
        'is_closed_for_time_recording' => 'setIsClosedForTimeRecording',
        'is_deleted' => 'setIsDeleted',
        'tax_rate' => 'setTaxRate',
        'id' => 'setId',
        'path' => 'setPath',
        'e_tag' => 'setETag',
        'is_active' => 'setIsActive',
        'class_name' => 'setClassName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'client' => 'getClient',
        'customer' => 'getCustomer',
        'project' => 'getProject',
        'description' => 'getDescription',
        'internal_description' => 'getInternalDescription',
        'root_id' => 'getRootId',
        'unit_id' => 'getUnitId',
        'purchase_price' => 'getPurchasePrice',
        'sale_price' => 'getSalePrice',
        'account_id' => 'getAccountId',
        'account' => 'getAccount',
        'cost_center_id' => 'getCostCenterId',
        'service_fee_id' => 'getServiceFeeId',
        'item_number' => 'getItemNumber',
        'source' => 'getSource',
        'type' => 'getType',
        'is_npo' => 'getIsNpo',
        'is_os' => 'getIsOs',
        'is_ap' => 'getIsAp',
        'is_ksk' => 'getIsKsk',
        'is_default' => 'getIsDefault',
        'is_dropdown_visible' => 'getIsDropdownVisible',
        'is_closed_for_time_recording' => 'getIsClosedForTimeRecording',
        'is_deleted' => 'getIsDeleted',
        'tax_rate' => 'getTaxRate',
        'id' => 'getId',
        'path' => 'getPath',
        'e_tag' => 'getETag',
        'is_active' => 'getIsActive',
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

    public const SOURCE_S = 'S';
    public const SOURCE_M = 'M';
    public const SOURCE_P = 'P';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_S,
            self::SOURCE_M,
            self::SOURCE_P,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('client', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('project', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('internal_description', $data ?? [], null);
        $this->setIfExists('root_id', $data ?? [], null);
        $this->setIfExists('unit_id', $data ?? [], null);
        $this->setIfExists('purchase_price', $data ?? [], null);
        $this->setIfExists('sale_price', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('cost_center_id', $data ?? [], null);
        $this->setIfExists('service_fee_id', $data ?? [], null);
        $this->setIfExists('item_number', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('is_npo', $data ?? [], null);
        $this->setIfExists('is_os', $data ?? [], null);
        $this->setIfExists('is_ap', $data ?? [], null);
        $this->setIfExists('is_ksk', $data ?? [], null);
        $this->setIfExists('is_default', $data ?? [], null);
        $this->setIfExists('is_dropdown_visible', $data ?? [], null);
        $this->setIfExists('is_closed_for_time_recording', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('tax_rate', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('e_tag', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
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

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
                implode("', '", $allowedValues)
            );
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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \Troi\Model\ApiClient|null
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Troi\Model\ApiClient|null $client client
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
     * Gets customer
     *
     * @return \Troi\Model\ApiCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Troi\Model\ApiCustomer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Troi\Model\ApiProject|null
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Troi\Model\ApiProject|null $project project
     *
     * @return self
     */
    public function setProject($project)
    {
        if (is_null($project)) {
            throw new \InvalidArgumentException('non-nullable project cannot be null');
        }
        $this->container['project'] = $project;

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
     * Gets internal_description
     *
     * @return string|null
     */
    public function getInternalDescription()
    {
        return $this->container['internal_description'];
    }

    /**
     * Sets internal_description
     *
     * @param string|null $internal_description internal_description
     *
     * @return self
     */
    public function setInternalDescription($internal_description)
    {
        if (is_null($internal_description)) {
            throw new \InvalidArgumentException('non-nullable internal_description cannot be null');
        }
        $this->container['internal_description'] = $internal_description;

        return $this;
    }

    /**
     * Gets root_id
     *
     * @return int|null
     */
    public function getRootId()
    {
        return $this->container['root_id'];
    }

    /**
     * Sets root_id
     *
     * @param int|null $root_id root_id
     *
     * @return self
     */
    public function setRootId($root_id)
    {
        if (is_null($root_id)) {
            throw new \InvalidArgumentException('non-nullable root_id cannot be null');
        }
        $this->container['root_id'] = $root_id;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return int|null
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param int|null $unit_id unit_id
     *
     * @return self
     */
    public function setUnitId($unit_id)
    {
        if (is_null($unit_id)) {
            throw new \InvalidArgumentException('non-nullable unit_id cannot be null');
        }
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return float|null
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param float|null $purchase_price purchase_price
     *
     * @return self
     */
    public function setPurchasePrice($purchase_price)
    {
        if (is_null($purchase_price)) {
            throw new \InvalidArgumentException('non-nullable purchase_price cannot be null');
        }
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return float|null
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param float|null $sale_price sale_price
     *
     * @return self
     */
    public function setSalePrice($sale_price)
    {
        if (is_null($sale_price)) {
            throw new \InvalidArgumentException('non-nullable sale_price cannot be null');
        }
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id account_id
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Troi\Model\ApiAccount|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Troi\Model\ApiAccount|null $account account
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets cost_center_id
     *
     * @return int|null
     */
    public function getCostCenterId()
    {
        return $this->container['cost_center_id'];
    }

    /**
     * Sets cost_center_id
     *
     * @param int|null $cost_center_id cost_center_id
     *
     * @return self
     */
    public function setCostCenterId($cost_center_id)
    {
        if (is_null($cost_center_id)) {
            throw new \InvalidArgumentException('non-nullable cost_center_id cannot be null');
        }
        $this->container['cost_center_id'] = $cost_center_id;

        return $this;
    }

    /**
     * Gets service_fee_id
     *
     * @return int|null
     */
    public function getServiceFeeId()
    {
        return $this->container['service_fee_id'];
    }

    /**
     * Sets service_fee_id
     *
     * @param int|null $service_fee_id service_fee_id
     *
     * @return self
     */
    public function setServiceFeeId($service_fee_id)
    {
        if (is_null($service_fee_id)) {
            throw new \InvalidArgumentException('non-nullable service_fee_id cannot be null');
        }
        $this->container['service_fee_id'] = $service_fee_id;

        return $this;
    }

    /**
     * Gets item_number
     *
     * @return int|null
     */
    public function getItemNumber()
    {
        return $this->container['item_number'];
    }

    /**
     * Sets item_number
     *
     * @param int|null $item_number item_number
     *
     * @return self
     */
    public function setItemNumber($item_number)
    {
        if (is_null($item_number)) {
            throw new \InvalidArgumentException('non-nullable item_number cannot be null');
        }
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source `S` = service source service `M` = service source material `P` = service source position
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_npo
     *
     * @return bool|null
     */
    public function getIsNpo()
    {
        return $this->container['is_npo'];
    }

    /**
     * Sets is_npo
     *
     * @param bool|null $is_npo is_npo
     *
     * @return self
     */
    public function setIsNpo($is_npo)
    {
        if (is_null($is_npo)) {
            throw new \InvalidArgumentException('non-nullable is_npo cannot be null');
        }
        $this->container['is_npo'] = $is_npo;

        return $this;
    }

    /**
     * Gets is_os
     *
     * @return bool|null
     */
    public function getIsOs()
    {
        return $this->container['is_os'];
    }

    /**
     * Sets is_os
     *
     * @param bool|null $is_os is_os
     *
     * @return self
     */
    public function setIsOs($is_os)
    {
        if (is_null($is_os)) {
            throw new \InvalidArgumentException('non-nullable is_os cannot be null');
        }
        $this->container['is_os'] = $is_os;

        return $this;
    }

    /**
     * Gets is_ap
     *
     * @return bool|null
     */
    public function getIsAp()
    {
        return $this->container['is_ap'];
    }

    /**
     * Sets is_ap
     *
     * @param bool|null $is_ap is_ap
     *
     * @return self
     */
    public function setIsAp($is_ap)
    {
        if (is_null($is_ap)) {
            throw new \InvalidArgumentException('non-nullable is_ap cannot be null');
        }
        $this->container['is_ap'] = $is_ap;

        return $this;
    }

    /**
     * Gets is_ksk
     *
     * @return bool|null
     */
    public function getIsKsk()
    {
        return $this->container['is_ksk'];
    }

    /**
     * Sets is_ksk
     *
     * @param bool|null $is_ksk is_ksk
     *
     * @return self
     */
    public function setIsKsk($is_ksk)
    {
        if (is_null($is_ksk)) {
            throw new \InvalidArgumentException('non-nullable is_ksk cannot be null');
        }
        $this->container['is_ksk'] = $is_ksk;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default is_default
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        if (is_null($is_default)) {
            throw new \InvalidArgumentException('non-nullable is_default cannot be null');
        }
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets is_dropdown_visible
     *
     * @return bool|null
     */
    public function getIsDropdownVisible()
    {
        return $this->container['is_dropdown_visible'];
    }

    /**
     * Sets is_dropdown_visible
     *
     * @param bool|null $is_dropdown_visible is_dropdown_visible
     *
     * @return self
     */
    public function setIsDropdownVisible($is_dropdown_visible)
    {
        if (is_null($is_dropdown_visible)) {
            throw new \InvalidArgumentException('non-nullable is_dropdown_visible cannot be null');
        }
        $this->container['is_dropdown_visible'] = $is_dropdown_visible;

        return $this;
    }

    /**
     * Gets is_closed_for_time_recording
     *
     * @return bool|null
     */
    public function getIsClosedForTimeRecording()
    {
        return $this->container['is_closed_for_time_recording'];
    }

    /**
     * Sets is_closed_for_time_recording
     *
     * @param bool|null $is_closed_for_time_recording is_closed_for_time_recording
     *
     * @return self
     */
    public function setIsClosedForTimeRecording($is_closed_for_time_recording)
    {
        if (is_null($is_closed_for_time_recording)) {
            throw new \InvalidArgumentException('non-nullable is_closed_for_time_recording cannot be null');
        }
        $this->container['is_closed_for_time_recording'] = $is_closed_for_time_recording;

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
     * Gets tax_rate
     *
     * @return bool|null
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param bool|null $tax_rate tax_rate
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


