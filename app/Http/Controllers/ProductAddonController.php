<?php

namespace App\Http\Controllers;

use App\Models\ProductAddon;
use Illuminate\Http\Request;

class ProductAddonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title =  'Lista - Adicionais de Produto';
        $productAddons = ProductAddon::all();
        return view('productAddon.index', compact('page_title', 'productAddons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title =  'Criar Adicional';

        return view('productAddon.create', compact('page_title'));
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
            'name' => 'required',
            'price' => 'required',
        ]);
        $string = $request->price;
        $price = str_replace(["R$\u{A0}", "."], "", $string);
        $price = str_replace(",", ".", $price);
        $price = (float) $price;

        if ($price > 999.99) {
            return redirect()->route('productAddon.create')->with('toast_error', 'Valor do adicional não pode passar de R$ 999,99!');
        }
        ProductAddon::create([
            'name' => $request->name,
            'price' => $price,
        ]);

        return redirect()->route('productAddon.index')->with('toast_success', 'Adicional criado Com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAddon $productAddon)
    {

        $productAddon->delete();
        return back()->with('toast_success', 'Produto Excluido com Sucesso.');
    }
}
