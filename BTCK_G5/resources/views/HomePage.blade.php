@extends('customer_page.index')

@section('main')
{{-- @include('layout.left') --}}
    <div class="row banner">
        <img style="width: 100%;" src="{{ URL::to('upload/banner.png') }}" alt="">
    </div>
    <div class="row padding-default">
        <div class="col-4" style="padding-left: 0px;">
            <div class="container-new">

                <div class="box-new">
                    <span class="title-box">Hàng mới</span>
                </div>
                @foreach ( $last_product as  $ls)
                    <div class="product-new">
                        <img style="width: 100%;" src="{{URL::to('upload/'.$ls->product_image)}}" alt="">
                        <a class="name-product-new" href="">{{ $ls->product_name }}</a>
                        <p class="price-product-new">{{ $ls->product_price }}₫</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-8" style="padding-left: 0px;">
            <div class="box-new">
                <span class="title-box">Nổi bật</span>
            </div>
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-4">
                        <div class="product-new">
                            <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
                                <img style="width: 100%;" src="{{URL::to('upload/'.$product->product_image)}}" alt="">
                                <a class="name-product-new" href="{{ URL::to('chi-tiet-san-pham/'.$product->product_id) }}">{{ $product->product_name }}</a>
                                <p class="price-product-new">{{ $product->product_price }}₫</p>
                            </a>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->product_id }}" name="productID">
                                <input type="hidden" value="{{ $product->product_name }}" name="name">
                                <input type="hidden" value="{{ $product->product_price }}" name="price">
                                <input type="hidden" value="{{ $product->product_image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                            </form>
                        </div>
                </div>
                @empty
                <h3>EMPTY</h3>
            @endforelse 
            </div>
           
        </div>
    </div>
    
@endsection
