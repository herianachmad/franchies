<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table ='category_posts';
    protected $fillable = ['name','description'];
}
