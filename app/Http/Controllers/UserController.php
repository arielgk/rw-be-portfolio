<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\UserImageTableSeeder;
use Database\Seeders\RelationsTableSeeder;

class UserController extends Controller
{

    public function getUser(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $user = User::where('id', $id)->with('images')->first();

        if ($user != null) {
            return response()->json([
                'success' => true,
                'user' => $user
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
            ]);
        }
    }

    public function getUsers(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $user = User::all();

        if ($user == null) {
            return response()->json([
                'success' => false,
                'image' => 'image not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'users' => $user,

        ]);
    }

    public function refreshToken(Request $request)
    {
    }

    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();


            $success['token'] = $user->createToken('appToken')->accessToken;
            //After successfull authentication, notice how I return json parameters
            return response()->json([
                'success' => true,
                'token' => $success['token'],
                'user' => $user
            ]);
        } else {
            //if authentication is unsuccessfull, notice how I return json parameters
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }
    }


    /**
     * Register api.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $token = $user->createToken('appToken');
        $accessToken = $token->accessToken;
        return response()->json([
            'success' => true,
            'token' => $accessToken,
            'user' => $user,
            'token-data' => $token,
        ]);
    }

    public function logout(Request $res)
    {
        if (Auth::user()) {
            $user = Auth::user()->token();
            $user->revoke();

            return response()->json([
                'success' => true,
                'message' => 'Logout successfully'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Unable to Logout'
            ]);
        }
    }


    public function profile(Request $request)
    {
        if (Auth::user()) {
            $user = Auth::user();
            $user->profilecolor = $request->profilecolor;
            $user->profilepicture = $request->profilepicture;
            $user->save();


            $userImages = DB::table('user_image')->where('user_id', $user->id)->delete();









            return response()->json([
                'success' => true,
                'user' => $user,

            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }
    }

    public function updateUser(Request $request)
    {
        if (Auth::user()) {
            $user = Auth::user();

            if($request->profilecolor)
                $user->profilecolor = $request->profilecolor;

            if($request->profilepicture)
                $user->profilepicture = $request->profilepicture;

            if($request->bio)
                $user->bio = $request->bio;

            if($request->name)
                $user->name = $request->name;

            if($request->firstname)
                $user->firstname = $request->firstname;

            if($request->lastname)
                $user->lastname = $request->lastname;

            $user->save();

            return response()->json([
                'success' => true,
                'user' => $user,

            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }
    }


    public function checkUsername(Request $request)
    {
//        $username = str_replace('@ikin.com', '', $request->email);


        $user = User::where('email', $request->username . "@ikin.com")->first();

        if (!$user) {
            return response()->json([
                'success' => true,
                'message' => 'username is available'
            ]);

        } else {
            return response()->json([
                'success' => false,
                'message' => 'username not available'
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

        $user = User::where('id', $id)->first();

        if ($user != null) {
            $user->images()->attach($image_id);
            return response()->json([
                'success' => true,
                'user' => $user
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
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

        $user = User::where('id', $id)->first();

        if ($user != null) {
            $user->videos()->attach($video_id);
            return response()->json([
                'success' => true,
                'user' => $user
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
            ]);
        }
    }

    public function getImages(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $user = User::where('id', $id)->first();

        if ($user != null) {
            $images = $user->images()->skip($request->offset)->take($request->limit)->get();
            return response()->json([
                'success' => true,
                'user' => [$user, "images"=>$images]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
            ]);
        }
    }

    public function getVideos(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $user = User::where('id', $id)->first();

        if ($user != null) {
            $videos = $user->videos()->skip($request->offset)->take($request->limit)->get();
            return response()->json([
                'success' => true,
                'user' => [$user, "videos"=>$videos]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
            ]);
        }
    }

    public function getPosts(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $user = User::where('id', $id)->first();

        if ($user != null) {
            $posts = $user->posts()->skip($request->offset)->take($request->limit)->get();
            return response()->json([
                'success' => true,
                'user' => [$user, "posts"=>$posts]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
            ]);
        }
    }

    public function getFollowers(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $user = User::where('id', $id)->first();

        if ($user != null) {
            $followers = $user->followers()->skip($request->offset)->take($request->limit)->with('images')->get();
            return response()->json([
                'success' => true,
                'user' => [$user, "followers"=>$followers]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
            ]);
        }
    }

    public function getFollowins(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $user = User::where('id', $id)->first();

        if ($user != null) {
            $followins = $user->followins()->skip($request->offset)->take($request->limit)->get();

            foreach ($followins as $followin) {
                 $user= User::find($followin->recipient_id);
                 $followin->user = $user;
            }
            return response()->json([
                'success' => true,
                'user' => [$user, "followins"=>$followins]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
            ]);
        }
    }

    public function getFeeds(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $user = User::where('id', $id)->first();
        if ($user != null) {
            $_feeds = $user->feeds()->skip($request->offset)->take($request->limit)->get();
            $feeds = [];
            foreach($_feeds as $feed){
                $feeds[] = [$feed, "feedable" => $feed->childs($feed->feedable_type,$feed->feedable_id)];
            }
            return response()->json([
                'success' => true,
                'user' => [$user, "feeds"=>$feeds]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
            ]);
        }
    }

    public function getLikes(Request $request, $id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $user = User::where('id', $id)->first();

        if ($user != null) {
            $likes = $user->likes()->skip($request->offset)->take($request->limit)->get();
            return response()->json([
                'success' => true,
                // 'user' => [$user, "likes"=>$likes]
                'user'=>$user,
                'likes'=>$likes,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
            ]);
        }
    }

    public function changeStatusFeed(Request $request, $id, $feed_id)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'status' => [Rule::in(['unread','received','read'])]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $user = User::where('id', $id)->first();

        if ($user != null) {
            $feed = $user->feeds()->where('feed_id', $feed_id)->first();

            if ($feed != null) {

                $feed->status = $request->status;
                $feed->save();

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
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not available'
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

        \DB::table('relations')->delete();

        $aux = new UserImageTableSeeder;
        $aux2 = new UsersTableSeeder;
        $aux3 = new RelationsTableSeeder;

        $aux->run();
        $users = $aux2->run();

        $aux3->run();

        if ($users == null) {
            return response()->json([
                'success' => true,
                'message' => 'users was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'users not restored'
            ]);
        }
    }
}
