<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// // with not require
// Route::get('/test/{id?}',function(){
//     return view('welcome');
// });
// // with require arg
// Route::get('/test/{id}',function($id){
//     return view('welcome');
// });






// use name route if route url long or twins
// Route::get('user/add/view/reo',function(){
//     return view('welcome');
// })->name('user1');

// Route::get('user/add/view/with/bro',function(){
//     return view('welcome');

// })->name('user2');



// group  and perfix



    // // Define route prefixes
    // Route::prefix('users')->middleware('Auth')->group(function () {
    //     Route::get('/', [UserController::class, 'index'])->name('users.index');
    //     Route::post('/', [UserController::class, 'store'])->name('users.store');
    //     Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
    //     Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
    //     Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    // });




Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


// Route::get('/',function(){

//     return  view('welcome');
// });
