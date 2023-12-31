<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Branch;
use DB;
use Session;
class HomeController extends Controller
{
    //
    public function index(Request $request){
        $meta_title = "Shop đồng hồ Xwatch247 - Trang chủ";
        $meta_desc = "Đồng hồ giá tốt, chính hãng, thời trang với giá tiền phù hợp cho tất cả mọi người.";
        $meta_keywords = "đồng hồ, đồng hồ nam, watch store, đồng hồ nữ";
        $meta_canonical = $request->url();
        $image_og = "";
        $productCount = $this->getProductCount();
        $products = DB::table('tbl_product')->where('product_status','>=','1')->orderby('product_id','desc')->limit(9)->get();
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        // $branch_product = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();
        $last_product=DB::table('tbl_product')->orderby('created_at','desc')->take(1)->get();
        Session::put('productCount',$productCount);
        // dd($thietbi);
        return view("HomePage",[
            'products'=>$products,
            'category'=>$cate_product,
            // 'branch'=>$branch_product,
            'last_product'=>$last_product
        ])->with(['productCount' => $productCount]);
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
