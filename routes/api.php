<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ThumbController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\RestoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'v1'], function () {


    /*USER*/
    Route::post('/users/login', [UserController::class, 'login'])->name('login');
    Route::post('users/register', [UserController::class, 'register']);
    Route::get('/users/logout', [UserController::class, 'logout'])->middleware('auth:api');
    Route::post('/users/profile', [UserController::class, 'profile'])->middleware('auth:api');
    Route::post('/users/checkusername', [UserController::class, 'checkUsername']);

    Route::get('/users', [UserController::class, 'getUsers'])->middleware('auth:api');
    Route::get('/users/{id}', [UserController::class, 'getUser'])->middleware('auth:api');
    Route::put('/users/{id}', [UserController::class, 'updateUser'])->middleware('auth:api');
    Route::post('/users/refreshtoken', [UserController::class, 'refreshToken'])->middleware('auth:api');
    Route::post('/users/{id}/image/{image_id}', [UserController::class, 'addImage'])->middleware('auth:api');
    Route::post('/users/{id}/video/{video_id}', [UserController::class, 'addVideo'])->middleware('auth:api');
    Route::get('/users/{id}/videos', [UserController::class, 'getVideos'])->middleware('auth:api');
    Route::get('/users/{id}/images', [UserController::class, 'getImages'])->middleware('auth:api');
    Route::get('/users/{id}/posts', [UserController::class, 'getPosts'])->middleware('auth:api');
    Route::get('/users/{id}/followers', [UserController::class, 'getFollowers'])->middleware('auth:api');
    Route::get('/users/{id}/followins', [UserController::class, 'getFollowins'])->middleware('auth:api');
    Route::get('/users/{id}/feeds', [UserController::class, 'getFeeds'])->middleware('auth:api');
    Route::get('/users/{id}/likes', [UserController::class, 'getLikes'])->middleware('auth:api');
    Route::put('/users/{id}/feed/{feed_id}/status/{status}', [UserController::class, 'changeStatusFeed'])->middleware('auth:api');
    Route::post('/users/restore', [UserController::class, 'restore'])->middleware('auth:api');

    /*IMAGE*/
    Route::post('/images', [ImageController::class, 'create'])->middleware('auth:api');
    Route::get('/images', [ImageController::class, 'index'])->middleware('auth:api');
    Route::get('/images/{id}', [ImageController::class, 'show'])->middleware('auth:api');
    Route::delete('/images/{id}', [ImageController::class, 'destroy'])->middleware('auth:api');
    Route::post('/images/{id}/post/{post_id}', [ImageController::class, 'addPost'])->middleware('auth:api');
    Route::post('/images/{id}/user/{user_id}', [ImageController::class, 'addUser'])->middleware('auth:api');
    Route::post('/images/restore', [ImageController::class, 'restore'])->middleware('auth:api');


    /*VIDEO*/
    Route::post('/videos', [VideoController::class, 'create'])->middleware('auth:api');
    Route::get('/videos', [VideoController::class, 'index'])->middleware('auth:api');
    Route::get('/videos/{id}', [VideoController::class, 'show'])->middleware('auth:api');
    Route::delete('/videos/{id}', [VideoController::class, 'destroy'])->middleware('auth:api');
    Route::post('/videos/{id}/post/{post_id}', [VideoController::class, 'addPost'])->middleware('auth:api');
    Route::post('/videos/{id}/user/{user_id}', [VideoController::class, 'addUser'])->middleware('auth:api');
    Route::post('/videos/restore', [VideoController::class, 'restore'])->middleware('auth:api');

    /*FEED*/
    Route::post('/feeds', [FeedController::class, 'create'])->middleware('auth:api');
    Route::get('/feeds', [FeedController::class, 'index'])->middleware('auth:api');
    Route::get('/feeds/{id}', [FeedController::class, 'show'])->middleware('auth:api');
    Route::delete('/feeds/{id}', [FeedController::class, 'destroy'])->middleware('auth:api');
    Route::put('/feeds/{id}/status/{status}', [FeedController::class, 'changeStatus'])->middleware('auth:api');
    Route::get('/feeds-by-user/{user_id}/status/{status}', [FeedController::class, 'getFeedByUser'])->middleware('auth:api');
    Route::post('/feeds/restore', [FeedController::class, 'restore'])->middleware('auth:api');

    /*LIKE*/
    Route::post('/likes', [LikeController::class, 'create'])->middleware('auth:api');
    Route::get('/likes', [LikeController::class, 'index'])->middleware('auth:api');
    Route::get('/likes/{id}', [LikeController::class, 'show'])->middleware('auth:api');
    Route::delete('/likes/{id}', [LikeController::class, 'destroy'])->middleware('auth:api');
    Route::post('/likes/restore', [LikeController::class, 'restore'])->middleware('auth:api');

    /*POST*/
    Route::post('/posts', [PostController::class, 'create'])->middleware('auth:api');
    Route::get('/posts', [PostController::class, 'index'])->middleware('auth:api');
    Route::get('/posts/{id}', [PostController::class, 'show'])->middleware('auth:api');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware('auth:api');
    Route::post('/posts/{id}/image/{image_id}', [PostController::class, 'addImage'])->middleware('auth:api');
    Route::post('/posts/{id}/video/{video_id}', [PostController::class, 'addVideo'])->middleware('auth:api');
    Route::post('/posts/{id}/thumb/{thumb_id}', [PostController::class, 'addThumb'])->middleware('auth:api');
    Route::get('/posts-by-user-id/{user_id}', [PostController::class, 'getPostsByUserID'])->middleware('auth:api');
    Route::post('/posts/restore', [PostController::class, 'restore'])->middleware('auth:api');

    /*COMMENT*/
    Route::post('/comments', [CommentController::class, 'create'])->middleware('auth:api');
    Route::get('/comments', [CommentController::class, 'index'])->middleware('auth:api');
    Route::get('/comments/{id}', [CommentController::class, 'show'])->middleware('auth:api');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->middleware('auth:api');
    Route::post('/comments/restore', [CommentController::class, 'restore'])->middleware('auth:api');

    /*RELATION*/
    Route::post('/relations', [RelationController::class, 'create'])->middleware('auth:api');
    Route::get('/relations', [RelationController::class, 'index'])->middleware('auth:api');
    Route::delete('/relations', [RelationController::class, 'destroyBySenderAndRecipient'])->middleware('auth:api');
    Route::get('/relations/{id}', [RelationController::class, 'show'])->middleware('auth:api');
    Route::delete('/relations/{id}', [RelationController::class, 'destroy'])->middleware('auth:api');
    Route::put('/relations/{id}/status/{status}', [RelationController::class, 'changeStatus'])->middleware('auth:api');
    Route::get('/relations/followed/{recipient_id}', [RelationController::class, 'checkRelation'])->middleware('auth:api');
    Route::post('/relations/restore', [RelationController::class, 'restore'])->middleware('auth:api');

    /*UPLOAD*/
    Route::post('/uploads/{user_id}/type/{type}', [UploadController::class, 'create'])->middleware('auth:api');

    /*THUMB*/
    Route::post('/thumbs', [ThumbController::class, 'create'])->middleware('auth:api');
    Route::get('/thumbs', [ThumbController::class, 'index'])->middleware('auth:api');
    Route::get('/thumbs/{id}', [ThumbController::class, 'show'])->middleware('auth:api');
    Route::delete('/thumbs/{id}', [ThumbController::class, 'destroy'])->middleware('auth:api');
    Route::post('/thumbs/{id}/post/{post_id}', [ThumbController::class, 'addPost'])->middleware('auth:api');
    Route::post('/thumbs/restore', [ThumbController::class, 'restore'])->middleware('auth:api');

    /*MESSAGES*/
    Route::post('/messages', [MessageController::class, 'create'])->middleware('auth:api');
    Route::get('/messages', [MessageController::class, 'index'])->middleware('auth:api');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->middleware('auth:api');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->middleware('auth:api');
    Route::get('/messages/session/{session}',[MessageController::class, 'getMessagesBySession'])->middleware('auth:api');
    Route::post('/messages/restore', [MessageController::class, 'restore'])->middleware('auth:api');

    /*SHARE*/
    Route::post('/share', [ShareController::class, 'create'])->middleware('auth:api');
    Route::post('/share/restore', [ShareController::class, 'restore'])->middleware('auth:api');

    /*TAG*/
    Route::get('/tags', [TagController::class, 'index'])->middleware('auth:api');
    Route::post('/tags/restore', [TagController::class, 'restore'])->middleware('auth:api');

    /*SEARCH*/
    Route::post('/search', [SearchController::class, 'search'])->middleware('auth:api');
    Route::post('/search/keyword', [SearchController::class, 'searchByKeyword'])->middleware('auth:api');

    /*RESTORE*/
    Route::post('/restore/dumpdb', [RestoreController::class, 'dumpdb'])->middleware('auth:api');
});
