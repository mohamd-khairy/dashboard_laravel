

@extends('layouts.master')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>مرحبا</h1>
          <h2>تقدر تتابع وتشوف افضل اسعار الفراخ وافضل منتجات الطيور معانا في شمورت
            دلوقتي مع شمورت هتشوف افضل واجود الانواع</h2>
          <div class="d-flex justify-content-center justify-content-lg-center">
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
            <a href="https://www.youtube.com/watch?v=MiSSj-y649Q&ab_channel=TemryChicken"
              class=" glightbox btn-watch-video"><span>شاهد الفديو</span><i class="bi bi-play-circle"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center shamort-img">
            <img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center shamort-img">
            <img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center shamort-img">
            <img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center shamort-img">
            <img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center shamort-img">
            <img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center shamort-img">
            <img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2> تاريخ الشركه </h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
              </li>
              <li><i class="ri-check-double-line"></i> هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
              </li>
              <li><i class="ri-check-double-line"></i>هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
              </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
              هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
              هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
            </p>
            <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>خدماتنا </h2>
          <p>هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
            هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
            هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان.
          </p>
        </div>

        <section id="icon-boxes" class="icon-boxes">
          <div class="container">
    
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up">
                <div class="icon-box">
                  
                  <h4 class="title"><a href="details.html">فراخ شيش</a></h4>
                  <div class="icon-img">
                    <img src="{{asset('assets/img/portfolio-details-1.jpg')}}" alt="">
                  </div>
                  <p class="description">
                    مكان لشرح مختصر
                    مكان لشرح مختصر مكان لشرح مختصر
                  </p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                  
                  <h4 class="title"><a href="details.html">فراخ شاورما</a></h4>
                  <div class="icon-img">
                    <img src="{{asset('assets/img/portfolio-details-1.jpg')}}" alt="">
                  </div>
                  <p class="description">
                    مكان لشرح مختصر
                    مكان لشرح مختصر مكان لشرح مختصر
                  </p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  
                  <h4 class="title"><a href="details.html">صدور بانيه</a></h4>
                  <div class="icon-img">
                    <img src="{{asset('assets/img/portfolio-details-1.jpg')}}" alt="">
                  </div>
                  <p class="description">
                    مكان لشرح مختصر
                    مكان لشرح مختصر مكان لشرح مختصر
                  </p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  
                  <h4 class="title"><a href="details.html">قطع استربس</a></h4>
                  <div class="icon-img">
                    <img src="{{asset('assets/img/portfolio-details-1.jpg')}}" alt="">
                  </div>
                  <p class="description">
                    مكان لشرح مختصر
                    مكان لشرح مختصر مكان لشرح مختصر
                  </p>
                </div>
              </div>
    
            </div>
    
          </div>
        </section>
      </div>
    </section>
    <!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>منتجاتنا</h2>
          <p>
            هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
            هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان
          </p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">كل المنتجات</li>
          <li data-filter=".filter-app">مجمدات</li>
          <li data-filter=".filter-card">طازج</li>
          <li data-filter=".filter-web">بانية</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info d-flex justify-content-between">
              <div>
                <h4>نموذج 1</h4>
                <p>مكان لشرح مختصر</p>
              </div>
              <div>
                <a href="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="نموذج 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" ><i
                    class="bx bx-link"></i></a>
              </div>


            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info d-flex justify-content-between">
              <div>
                <h4>نموذج 3</h4>
                <p>مكان لشرح مختصر</p>
              </div>
              <div>
                <a href="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="نموذج 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" ><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info d-flex justify-content-between">
              <div>
                <h4>نموذج 2</h4>
                <p>مكان لشرح مختصر</p>
              </div>
              <div>
                <a href="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="نموذج 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" ><i
                    class="bx bx-link"></i></a>
              </div>


            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info d-flex justify-content-between">
              <div>
                <h4>نموذج 2</h4>
                <p>مكان لشرح مختصر</p>
              </div>
              <div>
                <a href="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="نموذج 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" ><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info d-flex justify-content-between">
              <div>
                <h4>نموذج 2</h4>
                <p>مكان لشرح مختصر</p>
              </div>
              <div>
                <a href="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="نموذج 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" ><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info d-flex justify-content-between">
              <div>
                <h4>نموذج 3</h4>
                <p>مكان لشرح مختصر</p>
              </div>
              <div>
                <a href="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="نموذج 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" >
                  <i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info d-flex justify-content-between">
              <div>
                <h4>نموذج 1</h4>
                <p>مكان لشرح مختصر</p>
              </div>
              <div>
                <a href="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="نموذج 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" >
                  <i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info d-flex justify-content-between">
              <div>
                <h4>نموذج 3</h4>
                <p>مكان لشرح مختصر</p>
              </div>
              <div>
                <a href="{{asset('assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="نموذج 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" ><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info d-flex justify-content-between">
              <div>
                <h4>نموذج 3</h4>
                <p>مكان لشرح مختصر</p>
              </div>
              <div>
                <a href="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="نموذج 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" ><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->


  </main><!-- End #main -->

 @endsection