<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/json/test', function() {
//     $url = resource_path('DB/task.json');
//     $json = file_get_contents($url);
//     $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
//     return $json;
// });

Route::group(["prefix" => "v1", "midlleware" => "api"], function() {
    Route::get("/tasks", "TaskController@index");
    Route::get("/projects", "ProjectController@index");
});