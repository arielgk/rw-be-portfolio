<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Ifsnop\Mysqldump as IMysqldump;

class RestoreController extends Controller
{

    public function dumpdb(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'success' => false,
                'message' => 'user not authenticated'
            ]);
        }
        $file_sql = 'dump.sql';

        $url = '';
        $error = null;

        try {
            $dump = new IMysqldump\Mysqldump('mysql:host='.env('DB_HOST').':'.env('DB_PORT').';dbname='.env('DB_DATABASE'), env('DB_USERNAME'), env('DB_PASSWORD'));
            $dump->start('uploads/'.$file_sql);

            $disk = Storage::disk('public');
            $url = $disk->url($file_sql);
        } catch (\Exception $e) {
            $error = 'mysqldump-php error: ' . $e->getMessage();
        }

        if ($error == null) {
            return response()->json([
                'success' => true,
                'sql_url' => $url
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => $error
            ]);
        }
    }

}
