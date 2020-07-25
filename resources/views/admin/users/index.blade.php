@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">
    <h1 class="heading_title">عرض كل المستخدمين</h1>

    <div class="wrap">
        <table class="table table-bordered">
            <tr>
                <td>#</td>
                <td>الاسم الاول</td>
                <td>الاسم الثاني</td>
                <td>الاسم الثالث</td>
                <td>الاسم الاخير</td>
                <td>الموبايل</td>
                <td>البلد</td>
                <td>المدينه</td>
                <td>الايميل</td>
                <td>النوع</td>
                <td>التحكم</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->second_name}}</td>
                <td>{{$user->third_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->country}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender ? 'male' : 'female'}}</td>
                <td>
                    <a href="{{ route('admin.edit_user', $user->id) }}" class="btn btn-primary">
                        <div class="glyphicon glyphicon-pencil"></div>
                    </a>

                    <form action="{{ route('admin.delete_user', $user->id) }}" method="POST" onsubmit="return confirm('هل انت متاكد؟');" style="display: inline-block;">
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

        {!! $users->links() !!}
    </div>
</div>

@endsection