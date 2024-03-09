# Troi\ProjectFoldersApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectFoldersGet()**](ProjectFoldersApi.md#projectFoldersGet) | **GET** /projectFolders | Fetch all ProjectFolders for the given clientId |
| [**projectFoldersIdGet()**](ProjectFoldersApi.md#projectFoldersIdGet) | **GET** /projectFolders/{id} | Fetch ProjectFolders given ProjectFolder ID |


## `projectFoldersGet()`

```php
projectFoldersGet($client_id): \Troi\Model\ApiProjectFolder[]
```

Fetch all ProjectFolders for the given clientId

Fetch all projectFolders for the given clientId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Fetch all Subproejcts for the given clientId

try {
    $result = $apiInstance->projectFoldersGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectFoldersApi->projectFoldersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Fetch all Subproejcts for the given clientId | |

### Return type

[**\Troi\Model\ApiProjectFolder[]**](../Model/ApiProjectFolder.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectFoldersIdGet()`

```php
projectFoldersIdGet($id): \Troi\Model\ApiProjectFolder
```

Fetch ProjectFolders given ProjectFolder ID

Fetch ProjectFolders given ProjectFolder ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ProjectFolder id

try {
    $result = $apiInstance->projectFoldersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectFoldersApi->projectFoldersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ProjectFolder id | |

### Return type

[**\Troi\Model\ApiProjectFolder**](../Model/ApiProjectFolder.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
