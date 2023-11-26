<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    protected $orderDetail;
    public function __construct(OrderDetail $order)
    {
        $this->orderDetail = $order;
    }
    //
    public function show(string $order_id)
    { try {
        $orderDetail = $this->orderDetail->where('order_id', $order_id)->firstOrFail();
        return response()->json([
            'data' => $orderDetail
        ]);
    } catch (\Exception $e) {
        // Xử lý ngoại lệ, ví dụ: order detail không được tìm thấy
        return response()->json([
            'message' => 'Không tìm thấy danh mục',
        ]);
    }
    }
}
