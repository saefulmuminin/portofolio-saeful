<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroSlider;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Certificate;  // Tambahkan model Sertifikat

class HomeController extends Controller
{
    public function index()
    {
        $heroSliders = HeroSlider::all();
        $aboutUs = AboutUs::first();
        $services = Service::all();
        $skills = Skill::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $portfolios = Portfolio::with('category')->get();
        $portfolioCategories = PortfolioCategory::all();
        $certificates = Certificate::all();  // Tambahkan ini

        return view('user.home', compact('heroSliders', 'aboutUs', 'services', 'skills', 'educations', 'experiences', 'portfolios', 'portfolioCategories', 'certificates'));
    }

    public function show($title)
    {
        $certificate = Certificate::where('title', $title)->firstOrFail(); // Sesuaikan ini
        return view('user.show', compact('certificate')); // Sesuaikan ini
    }
}
