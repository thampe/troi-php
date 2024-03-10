# Troi\ProjectStatusesApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**miscProjectStatusesGet()**](ProjectStatusesApi.md#miscProjectStatusesGet) | **GET** /misc/projectStatuses | Fetch all Project Statuses for the given clientId |


## `miscProjectStatusesGet()`

```php
miscProjectStatusesGet($client_id): \Troi\Model\ApiProjectStatus[]
```

Fetch all Project Statuses for the given clientId

Fetch all Project Statuses for the given clientId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Fetch all Accounts for the given clientId

try {
    $result = $apiInstance->miscProjectStatusesGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->miscProjectStatusesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Fetch all Accounts for the given clientId | |

### Return type

[**\Troi\Model\ApiProjectStatus[]**](../Model/ApiProjectStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
