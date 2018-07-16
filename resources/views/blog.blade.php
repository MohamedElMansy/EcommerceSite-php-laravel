@extends('master')


@section('title')
	Blog
@endsection


@section('content')


<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
	<h2 class="ltext-105 cl0 txt-center">
		Blog
	</h2>
</section>

<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="{{route('home')}}" class="stext-109 cl8 hov-cl1 trans-04">
			Home
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<a href="{{route('blog')}}" class="stext-109 cl8 hov-cl1 trans-04">
			Blogs

		</a>


	</div>
</div>

<!-- Content page -->
<section class="bg0 p-t-62 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-9 p-b-80">
				<div class="p-r-45 p-r-0-lg">

					<!-- item blog -->
					@foreach($blogs as $blog)
					<div class="p-b-63">
						<a href="{{'/blog_detail/'.$blog->slug}}" class="hov-img0 how-pos5-parent">
							<img src="images/{{$blog->pic}}.jpg" alt="IMG-BLOG">

						</a>

						<div class="p-t-32">
							<h4 class="p-b-15">
								<a href="{{'/blog_detail/'.$blog->slug}}" class="ltext-108 cl2 hov-cl1 trans-04">
									{{$blog->title}}
								</a>
							</h4>

							<p class="stext-117 cl6">
								{{$blog->description}}
							</p>

							<div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
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

								<a href="{{'/blog_detail/'.$blog->slug}}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
									Continue Reading

									<i class="fa fa-long-arrow-right m-l-9"></i>
								</a>
							</div>
						</div>
					</div>
					@endforeach



					<!-- Pagination -->
					<div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
						{{ $blogs->links() }}


					</div>
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
									<img src="images/{{$product->sec_pic}}.jpg" alt="PRODUCT">
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


