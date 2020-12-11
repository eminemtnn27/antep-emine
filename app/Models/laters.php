<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laters extends Model
{
    use HasFactory;
    protected $table ='laters';
    protected $fillable =['title','name' ,'price' , 'photo'];
}
