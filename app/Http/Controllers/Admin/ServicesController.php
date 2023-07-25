<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::orderByDesc('id')->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.services.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'image' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $img_name = 'services' . rand() . '-' . time() . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        Service::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => $img_name,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('admin.services.index')->with('msg', 'Servise created successfully')->with('type', 'success');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $service = Service::FindOrFail($id);
        $categories = Category::all();
        return view('admin.services.edit', compact('service', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $service = Service::findOrFail($id);
        $img_name = $service->image;

        if ($request->hasFile('image')) {
            File::delete(public_path('uploads/' . $service->image));
            $img_name = 'services' . rand() . '-' . time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
        }

        $service->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => $img_name,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('admin.services.index')->with('msg', 'Services updated successfully')->with('type', 'info');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        File::delete(public_path('uploads/' . $service->image));
        $service->delete();
        return redirect()->route('admin.services.index')->with('msg', 'Service deleted successfully')->with('type', 'danger');
    }
}
