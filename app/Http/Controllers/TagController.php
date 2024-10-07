<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Tags\Tag;

class TagController extends Controller
{


    public function index()
    {

        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }


        $tags = Tag::all();

        if ($tags == null) {
            return response()->json([
                'success' => false,
                'post' => 'no tags available'
            ]);
        }

        return response()->json([
            'success' => true,
            'tags' => $tags,

        ]);
    }

    public function restore(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        \DB::table('taggables')->delete();
        \DB::table('tags')->delete();

        $shares = null;

        if ($shares == null) {
            return response()->json([
                'success' => true,
                'message' => 'shares was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'shares not restored'
            ]);
        }
    }

}
