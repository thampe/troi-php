# Troi\ProjectsApi

All URIs are relative to https://demo.troi.software/api/v2/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectsGet()**](ProjectsApi.md#projectsGet) | **GET** /projects | Fetch all projects from given client |
| [**projectsIdDelete()**](ProjectsApi.md#projectsIdDelete) | **DELETE** /projects/{id} | Delete project |
| [**projectsIdGet()**](ProjectsApi.md#projectsIdGet) | **GET** /projects/{id} | Fetch project for the given project ID |
| [**projectsIdPut()**](ProjectsApi.md#projectsIdPut) | **PUT** /projects/{id} | Update project |
| [**projectsPost()**](ProjectsApi.md#projectsPost) | **POST** /projects | Save project |


## `projectsGet()`

```php
projectsGet($client_id, $from, $size, $since, $sync_item, $customer_id, $customer_is_active, $project_is_in_process, $project_status_id, $project_type_id, $project_leader_id, $search, $extended_object): \Troi\Model\ApiProject[]
```

Fetch all projects from given client

Fetch all projects from given client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1; // int | Client ID
$from = 1; // int | Fetch all projects for the given client ID and start with given project ID, use togehter with \"size\"
$size = 1; // int | Fetch all projects for the given client ID and start with given project ID, use togehter with \"from\"
$since = 20110722153556; // string | Fetch all projects for the given client ID and given date, only items modified since ETag will be returned
$sync_item = false; // bool | Fetch all projects for the given client ID and set syncitems \"true\" to return ApiSyncItems
$customer_id = 1; // string | Fetch all projects for the given client ID and given customer ID
$customer_is_active = true; // bool | Fetch all projects for the given client ID and given parameter, set to \"true\" to get only projects of active customers
$project_is_in_process = true; // bool | Fetch all projects for the given client ID and given parameter, set to \"true\" to get only \"in process\" projects
$project_status_id = new \Troi\Model\ProjectsGetProjectStatusIdParameter(); // ProjectsGetProjectStatusIdParameter | Fetch all projects for the given client ID and given project status ID
$project_type_id = new \Troi\Model\ProjectsGetProjectStatusIdParameter(); // ProjectsGetProjectStatusIdParameter | Fetch all projects for the given client ID and given project type ID
$project_leader_id = 1; // int | Fetch all projects for the given client ID and given leader ID
$search = Website; // string | Fetch all projects for the given client ID and givenSearch Term
$extended_object = false; // bool | Fetch all projects for the given client ID and extend it with real objects instead of sync item

try {
    $result = $apiInstance->projectsGet($client_id, $from, $size, $since, $sync_item, $customer_id, $customer_is_active, $project_is_in_process, $project_status_id, $project_type_id, $project_leader_id, $search, $extended_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| Client ID | |
| **from** | **int**| Fetch all projects for the given client ID and start with given project ID, use togehter with \&quot;size\&quot; | [optional] |
| **size** | **int**| Fetch all projects for the given client ID and start with given project ID, use togehter with \&quot;from\&quot; | [optional] |
| **since** | **string**| Fetch all projects for the given client ID and given date, only items modified since ETag will be returned | [optional] |
| **sync_item** | **bool**| Fetch all projects for the given client ID and set syncitems \&quot;true\&quot; to return ApiSyncItems | [optional] |
| **customer_id** | **string**| Fetch all projects for the given client ID and given customer ID | [optional] |
| **customer_is_active** | **bool**| Fetch all projects for the given client ID and given parameter, set to \&quot;true\&quot; to get only projects of active customers | [optional] |
| **project_is_in_process** | **bool**| Fetch all projects for the given client ID and given parameter, set to \&quot;true\&quot; to get only \&quot;in process\&quot; projects | [optional] |
| **project_status_id** | [**ProjectsGetProjectStatusIdParameter**](../Model/.md)| Fetch all projects for the given client ID and given project status ID | [optional] |
| **project_type_id** | [**ProjectsGetProjectStatusIdParameter**](../Model/.md)| Fetch all projects for the given client ID and given project type ID | [optional] |
| **project_leader_id** | **int**| Fetch all projects for the given client ID and given leader ID | [optional] |
| **search** | **string**| Fetch all projects for the given client ID and givenSearch Term | [optional] |
| **extended_object** | **bool**| Fetch all projects for the given client ID and extend it with real objects instead of sync item | [optional] |

### Return type

[**\Troi\Model\ApiProject[]**](../Model/ApiProject.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsIdDelete()`

```php
projectsIdDelete($id): int
```

Delete project

Delete project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Project ID

try {
    $result = $apiInstance->projectsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project ID | |

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

## `projectsIdGet()`

```php
projectsIdGet($id): \Troi\Model\ApiProject
```

Fetch project for the given project ID

Fetch project for the given project ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Fetch project for the project ID

try {
    $result = $apiInstance->projectsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fetch project for the project ID | |

### Return type

[**\Troi\Model\ApiProject**](../Model/ApiProject.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsIdPut()`

```php
projectsIdPut($id, $api_project): \Troi\Model\ApiSyncItem[]
```

Update project

Update project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Project ID
$api_project = new \Troi\Model\ApiProject(); // \Troi\Model\ApiProject

try {
    $result = $apiInstance->projectsIdPut($id, $api_project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project ID | |
| **api_project** | [**\Troi\Model\ApiProject**](../Model/ApiProject.md)|  | |

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

## `projectsPost()`

```php
projectsPost($projects_post_request): \Troi\Model\ApiSyncItem[]
```

Save project

Save project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Troi\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_post_request = new \Troi\Model\ProjectsPostRequest(); // \Troi\Model\ProjectsPostRequest

try {
    $result = $apiInstance->projectsPost($projects_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projects_post_request** | [**\Troi\Model\ProjectsPostRequest**](../Model/ProjectsPostRequest.md)|  | |

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
