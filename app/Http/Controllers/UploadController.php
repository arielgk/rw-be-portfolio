<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{

    public function create(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }

        if ($request->type === 'video') {
            $validator = Validator::make($request->all(), [
                'file' => 'mimetypes:video/avi,video/mpeg,video/quicktime'
            ]);
        } else {
            /*Thumbnails or Images*/
            $validator = Validator::make($request->all(), [
                'file' => 'mimes:jpg,bmp,png'
            ]);
        }

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $sizes =
            [

                "big" => ["destination" => "big", "height" => 600, "width" => 600],
                "medium" => ["destination" => "mid", "height" => 400, "width" => 400],
                "small" => ["destination" => "small", "height" => 200, "width" => 200],

            ];


        $disk = Storage::disk('public');


        $img = Image::make($request->file('file'));

        $dest_dir = $request->user_id . "/" . $request->type;

        $dir = $disk->makeDirectory($dest_dir);
        $path = $disk->putFile($dest_dir, $request->file('file'));
        $url = $disk->url($path);

        foreach ($sizes as $size) {

            $destinationPath = $dest_dir . "/" . $size['destination'];

            if (!file_exists($destinationPath)) {
                 $disk->makeDirectory($destinationPath);

            }



            $resize= $img->resize($size['width'],null,function ($constraint) {
                $constraint->aspectRatio();
            })->save($disk->path($destinationPath) . "/" . basename($path));


        }


        return response()->json([
            'success' => true,
            'url' => $url,
        ]);
    }

}
