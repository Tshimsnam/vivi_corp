<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('admin.testimonial', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'image' => 'required|image',
            'testimonial' => 'required',
            'profession' => 'required',
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $validatedData['name'];
        $testimonial->lastname = $validatedData['lastname'];
        $testimonial->testimonial = $validatedData['testimonial'];
        $testimonial->profession = $validatedData['profession'];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('assets/uploads/Testimonials/'), $filename);
        }

        // Vérifiez si la variable $filename est définie avant de l'utiliser pour définir la valeur de la colonne "image"
        if ($filename !== null) {
            $testimonial->image = $filename;
        }
        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect('testimonials')->with('status', 'Agent deleted successfully');
    }
}
