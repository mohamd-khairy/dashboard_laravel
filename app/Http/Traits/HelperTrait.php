<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;

trait HelperTrait
{
    public function index()
    {
        $model = self::MODEL;
        $model_en = $model::model_en;
        $model_ar = $model::model_ar;
        $fields = $model::fields;
        $data = $model::get();

        return view('admin.general.index')->with([
            'model_en' => $model_en,
            'model_ar' => $model_ar,
            'fields' => $fields,
            'data' => $data
        ]);
    }

    public function show($id)
    {
        $model = self::MODEL;
        $model_en = $model::model_en;
        $model_ar = $model::model_ar;
        $fields = $model::fields;
        $data = $model::find($id);

        return view('admin.general.show')->with([
            'model_en' => $model_en,
            'model_ar' => $model_ar,
            'fields' => $fields,
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $model = self::MODEL;
        $model_en = $model::model_en;
        $model_ar = $model::model_ar;
        $fields = $model::fields;
        $data = $model::find($id);

        return view('admin.general.edit')->with([
            'model_en' => $model_en,
            'model_ar' => $model_ar,
            'fields' => $fields,
            'data' => $data
        ]);
    }

    public function update($id, Request $request)
    {
        $model = self::MODEL;
        $data = $model::find($id);

        $inputs = $request->all();
        if (isset($request->image)) {
            $inputs['image'] = $this->upload_image($request->image);
            unlink(public_path($data->image));
        }
        $data->update($inputs);

        return back()->with('data', $data)->with('message', 'تم التعديل  ينجاح');
    }

    public function create()
    {
        $model = self::MODEL;
        $model_en = $model::model_en;
        $model_ar = $model::model_ar;
        $fields = $model::fields;
        return view('admin.general.create')->with([
            'model_en' => $model_en,
            'model_ar' => $model_ar,
            'fields' => $fields
        ]);
    }

    public function store(Request $request)
    {
        $model = self::MODEL;
        $inputs = $request->all();
        if (isset($request->image)) {
            $inputs['image'] = $this->upload_image($request->file('image'));
        }
        $data = $model::create($inputs);

        return back()->with('data', $data)->with('message', 'تم الاضافه  ينجاح');
    }

    public function destroy($id)
    {
        $model = self::MODEL;
        $data = $model::find($id);

        $data->delete();

        return back()->with('data', $data)->with('message', 'تم المسح  ينجاح');
    }

    function upload_image($image)
    {
        if (!$image) {
            return null;
        }

        $image_name = time() . rand(1, 100000) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);

        return 'images/' . $image_name;
    }
}
