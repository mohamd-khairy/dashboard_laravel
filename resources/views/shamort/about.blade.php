@extends('layouts.master')
@section('content')


<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="section-title">
      <h2> تاريخ الشركه </h2>
    </div>

    <div class="row content">
      <!-- <ul> -->
        @foreach($abouts as $about)
        <div class="col-lg-6 p-2">
          <li>{{$about->description}}</li>
        </div>
        @endforeach
      <!-- </ul> -->
    </div>
  </div>
  </div>
</section>
@endsection