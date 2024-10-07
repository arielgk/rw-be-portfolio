<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Passport\HasApiTokens;
use Spatie\Tags\HasTags;


class Post extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasTags;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $hidden = ['thumb_id'];

    protected $appends = array('totalComments', 'totalLikes' );

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'post_image')
            ->withTimestamps();
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class, 'post_video')
            ->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function feeds()
    {
        return $this->morphOne(Feed::class, 'feedable');
    }

    public function thumb()
    {
        return $this->hasOne(Thumb::class, "id", "thumb_id");
    }

    public function getTotalLikesAttribute()
    {
        return $this->hasMany(Like::class)->wherePostId($this->id)->count();

    }

    public function getTotalCommentsAttribute()
    {
        return $this->hasMany(Comment::class)->wherePostId($this->id)->count();

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
