@extends('layouts.frontend')

@section('content')
<section id="billboard" class="position-relative overflow-hidden bg-light-blue">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex align-items-center">
                <div class="col-md-6">
                  <div class="banner-content">
                    <h1 class="display-2 text-uppercase text-dark pb-5">Your Products Are Great.</h1>
                    <a href="{{route('frontend.sanpham')}}" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="image-holder">
                    <img src="{{ asset('public/frontend/images/banner-image.png') }}" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-wrap align-items-center">
                <div class="col-md-6">
                  <div class="banner-content">
                    <h1 class="display-2 text-uppercase text-dark pb-5">Technology Hack You Won't Get</h1>
                    <a href="{{ route ('frontend.sanpham') }}" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="image-holder">
                    <img src="{{ asset('public/frontend/images/banner-image.png') }}" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-icon swiper-arrow swiper-arrow-prev">
        <svg class="chevron-left">
          <use xlink:href="#chevron-left" />
        </svg>
      </div>
      <div class="swiper-icon swiper-arrow swiper-arrow-next">
        <svg class="chevron-right">
          <use xlink:href="#chevron-right" />
        </svg>
      </div>
    </section>
    <section id="company-services" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="cart-outline">
                  <use xlink:href="#cart-outline" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Free delivery</h3>
                <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="quality">
                  <use xlink:href="#quality" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Quality guarantee</h3>
                <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="price-tag">
                  <use xlink:href="#price-tag" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Daily offers</h3>
                <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="shield-plus">
                  <use xlink:href="#shield-plus" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">100% secure payment</h3>
                <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
      @foreach($loaisanpham as $lsp)
			<section class="container pt-3 pb-5">
				<div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
					<h2 class="h3 mb-0 pt-3 me-2">{{ $lsp->tenloai }}</h2>
					<div class="pt-3">
						<a class="btn btn-outline-accent btn-sm" href="{{ route('frontend.sanpham.phanloai', ['tenloai_slug' => $lsp->tenloai_slug]) }}">
							Xem tất cả<i class="ci-arrow-right ms-1 me-n1"></i>
						</a>
					</div>
				</div>
        <div class="row">          
				@foreach($lsp->SanPham->take(4) as $sp)
        <div class="col-lg-3 col-md-6 col-12">
						<div class="single-product" style="border: 1pt solid #ccc; border-radius:10px" >
							<a class="product-image" href="{{ route('frontend.sanpham.chitiet', ['tenloai_slug' => $lsp->tenloai_slug, 'tensanpham_slug' => $sp->tensanpham_slug]) }}">
								<img src="{{ env('APP_URL') . '/storage/app/' . $sp->hinhanh  }}" width="250px" height="250px"/>
							</a>
							<div class="product-info">
								<a class="product-meta d-block fs-xs pb-1" href="  {{ route('frontend.sanpham.phanloai', ['tenloai_slug' => $lsp->tenloai_slug]) }}"style="font-size: 10pt; font-weight:bold">{{ $lsp->tenloai }}</a>
								<h3 class="title fs-sm">
									<a class ="product_name" href="{{ route('frontend.sanpham.chitiet', ['tenloai_slug' => $lsp->tenloai_slug, 'tensanpham_slug' => $sp->tensanpham_slug]) }}" style="font-size: 15pt; font-weight:bold">{{ $sp->tensanpham }}</a>
								</h3>
								<div class="d-flex justify-content-between">
									<div class="product-price">
										<span class="text-accent">{{ number_format($sp->dongia, 0, ',', '.') }}<small>đ</small></span>
									</div>
									<div class="star-rating">
										<i class="star-rating-icon ci-star-filled active"></i>
										<i class="star-rating-icon ci-star-filled active"></i>
										<i class="star-rating-icon ci-star-filled active"></i>
										<i class="star-rating-icon ci-star-filled active"></i>
										<i class="star-rating-icon ci-star"></i>
									</div>
								</div>
							</div>
							<div class="card-body card-body-hidden">
								<a class="btn btn-primary btn-sm d-block w-100 mb-2" href="{{ route('frontend.giohang.them', ['tensanpham_slug' => $sp->tensanpham_slug]) }}">
                <i class="bi bi-cart-plus-fill"></i> Thêm vào giỏ hàng
								</a>
							</div>
						</div>
						<hr class="d-sm-none">
					</div>
					@endforeach
				</div>
			</section>
		@endforeach
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    <section id="yearly-sale" class="bg-light-blue mt-5 padding-xlarg overflow-hidden no-padding-top mb-4" style="background-image: url('{{ asset('public/frontend/images/single-image1.png') }}');background-position: right; background-repeat: no-repeat;">
      <div class="row d-flex flex-wrap align-items-center">
        <div class="col-md-6 col-sm-12">
          <div class="text-content offset-4 padding-medium">
            <h3>10% off</h3>
            <h2 class="display-2 pb-5 text-uppercase text-dark">New year sale</h2>
            <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Sale</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 ">
          
        </div>
      </div>
    </section>
@endsection