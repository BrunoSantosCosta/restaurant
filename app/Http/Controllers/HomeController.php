<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Product;
use App\Models\ProductAddon;
use App\Models\ProductCategory;
use App\Models\ProductHighlight;
use App\Models\ProductsProductsAddon;
use App\Models\Staff;
use App\Models\Style;
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


        $styles = Style::all();

        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }


        return view('home', compact('sliders', 'products', 'productCategories', 'highlightedProducts', 'general_color'));
    }

    public function product()
    {
        $starters = Product::orderBy('price')->limit(4)->get();
        $products = Product::orderBy('id', 'DESC')->get();

        return view('frontend.product', compact('products', 'starters'));
    }

    public function gallery($type)
    {
        $styles = Style::all();
        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }

        if ($type == 'photo') {
            $data = Gallery::where('type', 0)->get();
            return view('frontend.gallery.photo', compact('data', 'general_color'));
        }

        $data = Gallery::where('type', 1)->get();

        return view('frontend.gallery.video', compact('data', 'general_color'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        $categories = BlogCategory::all();
        $latests = Blog::latest('created_at')->limit(3)->get();

        $styles = Style::all();
        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }

        return view('frontend.blog.index', compact('blogs', 'latests', 'categories', 'general_color'));
    }

    public function getBlog(Blog $blog)
    {

        $categories = BlogCategory::all();
        $latests = Blog::latest('created_at')->limit(3)->get();
        $styles = Style::all();
        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }
        return view('frontend.blog.details', compact('blog', 'latests', 'categories', 'general_color'));
    }


    public function getCategoryBlogs($id)
    {
        $blogs = Blog::where('category_id', $id)->get();
        $categories = BlogCategory::all();
        $latests = Blog::latest('created_at')->limit(3)->get();
        $styles = Style::all();
        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }


        return view('frontend.blog.index', compact('blogs', 'latests', 'categories', 'general_color'));
    }

    public function about()
    {
        $services = Service::limit(4)->get();
        $staffs = Staff::all();
        $styles = Style::all();
        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }

        return view('frontend.about', compact('services', 'staffs', 'general_color'));
    }

    public function contact()
    {
        $styles = Style::all();
        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }
        return view('frontend.contact', compact('general_color'));
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
        $styles = Style::all();
        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }

        return view('frontend.productCategories.index', compact('productCategories', 'general_color'));
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

        $styles = Style::all();
        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }

        return view('frontend.productDetails.index', compact('product', 'addons', 'general_color'));
    }

}
