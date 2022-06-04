<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
    use  HasFactory,SoftDeletes;
    protected $fillable = [
        'title',
        'article',
        'file',
        'user_id',
        'data_published',
        'banner_img',
        'featured',
        'enabled',
        'comments_enabled',
        'views',
        'updated_at'
    ];
    protected $table = "projects";

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}
