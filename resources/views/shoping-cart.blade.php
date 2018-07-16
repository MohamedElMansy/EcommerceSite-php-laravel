@extends('master')
@section('title')
	Shoping cart
@endsection

@section('content')
	<!-- breadcrumb -->
	{{--<div class="container">--}}
		{{--<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">--}}
			{{--<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">--}}
				{{--Home--}}
				{{--<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>--}}
			{{--</a>--}}

			{{--<span class="stext-109 cl4">--}}
					{{--Shoping Cart--}}
				{{--</span>--}}
		{{--</div>--}}
	{{--</div>--}}


	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		@if(session()->has('success_message'))
			<div class="alert alert-success">
				{{session()->get('success_message')}}
			</div>

		@endif
		@if( Cart::count() == 0)
			<h4 class="p-5 m-all-5">No Items in Cart! </h4>
		@endif
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart p-all-30">
								<tr class="table_head">
									<th >Product</th>
									<th>name</th>
									<th >Price</th>
									<th >color</th>
									<th >size</th>
									<th >Quantity</th>
									<th>Total</th>
									<th >Delete</th>
								</tr>

								@foreach(Cart::content() as $item)
								<tr class="table_row">
									<td >
										<img src="images/{{$item->model->main_pic}}.jpg" width="70" hight="70" alt="IMG">
									</td>

									<td > {{$item->model->title}}</td>
									<td id="price">{{$item->model->price}}</td>

									<td >
										<select >
											<option></option>
											@foreach($item->model->colour as $productcolour)
												<option>{{$productcolour->name}}</option>
											@endforeach


										</select>
									</td>
									<td >
										<select >
											<option></option>
											@foreach($item->model->size as $productsize)
												<option>{{($productsize->title)}}</option>
											@endforeach
										</select>
									</td>

									<td>
										<select id="quantity">
												@for($i = 1; $i < $item->model->quantity ;$i++)
												<option>{{$i}}</option>

											@endfor



										</select>
									</td>

									<td id="total" ></td>
									<td >
										<form method="post" action="{{route('cart.destroy',$item->rowId)}}">
											{{csrf_field()}}
											{{method_field('DELETE')}}
											<button type="submit" class="alert alert-danger">Remove</button>


										</form>
									</td>
								</tr>
								@endforeach

							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">

							<form  method="post" action="{{route('cart.empty')}}" >
								{{csrf_field()}}
							<button type="submit" class=" flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-50 trans-04 pointer m-tb-10">
								Empty Cart
							</button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
									<span class="stext-110 cl2">
										Subtotal:
									</span>
							</div>

							<div class="size-209">
									<span class="mtext-110 cl2">
										{{Cart::subtotal()}}
									</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
									<span class="stext-110 cl2">
										Shipping:
									</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									The shipping methods available and Free. Please contact us if you need any help.
								</p>

								<div class="p-t-15">
										<div class="stext-112 cl8">
										 Tax 10 %
										</div>

										<div class="mtext-110 cl2">
											{{Cart::tax()}}
										</div>

								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
									<span class="mtext-101 cl2">
										Total:
									</span>
							</div>

							<div class="size-209 p-t-1">
									<span class="mtext-110 cl2">
										{{Cart::total()}}

									</span>
							</div>
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<script>--}}
	{{--$(document).on('change','#quantity',function (){--}}
		{{--var price= $('#price').val();--}}
		{{--var quantity = $('#quantity').val();--}}


			{{--console.log( price);--}}
			{{--$('#price').html(quantity * price);--}}

	{{--})--}}
{{--</script>--}}

@endsection