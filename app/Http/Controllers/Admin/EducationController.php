<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('admin.educations.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.educations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'degree' => 'required|string|max:255',
            'description' => 'required|string',
            'university' => 'required|string|max:255',
            'graduation_year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        Education::create($request->all());

        return redirect()->route('admin.educations.index')
            ->with('success', 'Education record created successfully.');
    }

    public function edit(Education $education)
    {
        return view('admin.educations.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $request->validate([
            'degree' => 'required|string|max:255',
            'description' => 'required|string',
            'university' => 'required|string|max:255',
            'graduation_year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        $education->update($request->all());

        return redirect()->route('admin.educations.index')
            ->with('success', 'Education record updated successfully.');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('admin.educations.index')
            ->with('success', 'Education record deleted successfully.');
    }
}
