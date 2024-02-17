# Troi\BillingApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**billingsHoursGet()**](BillingApi.md#billingsHoursGet) | **GET** /billings/hours | Fetch all billings for the given parameter |
| [**billingsHoursIdDelete()**](BillingApi.md#billingsHoursIdDelete) | **DELETE** /billings/hours/{id} | Delete Billing |
| [**billingsHoursIdGet()**](BillingApi.md#billingsHoursIdGet) | **GET** /billings/hours/{id} | Fetch Billing for the given Billing ID |
| [**billingsHoursIdPut()**](BillingApi.md#billingsHoursIdPut) | **PUT** /billings/hours/{id} | Update Billing |
| [**billingsHoursPost()**](BillingApi.md#billingsHoursPost) | **POST** /billings/hours | Save Billing |


## `billingsHoursGet()`

```php
billingsHoursGet($client_id, $calculation_position_id, $project_id, $subproject_id, $start_date, $end_date, $extended_object, $fillsyncitems): \Troi\Model\ApiHourBilling[]
```

Fetch all billings for the given parameter

Fetch all billings for the given parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | employeeId or calculationPositionId or projectId or subprojectId or startDate+endDate is mandatory
$calculation_position_id = 1; // int | Fetch all billings for the given calculation position ID
$project_id = 1; // int | Fetch all billings for the given project ID
$subproject_id = 1; // int | Fetch all billings for the given subproject ID
$start_date = 20160101; // string | Fetch all billings for the given start date
$end_date = 20160120; // string | Fetch all billings for the given end date
$extended_object = true; // bool | extended object contains the full calculation position display path
$fillsyncitems = true; // bool | Fetch all billings and fill the empty objects if there are any

try {
    $result = $apiInstance->billingsHoursGet($client_id, $calculation_position_id, $project_id, $subproject_id, $start_date, $end_date, $extended_object, $fillsyncitems);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsHoursGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| employeeId or calculationPositionId or projectId or subprojectId or startDate+endDate is mandatory | |
| **calculation_position_id** | **int**| Fetch all billings for the given calculation position ID | [optional] |
| **project_id** | **int**| Fetch all billings for the given project ID | [optional] |
| **subproject_id** | **int**| Fetch all billings for the given subproject ID | [optional] |
| **start_date** | **string**| Fetch all billings for the given start date | [optional] |
| **end_date** | **string**| Fetch all billings for the given end date | [optional] |
| **extended_object** | **bool**| extended object contains the full calculation position display path | [optional] |
| **fillsyncitems** | **bool**| Fetch all billings and fill the empty objects if there are any | [optional] |

### Return type

[**\Troi\Model\ApiHourBilling[]**](../Model/ApiHourBilling.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingsHoursIdDelete()`

```php
billingsHoursIdDelete($id): int
```

Delete Billing

Delete Billing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Billing id

try {
    $result = $apiInstance->billingsHoursIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsHoursIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Billing id | |

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

## `billingsHoursIdGet()`

```php
billingsHoursIdGet($id, $extended_object): \Troi\Model\ApiHourBilling
```

Fetch Billing for the given Billing ID

Fetch Billing for the given Billing ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch Billing for the given Billing ID
$extended_object = true; // bool | extended object contains the full calculation position display path

try {
    $result = $apiInstance->billingsHoursIdGet($id, $extended_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsHoursIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch Billing for the given Billing ID | |
| **extended_object** | **bool**| extended object contains the full calculation position display path | [optional] |

### Return type

[**\Troi\Model\ApiHourBilling**](../Model/ApiHourBilling.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingsHoursIdPut()`

```php
billingsHoursIdPut($id, $billings_hours_id_put_request): \Troi\Model\ApiSyncItem[]
```

Update Billing

Update Billing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Billing id
$billings_hours_id_put_request = new \Troi\Model\BillingsHoursIdPutRequest(); // \Troi\Model\BillingsHoursIdPutRequest

try {
    $result = $apiInstance->billingsHoursIdPut($id, $billings_hours_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsHoursIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Billing id | |
| **billings_hours_id_put_request** | [**\Troi\Model\BillingsHoursIdPutRequest**](../Model/BillingsHoursIdPutRequest.md)|  | |

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

## `billingsHoursPost()`

```php
billingsHoursPost($billings_hours_post_request): \Troi\Model\ApiSyncItem[]
```

Save Billing

Save Billing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billings_hours_post_request = new \Troi\Model\BillingsHoursPostRequest(); // \Troi\Model\BillingsHoursPostRequest

try {
    $result = $apiInstance->billingsHoursPost($billings_hours_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsHoursPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billings_hours_post_request** | [**\Troi\Model\BillingsHoursPostRequest**](../Model/BillingsHoursPostRequest.md)|  | |

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
