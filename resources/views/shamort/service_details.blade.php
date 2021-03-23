@extends('layouts.master')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{url('/')}}">الرئيسية</a></li>
      <li>تفاصيل الخدمه</li>
    </ol>
    <h2>{{$service->name}}</h2>

  </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4 m-4">

      <div class="col-lg-4">

        <div class="portfolio-description">
          <h2>{{$service->name}}</h2>
          <p>{{$service->description}}</p>
          <p>{{$service->price}} جنيه</p>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="swiper-slidesmall">
          <img src="{{asset($service->image)}}" alt="">
        </div>
      </div>
    </div>

  </div>
  <div class="container services section-bg">

    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">

          @foreach($services as $service)
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
<!-- End Portfolio Details Section -->

@endsection