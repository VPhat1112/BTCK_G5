<?php

namespace App\Http\Controllers;

use App\Services\provincesApiService;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Rules\Captcha;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cart;
use app\Http\Controllers\CartController;

class CheckOutController extends Controller
{
    //
    // public function index(request $request){
    //     return view('checkout.login_checkout');
    // }

    
    


    public function checkout(Request $request) {
        $customer=Session::get('customer');
        $cart = session()->get('cart', []);
        $meta_title = "Thông tin giao hàng";
        $meta_desc = "Trang nhập thông tin giao hàng của bạn";
        $meta_keywords = "giao hàng xwatch247, xwatch247 checkout";
        $meta_canonical = $request->url();
        
        // $city = City::orderBy('matp')->get();
        $customerInf =DB::table('tbl_tinhthanhpho')->where('customer_id','=', $customer->id)->get();

        
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        // $branch_product = DB::table('tbl_branch_product')->where('branch_status','1')->orderby('branch_id','desc')->get();
        $productCount = $this->getProductCount();

        // dd($cities);
        return view('checkout.view_checkout', [
            'category_product' => $cate_product,
            // 'branch_product' => $branch_product,
            'meta_title' => $meta_title,
            'meta_desc' => $meta_desc,
            'meta_keywords' => $meta_keywords,
            'meta_canonical' => $meta_canonical,
            'customerInf'=>$customerInf,
            'cart' => $cart,
            'productCount' => $productCount,
        ]);
    }

    

    

    public function save_checkout_customer(Request $request) {
        $cart = session()->get('cart', []);
        $dataDefault = Session::get('customer');
        $data_shipipng = array();
        if($request->shipping_address==null){
            $data_shipipng['shipping_name'] = $request->shipping_name;
            $data_shipipng['shipping_email'] = $dataDefault->email;

            $data_shipipng['shipping_phone'] = $request->shipping_phone;
            $data_shipipng['shipping_address'] = $request->shipping_address1;
            $data_shipipng['shipping_note'] = $request->shipping_note;

        }else{
            $data_shipipng['shipping_name'] = $request->shipping_name;
            $data_shipipng['shipping_email'] = $dataDefault->email;

            $data_shipipng['shipping_phone'] = $request->shipping_phone;
            $data_shipipng['shipping_address'] = $request->shipping_address;
            $data_shipipng['shipping_note'] = $request->shipping_note;
        }
        


        Session::put('shipping', $data_shipipng);

        // dd($data_shipipng);
        return view('checkout.payment')->with('carts',$cart);
    }
    public function save_order(Request $request) {
        //insert shipping method
        $shipping_data=Session::get('shipping');
        $customer_id=Session::get('customer');
        // Check if shipping_id already exists in the database
        $existingShipping = DB::table('tbl_shipping')
        ->where([
            ['shipping_name', '=', $shipping_data['shipping_name']],
            ['shipping_email', '=', $shipping_data['shipping_email']],
        ])
        ->first();

        // if ($existingShipping) {
        //     // Shipping ID already exists, retrieve the existing shipping_id
        //     $shipping_id = $existingShipping->shipping_id;
        // } else {
            // Shipping ID doesn't exist, insert new data and get the new shipping_id
            // dd($shipping_data);
            $shipping_id = DB::table('tbl_shipping')->insertGetId($shipping_data);
        // }
        // dd($shipping_id);
        
        // insert payment method
        $payment_id = Session::get('payment_id');

        if (!$payment_id) {
            // Payment data doesn't exist, insert payment method
            $data = array();
            $data['payment_method'] = $request->payment_value;
            $data['payment_status'] = "Đang chờ xử lý";
            
            $payment_id = DB::table('tbl_payment')->insertGetId($data);

            // Save the payment_id in the session
            Session::put('payment_id', $payment_id);
        }
    
        // Check if order_id already exists in the session
        $existingOrder = DB::table('tbl_order')
            ->where([
                ['customer_id', '=', $customer_id->id],
                ['shipping_id', '=', $shipping_id],
            ])
            ->first();
    
        if ($existingOrder) {
            // Order ID already exists, handle this case accordingly
            // You may want to redirect the user or display an error message
            $order_id = $existingOrder->order_id;
        } else {
            $data_order = array();
            $data_order['customer_id'] = $customer_id->id;
            $data_order['shipping_id'] = $shipping_id;
            $data_order['payment_id'] = $payment_id;
            $data_order['order_total'] = $this->calculateSubtotal();
            $data_order['order_status'] = 'Đang chờ xử lý';
            $data_order['created_at'] = now();
            $data_order['updated_at'] = now();
            
            $order_id = DB::table('tbl_order')->insertGetId($data_order);
        }
        
        $content = Session::get('cart');
        if (session()->has('cart')) {
            foreach ($content as $v_content) {
                $existingOrderDetail = DB::table('tbl_order_details')
                ->where([
                    ['order_id', '=', $order_id],
                    ['product_id', '=', $v_content['id']],
                ])
                ->first();
                // Initialize $data_detail_order inside the loop
                if ($existingOrderDetail) {
                
                } else {
                    $data_detail_order = array();
                    $data_detail_order['order_id'] = $order_id;
                    $data_detail_order['product_id'] = $v_content['id']; // Access 'id' key
                    $data_detail_order['product_name'] = $v_content['name']; // Access 'name' key
                    $data_detail_order['product_price'] = $v_content['price']; // Access 'price' key
                    $data_detail_order['product_sales_quanlity'] = $v_content['quantity'];
                    // $data_detail_order['product_image'] = $v_content['image'];
                    DB::table('tbl_order_details')->insert($data_detail_order);
                }
            }
        } else {
        }
        
        // dd($content);
        
        
        
    
        session()->forget('cart');
            // Additional handling for payment method 2
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderBy('category_id', 'desc')->get();
        // $branch_product = DB::table('tbl_branch_product')->where('branch_status', '1')->orderBy('branch_id', 'desc')->get();

        $meta_title = "Đặt hàng thành công";
        $meta_desc = "";
        $meta_keywords = "";
        $meta_canonical = $request->url();
        $image_og = "";

        return view('checkout.handcash')->with('category_product', $cate_product)
        // ->with('branch_product', $branch_product)
        ->with('meta_title', $meta_title)
        ->with('meta_desc', $meta_desc)
        ->with('meta_keywords', $meta_keywords)
        ->with('meta_canonical', $meta_canonical)
        ->with('image_og', $image_og);
    }
    
      public function calculateSubtotal()
        {
            $cart = session()->get('cart', []);

            $subtotal = 0;

            foreach ($cart as $item) {
                $subtotal += $item['quantity'] * $item['price'];
            }

            return $subtotal;
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
