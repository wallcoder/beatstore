<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CartController extends Controller
{
    public function addToCart(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                "userId"=> "integer|required",
                "contentId"=> "integer|required",
                "quantity"=> "integer",
            ]);

            if($validator->fails()){
                return response()->json(['success'=>false, 'message'=>$validator->errors()], 401);

            }

            $cartItem = CartItem::create([
                'user_id'=>$request->userId,
                'contentId'=>$request->contentId,
                'quantity'=>1
            ]);

            return response()->json(['success'=>true,'message'=>'Item Added Successfully'], 200);

        }catch(\Exception $e){
            return response()->json(["success"=>false, "message"=>$e->getMessage()],500);
        }


    }


    public function addToCartGuest(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                "userId"=> "integer",
                "contentId"=> "integer|required",
                "quantity"=> "integer",
            ]);

            $sessionId = session()->getId();
            if($validator->fails()){
                return response()->json(['success'=>false, 'message'=>$validator->errors()], 401);

            }

            $cartItem = CartItem::create([
                'session_id'=>$request->$sessionId,
                'contentId'=>$request->contentId,
                'quantity'=>1
            ]);

            return response()->json(['success'=>true,'message'=>'Item Added Successfully As Guest'], 200);

        }catch(\Exception $e){
            return response()->json(["success"=>false, "message"=>$e->getMessage()],500);
        }


    }
}

// public function getCart()
// {
//     if (auth()->check()) {
//         // Logged-in user: Get cart items linked to user
//         $cartItems = Cart::where('user_id', auth()->id())->get();
//     } else {
//         // Guest user: Get cart items using session ID
//         $cartItems = Cart::where('session_id', session()->getId())->get();
//     }

//     return response()->json($cartItems);
// }


// public function convertGuestCartToUser($userId, $sessionId)
// {
//     // Update cart items from guest session to logged-in user
//     Cart::where('session_id', $sessionId)->update([
//         'user_id' => $userId,
//         'session_id' => null, // Remove guest session ID
//         'status' => 'converted'
//     ]);
// }