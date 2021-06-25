<?php

// use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;

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

 Route::get('/home', function () {
    return view('home');
});

//admin

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout');


Route::get('/adminHome', 'AdminHomeController@index')->name('adminHome');
Route::get('/adminEditProfile', 'AdminHomeController@editProfile')->name('adminEditProfile');
Route::get('/adminViewAllUserInfo', 'AdminHomeController@viewAllUserInfo')->name('adminViewAllUserInfo');
Route::get('/adminViewAllTransaction', 'AdminHomeController@viewAllTransaction')->name('adminViewAllTransaction');
Route::get('/adminUserReports', 'AdminHomeController@userReports')->name('adminUserReports');
Route::get('/adminAnnouncement', 'AdminHomeController@announcement')->name('adminAnnouncement');
Route::get('/adminEditUserInfo', 'AdminHomeController@editUserInfo')->name('adminEditUserInfo');

// seller

Route::get('/seller/dashboard','SellerController@home')->name('seller.dashboard');
Route::get('/seller/applyforprimeseller','SellerController@applyForPrimeSeller')->name('seller.apply.prime');
Route::get('/seller/createsellpost','SellerController@createSellPost')->name('seller.create.sell.post');
Route::get('/seller/myposts','SellerController@myPosts')->name('seller.posts');
Route::get('/seller/statements','SellerController@statements')->name('seller.statements');
Route::get('/seller/orders','SellerController@orders')->name('seller.orders');
Route::get('/seller/contactsupport','SellerController@contactSupport')->name('seller.contact.support');
Route::get('/seller/orderdetails','SellerController@orderDetails')->name('seller.order.details');
Route::get('/seller/editsellpost','SellerController@editSellPost')->name('seller.edit.sell.post');
Route::get('/seller/editprofile','SellerController@editProfile')->name('seller.edit.profile');
Route::get('/seller/statementdetails','SellerController@statementDetails')->name('seller.statement.details');

Route::resource('seller/product', ProductController::class);









// user or buyer
Route::get('/user/dashboard', [UserController::class,'dashboard'])->name('user.dashboard');

Route::get('/user/profile', [UserController::class,'profile'])->name('user.profile');

Route::get('/user/history', [UserController::class,'history'])->name('user.history');

Route::get('/user/details', [UserController::class,'details'])->name('user.details');
Route::get('/user/follow', [UserController::class,'follow'])->name('user.follow');

Route::get('/user/orders', [UserController::class,'orders'])->name('user.orders');

Route::get('/user/order', [UserController::class,'order'])->name('user.order');
Route::post('/user/order', [UserController::class,'orderConfirm']);

Route::get('/user/notification', [UserController::class,'notification'])->name('user.notification');

Route::get('/user/messages', [UserController::class,'messages'])->name('user.messages');
// Route::get('/user/list', [App\Http\Controllers\UserController::class,'list']);
// Route::get('/user/create', [App\Http\Controllers\UserController::class,'create'] )->name('user.create');
// Route::post('/user/create', [App\Http\Controllers\UserController::class,'insert'] )->name('user.insert');

Route::get('/register', [RegistrationController::class,'register'])->name('register');


// Home
Route::get('/home/index', function () {
    return view('home/index');
});

Route::get('/home/login', function () {
    return view('home/login');
});

Route::get('/home/chatbox', function () {
    return view('home/chatbox');
});

Route::get('/home/login','HomeController@login')->name('home.login');
Route::get('/home/index','HomeController@index')->name('home.index');
Route::get('/home/contact','HomeController@contact')->name('home.contact');
Route::get('/home/help','HomeController@help')->name('home.help');
Route::get('/home/index','HomeController@home')->name('home.index');
Route::get('/home/announcement','HomeController@announcement')->name('home.announcement');
Route::get('/home/postCard','HomeController@postCard')->name('home.postCard');
Route::get('/home/chatbox','HomeController@chatbox')->name('home.chatbox');

// Route::get('/registration', function () {
//     return view('registration');
// });

// Route::get('/user/profile', function () {
//     return view('user/profile');
// });

// Route::get('/user/dashboard', function () {
//     return view('user/dashboard');
// });
