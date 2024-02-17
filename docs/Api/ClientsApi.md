# Troi\ClientsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clientsGet()**](ClientsApi.md#clientsGet) | **GET** /clients | Fetch all Tenants (formerly Clients) |
| [**clientsIdGet()**](ClientsApi.md#clientsIdGet) | **GET** /clients/{id} | Fetch client for the given client ID |


## `clientsGet()`

```php
clientsGet(): \Troi\Model\ApiClient[]
```

Fetch all Tenants (formerly Clients)

Fetch all Tenants (formerly Clients)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clientsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Troi\Model\ApiClient[]**](../Model/ApiClient.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientsIdGet()`

```php
clientsIdGet($id): \Troi\Model\ApiClient
```

Fetch client for the given client ID

Fetch client for the given client ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch client for the given client ID

try {
    $result = $apiInstance->clientsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch client for the given client ID | |

### Return type

[**\Troi\Model\ApiClient**](../Model/ApiClient.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
