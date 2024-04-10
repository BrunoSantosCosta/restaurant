<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title =  'Lista - Categorias de Produto';
        $productCategories = ProductCategory::all();
        return view('productCategory.index', compact('page_title', 'productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title =  'Criar categoria';

        return view('productCategory.create', compact('page_title'));
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
                return redirect()->route('productCategory.index')->with('toast_error', 'Tamanho do arquivo excedido. O tamanho máximo permitido é: ' . $maxFileSize);
            }
        }

        $request->validate([
            'name' => 'required',
            'thumbnail' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $path = '/uploads/product-category/';
        }

        ProductCategory::create([
            'name' => $request->name,
            'thumbnail' => $request->hasFile('thumbnail') ? uploadImage($image, $path):'',

        ]);

        return redirect()->route('productCategory.index')->with('toast_success', 'Categoria criada Com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        $page_title = 'Editar Categoria';
        return view('productCategory.edit', compact('page_title', 'productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        if ($request->hasFile('thumbnail')) {
            if ($request->file('thumbnail')->getError() === UPLOAD_ERR_INI_SIZE) {
                $maxFileSize = ini_get('upload_max_filesize');
                return redirect()->route('productCategory.index')->with('toast_error', 'Tamanho do arquivo excedido. O tamanho máximo permitido é: ' . $maxFileSize);
            }
        }

        $request->validate([
            'name' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $path = '/uploads/product-category/';
            $old_path = public_path($productCategory->thumbnail);
        }


        $productCategory->update([
            'name' => $request->name,
            'thumbnail' => $request->hasFile('thumbnail') ? uploadImage($image, $path, $old_path): $productCategory->thumbnail,
        ]);

        return redirect(route('productCategory.index'))->with('toast_success', 'Categoria Atualizada Com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {

            try {
                $productCategory->delete();
                if (file_exists(public_path($productCategory->thumbnail))) {
                    unlink(public_path($productCategory->thumbnail));
                }
            } catch (\Throwable $th) {
                if ($th->getCode()  == '23000') {
                    return back()->with('toast_error', 'Você Possuí Produto(s) vinculado(s) na Categoria');
                }

                return back()->with('toast_error', 'Erro Ao Excluir Categoria');
            }

        return back()->with('toast_success', 'Categoria Excluída Com Sucesso!');
    }
}
