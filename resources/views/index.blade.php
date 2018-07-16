@extends('master')
@section('title')
	Home
@endsection

@section('content')

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">

				@foreach($sliders as $slider)
				<div class="item-slick1" style="background-image: url(images/{{$slider->pic}}.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									{{$slider->title}}
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									{{$slider->description}}
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="{{$slider->link}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach



			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">

				@foreach($banners as $banner)
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/{{$banner->pic}}.jpg" alt="IMG-BANNER">

						<a href="{{$banner->link}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									{{$banner->title}}
								</span>

								<span class="block1-info stext-102 trans-04">
									{{$banner->season}}
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>

				</div>
				@endforeach

			</div>
		</div>
	</div>


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>
					@foreach($categories as $category)

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$category->title}}">
						{{$category->title}}
					</button>

					@endforeach

				</div>



			</div>

			<div class="row isotope-grid">

				@foreach($products as $product)



				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item @foreach($product->category as $category) {{$category->title}} @endforeach">

					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/{{$product->main_pic}}.jpg" alt="IMG-PRODUCT">

							<a href="{{ route('product' , [$product->slug]) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								 View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{$product->title}}
								</a>

								<span class="stext-105 cl3">
									{{$product->showedprice}}
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				@endforeach



			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="{{route('shop')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					See More
				</a>
			</div>
		</div>
	</section>

	<!-- Blog -->
	<section class="sec-blog bg0 p-t-0 m-t--100 p-b-50">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Our Blogs
				</h3>
			</div>

			<div class="row">

				@foreach($blogs as $blog)
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="{{'/blog_detail/'.$blog->slug}}">
								<img src="images/{{$blog->pic}}.jpg" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span>
									<span class="cl4">
										Added
									</span>

									<span class="cl4">
										on
									</span>

									<span class="cl5">
										{{$blog->created_at}}
									</span>
								</span>
							</div>

							<h4 class="p-b-12">
								<a href="{{'/blog_detail/'.$blog->slug}}" class="mtext-101 cl2 hov-cl1 trans-04">
									{{$blog->title}}
								</a>
							</h4>

							<p class="stext-108 cl6">
								{{$blog->description}}
							</p>
						</div>
					</div>
				</div>
				@endforeach


			</div>
		</div>
	</section>



@endsection