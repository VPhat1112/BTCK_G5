@extends('customer_page.index')
@section('main')
<body id="body">
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2> <b>Manage BILLS</b></h2>
                        <h2> <a style="color: white" href="home">Home</a></h2>
                    </div>
                    <!--                        <div class="col-sm-6">
                                                <a href="#addEmployeeModal"  class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>					
                                                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                            </div>-->
                </div>
            </div>
            <div class="modal-header">						
                <h4 class="modal-title">Thông tin chi tiết hợp đồng</h4>
                <button onclick="printPage()">Xuất hóa đơn</button>
            </div>
            <div id="data">
               <div >
                    <div>
                        <div >


                            <div class="modal-body">					
                                <div class="form-group">
                                    <label>Tên Khách hàng</label>
                                    <input name="name" type="text" class="form-control" value="{{ session('customer')->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label>SDT</label>
                                    <input name="image" type="text" class="form-control" value="{{ session('customer')->phone }}" required>
                                </div>
                                
                               
                                <div class="form-group">
                                    <label>Tổng tiền</label>
                                    <input name="Email" type="text" class="form-control" value="{{ $totalAmount }}" required>
                                </div>




                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="table-responsive">
                    <table class="table" border="2" >
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Sản Phẩm</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Đơn Giá</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Số Lượng</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Thành tiền</div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($DetailOrder as $item)
                                <tr>
                                    <th scope="row">
                                        <div class="p-2">
                                            <div class="m0l-3 d-inline-block align-middle">
                                                {{-- <img src="{{ URL::to('upload/'.$item->product_image) }}}" alt="" width="200" height="200"> --}}
                                                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block"></a></h5><span class="text-muted font-weight-normal font-italic">{{ $item->product_name }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="align-middle"><strong>{{ $item->product_price }}</strong></td>
                                    <td class="align-middle">
                                        <input class="input-qty" max="Số tối đa" min="0" type="text" name="Quantity" value="{{ $item->product_sales_quanlity }}"  disabled>
                                    </td>
                                    <td class="align-middle">{{ $item->product_price }}</td>



                                </tr> 
                        
                            @endforeach
                           
                               
                        </tbody>
                    </table>
                    </tbody>

                    <!--                <div class="clearfix">
                                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a href="#">Previous</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                        </ul>
                                    </div>-->
                </div>
            </div>
            
        </div>
    </div>
        <!-- Edit Modal HTML -->

        <script src="js/manager.js" type="text/javascript"></script>
        <script>

        </script>
        </body>
        <script type="text/javascript">
            function printPage(){
                var body= document.getElementById('body').innerHTML;
                var data= document.getElementById('data').innerHTML;
                
                document.getElementById('body').innerHTML=data;
                window.print();
                document.getElementById('body').innerHTML=body;
            }
        </script>
@endsection