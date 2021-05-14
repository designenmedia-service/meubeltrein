<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Abilities
    Route::apiResource('abilities', 'AbilitiesController', ['only' => ['index']]);

    // Locales
    Route::get('locales/languages', 'LocalesController@languages')->name('locales.languages');
    Route::get('locales/messages', 'LocalesController@messages')->name('locales.messages');

    // Dashboard
    Route::get('dashboard', 'DashboardApiController@index')->name('dashboard');

    // Permissions
    Route::resource('permissions', 'PermissionsApiController');

    // Roles
    Route::resource('roles', 'RolesApiController');

    // Users
    Route::resource('users', 'UsersApiController');

    // Crm Status
    Route::resource('crm-statuses', 'CrmStatusApiController');

    // Crm Customer
    Route::resource('crm-customers', 'CrmCustomerApiController');

    // Crm Note
    Route::resource('crm-notes', 'CrmNoteApiController');

    // Crm Document
    Route::post('crm-documents/media', 'CrmDocumentApiController@storeMedia')->name('crm-documents.storeMedia');
    Route::resource('crm-documents', 'CrmDocumentApiController');

    // Product Category
    Route::post('product-categories/media', 'ProductCategoryApiController@storeMedia')->name('product-categories.storeMedia');
    Route::resource('product-categories', 'ProductCategoryApiController');

    // Product Tag
    Route::resource('product-tags', 'ProductTagApiController');

    // Product
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::resource('products', 'ProductApiController');

    // Content Category
    Route::resource('content-categories', 'ContentCategoryApiController');

    // Content Tag
    Route::resource('content-tags', 'ContentTagApiController');

    // Content Page
    Route::post('content-pages/media', 'ContentPageApiController@storeMedia')->name('content-pages.storeMedia');
    Route::resource('content-pages', 'ContentPageApiController');

    // Contact Company
    Route::resource('contact-companies', 'ContactCompanyApiController');

    // Contact Contacts
    Route::resource('contact-contacts', 'ContactContactsApiController');

    // Faq Category
    Route::resource('faq-categories', 'FaqCategoryApiController');

    // Faq Question
    Route::resource('faq-questions', 'FaqQuestionApiController');

    // Expense Category
    Route::resource('expense-categories', 'ExpenseCategoryApiController');

    // Income Category
    Route::resource('income-categories', 'IncomeCategoryApiController');

    // Expense
    Route::resource('expenses', 'ExpenseApiController');

    // Income
    Route::resource('incomes', 'IncomeApiController');

    // Expense Report
    Route::apiResource('expense-reports', 'ExpenseReportApiController', ['only' => ['index']]);

    // Nieuw Voertuig
    Route::resource('nieuw-voertuigs', 'NieuwVoertuigApiController');
});
