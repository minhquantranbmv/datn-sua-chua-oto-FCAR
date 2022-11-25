<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryComponent;
use App\Models\Component;
use App\Models\ComponentCarConpany;
use App\Models\CarCompany;
use Illuminate\Http\Request;

class ComponentController extends Controller
{

    public function index()
    {
        $components = Component::all();
        return view('admin.components.index', compact('components'));
    }





    // public function remove($id)
    // {
    //     $model = ComponentController::find($id);
    //     if (!empty($model->image)) {
    //         $imgPath = str_replace('storage/', '', $model->image);
    //         Storage::delete($imgPath);
    //     }
    //     $model->delete();
    //     return redirect(route('detail-product.index'));
    // }
    public function addForm()
    {
        $categories = CategoryComponent::all();
        $car_company = CarCompany::all();
        return view('admin.components.add', compact('categories', 'car_company'));
    }
    public function saveAdd(Request $request)
    {
        // dd($request->all());

        $model =  Component::create($request->all());
        // if ($request->hasFile('anh')) {
        //     $imgPath = $request->file('anh')->store('products');
        //     $imgPath = str_replace('public/', 'storage/', $imgPath);
        //     $request->merge(['image' => $imgPath]);
        // }
        // dd($model); 
        foreach ($request->car_company_id as $c) {
            ComponentCarConpany::create(['component_id' => $model->id, 'car_conpany_id' => $c, 'active' => 1]);
        }
        // $model->fill($request->all());
        // $model->save();
        return redirect(route('component.index'));
    }

    // public function editForm($id)
    // {
    //     $pro = ComponentController::find($id);
    //     if (!$pro) {
    //         return back();
    //     }
    //     return view(
    //         'admin.detail-products.edit',
    //         compact('pro')
    //     );
    // }
    // public function saveEdit(ComponentControllerRequest $request, $id)
    // {
    //     // $request la gui du lieu len
    //     // dd($request->name)
    //     $model = ComponentController::find($id);
    //     Storage::delete($model->image);
    //     if (!$model) {
    //         return back();
    //     }
    //     if ($request->hasFile('anh')) {
    //         Storage::delete($model->image);
    //         $imgPath = $request->file('anh')->store('products');
    //         $imgPath = str_replace('public/', 'storage/', $imgPath);
    //         $request->merge(['image' => $imgPath]);
    //     }

    //     $model->fill($request->all());
    //     $model->save();
    //     return redirect(route('detail-product.index'));
    // }
}