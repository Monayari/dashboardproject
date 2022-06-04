<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use  HasFactory,SoftDeletes;
    protected $fillable = [
        'tag',
        'tag_slug'];
    protected $table = "tags";

    public function projects(){
        return $this->belongsToMany(Project::class);
    }

}
