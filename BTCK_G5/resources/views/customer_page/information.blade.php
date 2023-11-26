@extends('customer_page.index')
@section('main')
    <div class="col-sm-3">
        <div class="card bg-light mb-3">
            <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> TRANG TÀI KHOẢN</div>
            <div class="card-header bg-primary text-white text"><i class="fa fa-list"></i> xin chào {{ session('customer')->name }} </div>
            <ul class="list-group category_block">
                <li class="list-group-item text-black"><a href="{{ Route('MyAccount') }}">Thông tin cá nhân</a></li>
                <li class="list-group-item text-black"><a href="{{ Route('MyOrder') }}"> Đơn hàng cá nhân</a></li>
            </ul>
        </div>
    </div>
    <div>
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert"></button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
        @endif
        <button id="toggleButton" onclick="toggleInputs()">Cập nhật thông tin</button>
        <form action="{{ URL::to('self_Inf_save/'.$customerInf->email ) }}" enctype="multipart/form-data" method="POST">
            @csrf <!-- Add this to include the CSRF token -->
        
            <h5>
                <input type="text" class="myInput" name="CustomerName" placeholder="Customer Name" value="{{ $customerInf->name }}">
                <input type="text" class="" name="CustomerEmail" placeholder="Customer Email" value="{{ $customerInf->email }}" disabled>
                <input type="text" class="myInput" name="CustomerPhone" placeholder="Customer Phone" value="{{ $customerInf->phone }}">
                {{-- <input type="text" class="myInput" name="CustomerAddress" placeholder="Customer Address" value="{{ $customerInf->Address }}"> --}}
            </h5>
        
            <!-- Hidden fields to carry the original values -->
            <input type="hidden" name="originalEmail" value="{{ $customerInf->email }}">
            <input type="hidden" name="originalName" value="{{ $customerInf->name }}">
            <input type="hidden" name="originalPhone" value="{{ $customerInf->phone }}">
            {{-- <input type="hidden" name="originalAddress" value="{{ $customerInf->Address }}"> --}}
        
            <button type="submit" class="px-4 py-2 text-white bg-blue-800 rounded">Xác nhận</button>
        </form>
        <script>
            function toggleInputs() {
                // Lấy tất cả các thẻ input có class là "myInput"
                var inputList = document.getElementsByClassName("myInput");

                // Lặp qua danh sách input và vô hiệu hóa/kích hoạt lại
                for (var i = 0; i < inputList.length; i++) {
                    var currentInput = inputList[i];

                    // Kiểm tra trạng thái của input
                    if (currentInput.disabled) {
                        // Nếu đã vô hiệu hóa, kích hoạt lại
                        currentInput.disabled = false;
                        
                    } else {
                        // Nếu chưa vô hiệu hóa, vô hiệu hóa
                        currentInput.disabled = true;
                        toggleButton.innerHTML = "cập nhật";
                    }
                }
            }
        </script>
        
    </div>
@endsection