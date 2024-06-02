<?php

namespace App\Http\Controllers;

use App\Models\ProductHighlight;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductHighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Produtos Destaques";

        $products = Product::all();
        $products = $products->filter(function($product) {
            return $product->status == "1";
        });

        $productHighlights = ProductHighlight::all();

        $highlightedProducts = [];
        foreach ($productHighlights as $highlight) {
            $product = $products->firstWhere('id', $highlight->id_product);
            if ($product) {
                $highlightedProducts[] = $product;
            }
        }

        $products = $products->reject(function($product) use ($highlightedProducts) {
            return in_array($product, $highlightedProducts);
        });

        return view('productHighlight.index', compact('page_title', 'highlightedProducts', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->deletePrevious();
        $selectedItems = json_decode($request->input('selectedItems'), true);
        foreach ($selectedItems as $item) {
            $index = array_search($item, $selectedItems);
            ProductHighlight::create([
                'position' => $index,
                'id_product' =>  intval($item),
            ]);
        }

        return redirect()->route('productHighlight.index')->with('toast_success', 'Produtos Salvos com Sucesso!');
    }

    public function deletePrevious()
    {
        $productHighlights = ProductHighlight::all();

        foreach ($productHighlights as $highlight) {
            $highlight->delete();
        }

    }

    public function update(Request $request)
    {
        dd($request);
        $selectedItems = json_decode($request->input('selectedItems'), true);

        foreach ($selectedItems as $item) {

            ProductHighlight::update([
                    'id_product' =>  intval($item),
                ]);
            }

        return redirect()->route('productHighlight.index')->with('toast_success', 'Produtos Salvos com Sucesso!');
    }
}
