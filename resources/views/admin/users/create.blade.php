@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">

    <h1 class="heading_title">إضافة مستخدم جديد</h1>

    <div class="form">
        <form class="form-horizontal" method="post" action="{{route('admin.add_user')}}">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم الاول</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('first_name')}}" class="form-control" id="first_name" name="first_name" placeholder="الاسم الاول">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم الثاني</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('second_name')}}" class="form-control" id="second_name" name="second_name" placeholder="الاسم الثاني">
                </div>
            </div>


            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم الثالث</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('third_name')}}" class="form-control" id="third_name" name="third_name" placeholder="الاسم الثالث">
                </div>
            </div>


            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم الاخير</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('last_name')}}" class="form-control" id="last_name" name="last_name" placeholder="الاسم الاخير">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> البريد الالكتروني</label>
                <div class="col-sm-10">
                    <input type="email" value="{{old('email')}}" class="form-control" id="email" name="email" placeholder=" البريد الالكتروني">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> كلمه السر </label>
                <div class="col-sm-10">
                    <input type="password" value="{{old('password')}}" class="form-control" id="password" name="password" placeholder=" كلمه السر ">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> الموبايل</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('mobile')}}" class="form-control" id="mobile" name="mobile" placeholder=" الموبايل">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> البلد</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('country')}}" class="form-control" id="country" name="country" placeholder=" البلد">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> المدينه</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('city')}}" class="form-control" id="city" name="city" placeholder=" المدينه">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> الجنس</label>
                <div class="col-sm-10">
                    <input type="radio" {{old('gender') == 1 ? 'checked' : ''}} id="gender" name="gender" placeholder="الجنس" value="1"> ذكر
                    <input type="radio" {{old('gender') == 0 ? 'checked' : ''}} id="gender" name="gender" placeholder="الجنس" value="0"> انثي
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-danger">إضافة</button>
                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection