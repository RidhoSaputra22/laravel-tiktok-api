<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Requests\UpdateVideoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $video = Video::with('user', 'komentar.user')->get();
        return json_decode($video);
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'file' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('file')) {
            Storage::disk('public')->putFile('video', $request->file('file'));
            $videoUrl = $request->file('file')->hashName();
        }


        $video = Video::create([
            'title' => $request->title,
            'videoUrl' => config('app.url') . '/file/video/' . $videoUrl,
            'thumbnailUrl' => "NULL",
            'datePosted' => now(),
            'views' => '',
            'likes' => '',
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);
        return response()->json([
            'status' => 200,
            'video' => $video,
            'message' => 'Video created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'thumbnailUrl' => 'required',
            'datePosted' => 'required|date',
            'views' => 'required',
            'likes' => 'required',
            'description' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $video->update($request->all());
        return response()->json([
            'status' => 200,
            'video' => $video,
            'message' => 'Video updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
        $video->delete();
        return response()->json([
            'message' => 'Video deleted successfully',
            'status' => 200
        ]);
    }
}