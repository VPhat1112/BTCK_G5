<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'branch_id',
        'product_content',
        'product_keywords',
        'product_desc',
        'product_price',
        'product_image',
        'product_name',
        'product_status'];
    protected $table= 'tbl_product';
    protected $primaryKey= 'product_id';
    public $timestamps= true;
    // protected $dateFormat='h:m:s';

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
