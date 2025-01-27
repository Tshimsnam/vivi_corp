<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePartenaireRequest;
use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partenaires = Partenaire::all();

        return view('admin.partenaire', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.partenaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $partenaire = new Partenaire();
        $filename = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('assets/uploads/partenaires/'), $filename);
        }
        $partenaire->title = $request->input('title');
        if ($filename !== null) {
            $partenaire->image = $filename;
        }

        $partenaire->save();

        return redirect('partenaires')->with('status', 'Partenaires add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partenaire $partenaire)
    {
        return view('admin.show.partenaire', compact('partenaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partenaire $partenaire)
    {
        return view('admin.edit.partenaire', compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartenaireRequest $request, Partenaire $partenaire)
    {
        $filename = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('assets/uploads/partenaires/'), $filename);
        }
        $partenaire->title = $request->input('title');
        if ($filename !== null) {
            $partenaire->image = $filename;
        }

        $partenaire->save();

        return redirect('partenaires')->with('status', 'Partenaire Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partenaire $partenaire)
    {
        $partenaire->delete();

        return redirect('partenaires')->with('status', 'Partenaires deleted successfully');
    }
}
