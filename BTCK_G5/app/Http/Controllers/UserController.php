<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
class UserController extends Controller
{
    //
    public function DetailsCustomer(request $request){
        $customer=Session::get('customer');
        $customerInf=DB::table('tbl_customers')->where('customer_id','=',$customer->customer_id)->first();
        
        return view('customer_page.information',[
            'customerInf'=>$customerInf
        ]);
    }
    public function MyOrder(Request $request)
    {
        try {
            $customer = Session::get('customer');

            // Joining tbl_order and tbl_shipping tables
            $myorder = DB::table('tbl_order')
                ->join('tbl_shipping', 'tbl_shipping.shipping_id', '=', 'tbl_order.shipping_id')
                ->select('tbl_order.order_id as order_id',
                    'tbl_order.created_at as Created_at',
                    'tbl_shipping.shipping_address as shipping_address',
                    'tbl_shipping.shipping_phone as shipping_phone',
                    'tbl_shipping.shipping_note as shipping_note',
                    'tbl_order.order_status as order_status') // Add the columns you want to retrieve
                ->where('tbl_order.customer_id', $customer->customer_id)
                ->get();
            // $myorder=DB::table('tbl_order')->where('customer_id','=',$customer->customer_id)->get();

            
            Session::put('myorder',$myorder);
            // dd($myorder); // Uncomment for debugging

            return view('customer_page.Myorder')->with('myorder', $myorder);
        } catch (\Exception $e) {
            // Log the exception or handle it appropriately
            // Redirect with an error message
            return redirect()->back()->with('error', 'An error occurred while fetching orders.');
        }
    }
    public function save_Information_customer($customer_email,Request $request)
    {
        $customer_inf=Session::get('customer');
        try {
            // Validate the request data
            $request->validate([
                'CustomerName' => 'required',
                'CustomerPhone' => 'required',
                'CustomerAddress' => 'required',
            ]);

            // Find the customer by email
            $data=array();
            // Update the customer information
            $data['customer_name'] = $request->input('CustomerName');
            $data['customer_phone'] = $request->input('CustomerPhone');
            $data['Address'] = $request->input('CustomerAddress');
            
            $customer = DB::table('tbl_customers')->where('customer_email','=',$customer_email)->update($data);
            $customer_afterUpdate=DB::table('tbl_customers')->where('customer_email','=',$customer_email)->first();
            
            // Update the session data
            Session::put('customer',$customer_afterUpdate);

            // Redirect with success message
            session()->flash('success', 'Your Information is Updated Successfully!');
            // dd($customer_afterUpdate);
            return redirect()->to('/self_Inf');
        } catch (\Exception $e) {
            // Log the exception or handle it appropriately
            // Redirect with error message
            return redirect()->back()->with('error', 'Your Information is Updated Faile!');
        }
    }
    public function DetailsOrder($order_id){
        
        $DetailOrder=DB::table('tbl_order_details')->where('order_id','=',$order_id)->get();
        

        // Tính tổng số tiền
        $totalAmount = DB::table('tbl_order_details')->where('order_id', '=', $order_id)->sum('product_price');

        
        return view('customer_page.detailOrder',[
            'DetailOrder'=>$DetailOrder,
            'totalAmount'=>$totalAmount
        ]);
    }

}
