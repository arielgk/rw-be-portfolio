<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'firstname',
        'lastname',
        'profilepicture',
        'profilecolor'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'pivot'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected $appends = array('followerCount', 'followingCount', 'postCount', 'profileImage');

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function feeds()
    {
        return $this->hasMany(Feed::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function followins()
    {
        return $this->hasMany(Relation::class, 'sender_id');
    }

    public function followers()
    {
        return $this->hasMany(Relation::class, 'recipient_id');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'user_image')
                    ->withTimestamps();
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class, 'user_video')
                    ->withTimestamps();
    }

    public function getFollowerCountAttribute()
    {
        return $this->hasMany(Relation::class, "recipient_id")->count();

    }
    public function getFollowingCountAttribute()
    {
        return $this->hasMany(Relation::class, "sender_id")->count();

    }
    public function getPostCountAttribute()
    {
        return $this->hasMany(Post::class)->count();

    }
    public function getProfileImageAttribute()
    {
        return $this->images()->first();
    }
    public function getCreatedAtAttribute($value){
        $date = Carbon::parse($value);
        return $date->format('Y-m-d H:i:s');
    }
    public function getUpdatedAtAttribute($value){
        $date = Carbon::parse($value);
        return $date->format('Y-m-d H:i:s');
    }

}
