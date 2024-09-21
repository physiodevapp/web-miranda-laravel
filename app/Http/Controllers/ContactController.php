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
        $data['status_id'] = ContactStatus::getDefaultStatus();

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

        Contact::create($data);

        return redirect()->route('contacts.create')->with('success', 'Contact successfully created!');;
    }
}
