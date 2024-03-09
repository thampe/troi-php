# Troi\SubprojectsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subprojectsGet()**](SubprojectsApi.md#subprojectsGet) | **GET** /subprojects | Fetch all Subprojects for the given clientId |
| [**subprojectsIdGet()**](SubprojectsApi.md#subprojectsIdGet) | **GET** /subprojects/{id} | Fetch Subproject given Subproject ID |


## `subprojectsGet()`

```php
subprojectsGet($client_id, $project_id): \Troi\Model\ApiSubproject[]
```

Fetch all Subprojects for the given clientId

Fetch all Subprojects for the given clientId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\SubprojectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Fetch all Subproejcts for the given clientId
$project_id = 1; // int | Fetch all subprojects for the given proejctId

try {
    $result = $apiInstance->subprojectsGet($client_id, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubprojectsApi->subprojectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Fetch all Subproejcts for the given clientId | |
| **project_id** | **int**| Fetch all subprojects for the given proejctId | [optional] |

### Return type

[**\Troi\Model\ApiSubproject[]**](../Model/ApiSubproject.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subprojectsIdGet()`

```php
subprojectsIdGet($id): \Troi\Model\ApiSubproject
```

Fetch Subproject given Subproject ID

Fetch Employee given Subproject ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\SubprojectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Subproject id

try {
    $result = $apiInstance->subprojectsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubprojectsApi->subprojectsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Subproject id | |

### Return type

[**\Troi\Model\ApiSubproject**](../Model/ApiSubproject.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
