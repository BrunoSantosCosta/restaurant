<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Lista - Blog";
        $blogs = Blog::all();

        return view('blog.index', compact('page_title', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Criar Blog";
        $categories = BlogCategory::all();

        return view('blog.create', compact('page_title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png',
            'description' => 'required',
            'status' => 'required',
        ]);

        $image = $request->file('thumbnail');
        $path = 'uploads/blog/';

        Blog::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'thumbnail' => uploadImage($image, $path),
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'status' => $request->status,
        ]);

        return redirect()->route('blog.index')->with('toast_success', 'Blog Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $page_title = "Editar Blog";
        $categories = BlogCategory::all();

        return view('blog.edit', compact('page_title', 'categories', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if ($request->hasFile('thumbnail')) {
            if ($request->file('thumbnail')->getError() === UPLOAD_ERR_INI_SIZE) {
                $maxFileSize = ini_get('upload_max_filesize');
                return redirect()->route('blog.index')->with('toast_error', 'Tamanho do arquivo excedido. O tamanho máximo permitido é: ' . $maxFileSize);
            }
        }

        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'thumbnail' => 'mimes:jpg,jpeg,png',
            'description' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $path = '/uploads/blog/';
            $old_path = public_path($blog->thumbnail);
        }

        $blog->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'thumbnail' => $request->hasFile('thumbnail') ? uploadImage($image, $path, $old_path):$blog->thumbnail,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'status' => $request->status,
        ]);

        return redirect()->route('blog.index')->with('toast_success', 'Blog Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if (file_exists(public_path($blog->thumbnail))) {
            unlink(public_path($blog->thumbnail));
        }
        $blog->delete();
        return back()->with('toast_success', 'Blog Deleted Successfully.');
    }
}
