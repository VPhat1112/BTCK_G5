<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name',
    'category_desc',
    'category_status'];
    protected $table='tbl_category_product';
    protected $primaryKey='category_id';
    public $timestamps=true;

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}