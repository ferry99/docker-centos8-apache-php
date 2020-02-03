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

use App\Jobs\SendEmail;
use Carbon\Carbon;



Route::get('/', function () {
    return view('welcome');
});

Route::get('coba_kirim_email', function(){
    $details['email'] = 'ferrysanjaya99@gmail.com';
    dispatch(new App\Jobs\SendEmail($details));
    // SendEmail::dispatch($details)->delay(Carbon::now()->addSeconds(20));
    dd('Berhasil');
});

Route::get('sendQueue' , 'TransController@setTrans');


Route::get('testDB', function(){
    try {
        DB::connection()->getPdo();
        dd("connected");
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }
});
