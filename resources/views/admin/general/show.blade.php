@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">
    <h1 class="heading_title">عرض الكل </h1>

    <div class="wrap">
        <table class="table table-bordered">
            <tr>
                <td>#</td>
                <td>{{$data->id}}</td>
            </tr>
            @foreach($fields as $en => $ar)
                @if($en == 'description')
                <tr>
                    <td>{{$ar}}</td>
                    <td>{{$data->$en}}</td>
                </tr>
                @elseif($en == 'image')
                <tr>
                    <td>{{$ar}}</td>
                    <td> <img src="{{asset($data->$en)}}" style="width: 100px;">
                    </td>
                </tr>
                @else
                <tr>
                    <td>{{$ar}}</td>
                    <td>{{$data->$en}}</td>
                </tr>
                @endif
            @endforeach
        </table>

    </div>
</div>

@endsection