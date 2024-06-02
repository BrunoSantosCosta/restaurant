<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Product;
use App\Models\ProductAddon;
use App\Models\ProductCategory;
use App\Models\ProductHighlight;
use App\Models\ProductsProductsAddon;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Blog;
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
        $productHighlights = ProductHighlight::all();
        $highlightedProducts = Product::all();

        $products = [];

        foreach ($productHighlights as $highlight) {
            foreach ($highlightedProducts as $product) {
                if ($product->id == $highlight->id_product) {
                    $products[] = $product;
                }
            }
        }

        $productCategories = ProductCategory::all();
        return view('home', compact('sliders', 'products', 'productCategories', 'highlightedProducts'));
    }

    public function product()
    {
        $starters = Product::orderBy('price')->limit(4)->get();
        $products = Product::orderBy('id', 'DESC')->get();

        return view('frontend.product', compact('products', 'starters'));
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
        $categories = BlogCategory::all();
        $latests = Blog::latest('created_at')->limit(3)->get();

        return view('frontend.blog.index', compact('blogs', 'latests', 'categories'));
    }

    public function getBlog(Blog $blog)
    {

        $categories = BlogCategory::all();
        $latests = Blog::latest('created_at')->limit(3)->get();

        return view('frontend.blog.details', compact('blog', 'latests', 'categories'));
    }


    public function getCategoryBlogs($id)
    {
        $blogs = Blog::where('category_id', $id)->get();
        $categories = BlogCategory::all();
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

    public function getProductCategories()
    {
        $productCategories = ProductCategory::with('products')->get();
        return view('frontend.productCategories.index', compact('productCategories'));
    }

    public function getProductDetails($id)
    {
        $product = Product::findOrFail($id);
        $addons =  ProductsProductsAddon::where('id_product', $product->id)->get();
        $addonIds = $addons->pluck('id_addon');

        foreach ($addons as $addon) {
            $idAddon = $addon->id_addon;
        }

        $addonIds = ProductsProductsAddon::where('id_product', $product->id)->pluck('id_addon');

        $addons = ProductAddon::whereIn('id', $addonIds)->get();
        return view('frontend.productDetails.index', compact('product', 'addons'));
    }

}
