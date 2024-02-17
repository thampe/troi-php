# Troi\AccountingEntriesApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountingEntriesGet()**](AccountingEntriesApi.md#accountingEntriesGet) | **GET** /accountingEntries | Fetch all Accounting Entries for the given clientId |
| [**accountingEntriesIdDelete()**](AccountingEntriesApi.md#accountingEntriesIdDelete) | **DELETE** /accountingEntries/{id} | Delete Accounting Entry |
| [**accountingEntriesIdGet()**](AccountingEntriesApi.md#accountingEntriesIdGet) | **GET** /accountingEntries/{id} | Fetch Accounting Entry for the given Accounting Entry ID |
| [**accountingEntriesIdPut()**](AccountingEntriesApi.md#accountingEntriesIdPut) | **PUT** /accountingEntries/{id} | Update Accounting Entry Object |
| [**accountingEntriesPost()**](AccountingEntriesApi.md#accountingEntriesPost) | **POST** /accountingEntries | Save Accounting Entry Object |


## `accountingEntriesGet()`

```php
accountingEntriesGet($client_id, $cp_id, $project_id, $accounting_entry_collection_id): \Troi\Model\ApiAccountingEntry[]
```

Fetch all Accounting Entries for the given clientId

Fetch all Accounting Entries for the given clientId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Client id
$cp_id = 1; // int | Fetch all Accounting Entries for the given CalculationPosition ID
$project_id = 1; // int | Fetch all Accounting Entries for the given Project ID
$accounting_entry_collection_id = 1; // int | Fetch all Accounting Entries for the given AccountingEntryCollection ID

try {
    $result = $apiInstance->accountingEntriesGet($client_id, $cp_id, $project_id, $accounting_entry_collection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Client id | |
| **cp_id** | **int**| Fetch all Accounting Entries for the given CalculationPosition ID | [optional] |
| **project_id** | **int**| Fetch all Accounting Entries for the given Project ID | [optional] |
| **accounting_entry_collection_id** | **int**| Fetch all Accounting Entries for the given AccountingEntryCollection ID | [optional] |

### Return type

[**\Troi\Model\ApiAccountingEntry[]**](../Model/ApiAccountingEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntriesIdDelete()`

```php
accountingEntriesIdDelete($id): int
```

Delete Accounting Entry

Delete Accounting Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Accounting entry id

try {
    $result = $apiInstance->accountingEntriesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Accounting entry id | |

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

## `accountingEntriesIdGet()`

```php
accountingEntriesIdGet($id): \Troi\Model\ApiAccountingEntry
```

Fetch Accounting Entry for the given Accounting Entry ID

Fetch Accounting Entry for the given Accounting Entry ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Accounting entry id

try {
    $result = $apiInstance->accountingEntriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Accounting entry id | |

### Return type

[**\Troi\Model\ApiAccountingEntry**](../Model/ApiAccountingEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntriesIdPut()`

```php
accountingEntriesIdPut($id, $accounting_entries_id_put_request): \Troi\Model\ApiSyncItem[]
```

Update Accounting Entry Object

Update Accounting Entry Object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Accounting entry id
$accounting_entries_id_put_request = new \Troi\Model\AccountingEntriesIdPutRequest(); // \Troi\Model\AccountingEntriesIdPutRequest

try {
    $result = $apiInstance->accountingEntriesIdPut($id, $accounting_entries_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntriesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Accounting entry id | |
| **accounting_entries_id_put_request** | [**\Troi\Model\AccountingEntriesIdPutRequest**](../Model/AccountingEntriesIdPutRequest.md)|  | |

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

## `accountingEntriesPost()`

```php
accountingEntriesPost($accounting_entries_post_request): \Troi\Model\ApiSyncItem[]
```

Save Accounting Entry Object

Save Accounting Entry Object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_entries_post_request = new \Troi\Model\AccountingEntriesPostRequest(); // \Troi\Model\AccountingEntriesPostRequest

try {
    $result = $apiInstance->accountingEntriesPost($accounting_entries_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_entries_post_request** | [**\Troi\Model\AccountingEntriesPostRequest**](../Model/AccountingEntriesPostRequest.md)|  | |

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
