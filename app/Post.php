<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
      'category_id','from_section','title','description','content', 'status', 'slug'
    ];
}
