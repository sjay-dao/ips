<?php

use App\Http\Controllers\IpController;
use App\Http\Controllers\DeadlinController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', "IndexController@mainIndex");

Route::get('blade', function () {
    return view('welcome');
});

Route::get('/viewips', "IndexController@goToMainpage");

Route::get('/test', function(){
    return view("testing");
});



 Route::get('/addIP', [IpController::class, 'getListofIp']); 
 Route::get('/viewdeadline', [DeadlinController::class, 'goToDeadlinePage']); 

//  Route::post("ips/submitip", [IpController::class, 'addIP'])->name('ip.add');
 Route::post("ips/submit", 'IpController@addIP');
 Route::post("ips/search_word", 'IpController@searchInIpdata');
 Route::post("home/search_word", 'IndexController@searchInIpdata');
 Route::post("home/filedvsapproved", 'IndexController@countFiledAndApproved');
 Route::post("home/iptrends", 'IndexController@getIpTypesCounts');
 Route::post("ips/search_iptype", 'IpController@selectIpByType');
 Route::post("ips/set_notifs", 'IpController@selectDateFiled');

 
 Route::post("deadline/getlist", 'DeadlinController@getlistofDeadline');

//  Route::post('home/todashboard', function (Request $request) {
//     // Update the user's profile...
//     return redirect('/addIP')->with('iptype', $request->iptype);
// });