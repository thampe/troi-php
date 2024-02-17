# Troi\AccountGroupsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountGroupsGet()**](AccountGroupsApi.md#accountGroupsGet) | **GET** /accountGroups | Fetch all account groups for the given clientId |
| [**accountGroupsIdDelete()**](AccountGroupsApi.md#accountGroupsIdDelete) | **DELETE** /accountGroups/{id} | Delete Account Groups |
| [**accountGroupsIdGet()**](AccountGroupsApi.md#accountGroupsIdGet) | **GET** /accountGroups/{id} | Fetch Account Group for the given Account Group ID |
| [**accountGroupsIdPut()**](AccountGroupsApi.md#accountGroupsIdPut) | **PUT** /accountGroups/{id} | Update Account Groups Object |
| [**accountGroupsPost()**](AccountGroupsApi.md#accountGroupsPost) | **POST** /accountGroups | Save account groups object |


## `accountGroupsGet()`

```php
accountGroupsGet($client_id): \Troi\Model\ApiAccountGroup[]
```

Fetch all account groups for the given clientId

Fetch all account groups for the given clientId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Client ID

try {
    $result = $apiInstance->accountGroupsGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->accountGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Client ID | |

### Return type

[**\Troi\Model\ApiAccountGroup[]**](../Model/ApiAccountGroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGroupsIdDelete()`

```php
accountGroupsIdDelete($id): int
```

Delete Account Groups

Delete Account Groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Account Group id

try {
    $result = $apiInstance->accountGroupsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->accountGroupsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Account Group id | |

### Return type

**int**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGroupsIdGet()`

```php
accountGroupsIdGet($id): \Troi\Model\ApiAccountGroup
```

Fetch Account Group for the given Account Group ID

Fetch Account Group for the given Account Group ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Account Group id

try {
    $result = $apiInstance->accountGroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->accountGroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Account Group id | |

### Return type

[**\Troi\Model\ApiAccountGroup**](../Model/ApiAccountGroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGroupsIdPut()`

```php
accountGroupsIdPut($id, $account_groups_id_put_request): \Troi\Model\ApiSyncItem[]
```

Update Account Groups Object

Update Account Groups Object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Account group id
$account_groups_id_put_request = new \Troi\Model\AccountGroupsIdPutRequest(); // \Troi\Model\AccountGroupsIdPutRequest

try {
    $result = $apiInstance->accountGroupsIdPut($id, $account_groups_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->accountGroupsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Account group id | |
| **account_groups_id_put_request** | [**\Troi\Model\AccountGroupsIdPutRequest**](../Model/AccountGroupsIdPutRequest.md)|  | |

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

## `accountGroupsPost()`

```php
accountGroupsPost($account_groups_post_request): \Troi\Model\ApiSyncItem[]
```

Save account groups object

Save account groups object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_groups_post_request = new \Troi\Model\AccountGroupsPostRequest(); // \Troi\Model\AccountGroupsPostRequest

try {
    $result = $apiInstance->accountGroupsPost($account_groups_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->accountGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_groups_post_request** | [**\Troi\Model\AccountGroupsPostRequest**](../Model/AccountGroupsPostRequest.md)|  | |

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
