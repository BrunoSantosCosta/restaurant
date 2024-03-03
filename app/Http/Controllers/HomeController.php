<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Menu;
use App\Models\Gallery;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use App\Models\General;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $menus = Menu::orderBy('id', 'DESC')->limit(8)->get();
        return view('home', compact('sliders', 'menus'));
    }

    public function menu()
    {
        $starters = Menu::orderBy('price')->limit(4)->get();
        $menus = Menu::orderBy('id', 'DESC')->get();

        return view('frontend.menu', compact('menus', 'starters'));
    }

    public function gallery($type)
    {
        if ($type == 'photo') {
            $data = Gallery::where('type', 0)->get();
            return view('frontend.gallery.photo', compact('data'));
        }

        $data = Gallery::where('type', 1)->get();
        return view('frontend.gallery.video', compact('data'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        $categories = Category::where('type', 1)->get();
        $latests = Blog::latest('created_at')->limit(3)->get();

        return view('frontend.blog.index', compact('blogs', 'latests', 'categories'));
    }

    public function getBlog(Blog $blog)
    {

        $categories = Category::where('type', 1)->get();
        $latests = Blog::latest('created_at')->limit(3)->get();

        return view('frontend.blog.details', compact('blog', 'latests', 'categories'));
    }


    public function getCategoryBlogs($id)
    {
        $blogs = Blog::where('category_id', $id)->get();
        $categories = Category::where('type', 1)->get();
        $latests = Blog::latest('created_at')->limit(3)->get();

        return view('frontend.blog.index', compact('blogs', 'latests', 'categories'));
    }

    public function about()
    {
        $services = Service::limit(4)->get();
        $staffs = Staff::all();

        return view('frontend.about', compact('services', 'staffs'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function mail(Request $request)
    {
        $general = General::latest('created_at')->first();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to($general->email)->send(new Contact($data));

        return back()->with('success', 'Your message has sent!');
    }
}
