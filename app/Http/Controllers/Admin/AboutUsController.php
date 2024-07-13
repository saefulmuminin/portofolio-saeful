<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::all();
        return view('admin.about_us.index', compact('aboutUs'));
    }

    public function create()
    {
        return view('admin.about_us.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string',
            'content' => 'required|string',
        ]);

        AboutUs::create($request->all());

        return redirect()->route('admin.about_us.index')
            ->with('success', 'About Us section created successfully');
    }

    public function edit(AboutUs $aboutUs)
    {
        return view('admin.about_us.edit', compact('aboutUs'));
    }

    public function update(Request $request, AboutUs $aboutUs)
    {
        $request->validate([
            'heading' => 'required|string',
            'content' => 'required|string',
        ]);

        $aboutUs->update($request->all());

        return redirect()->route('admin.about_us.index')
            ->with('success', 'About Us section updated successfully');
    }

    public function destroy(AboutUs $aboutUs)
    {
        $aboutUs->delete();

        return redirect()->route('admin.about_us.index')
            ->with('success', 'About Us section deleted successfully');
    }
}

