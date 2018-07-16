@extends('master')
@section('title')
	Product
@endsection


@section('content')




	<!-- Product -->

<div class="bg0 m-t-23 p-b-140 m-all-80">
	<div class="container">

		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<a href="{{route('shop')}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 ">
					All Products
				</a>
				@foreach($categories as $category)

				<a href="{{route('shop',['category' => $category->title])}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 ">
					{{$category->title}}
				</a>

				@endforeach


			</div>

			<div class="flex-w flex-c-m m-tb-10">
				<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
					<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
					<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
					Filter
				</div>


				<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
					<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
					<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
					Search
				</div>

			</div>

			<!-- Search product -->
			<div class="dis-none panel-search w-full p-t-10 p-b-15">
				<div class="bor8 dis-flex p-l-15">
					<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<form method="get"  action="{{route('shop')}}">
						@csrf
					<input class="mtext-107 cl2 size-114 plh2 p-r-15" value="{{request()->input('query')}}" type="text" name="query" id="query" placeholder="Search">
					</form>
				</div>
			</div>



			<!-- Filter -->
			<div class="dis-none panel-filter w-full p-t-10">
				<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
					<div class="filter-col1 p-r-15 p-b-27">
						<div class="mtext-102 cl2 p-b-15">
							Sort By
						</div>

						<ul>
							<li class="p-b-6">
								<a href="{{route('shop')}}" class="filter-link stext-106 trans-04">
									Default
								</a>
							</li>

							<li class="p-b-6">
								<a href="{{route('shop',['category' => request()->category , 'sort'=>'new' ])}}" class="filter-link stext-106 trans-04 ">
									By Newness
								</a>
							</li>

							<li class="p-b-6">
								<a href="{{route('shop',['category' => request()->category , 'sort'=>'low_high'])}}" class="filter-link stext-106 trans-04">
									Price: Low to High
								</a>
							</li>

							<li class="p-b-6">
								<a href="{{route('shop',['category' => request()->category , 'sort' =>'high_low'])}}" class="filter-link stext-106 trans-04">
									Price: High to Low
								</a>
							</li>
						</ul>
					</div>

					<div class="filter-col2 p-r-15 p-b-27">
						<div class="mtext-102 cl2 p-b-15">
							Price
						</div>

						<ul>

							<li class="p-b-6">
								<a href="{{route('shop',['category' => request()->category,'sort'=>'low'])}}" class="filter-link stext-106 trans-04">
									$0.00 - $50.00
								</a>
							</li>

							<li class="p-b-6">
								<a href="{{route('shop',['category' => request()->category,'sort'=>'mid'])}}" class="filter-link stext-106 trans-04">
									$50.00 - $200.00
								</a>
							</li>


							<li class="p-b-6">
								<a href="{{route('shop',['category' => request()->category,'sort'=>'high'])}}" class="filter-link stext-106 trans-04">
									$200.00+
								</a>
							</li>
						</ul>
					</div>



				</div>
			</div>
		</div>


		<div class="row isotope-grid">
			@forelse($products as $product)
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-pic hov-img0">
						<img src="images/{{$product->main_pic}}.jpg" alt="IMG-PRODUCT">

						<a href="{{ '/product/'.$product->slug}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
							View
						</a>
					</div>

					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="{{ '/product/'.$product->slug}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								{{$product->title}}
							</a>

							<span class="stext-105 cl3">
									{{$product->showedprice}}
								</span>
						</div>
					</div>
				</div>
			</div>
			@empty
				<div>No items found</div>
			@endforelse
		</div>






		<!-- Load more -->
		<div class="flex-c-m flex-w w-full p-t-45">
			{{$products->appends(request()->input())->links() }}
		</div>
	</div>
</div>

@endsection