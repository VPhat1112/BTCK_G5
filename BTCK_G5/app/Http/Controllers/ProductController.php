<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    //
    public function detail_product($product_id, Request $request) {
            

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $branch_product = DB::table('tbl_branch_product')->where('branch_status','1')->orderby('branch_id','desc')->get();

        $product_by_id = DB::table('tbl_product')->join('tbl_branch_product','tbl_product.branch_id','=','tbl_branch_product.branch_id')
        ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.product_id',$product_id)->get();
    
        foreach($product_by_id as $key => $product) {
            $category_id = $product->category_id;
        }
        
        $relate_product = DB::table('tbl_product')->join('tbl_branch_product','tbl_product.branch_id','=','tbl_branch_product.branch_id')
        ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        ->where('tbl_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();
    
        foreach($product_by_id as $key => $val) {
            // seo meta
            $meta_title = $val->product_name;
           $meta_desc = $val->product_desc;
        //    $meta_keywords = $val->product_keywords;
           $meta_canonical = $request->url();
           $image_og = url('/').'/public/upload/product/'.$val->product_image;
           // end seo meta
       }

        return view('Product.detail-product')->with('category_product',$cate_product)->with('branch_product',$branch_product)
        ->with('product_by_id',$product_by_id)
        ->with('relate_product',$relate_product)
        ->with('meta_title',$meta_title)
        ->with('meta_desc',$meta_desc)
        // ->with('meta_keywords',$meta_keywords)
        ->with('meta_canonical',$meta_canonical)
        ->with('image_og',$image_og);
    }
}
