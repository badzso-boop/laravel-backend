<?php

namespace App\Http\Controllers;

use App\Models\Spritzer;
use Illuminate\Http\Request;

class SpritzerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Spritzer::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spritzer = Spritzer::create($request->all());

        return response()->json($spritzer, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spritzer  $spritzer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spritzer= Spritzer::find($id);
        if(!empty($spritzer)) 
        {
            return response()->json($spritzer);
        }
        else 
        {
            return response()->json([
                "message"=>"Spritzer not found"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spritzer  $spritzer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Spritzer::where('id', $id)->exists())
        {
            $spritzer = Spritzer::find($id);
            $spritzer->name = is_null($request->name) ? $spritzer->name : $request->name;
            $spritzer->type = is_null($request->type) ? $spritzer->type : $request->type;
            $spritzer->wine = is_null($request->wine) ? $spritzer->wine : $request->wine;
            $spritzer->water = is_null($request->water) ? $spritzer->water : $request->water;
            $spritzer->price = is_null($request->price) ? $spritzer->price : $request->price;
            $spritzer->publish_date = is_null($request->publish_date) ? $spritzer->publish_date : $request->publish_date;
            $spritzer->save();
            
            return response()->json([
                "message" => "Spritzer Updated."
            ], 200);
            
        }
        else
        {    
            return response()->json([
                "message" => "Spritzer Not Found."
            ], 404);
        }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spritzer  $spritzer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Spritzer::where('id', $id)->exists()) {
            $spritzer = Spritzer::find($id); // változónevet javítottam
            $spritzer->delete();
        
            return response()->json([
                "message" => "Record deleted."
            ], 202);
        } else {
            return response()->json([
                "message" => "Spritzer not found."
            ], 404);
        }
    }

}
