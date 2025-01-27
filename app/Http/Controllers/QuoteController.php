<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::all();

        return view('admin.quote', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.quote');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $quote = new Quote();
        $quote->title = $validatedData['title'];
        $quote->content = $validatedData['content'];

        $quote->save();

        // Redirection vers la page de confirmation
        return redirect('quotes')->with('success', 'Entry has been added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        return view('admin.show.quote', compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        return view('admin.edit.quote', compact('quote'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quote $quote)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $quote->title = $validatedData['title'];
        $quote->content = $validatedData['content'];

        $quote->save();

        return redirect('quotes')->with('success', 'Entry has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        $quote->delete();

        return redirect('quotes')->with('success', 'Entry has been deleted successfully.');
    }
}
