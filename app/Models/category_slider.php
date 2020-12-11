<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_slider extends Model
{
    use HasFactory;
    protected $table ='category_sliders';
    protected $fillable =['name','photo'];
}
