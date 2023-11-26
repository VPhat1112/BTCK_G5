<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\Collection;
use App\Models\Order;
use Exception;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    protected $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
    public function index(Request $request){
        try{
            $order = Order::all();
       
            if($order){
                return response()->json([
                    'data' => $order,
                    'state' => 200
                ]);
            }
        }
        catch(Exception $e){
            return response()->json([
                'message' => 'Không tìm thấy đơn hàng nào'
            ]);
        }
    }
    public function store(Request $request)
    {
        $data=$request->all();
        $order = $this->order->create($data);
        // dd($order);
            return response()->json([
                    'data' => $order,
                    'state' => 200
                ]);
            // return response()->json([
            //     'message' => 'Không the tao'
            // ]);
    }
}
