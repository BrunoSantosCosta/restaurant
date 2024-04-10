<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title =  'Lista - Categorias dos Blog';
        $blogCategories = BlogCategory::all();
        return view('blogCategory.index', compact('page_title', 'blogCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title =  'Criar Categoria de Blog';

        return view('blogCategory.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('thumbnail')) {
            if ($request->file('thumbnail')->getError() === UPLOAD_ERR_INI_SIZE) {
                $maxFileSize = ini_get('upload_max_filesize');
                return redirect()->route('blogCategory.index')->with('toast_error', 'Tamanho do arquivo excedido. O tamanho máximo permitido é: ' . $maxFileSize);
            }
        }

        $request->validate([
            'name' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $path = '/uploads/blog-category/';
        }

        BlogCategory::create([
            'name' => $request->name,
            'thumbnail' => $request->hasFile('thumbnail') ? uploadImage($image, $path):'',
        ]);

        return redirect()->route('blogCategory.index')->with('toast_success', 'Categoria criada Com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
        $page_title = 'Editar Categoria';
        return view('blogCategory.edit', compact('page_title', 'blogCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        if ($request->hasFile('thumbnail')) {
            if ($request->file('thumbnail')->getError() === UPLOAD_ERR_INI_SIZE) {
                $maxFileSize = ini_get('upload_max_filesize');
                return redirect()->route('blogCategory.index')->with('toast_error', 'Tamanho do arquivo excedido. O tamanho máximo permitido é: ' . $maxFileSize);
            }

        }

        $request->validate([
            'name' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $path = '/uploads/category/';
            $old_path = public_path($blogCategory->thumbnail);
        }

        $blogCategory->update([
            'name' => $request->name,
            'thumbnail' => $request->hasFile('thumbnail') ? uploadImage($image, $path, $old_path): $blogCategory->thumbnail,
        ]);

        return redirect(route('blogCategory.index'))->with('toast_success', 'Categoria Atualizada Com Sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {
        if (file_exists(public_path($blogCategory->thumbnail))) {
            unlink(public_path($blogCategory->thumbnail));
        }

        $blogCategory->delete();

        return back()->with('toast_success', 'Categoria Excluída Com Sucesso!');
    }
}
