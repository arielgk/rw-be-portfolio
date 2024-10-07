<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feed;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Database\Seeders\CommentsTableSeeder;

class CommentController extends Controller
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
            'post_id' => 'required',
            'body' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->post_id = $request->post_id;
        $comment->body = $request->body;
        $comment->save();

        $post = Post::find($request->post_id);


        $feed = new Feed();
        $feed->user_id= $post->user_id;
        $feed->type = 'comment';
        $feed->feedable_type='comment';
        $feed->feedable_id = $comment->id;
        $feed->save();
        $commentResponse = Comment::whereId($comment->id)->with('user')->get();


        return response()->json([
            'success' => true,
            'comment' => $commentResponse,

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

        $comments = Comment::all();

        if ($comments == null) {
            return response()->json([
                'success' => false,
                'comment' => 'comment not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'comments' => $comments,

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

        $comment = Comment::where('id', $id)->first();

        if ($comment != null) {
            return response()->json([
                'success' => true,
                'comment' => $comment
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'comment not available'
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

        $comment = Comment::destroy($id);

        if ($comment == null) {
            return response()->json([
                'success' => true,
                'message' => 'comment was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'comment not available'
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

        $aux = new CommentsTableSeeder;
        $comments = $aux->run();

        if ($comments == null) {
            return response()->json([
                'success' => true,
                'message' => 'comments was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'comments not restored'
            ]);
        }
    }
}
