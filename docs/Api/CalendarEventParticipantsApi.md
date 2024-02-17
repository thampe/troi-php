# Troi\CalendarEventParticipantsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calendarEventParticipantsGet()**](CalendarEventParticipantsApi.md#calendarEventParticipantsGet) | **GET** /calendarEventParticipants | Fetch all calendar event participants |
| [**calendarEventParticipantsIdDelete()**](CalendarEventParticipantsApi.md#calendarEventParticipantsIdDelete) | **DELETE** /calendarEventParticipants/{id} | Delete calendar event participant |
| [**calendarEventParticipantsIdGet()**](CalendarEventParticipantsApi.md#calendarEventParticipantsIdGet) | **GET** /calendarEventParticipants/{id} | Fetch calendar event participant for the given calendar event participant ID |
| [**calendarEventParticipantsIdPut()**](CalendarEventParticipantsApi.md#calendarEventParticipantsIdPut) | **PUT** /calendarEventParticipants/{id} | Update calendar event participant |
| [**calendarEventParticipantsPost()**](CalendarEventParticipantsApi.md#calendarEventParticipantsPost) | **POST** /calendarEventParticipants | Save calendar event participants |


## `calendarEventParticipantsGet()`

```php
calendarEventParticipantsGet($calendar_event_id, $employee_id): \Troi\Model\ApiCalendarEventParticipant[]
```

Fetch all calendar event participants

Fetch all calendar event participants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventParticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_event_id = 1; // int | Fetch all calendar event participants for the given calendar event ID
$employee_id = 1; // int | Fetch all calendar event participants for the given employee ID

try {
    $result = $apiInstance->calendarEventParticipantsGet($calendar_event_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventParticipantsApi->calendarEventParticipantsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_event_id** | **int**| Fetch all calendar event participants for the given calendar event ID | [optional] |
| **employee_id** | **int**| Fetch all calendar event participants for the given employee ID | [optional] |

### Return type

[**\Troi\Model\ApiCalendarEventParticipant[]**](../Model/ApiCalendarEventParticipant.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calendarEventParticipantsIdDelete()`

```php
calendarEventParticipantsIdDelete($id): int
```

Delete calendar event participant

Delete calendar event participant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventParticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Calendar event participant ID

try {
    $result = $apiInstance->calendarEventParticipantsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventParticipantsApi->calendarEventParticipantsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Calendar event participant ID | |

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

## `calendarEventParticipantsIdGet()`

```php
calendarEventParticipantsIdGet($id): \Troi\Model\ApiCalendarEventParticipant
```

Fetch calendar event participant for the given calendar event participant ID

Fetch calendar event participant for the given calendar event participant ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventParticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch calendar event participant for the given calendar event participant ID

try {
    $result = $apiInstance->calendarEventParticipantsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventParticipantsApi->calendarEventParticipantsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch calendar event participant for the given calendar event participant ID | |

### Return type

[**\Troi\Model\ApiCalendarEventParticipant**](../Model/ApiCalendarEventParticipant.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calendarEventParticipantsIdPut()`

```php
calendarEventParticipantsIdPut($id, $api_calendar_event_participant): \Troi\Model\ApiSyncItem[]
```

Update calendar event participant

Update calendar event participant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventParticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Calendar event participant ID
$api_calendar_event_participant = new \Troi\Model\ApiCalendarEventParticipant(); // \Troi\Model\ApiCalendarEventParticipant

try {
    $result = $apiInstance->calendarEventParticipantsIdPut($id, $api_calendar_event_participant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventParticipantsApi->calendarEventParticipantsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Calendar event participant ID | |
| **api_calendar_event_participant** | [**\Troi\Model\ApiCalendarEventParticipant**](../Model/ApiCalendarEventParticipant.md)|  | |

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

## `calendarEventParticipantsPost()`

```php
calendarEventParticipantsPost($calendar_event_participants_post_request): \Troi\Model\ApiSyncItem[]
```

Save calendar event participants

Save calendar event participants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CalendarEventParticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_event_participants_post_request = new \Troi\Model\CalendarEventParticipantsPostRequest(); // \Troi\Model\CalendarEventParticipantsPostRequest

try {
    $result = $apiInstance->calendarEventParticipantsPost($calendar_event_participants_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarEventParticipantsApi->calendarEventParticipantsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_event_participants_post_request** | [**\Troi\Model\CalendarEventParticipantsPostRequest**](../Model/CalendarEventParticipantsPostRequest.md)|  | |

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
