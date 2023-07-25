<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderByDesc('id')->paginate(5);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'image' => 'required',
        ]);

        $img_name = 'categories' . rand() . '-' . time() . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        Category::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => $img_name,
        ]);
        return redirect()->route('admin.categories.index')->with('msg', 'Category created successfully')->with('type', 'success');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $img_name = $category->image;

        if ($request->hasFile('image')) {
            File::delete(public_path('uploads/' . $category->image));
            $img_name = 'categories' . rand() . '-' . time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
        }

        $category->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => $img_name,
        ]);
        return redirect()->route('admin.categories.index')->with('msg', 'Category updated successfully')->with('type', 'info');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        File::delete(public_path('uploads/' . $category->image));
        $category->delete();
        return redirect()->route('admin.categories.index')->with('msg', 'Category deleted successfully')->with('type', 'danger');
    }
}
