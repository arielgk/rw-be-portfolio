<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function create(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'file_url' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $video = new Video();
        $video->file_url = $request->file_url;
        $video->save();

        return response()->json([
            'success' => true,
            'video' => $video,

        ]);
    }

    public function index(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $videos = Video::all();

        if ($videos->isEmpty()) {
            return response()->json([
                'success' => false,
                'video' => 'video not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'videos' => $videos,

        ]);
    }

    public function show(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }
        
        $video = Video::where('id', $id)->first();

        if ($video) {
            return response()->json([
                'success' => true,
                'video' => $video
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'video not available'
            ]);
        }
    }


    public function destroy(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $deleted = Video::destroy($id);

        if ($deleted > 0) {
            return response()->json([
                'success' => true,
                'message' => 'video was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'video not found or could not be deleted'
            ]);
        }
    }

    public function addPost(Request $request, $id, $post_id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $video = Video::where('id', $id)->first();

        if ($video) {
            $video->posts()->attach($post_id);
            return response()->json([
                'success' => true,
                'video' => $video
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'video not available'
            ]);
        }
    }

    public function addUser(Request $request, $id, $user_id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $video = Video::where('id', $id)->first();

        if ($video) {
            $video->users()->attach($user_id);
            return response()->json([
                'success' => true,
                'video' => $video
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'video not available'
            ]);
        }
    }

    public function restore(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        Video::truncate();

        // Truncate operation succeeded
        return response()->json([
            'success' => true,
            'message' => 'videos was restored'
        ]);
    }
}
