<?php

namespace App\Http\Controllers;

use App\Models\Style;
use Illuminate\Http\Request;

class StylesController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $page_title = "Cores Principais";

        $styles = Style::all();

        foreach ($styles as $item) {
            $general_color = $item->general_color;
        }

        return view('styles.index', compact('page_title', 'styles', 'general_color'));

    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $this->deletePrevious();
        Style::create([
            'general_color' => $request->color,
        ]);

        return redirect()->route('styles.index')->with('toast_success', 'Estilo Atualizado com Sucesso!');
    }

    public function deletePrevious()
    {
        $colors = Style::all();

        foreach ($colors as $color) {
            $color->delete();
        }

    }

    // Display the specified resource.
    public function show($id)
    {
        $style = Style::findOrFail($id);
        return response()->json($style);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'general_color' => 'sometimes|required|string|max:255',
        ]);

        $style = Style::findOrFail($id);
        $style->update($request->all());

        return response()->json($style);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $style = Style::findOrFail($id);
        $style->delete();

        return response()->json(null, 204);
    }
}
