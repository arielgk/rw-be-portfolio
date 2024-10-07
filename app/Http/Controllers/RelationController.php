<?php

namespace App\Http\Controllers;

use App\Models\Relation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Database\Seeders\RelationsTableSeeder;


class RelationController extends Controller
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
            'sender_id' => 'required',
            'recipient_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

       $exists = Relation::where('sender_id', $request->sender_id)
            ->where('recipient_id', $request->recipient_id)
            ->first();

        if($exists==null){


            $relation = new Relation();
            $relation->sender_id = $request->sender_id;
            $relation->recipient_id = $request->recipient_id;
            $relation->status = 'accepted';
            $relation->save();
        }else{

            $relation =$exists;
        }
        return response()->json([
            'success' => true,
            'relation' => $relation,

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

        if ($request->user_id){
            $relations = Relation::where('sender_id', $request->user_id)->get();
        } else {
            $relations = Relation::all();
        }

        if ($relations == null) {
            return response()->json([
                'success' => false,
                'relation' => 'relation not available'
            ]);
        }

        return response()->json([
            'success' => true,
            'relations' => $relations,

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

        $relation = Relation::where('sender_id', $id)->first();

        if ($relation != null) {
            return response()->json([
                'success' => true,
                'relation' => $relation
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'relation not available'
            ]);
        }
    }

    public function destroyBySenderAndRecipient(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'sender_id' => 'required',
            'recipient_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $_relation = Relation::where('sender_id', $request->sender_id)
                                    ->where('recipient_id', $request->recipient_id)
                                    ->first();
        if ($_relation == null) {
            return response()->json([
                'success' => true,
                'message' => 'relation was destroyed'
            ]);
        }

        $relation = Relation::destroy($_relation->id);

        if ($relation == null) {
            return response()->json([
                'success' => true,
                'message' => 'relation was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'relation not available'
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

        $relation = Relation::destroy($id);

        if ($relation == null) {
            return response()->json([
                'success' => true,
                'message' => 'relation was destroyed'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'relation not available'
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
            'status' => [Rule::in(['pending', 'accepted', 'rejected'])]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $relation = Relation::where('id', $id)->first();

        if ($relation != null) {

            $relation->status = $request->status;
            $relation->save();

            return response()->json([
                'success' => true,
                'relation' => $relation
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'relation not available'
            ]);
        }
    }

    public function checkRelation(Request $request, $recipientId )
    {


        $relation = Relation::where("sender_id", Auth::user()->id)->where('recipient_id', $recipientId)->first();

        if ($relation != null) {
            return response()->json([
                'success' => true,
                'relation' => $relation
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'relation not available'
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

        $aux = new RelationsTableSeeder;
        $relations = $aux->run();

        if ($relations == null) {
            return response()->json([
                'success' => true,
                'message' => 'relations was restored'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'relations not restored'
            ]);
        }
    }

}
