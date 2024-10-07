<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
   use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table="message";

    protected $fillable = [
        'status'
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
    protected $appends = array('diffForHumans',  );

    public function feeds()
    {
        return $this->morphOne(Feed::class, 'feedable');
    }

    public function sender()
    {
        return $this->belongsTo(User::class);
    }


    public function recipient()
    {
        return $this->belongsTo(User::class);
    }
    public function getDiffForHumansAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans(null, false,true);
    }
    public function getCreatedAtAttribute($value){
        $date = \Illuminate\Support\Carbon::parse($value);
        return $date->format('Y-m-d H:i:s');
    }
    public function getUpdatedAtAttribute($value){
        $date = Carbon::parse($value);
        return $date->format('Y-m-d H:i:s');
    }
}
