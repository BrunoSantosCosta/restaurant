<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsProductsAddonController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);

        // $request->validate([
        //     'category_id' => 'required',
        //     'title' => 'required',
        //     'thumbnail' => 'required|mimes:jpg,jpeg,png',
        //     'description' => 'required',
        //     'price' => 'required',
        //     'status' => 'required',
        // ]);

        // $image = $request->file('thumbnail');
        // $path = 'uploads/product/';

        // Product::create([
        //     'category_id' => $request->category_id,
        //     'title' => $request->title,
        //     'thumbnail' => uploadImage($image, $path),
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'status' => $request->status,
        // ]);





        return redirect()->route('product.index')->with('toast_success', 'Produto Adicionado com Sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Product $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $page_title = "Editar Produto";

        return view('product.edit', compact('page_title', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('thumbnail')) {
            if ($request->file('thumbnail')->getError() === UPLOAD_ERR_INI_SIZE) {
                $maxFileSize = ini_get('upload_max_filesize');
                return redirect()->route('product.index')->with('toast_error', 'Tamanho do arquivo excedido. O tamanho máximo permitido é: ' . $maxFileSize);
            }
        }

        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'thumbnail' => 'mimes:jpg,jpeg,png',
            'description' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $path = 'uploads/product/';
            $old_path = public_path($product->thumbnail);
        }

        $product->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'thumbnail' => $request->hasFile('thumbnail') ? uploadImage($image, $path, $old_path):$product->thumbnail,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        return redirect()->route('product.index')->with('toast_success', 'Produto Atualizado com Sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (file_exists(public_path($product->thumbnail))) {
            unlink(public_path($product->thumbnail));
        }
        $product->delete();
        return back()->with('toast_success', 'Produto Excluido com Sucesso.');
    }
}
