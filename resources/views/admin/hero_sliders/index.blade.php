@extends('layouts.admin')

@section('title', 'Hero Sliders')

@section('app')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('admin.hero_sliders.create') }}" class="btn btn-primary mb-3">Add New Hero Slider</a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Hero Sliders</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Background Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($heroSliders as $heroSlider)
                                <tr>
                                    <td>{{ $heroSlider->id }}</td>
                                    <td><img src="{{ asset('storage/' . $heroSlider->background_image) }}" alt="background image" style="width: 100px;"></td>
                                    <td>{{ $heroSlider->title }}</td>
                                    <td>{{ $heroSlider->subtitle }}</td>
                                    <td>
                                        <a href="{{ route('admin.hero_sliders.edit', $heroSlider->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.hero_sliders.destroy', $heroSlider->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
