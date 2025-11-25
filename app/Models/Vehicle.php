<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\VehicleController;
class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicles';

    protected $fillable = ['Title', 'Category', 'Description', 'image_path'];

}
