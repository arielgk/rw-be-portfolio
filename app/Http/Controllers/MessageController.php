<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MessageController extends Controller
{


    private function generateSessionId($sender_id, $recipient_id)
    {

        return $sender_id > $recipient_id
            ? $recipient_id . '_' . $sender_id
            : $sender_id . '_' . $recipient_id;
    }

    public function create(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'sender_id' => 'required',
            'recipient_id' => 'required',
            'body' => 'required',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $message = new Message();
        $message->sender_id = $request->sender_id;
        $message->recipient_id = $request->recipient_id;
        $message->body = $request->body;
        $message->status = $request->status;
//        $message->session = Str::uuid();
        $message->session = $this->generateSessionId($request->sender_id, $request->recipient_id);
        $message->save();


        $feed = new Feed();
        $feed->user_id = $message->recipient_id;
        $feed->type = 'message';
        $feed->feedable_type = 'message';
        $feed->feedable_id = $message->id;
        $feed->save();


        return response()->json([
            'success' => true,
            'message' => $message,

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

        $messages = Message::all();

        if ($messages == null) {
            return response()->json([
                'success' => false,
                'message' => 'messages not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'messages' => $messages,

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

        $message = Message::where('id', $id)->first();

        if ($message != null) {
            return response()->json([
                'success' => true,
                'message' => $message
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'message id not available'
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

        $message = Message::destroy($id);

        if ($message == null) {
            return response()->json([
                'success' => true,
                'message' => 'message was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'message not available'
            ]);
        }
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

        $msg = Message::where('id', $id)->first();

        if ($msg != null) {

            $msg->status = $request->status;
            $msg->save();

            return response()->json([
                'success' => true,
                'feed' => $msg
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'msg not available'
            ]);
        }
    }

    public function getMessagesBySession(Request $request, $session)
    {

        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }


        $messages = Message::where('session', $session)->with('sender')->get();


        foreach ($messages as $mes) {
            $feed = DB::table('feeds')->where('user_id', Auth::user()->id)
                ->where('feedable_id', $mes->id)
                ->where('feedable_type', 'message')
                ->update(['status' => 'read']);

        }


//        if($messages){
//            foreach ($messages as $message) {
//                $message->with('user');
//
//            }
//        }

        if ($messages == null) {
            return response()->json(['success' => true,
                'message' => []]);
        }


        return response()->json([
            'success' => true,
            'messages' => $messages,

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
        
        $messages = Message::truncate();

        if ($messages == null) {
            return response()->json([
                'success' => true,
                'message' => 'messages was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'messages not restored'
            ]);
        }
    }

}
