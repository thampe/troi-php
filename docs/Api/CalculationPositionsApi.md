# Troi\CalculationPositionsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculationPositionsGet()**](CalculationPositionsApi.md#calculationPositionsGet) | **GET** /calculationPositions | Fetch all calculation positions for the given client ID |
| [**calculationPositionsIdDelete()**](CalculationPositionsApi.md#calculationPositionsIdDelete) | **DELETE** /calculationPositions/{id} | Delete calculation position |
| [**calculationPositionsIdGet()**](CalculationPositionsApi.md#calculationPositionsIdGet) | **GET** /calculationPositions/{id} | Fetch calculation position for the given calculation position ID |
| [**calculationPositionsIdPut()**](CalculationPositionsApi.md#calculationPositionsIdPut) | **PUT** /calculationPositions/{id} | Update calculation position |
| [**calculationPositionsPost()**](CalculationPositionsApi.md#calculationPositionsPost) | **POST** /calculationPositions | Save Calculation Position |


## `calculationPositionsGet()`

```php
calculationPositionsGet($client_id, $project_id, $subproject_id, $search, $time_recording, $favorites_only, $without_hour_closed, $ree_date, $project_status_id, $book_keeping, $project_ids, $issue_tracker_project_key): \Troi\Model\ApiCalculationPosition[]
```

Fetch all calculation positions for the given client ID

Fetch all calculation Positions for the given client ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalculationPositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Fetch all calculation positions for the given client ID
$project_id = 1; // int | Fetch all calculation positions for the given project ID
$subproject_id = 1; // int | Fetch all calculation positions for the given subproject ID
$search = Car; // string | Fetch all calculation positions for the given search term
$time_recording = true; // bool | returns on valid time recording positions for the user
$favorites_only = true; // bool | returns on favorite time recording positions for the user
$without_hour_closed = true; // bool | returns only cp that are not closed for time recording
$ree_date = 20190101; // string | return rest expenses estimation for the given calculation position  Format: yyyymmdd OR dd.mm.yyyy OR current_date
$project_status_id = 1; // int | Fetch all calculation positions for the given project status ID
$book_keeping = true; // bool | Fetch all calculation positions for the given book keeping
$project_ids = 1,2,3; // string | Fetch all calculation positions for the given project IDs
$issue_tracker_project_key = TROI-12345; // string | Fetch all calculation positions for the given issue tracker project key

try {
    $result = $apiInstance->calculationPositionsGet($client_id, $project_id, $subproject_id, $search, $time_recording, $favorites_only, $without_hour_closed, $ree_date, $project_status_id, $book_keeping, $project_ids, $issue_tracker_project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationPositionsApi->calculationPositionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Fetch all calculation positions for the given client ID | |
| **project_id** | **int**| Fetch all calculation positions for the given project ID | [optional] |
| **subproject_id** | **int**| Fetch all calculation positions for the given subproject ID | [optional] |
| **search** | **string**| Fetch all calculation positions for the given search term | [optional] |
| **time_recording** | **bool**| returns on valid time recording positions for the user | [optional] |
| **favorites_only** | **bool**| returns on favorite time recording positions for the user | [optional] |
| **without_hour_closed** | **bool**| returns only cp that are not closed for time recording | [optional] |
| **ree_date** | **string**| return rest expenses estimation for the given calculation position  Format: yyyymmdd OR dd.mm.yyyy OR current_date | [optional] |
| **project_status_id** | **int**| Fetch all calculation positions for the given project status ID | [optional] |
| **book_keeping** | **bool**| Fetch all calculation positions for the given book keeping | [optional] |
| **project_ids** | **string**| Fetch all calculation positions for the given project IDs | [optional] |
| **issue_tracker_project_key** | **string**| Fetch all calculation positions for the given issue tracker project key | [optional] |

### Return type

[**\Troi\Model\ApiCalculationPosition[]**](../Model/ApiCalculationPosition.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculationPositionsIdDelete()`

```php
calculationPositionsIdDelete($id): int
```

Delete calculation position

Delete calculation position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalculationPositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Calculation position ID

try {
    $result = $apiInstance->calculationPositionsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationPositionsApi->calculationPositionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Calculation position ID | |

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

## `calculationPositionsIdGet()`

```php
calculationPositionsIdGet($id): \Troi\Model\ApiCalculationPosition
```

Fetch calculation position for the given calculation position ID

Fetch calculation position for the given calculation position ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalculationPositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch calculation position for the given calculation position ID

try {
    $result = $apiInstance->calculationPositionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationPositionsApi->calculationPositionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch calculation position for the given calculation position ID | |

### Return type

[**\Troi\Model\ApiCalculationPosition**](../Model/ApiCalculationPosition.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculationPositionsIdPut()`

```php
calculationPositionsIdPut($id, $api_calculation_position): \Troi\Model\ApiSyncItem[]
```

Update calculation position

Update calculation position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalculationPositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Calculation position ID
$api_calculation_position = new \Troi\Model\ApiCalculationPosition(); // \Troi\Model\ApiCalculationPosition

try {
    $result = $apiInstance->calculationPositionsIdPut($id, $api_calculation_position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationPositionsApi->calculationPositionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Calculation position ID | |
| **api_calculation_position** | [**\Troi\Model\ApiCalculationPosition**](../Model/ApiCalculationPosition.md)|  | |

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

## `calculationPositionsPost()`

```php
calculationPositionsPost($calculation_positions_post_request): \Troi\Model\ApiSyncItem[]
```

Save Calculation Position

Save Calculation Position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalculationPositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calculation_positions_post_request = new \Troi\Model\CalculationPositionsPostRequest(); // \Troi\Model\CalculationPositionsPostRequest

try {
    $result = $apiInstance->calculationPositionsPost($calculation_positions_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationPositionsApi->calculationPositionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calculation_positions_post_request** | [**\Troi\Model\CalculationPositionsPostRequest**](../Model/CalculationPositionsPostRequest.md)|  | |

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
