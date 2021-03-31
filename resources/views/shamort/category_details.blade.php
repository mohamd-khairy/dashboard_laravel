@extends('layouts.master')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{url('/')}}">الرئيسية</a></li>
      <li>تفاصيل النوع</li>
    </ol>
    <h2>{{$category->name}}</h2>

  </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">

  <div class="container services ">

    <div class="row mb-3">
      @foreach($products as $product)
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up">
        <a href="{{url('product/'.$product->id)}}">
          <div class="icon-box text-center">
            <h4 class="title" style="color: gold;">{{$product->name}}</h4>
            <div class=" icon-img">
              <img src="{{asset($product->image)}}" alt="">
            </div>
            <p class="description">{{$product->description}}</p>
          </div>
        </a>
      </div>
      @endforeach
 
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
<!-- End Portfolio Details Section -->

@endsection