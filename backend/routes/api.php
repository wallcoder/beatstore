<?php 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get("/", function () {
    return response()->json(["message"=>"HELLO"]);
});


Route::get("/products", [ProductController::class,"index"]);
Route::get("/beats", [BeatController::class,"index"]);
Route::get("/beats/all", [BeatController::class,"all"]);
Route::get("/beat/{slug}", [BeatController::class,"show"]);
Route::post("/auth/register", [AuthController::class, "register"]);
Route::post("/auth/login", [AuthController::class, "login"]);
Route::post("/forgot-password", [AuthController::class,"sendResetLinkEmail"]);
Route::put("/reset-password", [AuthController::class,"resetPassword"]);
Route::middleware('auth:sanctum')->group(function(){
    Route::post('payment/initiate', [StripeController::class, 'initiatePayment']);
    Route::post('payment/complete', [StripeController::class, 'completePayment']);
    Route::post('payment/failure', [StripeController::class, 'failPayment']);
    Route::post("/auth/logout", [AuthController::class, "logout"]);
});
