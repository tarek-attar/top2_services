<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::orderByDesc('id')->take(4)->get();
        $services = Service::orderByDesc('id')->take(6)->offset(3)->get(); //هنا تخلي عن اول ثلاثة من خلال أوف سيت
        $slider_services = Service::orderByDesc('id')->take(3)->get(); //     وهنا قمنا بأخذ اول/احدث ثلاثة لعرضها في السلايد
        return view('site.index', compact('categories', 'services', 'slider_services'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        return view('site.category', compact('category'));
    }
}
