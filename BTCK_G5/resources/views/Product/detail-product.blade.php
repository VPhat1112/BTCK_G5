@extends('customer_page.index')


@section("main")
    <div class="detail padding-default"> 
        @foreach($product_by_id as $key => $productDetail)
            <div class="row">
                <div class="col-5">
                    <img src="{{URL::to('upload/'.$productDetail->product_image)}}" height="300px" width="300px" alt="">
                </div>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $productDetail->product_id }}" name="productID">
                    <input type="hidden" value="{{ $productDetail->product_name }}" name="name">
                    <input type="hidden" value="{{ $productDetail->product_price }}" name="price">
                    <input type="hidden" value="{{ $productDetail->product_image }}"  name="image">
                    {{-- <input type="hidden" value="1" name="quantity"> --}}
                    <div class="col-10">
                        <p class="title-product-detail">{{$productDetail->product_name}}</p>
                        <br/>
                        <p class="price-product-detail">{{ $productDetail->product_price }}₫</p>
                        <br/>
                        <div class="row">
                            <div class="col-4 flex-col-center">
                                <p class="count-title">Số lượng</p>
                            </div>
                            <div class="col-5 flex-col-center">
                                <input class="input-count" value="1" name="quantity">
                            </div>
                            <div class="col-4 flex-col-center">
                                <button class="btn-add"><span class="text-add">Mua ngay</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="desc">
                <div class="row desc-title">
                    <p class="desc-title-desc">{{ $productDetail->product_content }}</p>
                </div>
                {{-- <div class="row desc-in">
                    <p>Phiên vip pro </p>
                </div> --}}
            </div>
        @endforeach
    </div>			
@endsection