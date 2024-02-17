# Troi\AccountingEntryCollectionsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountingEntryCollectionsGet()**](AccountingEntryCollectionsApi.md#accountingEntryCollectionsGet) | **GET** /accountingEntryCollections | Fetch all accounting entry collections for the given clientId |
| [**accountingEntryCollectionsIdDelete()**](AccountingEntryCollectionsApi.md#accountingEntryCollectionsIdDelete) | **DELETE** /accountingEntryCollections/{id} | Delete accounting entry collection |
| [**accountingEntryCollectionsIdGet()**](AccountingEntryCollectionsApi.md#accountingEntryCollectionsIdGet) | **GET** /accountingEntryCollections/{id} | Fetch accounting entry collection for the given accounting entry collection ID |
| [**accountingEntryCollectionsIdPut()**](AccountingEntryCollectionsApi.md#accountingEntryCollectionsIdPut) | **PUT** /accountingEntryCollections/{id} | Update accounting entry collection |
| [**accountingEntryCollectionsPost()**](AccountingEntryCollectionsApi.md#accountingEntryCollectionsPost) | **POST** /accountingEntryCollections | Save accounting entry collections |


## `accountingEntryCollectionsGet()`

```php
accountingEntryCollectionsGet($client_id, $type, $year): \Troi\Model\ApiAccountingEntryCollection[]
```

Fetch all accounting entry collections for the given clientId

Fetch all accounting entry collections for the given clientId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntryCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Fetch all accounting entry collections for the given clientId
$type = 0; // int | Fetch all accounting entry collections for the given type 0 = export collections 1 = import collections
$year = 2019; // int | Fetch all accounting entry collections for the given year

try {
    $result = $apiInstance->accountingEntryCollectionsGet($client_id, $type, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntryCollectionsApi->accountingEntryCollectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Fetch all accounting entry collections for the given clientId | |
| **type** | **int**| Fetch all accounting entry collections for the given type 0 &#x3D; export collections 1 &#x3D; import collections | [optional] |
| **year** | **int**| Fetch all accounting entry collections for the given year | [optional] |

### Return type

[**\Troi\Model\ApiAccountingEntryCollection[]**](../Model/ApiAccountingEntryCollection.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryCollectionsIdDelete()`

```php
accountingEntryCollectionsIdDelete($id): int
```

Delete accounting entry collection

Delete accounting entry collection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntryCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Accounting entry collection id

try {
    $result = $apiInstance->accountingEntryCollectionsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntryCollectionsApi->accountingEntryCollectionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Accounting entry collection id | |

### Return type

**int**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryCollectionsIdGet()`

```php
accountingEntryCollectionsIdGet($id): \Troi\Model\ApiAccountingEntryCollection
```

Fetch accounting entry collection for the given accounting entry collection ID

Fetch accounting entry collection for the given accounting entry collection ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntryCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Accounting entry collection id

try {
    $result = $apiInstance->accountingEntryCollectionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntryCollectionsApi->accountingEntryCollectionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Accounting entry collection id | |

### Return type

[**\Troi\Model\ApiAccountingEntryCollection**](../Model/ApiAccountingEntryCollection.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryCollectionsIdPut()`

```php
accountingEntryCollectionsIdPut($id, $api_accounting_entry_collection): \Troi\Model\ApiSyncItem[]
```

Update accounting entry collection

Update accounting entry collection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntryCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Accounting entry collection id
$api_accounting_entry_collection = new \Troi\Model\ApiAccountingEntryCollection(); // \Troi\Model\ApiAccountingEntryCollection

try {
    $result = $apiInstance->accountingEntryCollectionsIdPut($id, $api_accounting_entry_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntryCollectionsApi->accountingEntryCollectionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Accounting entry collection id | |
| **api_accounting_entry_collection** | [**\Troi\Model\ApiAccountingEntryCollection**](../Model/ApiAccountingEntryCollection.md)|  | |

### Return type

[**\Troi\Model\ApiSyncItem[]**](../Model/ApiSyncItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryCollectionsPost()`

```php
accountingEntryCollectionsPost($accounting_entry_collections_post_request): \Troi\Model\ApiSyncItem[]
```

Save accounting entry collections

Save accounting entry collections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntryCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_entry_collections_post_request = new \Troi\Model\AccountingEntryCollectionsPostRequest(); // \Troi\Model\AccountingEntryCollectionsPostRequest

try {
    $result = $apiInstance->accountingEntryCollectionsPost($accounting_entry_collections_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntryCollectionsApi->accountingEntryCollectionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_entry_collections_post_request** | [**\Troi\Model\AccountingEntryCollectionsPostRequest**](../Model/AccountingEntryCollectionsPostRequest.md)|  | |

### Return type

[**\Troi\Model\ApiSyncItem[]**](../Model/ApiSyncItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
