# Troi\CustomersApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customersGet()**](CustomersApi.md#customersGet) | **GET** /customers | Fetch all customers for the given client ID |
| [**customersIdGet()**](CustomersApi.md#customersIdGet) | **GET** /customers/{id} | Fetch customer for the given customer ID |
| [**customersIdPut()**](CustomersApi.md#customersIdPut) | **PUT** /customers/{id} | Update customer |
| [**customersPost()**](CustomersApi.md#customersPost) | **POST** /customers | Save customer |


## `customersGet()`

```php
customersGet($client_id, $sync_item, $is_active): \Troi\Model\ApiCustomer[]
```

Fetch all customers for the given client ID

Fetch all customers for the given client ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Client ID
$sync_item = false; // bool | Fetch all customers for the given client ID and return them as syncItems
$is_active = true; // bool | Fetch all active customers. If omitted, all customers are returned.

try {
    $result = $apiInstance->customersGet($client_id, $sync_item, $is_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Client ID | |
| **sync_item** | **bool**| Fetch all customers for the given client ID and return them as syncItems | [optional] |
| **is_active** | **bool**| Fetch all active customers. If omitted, all customers are returned. | [optional] |

### Return type

[**\Troi\Model\ApiCustomer[]**](../Model/ApiCustomer.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersIdGet()`

```php
customersIdGet($id): \Troi\Model\ApiCustomer
```

Fetch customer for the given customer ID

Fetch customer for the given customer ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch customer for the given customer ID

try {
    $result = $apiInstance->customersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch customer for the given customer ID | |

### Return type

[**\Troi\Model\ApiCustomer**](../Model/ApiCustomer.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersIdPut()`

```php
customersIdPut($id, $api_customer): \Troi\Model\ApiSyncItem[]
```

Update customer

Update customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Customer ID
$api_customer = new \Troi\Model\ApiCustomer(); // \Troi\Model\ApiCustomer

try {
    $result = $apiInstance->customersIdPut($id, $api_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Customer ID | |
| **api_customer** | [**\Troi\Model\ApiCustomer**](../Model/ApiCustomer.md)|  | |

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

## `customersPost()`

```php
customersPost($customers_post_request): \Troi\Model\ApiSyncItem[]
```

Save customer

Save customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customers_post_request = new \Troi\Model\CustomersPostRequest(); // \Troi\Model\CustomersPostRequest

try {
    $result = $apiInstance->customersPost($customers_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customers_post_request** | [**\Troi\Model\CustomersPostRequest**](../Model/CustomersPostRequest.md)|  | |

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
