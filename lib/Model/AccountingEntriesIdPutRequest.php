<?php
/**
 * AccountingEntriesIdPutRequest
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
 * AccountingEntriesIdPutRequest Class Doc Comment
 *
 * @category Class
 * @package  Troi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountingEntriesIdPutRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_accountingEntries__id__put_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client' => '\Troi\Model\ApiSyncItem',
        'cost_center' => '\Troi\Model\ApiSyncItem',
        'cost_center1' => '\Troi\Model\ApiSyncItem',
        'cost_center2' => '\Troi\Model\ApiSyncItem',
        'amount' => 'int',
        'account' => '\Troi\Model\ApiSyncItem',
        'contra_account' => '\Troi\Model\ApiSyncItem',
        'accounting_entry_collection' => 'object',
        'document_date' => 'string',
        'document_number' => 'string',
        'document_number2' => 'string',
        'dms_link' => 'string',
        'besr_reference_number' => 'string',
        'description' => 'string',
        'calculation_position' => '\Troi\Model\ApiSyncItem',
        'tax_rate' => '\Troi\Model\ApiSyncItem',
        'location' => 'int',
        'is_not_billable' => 'bool',
        'is_billed' => 'bool',
        'is_paid' => 'bool',
        'is_ksk' => 'bool',
        'is_split_base' => 'bool',
        'parent_id' => 'int',
        'payment_term' => '\Troi\Model\ApiPaymentTerm',
        'project_number' => 'string',
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
        'client' => null,
        'cost_center' => null,
        'cost_center1' => null,
        'cost_center2' => null,
        'amount' => null,
        'account' => null,
        'contra_account' => null,
        'accounting_entry_collection' => null,
        'document_date' => null,
        'document_number' => null,
        'document_number2' => null,
        'dms_link' => null,
        'besr_reference_number' => null,
        'description' => null,
        'calculation_position' => null,
        'tax_rate' => null,
        'location' => null,
        'is_not_billable' => null,
        'is_billed' => null,
        'is_paid' => null,
        'is_ksk' => null,
        'is_split_base' => null,
        'parent_id' => null,
        'payment_term' => null,
        'project_number' => null,
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
        'client' => false,
        'cost_center' => false,
        'cost_center1' => false,
        'cost_center2' => false,
        'amount' => false,
        'account' => false,
        'contra_account' => false,
        'accounting_entry_collection' => false,
        'document_date' => false,
        'document_number' => false,
        'document_number2' => false,
        'dms_link' => false,
        'besr_reference_number' => false,
        'description' => false,
        'calculation_position' => false,
        'tax_rate' => false,
        'location' => false,
        'is_not_billable' => false,
        'is_billed' => false,
        'is_paid' => false,
        'is_ksk' => false,
        'is_split_base' => false,
        'parent_id' => false,
        'payment_term' => false,
        'project_number' => false,
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
        'client' => 'Client',
        'cost_center' => 'CostCenter',
        'cost_center1' => 'CostCenter1',
        'cost_center2' => 'CostCenter2',
        'amount' => 'Amount',
        'account' => 'Account',
        'contra_account' => 'ContraAccount',
        'accounting_entry_collection' => 'AccountingEntryCollection',
        'document_date' => 'DocumentDate',
        'document_number' => 'DocumentNumber',
        'document_number2' => 'DocumentNumber2',
        'dms_link' => 'DmsLink',
        'besr_reference_number' => 'BesrReferenceNumber',
        'description' => 'Description',
        'calculation_position' => 'CalculationPosition',
        'tax_rate' => 'TaxRate',
        'location' => 'Location',
        'is_not_billable' => 'IsNotBillable',
        'is_billed' => 'IsBilled',
        'is_paid' => 'IsPaid',
        'is_ksk' => 'IsKsk',
        'is_split_base' => 'IsSplitBase',
        'parent_id' => 'ParentId',
        'payment_term' => 'PaymentTerm',
        'project_number' => 'ProjectNumber',
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
        'client' => 'setClient',
        'cost_center' => 'setCostCenter',
        'cost_center1' => 'setCostCenter1',
        'cost_center2' => 'setCostCenter2',
        'amount' => 'setAmount',
        'account' => 'setAccount',
        'contra_account' => 'setContraAccount',
        'accounting_entry_collection' => 'setAccountingEntryCollection',
        'document_date' => 'setDocumentDate',
        'document_number' => 'setDocumentNumber',
        'document_number2' => 'setDocumentNumber2',
        'dms_link' => 'setDmsLink',
        'besr_reference_number' => 'setBesrReferenceNumber',
        'description' => 'setDescription',
        'calculation_position' => 'setCalculationPosition',
        'tax_rate' => 'setTaxRate',
        'location' => 'setLocation',
        'is_not_billable' => 'setIsNotBillable',
        'is_billed' => 'setIsBilled',
        'is_paid' => 'setIsPaid',
        'is_ksk' => 'setIsKsk',
        'is_split_base' => 'setIsSplitBase',
        'parent_id' => 'setParentId',
        'payment_term' => 'setPaymentTerm',
        'project_number' => 'setProjectNumber',
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
        'client' => 'getClient',
        'cost_center' => 'getCostCenter',
        'cost_center1' => 'getCostCenter1',
        'cost_center2' => 'getCostCenter2',
        'amount' => 'getAmount',
        'account' => 'getAccount',
        'contra_account' => 'getContraAccount',
        'accounting_entry_collection' => 'getAccountingEntryCollection',
        'document_date' => 'getDocumentDate',
        'document_number' => 'getDocumentNumber',
        'document_number2' => 'getDocumentNumber2',
        'dms_link' => 'getDmsLink',
        'besr_reference_number' => 'getBesrReferenceNumber',
        'description' => 'getDescription',
        'calculation_position' => 'getCalculationPosition',
        'tax_rate' => 'getTaxRate',
        'location' => 'getLocation',
        'is_not_billable' => 'getIsNotBillable',
        'is_billed' => 'getIsBilled',
        'is_paid' => 'getIsPaid',
        'is_ksk' => 'getIsKsk',
        'is_split_base' => 'getIsSplitBase',
        'parent_id' => 'getParentId',
        'payment_term' => 'getPaymentTerm',
        'project_number' => 'getProjectNumber',
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
        $this->setIfExists('client', $data ?? [], null);
        $this->setIfExists('cost_center', $data ?? [], null);
        $this->setIfExists('cost_center1', $data ?? [], null);
        $this->setIfExists('cost_center2', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('contra_account', $data ?? [], null);
        $this->setIfExists('accounting_entry_collection', $data ?? [], null);
        $this->setIfExists('document_date', $data ?? [], null);
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('document_number2', $data ?? [], null);
        $this->setIfExists('dms_link', $data ?? [], null);
        $this->setIfExists('besr_reference_number', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('calculation_position', $data ?? [], null);
        $this->setIfExists('tax_rate', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('is_not_billable', $data ?? [], null);
        $this->setIfExists('is_billed', $data ?? [], null);
        $this->setIfExists('is_paid', $data ?? [], null);
        $this->setIfExists('is_ksk', $data ?? [], null);
        $this->setIfExists('is_split_base', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('payment_term', $data ?? [], null);
        $this->setIfExists('project_number', $data ?? [], null);
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

        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['contra_account'] === null) {
            $invalidProperties[] = "'contra_account' can't be null";
        }
        if ($this->container['accounting_entry_collection'] === null) {
            $invalidProperties[] = "'accounting_entry_collection' can't be null";
        }
        if ($this->container['calculation_position'] === null) {
            $invalidProperties[] = "'calculation_position' can't be null";
        }
        if ($this->container['tax_rate'] === null) {
            $invalidProperties[] = "'tax_rate' can't be null";
        }
        if ($this->container['payment_term'] === null) {
            $invalidProperties[] = "'payment_term' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
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
     * Gets cost_center
     *
     * @return \Troi\Model\ApiSyncItem|null
     */
    public function getCostCenter()
    {
        return $this->container['cost_center'];
    }

    /**
     * Sets cost_center
     *
     * @param \Troi\Model\ApiSyncItem|null $cost_center cost_center
     *
     * @return self
     */
    public function setCostCenter($cost_center)
    {
        if (is_null($cost_center)) {
            throw new \InvalidArgumentException('non-nullable cost_center cannot be null');
        }
        $this->container['cost_center'] = $cost_center;

        return $this;
    }

    /**
     * Gets cost_center1
     *
     * @return \Troi\Model\ApiSyncItem|null
     */
    public function getCostCenter1()
    {
        return $this->container['cost_center1'];
    }

    /**
     * Sets cost_center1
     *
     * @param \Troi\Model\ApiSyncItem|null $cost_center1 cost_center1
     *
     * @return self
     */
    public function setCostCenter1($cost_center1)
    {
        if (is_null($cost_center1)) {
            throw new \InvalidArgumentException('non-nullable cost_center1 cannot be null');
        }
        $this->container['cost_center1'] = $cost_center1;

        return $this;
    }

    /**
     * Gets cost_center2
     *
     * @return \Troi\Model\ApiSyncItem|null
     */
    public function getCostCenter2()
    {
        return $this->container['cost_center2'];
    }

    /**
     * Sets cost_center2
     *
     * @param \Troi\Model\ApiSyncItem|null $cost_center2 cost_center2
     *
     * @return self
     */
    public function setCostCenter2($cost_center2)
    {
        if (is_null($cost_center2)) {
            throw new \InvalidArgumentException('non-nullable cost_center2 cannot be null');
        }
        $this->container['cost_center2'] = $cost_center2;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Troi\Model\ApiSyncItem
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Troi\Model\ApiSyncItem $account account
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
     * Gets contra_account
     *
     * @return \Troi\Model\ApiSyncItem
     */
    public function getContraAccount()
    {
        return $this->container['contra_account'];
    }

    /**
     * Sets contra_account
     *
     * @param \Troi\Model\ApiSyncItem $contra_account contra_account
     *
     * @return self
     */
    public function setContraAccount($contra_account)
    {
        if (is_null($contra_account)) {
            throw new \InvalidArgumentException('non-nullable contra_account cannot be null');
        }
        $this->container['contra_account'] = $contra_account;

        return $this;
    }

    /**
     * Gets accounting_entry_collection
     *
     * @return object
     */
    public function getAccountingEntryCollection()
    {
        return $this->container['accounting_entry_collection'];
    }

    /**
     * Sets accounting_entry_collection
     *
     * @param object $accounting_entry_collection accounting_entry_collection
     *
     * @return self
     */
    public function setAccountingEntryCollection($accounting_entry_collection)
    {
        if (is_null($accounting_entry_collection)) {
            throw new \InvalidArgumentException('non-nullable accounting_entry_collection cannot be null');
        }
        $this->container['accounting_entry_collection'] = $accounting_entry_collection;

        return $this;
    }

    /**
     * Gets document_date
     *
     * @return string|null
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     *
     * @param string|null $document_date document_date
     *
     * @return self
     */
    public function setDocumentDate($document_date)
    {
        if (is_null($document_date)) {
            throw new \InvalidArgumentException('non-nullable document_date cannot be null');
        }
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string|null $document_number document_number
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        if (is_null($document_number)) {
            throw new \InvalidArgumentException('non-nullable document_number cannot be null');
        }
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets document_number2
     *
     * @return string|null
     */
    public function getDocumentNumber2()
    {
        return $this->container['document_number2'];
    }

    /**
     * Sets document_number2
     *
     * @param string|null $document_number2 document_number2
     *
     * @return self
     */
    public function setDocumentNumber2($document_number2)
    {
        if (is_null($document_number2)) {
            throw new \InvalidArgumentException('non-nullable document_number2 cannot be null');
        }
        $this->container['document_number2'] = $document_number2;

        return $this;
    }

    /**
     * Gets dms_link
     *
     * @return string|null
     */
    public function getDmsLink()
    {
        return $this->container['dms_link'];
    }

    /**
     * Sets dms_link
     *
     * @param string|null $dms_link dms_link
     *
     * @return self
     */
    public function setDmsLink($dms_link)
    {
        if (is_null($dms_link)) {
            throw new \InvalidArgumentException('non-nullable dms_link cannot be null');
        }
        $this->container['dms_link'] = $dms_link;

        return $this;
    }

    /**
     * Gets besr_reference_number
     *
     * @return string|null
     */
    public function getBesrReferenceNumber()
    {
        return $this->container['besr_reference_number'];
    }

    /**
     * Sets besr_reference_number
     *
     * @param string|null $besr_reference_number besr_reference_number
     *
     * @return self
     */
    public function setBesrReferenceNumber($besr_reference_number)
    {
        if (is_null($besr_reference_number)) {
            throw new \InvalidArgumentException('non-nullable besr_reference_number cannot be null');
        }
        $this->container['besr_reference_number'] = $besr_reference_number;

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
     * Gets calculation_position
     *
     * @return \Troi\Model\ApiSyncItem
     */
    public function getCalculationPosition()
    {
        return $this->container['calculation_position'];
    }

    /**
     * Sets calculation_position
     *
     * @param \Troi\Model\ApiSyncItem $calculation_position calculation_position
     *
     * @return self
     */
    public function setCalculationPosition($calculation_position)
    {
        if (is_null($calculation_position)) {
            throw new \InvalidArgumentException('non-nullable calculation_position cannot be null');
        }
        $this->container['calculation_position'] = $calculation_position;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return \Troi\Model\ApiSyncItem
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param \Troi\Model\ApiSyncItem $tax_rate tax_rate
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
     * Gets location
     *
     * @return int|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param int|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets is_not_billable
     *
     * @return bool|null
     */
    public function getIsNotBillable()
    {
        return $this->container['is_not_billable'];
    }

    /**
     * Sets is_not_billable
     *
     * @param bool|null $is_not_billable is_not_billable
     *
     * @return self
     */
    public function setIsNotBillable($is_not_billable)
    {
        if (is_null($is_not_billable)) {
            throw new \InvalidArgumentException('non-nullable is_not_billable cannot be null');
        }
        $this->container['is_not_billable'] = $is_not_billable;

        return $this;
    }

    /**
     * Gets is_billed
     *
     * @return bool|null
     */
    public function getIsBilled()
    {
        return $this->container['is_billed'];
    }

    /**
     * Sets is_billed
     *
     * @param bool|null $is_billed is_billed
     *
     * @return self
     */
    public function setIsBilled($is_billed)
    {
        if (is_null($is_billed)) {
            throw new \InvalidArgumentException('non-nullable is_billed cannot be null');
        }
        $this->container['is_billed'] = $is_billed;

        return $this;
    }

    /**
     * Gets is_paid
     *
     * @return bool|null
     */
    public function getIsPaid()
    {
        return $this->container['is_paid'];
    }

    /**
     * Sets is_paid
     *
     * @param bool|null $is_paid is_paid
     *
     * @return self
     */
    public function setIsPaid($is_paid)
    {
        if (is_null($is_paid)) {
            throw new \InvalidArgumentException('non-nullable is_paid cannot be null');
        }
        $this->container['is_paid'] = $is_paid;

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
     * Gets is_split_base
     *
     * @return bool|null
     */
    public function getIsSplitBase()
    {
        return $this->container['is_split_base'];
    }

    /**
     * Sets is_split_base
     *
     * @param bool|null $is_split_base is_split_base
     *
     * @return self
     */
    public function setIsSplitBase($is_split_base)
    {
        if (is_null($is_split_base)) {
            throw new \InvalidArgumentException('non-nullable is_split_base cannot be null');
        }
        $this->container['is_split_base'] = $is_split_base;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets payment_term
     *
     * @return \Troi\Model\ApiPaymentTerm
     */
    public function getPaymentTerm()
    {
        return $this->container['payment_term'];
    }

    /**
     * Sets payment_term
     *
     * @param \Troi\Model\ApiPaymentTerm $payment_term payment_term
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
     * Gets project_number
     *
     * @return string|null
     */
    public function getProjectNumber()
    {
        return $this->container['project_number'];
    }

    /**
     * Sets project_number
     *
     * @param string|null $project_number project_number
     *
     * @return self
     */
    public function setProjectNumber($project_number)
    {
        if (is_null($project_number)) {
            throw new \InvalidArgumentException('non-nullable project_number cannot be null');
        }
        $this->container['project_number'] = $project_number;

        return $this;
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
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
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
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
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

