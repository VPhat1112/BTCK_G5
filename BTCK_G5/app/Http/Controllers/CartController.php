<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; // dùng để thao tác với csdl.
use Session; // dùng để  lưu tạm các message sau khi thực hiện một công việc gì đó.
use App\Http\Requests; // dùng để lấy dữ liệu từ form
use Illuminate\Support\Facades\Redirect; // dùng để chuyển hướng
use Cart;
use App\Models\Coupon;
session_start();
class CartController extends Controller
{
    public function addToCart(Request $request) {
        // Session::flush();
        $productId = $request->productID;
        $quanlity = $request->quanlity;
        $product = DB::table('tbl_product')->where('product_id',$productId)->first();
        // $data['id'] = $productId;
        // $data['qty'] = $quanlity;
        // $data['name'] = $product->product_name;
        // $data['price'] = $product->product_price;
        // $data['weight'] = $product->product_price;//fake
        // $data['options']['image'] = $product->product_image;
        // Cart::add($data);

        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);

        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
    //
    public function cartList(Request $request) {

        $cart_Items=Cart::getContent();
        $meta_title = "Thông tin giỏ hàng";
        $meta_desc = "Trang Thông tin giỏ hàng của bạn";
        $meta_keywords = "giỏ hàng xwatch247, xwatch247 cart";
        $meta_canonical = $request->url();
        $image_og = "";
        
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $branch_product = DB::table('tbl_branch_product')->where('branch_status','1')->orderby('branch_id','desc')->get();
        return view('Cart.view_cart')->with('cart_Items',$cart_Items)->with('category_product',$cate_product)->with('branch_product',$branch_product)
        ->with('meta_title',$meta_title)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_canonical',$meta_canonical)
        ->with('image_og',$image_og);
    }

    public function updateCart(Request $request) {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }
    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    
}
