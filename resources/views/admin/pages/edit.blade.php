@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">

    <h1 class="heading_title">تعديل صفحه </h1>
    <div class="form">
        <form class="form-horizontal" method="post" action="{{route('admin.update_page')}}">
            @csrf
            <input type="hidden" value="{{$page->id}}" name="id" />
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم الصفحه عربي</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('name_en',$page->name)}}" class="form-control" id="name" name="name" placeholder="اسم الصفحه عربي">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">صوره الصفحه</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('icon',$page->icon)}}" class="form-control" id="icon" name="icon" placeholder="صوره الصفحه">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> رابط الصفحه</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('url',$page->url)}}" class="form-control" id="url" name="url" placeholder="رابط الصفحه">
                </div>
            </div>
            <div class="form-group">
                <label for="input3" class="col-sm-2 control-label bring_right left_text"> ترتيب الصفحه</label>
                <div class="col-sm-10">
                    <input type="number" value="{{old('order',$page->order)}}" class="form-control" id="order" name="order" placeholder="ترتيب الصحفه">
                </div>
            </div>
            <div class="form-group">
                <label for="input4" class="col-sm-2 control-label bring_right left_text"> الصفحه الاساسيه</label>
                <div class="col-sm-10">
                    <select class="form-control" style="height: unset;" name="parent">
                        <option value="0">صفحه اساسيه</option>
                        @foreach(\App\Models\Page::where('parent',0)->get() as $main_page)
                        <option value="{{$main_page->id}}" {{old('order',$page->parent) == $main_page->id ? 'selected' : '' }}>{{ $main_page->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-danger">تعديل</button>
                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection