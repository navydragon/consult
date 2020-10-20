<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/npas', 'NpaController@get_npas');
Route::get('/npas/{npa}', 'NpaController@get_npa');

Route::get('/categories', 'CategoryController@get_categories');
Route::get('/categories/{category}', 'CategoryController@get_category');

Route::get('/materials', 'MaterialController@get_materials');
Route::get('/material_types', 'MaterialTypeController@get_material_types');


Route::get('/get_last_update', 'MaterialController@get_last_update');



Route::post('/questions/add_question', 'QuestionController@add_question');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

