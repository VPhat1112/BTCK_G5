<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function detail_product($product_id, Request $request) {
            

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        // $brand_product = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $product_by_id = DB::table('tbl_product')
        // ->join('tbl_brand_product','tbl_product.brand_id','=','tbl_brand_product.brand_id')
        ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.product_id',$product_id)->get();
        // dd($product_by_id);
        foreach($product_by_id as $key => $product) {
            $category_id = $product->category_id;
        }
        
        // $relate_product = DB::table('tbl_product')->join('tbl_brand_product','tbl_product.brand_id','=','tbl_brand_product.brand_id')
        // ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        // ->where('tbl_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();
    
        foreach($product_by_id as $key => $val) {
            // seo meta
            $meta_title = $val->product_name;
            $meta_desc = $val->product_desc;
            $meta_canonical = $request->url();
            $image_og = url('/').'/public/upload/product/'.$val->product_image;
            // end seo meta
        }

        return view('Product.detail-product')
        ->with('category_product',$cate_product)
        // ->with('branch_product',$brand_product)
        ->with('product_by_id',$product_by_id)
        ->with('meta_title',$meta_title)
        ->with('meta_desc',$meta_desc)
        ->with('meta_canonical',$meta_canonical)
        ->with('image_og',$image_og);
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $products = Product::where('product_name', 'like', "%$searchTerm%")->get();
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        // $branch_product = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();
        $last_product=DB::table('tbl_product')->orderby('created_at','desc')->take(1)->get();
        $productCount = $this->getProductCount();

        return view('HomePage')->with('category_product',$cate_product)
        // ->with('branch_product',$branch_product)
        ->with('last_product',$last_product)
        ->with('productCount',$productCount)
        ->with('products',$products);
    }
    public function getProductCount()
    {
        $cart = session()->get('cart', []);

        $productCount = 0;

        foreach ($cart as $item) {
            $productCount += $item['quantity'];
        }

        return $productCount;
    }
}
