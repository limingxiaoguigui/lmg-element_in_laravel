<?php
/*
 * @Description:
 * @Author: LMG
 * @Date: 2020-02-26 10:20:53
 * @LastEditors: LMG
 * @LastEditTime: 2020-02-26 11:51:15
 */

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

Route::get('/', function () {
    return view('index');
});