# Troi\AccountsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountsGet()**](AccountsApi.md#accountsGet) | **GET** /accounts | Fetch all Accounts for the given clientId |
| [**accountsIdDelete()**](AccountsApi.md#accountsIdDelete) | **DELETE** /accounts/{id} | Delete Account |
| [**accountsIdGet()**](AccountsApi.md#accountsIdGet) | **GET** /accounts/{id} | Fetch Account given Account ID |
| [**accountsIdPut()**](AccountsApi.md#accountsIdPut) | **PUT** /accounts/{id} | Update Account |
| [**accountsPost()**](AccountsApi.md#accountsPost) | **POST** /accounts | Save Account |


## `accountsGet()`

```php
accountsGet($client_id, $account_group_id, $account_is_cash_or_bank): \Troi\Model\ApiAccount[]
```

Fetch all Accounts for the given clientId

Fetch all Accounts for the given clientId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Fetch all Accounts for the given clientId
$account_group_id = 1; // int | Fetch all Accounts for the given accountGroupId
$account_is_cash_or_bank = true; // bool | Fetch all Accounts for the given account_is_cash_or_bank flag

try {
    $result = $apiInstance->accountsGet($client_id, $account_group_id, $account_is_cash_or_bank);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Fetch all Accounts for the given clientId | |
| **account_group_id** | **int**| Fetch all Accounts for the given accountGroupId | [optional] |
| **account_is_cash_or_bank** | **bool**| Fetch all Accounts for the given account_is_cash_or_bank flag | [optional] |

### Return type

[**\Troi\Model\ApiAccount[]**](../Model/ApiAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsIdDelete()`

```php
accountsIdDelete($id): int
```

Delete Account

Delete Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Account id

try {
    $result = $apiInstance->accountsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Account id | |

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

## `accountsIdGet()`

```php
accountsIdGet($id): \Troi\Model\ApiAccount
```

Fetch Account given Account ID

Fetch Account given Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Account id

try {
    $result = $apiInstance->accountsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Account id | |

### Return type

[**\Troi\Model\ApiAccount**](../Model/ApiAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsIdPut()`

```php
accountsIdPut($id, $api_account): \Troi\Model\ApiSyncItem[]
```

Update Account

Update Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Account id
$api_account = new \Troi\Model\ApiAccount(); // \Troi\Model\ApiAccount

try {
    $result = $apiInstance->accountsIdPut($id, $api_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Account id | |
| **api_account** | [**\Troi\Model\ApiAccount**](../Model/ApiAccount.md)|  | |

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

## `accountsPost()`

```php
accountsPost($accounts_post_request): \Troi\Model\ApiSyncItem[]
```

Save Account

Save Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounts_post_request = new \Troi\Model\AccountsPostRequest(); // \Troi\Model\AccountsPostRequest

try {
    $result = $apiInstance->accountsPost($accounts_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounts_post_request** | [**\Troi\Model\AccountsPostRequest**](../Model/AccountsPostRequest.md)|  | |

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
