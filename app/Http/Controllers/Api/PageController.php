<?php

namespace App\Http\Controllers\Api;

use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Fetch all pages with optional filtering by position and pagination.
     */

    public function index(Request $request)
    {
        $position = $request->input('position'); // Get the position from the query string
        $search = $request->input('search'); // Get the search term from the query string

        // Start building the query
        $query = Page::query();

        // Apply position filter if provided
        if ($position) {
            $query->where('position', $position);
        }

        // Apply search filter if provided
        if (!empty($search)) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('short_description', 'LIKE', '%' . $search . '%');
            });
        }

        // Fetch paginated results
        $pages = $query->select('id', 'name', 'description', 'short_description', 'image', 'position')->paginate(12);

        // Return JSON response
        return response()->json($pages);
    }



    public function create()
    {
        // Not needed for API
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        $input = $request->all();
        $image = $request->file('image');
        if (!empty($image)) {
            $filename = time() . $image->getClientOriginalName();

            $image_path = public_path('assets/images/pages/' . $filename);
            $image_thumb_path = public_path('assets/images/pages/thumb/' . $filename);
            $imageUpload = Image::make($image->getRealPath())->save($image_path);
            $imageUpload->resize(600, null, function ($resize) {
                $resize->aspectRatio();
            })->save($image_thumb_path);

            $input['image'] = $filename;
        }

        $page = Page::create($input);

        return response()->json($page, 201);
    }

    public function show(string $id)
    {
        $item = Page::find($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $page = Page::findOrFail($id);
        $input = $request->all();
        $image = $request->file('image');
        if (!empty($image)) {
            $filename = time() . $image->getClientOriginalName();

            $image_path = public_path('assets/images/pages/' . $filename);
            $image_thumb_path = public_path('assets/images/pages/thumb/' . $filename);
            $imageUpload = Image::make($image->getRealPath())->save($image_path);
            $imageUpload->resize(600, null, function ($resize) {
                $resize->aspectRatio();
            })->save($image_thumb_path);

            $input['image'] = $filename;
        }

        $page->update($input);

        return response()->json($page, 200);
    }

    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return response()->json(null, 204);
    }
}