{{-- @extends('layout.frontend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="#">Sub-category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @include('layout.left')
            <div class="col-sm-9">
                <div class="row">
                    {{-- <c:forEach var="o" items="${ListP}" > --}}
                    {{-- @forelse ($product as $item) --}}

                        {{-- <form action="GET">
                            <div class="productinfo text-center">
                                {{ csrf_field() }}
                                <input type="hidden" class="product_id_{{$item->mathietbi}}" value="{{$item->mathietbi}}">
                                <input type="hidden" class="product_name_{{$item->mathietbi}}" value="{{$item->tenthietbi}}">
                                <input type="hidden" class="product_image_{{$item->mathietbi}}" value="{{$item->Hinhanh}}">
                                <input type="hidden" class="product_price_{{$item->mathietbi}}" value="{{$item->dongiathue}}">
                                <input type="hidden" class="product_qty_{{$item->mathietbi}}" value="1">
        
                                <a href="{{URL::to('chi-tiet-san-pham/'.$item->mathietbi)}}">
                                    <img src="{{URL::to('storage/'.$item->Hinhanh)}}" alt="" />
                                    <h2>{{number_format($item->dongiathue)." VND"}}</h2>
                                    <p>{{$item->tenthietbi}}</p>
                                </a>
                                <button  type="button" class="btn btn-default add-to-cart" data-id_product="{{$item->mathietbi}}"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button>
                            </div>
        
                        </form> --}}
{{-- 
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">  
                            <a href="{{URL::to('chi-tiet-san-pham/'.$item->product_id)}}">
                                <img src="{{URL::to('storage/'.$item->product_image)}}" alt="" />
                                <h2>{{number_format($item->product_price)." VND"}}</h2>
                                <p>{{$item->product_name}}</p>
                            </a> --}}
                            {{-- <img class="card-img-top" style="height: 185px;" src="{{ asset('storage/'. $item->product_image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title show_txt"><a href="" title="View Product">{{ $item->product_name }}</a></h4>
                                <p class="card-text show_txt">{{ $item->product_desc }}</p>
                                
                                <div class="row">

                                    <div class="col">
                                        </a>
                                        <h6 class="mb-3 price bloc_left_price " style="color: red">{{ $item->product_price }} tr</h6>
                                        <a href="" title="Add to cart" class="btn btn-success btn-block">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div> --}}
                        {{-- </div>
                    </div>
                    @empty
                        <h3>EMPTY</h3>
                    @endforelse  --}}
                    
                    
                    
                    
                    
                    {{-- </c:forEach> --}}
                {{-- </div>
            </div>

        </div>
    </div>
@endsection --}} 

@extends('layout.frontend')

@section('content')
@include('layout.left')
    <div class="container px-6 mx-auto">
        <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @forelse ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                <img src="{{ url('storage/'.$product->product_image) }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{ $product->product_name }}</h3>
                    <span class="mt-2 text-gray-500">${{ $product->product_price }}</span>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->product_id }}" name="id">
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
@endsection