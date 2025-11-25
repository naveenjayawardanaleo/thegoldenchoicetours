<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
//    use HasFactory;
    protected $table = 'tours';

    protected $fillable = ['Title', 'Category', 'ShortDescription', 'Description', 'map', 'image_path', 'gallery'];



}
