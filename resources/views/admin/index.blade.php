@extends('layouts.admin')
@section('content')
    <!--/End system bath-->
    <div class="page_content">
        <div class="page_content">
            <div class="home_statics text-center">
                <h1 class="heading_title">احصائيات عامة للموقع</h1>

                <div style="background-color: #00adbc">
                    <span class="bring_right glyphicon glyphicon-home"></span>

                    <h3>عدد السيارات</h3>

                    <p class="h4">{{ $data['cars'] ?? 0 }}</p>
                </div>

                <div style="background-color: #2ecc71">
                    <span class="bring_right glyphicon glyphicon-calendar"></span>

                    <h3> عدد الأعطال</h3>

                    <p class="h4">{{ $data['errors_data'] ?? 0 }}</p>
                </div>

                {{-- 
               
                <div style="background-color: #00adbc">
                    <span class="bring_right glyphicon glyphicon-user"></span>

                    <h3> العملاء</h3>

                    <p class="h4">{{$data['sponsers'] ?? 0}}</p>
                </div>
                <div style="background-color: #f39c12">
                    <span class="bring_right glyphicon glyphicon-pencil"></span>

                    <h3> الانواع</h3>

                    <p class="h4">{{$data['category'] ?? 0}}</p>
                </div>
                <div style="background-color: #2ecc71">
                    <span class="bring_right glyphicon glyphicon-phone-alt"></span>

                    <h3>التواصل</h3>

                    <p class="h4">{{$data['contact'] ?? 0}}</p>
                </div> --}}
            </div>
            <div class="quick_links text-center">
                <h1 class="heading_title">الوصول السريع</h1>

                <a href="{{ url('/cars') }}" style="background-color: green">
                    <h4> السيارات</h4>
                </a>

                <a href="{{ url('/cars/create') }}" style="background-color: #c0392b">
                    <h4>إضافة سيارة</h4>
                </a>
                <a href="{{ url('/errors') }}" style="background-color: #2980b9">
                    <h4>الأعطال</h4>
                </a>
                <a href="{{ url('/errors/create') }}" style="background-color: #8e44ad">
                    <h4>إضافة عطل</h4>
                </a>
                {{-- <a href="{{route('admin.product.create')}}" style="background-color: #d35400">
                    <h4>إضافة منتج</h4>
                </a>
                <a href="{{route('admin.service.create')}}" style="background-color: #2c3e50">
                    <h4>إضافة خدمه</h4>
                </a> --}}
            </div>

        </div>
    </div>
@endsection
