# Troi\AbsenceTypesApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**absenceTypesGet()**](AbsenceTypesApi.md#absenceTypesGet) | **GET** /absenceTypes | Fetch all absence types |
| [**absenceTypesIdGet()**](AbsenceTypesApi.md#absenceTypesIdGet) | **GET** /absenceTypes/{id} | Fetch Absence Type for the given Absence Type ID |


## `absenceTypesGet()`

```php
absenceTypesGet(): \Troi\Model\ApiAbsenceType[]
```

Fetch all absence types

Fetch all absence types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AbsenceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->absenceTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTypesApi->absenceTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Troi\Model\ApiAbsenceType[]**](../Model/ApiAbsenceType.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `absenceTypesIdGet()`

```php
absenceTypesIdGet($id): \Troi\Model\ApiAbsenceType
```

Fetch Absence Type for the given Absence Type ID

Fetch Absence Type for the given Absence Type ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AbsenceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Absence Type id

try {
    $result = $apiInstance->absenceTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTypesApi->absenceTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Absence Type id | |

### Return type

[**\Troi\Model\ApiAbsenceType**](../Model/ApiAbsenceType.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
