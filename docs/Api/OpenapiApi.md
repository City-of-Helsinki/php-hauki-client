# Hauki\OpenapiApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**openapiRetrieve()**](OpenapiApi.md#openapiRetrieve) | **GET** /openapi/ | 


## `openapiRetrieve()`

```php
openapiRetrieve($format, $lang): map[string,mixed]
```



OpenApi3 schema for this API. Format can be selected via content negotiation.  - YAML: application/vnd.oai.openapi - JSON: application/vnd.oai.openapi+json

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HaukiSignedAuthentication
$config = Hauki\Configuration::getDefaultConfiguration()->setApiKey('signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Hauki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('signature', 'Bearer');

// Configure API key authorization: cookieAuth
$config = Hauki\Configuration::getDefaultConfiguration()->setApiKey('Session', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Hauki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session', 'Bearer');

// Configure Bearer (APIToken) authorization: tokenAuth
$config = Hauki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hauki\Api\OpenapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = 'format_example'; // string
$lang = 'lang_example'; // string

try {
    $result = $apiInstance->openapiRetrieve($format, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenapiApi->openapiRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**|  | [optional]
 **lang** | **string**|  | [optional]

### Return type

**map[string,mixed]**

### Authorization

[HaukiSignedAuthentication](../../README.md#HaukiSignedAuthentication), [cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.oai.openapi`, `application/yaml`, `application/vnd.oai.openapi+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
