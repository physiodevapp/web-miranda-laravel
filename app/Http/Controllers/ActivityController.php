<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $activities = Activity::all();

        return response()->json($activities);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return view('activity.create');        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(['type', 'user_id', 'date_time', 'paid', 'notes', 'satisfaction']);

        // Mandatory values
        if (!isset($data['paid'])) {
            $data['paid'] = false;
        }
        $data['user_id'] = auth()->id();

        $validator = Validator::make($data, [
            'type' => 'required|string|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'required|integer|exists:users,id',
            'date_time' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|between:0,10',
        ]);

        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 400);
        }

        $activity = new Activity;
        $activity->fill($data);
        $activity->save();

        return response()->json([
            'message' => 'Activity succesfsfully created',
            'data' => $activity,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $activity = Activity::find($id);

        if ($activity) {
            return response()->json($activity);
        } else {
            return response()->json([
                'message' => 'Activity not found'
            ], 404);
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $activity = Activity::find($id);

        return view('activity.edit', ['activity' => $activity]);    
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $activity = Activity::find($id);

        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], 404);
        }

        $data = $request->only(['type', 'user_id', 'date_time', 'paid', 'notes', 'satisfaction']);
    
        $activity->fill($data);
        $activity->save();
    
        return response()->json([
            'message' => 'Activity successfully updated',
            'data' => $activity,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $activity = Activity::find($id);

        // Check if the activity exists
        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], 404);
        }

        // Delete the activity
        $activity->delete();

        // Return a success response
        return response()->json([
            'message' => 'Activity successfully deleted'
        ], 200);

    }
}
