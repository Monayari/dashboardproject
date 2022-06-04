<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use  HasFactory,  SoftDeletes;
    protected $fillable = [
        'name',
        'category_slug',
        'enabled'];
    protected $table = "categories";

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
