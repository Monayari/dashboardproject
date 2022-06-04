<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [

        'is_replay_to_id',

        'comment',
        'enable',
        'user_id'
    ];
    public function user(){

        return $this->belongsTo(User::class);
    }
}
