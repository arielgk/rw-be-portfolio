<?php

namespace App\Http\Controllers;

use App\Models\Thumb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Database\Seeders\ThumbsTableSeeder;

class ThumbController extends Controller
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

        $thumb = new Thumb();
        $thumb->file_url = $request->file_url;
        $thumb->save();

        return response()->json([
            'success' => true,
            'thumb' => $thumb,

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

        $thumbs = Thumb::all();

        if ($thumbs == null) {
            return response()->json([
                'success' => false,
                'thumb' => 'thumb not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'thumbs' => $thumbs,

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

        $thumb = Thumb::where('id', $id)->first();

        if ($thumb != null) {
            return response()->json([
                'success' => true,
                'thumb' => $thumb
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'thumb not available'
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

        $thumb = Thumb::destroy($id);

        if ($thumb == null) {
            return response()->json([
                'success' => true,
                'message' => 'thumb was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'thumb not available'
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

        $thumb = Thumb::where('id', $id)->first();

        if ($thumb != null) {
            $thumb->posts()->attach($post_id);
            return response()->json([
                'success' => true,
                'thumb' => $thumb
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'thumb not available'
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

        $aux = new ThumbsTableSeeder;
        $thumbs = $aux->run();

        if ($thumbs == null) {
            return response()->json([
                'success' => true,
                'message' => 'thumbs was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'thumbs not restored'
            ]);
        }
    }

}
