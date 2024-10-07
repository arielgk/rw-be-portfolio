<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Database\Seeders\LikesTableSeeder;

class LikeController extends Controller
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
            'user_id' => 'required',
            'post_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $exits = Like::where("user_id", $request->user_id)
            ->where("post_id", $request->post_id)->first();
        if (!$exits) {
            $like = new Like();
            $like->user_id = $request->user_id;
            $like->post_id = $request->post_id;
            $like->save();

            $post = Post::find($like->post_id);

            //disable auto like notification
            if (Auth::user()->id != $post->user_id) {
                $feed = new Feed();
                $feed->user_id = $post->user_id;
                $feed->type = 'like';
                $feed->feedable_type = 'like';
                $feed->feedable_id = $like->id;
                $feed->save();
            }

        } else {
            $like = $exits;
            $post = Post::find($like->post_id);

        }

        return response()->json([
            'success' => true,
            'like' => $like,
            'post' => $post,

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

        $likes = Like::all();

        if ($likes == null) {
            return response()->json([
                'success' => false,
                'like' => 'like not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'likes' => $likes,

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

        $like = Like::where('id', $id)->first();

        if ($like != null) {
            return response()->json([
                'success' => true,
                'like' => $like
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'like not available'
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

        $like = Like::where('id', $id)->first();


        $post = Post::find($like->post_id);
        if ($like)
            Like::destroy($id);

        if ($like != null) {
            return response()->json([
                'success' => true,
                'post' => $post,
                'message' => 'like was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'like not available'
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

        $aux = new LikesTableSeeder;
        $likes = $aux->run();

        if ($likes == null) {
            return response()->json([
                'success' => true,
                'message' => 'likes was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'likes not restored'
            ]);
        }
    }

}
