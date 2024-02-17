# Troi\BookingYearApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookingYearsGet()**](BookingYearApi.md#bookingYearsGet) | **GET** /bookingYears | Fetch all Booking Years for the given client ID |
| [**bookingYearsIdDelete()**](BookingYearApi.md#bookingYearsIdDelete) | **DELETE** /bookingYears/{id} | Delete Booking Year |
| [**bookingYearsIdGet()**](BookingYearApi.md#bookingYearsIdGet) | **GET** /bookingYears/{id} | Fetch Booking Year for the given ID |
| [**bookingYearsIdPut()**](BookingYearApi.md#bookingYearsIdPut) | **PUT** /bookingYears/{id} | Update Booking Year |
| [**bookingYearsPost()**](BookingYearApi.md#bookingYearsPost) | **POST** /bookingYears | Save Booking Year |


## `bookingYearsGet()`

```php
bookingYearsGet($client_id): \Troi\Model\ApiBookingYear[]
```

Fetch all Booking Years for the given client ID

Fetch all Booking Years for the given client ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BookingYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Fetch all Booking Years for the given client ID

try {
    $result = $apiInstance->bookingYearsGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingYearApi->bookingYearsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Fetch all Booking Years for the given client ID | |

### Return type

[**\Troi\Model\ApiBookingYear[]**](../Model/ApiBookingYear.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingYearsIdDelete()`

```php
bookingYearsIdDelete($id): int
```

Delete Booking Year

Delete Booking Year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BookingYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Booking Year id

try {
    $result = $apiInstance->bookingYearsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingYearApi->bookingYearsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Booking Year id | |

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

## `bookingYearsIdGet()`

```php
bookingYearsIdGet($id): \Troi\Model\ApiBookingYear
```

Fetch Booking Year for the given ID

Fetch Booking Year for the given ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BookingYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch Billing for the given Billing ID

try {
    $result = $apiInstance->bookingYearsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingYearApi->bookingYearsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch Billing for the given Billing ID | |

### Return type

[**\Troi\Model\ApiBookingYear**](../Model/ApiBookingYear.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingYearsIdPut()`

```php
bookingYearsIdPut($id, $api_booking_year): \Troi\Model\ApiSyncItem[]
```

Update Booking Year

Update Booking Year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BookingYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Booking Year id
$api_booking_year = new \Troi\Model\ApiBookingYear(); // \Troi\Model\ApiBookingYear

try {
    $result = $apiInstance->bookingYearsIdPut($id, $api_booking_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingYearApi->bookingYearsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Booking Year id | |
| **api_booking_year** | [**\Troi\Model\ApiBookingYear**](../Model/ApiBookingYear.md)|  | |

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

## `bookingYearsPost()`

```php
bookingYearsPost($booking_years_post_request): \Troi\Model\ApiSyncItem[]
```

Save Booking Year

Save Booking Year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\BookingYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_years_post_request = new \Troi\Model\BookingYearsPostRequest(); // \Troi\Model\BookingYearsPostRequest

try {
    $result = $apiInstance->bookingYearsPost($booking_years_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingYearApi->bookingYearsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_years_post_request** | [**\Troi\Model\BookingYearsPostRequest**](../Model/BookingYearsPostRequest.md)|  | |

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
