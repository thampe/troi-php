# Troi\AbsencesApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**absenceTypesIdPut()**](AbsencesApi.md#absenceTypesIdPut) | **PUT** /absenceTypes/{id} | Update Absence object |
| [**absenceTypesPost()**](AbsencesApi.md#absenceTypesPost) | **POST** /absenceTypes | Save Absence object |
| [**absencesGet()**](AbsencesApi.md#absencesGet) | **GET** /absences | Fetch all absences for the current employee given Start Date and End Date |
| [**absencesIdGet()**](AbsencesApi.md#absencesIdGet) | **GET** /absences/{id} | Fetch Absence for the given Absence ID |
| [**absencesIdPut()**](AbsencesApi.md#absencesIdPut) | **PUT** /absences/{id} | Update Absence object |
| [**absencesPost()**](AbsencesApi.md#absencesPost) | **POST** /absences | Save Absence object |


## `absenceTypesIdPut()`

```php
absenceTypesIdPut($id, $absences_id_put_request): \Troi\Model\ApiSyncItem[]
```

Update Absence object

Update Absence object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AbsencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Absence id
$absences_id_put_request = new \Troi\Model\AbsencesIdPutRequest(); // \Troi\Model\AbsencesIdPutRequest

try {
    $result = $apiInstance->absenceTypesIdPut($id, $absences_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsencesApi->absenceTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Absence id | |
| **absences_id_put_request** | [**\Troi\Model\AbsencesIdPutRequest**](../Model/AbsencesIdPutRequest.md)|  | |

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

## `absenceTypesPost()`

```php
absenceTypesPost($absences_post_request): \Troi\Model\ApiSyncItem[]
```

Save Absence object

Save Absence object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AbsencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$absences_post_request = new \Troi\Model\AbsencesPostRequest(); // \Troi\Model\AbsencesPostRequest

try {
    $result = $apiInstance->absenceTypesPost($absences_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsencesApi->absenceTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **absences_post_request** | [**\Troi\Model\AbsencesPostRequest**](../Model/AbsencesPostRequest.md)|  | |

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

## `absencesGet()`

```php
absencesGet($start, $end, $employee_id): \Troi\Model\ApiAbsence[]
```

Fetch all absences for the current employee given Start Date and End Date

Fetch all absences for the current employee given Start Date and End Date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AbsencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 20190401; // int | Start date
$end = 20190401; // int | End date
$employee_id = 33; // int | Employee id

try {
    $result = $apiInstance->absencesGet($start, $end, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsencesApi->absencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| Start date | |
| **end** | **int**| End date | |
| **employee_id** | **int**| Employee id | [optional] |

### Return type

[**\Troi\Model\ApiAbsence[]**](../Model/ApiAbsence.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `absencesIdGet()`

```php
absencesIdGet($id): \Troi\Model\ApiAbsence
```

Fetch Absence for the given Absence ID

Fetch Absence for the given Absence ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AbsencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Absence id

try {
    $result = $apiInstance->absencesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsencesApi->absencesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Absence id | |

### Return type

[**\Troi\Model\ApiAbsence**](../Model/ApiAbsence.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `absencesIdPut()`

```php
absencesIdPut($id, $absences_id_put_request): \Troi\Model\ApiSyncItem[]
```

Update Absence object

Update Absence object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AbsencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Absence id
$absences_id_put_request = new \Troi\Model\AbsencesIdPutRequest(); // \Troi\Model\AbsencesIdPutRequest

try {
    $result = $apiInstance->absencesIdPut($id, $absences_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsencesApi->absencesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Absence id | |
| **absences_id_put_request** | [**\Troi\Model\AbsencesIdPutRequest**](../Model/AbsencesIdPutRequest.md)|  | |

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

## `absencesPost()`

```php
absencesPost($absences_post_request): \Troi\Model\ApiSyncItem[]
```

Save Absence object

Save Absence object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\AbsencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$absences_post_request = new \Troi\Model\AbsencesPostRequest(); // \Troi\Model\AbsencesPostRequest

try {
    $result = $apiInstance->absencesPost($absences_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsencesApi->absencesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **absences_post_request** | [**\Troi\Model\AbsencesPostRequest**](../Model/AbsencesPostRequest.md)|  | |

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
