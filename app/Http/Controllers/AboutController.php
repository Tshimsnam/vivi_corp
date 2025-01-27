<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();

        return view('admin.about', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'number' => 'required',
        ]);

        $about = new About();
        $about->title = $validatedData['title'];
        $about->content = $validatedData['content'];
        $about->number = $validatedData['number'];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('assets/uploads/abouts/'), $filename);
        }

        // Vérifiez si la variable $filename est définie avant de l'utiliser pour définir la valeur de la colonne "image"
        if ($filename !== null) {
            $about->image = $filename;
        }
        $about->save();

        return redirect()->route('abouts.index')->with('success', 'About created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.show.about', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.edit.about', compact('about'));
    }

/**
 * Update the specified resource in storage.
 */
/**
 * Update the specified resource in storage.
 */
public function update(Request $request, About $about)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'nullable|image',
        'number' => 'required',
    ]);

    $about->title = $validatedData['title'];
    $about->content = $validatedData['content'];
    $about->number = $validatedData['number'];

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move(public_path('assets/uploads/abouts/'), $filename);

        if ($about->image !== null) {
            unlink(public_path('assets/uploads/abouts/').$about->image);
        }

        $about->image = $filename;
    }

    $about->save();

    return redirect()->route('abouts.index')->with('success', 'About updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        if ($about->image !== null) {
            unlink(public_path('assets/uploads/abouts/').$about->image);
        }

        $about->delete();

        return redirect('abouts')->with('status', 'About deleted successfully.');
    }
}
