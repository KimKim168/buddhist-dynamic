<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = News::query();

        if (!empty($search)) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('short_description', 'LIKE', '%' . $search . '%');
            });
        }

        $news = $query->paginate(12);

        return response()->json(
            $news
        );
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.news.create');
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
    public function show(string $id)
    {
        $item = News::find($id);
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.news.edit', [
            'id' => $id,
        ]);
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

    public function types()
    {
        return view('admin.news.type');
    }
    public function categories()
    {
        return view('admin.news.category');
    }
    public function sub_categories()
    {
        return view('admin.news.sub_category');
    }
    public function images($id)
    {
        $item = News::findOrFail($id);
        return view('admin.news.image', [
            'item' => $item,
        ]);
    }
}