<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = PortfolioCategory::all();
        return view('admin.portfolios.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'portfolio_category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:12048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolios', 'public');
        }

        Portfolio::create([
            'portfolio_category_id' => $request->portfolio_category_id,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.portfolios.index')
                         ->with('success', 'Portfolio created successfully');
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = PortfolioCategory::all();
        return view('admin.portfolios.edit', compact('portfolio', 'categories'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'portfolio_category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:12048',
        ]);

        $imagePath = $portfolio->image;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolios', 'public');
        }

        $portfolio->update([
            'portfolio_category_id' => $request->portfolio_category_id,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.portfolios.index')
                         ->with('success', 'Portfolio updated successfully');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')
                         ->with('success', 'Portfolio deleted successfully');
    }
}
