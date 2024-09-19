<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

use App\Models\Contact;
use App\Models\ContactStatus;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(['status_id', 'first_name', 'last_name', 'email', 'photo', 'phone', 'subject', 'message', 'datetime']);

        $status = ContactStatus::where('name', '')->first();
        $data['status_id'] = $status->id;

        $data['last_name'] = $data['last_name'] ?? '';
        $data['datetime'] = $data['datetime'] ?? now()->toDateString();;

        $validator = Validator::make($data, [
            'status_id' => 'nullable|integer|in:1,2',
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'email' => 'required|string',
            'photo' => 'nullable|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
            'datetime' => 'nullable|date',
        ]);

        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 400);
        }

        $contact = new Contact;
        $contact->fill($data);
        $contact->save();

        return redirect()->route('contacts.create')->with('success', 'Contact successfully created!');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
