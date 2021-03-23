@extends('layouts.master')
@section('content')
<div class="container services  mt-5">

  <section id="icon-boxes" class="icon-boxes">
    <div class="container">

      <div class="section-title">
        <h2>خدماتنا </h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">

        @foreach($services as $service)
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-2 mb-lg-0 aos-init aos-animate" data-aos="fade-up">
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

      <p class="text-center"> {!! $services->links() !!} </p>

    </div>

  </section>
</div>
@endsection