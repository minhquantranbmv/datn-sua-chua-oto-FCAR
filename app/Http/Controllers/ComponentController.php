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

    public function index(Request $request)
    {
       // $components = Component::all();
       //$CarCompany = CarCompany::all();
        $components = Component::when($request->name_component, function ($query, $name_component) {
            return $query->where('name_component', 'like', "%{$name_component}%");
        })->when($request->status, function ($query) use ($request) {
            if ($request->status == 1) {
                return $query->where('status', '=', '1');
            }
            if ($request->status == 2) {
                return $query->where('status', '=', '0');
            }
            if ($request->status == 0) {
                return $query->orderBy('created_at', 'DESC');
            }
       
        })->orderBy('status', 'DESC')->paginate(10);
        return view('admin.components.index', compact('components'));
    }





    public function remove($id)
    {
        $Component = Component::find($id);
        $Component = Component::where('id', '=', $id)->first();
        if ($Component) {
            Component::where('id', $id)->delete();
            return redirect(route('component.index'))->with('success', 'Xóa thành công');
        } else {
            return redirect(route('component.index'))->with('error', 'Không tìm thấy');
        }
    }
    public function addForm()
    {
        $categories = CategoryComponent::all();
        $car_company = CarCompany::all();
        return view('admin.components.add', compact('categories', 'car_company'));
    }
    public function saveAdd(Request $request)
    {
        $model = new Component();
        $model->fill($request->all());
        $model->save();
        return redirect(route('component.index'))->with('success', 'Thêm thành công');
    }

    public function editForm($id)
    {
        $pro = Component::find($id);
        $categories = CategoryComponent::all();
        $car_company = CarCompany::all();
        if (empty($pro)) {
            return redirect(route('component.index'))->with('error', 'Không tìm thấy danh mục');
        }
        return view(
            'admin.components.edit',
            compact('pro','categories','car_company')
        );
    }
    public function saveEdit(Request $request, $id)
    {
        $model = Component::find($id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('component.index'))->with('success', 'Sửa thành công');
    }


    public function ShowHide(Request $request, $id)
    {
        $model = Component::find($id);
        if ($model->status == 1) {
            $model['status'] = 0;
            $model->save();
            Toastr::success('Ẩn sản phẩm thành công', 'Thành công');
            return back();
        } else {
            $model['status'] = 1;
            $model->save();
            Toastr::success('Hiện sản phẩm thành công', 'Thành công');
            return back();
        }
    }
}