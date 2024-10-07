<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Share;
use Database\Seeders\SharesTableSeeder;

class ShareController extends Controller
{

    public function create(Request $request){


        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'user_ids' => 'required',
            'post_id'=> 'required',
            'user_id'=>'required',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }


        foreach($request->user_ids as $shareToUserid){

            $share = new Share();
            $share->user_id= $request->user_id;
            $share->user_to = $shareToUserid;
            $share->post_id = $request->post_id;
            $share->save();


            $feed = new Feed();

            $feed->user_id = $shareToUserid;
            $feed->feedable_id = $share->id;
            $feed->feedable_type = 'share';
            $feed->type ='share';
            $feed->status = 'unread';
            $feed->save();

        }

        return response()->json([
            'success' => true,


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

        $aux = new SharesTableSeeder;
        $shares = $aux->run();

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


