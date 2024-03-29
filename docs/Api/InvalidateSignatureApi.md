# Hauki\InvalidateSignatureApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**invalidateSignature()**](InvalidateSignatureApi.md#invalidateSignature) | **POST** /invalidate_signature/ | Invalidate the current Hauki Signed Auth signature


## `invalidateSignature()`

```php
invalidateSignature()
```

Invalidate the current Hauki Signed Auth signature

Invalidate the current Hauki Signed Auth signature

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

// Configure API key authorization: tokenAuth
$config = Hauki\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Hauki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Hauki\Api\InvalidateSignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->invalidateSignature();
} catch (Exception $e) {
    echo 'Exception when calling InvalidateSignatureApi->invalidateSignature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[HaukiSignedAuthentication](../../README.md#HaukiSignedAuthentication), [cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
