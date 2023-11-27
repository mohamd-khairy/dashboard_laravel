@extends('layouts.admin')
@section('content')
    <!--/End system bath-->
    <div class="page_content" style="margin-right: 20px">
        <h1 class="heading_title">عرض الكل </h1>

        <div class="wrap">

            @if ($model_en == 'cars')
                <form class="form-horizontal" method="get" action="">
                    @csrf
                    <div class="form-group">

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-danger">بحث</button>
                        </div>

                        <div class="col-md-8">
                            <input type="text" value="{{ request('search') }}" class="form-control" id="search"
                                name="search" placeholder="السيارة">
                        </div>
                    </div>
                </form>
            @endif

            <table class="table table-bordered text-center m-4">
                <tr>
                    <td>#</td>
                    @foreach ($fields as $en => $ar)
                        @if ($en == 'relation')
                            <td>{{ $ar['coulmn_ar'] ?? null }}</td>
                        @else
                            <td>{{ $ar }}</td>
                        @endif
                    @endforeach
                    <td>التحكم</td>
                </tr>
                @foreach ($data as $type)
                    <tr>
                        <td>{{ $type->id ?? '' }}</td>
                        @foreach ($fields as $en => $ar)
                            @if ($en == 'relation')
                                <td>{{ $ar['model']::find($type[$ar['coulmn_en']])->name ?? null }}</td>
                            @elseif($en == 'description')
                                <td>{{ $type->$en }}</td>
                            @elseif($en == 'image')
                                <td><img src="{{ asset($type->$en) }}" style="width: 100px;"></td>
                            @else
                                <td>{{ $type->$en }}</td>
                            @endif
                        @endforeach

                        <td>

                            @if ($model_en == 'cars')
                                <a href="{{ route('admin.' . $model_en . '.car_history', $type->id) }}" style="margin: 1px"
                                    class=" btn btn-success">
                                    {{-- <div class="glyphicon glyphicon-pencil"></div> --}}
                                    سابق صرف ({{ $type->historys_count }})
                                </a>
                            @endif
                            <a href="{{ route('admin.' . $model_en . '.edit', $type->id) }}" style="margin: 1px"
                                class=" btn btn-primary">
                                تعديل
                            </a>

                            <form action="{{ route('admin.' . $model_en . '.destroy', $type->id) }}" method="POST"
                                onsubmit="return confirm('هل انت متاكد؟');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" style="margin: 1px" class=" btn btn-danger">
                                    حذف
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
            <div class="text-center">
                {!! $data->links() !!}
            </div>
        </div>
    </div>
@endsection
