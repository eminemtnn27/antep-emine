<?php

namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','price','photo','description','status', 'created_by','category_id'];

    //İlişkili olduğu alanlar
    public function user(){
        return $this->hasMany('App\Models\User','id','created_by');
    }

  public function getCategory(){
        return $this->hasOne('App\Models\Category' , 'id' , 'category_id'); //hangi kategoride olduğunu bulur
    }
}
