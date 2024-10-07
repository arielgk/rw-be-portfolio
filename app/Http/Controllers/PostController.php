<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use App\Models\Video;
use App\Models\Thumb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Database\Seeders\PostImageTableSeeder;
use Database\Seeders\PostsTableSeeder;

class PostController extends Controller
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
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }
        $post = new Post();

        $post->user_id = $request->user_id;
        if ($request->thumb_id) {
            $post->thumb_id = $request->thumb_id;
        }
        if ($request->description) {
            $post->description = $request->description;
        }
        if ($request->filter_data) {
            $post->filter_data = json_encode($request->filter_data);
        }

        if ($request->is_profile) {
            $post->is_profile = $request->is_profile;
            Auth::user()->images()->delete();
            $t = Thumb::where('id', $request->thumb_id)->first();
            $image = new Image();
            $image->file_url = $t->file_url;
            $image->type = 'profile';
            $image->save();
            Auth::user()->images()->attach($image->id);

        }


        if ($request->thumb_url) {
            $thumb = new Thumb();
            $thumb->file_url = $request->thumb_url;
            $thumb->save();
            $post->thumb_id = $thumb->id;
        }

        $post->save();
        $tags = $this->get_hashtags($request->description);

        $post->attachTags($tags);


        if ($request->images) {
            foreach ($request->images as $_item) {


                $item = (object)$_item;
                $validator = Validator::make($_item, [
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
                $image->file_url = $item->file_url;
                $image->type = $item->type;
                $image->save();
                $post->images()->attach($image->id);
            }
        }

        if ($request->videos) {
            foreach ($request->videos as $_item) {
                $item = (object)$_item;
                $validator = Validator::make($_item, [
                    'file_url' => 'required'
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => $validator->errors(),
                    ], 401);
                }

                $video = new Video();
                $video->file_url = $item->file_url;
                $video->save();
                $post->images()->attach($video->id);
            }
        }

        $postResponnse = Post::whereId($post->id)->with(['images', 'comments', 'comments.user', 'videos', 'thumb', 'user'])->get();
        return response()->json([
            'success' => true,
            'post' => $postResponnse,

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

        $posts = Post::with(['comments', 'comments.user', 'videos', 'images', 'user', 'thumb'])->where('is_profile', 0)->orderBy('created_at', "DESC")
            ->get();


        if ($posts == null) {
            return response()->json([
                'success' => false,
                'post' => 'post not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'posts' => $posts,

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

        $post = Post::where('id', $id)->with(['comments', 'comments.user', 'videos', 'images', 'thumb', 'user'])->first();



        if ($post != null) {
            return response()->json([
                'success' => true,
                'post' => $post
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'post not available'
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

        $post = Post::destroy($id);

        if ($post == null) {
            return response()->json([
                'success' => true,
                'message' => 'post was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'post not available'
            ]);
        }
    }

    public function addImage(Request $request, $id, $image_id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $post = Post::where('id', $id)->first();

        if ($post != null) {
            $post->images()->attach($image_id);
            return response()->json([
                'success' => true,
                'post' => $post
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'post not available'
            ]);
        }
    }


    public function addVideo(Request $request, $id, $video_id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $post = Post::where('id', $id)->first();

        if ($post != null) {
            $post->videos()->attach($video_id);
            return response()->json([
                'success' => true,
                'post' => $post
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'post not available'
            ]);
        }
    }

    public function addThumb(Request $request, $id, $thumb_id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $post = Post::where('id', $id)->first();

        if ($post != null) {
            $post->thumb_id = $thumb_id;
            $post->save();
            return response()->json([
                'success' => true,
                'post' => $post
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'post not available'
            ]);
        }
    }

    public function getPostsByUserID(Request $request)
    {

        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }
        $posts = Post::where('user_id', $request->user_id)->with(['comments', 'comments.user', 'videos', 'images', 'thumb', 'user'])->orderBy('created_at', "DESC")->get();
        return response()->json([
            'success' => true,
            'posts' => $posts
        ]);
    }

    public function get_hashtags($string) {
        preg_match_all('/#(\w+)/',$string,$matches);

        $keyword=[];
        foreach ($matches[1] as $match) {
            $keyword[] = $match;
        }

        $keywords = $keyword;

        return $keywords;
    }

    public function restore(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $aux = new PostImageTableSeeder;
        $aux->run();
        $aux2 = new PostsTableSeeder;
        $posts = $aux2->run();

        if ($posts == null) {
            return response()->json([
                'success' => true,
                'message' => 'posts was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'posts not restored'
            ]);
        }
    }

}
