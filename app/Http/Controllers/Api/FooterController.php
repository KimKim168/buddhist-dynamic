<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display all contacts.
     */
    public function index()
    {
        return response()->json(Footer::first());
    }

    /**
     * Display a specific contact by ID.
     */
    public function show($id)
    {
        $contact = Footer::find($id);

        return response()->json($contact);
    }

    /**
     * Store a new contact.
     */
    public function store(Request $request)
    {
        $contact = Footer::create($request->all());
        return response()->json($contact);
    }

    /**
     * Update a contact by ID.
     */
    public function update(Request $request, $id)
    {
        $contact = Footer::find($id);

        $contact->update($request->all());
        return response()->json($contact);
    }

    /**
     * Delete a contact by ID.
     */
    public function destroy($id)
    {
        $contact = Footer::find($id);

        $contact->delete();
        return response()->json($contact);
    }
}