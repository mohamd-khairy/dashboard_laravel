@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">
    <h1 class="heading_title">عرض الكل </h1>

    <div class="wrap">
        <table class="table table-bordered text-center">
            <tr>
                <td>#</td>
                <td>{{$data->id ?? ''}}</td>
            </tr>
            @foreach($fields as $en => $ar)
                @if($en == 'relation')
                <tr>
                    <td>{{$ar['coulmn_ar']}}</td>
                    <td>{{$ar['model']::find($data[$ar['coulmn_en']])->name ?? null}}</td>
                </tr>
                @elseif($en == 'description')
                <tr>
                    <td>{{$ar}}</td>
                    <td>{{$data->$en ?? ''}}</td>
                </tr>
                @elseif($en == 'image')
                <tr>
                    <td>{{$ar}}</td>
                    <td> <img src="{{asset($data->$en ?? '')}}" style="width: 100px;">
                    </td>
                </tr>
                @else
                <tr>
                    <td>{{$ar}}</td>
                    <td>{{$data->$en ?? ''}}</td>
                </tr>
                @endif
            @endforeach
        </table>

    </div>
</div>

@endsection