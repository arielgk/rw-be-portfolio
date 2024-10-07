<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Passport\HasApiTokens;

class Thumb extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'file_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pivot'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    protected $appends = array('full', 'medium', 'small');

    public function posts()
    {
        return $this->belongsTo(Post::class)
                    ->withTimestamps();
    }

    public function getFullAttribute(): string
    {
        $basename = basename($this->file_url);
        $baseurl = str_replace($basename, "", $this->file_url);

        return $baseurl . 'big/' . $basename;
    }

    public function getMediumAttribute(): string
    {
        $basename = basename($this->file_url);
        $baseurl = str_replace($basename, "", $this->file_url);

        return $baseurl . 'mid/' . $basename;
    }

    public function getSmallAttribute(): string
    {
        $basename = basename($this->file_url);
        $baseurl = str_replace($basename, "", $this->file_url);

        return $baseurl . 'small/' . $basename;
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
