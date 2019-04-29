<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Customer@index');

Route::get('/customer-login-check', 'Customer@customer_login_check');

Route::get('/company_dashboard', 'Customer@dashboard');

Route::get('/add_supplier', 'Customer@add_supplier');

Route::get('/logout', 'Customer@logout');

Route::get('/manage_product', 'Customer@manage_product');

Route::get('/supplier_dashboard', 'Supplier@dashboard');

Route::get('/send_products', 'Supplier@send_products_to_company');

Route::get('/save_product', 'Supplier@save_product');

Route::get('/sold_products', 'Supplier@sold_products');
