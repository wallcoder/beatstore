<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
class BeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Fetch available beats
    public function index()
    {
        try{

            $beats = Product::select('title', 'slug', 'image')->where('status', '=', 'available')->with(['beat', 'content'=>function($query){
                $query->select('id', 'product_id', 'license_id')->with(['licence'=>function($query){
                    $query->select('id', 'price');
                }]);
            }])->paginate(10);
            return response()->json(['success'=>true, 'data'=>$beats, 'message'=>'Beats fetched successfully'], 200);
        }catch(\Exception $e){

            Log::error($e->getMessage());
            return response()->json(['success'=>false,'message'=> 'Cannot fetch beats'],500);

        }
    }

    // Fetch all beats
    public function all(){

        try{

            

            $beats = Product::select('title', 'slug', 'image')->with(['beat', 'content'=>function($query){
                $query->select('id', 'product_id', 'license_id')->with(['licence'=>function($query){
                    $query->select('id', 'price');
                }]);
            }])->paginate(10);
            return response()->json(['success'=>true, 'data'=>$beats, 'message'=>'All Beats fetched successfully'], 200);
        }catch(\Exception $e){

            Log::error($e->getMessage());
            return response()->json(['success'=>false,'message'=> 'Cannot fetch all beats'],500);

        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        try{
            $beats = Product::where('slug', '=', $slug)->with(['beat', 'content'=>function($query){
                $query->select('id', 'product_id', 'content_id')->with('license');
            }])->first();

            if(!$beats){
                return response()->json(['success'=>false,'message'=> 'Beat is not found'],404);
            }

            return response()->json(['success'=>true,'data'=>$beats, 'message'=> 'Beat is fetched successfully'],200);
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['success'=>false,'message'=> 'Cannot Fetch Beat with id'],500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
