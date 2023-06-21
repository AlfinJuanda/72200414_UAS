<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('a');
    }

    public function processForm(Request $request)
    {
        $selectedOption = $request->input('option');
        $selectedValues = $request->input('values', []);

        return redirect()->route('b')->with(['option' => $selectedOption, 'values' => $selectedValues]);
    }

    public function showResult(Request $request)
    {
        $selectedOption = $request->input('option');

        return view('b', ['selectedOption' => $selectedOption]);
    }
}
