@extends('master')
@section('title')
	product detail
@endsection

@section('content')


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 m-all-50">
			<a href="{{route('home')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="{{route('shop')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Shop
			</a>

		</div>
	</div>


	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				@foreach($products as $product)

				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>


							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="{{URL::to('images/'.$product->main_pic.'.jpg')}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{URL::to('images/'.$product->main_pic.'.jpg')}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{URL::to('images/'.$product->main_pic.'.jpg')}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="{{URL::to('images/'.$product->sec_pic.'.jpg')}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{URL::to('images/'.$product->sec_pic.'.jpg')}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{URL::to('images/'.$product->sec_pic.'.jpg')}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="{{URL::to('images/'.$product->third_pic.'.jpg')}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{URL::to('images/'.$product->third_pic.'.jpg')}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{URL::to('images/'.$product->third_pic.'.jpg')}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				@endforeach
					@foreach($products as $product)
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{$product->title}}
						</h4>

						<span class="mtext-106 cl2">
								{{$product->showedprice}}
							</span>

						<!--  -->
						<div class="p-t-33">
							<div class="flex-w flex-l-m p-b-10">
								<div class="-bold">available size :  </div>
								<div>
									    <ul>
										@foreach($product->size as $productsize)
											<li>{{($productsize->title)}}</li>
											@endforeach
										</ul>

								</div>
							</div>
							<div class="flex-w flex-l-m p-b-10">
								<div>
									available colors :
								</div>
									<div class="-align-left">
										<ul >

											@foreach($product->colour as $productcolour)
											<li>{{$productcolour->name}}</li>
												@endforeach
										</ul>
									</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<form action="{{route('cart.store')}}" method="POST" class="p-t-50">
										{{csrf_field()}}
										<input name="id" type="hidden" value="{{$product->id}}">
										<input name="title" type="hidden" value="{{$product->title}}">
										<input name="price" type="hidden" value="{{$product->price}}">
										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" type="submit">
											Add to cart
										</button>

									</form>
								</div>
							</div>
						</div>


				</div>
			</div>
            @endforeach

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="" role="tab">Description</a>
						</li>

					</ul>

					<!-- Tab panes -->
					@foreach($products as $product)
					<div class="center-block ">
						<!-- - -->
						<div class=" tab-panel fade show " id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									{{$product->description}}
								</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>

		</div>

	</section>


	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					@foreach($ranproducts as $ranproduct)
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="{{URL::to('images/'.$ranproduct->main_pic.'.jpg')}}" alt="IMG-PRODUCT">

								<a href="{{'/product/'.$ranproduct->slug}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
									View
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="{{'/product/'.$ranproduct->slug}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										{{$ranproduct->title}}
									</a>

									<span class="stext-105 cl3">
											{{$ranproduct->showedprice}}
										</span>
								</div>


							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection
