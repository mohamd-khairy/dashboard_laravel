@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">

    <h1 class="heading_title">إضافة صفحه جديد</h1>

    <div class="form">
        <form class="form-horizontal" method="post" action="{{route('admin.add_page')}}">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم الصفحه عربي</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="اسم الصفحه عربي">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">صوره الصفحه</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="صوره الصفحه">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> رابط الصفحه</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="url" name="url" placeholder="رابط الصفحه">
                </div>
            </div>
            <div class="form-group">
                <label for="input3" class="col-sm-2 control-label bring_right left_text"> ترتيب الصفحه</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="order" name="order" placeholder="ترتيب الصحفه">
                </div>
            </div>
            <div class="form-group">
                <label for="input4" class="col-sm-2 control-label bring_right left_text"> الصفحه الاساسيه</label>
                <div class="col-sm-10">
                    <select class="form-control" style="height: unset;" name="parent">
                        <option value="0">صفحه اساسيه</option>
                        @foreach(\App\Models\Page::where('parent',0)->get() as $page)
                        <option value="{{$page->id}}">{{ $page->name}}</option>
                        @endforeach
                    </select>
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