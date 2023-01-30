<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodCategory;
use Exception;

class FoodCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addFoodCategories()
    {
        return view('Admin.addfood_Category');
    }

    public function storeFoodCategories(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'descreption' => 'required',
        ]);
        try {
            $food = new FoodCategory();
            $food->name = $request->name;
            $food->descreption = $request->descreption;
            $food->save();
            return redirect()
                ->back()
                ->with('message', ' Add Successfully');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function viewFoodCategories()
    {
        $food = FoodCategory::paginate(10);
        return view('Admin.view_categoryFood', compact('food'));
    }
    public function deleteFoodCategories($id)
    {
        $foodId = FoodCategory::find($id);
        $foodId->delete();
        return redirect()
            ->back()
            ->with('message', ' Delete Successfully');
    }
    public function editFoodCategories($id)
    {
        $foodId = FoodCategory::find($id);
        return view('Admin.editFood_category', compact('foodId'));
    }
    public function updateFoodCategories(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'descreption' => 'required',
        ]);
        try {
            $food = FoodCategory::find($id);
            $food->name = $request->name;
            $food->descreption = $request->descreption;
            $food->save();
            return redirect()
                ->back()
                ->with('message', ' Update Successfully');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
