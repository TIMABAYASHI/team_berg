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


// ページをどう飛ばすのか
// 1.トップページ
Route::get('/', function () {
    return view('top');
});

// 2.
Route::get('/info', function () {
    return view('info');
});

// 3.
Route::get('/login', function () {
    return view('login');
});

// 4.
Route::get('/logout', function () {
    return view('ligout');
});

// 5.
Route::get('/mypage', function () {
    return view('mypage');
});

// 6.
Route::get('/plan_see', function () {
    return view('plan_see');
});

// 7.
Route::get('/plan_edit', function () {
    return view('plan_edit');
});

// 8.
Route::get('/reco', function () {
    return view('reco');
});

// 9.
Route::get('/resist', function () {
    return view('resist');
});

// 10.
Route::get('/search', function () {
    return view('search');
});

// // 11.
// Route::get('/', function () {
//     return view('');
// });