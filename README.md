# php-hauki-client


API for the City of Helsinki opening hours database

# Introduction

To do.

# Authentication methods

<SecurityDefinitions />



## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/City-of-Helsinki/php-hauki-client.git"
    }
  ],
  "require": {
    "City-of-Helsinki/php-hauki-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/php-hauki-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InvalidateSignatureApi* | [**invalidateSignature**](docs/Api/InvalidateSignatureApi.md#invalidatesignature) | **POST** /invalidate_signature/ | Invalidate the current Hauki Signed Auth signature
*OpenapiApi* | [**openapiRetrieve**](docs/Api/OpenapiApi.md#openapiretrieve) | **GET** /openapi/ | 
*V1Api* | [**v1AuthRequiredTestList**](docs/Api/V1Api.md#v1authrequiredtestlist) | **GET** /v1/auth_required_test/ | Authentication test
*V1Api* | [**v1DatePeriodCreate**](docs/Api/V1Api.md#v1dateperiodcreate) | **POST** /v1/date_period/ | Create a Date Period
*V1Api* | [**v1DatePeriodDestroy**](docs/Api/V1Api.md#v1dateperioddestroy) | **DELETE** /v1/date_period/{id}/ | Delete existing Date Period
*V1Api* | [**v1DatePeriodList**](docs/Api/V1Api.md#v1dateperiodlist) | **GET** /v1/date_period/ | List Date Periods
*V1Api* | [**v1DatePeriodPartialUpdate**](docs/Api/V1Api.md#v1dateperiodpartialupdate) | **PATCH** /v1/date_period/{id}/ | Update existing Date Period partially
*V1Api* | [**v1DatePeriodPermissionCheckCreate**](docs/Api/V1Api.md#v1dateperiodpermissioncheckcreate) | **POST** /v1/date_period/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1DatePeriodPermissionCheckDestroy**](docs/Api/V1Api.md#v1dateperiodpermissioncheckdestroy) | **DELETE** /v1/date_period/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1DatePeriodPermissionCheckPartialUpdate**](docs/Api/V1Api.md#v1dateperiodpermissioncheckpartialupdate) | **PATCH** /v1/date_period/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1DatePeriodPermissionCheckRetrieve**](docs/Api/V1Api.md#v1dateperiodpermissioncheckretrieve) | **GET** /v1/date_period/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1DatePeriodPermissionCheckUpdate**](docs/Api/V1Api.md#v1dateperiodpermissioncheckupdate) | **PUT** /v1/date_period/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1DatePeriodRetrieve**](docs/Api/V1Api.md#v1dateperiodretrieve) | **GET** /v1/date_period/{id}/ | Find Date Period by ID
*V1Api* | [**v1DatePeriodUpdate**](docs/Api/V1Api.md#v1dateperiodupdate) | **PUT** /v1/date_period/{id}/ | Update existing Date Period
*V1Api* | [**v1OpeningHoursList**](docs/Api/V1Api.md#v1openinghourslist) | **GET** /v1/opening_hours/ | List opening hours
*V1Api* | [**v1OrganizationList**](docs/Api/V1Api.md#v1organizationlist) | **GET** /v1/organization/ | List Organizations
*V1Api* | [**v1OrganizationRetrieve**](docs/Api/V1Api.md#v1organizationretrieve) | **GET** /v1/organization/{id}/ | Find Organizations by ID
*V1Api* | [**v1ResourceCreate**](docs/Api/V1Api.md#v1resourcecreate) | **POST** /v1/resource/ | Create a Resource
*V1Api* | [**v1ResourceDestroy**](docs/Api/V1Api.md#v1resourcedestroy) | **DELETE** /v1/resource/{id}/ | Delete existing Resource
*V1Api* | [**v1ResourceIsOpenNowRetrieve**](docs/Api/V1Api.md#v1resourceisopennowretrieve) | **GET** /v1/resource/{id}/is_open_now/ | Is Resource open now?
*V1Api* | [**v1ResourceList**](docs/Api/V1Api.md#v1resourcelist) | **GET** /v1/resource/ | List Resources
*V1Api* | [**v1ResourceOpeningHoursRetrieve**](docs/Api/V1Api.md#v1resourceopeninghoursretrieve) | **GET** /v1/resource/{id}/opening_hours/ | Get opening hours for Resource
*V1Api* | [**v1ResourcePartialUpdate**](docs/Api/V1Api.md#v1resourcepartialupdate) | **PATCH** /v1/resource/{id}/ | Update existing Resource partially
*V1Api* | [**v1ResourcePermissionCheckCreate**](docs/Api/V1Api.md#v1resourcepermissioncheckcreate) | **POST** /v1/resource/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1ResourcePermissionCheckDestroy**](docs/Api/V1Api.md#v1resourcepermissioncheckdestroy) | **DELETE** /v1/resource/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1ResourcePermissionCheckPartialUpdate**](docs/Api/V1Api.md#v1resourcepermissioncheckpartialupdate) | **PATCH** /v1/resource/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1ResourcePermissionCheckRetrieve**](docs/Api/V1Api.md#v1resourcepermissioncheckretrieve) | **GET** /v1/resource/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1ResourcePermissionCheckUpdate**](docs/Api/V1Api.md#v1resourcepermissioncheckupdate) | **PUT** /v1/resource/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1ResourceRetrieve**](docs/Api/V1Api.md#v1resourceretrieve) | **GET** /v1/resource/{id}/ | Find Resource by ID
*V1Api* | [**v1ResourceUpdate**](docs/Api/V1Api.md#v1resourceupdate) | **PUT** /v1/resource/{id}/ | Update existing Resource
*V1Api* | [**v1RuleCreate**](docs/Api/V1Api.md#v1rulecreate) | **POST** /v1/rule/ | Create a Rule
*V1Api* | [**v1RuleDestroy**](docs/Api/V1Api.md#v1ruledestroy) | **DELETE** /v1/rule/{id}/ | Delete existing Rule
*V1Api* | [**v1RuleList**](docs/Api/V1Api.md#v1rulelist) | **GET** /v1/rule/ | List Rules
*V1Api* | [**v1RulePartialUpdate**](docs/Api/V1Api.md#v1rulepartialupdate) | **PATCH** /v1/rule/{id}/ | Update existing Rule partially
*V1Api* | [**v1RulePermissionCheckCreate**](docs/Api/V1Api.md#v1rulepermissioncheckcreate) | **POST** /v1/rule/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1RulePermissionCheckDestroy**](docs/Api/V1Api.md#v1rulepermissioncheckdestroy) | **DELETE** /v1/rule/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1RulePermissionCheckPartialUpdate**](docs/Api/V1Api.md#v1rulepermissioncheckpartialupdate) | **PATCH** /v1/rule/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1RulePermissionCheckRetrieve**](docs/Api/V1Api.md#v1rulepermissioncheckretrieve) | **GET** /v1/rule/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1RulePermissionCheckUpdate**](docs/Api/V1Api.md#v1rulepermissioncheckupdate) | **PUT** /v1/rule/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1RuleRetrieve**](docs/Api/V1Api.md#v1ruleretrieve) | **GET** /v1/rule/{id}/ | Find Rule by ID
*V1Api* | [**v1RuleUpdate**](docs/Api/V1Api.md#v1ruleupdate) | **PUT** /v1/rule/{id}/ | Update existing Rule
*V1Api* | [**v1TimeSpanCreate**](docs/Api/V1Api.md#v1timespancreate) | **POST** /v1/time_span/ | Create a Time Span
*V1Api* | [**v1TimeSpanDestroy**](docs/Api/V1Api.md#v1timespandestroy) | **DELETE** /v1/time_span/{id}/ | Delete existing Time Span
*V1Api* | [**v1TimeSpanList**](docs/Api/V1Api.md#v1timespanlist) | **GET** /v1/time_span/ | List Time Spans
*V1Api* | [**v1TimeSpanPartialUpdate**](docs/Api/V1Api.md#v1timespanpartialupdate) | **PATCH** /v1/time_span/{id}/ | Update existing Time Span partially
*V1Api* | [**v1TimeSpanPermissionCheckCreate**](docs/Api/V1Api.md#v1timespanpermissioncheckcreate) | **POST** /v1/time_span/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1TimeSpanPermissionCheckDestroy**](docs/Api/V1Api.md#v1timespanpermissioncheckdestroy) | **DELETE** /v1/time_span/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1TimeSpanPermissionCheckPartialUpdate**](docs/Api/V1Api.md#v1timespanpermissioncheckpartialupdate) | **PATCH** /v1/time_span/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1TimeSpanPermissionCheckRetrieve**](docs/Api/V1Api.md#v1timespanpermissioncheckretrieve) | **GET** /v1/time_span/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1TimeSpanPermissionCheckUpdate**](docs/Api/V1Api.md#v1timespanpermissioncheckupdate) | **PUT** /v1/time_span/{id}/permission_check/ | Check method permission for object
*V1Api* | [**v1TimeSpanRetrieve**](docs/Api/V1Api.md#v1timespanretrieve) | **GET** /v1/time_span/{id}/ | Find Time Span by ID
*V1Api* | [**v1TimeSpanUpdate**](docs/Api/V1Api.md#v1timespanupdate) | **PUT** /v1/time_span/{id}/ | Update existing Time Span

## Models

- [AuthRequiredTest](docs/Model/AuthRequiredTest.md)
- [BlankEnum](docs/Model/BlankEnum.md)
- [ContextEnum](docs/Model/ContextEnum.md)
- [DailyOpeningHours](docs/Model/DailyOpeningHours.md)
- [DataSource](docs/Model/DataSource.md)
- [DatePeriod](docs/Model/DatePeriod.md)
- [FrequencyModifierEnum](docs/Model/FrequencyModifierEnum.md)
- [IsOpenNow](docs/Model/IsOpenNow.md)
- [NullEnum](docs/Model/NullEnum.md)
- [Organization](docs/Model/Organization.md)
- [PaginatedResourceDailyOpeningHoursList](docs/Model/PaginatedResourceDailyOpeningHoursList.md)
- [PaginatedResourceList](docs/Model/PaginatedResourceList.md)
- [PatchedDatePeriod](docs/Model/PatchedDatePeriod.md)
- [PatchedResource](docs/Model/PatchedResource.md)
- [PatchedRule](docs/Model/PatchedRule.md)
- [PatchedTimeSpan](docs/Model/PatchedTimeSpan.md)
- [PeriodOrigin](docs/Model/PeriodOrigin.md)
- [PermissionCheck](docs/Model/PermissionCheck.md)
- [Resource](docs/Model/Resource.md)
- [ResourceDailyOpeningHours](docs/Model/ResourceDailyOpeningHours.md)
- [ResourceOrigin](docs/Model/ResourceOrigin.md)
- [ResourceSimple](docs/Model/ResourceSimple.md)
- [ResourceStateEnum](docs/Model/ResourceStateEnum.md)
- [ResourceTypeEnum](docs/Model/ResourceTypeEnum.md)
- [Rule](docs/Model/Rule.md)
- [RuleCreate](docs/Model/RuleCreate.md)
- [SubjectEnum](docs/Model/SubjectEnum.md)
- [TimeElement](docs/Model/TimeElement.md)
- [TimeSpan](docs/Model/TimeSpan.md)
- [TimeSpanCreate](docs/Model/TimeSpanCreate.md)
- [TimeSpanGroup](docs/Model/TimeSpanGroup.md)
- [User](docs/Model/User.md)
- [WeekdaysEnum](docs/Model/WeekdaysEnum.md)

## Authorization

### HaukiSignedAuthentication

- **Type**: API key
- **API key parameter name**: signature
- **Location**: URL query string



### cookieAuth

- **Type**: API key
- **API key parameter name**: Session
- **Location**: 



### tokenAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
