<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Message;
use App\Models\Post;
use App\Models\Thumb;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Database\Seeders\FeedsTableSeeder;

//use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class FeedController extends Controller
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
            'feedable_id' => 'required',
            'type' => ['required', Rule::in(['comment', 'relation', 'like', 'post', 'message', 'share'])]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $feed = new Feed();
        $feed->user_id = $request->user_id;
        $feed->type = $request->type;
        $feed->feedable_id = $request->feedable_id;
        $feed->save();

        return response()->json([
            'success' => true,
            'feed' => $feed,

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

        $feeds = Feed::all();

        if ($feeds == null) {
            return response()->json([
                'success' => false,
                'feed' => 'feed not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'feeds' => $feeds,

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

        $feed = Feed::where('id', $id)->first();

        if ($feed != null) {
            return response()->json([
                'success' => true,
                'feed' => $feed
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'feed not available'
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

        $feed = Feed::destroy($id);

        if ($feed == null) {
            return response()->json([
                'success' => true,
                'message' => 'feed was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'feed not available'
            ]);
        }
    }


    public function getFeedByUser(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }
        $validator = Validator::make($request->all(), [
            'status' => [Rule::in(['unread', 'received', 'read'])],
            'user_id' => 'required'
        ]);


        $statusFeeds = Feed::where('feeds.user_id', $request->user_id)->where('feeds.status', $request->status)->get();
        $feeds = new Collection();


        foreach ($statusFeeds as $f) {

            switch ($f->feedable_type) {
                case 'share':
                    $share = DB::table('feeds as f')
                        ->select(
                            'f.id',
                            'f.user_id as user_to',
                            'p.id as post_id',
                            'f.feedable_type as feed_type',
                            'u2.name as sender_name',
                            'u2.id as sender_id',
                            'u.name as owner_name',
                            't.file_url as thumbnail_url',
                            'f.created_at'
                        )->where('f.user_id', $request->user_id)
                        ->where('f.id', $f->id)
                        ->join('shares as s', 'f.feedable_id', 's.id')
                        ->where('f.feedable_type', '=', 'share')
                        ->join('posts as p', 's.post_id', 'p.id')
                        ->join('users as u', 'u.id', 'p.user_id')
                        ->join('thumbs as t', 't.id', 'p.thumb_id')
                        ->join('users as u2', 's.user_id', 'u2.id')
                        ->first();




                    try {


                    $share->sender_user = User::find($share->sender_id);
                    $share->post = Post::find($share->post_id);
                    $share->thumb = Thumb::find($share->post->thumb_id);
                    if ($share !== null)
                        $feeds->push($share);

                    }catch (\Exception $e) {

                    }
                    break;
                case 'like':

                    $like = DB::table('feeds as f')
                        ->select(
                            'f.id',
                            'f.user_id as user_to',
                            'p.id as post_id',
                            'f.feedable_type as feed_type',
                            'u.name as sender_name',
                            'u.id as sender_id',
                            'u.name as owner_name',
                            't.file_url as thumbnail_url',
                            'f.created_at'
                        )->where('f.user_id', $request->user_id)
                        ->where('f.id', $f->id)
                        ->join('likes as l', 'f.feedable_id', 'l.id')
                        ->where('f.feedable_type', '=', 'like')
                        ->join('posts as p', 'l.post_id', 'p.id')
                        ->join('thumbs as t', 't.id', 'p.thumb_id')
                        ->join('users as u', 'l.user_id', 'u.id')
                        ->first();

                    if ($like !== null) {
                        $like->sender_user = User::find($like->sender_id);
                        $like->post = Post::find($like->post_id);
                        $like->thumb = Thumb::find($like->post->thumb_id);

//                    $sql = Str::replaceArray('?', $like->getBindings(), $like->toSql());

                        $feeds->push($like);
                    }
                    break;
                case 'post':
                    $post = DB::table('feeds as f')
                        ->select(
                            'f.id',
                            'f.user_id as user_to',
                            'p.id as post_id',
                            'f.feedable_type as feed_type',
                            'u.name as sender_name',
                            'u.id as sender_id',

                            'u.name as owner_name',
                            't.file_url as thumbnail_url',
                            'f.created_at'
                        )->where('f.user_id', $request->user_id)
                        ->where('f.id', $f->id)
                        ->join('posts as p', 'f.feedable_id', 'p.id')
                        ->where('f.feedable_type', '=', 'post')
                        ->join('posts as p', 'p.post_id', 'p.id')
                        ->join('thumbs as t', 't.id', 'p.thumb_id')
                        ->join('users as u', 'p.user_id', 'u.id')
                        ->first();


                    if ($post !== null)
                        $feeds->push($post);
                    break;
                case 'relation':
                    $relation = DB::table('feeds as f')
                        ->select(
                            'f.id',
                            'f.user_id as user_to',
                            'f.feedable_type as feed_type',
                            'u.name as sender_name',
                            'u.id as sender_id',
                            'u2.id as recipient_id',
                            'u.name as owner_name',
                            'f.created_at'
                        )->where('f.user_id', $request->user_id)
                        ->where('f.id', $f->id)
                        ->join('relations as r', 'f.feedable_id', 'r.id')
                        ->where('f.feedable_type', '=', 'relation')
                        ->join('users as u', 'r.sender_id', 'u.id')
                        ->join('users as u2', 'r.recipient_id', 'u2.id')
                        ->first();
                    if ($relation !== null) {
                        $relation->sender_user = User::find($relation->sender_id);
                        $feeds->push($relation);
                    }
                    break;
                case 'comment':
                    $comment = DB::table('feeds as f')
                        ->select(
                            'f.id',
                            'f.user_id as user_to',
                            'p.id as post_id',
                            'f.feedable_type as feed_type',
                            'u.name as sender_name',
                            'u.id as sender_id',
                            'u.name as owner_name',
                            't.file_url as thumbnail_url',
                            'f.created_at'
                        )->where('f.user_id', $request->user_id)
                        ->where('f.id', $f->id)
                        ->join('comments as c', 'f.feedable_id', 'c.id')
                        ->where('f.feedable_type', '=', 'comment')
                        ->join('posts as p', 'c.post_id', 'p.id')
                        ->join('thumbs as t', 't.id', 'p.thumb_id')
                        ->join('users as u', 'c.user_id', 'u.id')
                        ->first();

                    if ($comment !== null) {
                        $comment->sender_user = User::find($comment->sender_id);
                        $comment->post = Post::find($comment->post_id);
                        $comment->thumb = Thumb::find($comment->post->thumb_id);


                        $feeds->push($comment);
                    }
                    break;
                case 'message':
                    $message = DB::table('feeds as f')
                        ->select(
                            'f.id',
                            'f.user_id as user_to',
                            'f.feedable_id as feedable_id',
                            'f.feedable_type as feed_type',
                            'u.name as sender_name',
                            'u.id as sender_id',
                            'u.name as owner_name',
                            'f.created_at'
                        )->where('f.user_id', $request->user_id)
                        ->where('f.id', $f->id)
                        ->join('message as m', 'f.feedable_id', 'm.id')
                        ->where('f.feedable_type', '=', 'message')
                        ->join('users as u', 'm.sender_id', 'u.id')
                        ->first();
                    if ($message !== null) {

                        $message->sender_user = User::find($message->sender_id);
                        $message->message = Message::find($message->feedable_id);
                        $feeds->push($message);
                    }
                    break;
                default:
                    //

            }

        }


        return response()->json([
            'success' => true,
            'feeds' => $feeds,
        ]);


    }

    public function changeStatus(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'status' => [Rule::in(['unread', 'received', 'read'])]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $feed = Feed::where('id', $id)->first();


        if ($feed != null) {


            $feed->status = $request->status;
            $feed->save();


            // When status equal `read`,  get comment, share and like feeds with the same related post id and mark them as read
            // so user hasn't gto click on each one of them;
            $currentType = $feed->feedable_type;
            if ($request->status == 'read') {
                if ($currentType == 'comment' || $currentType == 'like' ) {
                    $relatedFeeds = Feed::where('feedable_id', $feed->feedable_id)
                        ->orWhere('feedable_type', 'comment')
                        ->orWhere('feedable_type', 'like')
                        ->orWhere('feedable_type', 'share')
                        ->where('status', 'unread')
                        ->where('user_id', $feed->user_id)
                        ->get();

                    foreach ($relatedFeeds as $rFeed) {
                        $rFeed->status = 'read';
                        $rFeed->save();
                    }

                }
            }
            return response()->json([
                'success' => true,
                'feed' => $feed
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'feed not available'
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

        $aux = new FeedsTableSeeder;
        $feeds = $aux->run();

        if ($feeds == null) {
            return response()->json([
                'success' => true,
                'message' => 'feeds was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'feeds not restored'
            ]);
        }
    }

}
