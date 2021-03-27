@extends('layouts.master')
@section('content')

@if($data['header'])
<!-- ======= Header Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>{{$data['header']['title']}}</h1>
        <h2>{{$data['header']['description']}}</h2>
        <div class="d-flex justify-content-center justify-content-lg-center">
          <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
          <a href="{{$data['header']['video']}}" class=" glightbox btn-watch-video"><span>شاهد الفديو</span><i class="bi bi-play-circle"></i></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{asset($data['header']['image'])}}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>
</section><!-- End Header -->
@endif

<main id="main">


  @if($data['sponser'])
  <!-- ======= sponser Section ======= -->
  <section id="cliens" class="cliens section-bg">
    <div class="container">
      <div class="row" data-aos="zoom-in">
        @foreach($data['sponser'] as $sponser)
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center shamort-img">
          <img src="{{asset($sponser->image)}}" class="img-fluid" alt="">
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End sponser Section -->
  @endif



  @if($data['about'])
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2> {{$settings->about_title ?? ''}} </h2>
        <p>{{$settings->about_sub_title ?? ''}}</p>
      </div>

      <div class="row content">
        @foreach($data['about'] as $about)
        <div class="col-lg-6">
          <p>
            {{$about->description}}
          </p>
        </div>
        @endforeach
      </div>

    </div>
  </section>
  <!-- End About Us Section -->
  @endif


  @if($data['service'])
  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2> {{$settings->service_title ?? ''}} </h2>
        <p>{{$settings->service_sub_title ?? ''}}</p>
      </div>

      <section id="icon-boxes" class="icon-boxes">
        <div class="container">
          <div class="row">
            @foreach($data['service'] as $service)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up">
              <a href="{{url('service/'.$service->id)}}">
                <div class="icon-box text-center">
                  <h4 class="title" style="color: gold;">{{$service->name}}</h4>
                  <div class=" icon-img">
                    <img src="{{asset($service->image)}}" alt="">
                  </div>
                  <p class="description">{{$service->description}}</p>
                </div>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    </div>
  </section>
  <!-- End Services Section -->
  @endif


  @if($data['product'])
  <!-- ======= product Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2> {{$settings->product_title ?? ''}} </h2>
        <p>{{$settings->product_sub_title ?? ''}}</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">كل المنتجات</li>
        @foreach($data['category'] as $category)
        <li data-filter=".filter-{{$category->id}}">{{$category->name}}</li>
        @endforeach
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($data['product'] as $product)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$product->category_id}}">
          <div class="portfolio-img"><img style="height: 300px;width:100%" src="{{asset($product->image)}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info d-flex justify-content-between">
            <div>
              <h4>{{$product->name}}</h4>
              <p>{{$product->description}}</p>
            </div>
            <div>
              <a href="{{asset($product->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$product->name}}"><i class="bx bx-plus"></i></a>
              <a href="{{url('product/'.$product->id)}}" class="details-link"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>
  <!-- End product Section -->
  @endif

</main><!-- End #main -->

@endsection