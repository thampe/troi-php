# Troi\UnitsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**miscUnitsGet()**](UnitsApi.md#miscUnitsGet) | **GET** /misc/units | Fetch all units |
| [**miscUnitsIdGet()**](UnitsApi.md#miscUnitsIdGet) | **GET** /misc/units/{id} | Fetch unit given unit ID |


## `miscUnitsGet()`

```php
miscUnitsGet(): \Troi\Model\ApiUnit[]
```

Fetch all units

Fetch all units

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->miscUnitsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->miscUnitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Troi\Model\ApiUnit[]**](../Model/ApiUnit.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `miscUnitsIdGet()`

```php
miscUnitsIdGet($id): \Troi\Model\ApiUnit
```

Fetch unit given unit ID

Fetch unit given unit ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | unit id

try {
    $result = $apiInstance->miscUnitsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->miscUnitsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| unit id | |

### Return type

[**\Troi\Model\ApiUnit**](../Model/ApiUnit.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
