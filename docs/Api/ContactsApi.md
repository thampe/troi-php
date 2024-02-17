# Troi\ContactsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contactsGet()**](ContactsApi.md#contactsGet) | **GET** /contacts | Fetch all contacts |
| [**contactsIdDelete()**](ContactsApi.md#contactsIdDelete) | **DELETE** /contacts/{id} | Delete contact |
| [**contactsIdGet()**](ContactsApi.md#contactsIdGet) | **GET** /contacts/{id} | Fetch contact for the given ID |
| [**contactsIdPut()**](ContactsApi.md#contactsIdPut) | **PUT** /contacts/{id} | Update contact |
| [**contactsPost()**](ContactsApi.md#contactsPost) | **POST** /contacts | Save contact |


## `contactsGet()`

```php
contactsGet($sync_item, $from, $size, $since, $favorites_only, $contact_type, $search, $search_field, $with_custom_fields, $parent_id, $is_associated_with_customer, $only_inactive, $external_id): \Troi\Model\ApiContact[]
```

Fetch all contacts

Fetch all contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_item = false; // bool | Fetch Contacts and return them as Sync Item
$from = 0; // int | Fetch Contacts from the given ID, use togehter with \"from\"
$size = 100; // int | Fetch Contacts for the given size use together with \"size\"
$since = 0; // string | Fetch Contacts for the given date time (only items modified since ETag will be returned)
$favorites_only = true; // bool | Fetch favorites Contacts only
$contact_type = ApiContact:Person; // string | Fetch Contacts for the given Contact Type
$search = Troi; // string | Fetch Contacts for the given Search Term
$search_field = 'search_field_example'; // string | Fetch Contacts for the given Search Field  single value: searchField={\"categoryId\":392}  multiple values: searchField={\"categoryId\":[392,396]}  available search options: `categoryId` - string|array `firstName` - string `middleName` - string `lastName` - string `fullName` - string `privateEmail` - string `officeEmail` - string `companyEmail` - string `isDeleted` - bool
$with_custom_fields = 1; // int | Fetch Contacts for the given with Custom Field
$parent_id = 1; // int | Fetch Contacts for the given parent ID
$is_associated_with_customer = false; // bool | show all contacts that associated with some customer
$only_inactive = false; // bool | show all inactive contacts
$external_id = 12345678-90AB-CDEF-1234-567890ABCDEF; // string | <PUT SOME DESCRIPTION>

try {
    $result = $apiInstance->contactsGet($sync_item, $from, $size, $since, $favorites_only, $contact_type, $search, $search_field, $with_custom_fields, $parent_id, $is_associated_with_customer, $only_inactive, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_item** | **bool**| Fetch Contacts and return them as Sync Item | [optional] |
| **from** | **int**| Fetch Contacts from the given ID, use togehter with \&quot;from\&quot; | [optional] |
| **size** | **int**| Fetch Contacts for the given size use together with \&quot;size\&quot; | [optional] |
| **since** | **string**| Fetch Contacts for the given date time (only items modified since ETag will be returned) | [optional] |
| **favorites_only** | **bool**| Fetch favorites Contacts only | [optional] |
| **contact_type** | **string**| Fetch Contacts for the given Contact Type | [optional] |
| **search** | **string**| Fetch Contacts for the given Search Term | [optional] |
| **search_field** | **string**| Fetch Contacts for the given Search Field  single value: searchField&#x3D;{\&quot;categoryId\&quot;:392}  multiple values: searchField&#x3D;{\&quot;categoryId\&quot;:[392,396]}  available search options: &#x60;categoryId&#x60; - string|array &#x60;firstName&#x60; - string &#x60;middleName&#x60; - string &#x60;lastName&#x60; - string &#x60;fullName&#x60; - string &#x60;privateEmail&#x60; - string &#x60;officeEmail&#x60; - string &#x60;companyEmail&#x60; - string &#x60;isDeleted&#x60; - bool | [optional] |
| **with_custom_fields** | **int**| Fetch Contacts for the given with Custom Field | [optional] |
| **parent_id** | **int**| Fetch Contacts for the given parent ID | [optional] |
| **is_associated_with_customer** | **bool**| show all contacts that associated with some customer | [optional] |
| **only_inactive** | **bool**| show all inactive contacts | [optional] |
| **external_id** | **string**| &lt;PUT SOME DESCRIPTION&gt; | [optional] |

### Return type

[**\Troi\Model\ApiContact[]**](../Model/ApiContact.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsIdDelete()`

```php
contactsIdDelete($id): int
```

Delete contact

Delete contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Contact ID

try {
    $result = $apiInstance->contactsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Contact ID | |

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

## `contactsIdGet()`

```php
contactsIdGet($id): \Troi\Model\ApiContact
```

Fetch contact for the given ID

Fetch contact for the given ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch contact for the given ID

try {
    $result = $apiInstance->contactsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch contact for the given ID | |

### Return type

[**\Troi\Model\ApiContact**](../Model/ApiContact.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsIdPut()`

```php
contactsIdPut($id, $api_contact): \Troi\Model\ApiSyncItem[]
```

Update contact

Update contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Contact ID
$api_contact = new \Troi\Model\ApiContact(); // \Troi\Model\ApiContact

try {
    $result = $apiInstance->contactsIdPut($id, $api_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Contact ID | |
| **api_contact** | [**\Troi\Model\ApiContact**](../Model/ApiContact.md)|  | |

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

## `contactsPost()`

```php
contactsPost($contacts_post_request): \Troi\Model\ApiSyncItem[]
```

Save contact

Save contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contacts_post_request = new \Troi\Model\ContactsPostRequest(); // \Troi\Model\ContactsPostRequest

try {
    $result = $apiInstance->contactsPost($contacts_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contacts_post_request** | [**\Troi\Model\ContactsPostRequest**](../Model/ContactsPostRequest.md)|  | |

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
