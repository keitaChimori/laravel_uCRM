<?php

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/searchCustomers', function (Request $request) {
    return Customer::searchCustomers($request->search)
    ->select('id','name','kana','tel')->paginate(10);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
