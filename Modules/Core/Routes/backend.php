<?php

/**
 * InvoicePlane
 *
 * @package     InvoicePlane
 * @author      InvoicePlane Developers & Contributors
 * @copyright   Copyright (C) 2014 - 2018 InvoicePlane
 * @license     https://invoiceplane.com/license
 * @link        https://invoiceplane.com
 *
 * Based on FusionInvoice by Jesse Terry (FusionInvoice, LLC)
 */

// Administrator & owner Control Panel Routes
//'middleware' => ['role:administrator|owner']


Route::group(['prefix' => 'admincp', 'namespace' => 'Modules\Core\Controllers\AdminCP'], function () {


// Dashboard
//Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/', ['uses' => 'AdminCPController@index', 'as' => 'dashboard.index']);
    Route::get('dashboard', ['uses' => 'AdminCPController@index', 'as' => 'dashboard.index']);

    Route::get('permissions', ['uses' => 'PermissionsController@index', 'as' => 'permissions.index']);



    Route::resource('users', 'UsersController');
    Route::resource('permissions', 'PermissionsController');
    Route::resource('roles', 'RolesController');
});