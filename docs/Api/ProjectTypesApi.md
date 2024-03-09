# Troi\ProjectTypesApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**miscProjectTypesGet()**](ProjectTypesApi.md#miscProjectTypesGet) | **GET** /misc/projectTypes | Fetch all Project Types for the given clientId |
| [**miscProjectTypesIdGet()**](ProjectTypesApi.md#miscProjectTypesIdGet) | **GET** /misc/projectTypes/{id} | Fetch Project Types given Project Type ID |


## `miscProjectTypesGet()`

```php
miscProjectTypesGet($client_id): \Troi\Model\ApiProjectType[]
```

Fetch all Project Types for the given clientId

Fetch all Project Types for the given clientId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Fetch all Project Types for the given clientId

try {
    $result = $apiInstance->miscProjectTypesGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTypesApi->miscProjectTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Fetch all Project Types for the given clientId | |

### Return type

[**\Troi\Model\ApiProjectType[]**](../Model/ApiProjectType.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `miscProjectTypesIdGet()`

```php
miscProjectTypesIdGet($id): \Troi\Model\ApiProjectType
```

Fetch Project Types given Project Type ID

Fetch Project Types given Project Type ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Project Type id

try {
    $result = $apiInstance->miscProjectTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTypesApi->miscProjectTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project Type id | |

### Return type

[**\Troi\Model\ApiProjectType**](../Model/ApiProjectType.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
