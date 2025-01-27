<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateInfoRequest;
use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Info::all();

        return view('admin.info', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.info');
    }

     /**
      * Store a newly created resource in storage.
      */
     public function store(Request $request)
     {
         $info = new Info();

         $info->number = $request->input('number');
         $info->street = $request->input('street');
         $info->neighborhood = $request->input('neighborhood');
         $info->township = $request->input('township');
         $info->facebook = $request->input('facebook');
         $info->twitter = $request->input('twitter');
         $info->linkedin = $request->input('linkedin');
         $info->whatsapp = $request->input('whatsapp');

         // Vérifiez si la variable $filename est définie avant de l'utiliser pour définir la valeur de la colonne "image"

         $info->save();

         return redirect('infos')->with('status', 'agent$agent Added Successfully');
     }

     public function show(Info $info)
     {
         return view('admin.show.info', compact('info'));
     }

     public function edit(Info $info)
     {
         return view('admin.edit.info', compact('info'));
     }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInfoRequest $request, Info $info)
    {
        $info->number = $request->input('number');
        $info->street = $request->input('street');
        $info->neighborhood = $request->input('neighborhood');
        $info->township = $request->input('township');
        $info->facebook = $request->input('facebook');
        $info->twitter = $request->input('twitter');
        $info->linkedin = $request->input('linkedin');
        $info->whatsapp = $request->input('whatsapp');

        // Vérifiez si la variable $filename est définie avant de l'utiliser pour définir la valeur de la colonne "image"

        $info->save();

        return redirect('infos')->with('status', 'Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Info $info)
    {
        $info->delete();

        return redirect('infos')->with('status', 'Info deleted successfully');
    }
}
