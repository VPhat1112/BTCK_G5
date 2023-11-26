<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Session;
use App\Models\User;
class LoginController extends Controller
{
    //
    public function register() {

        return view('customer_page.register');
    }

    public function logout() {
        
        Auth::logout();
        session()->forget('customer');
        // return redirect()->back();
        return redirect()->route('login');

        
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
            $google_user = Socialite::driver('google')->user();
            // dd($google_user);
            // Check if the user with the Google ID exists
            $user = User::where('email', $google_user->getEmail())->first();
    
            // Other data retrieval
    
            // If the user doesn't exist, create a new user
            if (!$user) {
                $data = [
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ];
    
                $new_user = User::create($data);
    
                Auth::login($new_user);
            } else {
                // If the user exists, log in the existing user
                Auth::login($user);
            }
    
            // Retrieve user information from the database
            $result = DB::table('users')->where('email', '=', $google_user->getEmail())->first();
    
            // Set session data
            Session::put('customer', $result);

            $productCount = $this->getProductCount();
            $products = DB::table('tbl_product')->where('product_status', '>=', '1')->orderBy('product_id', 'desc')->limit(9)->get();
            $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderBy('category_id', 'desc')->get();
            $branch_product = DB::table('tbl_brand_product')->where('brand_status', '1')->orderBy('brand_id', 'desc')->get();
            $last_product = DB::table('tbl_product')->orderBy('created_at', 'desc')->take(1)->get();
    
            // Redirect to the dashboard with additional data
            return redirect('/')
            ->with('products', $products)
            ->with('cate_product', $cate_product)
            ->with('branch_product', $branch_product)
            ->with('last_product', $last_product)
            ->with('productCount', $productCount);
        
    }
    
    public function login(Request $request)  {
        return view('customer_page.login');
        
    }
    
    public function postLogin(Request $request) {
        $email = $request->email;
        $password = $request->password;

        $result = DB::table('users')
        ->where('email',$email)
        ->where('password',$password)
        ->first();

        if($result) {
            session(['customer' => $result]);
            return redirect()->route('Home');
        }
        return redirect()->back()->with('error', 'Thong tin dang nhap sai!');
    }
    

    public function postRegister(Request $request) {
        $request->merge(['password' => $request->password]);
        
        try {
            User::create($request->all());
            return redirect()->route('login');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Thong tin dang nhap sai!');
        }
        
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
