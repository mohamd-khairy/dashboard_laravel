@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">
    <h1 class="heading_title">عرض الكل </h1>

    <div class="wrap">
        <table class="table table-bordered">
            <tr>
                <td>#</td>
                @foreach($fields as $en => $ar)
                <td style="width: 20%;">{{$ar}}</td>
                @endforeach
                <td>التحكم</td>
            </tr>
            @foreach($data as $type)
            <tr>
                <td>{{$type->id}}</td>

                @foreach($fields as $en => $ar)
                @if($en == 'description')
                <td style="width: 40%;">{{$type->$en}}</td>
                @elseif($en == 'image')
                <td style="width: 10%;">
                    <img src="{{asset($type->$en)}}" style="width: 100px;">
                </td>
                @else
                <td style="width: 10%;">{{$type->$en}}</td>
                @endif
                @endforeach

                <td>
                    <a href="{{ route('admin.'.$model_en.'.edit', $type->id) }}" class="btn btn-primary">
                        <div class="glyphicon glyphicon-pencil"></div>
                    </a>

                    <form action="{{ route('admin.'.$model_en.'.destroy', $type->id) }}" method="POST" onsubmit="return confirm('هل انت متاكد؟');" style="display: inline-block;">
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

    </div>
</div>

@endsection