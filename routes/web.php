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

Route::get('/', 'MainController@index');
/* Bank */
Route::get('bankinfo/list', 'BankInfoController@index');
Route::post('/bankinfo/list/save', 'BankInfoController@save');
Route::post('/bankinfo/list/edit', 'BankInfoController@edit');
Route::get('/bankinfo/list/del/{id}', 'BankInfoController@del');
/* Bank */

/* Income */
Route::get('income/list', 'IncomeController@index');
Route::post('/income/list/save', 'IncomeController@save');
Route::post('/income/list/edit', 'IncomeController@edit');
Route::get('/income/list/del/{id}', 'IncomeController@del');
/* Income  */

/* Expense */
Route::get('expense/list', 'ExpenseController@index');
Route::post('/expense/list/save', 'ExpenseController@save');
Route::post('/expense/list/edit', 'ExpenseController@edit');
Route::get('/expense/list/del/{id}', 'ExpenseController@del');
/*  Expense */

/* Project Category */
Route::get('projects/list', 'ProjectController@index');
Route::post('/projects/list/save', 'ProjectController@save');
Route::post('/projects/list/edit', 'ProjectController@edit');
Route::get('/projects/list/del/{id}', 'ProjectController@del');
/*  Project Category */

/* Income Transaction */
Route::get('intra/list', 'IncomeTransactionController@index');
Route::post('intra/list/save', 'IncomeTransactionController@save');
Route::post('intra/list/edit', 'IncomeTransactionController@edit');
Route::get('intra/list//del/{id}', 'IncomeTransactionController@del');
/*  Income Transaction */

/* Expense Transaction */
Route::get('extra/list', 'ExpenseTransactionController@index');
Route::post('extra/list/save', 'ExpenseTransactionController@save');
Route::post('extra/list/edit', 'ExpenseTransactionController@edit');
Route::get('extra/list//del/{id}', 'ExpenseTransactionController@del');
/*  Expense Transaction */

/* Cash Book */
Route::get('cashbook/list', 'CashBookController@index');
Route::post('cashbook/list/save_in', 'CashBookController@save_IN');
Route::post('cashbook/list/save_out', 'CashBookController@save_OUT');
/*  Cash Book */

/* Bank Book */
Route::get('banktran/list', 'BankTransactionController@index');
Route::post('banktran/list/deposit', 'BankTransactionController@deposit');
Route::post('banktran/list/withdraw', 'BankTransactionController@withdraw');
/*  Bank Book */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

