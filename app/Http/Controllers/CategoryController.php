<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::query()
        ->when($request->input('name'), function($query, $name){
            return $query->where('name', 'like', '%'.$name.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('pages.category.index', compact('categories'));
    }


    public function create(){
        return view('pages.category.create');
    }

    public function store(Request $request){

        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);



        $data = $request->all();

        $data['slug'] = Str::slug($request->title);

        Category::create($data);

        return redirect()->route('category.index')->with('success', 'Category created successfully.');

    }





 public function destroy(Category $category){

        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }

}
