@extends('layouts.master')
@section('content')
<main id="main">
  <section id="contact" class="contact mt-5">
    <div class="container mt-5" data-aos="fade-up">

      <div class="section-title">
        <h2>تواصل معنا</h2>
        <p>
          يمكنك الان التواصل معنا عن طريق ملئ هذه القائمه
        </p>
      </div>

      <div class="row">

        <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="{{route('homepage.do_contact')}}" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">الاسم </label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">البريد الالكتروني</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">رقم التليفون</label>
                <input type="text" class="form-control" name="mobile" id="mobile" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">رسالتك</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">تم ارسال البيانات بنجاح</div>
            </div>
            <div class="text-center"><button type="submit">ارسل</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
</main>
@endsection