<?php

namespace App\Http\Controllers;

use App\Models\News;
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


    public function create(){
        return view('pages.news.create');
    }

    public function store(Request $request){

        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
            'content' => 'required',
        ]);

        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('news', $filename, 'public');

        $data = $request->all();
        $data['image'] = $filename;

        $data['slug'] = Str::slug($request->title);

        News::create($data);

        return redirect()->route('news.index')->with('success', 'News created successfully.');

    }

    public function edit($id){
        $news = News::findOrFail($id);
        return view('pages.news.edit', compact('news'));
    }

    public function update(Request $request, News $news){


        // $data = $request->all();

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
