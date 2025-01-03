<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Journal;
use App\Models\JournalImage;
use App\Models\ThesisJournalLink;

class ClientJournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.journals.index');
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
    public function show(string $id)
    {
        // Find the main Journal item
        $item = Journal::findOrFail($id);

        // Retrieve images related to the Journal
        $multi_images = JournalImage::where('journal_id', $id)
                                        ->latest()
                                        ->get();

        // Retrieve related Journals excluding the item itself
        $related_items = Journal::where(function($query) use ($item) {
            $query->where('journal_category_id', $item->journal_category_id);
        })->where('id', '!=', $item->id) // Exclude the item itself
        ->inRandomOrder()
        ->limit(6)
        ->get();

        $resourceLinks = ThesisJournalLink::where('thesis_id', $id)->get();

        // Return the view with the data
        return view('client.journals.show', [
            'item' => $item,
            'multi_images' => $multi_images,
            'related_items' => $related_items,
            'resourceLinks' => $resourceLinks,
        ]);
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
