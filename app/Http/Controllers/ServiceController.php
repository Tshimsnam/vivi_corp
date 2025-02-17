<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return view('admin.service', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Service();
        // Validation des données soumises par le formulaire
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

         // Traiter l'image téléversée
         if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public'); // Enregistre l'image dans le dossier `storage/app/public/services`
        } else {
            $imagePath = null;
        }
        // Création d'une nouvelle instance du modèle avec les données validées
        $service->$imagePath = $request->input('image');
        $service->title = $request->input('title');
        $service->content = $request->input('content');
        $service->save();

        // Redirection vers la page de confirmation
        return redirect('services')->with('success', 'Service créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect('services')->with('status', 'Services deleted successfully');
    }
}
