<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Car;
use App\Models\CarHistory;
use App\Models\Error;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    const MODEL = Car::class;

    use HelperTrait;

    public function check_create()
    {
        $cars = Car::get();
        $errors_data = Error::get();
        return view('admin.cars.check-create', compact('cars', 'errors_data'));
    }



    public function check(Request $request)
    {
        $id = $request->car_id;
        $errors_id = $request->error_ids;
        $other_error = $request->other_error ? explode('+', $request->other_error) : [];

        if ($errors_id) {
            $errors_data = Error::whereIn('id', $errors_id)->pluck('details')->toArray();
        } elseif ($other_error) {
            $errors_data = [];
        } else {
            $errors_data = Error::pluck('details')->toArray();
        }

        $search_text = array_merge($errors_data, $other_error);
        $errors_text = $search_text ? implode(' + ', $search_text) : null;

        $car = Car::with('historys')->find($id);

        $historys = CarHistory::where('car_id', $id)->where(function ($q) use ($search_text) {
            foreach ($search_text as $key => $value) {
                $q->orWhere('details', 'like', '%' . $value . '%');
            }
        })->get();

        return view('admin.cars.check', compact('car', 'historys', 'errors_text'));
    }

    public function carHistory($id)
    {
        $car_id = $id;
        $errors_data = Error::get();
        $historys = CarHistory::with('error', 'car')->where('car_id', $id)->get();

        return view('admin.cars.car_history', compact('historys', 'car_id', 'errors_data'));
    }

    public function carHistoryStore(Request $request)
    {
        $request->validate([
            'details' => 'nullable|required_without:error_ids',
            'error_ids' => 'nullable|required_without:details'
        ], [
            'details.max' => 'لا يمكن ان يكون سابق الصرف اكثر من 150 حرف'
        ]);
        $inputs = $request->except('error_ids');

        $error_ids = is_array($request->error_ids) ? $request->error_ids : json_decode($request->error_ids);
        $errors_data = Error::whereIn('id', $error_ids)->get();

        $details = ($request->details ? $request->details . ' + ' : '') . implode(' + ',  $errors_data->pluck('details')->toArray());

        $inputs['details'] = $details;
        $data = CarHistory::create($inputs);

        return back()->with('message', 'تم الاضافه  ينجاح');
    }

    public function delete($id)
    {
        $model = CarHistory::class;
        $data = $model::where('id', $id);

        $data->delete();

        return back()->with('message', 'تم المسح  ينجاح');
    }
}
