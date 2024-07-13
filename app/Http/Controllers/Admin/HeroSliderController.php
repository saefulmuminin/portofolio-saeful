<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlider;
use Illuminate\Http\Request;

class HeroSliderController extends Controller
{
    public function index()
    {
        $heroSliders = HeroSlider::all();
        return view('admin.hero_sliders.index', compact('heroSliders'));
    }

    public function create()
    {
        return view('admin.hero_sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'background_image' => 'required|image',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url|max:255',
        ]);

        $path = $request->file('background_image')->store('hero_sliders', 'public');

        HeroSlider::create([
            'background_image' => $path,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
        ]);

        return redirect()->route('admin.hero_sliders.index')->with('success', 'Hero Slider created successfully.');
    }

    public function edit(HeroSlider $heroSlider)
    {
        return view('admin.hero_sliders.edit', compact('heroSlider'));
    }

    public function update(Request $request, HeroSlider $heroSlider)
    {
        $request->validate([
            'background_image' => 'nullable|image',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('background_image')) {
            $path = $request->file('background_image')->store('hero_sliders', 'public');
            $heroSlider->background_image = $path;
        }

        $heroSlider->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
        ]);

        return redirect()->route('admin.hero_sliders.index')->with('success', 'Hero Slider updated successfully.');
    }

    public function destroy(HeroSlider $heroSlider)
    {
        $heroSlider->delete();
        return redirect()->route('admin.hero_sliders.index')->with('success', 'Hero Slider deleted successfully.');
    }
}

