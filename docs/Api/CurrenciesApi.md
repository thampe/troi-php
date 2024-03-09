# Troi\CurrenciesApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**miscCategoriesIdGet()**](CurrenciesApi.md#miscCategoriesIdGet) | **GET** /misc/categories/{id} | Fetch Category given category ID |
| [**miscCurrenciesGet()**](CurrenciesApi.md#miscCurrenciesGet) | **GET** /misc/currencies | Fetch all Currencies for the given clientId |
| [**miscCurrenciesIdGet()**](CurrenciesApi.md#miscCurrenciesIdGet) | **GET** /misc/currencies/{id} | Fetch Currency given currency ID |


## `miscCategoriesIdGet()`

```php
miscCategoriesIdGet($id): \Troi\Model\ApiListItem
```

Fetch Category given category ID

Fetch Category given category ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Category id

try {
    $result = $apiInstance->miscCategoriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->miscCategoriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Category id | |

### Return type

[**\Troi\Model\ApiListItem**](../Model/ApiListItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `miscCurrenciesGet()`

```php
miscCurrenciesGet($client_id): \Troi\Model\ApiCurrency[]
```

Fetch all Currencies for the given clientId

Fetch all Currencies for the given clientId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Fetch all Currencies for the given clientId

try {
    $result = $apiInstance->miscCurrenciesGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->miscCurrenciesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Fetch all Currencies for the given clientId | |

### Return type

[**\Troi\Model\ApiCurrency[]**](../Model/ApiCurrency.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `miscCurrenciesIdGet()`

```php
miscCurrenciesIdGet($id): \Troi\Model\ApiCurrency
```

Fetch Currency given currency ID

Fetch Currency given currency ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Currency id

try {
    $result = $apiInstance->miscCurrenciesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->miscCurrenciesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Currency id | |

### Return type

[**\Troi\Model\ApiCurrency**](../Model/ApiCurrency.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
