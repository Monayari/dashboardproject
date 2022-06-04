<?php

namespace App\Http\Controllers\dashboard\management;

use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class categoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('management.category.index', compact('categories'));;
    }

    public function fetch(Request $request)
    {
        $category = Category::find($request->id);
        return response()->json($category);
    }

    public function create(Request $request)
    {

        if ($request->ajax()) {

            $request->validate([
                'name' => 'required',
                'enabled' => 'required'
            ]);
            $name = $request['name'];
            $enabled = $request['enabled'];
            $category = new Category();
            $category->name = $name;
            $category->category_slug = str::slug($name);
            if ($enabled == 'true')
                $enabled = 1;
            else
                $enabled = 0;
            $category->enabled = $enabled;
            $category->save();
            return response()->json($category);
        }
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            $category = Category::find($request->id);

            $column_name = $request->column_name ;
            $column_value = $request->column_value ;
            if ($column_name == 'enabled'){
                if ($column_value == 'true')
                    $column_value = 1;
                else
                    $column_value = 0;

                $category->enabled = $column_value;
            }else{
                $category->name = $column_value;
                $category->category_slug = str::slug($column_value);
            }

            $category->save();

        }
    }

    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            Category::where('id', $request['id'])->delete();
        }
    }
}
