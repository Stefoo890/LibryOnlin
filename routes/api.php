<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Conteroller\NewLibraryMember;
use App\Http\Controller\RequestbookRentaController;
use App\Http\Controller\CrudController;
use App\Http\Controller\AdministratorController;
use App\Http\Controller\bookController;
use App\Http\Controller\EmployedController;
use App\Http\Controller\HistoryController;
use App\Http\Controller\RentaBookController;
use App\Http\Controller\ReservationBookController;
use App\Http\Controller\SearchController;
use App\Http\Controller\UserController;

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

//client register

    Route::post('/login', 'UsersController@login');
    Route::post('/register', 'UsersController@register');
    Route::get('/logout', 'UsersController@logout')->middleware('auth:api');


            ///Librarian 

Route::middleware(['Library', 'Library'])->group(function () {
    ///Librarian add and delete new user
    Route::post('update',[NewLibraryMember::class,'update'])->name('updateNEWlibraryMember');
    Route::delete('delete',[NewLibrarymember::class,'destroy'])->name('deleteRequest');

//requestrentaABook
Route::post('update',[RequestBookRentaController::class,'create'])->name('createRentaABook');
Route::delete('delete',[RequestBookController::class,'destroy'])->name('deleteRentaABook');

//crud
Route::resource('/products', 'ProductController');

//searscbook
Route::resource('/searchBook','SearchBook');   

//reservationBook

Route::resource('/reservstion','ReservstionBookController');   



});

                //LibraryMember
Route::middleware(['approvall', 'approvall'])->group(function () {
//RentaookController
    Route::get('viewrenta',[RentaBookController::class,'index'])->name('index');
    Route::post('rentabook',[RentaBookController::class,'story'])->name('story');
    Route::put('updaterenta',[RentaController::class,'update'])->name('update');
    Route::delete('deleteRenta',[RentaBookController::class,'destroy'])->name('delete');
 //searcBook
 Route::resource('/searchBook','SearchBook');   

//Reservation book

Route::get('viewrenta',[ReservationBookController::class,'index'])->name('index');
    Route::post('rentabook',[ReservationBookController::class,'story'])->name('story');
    Route::put('updaterenta',[ReservationBookController::class,'update'])->name('update');
    Route::delete('deleteRenta',[ReservationBookController::class,'destroy'])->name('delete');

//histroyBook

Route::get('history',[HistoryBook::class,'index'])->name('index');


});


                //administrator
Route::middleware(['administrator', 'administrator'])->group(function () {
//newemployess

Route::get('vieweemployess',[Employess::class,'index'])->name('index');
Route::post('rentaemployes',[Employess::class,'story'])->name('story');
Route::put('updaemployes',[Employess::class,'update'])->name('update');
Route::delete('deleteemployes',[Employess::class,'destroy'])->name('delete');

});

