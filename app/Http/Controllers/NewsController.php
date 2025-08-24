<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::query()
        ->when($request->input('title'), function($query, $title){
            return $query->where('title', 'like', '%'.$title.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('pages.news.index', compact('news'));
    }


    public function create()
{
    $categories = \App\Models\Category::all();
    return view('pages.news.create', compact('categories'));
}


public function store(Request $request)
{
    $request->validate([
        'title'       => 'required',
        'category_id' => 'required|exists:categories,id',
        'image'       => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
        'content'     => 'required',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $filename = 'news-' . time() . '.' . $request->image->extension();
        $path = $request->image->storeAs('news', $filename, 'public');
        $data['image'] = $filename; // Simpan hanya nama file
    }

    $data['slug'] = Str::slug($request->title);
    $data['user_id'] = auth()->id();

    News::create($data);

    return redirect()->route('news.index')->with('success', 'News created successfully.');
}



    public function edit($code){
        $news = News::with(['user', 'category'])
                ->where('code', $code)
                ->firstOrFail();

          $categories = Category::all();

        return view('pages.news.edit', compact(['news', 'categories']));
    }

public function show($code)
{
    $news = News::with(['user', 'category'])
                ->where('code', $code)
                ->firstOrFail();

    return view('pages.news.show', compact('news'));
}


    public function update(Request $request, News $news){


        // $data = $request->all();
          $data = $request->validate([
                 'title' => 'required|string|max:255',
                 'category_id' => 'required|exists:categories,id',
                 'content' => 'required|string',
                  'status' => 'required|in:pending,approved,not_approved'

            ]);

        if ($request->has('title')) {
            $data['slug'] = Str::slug($request->title);
        }

        $news->update($data);

        return redirect()->route('news.index')->with('success', 'News updated successfully.');

    }

 public function destroy(News $news){

        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }

}
