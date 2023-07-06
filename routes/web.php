<?php

// use App\Http\Controllers\UserController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ThemesController;
// use App\Http\Controllers\IconController;
// use App\Http\Controllers\RegionController;
// use App\Http\Controllers\ItemsController;
// use App\Http\Controllers\TicketController;
// use App\Http\Controllers\CarrencyController;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Route;

// /////////////////////////////controllers
// /**user */
// Route::get('/user', [UserController::class, 'index'])
// ->name('user.index');
// Route::get('user/{user}', [UserController::class, 'login'])
// ->name('user.login');
// Route::get('/user/{login}/{store}', [UserController::class, 'store'])
// ->name('user.store');
// Route::put('user/{user}', [UserController::class, 'update'])
// ->name('user.update');
// Route::delete('user', [UserController::class, 'destroy'])
// ->name('user.destroy');

// Route::get('/search', [UserController::class, 'search'])
// ->name('user.search');
// /**password */
// Route::get('/password', [UserController::class, 'password_reset'])
// ->name('user.update_password');

// /**themes */
// Route::get('Themes', [ThemesController::class, 'index'])
// ->name('themes.index');
// Route::get('Themes/{update}', [ThemesController::class, 'update'])
// ->name('themes.update');
// Route::get('Themes/{theme}/{store}', [ThemesController::class, 'store'])
// ->name('themes.store');

// /**icon */
// Route::get('/icons', [IconController::class, 'index'])
// ->name('icon.index');

// /*home*/
// Route::get('/home', [HomeController::class, 'index'])
// ->name('home.index');
// /*profile*/

// /*tickets*/

// /*item*/

// /*carrency*/
// //////////////////////////////////views
// /**login */
// Route::get('/', function () {
//     return view('login');
// })->name('login');
// Route::get('/home_page', function () {
//     return view('layouts/pages/home',[
//         'path_page' => 'dashboard',
//         'logo_page' => 'chart-line'
//     ]);
// })->name('home.page');
// Route::get('/profile_page', function () {
//     return view('layouts/pages/profile',[
//         'path_page' => 'profile',
//         'logo_page' => 'user'
//     ]);
// })->name('profile.page')->middleware('guest');
// Route::get('/ticket_page', function () {
//     return view('layouts/pages/ticket',[
//         'path_page' => 'ticket',
//         'logo_page' => 'ticket'
//     ]);
// })->name('ticket.page')->middleware('guest');
// Route::get('/items_page', function () {
//     return view('layouts/pages/items',[
//         'path_page' => 'items',
//         'logo_page' => 'sitemap'
//     ]);
// })->name('items.page')->middleware('guest');
// Route::get('/carrency_page', function () {
//     return view('layouts/pages/carrency',[
//         'path_page' => 'carrency',
//         'logo_page' => 'coins'
//     ]);
// })->name('carrency.page')->middleware('guest');
// Route::get('/region_page', function () {
//     return view('layouts/pages/region',[
//         'path_page' => 'region',
//         'logo_page' => 'globe'
//     ]);
// })->name('region.page')->middleware('guest');
// Route::get('/not_found_page', function () {
//     return view('layouts/pages/error_page');
// })->name('not_found.page');

