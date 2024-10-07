<?php

use App\Models\Post;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('logs:clear', function () {

    exec('rm -f ' . storage_path('logs/*.log'));

    exec('rm -f ' . base_path('*.log'));

    $this->comment('Logs have been cleared!');

})->describe('Clear log files');


Artisan::command('generate:imagesizes', function () {
    $posts = Post::all();
    $disk = Storage::disk('public');

    $sizes =
        [
            "big" => ["destination" => "big", "height" => 600, "width" => 600],
            "medium" => ["destination" => "mid", "height" => 400, "width" => 400],
            "small" => ["destination" => "small", "height" => 200, "width" => 200],

        ];

    foreach ($posts as $post) {

        foreach ($post->images as $image) {
            $dest_dir = $post->user_id . "/" . $image->type;
            $img = Image::make($image->file_url);
            foreach ($sizes as $size) {

                $destinationPath = $dest_dir . "/" . $size['destination'];


                if (!file_exists($destinationPath)) {
                    $disk->makeDirectory($destinationPath);

                }


                $resize = $img->resize($size['width'], null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($disk->path($destinationPath) . "/" . basename($image->file_url));
            }
        }
    }


});

Artisan::command('generate:thumbnails', function () {
    $posts = Post::all();
    $disk = Storage::disk('public');

    $sizes =
        [
            "big" => ["destination" => "big", "height" => 600, "width" => 600],
            "medium" => ["destination" => "medium", "height" => 200, "width" => 200],
            "small" => ["destination" => "small", "height" => 20, "width" => 20],

        ];

    foreach ($posts as $post) {

//        foreach ($post->images as $image) {
        $dest_dir = $post->user_id . "/thumbnails";
        $img = Image::make($post->thumb->file_url);
        foreach ($sizes as $size) {

            $destinationPath = $dest_dir . "/" . $size['destination'];


            if (!file_exists($destinationPath)) {
                $disk->makeDirectory($destinationPath);

            }


            $resize = $img->resize($size['width'], null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($disk->path($destinationPath) . "/" . basename($post->thumb->file_url));
        }
//        }
    }


});


Artisan::command('purge:images', function () {
    $sizes =
        [

            "big" => ["destination" => "big", "height" => 600, "width" => 600],
            "medium" => ["destination" => "mid", "height" => 400, "width" => 400],
            "small" => ["destination" => "small", "height" => 200, "width" => 200],

        ];
    $disk = Storage::disk('public');

    $posts = Post::all();


    $domain = "http://02b8-191-85-122-144.ngrok.io/";


    foreach ($posts as $post) {

        foreach ($post->images as $image) {

            $dest_dir = public_path("/purgue/" . $post->id . "/" . $image->type);
            $dir = $disk->makeDirectory($dest_dir);

            $file_path = str_replace($domain, "", $image->file_url);
            $file = File::get(public_path('/') . $file_path);

            if ($file != null) {
                $d = '/home/ariel/Dev/RW/rw-socialyz-be/public/purgue/' . $post->user->id . "/" . $image->type . "/";
                $f = "/home/ariel/Dev/RW/rw-socialyz-be/public/" . $file_path;

                echo "mkdir -p " . $d . " && cp " . $f . " " . $d . PHP_EOL;

            }


        }


        $file_path = str_replace($domain, "", $post->thumb->file_url);

        $d = "/home/ariel/Dev/RW/rw-socialyz-be/public/purgue/" .$post->user->id . "/thumbnails/";
        $f = "/home/ariel/Dev/RW/rw-socialyz-be/public/" . $file_path;

        echo "mkdir -p " . $d . " && cp " . $f . " " . $d . PHP_EOL;
    }
    echo 'sail php artisan generate:imagesizes' . PHP_EOL;
    echo 'sail php artisan generate:thumbnails' . PHP_EOL;
    echo 'mv uploads uploads_old' . PHP_EOL;
    echo 'mv purgue uploads' . PHP_EOL;



});


function replaceDomain($url, $currentDomain, $newDomain)
{

    return str_replace($currentDomain, $newDomain, $url);


}


Artisan::command('rewrite:urls', function () {
    //    $fileUrl = "http://192.168.1.45/uploads/1/AlphaAuto/qhXj3lI3fkGZ6NwcuU7GXt6DkyIV4ALmjEJ8rINL.png";
    //    var_dump(replaceDomain($fileUrl, "http://192.168.1.45/","http://localhost:8000/"));
    $images = App\Models\Image::all();
    $thumbs = App\Models\Thumb::all();

//    $current = "http://ec2-54-154-211-20.eu-west-1.compute.amazonaws.com/";
//    $current = "http://7e14-191-85-120-116.ngrok.io/";
    $current = "http://192.168.1.45/";
    $new = "http://192.168.1.47/";

    foreach ($images as $image) {
        $image->file_url = replaceDomain($image->file_url, $current, $new);
        $image->save();
    }
    foreach ($thumbs as $thumb) {
        $thumb->file_url = replaceDomain($thumb->file_url, $current, $new);
        $thumb->save();
    }
});
