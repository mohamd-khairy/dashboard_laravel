@extends('layouts.master')
@section('content')

<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>منتجاتنا</h2>
      </div>

  

      <div class="row col-md-12" data-aos="fade-up" data-aos-delay="200">
        @foreach($products as $product)
        <div class="col-md-4 card mb-4 p-2">
          <div class="portfolio-img "><img style="width: 100%;height:300px" src="{{asset($product->image)}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info d-flex justify-content-between">
            <div class="p-4">
              <h4 >{{$product->name}}</h4>
              <p >{{$product->description}}</p>
            </div>
            <div class="p-4">
              <a href="{{asset($product->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="نموذج 1"><i class="bx bx-plus"></i></a>
              <a href="{{url('product/'.$product->id)}}" class="details-link"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <p>{!! $products->links() !!}</p>
    </div>
  </section>
@endsection