<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Agent;
use App\Models\Partenaire;
use App\Models\Quote;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $agents = Agent::all();

        $services = Service::all();

        $testimonials = Testimonial::all();

        $about = About::latest()->first();

        $partenaires = Partenaire::all();

        $quote = Quote::latest()->first();

        return view('user.index', compact('agents', 'testimonials', 'about', 'services', 'quote', 'partenaires'));
    }

    public function apropos()
    {
        $agents = Agent::all();

        $about = About::latest()->first();

        $partenaires = Partenaire::all();

        return view('user.about', compact('agents', 'about', 'partenaires'));
    }

    public function service()
    {
        $services = Service::all();

        $testimonials = Testimonial::all();

        $about = About::latest()->first();

        $partenaires = Partenaire::all();

        return view('user.service', compact('services', 'partenaires', 'testimonials', 'about'));
    }

    public function gallery()
    {
        $about = About::latest()->first();
        $services = Service::all();

        $partenaires = Partenaire::all();
        return view('user.gallery', compact('partenaires', 'about', 'services'));
    }

    public function contact()
    {
        $about = About::latest()->first();

        $partenaires = Partenaire::all();

        return view('user.contact', compact('partenaires', 'about'));
    }
}
