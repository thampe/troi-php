# OpenAPIClient-php

This is the official API documentation of Troi.

# Authentication

Troi offers basic auth for authentication.

<security-definitions />



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0+.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run the following:

```
composer require thampe/troi-sdk 
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Troi\Configuration::getDefaultConfiguration()
              ->setHost('YOUR_HOST')
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_V2_TOKEN');


$apiInstance = new Troi\Api\AbsencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 20190401; // int | Start date
$end = 20190401; // int | End date
$employee_id = 33; // int | Employee id

try {
    $result = $apiInstance->absencesGet($start, $end, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsencesApi->absencesGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://demo.troi.software/api/v2/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AbsencesApi* | [**absencesGet**](docs/Api/AbsencesApi.md#absencesget) | **GET** /absences | Fetch all absences for the current employee given Start Date and End Date
*AbsencesApi* | [**absencesIdGet**](docs/Api/AbsencesApi.md#absencesidget) | **GET** /absences/{id} | Fetch Absence for the given Absence ID
*AbsencesApi* | [**absencesIdPut**](docs/Api/AbsencesApi.md#absencesidput) | **PUT** /absences/{id} | Update Absence object
*AbsencesApi* | [**absencesPost**](docs/Api/AbsencesApi.md#absencespost) | **POST** /absences | Save Absence object
*AccountGroupsApi* | [**accountGroupsGet**](docs/Api/AccountGroupsApi.md#accountgroupsget) | **GET** /accountGroups | Fetch all account groups for the given clientId
*AccountGroupsApi* | [**accountGroupsIdDelete**](docs/Api/AccountGroupsApi.md#accountgroupsiddelete) | **DELETE** /accountGroups/{id} | Delete Absence Groups
*AccountGroupsApi* | [**accountGroupsIdGet**](docs/Api/AccountGroupsApi.md#accountgroupsidget) | **GET** /accountGroups/{id} | Fetch Account Group for the given Account Group ID
*AccountGroupsApi* | [**accountGroupsIdPut**](docs/Api/AccountGroupsApi.md#accountgroupsidput) | **PUT** /accountGroups/{id} | Update Account Groups Object
*AccountGroupsApi* | [**accountGroupsPost**](docs/Api/AccountGroupsApi.md#accountgroupspost) | **POST** /accountGroups | Save account groups object
*AccountingEntriesApi* | [**accountingEntriesGet**](docs/Api/AccountingEntriesApi.md#accountingentriesget) | **GET** /accountingEntries | Fetch all Accounting Entries for the given clientId
*AccountingEntriesApi* | [**accountingEntriesIdDelete**](docs/Api/AccountingEntriesApi.md#accountingentriesiddelete) | **DELETE** /accountingEntries/{id} | Delete Accounting Entry
*AccountingEntriesApi* | [**accountingEntriesIdGet**](docs/Api/AccountingEntriesApi.md#accountingentriesidget) | **GET** /accountingEntries/{id} | Fetch Accounting Entry for the given Accounting Entry ID
*AccountingEntriesApi* | [**accountingEntriesIdPut**](docs/Api/AccountingEntriesApi.md#accountingentriesidput) | **PUT** /accountingEntries/{id} | Update Accounting Entry Object
*AccountingEntriesApi* | [**accountingEntriesPost**](docs/Api/AccountingEntriesApi.md#accountingentriespost) | **POST** /accountingEntries | Save Accounting Entry Object
*AccountingEntryCollectionsApi* | [**accountingEntryCollectionsGet**](docs/Api/AccountingEntryCollectionsApi.md#accountingentrycollectionsget) | **GET** /accountingEntryCollections | Fetch all accounting entry collections for the given clientId
*AccountingEntryCollectionsApi* | [**accountingEntryCollectionsIdDelete**](docs/Api/AccountingEntryCollectionsApi.md#accountingentrycollectionsiddelete) | **DELETE** /accountingEntryCollections/{id} | Delete accounting entry collection
*AccountingEntryCollectionsApi* | [**accountingEntryCollectionsIdGet**](docs/Api/AccountingEntryCollectionsApi.md#accountingentrycollectionsidget) | **GET** /accountingEntryCollections/{id} | Fetch accounting entry collection for the given accounting entry collection ID
*AccountingEntryCollectionsApi* | [**accountingEntryCollectionsIdPut**](docs/Api/AccountingEntryCollectionsApi.md#accountingentrycollectionsidput) | **PUT** /accountingEntryCollections/{id} | Update accounting entry collection
*AccountingEntryCollectionsApi* | [**accountingEntryCollectionsPost**](docs/Api/AccountingEntryCollectionsApi.md#accountingentrycollectionspost) | **POST** /accountingEntryCollections | Save accounting entry collections
*AccountsApi* | [**accountsGet**](docs/Api/AccountsApi.md#accountsget) | **GET** /accounts | Fetch all Accounts for the given clientId
*AccountsApi* | [**accountsIdDelete**](docs/Api/AccountsApi.md#accountsiddelete) | **DELETE** /accounts/{id} | Delete Account
*AccountsApi* | [**accountsIdGet**](docs/Api/AccountsApi.md#accountsidget) | **GET** /accounts/{id} | Fetch Account given Account ID
*AccountsApi* | [**accountsIdPut**](docs/Api/AccountsApi.md#accountsidput) | **PUT** /accounts/{id} | Update Account
*AccountsApi* | [**accountsPost**](docs/Api/AccountsApi.md#accountspost) | **POST** /accounts | Save Account
*BillingApi* | [**billingsHoursGet**](docs/Api/BillingApi.md#billingshoursget) | **GET** /billings/hours | Fetch all billings for the given parameter
*BillingApi* | [**billingsHoursIdDelete**](docs/Api/BillingApi.md#billingshoursiddelete) | **DELETE** /billings/hours/{id} | Delete Billing
*BillingApi* | [**billingsHoursIdGet**](docs/Api/BillingApi.md#billingshoursidget) | **GET** /billings/hours/{id} | Fetch Billing for the given Billing ID
*BillingApi* | [**billingsHoursIdPut**](docs/Api/BillingApi.md#billingshoursidput) | **PUT** /billings/hours/{id} | Update Billing
*BillingApi* | [**billingsHoursPost**](docs/Api/BillingApi.md#billingshourspost) | **POST** /billings/hours | Save Billing
*BookingYearApi* | [**bookingYearsGet**](docs/Api/BookingYearApi.md#bookingyearsget) | **GET** /bookingYears | Fetch all Booking Years for the given client ID
*BookingYearApi* | [**bookingYearsIdDelete**](docs/Api/BookingYearApi.md#bookingyearsiddelete) | **DELETE** /bookingYears/{id} | Delete Booking Year
*BookingYearApi* | [**bookingYearsIdGet**](docs/Api/BookingYearApi.md#bookingyearsidget) | **GET** /bookingYears/{id} | Fetch Booking Year for the given ID
*BookingYearApi* | [**bookingYearsIdPut**](docs/Api/BookingYearApi.md#bookingyearsidput) | **PUT** /bookingYears/{id} | Update Booking Year
*BookingYearApi* | [**bookingYearsPost**](docs/Api/BookingYearApi.md#bookingyearspost) | **POST** /bookingYears | Save Booking Year
*CalculationPositionsApi* | [**calculationPositionsGet**](docs/Api/CalculationPositionsApi.md#calculationpositionsget) | **GET** /calculationPositions | Fetch all calculation positions for the given client ID
*CalculationPositionsApi* | [**calculationPositionsIdDelete**](docs/Api/CalculationPositionsApi.md#calculationpositionsiddelete) | **DELETE** /calculationPositions/{id} | Delete calculation position
*CalculationPositionsApi* | [**calculationPositionsIdGet**](docs/Api/CalculationPositionsApi.md#calculationpositionsidget) | **GET** /calculationPositions/{id} | Fetch calculation position for the given calculation position ID
*CalculationPositionsApi* | [**calculationPositionsIdPut**](docs/Api/CalculationPositionsApi.md#calculationpositionsidput) | **PUT** /calculationPositions/{id} | Update calculation position
*CalculationPositionsApi* | [**calculationPositionsPost**](docs/Api/CalculationPositionsApi.md#calculationpositionspost) | **POST** /calculationPositions | Save Calculation Position
*CalendarEventParticipantsApi* | [**calendarEventParticipantsGet**](docs/Api/CalendarEventParticipantsApi.md#calendareventparticipantsget) | **GET** /calendarEventParticipants | Fetch all calendar event participants
*CalendarEventParticipantsApi* | [**calendarEventParticipantsIdDelete**](docs/Api/CalendarEventParticipantsApi.md#calendareventparticipantsiddelete) | **DELETE** /calendarEventParticipants/{id} | Delete calendar event participant
*CalendarEventParticipantsApi* | [**calendarEventParticipantsIdGet**](docs/Api/CalendarEventParticipantsApi.md#calendareventparticipantsidget) | **GET** /calendarEventParticipants/{id} | Fetch calendar event participant for the given calendar event participant ID
*CalendarEventParticipantsApi* | [**calendarEventParticipantsIdPut**](docs/Api/CalendarEventParticipantsApi.md#calendareventparticipantsidput) | **PUT** /calendarEventParticipants/{id} | Update calendar event participant
*CalendarEventParticipantsApi* | [**calendarEventParticipantsPost**](docs/Api/CalendarEventParticipantsApi.md#calendareventparticipantspost) | **POST** /calendarEventParticipants | Save calendar event participants
*CalendarEventsApi* | [**calendarEventsGet**](docs/Api/CalendarEventsApi.md#calendareventsget) | **GET** /calendarEvents | Fetch all calendar events at the given range
*CalendarEventsApi* | [**calendarEventsIdDelete**](docs/Api/CalendarEventsApi.md#calendareventsiddelete) | **DELETE** /calendarEvents/{id} | Delete calendar event
*CalendarEventsApi* | [**calendarEventsIdGet**](docs/Api/CalendarEventsApi.md#calendareventsidget) | **GET** /calendarEvents/{id} | Fetch calendar event for the given calendar event ID
*CalendarEventsApi* | [**calendarEventsIdPut**](docs/Api/CalendarEventsApi.md#calendareventsidput) | **PUT** /calendarEvents/{id} | Update calendar event
*CalendarEventsApi* | [**calendarEventsPost**](docs/Api/CalendarEventsApi.md#calendareventspost) | **POST** /calendarEvents | Save calendar event
*CategoriesApi* | [**contactCategoriesGet**](docs/Api/CategoriesApi.md#contactcategoriesget) | **GET** /contactCategories | Fetch all contact categories
*CategoriesApi* | [**contactCategoriesIdDelete**](docs/Api/CategoriesApi.md#contactcategoriesiddelete) | **DELETE** /contactCategories/{id} | Delete contact categorie
*CategoriesApi* | [**contactCategoriesIdGet**](docs/Api/CategoriesApi.md#contactcategoriesidget) | **GET** /contactCategories/{id} | Fetch contact categorie by ID
*CategoriesApi* | [**contactCategoriesIdPut**](docs/Api/CategoriesApi.md#contactcategoriesidput) | **PUT** /contactCategories/{id} | Update contact categorie
*CategoriesApi* | [**contactCategoriesPost**](docs/Api/CategoriesApi.md#contactcategoriespost) | **POST** /contactCategories | Save contact category
*CategoriesApi* | [**miscCategoriesGet**](docs/Api/CategoriesApi.md#misccategoriesget) | **GET** /misc/categories | Fetch all Categories
*ClientsApi* | [**clientsGet**](docs/Api/ClientsApi.md#clientsget) | **GET** /clients | Fetch all Tenants (formerly Clients)
*ClientsApi* | [**clientsIdGet**](docs/Api/ClientsApi.md#clientsidget) | **GET** /clients/{id} | Fetch client for the given client ID
*ContactAccessGroupsApi* | [**contactAccessGroupsGet**](docs/Api/ContactAccessGroupsApi.md#contactaccessgroupsget) | **GET** /contactAccessGroups | Fetch all access groups for contacts
*ContactsApi* | [**contactsGet**](docs/Api/ContactsApi.md#contactsget) | **GET** /contacts | Fetch all contacts
*ContactsApi* | [**contactsIdDelete**](docs/Api/ContactsApi.md#contactsiddelete) | **DELETE** /contacts/{id} | Delete contact
*ContactsApi* | [**contactsIdGet**](docs/Api/ContactsApi.md#contactsidget) | **GET** /contacts/{id} | Fetch contact for the given ID
*ContactsApi* | [**contactsIdPut**](docs/Api/ContactsApi.md#contactsidput) | **PUT** /contacts/{id} | Update contact
*ContactsApi* | [**contactsPost**](docs/Api/ContactsApi.md#contactspost) | **POST** /contacts | Save contact
*CurrenciesApi* | [**miscCategoriesIdGet**](docs/Api/CurrenciesApi.md#misccategoriesidget) | **GET** /misc/categories/{id} | Fetch Category given category ID
*CurrenciesApi* | [**miscCurrenciesGet**](docs/Api/CurrenciesApi.md#misccurrenciesget) | **GET** /misc/currencies | Fetch all Currencies for the given clientId
*CurrenciesApi* | [**miscCurrenciesIdGet**](docs/Api/CurrenciesApi.md#misccurrenciesidget) | **GET** /misc/currencies/{id} | Fetch Currency given currency ID
*CustomersApi* | [**customersGet**](docs/Api/CustomersApi.md#customersget) | **GET** /customers | Fetch all customers for the given client ID
*CustomersApi* | [**customersIdGet**](docs/Api/CustomersApi.md#customersidget) | **GET** /customers/{id} | Fetch customer for the given customer ID
*CustomersApi* | [**customersIdPut**](docs/Api/CustomersApi.md#customersidput) | **PUT** /customers/{id} | Update customer
*CustomersApi* | [**customersPost**](docs/Api/CustomersApi.md#customerspost) | **POST** /customers | Save customer
*EmployeesApi* | [**employeesGet**](docs/Api/EmployeesApi.md#employeesget) | **GET** /employees | Fetch all Employees for the given clientId
*EmployeesApi* | [**employeesIdGet**](docs/Api/EmployeesApi.md#employeesidget) | **GET** /employees/{id} | Fetch Employee given Employee ID
*EmployeesApi* | [**servicesIdGet**](docs/Api/EmployeesApi.md#servicesidget) | **GET** /services/{id} | Fetch Employee given Employee ID
*ProjectFoldersApi* | [**projectFoldersGet**](docs/Api/ProjectFoldersApi.md#projectfoldersget) | **GET** /projectFolders | Fetch all ProjectFolders for the given clientId
*ProjectFoldersApi* | [**projectFoldersIdGet**](docs/Api/ProjectFoldersApi.md#projectfoldersidget) | **GET** /projectFolders/{id} | Fetch ProjectFolders given ProjectFolder ID
*ProjectStatusesApi* | [**miscProjectStatusesGet**](docs/Api/ProjectStatusesApi.md#miscprojectstatusesget) | **GET** /misc/projectStatuses | Fetch all Project Statuses for the given clientId
*ProjectStatusesApi* | [**miscProjectStatusesIdGet**](docs/Api/ProjectStatusesApi.md#miscprojectstatusesidget) | **GET** /misc/projectStatuses/{id} | Fetch Project Status given Project Status ID
*ProjectTypesApi* | [**miscProjectTypesGet**](docs/Api/ProjectTypesApi.md#miscprojecttypesget) | **GET** /misc/projectTypes | Fetch all Project Types for the given clientId
*ProjectTypesApi* | [**miscProjectTypesIdGet**](docs/Api/ProjectTypesApi.md#miscprojecttypesidget) | **GET** /misc/projectTypes/{id} | Fetch Project Types given Project Type ID
*ProjectsApi* | [**projectsGet**](docs/Api/ProjectsApi.md#projectsget) | **GET** /projects | Fetch all projects from given client
*ProjectsApi* | [**projectsIdDelete**](docs/Api/ProjectsApi.md#projectsiddelete) | **DELETE** /projects/{id} | Delete project
*ProjectsApi* | [**projectsIdGet**](docs/Api/ProjectsApi.md#projectsidget) | **GET** /projects/{id} | Fetch project for the given project ID
*ProjectsApi* | [**projectsIdPut**](docs/Api/ProjectsApi.md#projectsidput) | **PUT** /projects/{id} | Update project
*ProjectsApi* | [**projectsPost**](docs/Api/ProjectsApi.md#projectspost) | **POST** /projects | Save project
*ServicesApi* | [**servicesGet**](docs/Api/ServicesApi.md#servicesget) | **GET** /services | Fetch all Services for the given clientId
*SubprojectsApi* | [**subprojectsGet**](docs/Api/SubprojectsApi.md#subprojectsget) | **GET** /subprojects | Fetch all Subprojects for the given clientId
*SubprojectsApi* | [**subprojectsIdGet**](docs/Api/SubprojectsApi.md#subprojectsidget) | **GET** /subprojects/{id} | Fetch Subproject given Subproject ID
*SuppliersApi* | [**suppliersGet**](docs/Api/SuppliersApi.md#suppliersget) | **GET** /suppliers | Fetch all suppliers from given client
*SuppliersApi* | [**suppliersIdGet**](docs/Api/SuppliersApi.md#suppliersidget) | **GET** /suppliers/{id} | Fetch supplier for the given supplier ID
*SuppliersApi* | [**suppliersIdPut**](docs/Api/SuppliersApi.md#suppliersidput) | **PUT** /suppliers/{id} | Update supplier
*SuppliersApi* | [**suppliersPost**](docs/Api/SuppliersApi.md#supplierspost) | **POST** /suppliers | Save supplier

## Models

- [AbsencesGet400Response](docs/Model/AbsencesGet400Response.md)
- [AbsencesGet401Response](docs/Model/AbsencesGet401Response.md)
- [AbsencesIdPutRequest](docs/Model/AbsencesIdPutRequest.md)
- [AbsencesPost404Response](docs/Model/AbsencesPost404Response.md)
- [AbsencesPostRequest](docs/Model/AbsencesPostRequest.md)
- [AccountGroupsIdPutRequest](docs/Model/AccountGroupsIdPutRequest.md)
- [AccountGroupsPostRequest](docs/Model/AccountGroupsPostRequest.md)
- [AccountingEntriesIdPutRequest](docs/Model/AccountingEntriesIdPutRequest.md)
- [AccountingEntriesPostRequest](docs/Model/AccountingEntriesPostRequest.md)
- [AccountingEntryCollectionsPostRequest](docs/Model/AccountingEntryCollectionsPostRequest.md)
- [AccountsPostRequest](docs/Model/AccountsPostRequest.md)
- [ApiAbsence](docs/Model/ApiAbsence.md)
- [ApiAbsenceType](docs/Model/ApiAbsenceType.md)
- [ApiAccount](docs/Model/ApiAccount.md)
- [ApiAccountGroup](docs/Model/ApiAccountGroup.md)
- [ApiAccountingEntry](docs/Model/ApiAccountingEntry.md)
- [ApiAccountingEntryCollection](docs/Model/ApiAccountingEntryCollection.md)
- [ApiBookingYear](docs/Model/ApiBookingYear.md)
- [ApiCalculationPosition](docs/Model/ApiCalculationPosition.md)
- [ApiCalendarEvent](docs/Model/ApiCalendarEvent.md)
- [ApiCalendarEventParticipant](docs/Model/ApiCalendarEventParticipant.md)
- [ApiClient](docs/Model/ApiClient.md)
- [ApiContact](docs/Model/ApiContact.md)
- [ApiContactCategory](docs/Model/ApiContactCategory.md)
- [ApiCurrency](docs/Model/ApiCurrency.md)
- [ApiCustomer](docs/Model/ApiCustomer.md)
- [ApiEmployee](docs/Model/ApiEmployee.md)
- [ApiHourBilling](docs/Model/ApiHourBilling.md)
- [ApiHourBillingCalculationPosition](docs/Model/ApiHourBillingCalculationPosition.md)
- [ApiHourBillingClient](docs/Model/ApiHourBillingClient.md)
- [ApiHourBillingEmployee](docs/Model/ApiHourBillingEmployee.md)
- [ApiListItem](docs/Model/ApiListItem.md)
- [ApiPaymentTerm](docs/Model/ApiPaymentTerm.md)
- [ApiProject](docs/Model/ApiProject.md)
- [ApiProjectFolder](docs/Model/ApiProjectFolder.md)
- [ApiProjectStatus](docs/Model/ApiProjectStatus.md)
- [ApiProjectType](docs/Model/ApiProjectType.md)
- [ApiService](docs/Model/ApiService.md)
- [ApiSubproject](docs/Model/ApiSubproject.md)
- [ApiSupplier](docs/Model/ApiSupplier.md)
- [ApiSyncItem](docs/Model/ApiSyncItem.md)
- [ApiUnit](docs/Model/ApiUnit.md)
- [ApiWorkingHour](docs/Model/ApiWorkingHour.md)
- [BillingsHoursIdPutRequest](docs/Model/BillingsHoursIdPutRequest.md)
- [BillingsHoursPostRequest](docs/Model/BillingsHoursPostRequest.md)
- [BookingYearsPostRequest](docs/Model/BookingYearsPostRequest.md)
- [CalculationPositionsPostRequest](docs/Model/CalculationPositionsPostRequest.md)
- [CalendarEventParticipantsPostRequest](docs/Model/CalendarEventParticipantsPostRequest.md)
- [CalendarEventsPostRequest](docs/Model/CalendarEventsPostRequest.md)
- [ContactAccessGroupsGet200ResponseInner](docs/Model/ContactAccessGroupsGet200ResponseInner.md)
- [ContactCategoriesPostRequest](docs/Model/ContactCategoriesPostRequest.md)
- [ContactsPostRequest](docs/Model/ContactsPostRequest.md)
- [CustomersPostRequest](docs/Model/CustomersPostRequest.md)
- [ProjectsGetProjectStatusIdParameter](docs/Model/ProjectsGetProjectStatusIdParameter.md)
- [ProjectsPostRequest](docs/Model/ProjectsPostRequest.md)
- [SuppliersIdPutRequest](docs/Model/SuppliersIdPutRequest.md)
- [SuppliersPostRequest](docs/Model/SuppliersPostRequest.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
