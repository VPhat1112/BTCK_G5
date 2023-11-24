@extends('customer_page.index')
@section('main')
    <div class="col-sm-3">
        <div class="card bg-light mb-3">
            <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> TRANG TÀI KHOẢN</div>
            <div class="card-header bg-primary text-white text"><i class="fa fa-list"></i> xin chào {{ session('customer_name') }} </div>
            <ul class="list-group category_block">
                <li class="list-group-item text-black"><a href="{{ Route('MyAccount') }}">Thông tin cá nhân</a></li>
                <li class="list-group-item text-black"><a href="{{ Route('MyOrder') }}"> Đơn hàng cá nhân</a></li>
            </ul>
        </div>
    </div>
    <div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Mã Hóa đơn</th>
                    <th>Ngày tạo đơn</th>
                    <th>Địa chỉ giao hàng</th>
                    <th>Số Điện thoại</th>
                    <th>Ghi Chú</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($myorder as $item)
                {{-- <a href="{{URL::to('DetailOrder/'.$item->order_id)}}"> --}}
                    <tr>
                        
                        <td><a href="{{URL::to('DetailOrder/'.$item->order_id)}}">{{ $item->order_id }}</a></td>
                            <td>{{ $item->Created_at }}</td>
                            <td>{{ $item->shipping_address }}</td>  
                            <td>{{ $item->shipping_phone }}</td>
                            <td>{{ $item->shipping_note }}</td>
                            <td>{{ $item->order_status }}</td>
                       
                    </tr>
                {{-- </a> --}}
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection