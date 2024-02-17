# Troi\CategoriesApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contactCategoriesGet()**](CategoriesApi.md#contactCategoriesGet) | **GET** /contactCategories | Fetch all contact categories |
| [**contactCategoriesIdDelete()**](CategoriesApi.md#contactCategoriesIdDelete) | **DELETE** /contactCategories/{id} | Delete contact categorie |
| [**contactCategoriesIdGet()**](CategoriesApi.md#contactCategoriesIdGet) | **GET** /contactCategories/{id} | Fetch contact categorie by ID |
| [**contactCategoriesIdPut()**](CategoriesApi.md#contactCategoriesIdPut) | **PUT** /contactCategories/{id} | Update contact categorie |
| [**contactCategoriesPost()**](CategoriesApi.md#contactCategoriesPost) | **POST** /contactCategories | Save contact category |


## `contactCategoriesGet()`

```php
contactCategoriesGet($contact_id, $category_id, $size, $from): \Troi\Model\ApiContactCategory[]
```

Fetch all contact categories

Fetch all contact categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 1; // int | Fetch all contact categories for the given contact ID
$category_id = 1; // int | Fetch all contact categories for the given category ID
$size = 50; // int | Fetch contact categories for the given size use together with \"from\"
$from = 100; // int | Fetch contact category from the given ID use together with \"size\"

try {
    $result = $apiInstance->contactCategoriesGet($contact_id, $category_id, $size, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->contactCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| Fetch all contact categories for the given contact ID | [optional] |
| **category_id** | **int**| Fetch all contact categories for the given category ID | [optional] |
| **size** | **int**| Fetch contact categories for the given size use together with \&quot;from\&quot; | [optional] |
| **from** | **int**| Fetch contact category from the given ID use together with \&quot;size\&quot; | [optional] |

### Return type

[**\Troi\Model\ApiContactCategory[]**](../Model/ApiContactCategory.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactCategoriesIdDelete()`

```php
contactCategoriesIdDelete($id): int
```

Delete contact categorie

Delete contact categorie

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Contact categorie ID

try {
    $result = $apiInstance->contactCategoriesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->contactCategoriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Contact categorie ID | |

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

## `contactCategoriesIdGet()`

```php
contactCategoriesIdGet($id): \Troi\Model\ApiContactCategory
```

Fetch contact categorie by ID

Fetch contact categorie by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch contact categorie by ID

try {
    $result = $apiInstance->contactCategoriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->contactCategoriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch contact categorie by ID | |

### Return type

[**\Troi\Model\ApiContactCategory**](../Model/ApiContactCategory.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactCategoriesIdPut()`

```php
contactCategoriesIdPut($id, $api_contact_category): \Troi\Model\ApiSyncItem[]
```

Update contact categorie

Update contact categorie

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Contact categorie ID
$api_contact_category = new \Troi\Model\ApiContactCategory(); // \Troi\Model\ApiContactCategory

try {
    $result = $apiInstance->contactCategoriesIdPut($id, $api_contact_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->contactCategoriesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Contact categorie ID | |
| **api_contact_category** | [**\Troi\Model\ApiContactCategory**](../Model/ApiContactCategory.md)|  | |

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

## `contactCategoriesPost()`

```php
contactCategoriesPost($contact_categories_post_request): \Troi\Model\ApiSyncItem[]
```

Save contact category

Save contact category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_categories_post_request = new \Troi\Model\ContactCategoriesPostRequest(); // \Troi\Model\ContactCategoriesPostRequest

try {
    $result = $apiInstance->contactCategoriesPost($contact_categories_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->contactCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_categories_post_request** | [**\Troi\Model\ContactCategoriesPostRequest**](../Model/ContactCategoriesPostRequest.md)|  | |

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
