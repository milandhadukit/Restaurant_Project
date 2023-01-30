<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodCategory;
use App\Models\ItemFood;
use DataTables;
use File;

class ItemFoodController extends Controller
{
    //
    public function addFoodItems()
    {
        $optionCategory = FoodCategory::get();
        return view('Admin.item_add', compact('optionCategory'));
    }

    public function storeFoodItems(Request $request)
    {
        $request->validate([
            'name' => 'required||regex:/^[a-zA-Z ]+$/',
            'descreption' => 'required',
            'price' => 'required|numeric|min:0|digits_between:1,12',
            'discount_price' => 'nullable|numeric|min:0|digits_between:1,12',
            'image' => 'required|mimes:jpeg,png,jpg',
            'slug' => 'required|unique:item_food',
        ]);
        try {
            $imageName =
                time() . '.' . $request->image->getClientOriginalExtension();
            $image = $request->image->move(
                public_path('/ItemFoodImage'),
                $imageName
            );

            $foodItem = new ItemFood();
            $foodItem->name = $request->name;
            $foodItem->descreption = $request->descreption;
            $foodItem->price = $request->price;
            $foodItem->discount_price = $request->discount_price;
            $foodItem->slug = $request->slug;
            $foodItem->category_id = $request->category_id;
            $foodItem->quantity = $request->quantity;

            $foodItem->image = $imageName;
            // dd($foodItem);
            $foodItem->save();
            return redirect()
                ->back()
                ->with('message', ' Add Successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function viewFoodItemsDatatable(Request $request)
    {
        if ($request->ajax()) {
            $data = ItemFood::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn =
                        '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>
                               <a href="pegawai/edit/' .
                        $row->id .
                        '" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</a>
                               <a href="pegawai/delete/' .
                        $row->id .
                        '" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a>
                               ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('Admin.View_databaleItemFood');
    }
    public function viewFoodItems()
    {
        $foodItem = ItemFood::paginate(10);
     
        return view('Admin.itemFood_view', compact('foodItem'));
    }
    public function deleteFoodItems($slug)
    {
        $foodItem = ItemFood::where('slug', $slug)->first();

        $path = public_path('ItemFoodImage/' . $foodItem->image);
        if (File::exists($path)) {
            unlink($path);
        }
        $foodItem->delete();

        return redirect()
            ->back()
            ->with('message', ' Delete Successfully');
    }

    public function editFoodItems($slug)
    {
        $foodItem = ItemFood::where('slug', $slug)->first();
        $optionCategory = FoodCategory::get();
        return view('Admin.editItem_food', compact('foodItem','optionCategory'));
    }

    public function updateFoodItems(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required||regex:/^[a-zA-Z ]+$/',
            'descreption' => 'required',
            'price' => 'required|numeric|min:0|digits_between:1,12',
            'discount_price' => 'nullable|numeric|min:0|digits_between:1,12',
            'image' => 'required|mimes:jpeg,png,jpg',
            'slug' => 'required|unique:item_food',
        ]);
        try {
            $imageName =
                time() . '.' . $request->image->getClientOriginalExtension();
            $image = $request->image->move(
                public_path('/ItemFoodImage'),
                $imageName
            );
            $foodItem = ItemFood::where('slug', $slug)->first();
            $foodItem->name = $request->name;
            $foodItem->descreption = $request->descreption;
            $foodItem->price = $request->price;
            $foodItem->discount_price = $request->discount_price;
            $foodItem->slug = $request->slug;
            $foodItem->category_id = $request->category_id;
            $foodItem->quantity = $request->quantity;
            $foodItem->image = $imageName;

            $path = public_path('ItemFoodImage/' . $foodItem->image);
            if (File::exists($path)) {
                unlink($path);
            }

            // dd($foodItem);
            $foodItem->update();
            return redirect()
                ->back()
                ->with('message', ' Update Successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
