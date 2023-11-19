<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Branch;
use DB;
class HomeController extends Controller
{
    //
    public function index(Request $request){
        $meta_title = "Shop đồng hồ Xwatch247 - Trang chủ";
        $meta_desc = "Đồng hồ giá tốt, chính hãng, thời trang với giá tiền phù hợp cho tất cả mọi người.";
        $meta_keywords = "đồng hồ, đồng hồ nam, watch store, đồng hồ nữ";
        $meta_canonical = $request->url();
        $image_og = "";

        $products = DB::table('tbl_product')->where('product_status','>=','1')->orderby('product_id','desc')->limit(9)->get();
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $branch_product = DB::table('tbl_branch_product')->where('branch_status','1')->orderby('branch_id','desc')->get();
        
        // dd($thietbi);
        return view("HomePage",[
            'products'=>$products,
            'category'=>$cate_product,
            'branch'=>$branch_product
        ]);
    }


}
