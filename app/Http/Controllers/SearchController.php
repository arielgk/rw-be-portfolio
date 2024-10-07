<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{


    public function search(Request $request)
    {

        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }


        $posts = Post::withAnyTags($request->tags)->with([ 'user', 'thumb'])->get();

        if ($posts == null) {
            return response()->json([
                'success' => true,
                'post' => []
            ]);
        }

        return response()->json([
            'success' => true,
            'posts' => $posts,

        ]);

    }

    public function searchByKeyword (Request $request){
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $posts = Post::where('description',"LIKE", '%' . $request->keyword . '%')
            ->where('is_profile', '=', 0 )

            ->with([ 'user', 'thumb'])->get();

        if ($posts == null) {
            return response()->json([
                'success' => true,
                'post' => []
            ]);
        }

        return response()->json([
            'success' => true,
            'posts' => $posts,

        ]);
    }


}
