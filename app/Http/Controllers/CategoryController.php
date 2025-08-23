<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::with('news')
            ->when($request->input('search'), function($query, $search){
                return $query->where('name', 'like', '%'.$search.'%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('pages.category.index', compact('categories'));
    }

    public function create()
    {
        return view('pages.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Category::create($data);

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    public function destroy(Category $category)
    {
        if ($category->news()->exists()) {
            return redirect()->route('category.index')
                ->with('error', 'Category has related news, cannot delete.');
        }

        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
