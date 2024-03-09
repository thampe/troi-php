# Troi\SuppliersApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**suppliersGet()**](SuppliersApi.md#suppliersGet) | **GET** /suppliers | Fetch all suppliers from given client |
| [**suppliersIdGet()**](SuppliersApi.md#suppliersIdGet) | **GET** /suppliers/{id} | Fetch supplier for the given supplier ID |
| [**suppliersIdPut()**](SuppliersApi.md#suppliersIdPut) | **PUT** /suppliers/{id} | Update supplier |
| [**suppliersPost()**](SuppliersApi.md#suppliersPost) | **POST** /suppliers | Save supplier |


## `suppliersGet()`

```php
suppliersGet($client_id, $return_api_sync_items, $search, $is_active, $show_reference_details): \Troi\Model\ApiSupplier[]
```

Fetch all suppliers from given client

Fetch all suppliers from given client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Client ID
$return_api_sync_items = false; // bool | Fetch all suppliers for the given client ID and return them as syncItems
$search = Troi; // string | Fetch all suppliers for the given search term
$is_active = true; // bool | Fetch all active suppliers
$show_reference_details = true; // bool | Fetch all suppliers and return extended payment term array

try {
    $result = $apiInstance->suppliersGet($client_id, $return_api_sync_items, $search, $is_active, $show_reference_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->suppliersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Client ID | |
| **return_api_sync_items** | **bool**| Fetch all suppliers for the given client ID and return them as syncItems | [optional] |
| **search** | **string**| Fetch all suppliers for the given search term | [optional] |
| **is_active** | **bool**| Fetch all active suppliers | [optional] |
| **show_reference_details** | **bool**| Fetch all suppliers and return extended payment term array | [optional] |

### Return type

[**\Troi\Model\ApiSupplier[]**](../Model/ApiSupplier.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suppliersIdGet()`

```php
suppliersIdGet($id): \Troi\Model\ApiSupplier
```

Fetch supplier for the given supplier ID

Fetch supplier for the given supplier ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch supplier for the given supplier ID

try {
    $result = $apiInstance->suppliersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->suppliersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch supplier for the given supplier ID | |

### Return type

[**\Troi\Model\ApiSupplier**](../Model/ApiSupplier.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suppliersIdPut()`

```php
suppliersIdPut($id, $suppliers_id_put_request): \Troi\Model\ApiSyncItem[]
```

Update supplier

Update supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Supplier ID
$suppliers_id_put_request = new \Troi\Model\SuppliersIdPutRequest(); // \Troi\Model\SuppliersIdPutRequest

try {
    $result = $apiInstance->suppliersIdPut($id, $suppliers_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->suppliersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Supplier ID | |
| **suppliers_id_put_request** | [**\Troi\Model\SuppliersIdPutRequest**](../Model/SuppliersIdPutRequest.md)|  | |

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

## `suppliersPost()`

```php
suppliersPost($suppliers_post_request): \Troi\Model\ApiSyncItem[]
```

Save supplier

Save supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$suppliers_post_request = new \Troi\Model\SuppliersPostRequest(); // \Troi\Model\SuppliersPostRequest

try {
    $result = $apiInstance->suppliersPost($suppliers_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->suppliersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **suppliers_post_request** | [**\Troi\Model\SuppliersPostRequest**](../Model/SuppliersPostRequest.md)|  | |

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
