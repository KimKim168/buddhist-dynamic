<?php

namespace App\Http\Controllers\Api;

use App\Models\Link;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = Link::all();
        return response()->json(['data' => $links], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'name_kh' => 'nullable|string|max:255',
            'image' => 'nullable|url',
            'url' => 'required|url',
            'order_index' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $link = Link::create($request->all());
        // console.log($link); 
        return response()->json(['message' => 'Link created successfully', 'data' => $link], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $link = Link::find($id);
        if (!$link) {
            return response()->json(['message' => 'Link not found'], 404);
        }

        return response()->json(['data' => $link], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $link = Link::find($id);
        if (!$link) {
            return response()->json(['message' => 'Link not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'name_kh' => 'nullable|string|max:255',
            'image' => 'nullable|url',
            'url' => 'sometimes|url',
            'order_index' => 'sometimes|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $link->update($request->all());
        return response()->json(['message' => 'Link updated successfully', 'data' => $link], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $link = Link::find($id);
        if (!$link) {
            return response()->json(['message' => 'Link not found'], 404);
        }

        $link->delete();
        return response()->json(['message' => 'Link deleted successfully'], 200);
    }
}
