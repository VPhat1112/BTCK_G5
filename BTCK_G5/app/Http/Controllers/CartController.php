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
        $cart = session()->get('cart', []); // Retrieve the current cart or initialize an empty array if it doesn't exist
    
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $productId = $request->productID;
    
        $product = DB::table('tbl_product')->where('product_id', $productId)->first();
    
        if (isset($cart[$productId])) {
            // Product already exists in the cart, update the quantity
            $cart[$productId]['quantity'] += $request->quantity;
        } else {
            // Product does not exist in the cart, add it to the cart
            $cart[$productId] = [
                'id' => $product->product_id,
                'session_id' => $session_id,
                'name' => $product->product_name,
                'price' => $product->product_price,
                'image' => $product->product_image,
                'quantity' => $request->quantity,
            ];
        }
    
        $productCount = $this->getProductCount();
    
        session(['cart' => $cart]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
    
        return redirect()->route('cart.list')
            ->with(['subtotal' => $this->calculateSubtotal()])
            ->with(['productCount' => $productCount]);
    }

    

    //
    public function cartList(Request $request) {
        $cart = session()->get('cart', []);

        $meta_title = "Thông tin giỏ hàng";
        $meta_desc = "Trang Thông tin giỏ hàng của bạn";
        $meta_keywords = "giỏ hàng xwatch247, xwatch247 cart";
        $meta_canonical = $request->url();
        $image_og = "";
        $productCount = $this->getProductCount();
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $branch_product = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();
        return view('Cart.view_cart')->with(session(['cart' => $cart]))->with('category_product',$cate_product)->with('branch_product',$branch_product)
        ->with('meta_title',$meta_title)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_canonical',$meta_canonical)
        ->with('image_og',$image_og)->with(['subtotal' => $this->calculateSubtotal()])->with(['productCount' => $productCount]);
    }

    public function updateCart(Request $request) {
        // Get the current cart from the session
        $cart = session()->get('cart', []);

        // Update the quantity of the item in the cart based on the request
        $itemIdToUpdate = $request->id;
        $newQuantity = $request->quantity;

        if (isset($cart[$itemIdToUpdate])) {
            $cart[$itemIdToUpdate]['quantity'] = $newQuantity;
        }
        $productCount = $this->getProductCount();
        // Save the updated cart back to the session
        session(['cart' => $cart]);

        // Flash a success message to the session
        session()->flash('success', 'Item Cart is Updated Successfully!');

        // Redirect to the cart list route
        return redirect()->route('cart.list')
        ->with(['subtotal' => $this->calculateSubtotal()])->with(['productCount' => $productCount]);
    }
    public function removeCart(Request $request)
    {
        // Get the current cart from the session
        $cart = session()->get('cart', []);

        // Get the item ID to remove from the request
        $itemIdToRemove = $request->id;

        // Check if the item exists in the cart
        if (isset($cart[$itemIdToRemove])) {
            // Remove the item from the cart
            unset($cart[$itemIdToRemove]);

            // Save the updated cart back to the session
            session(['cart' => $cart]);

            // Flash a success message to the session
            session()->flash('success', 'Item Cart is Removed Successfully!');
        } else {
            // Flash an error message if the item is not found in the cart
            session()->flash('error', 'Item not found in the cart!');
        }
        $productCount = $this->getProductCount();
        // Redirect to the cart list route
        return redirect()->route('cart.list')->with(['subtotal' => $this->calculateSubtotal()])->with(['productCount' => $productCount]);
    }

    

    public function clearAllCart()
    {
        // Clear all carts by removing the 'cart' key from the session
        session()->forget('cart');

        // Flash a success message to the session
        session()->flash('success', 'All Carts are Cleared Successfully!');
        $productCount = $this->getProductCount();
        // Redirect to the cart list route or any other route you prefer
        return redirect()->route('cart.list')->with(['subtotal' => $this->calculateSubtotal()])->with(['productCount' => $productCount]);
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
