<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','price','photo','description', 'created_by','category_id'];

    //İlişkili olduğu alanlar
    public function user(){
        return $this->hasMany('App\User','id','created_by');
    }
    public function category() {
        return $this->hasOne('App\Category','id','category_id');
    }
    function getCategory(){
        return $this->hasOne('App\Models\Category' , 'id' , 'category_id'); //hangi kategoride olduğunu bulur
    }
}
