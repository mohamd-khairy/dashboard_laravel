@extends('layouts.admin')
@section('content')
    <!--/End system bath-->
    <div class="page_content">
        <h1 class="heading_title">عرض الكل</h1>

        <div class="form">
            <form class="form-horizontal" method="get" action="{{ route('admin.cars.check') }}">
                @csrf
                <div class="form-group">

                    <div class="col-md-12" style="margin-top: 20px">
                        <label for="input0" class=" control-label bring_right left_text">السيارة </label>
                        <select class="js-example-theme-single js-states form-control" name="car_id" style="width:100%" required>
                            @foreach ($cars as $car)
                                <option value="{{ $car->id }}">{{ $car->police_number }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12" style="margin-top: 20px">
                        <label for="input0" class=" control-label bring_right left_text">الاعطال </label>
                        <select name="error_ids[]" class="js-example-basic-multiple js-states form-control" id="id_label_multiple" multiple="multiple">
                            @foreach ($errors_data as $error)
                                <option value="{{ $error->id }}">{{ $error->details }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- <div class="col-md-12" style="margin-top: 20px">
                        <label for="input0" class=" control-label bring_right left_text"> عطل اخر</label>
                        <input type="text" class="form-control" id="other_error" name="other_error"
                            placeholder="اكتب عطل اخر">
                    </div> --}}

                </div>
                <div class="form-group text-center">
                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-danger">إضافة</button>
                        <button type="reset" class="btn btn-default">مسح الحقول</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
