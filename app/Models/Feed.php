<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Passport\HasApiTokens;

class Feed extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'status' => 'string'
    ];

    public function feedable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasOne(Like::class);
    }


    public function childs($type, $id)
    {
        $res = [];
        switch ($type) {

            case 'post':
                $res = Post::find($id);
                break;
            case 'relation':
                $res = Relation::find($id);
                break;
            case 'comment':
                $res = Comment::find($id);
                break;
            case 'like':
                $res = Like::find($id)->with('post');
                break;
            case 'message':
                $res = Message::find($id);
                break;
            case 'share':
                $res = Share::find($id);
                break;
            default:
                // code...
                break;
        }
        return $res;
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
