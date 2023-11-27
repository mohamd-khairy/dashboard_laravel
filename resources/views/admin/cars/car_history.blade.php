@extends('layouts.admin')
@section('content')
    <!--/End system bath-->
    <div class="page_content">
        <h1 class="heading_title">عرض الكل</h1>

        <div class="form">
            <form class="form-horizontal" method="post" action="{{ route('admin.cars.carHistoryStore', $car_id) }}">
                @csrf
                <div class="form-group">

                    <div class="col-md-4">
                        <label for="input0" class=" control-label bring_right left_text"> اضافة سابق صرف اخر</label>
                        <textarea type="text" class="form-control" id="details" name="details" placeholder="اكتب سابق الصرف">{{ old('details', '') }}</textarea>
                    </div>

                    <div class="col-md-6">
                        <label for="input0" class=" control-label bring_right left_text">اختر سابق صرف </label>
                        <select class="js-example-basic-multiple2 js-states form-control" id="id_label_multiple"
                            multiple="multiple" name="error_ids[]" placeholder="اكتب سابق الصرف">
                            @foreach ($errors_data as $error)
                                <option value="{{ $error->id }}">{{ $error->details }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="input0" class=" control-label bring_right left_text">التاريخ </label>
                        <input type="date" class="form-control" id="date" name="date" required
                            placeholder="صوره الصفحه">
                    </div>

                    <input type="hidden" name="car_id" value="{{ $car_id }}">

                </div>
                <div class="form-group text-center">
                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-danger">إضافة</button>
                        <button type="reset" class="btn btn-default">مسح الحقول</button>
                    </div>
                </div>
            </form>

            <hr>

            <table class="table table-bordered mt-4" style="margin-top: 50px">
                <tr>
                    <td>#</td>
                    <td>سابق الصرف</td>
                    <td> التاريخ</td>
                    <td> السيارة</td>
                    <td>التحكم</td>
                </tr>
                @foreach ($historys as $history)
                    <tr>
                        <td>{{ $history->id ?? '-' }}</td>
                        <td>{{ $history->details ?? '-' }}</td>
                        <td>{{ $history->date ?? '' }}</td>
                        <td>{{ $history->car->police_number ?? '' }}</td>
                        <td>
                            <form action="{{ route('admin.cars.carHistoryStore.delete', $history->id) }}" method="POST"
                                onsubmit="return confirm('هل انت متاكد؟');" style="display: inline-block;">
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

            {{-- {!! $historys->links() !!} --}}
        </div>
    </div>
@endsection
