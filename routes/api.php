<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SubscriptionController;



///////////////////////////Restaurantsالمطاعم//////////////////////////////////////////
/////////////(name)|(address)|(phone)|(email)|(image)|(opening_time)|(closing_time)|business_type|
Route::get('/get-restaurants', [RestaurantController::class, 'index'])->name('get-Allrestaurants');
// إضافة مطعم جديد
Route::middleware('auth:sanctum')->post('/create-restaurant', [RestaurantController::class, 'store']);
/////////////اختيار نوع النشاط
Route::post('/business-type', [RestaurantController::class, 'storebusinesstype']);
Route::get('/get-business-type', [RestaurantController::class, 'getbusinesstypes']);
// عرض مطعم واحد حسب الـ id
Route::get('/get-restaurant/{id}', [RestaurantController::class, 'show'])->name('get-onerestaurant');
// تعديل بيانات مطعم
Route::middleware('auth:sanctum')->put('/update-restaurant/{id}', [RestaurantController::class, 'update'])->name('update-restaurant');

// حذف مطعم
Route::middleware('auth:sanctum')->delete('/delete-restaurant/{id}', [RestaurantController::class, 'delete'])->name('delete-restaurant');
///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////RestaurantImages صور المطعم//////////////////////////////////////////////
Route::middleware('auth:sanctum')->get('/my-restaurants', [RestaurantController::class, 'myRestaurants']);///سيليكت بوكس لاختيار المطعم
Route::middleware('auth:sanctum')->post('/create-image', [RestaurantController::class, 'storerestimage']);//اضافة مطعم
Route::get('/restaurant-images/{restaurant_id}', [RestaurantController::class, 'getrestimages']);///كل صور الخاصه بالمطعم
Route::middleware('auth:sanctum')->put('/update-image/{id}', [RestaurantController::class, 'updaterestimage']);///تحديث مطعم
Route::middleware('auth:sanctum')->delete('/delete-image/{id}', [RestaurantController::class, 'deleterestimage']);/////حذف مطعم
///////////////////////////////////////////////////////////////////////////















