@extends('customer_page.index')
@section("title","Trang thanh toán")
@section("main")
<section id="cart_items">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->
			<div class="register-req">
				<p>Vui lòng nhập thông tin giao hàng để tiến hành thanh toán</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Thông tin đơn hàng</p>
							<div class="form-one">

								<form action="{{ Route('save_inf') }}" method="POST" enctype="multipart/form-data">
									@csrf
									<input type="text" name="shipping_name" class="shipping_name" placeholder="Tên người nhận">
									<input type="text" name="shipping_email" class="shipping_email" placeholder="Địa chỉ email">
									<input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại">
								
									<div id="citySelectorContainer">
										<select name="shipping_address1" id="citySelector" onchange="toggleCustomCityInput(this)">
											@foreach ($customerInf as $item)
												<option value="{{ $item->name_city }}">{{ $item->name_city }}</option>
												<!-- Add other options here, you can loop through a list of cities or provide a default set -->
											@endforeach
											<option value="other">Other</option>
										</select>
								
										<!-- Input for the custom city (initially hidden) -->
										<input type="text" name="shipping_address" id="customCity" class="shipping_address" placeholder="Địa chỉ nhận hàng *" style="display:none;">
									</div>
									{{-- <input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ nhận hàng *" > --}}
									<textarea name="shipping_note" class="shipping_note" placeholder="Ghi chú đơn hàng của bạn" rows="5"></textarea>
									
									<label for="exampleInputFile">Chọn phương thức thanh toán</label>
									<select class="form-control input-sm m-bot15 payment_select" name="payment_select" id="payment_select">
										<option value="0">Tiền mặt</option>
										<option value="1">Chuyển khoản</option>
									</select>
								
									<button class="px-4 py-2 text-white bg-blue-800 rounded">Xác nhận</button>
								</form>
								
								<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
								<script>
									function toggleCustomCityInput(select) {
										var customCityInput = $('#customCity');
								
										if (select.value === 'other') {
											// If 'Other' is selected, show the custom city input
											customCityInput.show();
										} else {
											// If another option is selected, hide the custom city input
											customCityInput.hide();
										}
									}
								</script>

								
							</div>
							
						</div>
					</div>			
				</div>
			</div>
			<div class="table-responsive cart_info">
			<?php
				$totalcartPrice = 0;
			?>
			

			@if(session()->has('message'))
			<div class="alert alert-danger">
				{{ session()->get('message') }}
			</div>
			@elseif(session()->has('error'))
				{{ session()->get('error') }}
			@endif
			
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sản phẩm</td>
							<td class="price">Giá sản phẩm</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
					<form action="{{ route('cart.update') }}" method="POST">
						<tbody>
						
						@if(Session::get('cart'))
							@foreach(session('cart') as $productId => $item)
							
							<tr>
								<td class="cart_product">
									<a href=""><img src="{{URL::to('upload/'.$item['image'])}}" alt="" width="50" height="50"></a>
								</td>
								<td class="cart_description">
									<h4><a href="{{URL::to('/chi-tiet-san-pham/'.$item['id'])}}">{{$item['name']}}</a></h4>
									<!-- <p>Mã: {{$item['id']}}</p> -->
								</td>
								<td class="cart_price">
									<p>{{number_format($item['price'],0,',','.')}}đ</p>
								</td>
								<form action="{{ route('cart.update') }}" method="POST">
									<td class="cart_quantity">
										
										{{ csrf_field() }}
										<div class="cart_quantity_button">
											<input class="cart_quantity_input" type="number" min="1" name="quantity_change[{{$item['session_id']}}]" value="{{$item['quantity']}}" size="2">
										</div>
					
									</td>
								</form>
								<td class="cart_total">
									<p class="cart_total_price">
									@php
									$totalPrice = $item['price'] * $item['quantity'];
									echo number_format($totalPrice,0,',','.');
									$totalcartPrice += $totalPrice;
									@endphp</p>
								</td>
								
							
							</tr>
							<tr>
								<td colspan="5">
									<form action="{{ route('cart.list') }}" method="POST">
										<input type="submit" value="Cập nhật giỏ hàng" class="submitQty check_out">
										<a href="{{ route('cart.list') }}" class="submitQty check_out">Chỉnh sửa giỏ hàng</a>
									</form>
									
									
		
									<div class="pull-right"><ul>
										<li>Tổng tiền sản phẩm: <span>{{number_format($totalcartPrice,0,',','.')}} đ</span></li>
												
										
										
									</ul></div>
								</td>
							</tr>
							@endforeach
							
						
							
						</tbody>
					</form>
					<tr>
						<td>
							
						</td>
					</tr>
					@else
						<tr><td colspan="5"><center><p>Không có sản phẩm nào</p></center></td></tr>
						@endif
				</table>
				
				
			</div>
			
	</section> <!--/#cart_items-->
@endsection