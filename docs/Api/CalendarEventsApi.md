# Troi\CalendarEventsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calendarEventsGet()**](CalendarEventsApi.md#calendarEventsGet) | **GET** /calendarEvents | Fetch all calendar events at the given range |
| [**calendarEventsIdDelete()**](CalendarEventsApi.md#calendarEventsIdDelete) | **DELETE** /calendarEvents/{id} | Delete calendar event |
| [**calendarEventsIdGet()**](CalendarEventsApi.md#calendarEventsIdGet) | **GET** /calendarEvents/{id} | Fetch calendar event for the given calendar event ID |
| [**calendarEventsIdPut()**](CalendarEventsApi.md#calendarEventsIdPut) | **PUT** /calendarEvents/{id} | Update calendar event |
| [**calendarEventsPost()**](CalendarEventsApi.md#calendarEventsPost) | **POST** /calendarEvents | Save calendar event |


## `calendarEventsGet()`

```php
calendarEventsGet($start, $end, $search_key, $owner_employee_id, $type, $without_absences, $external_id): \Troi\Model\ApiCalendarEvent[]
```

Fetch all calendar events at the given range

Fetch all calendar events at the given range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 20200101; // string | Start date (`YYYYMMDD`)
$end = 20201231; // string | End date (`YYYYMMDD`)
$search_key = meeting; // string | Search in calendar events for string
$owner_employee_id = 33; // int | Employee owner
$type = R; // string | Calendar event type  `R`=regular, `H`=holiday, `G`=general, `P`=private, `T`=assigment
$without_absences = false; // bool | Return calendar event list without absences
$external_id = 12345678-90AB-CDEF-1234-567890ABCDEF; // string | ID of a system connected to Troi to simplify synchronization process

try {
    $result = $apiInstance->calendarEventsGet($start, $end, $search_key, $owner_employee_id, $type, $without_absences, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventsApi->calendarEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **string**| Start date (&#x60;YYYYMMDD&#x60;) | |
| **end** | **string**| End date (&#x60;YYYYMMDD&#x60;) | |
| **search_key** | **string**| Search in calendar events for string | [optional] |
| **owner_employee_id** | **int**| Employee owner | [optional] |
| **type** | **string**| Calendar event type  &#x60;R&#x60;&#x3D;regular, &#x60;H&#x60;&#x3D;holiday, &#x60;G&#x60;&#x3D;general, &#x60;P&#x60;&#x3D;private, &#x60;T&#x60;&#x3D;assigment | [optional] |
| **without_absences** | **bool**| Return calendar event list without absences | [optional] |
| **external_id** | **string**| ID of a system connected to Troi to simplify synchronization process | [optional] |

### Return type

[**\Troi\Model\ApiCalendarEvent[]**](../Model/ApiCalendarEvent.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calendarEventsIdDelete()`

```php
calendarEventsIdDelete($id): int
```

Delete calendar event

Delete calendar event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Calendar event ID

try {
    $result = $apiInstance->calendarEventsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventsApi->calendarEventsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Calendar event ID | |

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

## `calendarEventsIdGet()`

```php
calendarEventsIdGet($id): \Troi\Model\ApiCalendarEvent
```

Fetch calendar event for the given calendar event ID

Fetch calendar event for the given calendar event ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch calendar event for the given calendar event ID

try {
    $result = $apiInstance->calendarEventsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventsApi->calendarEventsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch calendar event for the given calendar event ID | |

### Return type

[**\Troi\Model\ApiCalendarEvent**](../Model/ApiCalendarEvent.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calendarEventsIdPut()`

```php
calendarEventsIdPut($id, $api_calendar_event): \Troi\Model\ApiSyncItem[]
```

Update calendar event

Update calendar event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Calendar event ID
$api_calendar_event = new \Troi\Model\ApiCalendarEvent(); // \Troi\Model\ApiCalendarEvent

try {
    $result = $apiInstance->calendarEventsIdPut($id, $api_calendar_event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventsApi->calendarEventsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Calendar event ID | |
| **api_calendar_event** | [**\Troi\Model\ApiCalendarEvent**](../Model/ApiCalendarEvent.md)|  | |

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

## `calendarEventsPost()`

```php
calendarEventsPost($calendar_events_post_request): \Troi\Model\ApiSyncItem[]
```

Save calendar event

Save calendar event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_events_post_request = new \Troi\Model\CalendarEventsPostRequest(); // \Troi\Model\CalendarEventsPostRequest

try {
    $result = $apiInstance->calendarEventsPost($calendar_events_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventsApi->calendarEventsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_events_post_request** | [**\Troi\Model\CalendarEventsPostRequest**](../Model/CalendarEventsPostRequest.md)|  | |

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
