@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">
    <h1 class="heading_title">عرض كل الصفحات</h1>

    <div class="wrap">
        <table class="table table-bordered">
            <tr>
                <td>#</td>
                <td>الصورة</td>
                <td>اسم الصفحه</td>
                <td>الرابط</td>
                <td>الترتيب</td>
                <td>الصفحه الاساسيه</td>
                <td>التحكم</td>
            </tr>
            @foreach($pages as $page)
            <tr>
                <td>{{$page->id}}</td>
                <td><span class="{{$page->icon}}"></span></td>
                <td>{{$page->name}}</td>
                <td>{{$page->url}}</td>
                <td>{{$page->order}}</td>
                <td>{{ app()->getLocale() == 'en' ? $page->parentPage->name ?? 'main' : $page->parentPage->name ?? 'رئيسيه'}}</td>

                <td>
                    <a href="{{ route('admin.edit_page', $page->id) }}" class="btn btn-primary">
                        <div class="glyphicon glyphicon-pencil"></div>
                    </a>

                    <form action="{{ route('admin.delete_page', $page->id) }}" method="POST" onsubmit="return confirm('هل انت متاكد؟');" style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">
                            <div class='glyphicon glyphicon-remove'></div>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $pages->links() !!}
    </div>
</div>

@endsection