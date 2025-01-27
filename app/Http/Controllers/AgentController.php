<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();

        return view('admin.agent', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.agent');
    }

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    // Validation des données
    $validatedData = $request->validate([
        'name' => 'required',
        'prenom' => 'required',
        'image' => 'required|image',
        'fonction' => 'required',
    ]);

    // Créer un nouvel agent avec les données validées
    $agent = new Agent();
    $filename = null;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move(public_path('assets/uploads/agents/'), $filename);
    }
    $agent->name = $request->input('name');
    $agent->prenom = $request->input('prenom');
    $agent->fonction = $request->input('fonction');
    $agent->facebook = $request->input('facebook');
    $agent->tweeter = $request->input('tweeter');
    $agent->linkedin = $request->input('linkedin');
    $agent->whatsapp = $request->input('whatsapp');
    if ($filename !== null) {
        $agent->image = $filename;
    }

    // Enregistrer l'agent dans la base de données
    $agent->save();

    // Redirection vers une autre page ou affichage d'un message de succès
    return redirect('/agents')->with('success', 'Agent enregistré avec succès.');
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
    public function update(Request $request, $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'image' => 'image',
            'fonction' => 'required',
        ]);

        // Trouver l'agent à mettre à jour dans la base de données
        $agent = Agent::findOrFail($id);

        // Mettre à jour les champs de l'agent avec les données validées
        $agent->name = $request->input('name');
        $agent->prenom = $request->input('prenom');
        $agent->fonction = $request->input('fonction');
        $agent->facebook = $request->input('facebook');
        $agent->tweeter = $request->input('tweeter');
        $agent->linkedin = $request->input('linkedin');
        $agent->whatsapp = $request->input('whatsapp');

        // Vérifier s'il y a une nouvelle image à télécharger
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if (!empty($agent->image)) {
                $imagePath = public_path('assets/uploads/agents/').$agent->image;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Télécharger la nouvelle image
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('assets/uploads/agents/'), $filename);

            // Mettre à jour le nom du fichier de l'image
            $agent->image = $filename;
        }

        // Enregistrer les modifications de l'agent dans la base de données
        $agent->save();

        // Redirection vers une autre page ou affichage d'un message de succès
        return redirect('/agents')->with('success', 'Agent mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Trouver l'agent à supprimer dans la base de données
        $agent = Agent::findOrFail($id);

        // Supprimer l'image associée si elle existe
        if (!empty($agent->image)) {
            $imagePath = public_path('assets/uploads/agents/').$agent->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Supprimer l'agent de la base de données
        $agent->delete();

        // Redirection vers une autre page ou affichage d'un message de succès
        return redirect('/agents')->with('success', 'Agent supprimé avec succès.');
    }
}
