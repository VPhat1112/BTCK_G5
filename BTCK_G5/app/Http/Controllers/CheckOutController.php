<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Rules\Captcha;
use App\Models\City;

class CheckOutController extends Controller
{
    //
    // public function index(request $request){
    //     return view('checkout.login_checkout');
    // }
    public function login_checkout(Request $request)  {
        $meta_title = "Đăng nhập hoặc đăng ký tài khoản";
        $meta_desc = "Đăng nhập hoặc đăng ký tài khoản của shop";
        $meta_keywords = "đăng nhập xwatch247, xwatch247 login";
        $meta_canonical = $request->url();
        $image_og = "";

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $branch_product = DB::table('tbl_branch_product')->where('branch_status','1')->orderby('branch_id','desc')->get();
        return view('checkout.login_checkout')->with('category_product',$cate_product)->with('branch_product',$branch_product)
        ->with('meta_title',$meta_title)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_canonical',$meta_canonical)
        ->with('image_og',$image_og);
        
    }

    public function checkout(Request $request) {
        $meta_title = "Thông tin giao hàng";
        $meta_desc = "Trang nhập thông tin giao hàng của bạn";
        $meta_keywords = "giao hàng xwatch247, xwatch247 checkout";
        $meta_canonical = $request->url();
        $image_og = "";
        $city = City::orderBy('matp')->get();
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $branch_product = DB::table('tbl_branch_product')->where('branch_status','1')->orderby('branch_id','desc')->get();
        return view('checkout.view_checkout')->with('category_product',$cate_product)->with('branch_product',$branch_product)
        ->with('meta_title',$meta_title)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_canonical',$meta_canonical)
        ->with('image_og',$image_og)->with('cityData',$city);
    }

    public function login_customer(Request $request) {
        $email = $request->email_account;
        $password = md5($request->password_account);

        $result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
      
        
        if($result) {
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_name',$result->customer_name);
            return Redirect::to('/checkout');
        } else {
            Session::put('message','Mật khẩu hoặc tài khoản không đúng, vui lòng nhập lại!');
            return Redirect::to('/login-checkout');

        }

    }

    public function add_customer(Request $request) {
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_password'] = md5($request->customer_password);

        $validated = $request->validate([
            'customer_name' => 'required|min:5',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|numeric|min:9',
            'customer_password' => 'required|min:6',
            'g-recaptcha-response'=>new Captcha(),
        ]);

        $customer_id = DB::table('tbl_customers')->insertGetId($data);
        $customer_name = $request->customer_name;

        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$customer_name);
        
        return Redirect::to('/checkout');
    }
    
}
