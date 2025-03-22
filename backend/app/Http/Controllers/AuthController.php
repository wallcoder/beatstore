<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use App\Notifications\CustomResetPasswordNotification;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function convertCart($userId, $cart)
    {
        foreach ($cart as $item) {
            $check = CartItem::where("user_id", $userId)
                             ->where("content_id", $item["contentId"])
                             ->exists();  
    
            if ($check) {
                continue;
            }
    
            CartItem::create([
                'user_id' => $userId,
                'content_id' => $item['contentId'],  
            ]);
        }
    }
    
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "email" => "required|email|unique:users,email",
                "password" => "required",
                "firstName" => "required",
            ]);
    
            if ($validator->fails()) {
                return response()->json(['success' => false, 'message' => $validator->errors()], 401);
            }
    
            // Create user first
            $user = User::create([
                'first_name' => $request->firstName,
                'last_name' => $request->lastName ?? null,  // Handle missing lastName
                'password' => Hash::make($request->password),
                'email' => $request->email
            ]);
    
            
            if (!empty($request->cart) && $request->has('cart') && is_array($request->cart)) {
                $this->convertCart($user->id, $request->cart);  
            }
    
            return response()->json([
                'success' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Exception $e) {
            return response()->json(["success" => false, "message" => $e->getMessage()], 500);
        }
    }
    

    

    public function login(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validator->fails()){
                return response()->json(['success'=>false, 'message'=>'Invalid login data'], 401);

            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json(['success'=>false, 'message'=> 'Invalid credentials'], 401);
            }

            $user = User::where('email',$request->email)->first();

            if (!empty($request->cart) && $request->has('cart') && is_array($request->cart)) {
                $this->convertCart($user->id, $request->cart);  
            }
            
            return response()->json(['success'=>true, 'message'=>'User Login Successful', 'token'=>$user->createToken("API TOKEN")->plainTextToken],200);

        }catch(\Exception $e){
            return response()->json(["success"=>false, "message"=>$e->getMessage()],500);
        }

    }

    public function logout(Request $request)
    {
        try {

            $user = $request->user();
            if(!$user){
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthenticated. No valid token provided.'
                ], 401);
            }
            $request->user()->tokens()->delete(); 
            return response()->json([
                'success' => true,
                'message' => 'User logged out successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function sendResetLinkEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 401);
        }
    
        // Find the user by email
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }
    
        // Generate a password reset token
        $token = Password::createToken($user);
    
        // Send the custom reset password notification
        $user->notify(new CustomResetPasswordNotification($token));
    
        return response()->json(['success' => true, 'message' => 'Password reset link sent'], 200);
    }

    public function resetPassword(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=> 'email|required',
            'token'=>'required',
            'password'=>'required|confirmed'
        ]);

        if($validator->fails()){
            return response()->json(['success'=>false,'message'=>$validator->errors()], 400);
        }

        $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function($user, $password){
            $user->password = Hash::make($password);
            $user->save();
        });

        return $status === Password::PASSWORD_RESET
        ? response()->json(['success' => true, 'message' => __($status)], 200)
        : response()->json(['success' => false, 'message' => __($status)], 400);


    }

    

    
}
