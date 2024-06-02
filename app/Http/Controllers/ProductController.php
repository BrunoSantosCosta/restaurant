<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductAddon;
use App\Models\ProductCategory;
use App\Models\ProductsProductsAddon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Lista - Produtos";
        $products = Product::all();
        $productsAddons = ProductAddon::all();

        return view('product.index', compact('page_title', 'products', 'productsAddons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Criar Produto";

        $productCategories = ProductCategory::all();
        $productsAddons = ProductAddon::all();
        return view('product.create', compact('page_title', 'productCategories', 'productsAddons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file('thumbnail');
        $path = 'uploads/product/';

        $priceString = $request->price;
        $price = str_replace(["R$\u{A0}", " "], "", $priceString);

        $discountPriceString = $request->discount_price;
        $discountPrice = str_replace(["R$\u{A0}", " "], "", $discountPriceString);

        if ($discountPrice != "") {
            $price = (float) str_replace(",", ".", str_replace(".", "", $price));
            $discountPrice = (float) str_replace(",", ".", str_replace(".", "", $discountPrice));
            if ($discountPrice >= $price) {
                return back()->with('toast_error', 'O preço com desconto não pode ser maior ou igual ao preço');
            }
        }

        if ($request->hasFile('thumbnail')) {
            if ($request->file('thumbnail')->getError() === UPLOAD_ERR_INI_SIZE) {
                $maxFileSize = ini_get('upload_max_filesize');
                return back()->with('toast_error', 'Tamanho do arquivo excedido. O tamanho máximo permitido é: ' . $maxFileSize);
            }
        }

        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png',
            'description' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);

        $product = Product::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'thumbnail' => uploadImage($image, $path),
            'description' => $request->description,
            'price' => $price,
            'discount_price' => $discountprice,
            'status' => $request->status
        ]);

        if ($request->request->has('addons')) {
            foreach ($request->request->all()['addons'] as $addon) {
                ProductsProductsAddon::create([
                    'id_product' => $product->id,
                    'id_addon' => $addon
                ]);
            }
        }

        return redirect()->route('product.index')->with('toast_success', 'Produto Adicionado com Sucesso!');
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
        $productCategories = ProductCategory::all();
        $product = Product::find($product->id);
        $addons = ProductAddon::all();

        $productAddons = ProductsProductsAddon::where('id_product', $product->id)->pluck('id_addon')->toArray();

        return view('product.edit', compact('page_title', 'product', 'productCategories', 'addons', 'productAddons'));
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
        $string = $request->price;
        $price = str_replace(["R$\u{A0}", " "], "", $string);


        $discountPriceString = $request->discount_price;
        $discountPrice = str_replace(["R$\u{A0}", " "], "", $discountPriceString);

        if ($discountPrice != "") {
            $price = (float) str_replace(",", ".", str_replace(".", "", $price));
            $discountPrice = (float) str_replace(",", ".", str_replace(".", "", $discountPrice));

            if ($discountPrice >= $price) {
                return  back()->with('toast_error', 'O preço com desconto não pode ser maior ou igual ao preço');
            }
        }

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
            'price' => $price,
            'discount_price' => $discountPrice,
            'status' => $request->status,
        ]);

        $product = Product::findOrFail($product->id);
        $productAddons = $request->input('addons', []);

        $currentAddons = ProductsProductsAddon::where('id_product', $product->id)->pluck('id_addon')->toArray();

        $removedAddons = array_diff($currentAddons, $productAddons);
        ProductsProductsAddon::where('id_product', $product->id)->whereIn('id_addon', $removedAddons)->delete();

        $newAddons = array_diff($productAddons, $currentAddons);
        foreach ($newAddons as $addonId) {
            ProductsProductsAddon::create([
                'id_product' => $product->id,
                'id_addon' => $addonId
            ]);
        }

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
