<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'branch_name','branch_desc','branch_product_keywords','branch_status'
    ];
    protected $primaryKey = 'branch_id';
    protected $table = 'tbl_branch_product';
    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}
