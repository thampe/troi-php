# Troi\ContactAccessGroupsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contactAccessGroupsGet()**](ContactAccessGroupsApi.md#contactAccessGroupsGet) | **GET** /contactAccessGroups | Fetch all access groups for contacts |


## `contactAccessGroupsGet()`

```php
contactAccessGroupsGet(): \Troi\Model\ContactAccessGroupsGet200ResponseInner[]
```

Fetch all access groups for contacts

Fetch all access groups for contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ContactAccessGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contactAccessGroupsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccessGroupsApi->contactAccessGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Troi\Model\ContactAccessGroupsGet200ResponseInner[]**](../Model/ContactAccessGroupsGet200ResponseInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
