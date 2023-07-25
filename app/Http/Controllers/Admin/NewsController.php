<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $newses = News::orderByDesc('id')->paginate(5);
        return view('admin.newses.index', compact('newses'));
    }

    public function create()
    {
        return view('admin.newses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
            'image' => 'required',
        ]);

        $img_name = 'news' . rand() . '-' . time() . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        News::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'image' => $img_name,
        ]);
        return redirect()->route('admin.newses.index')->with('msg', 'News created successfully')->with('type', 'success');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.newses.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
        ]);

        $news = News::findOrFail($id);
        $img_name = $news->image;

        if ($request->hasFile('image')) {
            File::delete(public_path('uploads/' . $news->image));
            $img_name = 'news' . rand() . '-' . time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
        }

        $news->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'image' => $img_name,
        ]);
        return redirect()->route('admin.newses.index')->with('msg', 'News updated successfully')->with('type', 'info');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        File::delete(public_path('uploads/' . $news->image));
        $news->delete();
        return redirect()->route('admin.newses.index')->with('msg', 'News deleted successfully')->with('type', 'danger');
    }
}
