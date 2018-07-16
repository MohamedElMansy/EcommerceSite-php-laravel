@extends('master')
@section('title')
	Blog Detail
@endsection

@section('content')

	<!-- breadcrumb -->
	<div class="container m-all-50 ">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="route('home')" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="route('blog')" class="stext-109 cl8 hov-cl1 trans-04">
				Blog

			</a>


		</div>
	</div>


	<!-- Content page -->
	<section class="bg0 p-t-52 m-all--90">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">

						<!--  -->

						@foreach($blogs as $blog)
						<div class="wrap-pic-w how-pos5-parent">
							<img src="{{URL::to('/images/'.$blog->pic.'.jpg')}}" alt="IMG-BLOG">

						</div>


						<div class="p-t-32">
								<span class="flex-w flex-m stext-111 cl2 p-b-19">
									<span>
										 Added on
										<span class="cl12 m-l-4 m-r-6">|</span>
									</span>

									<span>
										{{$blog->created_at}}
										<span class="cl12 m-l-4 m-r-6">|</span>
									</span>

									<span>
										{{$blog->categories}}
										<span class="cl12 m-l-4 m-r-6">|</span>
									</span>


								</span>

							<h4 class="ltext-109 cl2 p-b-28">
								{{$blog->title}}
							</h4>

							<p class="stext-117 cl6 p-b-26">
								{{$blog->description}}
							</p>

							<p class="stext-117 cl6 p-b-26">
								{{$blog->description}}
							</p>
						</div>
						@endforeach


						<!--  -->

					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">



						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								New Arrivals
							</h4>

							<ul>
                                @foreach($products as $product)
								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="{{URL::to('images/'.$product->sec_pic.'.jpg')}}" alt="PRODUCT">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                                            {{$product->title}}
										</a>

										<span class="stext-116 cl6 p-t-20">
												{{$product->price}}
											</span>
									</div>
								</li>

								@endforeach

							</ul>
						</div>



					</div>
				</div>
			</div>
		</div>
	</section>

@endsection