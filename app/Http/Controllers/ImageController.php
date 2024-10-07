<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Database\Seeders\ImagesTableSeeder;

class ImageController extends Controller
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
            'file_url' => 'required',
            'type' => ['required', Rule::in(['alpha', 'color', 'profile', 'default',
                'RGB',
                'RGBAuto',
                'AlphaAuto',
                'AlphaManual',
                'DepthMapAuto',
                'DepthMapManual',
                'Top',
                'Middle',
                'Back',


                ])]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $image = new Image();
        $image->file_url = $request->file_url;
        $image->type = $request->type;
        $image->save();

        return response()->json([
            'success' => true,
            'image' => $image,

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

        $images = Image::all();

        if ($images == null) {
            return response()->json([
                'success' => false,
                'image' => 'image not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'images' => $images,

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

        $image = Image::where('id', $id)->first();

        if ($image != null) {
            return response()->json([
                'success' => true,
                'image' => $image
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'image not available'
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

        $image = Image::destroy($id);

        if ($image == null) {
            return response()->json([
                'success' => true,
                'message' => 'image was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'image not available'
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

        $image = Image::where('id', $id)->first();

        if ($image != null) {
            $image->posts()->attach($post_id);
            return response()->json([
                'success' => true,
                'image' => $image
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'image not available'
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

        $image = Image::where('id', $id)->first();

        if ($image != null) {
            $image->users()->attach($user_id);
            return response()->json([
                'success' => true,
                'image' => $image
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'image not available'
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

        $aux = new ImagesTableSeeder;
        $images = $aux->run();

        if ($images == null) {
            return response()->json([
                'success' => true,
                'message' => 'images was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'images not restored'
            ]);
        }
    }

}
