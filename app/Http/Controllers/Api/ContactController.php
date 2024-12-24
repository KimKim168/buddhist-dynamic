<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display all contacts.
     */
    public function index()
    {
        return response()->json(Contact::first());
    }

    /**
     * Display a specific contact by ID.
     */
    public function show($id)
    {
        $contact = Contact::find($id);

        return response()->json($contact);
    }

    /**
     * Store a new contact.
     */
    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        return response()->json($contact);
    }

    /**
     * Update a contact by ID.
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $contact->update($request->all());
        return response()->json($contact);
    }

    /**
     * Delete a contact by ID.
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();
        return response()->json($contact);
    }
}